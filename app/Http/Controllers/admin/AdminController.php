<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use Auth;


class AdminController extends Controller
{
    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function login()
    {
        return view('admin.authentication.login');
    }

    public function login_post(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->withSuccess('Signed in');
        }
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin');
    }
}
