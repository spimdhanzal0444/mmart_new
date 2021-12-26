@extends('customer-front.layout.master')
@section('content')
    @includeIf('customer-front.payment-modal.payment-modal')
    <div class="profile-content">
        <div class="row">
            <div class="col-12">
                <h3 class="lead ">Package</h3>
            </div>
        </div>

        <div class="row">
           <div class="col-12">
               <div class="package-header bg-primary">
                   <h2 class="py-4">To Start Daily Earning You Must Buy A Package.</h2>
               </div>
           </div>
        </div>

        <div class="row">
            <div class="col-12" style="text-align: center">
                <div class="payWith">
                    <div class="card">
                        <div class="">
                            <div class="row">
                                <div class="">
                                    <p class="Details lead" style="margin-bottom: 0 !important;">Package Details</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="packDetails">
                                        <h2 style="margin-top: 0">Package Name: <span> {{$package->package_name}}</span></h2>
                                        <p>Package Value: <span> {{$package->amount}}</span></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-primary pckBtn" data-toggle="modal" data-target="#paymentModal">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
