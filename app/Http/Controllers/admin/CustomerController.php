<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function profileIndex()
    {
        return view('admin.customer.customer-dashboard');
    }


    public function index(){
        return view('admin.customer.index');
    }
}
