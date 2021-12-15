<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Validator;
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
        $packages = Package::orderBy('id', 'asc')->get();
        return view('admin.marketing.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function packake_wise_member()
    {

        $package = Package::orderBy('id', 'DESC')->get();
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'package_name'      => 'required',
            'package_type'      => 'required',
            'amount'            => 'required',
            'referrel_income'   => 'required',
            'bonus'             => 'required',
            'insurance'         => 'required',
            'increative_gift'   => 'required',
            'validity'          => 'required',
            'must_ref'          => 'required',
            'must_days'         => 'required',
            'wlimit'            => 'required',
            'tlimit'            => 'required',
            'wmin'              => 'required',
            'tmin'              => 'required',
            'package_banner'    => 'required',
            'g_income_first'    => 'required',
            'g_income_second'   => 'required',
            'g_income_third'    => 'required',
            'g_income_fourth'   => 'required',
            'g_income_fifth'    => 'required',
            'g_income_six'      => 'required',
            'g_income_seven'    => 'required',
            'g_income_eight'    => 'required',
            'g_income_nine'     => 'required',
            'g_income_ten'      => 'required',
            'g_income_eleven'   => 'required',
            'g_income_twelve'   => 'required',
            'g_income_thirteen' => 'required',
            'g_income_fourteen' => 'required',
            'g_income_fifteen'  => 'required',
            'g_income_sixteen'  => 'required',
            'g_income_seventeen'=> 'required',
            'g_income_eighteen' => 'required',
            'g_income_nineteen' => 'required',
            'g_income_twenty'   => 'required',
            'status'            => 'required',
        ]);

        if ($validate->fails()){
            return response()->json(['status'=> 400, 'errors'=> $validate->errors()]);
        }else{
            $package = new Package();
            $package->package_name = $request->package_name;
            $package->package_type = $request->package_type;
            $package->amount = $request->amount;
            $package->referrel_income = $request->referrel_income;
            $package->bonus = $request->bonus;
            $package->insurance = $request->insurance;
            $package->increative_gift = $request->increative_gift;
            $package->validity = $request->validity;
            $package->must_ref = $request->must_ref;
            $package->must_days = $request->must_days;
            $package->wlimit = $request->wlimit;
            $package->tlimit = $request->tlimit;
            $package->wmin = $request->wmin;
            $package->tmin = $request->tmin;
            $package->g_income_first = $request->g_income_first;
            $package->g_income_second = $request->g_income_second;
            $package->g_income_third = $request->g_income_third;
            $package->g_income_fourth = $request->g_income_fourth;
            $package->g_income_fifth = $request->g_income_fifth;
            $package->g_income_six = $request->g_income_six;
            $package->g_income_seven = $request->g_income_seven;
            $package->g_income_eight = $request->g_income_eight;
            $package->g_income_nine = $request->g_income_nine;
            $package->g_income_ten = $request->g_income_ten;
            $package->g_income_eleven = $request->g_income_eleven;
            $package->g_income_twelve = $request->g_income_twelve;
            $package->g_income_thirteen = $request->g_income_thirteen;
            $package->g_income_fourteen = $request->g_income_fourteen;
            $package->g_income_fifteen = $request->g_income_fifteen;
            $package->g_income_sixteen = $request->g_income_sixteen;
            $package->g_income_seventeen = $request->g_income_seventeen;
            $package->g_income_eighteen = $request->g_income_eighteen;
            $package->g_income_nineteen = $request->g_income_nineteen;
            $package->g_income_twenty = $request->g_income_twenty;
            $package->status = $request->status;

            if ($request->hasFile('package_banner')) {
                $file = $request->file('package_banner');
                $name = $file->getClientOriginalName();
                $filename = Str::lower($request->package_name) . '_' . $name;
                $file->move('public/uploads/package', $filename);
                $package->package_banner = $filename;
            }
            $package->save();
            return response()->json(['status'=> 200, 'data'=> $package, 'msg'=> 'Package Created Successfully.']);
        }
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
