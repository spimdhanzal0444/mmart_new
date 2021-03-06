<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\This;
use Schema;
use Illuminate\Support\Str;
use File;


class PackageController extends Controller
{
    protected $rules = [
        'package_name'      => 'required',
        'amount'            => 'required',
        'bonus'             => 'required',
        'validity'          => 'required',
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
    ];
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

    // call from ajax
    public function allRecord()
    {
        $packages = Package::orderBy('id', 'asc')->get();
        return response()->json(["data"=> $packages]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function packake_wise_member()
    {

        $packages = Package::orderBy('id', 'DESC')->get();
        return view('admin.marketing.package.member', compact('packages'));
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

        return view('admin.marketing.package.member_list', compact('user', 'sort_search', 'userCount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), $this->rules);

        if ($validate->fails()){
            return response()->json(['status'=> 400, 'errors'=> $validate->errors()]);
        }else{
            $package = new Package();
            $package->package_name = $request->package_name;
            $package->amount = $request->amount;
            $package->referrel_income = $request->referrel_income;
            $package->bonus = $request->bonus;
            $package->validity = $request->validity;
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $package = Package::where('id', $request->hideID)->first();
        $validate = Validator::make($request->all(), $this->rules);

        if ($validate->fails()){
            return response()->json(['status'=> 400, 'errors'=> $validate->errors()]);
        }else{
            $package->package_name = $request->package_name;
            $package->amount = $request->amount;
            $package->referrel_income = $request->referrel_income;
            $package->bonus = $request->bonus;
            $package->validity = $request->validity;
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
                if (File::exists(public_path('public/uploads/package/'.$package->package_banner))) {
                    File::delete(public_path('public/uploads/package/'.$package->package_banner));
                }
                $file = $request->file('package_banner');
                $name = $file->getClientOriginalName();
                $filename = Str::lower($request->package_name) . '_' . $name;
                $file->move('public/uploads/package', $filename);
                $package->package_banner = $filename;
            }
            $package->save();
            return response()->json(['status'=> 200, 'data'=> $package, 'msg'=> 'Package Updated Successfully.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request)
    {
        $package = Package::findOrFail($request->id);

        if (File::exists(public_path('public/uploads/package/'.$package->package_banner))) {
            File::delete(public_path('public/uploads/package/'.$package->package_banner));
        }

        $package->delete();

        return response()->json(['msg'=> "Data Deleted successfully."]);
    }

}
