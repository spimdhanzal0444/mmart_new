<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AdminController extends Controller
{

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
        if (in_array($data['referral_code'], $userRefId)){
            $rules += ['referral_code' => 'digits:6|exists:users,referral_code'];
        }

        if ($data['referral_code'] != null){
            $rules += ['referral_code' => 'exists:users,referral_code'];
        }


        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
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

            $customer = new Customer;
            $customer->user_id = $user->id;
            $customer->save();
        }

        $update = User::find($user->id);
        $update->remember_token = Str::random('10');
        $update->update();

        return $user;
    }

    public function registration()
    {
        return view('front.user_registration');
    }

    public function registers(Request $request)
    {
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            if(User::where('username', $request->username)->first() != null){
                return redirect()->back()->with('message', 'Email or Phone already exists.');
            }
        }

        if (User::where('username', $request->username)->first() != null) {
            return redirect()->back()->with('message', 'These username already taken.');
        }

        $validator = $this->validator($request->input());

        if (!$validator->fails()){
            $user = $this->create($request->all());
            if ($user){
                return redirect("/dashboard");
            }
        }else{
            return redirect()->back()->with('message', $validator->errors());
        }
    }

    /**
     * Create a new referred id.
     *
     * @param array $data
     * @return array referredArray
     */
    public function referredCode($data){
        // referred by column
        $userRefId = User::all()->pluck('referral_code')->toArray();
        if (in_array($data['referral_code'], $userRefId)){

            //insert referred code
            $userRefCode = User::all()->pluck('referral_code');
            $refCodeMaxNumber = max($userRefCode->toArray());

            //insert referral id
            $userRefId = User::all()->pluck('referral_id');
            $refIdMaxNumber = max($userRefId->toArray());

            return [
                    'referral_id' => sprintf("%'.06d", $refIdMaxNumber+1),      // Only Count Ref ID
                    'referred_by' => sprintf("%'.06d", $data['referral_code']),         // Only ref by
                    'referral_code'=> sprintf("%'.06d", $refCodeMaxNumber+1)     // Generate ref code
            ];
        }else{
            return [
                'referred_id' => null,
                'referred_by' => null,
                'referral_code' => null,
            ];
        }
    }


    public function userLogin()
    {
        return view('front.user_registration');
    }

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];


    // login method
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        Validator::make($credentials, $this->rules);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('success', 'Login Success');
        }
        return redirect()->back()->with('error', 'This email or password do not match');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('user.login');
    }
}
