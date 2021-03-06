<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Customerledger;
use App\Models\Reservedledger;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;


class CustomerAuthenticationController extends Controller
{

    use RegistersUsers;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'username' => 'required|string',
            'password' => 'required|string|min:6|same:confirm_password',
        ];

        //Check valid referrer ID
        $userRefId = User::all()->pluck('referral_code')->toArray();
        if (in_array($data['referral_code'], $userRefId)) {
            $rules += ['referral_code' => 'digits:6|exists:users,referral_code'];
        }

        if ($data['referral_code'] != null) {
            $rules += ['referral_code' => 'exists:users,referral_code'];
        }
        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $request_data = [
                'name' => $data['name'],
                'email' => $data['email'],
                'username' => $data['username'],
                'remember_token' => Str::random('60'),
                'password' => Hash::make($data['password'])
            ];
            $user = User::create(array_merge($request_data, $this->referredCode($data)));

            // create customer
            $customer = new Customer;
            $customer->user_id = $user->id;
            $customer->save();

            $customerLedger = new Customerledger();
            $customerLedger->customer_id = $user->id;
            $customerLedger->date           = $user->created_at;
            $customerLedger->particulation  = "Initial Balance";
            $customerLedger->reason         = "initial_balance";
            $customerLedger->credit         = 0.00;
            $customerLedger->debit          = 0.00;
            $customerLedger->initial_balance = $user->balance;
            $customerLedger->save();

            $reservedLedger = new Reservedledger();
            $reservedLedger->customer_id = $user->id;
            $reservedLedger->date           = $user->created_at;
            $reservedLedger->particulation  = "Initial Balance";
            $reservedLedger->reason         = "initial_balance";
            $reservedLedger->credit         = 0.00;
            $reservedLedger->debit          = 0.00;
            $reservedLedger->initial_balance = $user->balance;
            $reservedLedger->save();
        }

        $update = User::find($user->id);
        $update->remember_token = Str::random('10');
        $update->update();

        return $user;
    }

    public function registration()
    {
        $logged = Auth::check();
        if ($logged) {
            return redirect()->route('customer.dashboard');
        } else {
            return view('front.user_registration');
        }
    }

    public function registers(Request $request)
    {
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            if (User::where('username', $request->username)->first() != null) {
                return redirect()->back()->with('message', 'Email or Phone already exists.');
            }
        }

        if (User::where('username', $request->username)->first() != null) {
            return redirect()->back()->with('message', 'These username already taken.');
        }

        $validator = $this->validator($request->input());

        if (!$validator->fails()) {
            $user = $this->create($request->all());

            $admin = User::find(1);
            $admin->referral_code = $user->referral_id;
            $admin->update();

            if ($user) {
                $this->guard()->login($user);
                return redirect()->route('customer.dashboard');
            }
        } else {
            return redirect()->back()->with('message', $validator->errors());
        }
    }

    /**
     * Create a new referred id.
     *
     * @param array $data
     * @return array referredArray
     */
    public function referredCode($data)
    {
        if ($data['referral_code']) {
            $adminRefCode = User::find(1);
            $refCodeMaxNumber = $adminRefCode->referral_code;
            return [
                'referral_id' => sprintf("%'.06d", $refCodeMaxNumber + 1),      // Only Count Ref ID
                'referral_code' => sprintf("%'.06d", $data['referral_code'])     // Generate ref code
            ];
        }
    }

    public function userLogin()
    {
        $logged = Auth::check();
        if ($logged) {
            return redirect()->route('customer.dashboard');
        } else {
            return view('front.user_registration');
        }
    }

    protected $rules = [
        'loginBy' => 'required',
        'password' => 'required',
    ];


    // login method
    public function authenticate(Request $request)
    {
        $credentials = $request->only('loginBy', 'password');
        Validator::make($credentials, $this->rules);

        $user = DB::table('users')
            ->where('username', $request->loginBy)
            ->orWhere('phone', $request->loginBy)
            ->orWhere('email', $request->loginBy)
            ->orderBy('id', 'DESC')
            ->first();

//        if (Hash::check($request->password, $user->password) == true) {
        if ($user && Hash::check($request->password, $user->password)) {
            if ($user->user_type == 'customer'){
                Auth::loginUsingId($user->id);
                if (Auth::check()) {
                    return redirect()->route('customer.dashboard')->with('success', 'Welcome back to your dashboard.');
                } else {
                    return redirect()->back()->with('error', 'This credentials does not match');
                }
            }else{
                return redirect()->back()->with('error', 'This credentials does not match');
            }
        } else {
            return redirect()->back()->with('error', 'This credentials does not match');
        }
    }


    public function customerLogout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
