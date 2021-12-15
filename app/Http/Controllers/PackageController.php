<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Package;
use Schema;
use Illuminate\Support\Str;
use File;


class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
//        $package = Package::orderBy('id', 'asc')->get();
        return view('admin.marketing.package.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function packake_wise_member()
    {

        $package = Package::orderBy('id', 'asc')->get();
        return view('backend.marketing.package.member', compact('package'));
    }

    public function packake_wise_member_list(Request $request, $id)
    {
        $sort_search = null;
        $user = User::where('customer_package_id', decrypt($id));
        $userCount = count($user->get());
        if ($request->has('search')) {
            $sort_search = $request->search;
            $user = $user->where('name', 'like', '%' . $sort_search . '%')->orWhere('email', 'like', '%' . $sort_search . '%')->orWhere('phone', 'like', '%' . $sort_search . '%')->orWhere('username', 'like', '%' . $sort_search . '%')->orWhere('referral_id', 'like', '%' . $sort_search . '%');
        }

        $user = $user->paginate(15);
        return view('backend.marketing.package.member_list', compact('user', 'sort_search', 'userCount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $package = new Package();
        $package->package_name = $request->package_name;
        $package->package_type = $request->package_type;
        $package->amount = $request->amount;
        $package->first_generation = $request->first_generation;
        $package->second_generation = $request->second_generation;
        $package->third_generation = $request->third_generation;
        $package->fourth_generation = $request->fourth_generation;
        $package->fifth_generation = $request->fifth_generation;
        $package->bonus = $request->bonus;
        $package->insurance = $request->insurance;
        $package->increative_gift = $request->increative_gift;
        $package->validity = $request->validity;
        $package->status = $request->status;
        $package->must_ref = $request->must_ref;
        $package->must_days = $request->must_days;
        $package->wlimit = $request->wlimit;
        $package->tlimit = $request->tlimit;
        $package->wmin = $request->wmin;
        $package->tmin = $request->tmin;

        if ($request->hasFile('package_banner')) {
            $file = $request->file('package_banner');
            $name = $file->getClientOriginalName();
            $filename = Str::lower($request->package_name) . '_' . $name;
            $file->move('public/uploads/package', $filename);
            $package->package_banner = $filename;
        }
        $package->save();

        flash(translate('Package has been created successfully'))->success();
        return redirect()->route('package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('backend.marketing.package.edit', compact('package'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $package = Package::where('id', $request->id)->first();
        $package->package_name = $request->package_name;
        $package->package_type = $request->package_type;
        $package->amount = $request->amount;
        $package->first_generation = $request->first_generation;
        $package->second_generation = $request->second_generation;
        $package->third_generation = $request->third_generation;
        $package->fourth_generation = $request->fourth_generation;
        $package->fifth_generation = $request->fifth_generation;
        $package->bonus = $request->bonus;
        $package->insurance = $request->insurance;
        $package->increative_gift = $request->increative_gift;
        $package->validity = $request->validity;
        $package->status = $request->status;
        $package->must_ref = $request->must_ref;
        $package->must_days = $request->must_days;
        $package->wlimit = $request->wlimit;
        $package->tlimit = $request->tlimit;
        $package->wmin = $request->wmin;
        $package->tmin = $request->tmin;

        if ($request->hasFile('package_banner')) {
            $file = $request->file('package_banner');
            $name = $file->getClientOriginalName();
            $filename = Str::lower($request->package_name) . '_' . $name;
            $file->move('public/uploads/package', $filename);
            $package->package_banner = $filename;
        }
        $package->update();

        flash(translate('Package has been updated successfully'))->success();
        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Package::where('id', $id);
        $menu->delete();
        flash(translate('Package has been deleted successfully'))->success();
        return redirect()->route('package.index');
    }

}