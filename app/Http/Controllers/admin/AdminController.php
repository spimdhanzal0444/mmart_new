<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function adminLogin()
    {
        return view('admin.authentication.login');
    }

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];


    // login method
    public function adminAuthenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        Validator::make($credentials, $this->rules);

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with('success', 'Login Success');
//            return redirect()->intended('/secured/dashboard')->with('success', 'Login Success');
        }
        return redirect()->back()->with('error', 'This email or password do not match');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.logout');
    }
}
