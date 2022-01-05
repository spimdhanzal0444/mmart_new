@extends('user.customer-master')
@section('content')
    @includeIf('user.payment-modal.payment-modal')
    <div class="profile-content">
        <div class="row">
            <div class="col-12">
                <h3 class="lead ">Package</h3>
            </div>
        </div>

        <div class="row">
           <div class="col-12">
               <div class="package-header bg-primary">
                   <h2 class="py-4 text-light">To Start Daily Earning You Must Buy A Package.</h2>
               </div>
           </div>
        </div>

        <div class="row">
            <div class="col-12" style="text-align: center">
                <div class="payWith">
                    <div class="card">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card bg-primary">
                                        <div class="card-body">
                                            <div class="packDetails">
                                                <h2 style="margin-top: 0" class="text-light">Package Name: <span> {{$package->package_name}}</span></h2>
                                                <p class="text-light">Package Value: <span> {{$package->amount}}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 py-3">
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
