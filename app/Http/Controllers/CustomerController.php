<?php

namespace App\Http\Controllers;

use App\Adminledger;
use App\Models\Customer;
use App\Models\Customerledger;
use App\Models\Customerpayment;
use App\Models\Customerwithdraw;
use App\Models\Managementledger;
use App\Models\User;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    // Customer Dashboard view
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
        return view('admin.customer.customers.customer', compact('customers', 'sort_search'));
    }

    // Agent List
    public function agentList(Request $request)
    {
        $sort_search = null;
        $user_ids = User::where(['user_type' => 'customer', 'agent_status' => '1'])->pluck('id')->toArray();
        $customers = Customer::where(function ($customer) use ($user_ids) {
            $customer->whereIn('user_id', $user_ids);
        })->orderBy('created_at', 'desc');

//        $customer2 = Customer::orderBy('created_at', 'desc');
//        if ($request->has('search')) {
//            $sort_search = $request->search;
//            $user_ids2 = User::where('user_type', 'customer')->where(function ($user) use ($sort_search) {
//                $user->where('name', 'like', '%' . $sort_search . '%')->orWhere('email', 'like', '%' . $sort_search . '%')->orWhere('phone', 'like', '%' . $sort_search . '%')->orWhere('username', 'like', '%' . $sort_search . '%')->orWhere('referral_id', 'like', '%' . $sort_search . '%');
//            })->pluck('id')->toArray();
//            $customers = $customer2->where(function ($customer2) use ($user_ids2) {
//                $customer2->whereIn('user_id', $user_ids2);
//            });
//        }
        $customers = $customers->paginate(15);

        return view('admin.customer.customers.agent', compact('customers'));
    }

    // change customer agent status
    public function agent_status(Request $request)
    {
        $customer = User::findOrFail($request->cus);
        $customer->agent_status = $request->Id;
        $customer->update();

        return 1;
    }

    // get all customer
    public function allcustomer(){
        $customer = User::where('user_type', 'customer')->get();
        return response()->json(['data'=> $customer, 'ststus'=> 200]);
    }

    public function payment(Request $request)
    {
        $sort_search = null;
        $customerpayment = Customerpayment::orderBy('created_at', 'desc');
        if ($request->has('search')) {
            $sort_search = $request->search;
            $user_ids = User::where('user_type', 'customer')->where(function ($user) use ($sort_search) {
                $user->where('name', 'like', '%' . $sort_search . '%')->orWhere('email', 'like', '%' . $sort_search . '%')->orWhere('phone', 'like', '%' . $sort_search . '%')->orWhere('username', 'like', '%' . $sort_search . '%')->orWhere('referral_id', 'like', '%' . $sort_search . '%');
            })->pluck('id')->toArray();
            $customerpayment = $customerpayment->where(function ($customerpayment) use ($user_ids) {
                $customerpayment->whereIn('customer_id', $user_ids);
            });
        }
        $customerpayment = $customerpayment->paginate(15);

        return view('admin.customer.customers.payment', compact('customerpayment', 'sort_search'));
    }

    public function payment_action($id)
    {
        DB::beginTransaction();
        try {
            $payment = Customerpayment::findOrFail($id);
            $customer = $payment->customer_id;
            $have = Customerpayment::where('customer_id', $customer)->where('status', '1')->get();
            if (count($have) == 0) {

                $payment->status = '1';
                $payment->update();


                $refadm = User::findOrFail(Auth::user()->id);
                $refe = $refadm->referral_code + 1;
                $referralId = str_pad($refe, 6, '0', STR_PAD_LEFT);
                $refadm->referral_code = $referralId;
                $refadm->update();

                $customer = User::where('id', $payment->customer_id)->first();
                $customer->cus_payment_status = "1";
                $customer->customer_package_id = $payment->package_id;
                $customer->activation_date = $payment->created_at;
                $customer->referral_id = $referralId;
                $customer->update();


                // referral_count data insert
                $reCou = DB::table('referral_count')->where('customer_id', $payment->customer_id)->get();
                if (count($reCou) == 0) {
                    $dataRef = array('customer_id' => $payment->customer_id);
                    DB::table('referral_count')->insert($dataRef);
                }
                /// referral_count data insert

                $neamount = $payment->amount;
                $secondrefUser = 0;
                $thirdrefUser = 0;
                $fourthrefUser = 0;
                $second = 0;
                $third = 0;
                $fourth = 0;
                $fifthrefUser = 0;
                $sixthrefUser = 0;
                $seventh = 0;
                $eighth = 0;
                $ninth = 0;
                $tenth = 0;
                $eleventh = 0;
                $twelfth = 0;
                $thirteenth = 0;
                $fourteenth = 0;
                $fifteenth = 0;
                $sixteenth = 0;
                $seventeenth = 0;
                $eighteenth = 0;
                $nineteenth = 0;
                $twentieth = 0;

                //ledger create
                $cusLedger = new Customerledger;
                $cusLedger->customer_id = $payment->customer_id;
                $cusLedger->admin_id = Auth::user()->id;
                $cusLedger->particulation = 'Membership purchased.';
                $cusLedger->type = 'Credit';
                $cusLedger->amount = $payment->amount;
                $cusLedger->restBalance = 0;
                $cusLedger->date = date("Y-m-d");
                $cusLedger->reason = 'package_purchase';
                $cusLedger->save();

                $refUser = get_id_by_value('referral_code', 'users', 'id', $payment->customer_id);

                $package = Package::findOrFail($payment->package_id);

                $first = User::where('referral_id', $refUser)->where('user_type', 'customer');


                if (count($first->get()) != 0) {

                    $newBalFirst = $first->first()->balance + $package->first_generation;;

                    $firstCommision = $first->first();
                    $firstCommision->balance = $newBalFirst;
                    $firstCommision->save();

                    // ledger
                    $cusFirst = new Customerledger;
                    $cusFirst->customer_id = $first->first()->id;
                    $cusFirst->com_cus_id = $payment->customer_id;
                    $cusFirst->particulation = '1st Gen Referral commission for ' . $referralId;
                    $cusFirst->type = 'Credit';
                    $cusFirst->amount = $package->first_generation;
                    $cusFirst->restBalance = $newBalFirst;
                    $cusFirst->date = date("Y-m-d");;
                    $cusFirst->reason = '1st_ref_comission';
                    $cusFirst->save();
                    // ledger


                    // refural count update
                    $refFst = DB::table('referral_count')->select('first')->where('customer_id', $first->first()->id)->first();
                    if (!empty($refFst)) {
                        $rCoF = $refFst->first + 1;
                    } else {
                        $rCoF = 1;
                    }

                    $upRef = array('first' => $rCoF);
                    DB::table('referral_count')->where('customer_id', $first->first()->id)->update($upRef);
                    // refural count update


                    // ranksaffiliates insert
                    $dataRefAffFir = array('customer_id' => $first->first()->id, 'package_id' => $payment->package_id);
                    DB::table('ranksaffiliates')->insert($dataRefAffFir);
                    // ranksaffiliates insert


                    $secondrefUser = $first->first()->referral_code;
                    $neamount -= $package->first_generation;
                }

                if (!empty($secondrefUser)) {
                    $second = User::where('referral_id', $secondrefUser)->where('user_type', 'customer');

                    if (count($second->get()) != 0) {

                        $newBalsecond = $second->first()->balance + $package->second_generation;

                        $secondCommision = $second->first();
                        $secondCommision->balance = $newBalsecond;
                        $secondCommision->save();

                        // ledger
                        $cussecond = new Customerledger;
                        $cussecond->customer_id = $second->first()->id;
                        $cussecond->com_cus_id = $payment->customer_id;
                        $cussecond->particulation = '2nd Gen Referral commission for ' . $referralId;
                        $cussecond->type = 'Credit';
                        $cussecond->amount = $package->second_generation;
                        $cussecond->restBalance = $newBalsecond;
                        $cussecond->date = date("Y-m-d");
                        $cussecond->reason = '2nd_ref_comission';
                        $cussecond->save();
                        // ledger

                        // refural count update
                        $refScnd = DB::table('referral_count')->where('customer_id', $second->first()->id)->first();
                        if (!empty($refScnd)) {
                            $rCoS = $refScnd->second + 1;
                        } else {
                            $rCoS = 1;
                        }

                        $upRef2 = array('second' => $rCoS);
                        DB::table('referral_count')->where('customer_id', $second->first()->id)->update($upRef2);
                        // refural count update

                        $thirdrefUser = $second->first()->referral_code;
                        $neamount -= $package->second_generation;
                    }
                }


                if (!empty($thirdrefUser)) {
                    $third = User::where('referral_id', $thirdrefUser)->where('user_type', 'customer');


                    if (count($third->get()) != 0) {

                        $newBalthird = $third->first()->balance + $package->third_generation;

                        $thirdCommision = $third->first();
                        $thirdCommision->balance = $newBalthird;
                        $thirdCommision->save();
                        // ledger
                        $custhird = new Customerledger;
                        $custhird->customer_id = $third->first()->id;
                        $custhird->com_cus_id = $payment->customer_id;
                        $custhird->particulation = '3rd Gen Referral commission for ' . $referralId;
                        $custhird->type = 'Credit';
                        $custhird->amount = $package->third_generation;
                        $custhird->restBalance = $newBalthird;
                        $custhird->date = date("Y-m-d");
                        $custhird->reason = '3rd_ref_comission';
                        $custhird->save();
                        // ledger

                        // refural count update
                        $refTh = DB::table('referral_count')->where('customer_id', $third->first()->id)->first();

                        if (!empty($refTh)) {
                            $rCoT = $refTh->third + 1;
                        } else {
                            $rCoT = 1;
                        }


                        $upRef3 = array('third' => $rCoT);
                        DB::table('referral_count')->where('customer_id', $third->first()->id)->update($upRef3);
                        // refural count update

                        $fourthrefUser = $third->first()->referral_code;
                        $neamount -= $package->third_generation;

                    }
                }

                if (!empty($fourthrefUser)) {

                    $fourth = User::where('referral_id', $fourthrefUser)->where('user_type', 'customer');

                    if (count($fourth->get()) != 0) {

                        $newBalfourth = $fourth->first()->balance + $package->fourth_generation;

                        $fourthCommision = $fourth->first();
                        $fourthCommision->balance = $newBalfourth;
                        $fourthCommision->save();
                        // ledger
                        $cusfourth = new Customerledger;
                        $cusfourth->customer_id = $fourth->first()->id;
                        $cusfourth->com_cus_id = $payment->customer_id;
                        $cusfourth->particulation = '4th Gen Referral commission for ' . $referralId;
                        $cusfourth->type = 'Credit';
                        $cusfourth->amount = $package->fourth_generation;
                        $cusfourth->restBalance = $newBalfourth;
                        $cusfourth->date = date("Y-m-d");
                        $cusfourth->reason = '4th_ref_comission';
                        $cusfourth->save();
                        // ledger

                        // refural count update
                        $refFo = DB::table('referral_count')->where('customer_id', $fourth->first()->id)->first();
                        if (!empty($refFo)) {
                            $rCoF = $refFo->fourth + 1;
                        } else {
                            $rCoF = 1;
                        }

                        $upRef4 = array('fourth' => $rCoF);
                        DB::table('referral_count')->where('customer_id', $fourth->first()->id)->update($upRef4);
                        // refural count update


                        $fifthrefUser = $fourth->first()->referral_code;
                        $neamount -= $package->fourth_generation;

                    }
                }
                if ($package->fifth_generation) {
                    if (!empty($fifthrefUser)) {

                        $fifth = User::where('referral_id', $fifthrefUser)->where('user_type', 'customer');

                        if (count($fifth->get()) != 0) {

                            $newBalfourth = $fifth->first()->balance + $package->fifth_generation;

                            $fourthCommision = $fifth->first();
                            $fourthCommision->balance = $newBalfourth;
                            $fourthCommision->save();
                            // ledger
                            $cusfourth = new Customerledger;
                            $cusfourth->customer_id = $fifth->first()->id;
                            $cusfourth->com_cus_id = $payment->customer_id;
                            $cusfourth->particulation = '5th Referral commission for ' . $referralId;
                            $cusfourth->type = 'Credit';
                            $cusfourth->amount = $package->fifth_generation;
                            $cusfourth->restBalance = $newBalfourth;
                            $cusfourth->date = date("Y-m-d");
                            $cusfourth->reason = '5th_ref_comission';
                            $cusfourth->save();
                            // ledger


                            // refural count update
//                    $refFiv = DB::table('referral_count')->where('customer_id', $fifth->first()->id)->first()->fifth;
                            $refFiv = DB::table('referral_count')->where('customer_id', $fifth->first()->id)->first();
                            if (!empty($refFiv)) {
                                $rCoFiv = $refFiv->fifth + 1;
                            } else {
                                $rCoFiv = 1;
                            }

                            $upRef5 = array('fifth' => $rCoFiv);
                            DB::table('referral_count')->where('customer_id', $fifth->first()->id)->update($upRef5);
                            // refural count update


                            $neamount -= $package->fifth_generation;

                            $sixthrefUser = $fifth->first()->referral_code;
                        }
                    }
                }
                if (!empty($sixthrefUser)) {
                    $seventh = refural_count($sixthrefUser, 'sixth');
                }
                if (!empty($seventh)) {
                    $eighth = refural_count($seventh, 'seventh');
                }
                if (!empty($eighth)) {
                    $ninth = refural_count($eighth, 'eighth');
                }
                if (!empty($ninth)) {
                    $tenth = refural_count($ninth, 'ninth');
                }
                if (!empty($tenth)) {
                    $eleventh = refural_count($tenth, 'tenth');
                }
                if (!empty($eleventh)) {
                    $twelfth = refural_count($eleventh, 'eleventh');
                }
                if (!empty($twelfth)) {
                    $thirteenth = refural_count($twelfth, 'twelfth');
                }
                if (!empty($thirteenth)) {
                    $fourteenth = refural_count($thirteenth, 'thirteenth');
                }
                if (!empty($fourteenth)) {
                    $fifteenth = refural_count($fourteenth, 'fourteenth');
                }
                if (!empty($fifteenth)) {
                    $sixteenth = refural_count($fifteenth, 'fifteenth');
                }
                if (!empty($sixteenth)) {
                    $seventeenth = refural_count($sixteenth, 'sixteenth');
                }
                if (!empty($seventeenth)) {
                    $eighteenth = refural_count($seventeenth, 'seventeenth');
                }
                if (!empty($eighteenth)) {
                    $nineteenth = refural_count($eighteenth, 'eighteenth');
                }
                if (!empty($nineteenth)) {
                    $twentieth = refural_count($nineteenth, 'nineteenth');
                }
                if (!empty($twentieth)) {
                    refural_count($twentieth, 'twentieth');
                }


                $admin = User::where('id', Auth::user()->id);
                $newBaladmin = $admin->first()->balance + $package->increative_gift;
                $adminCommision = $admin->first();
                $adminCommision->balance = $newBaladmin;
                $adminCommision->save();


                // ledger
                $adminLedger = new Adminledger;
                $adminLedger->customer_id = $payment->customer_id;
                $adminLedger->admin_id = Auth::user()->id;
                $adminLedger->particulation = 'Incentive Gift Fund Added from ' . $customer->referral_id . '-s payment ';
                $adminLedger->type = 'Credit';
                $adminLedger->amount = $package->increative_gift;
                $adminLedger->restBalance = $newBaladmin;
                $adminLedger->date = date("Y-m-d");
                $adminLedger->reason = 'package_purchase';
                $adminLedger->save();
                //ledger
                $neamount -= $package->increative_gift;


                $newbalManag = $admin->first()->management + $neamount;

                $managementCommision = $admin->first();
                $managementCommision->management = $newbalManag;
                $managementCommision->save();

                $Managementledger = new Managementledger;
                $Managementledger->customer_id = $payment->customer_id;
                $Managementledger->admin_id = Auth::user()->id;
                $Managementledger->particulation = 'Management Fund Added from ' . $customer->referral_id . '-s payment ';
                $Managementledger->type = 'Credit';
                $Managementledger->amount = $neamount;
                $Managementledger->restBalance = $newbalManag;
                $Managementledger->date = date("Y-m-d");
                $Managementledger->reason = 'package_purchase';
                $Managementledger->save();

                DB::commit();
//                flash(__('Customer payment Successfully'))->success();
                return back();
            } else {
//                flash(__('This user has already active package!'))->error();
                return back();
            }

        } catch (\Exception $e) {
            DB::rollback();
//            flash(__('Something went wrong!!'))->error();
            return back();
        }

    }

    public function payment_action_rejected(Request $request, $id)
    {
        $payment = Customerpayment::findOrFail($id);
        $payment->status = '2';
        $payment->admin_note = $request->admin_note;
        $payment->update();

//        return response()->json(['msg'=> 'rejected']);
//        flash(__('Customer payment rejected Successfully'))->success();
        return back();
    }

    // Payment Details View
    // Ajax request method
    public function payment_details_view($id){
        try {
            $payment = Customerpayment::findOrFail($id);
            $customer = User::where('id', Customer::where('id', $payment->customer_id)->first()->user_id)->first();
            $payment['date'] = Carbon::parse($payment->date)->format('d M Y');

            return response()->json(['paymentDate'=> $payment, 'customer'=> $customer, 'status'=> 200]);
        } catch (\Exception $e) {
            return response()->json(['status'=> 400, 'msg'=> 'User Not Found!']);
        }
    }

    // Customer Fund Withdraw method
    public function withdrawFund(Request $request)
    {
        $sort_search = null;
        $withdraw = Customerwithdraw::orderBy('created_at', 'desc');

        if ($request->has('search')) {
            $sort_search = $request->search;
            $user_ids2 = User::where('user_type', 'customer')->where(function ($user) use ($sort_search) {
                $user->where('name', 'like', '%' . $sort_search . '%')->orWhere('email', 'like', '%' . $sort_search . '%')->orWhere('phone', 'like', '%' . $sort_search . '%')->orWhere('username', 'like', '%' . $sort_search . '%')->orWhere('referral_id', 'like', '%' . $sort_search . '%');
            })->pluck('id')->toArray();
            $withdraw = $withdraw->where(function ($withdraw) use ($user_ids2) {
                $withdraw->whereIn('customer_id', $user_ids2);
            });
        }

        $withdraw = $withdraw->paginate(15);

        return view('admin.customer.customers.withdraw', compact('withdraw', 'sort_search'));
    }

    // ajax request method
    public function withdrawDetails($id)
    {
        $withdraw = Customerwithdraw::findOrFail($id);
        $withdraw['balance'] = get_id_by_value('balance','users','id', $withdraw->customer_id) + $withdraw->req_amount;
        return response()->json(['withdraw'=> $withdraw, 'status'=> 200]);
    }

    // Withdraw Done
     public function withdrawDone(Request $request)
        {
            if ($request->status == 1) {

                $withdraw = Customerwithdraw::where('id', $request->id)->first();
                $withdraw->req_amount = $request->req_amount;
                $withdraw->trans_id = $request->trans_id;
                $withdraw->admin_notes = $request->admin_notes;
                $withdraw->status = $request->status;
                $withdraw->approved_by = Auth::user()->id;
                $withdraw->update();
//
//                $id = get_id_by_value('id', 'users', 'id', $withdraw->customer_id);
//                $user = User::where('id', $id)->where('user_type', 'customer')->first();
//                $newBal = $user->balance;
//
//                $cus_ledger = new Customerledger;
//                $cus_ledger->customer_id = $user->id;
//                $cus_ledger->particulation = 'Money withdraw to ' . ' (Method: ' . $withdraw->withdraw_method . ' AC No.: ' . $withdraw->withdraw_to_number . ' Transaction ID: ' . $request->trans_id . ')';
//                $cus_ledger->type = 'Debit';
//                $cus_ledger->amount = $request->req_amount;;
//                $cus_ledger->restBalance = $newBal;
//                $cus_ledger->date = date("Y-m-d");
//                $cus_ledger->reason = 'withdraw';
//                $cus_ledger->save();
//
//                $cus_ref_id = get_id_by_value('referral_id', 'users', 'id', $withdraw->customer_id);
//                $admin = User::where('id', Auth::user()->id)->first();
//                $newBal2 = $admin->management - $request->req_amount;
//                $admin->management = $newBal2;
//                $admin->update();
//
//                $Managementledger = new Managementledger;
//                $Managementledger->customer_id = $withdraw->customer_id;
//                $Managementledger->admin_id = Auth::user()->id;
//                $Managementledger->particulation = 'Money paid to ' . $cus_ref_id . ' (Method: ' . $withdraw->withdraw_method . 'AC No.: ' . $withdraw->withdraw_to_number . 'Transaction ID: ' . $request->trans_id . ')';
//                $Managementledger->type = 'Debit';
//                $Managementledger->amount = $request->req_amount;
//                $Managementledger->restBalance = $newBal2;
//                $Managementledger->date = date("Y-m-d");
//                $Managementledger->reason = 'transfer';
//                $Managementledger->save();
//
//
//                $user = User::findOrFail($withdraw->customer_id);
//                $otpController = new OTPVerificationController;
//                $otpController->withdraw_success($user);

//                flash(translate('Withdraw Request Approved.'))->success();
//                return redirect()->route('customers.withdraw');

                // json response
                return response()->json(['msg'=> 'Withdraw Request Approved.', 'status'=> 200]);

            } elseif ($request->status == 2) {

                $withdraw = Customerwithdraw::where('id', $request->id)->first();
                $withdraw->status = $request->status;
                $withdraw->approved_by = Auth::user()->id;
                $withdraw->update();

                $user = User::where('id', $withdraw->customer_id)->where('user_type', 'customer')->first();
                $newBal = $user->balance + $request->req_amount;
                $user->balance = $newBal;
                $user->update();

                $cus_ref_id = get_id_by_value('referral_id', 'users', 'id', $withdraw->customer_id);
                $admin = User::where('id', Auth::user()->id)->first();
                $newBal2 = $admin->management - $request->req_amount;
                $admin->management = $newBal2;
                $admin->update();


//                $Managementledger = new Managementledger;
//                $Managementledger->customer_id = $withdraw->customer_id;
//                $Managementledger->admin_id = Auth::user()->id;
//                $Managementledger->particulation = 'Money paid for withdraw Rejection ' . $cus_ref_id . ' (Method: ' . $withdraw->withdraw_method . 'AC No.: ' . $withdraw->withdraw_to_number . 'Transaction ID: ' . $request->trans_id . ')';
//                $Managementledger->type = 'Debit';
//                $Managementledger->amount = $request->req_amount;
//                $Managementledger->restBalance = $newBal2;
//                $Managementledger->date = date("Y-m-d");
//                $Managementledger->reason = 'transfer_received';
//                $Managementledger->save();

//                $user = User::findOrFail($withdraw->customer_id);
//                $otpController = new OTPVerificationController;
//                $otpController->withdraw_success($user);

                return response()->json(['msg'=> 'Withdraw Request Rejected.', 'status'=> 200]);
//                flash(translate('Withdraw Request Rejected.'))->success();
//                return redirect()->route('customers.withdraw');
            } else {

                return response()->json(['msg'=> 'Withdraw Request Updated.', 'status'=> 200]);
//                flash(translate('Withdraw Request Updated.'))->success();
//                return redirect()->route('customers.withdraw');
            }

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
        $user = User::findOrFail($request->hideId);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->country = $request->country;
        $user->balance = $request->balance;
        $user->reserved_bal = $request->reserved_bal;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->city = $request->city;
        $user->update();

        return response()->json(['status'=> 200, 'msg'=> 'Customer Updated Successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        User::destroy(Customer::findOrFail($id)->user->id);
        if (Customer::destroy($id)) {
            return response()->json(['status'=> 200, 'msg'=> 'Customer Delete Successfully.']);
        }
        return response()->json(['status'=> 400, 'msg'=> 'Something went wrong.']);
    }
}
