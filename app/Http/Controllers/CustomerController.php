<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function profileIndex()
    {
        return view('admin.customer.customer-dashboard');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $customers = Customer::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $user_ids = User::where('user_type', 'customer')->where(function ($user) use ($sort_search) {
                $user->where('name', 'like', '%' . $sort_search . '%')->orWhere('email', 'like', '%' . $sort_search . '%')->orWhere('phone', 'like', '%' . $sort_search . '%')->orWhere('username', 'like', '%' . $sort_search . '%')->orWhere('referral_id', 'like', '%' . $sort_search . '%');
            })->pluck('id')->toArray();
            $customers = $customers->where(function ($customer) use ($user_ids) {
                $customer->whereIn('user_id', $user_ids);
            });
        }
        $customers = $customers->paginate(15);
        return view('admin.customer.index', compact('customers', 'sort_search'));
    }

    public function changepassword(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->password = bcrypt($request->password);
        $user->update();
        flash(translate('Password changed successfully!'))->success();
        return back();
    }
}
