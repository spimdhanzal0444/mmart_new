@extends('user.customer-master')
@section('content')
    @includeIf('customer-front.payment-modal.wallet-main-balance-details-modal')

    <div class="profile-content">
        <div class="row">
            <div class="col-12">
                <h3 class="lead ">My Wallet</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-primary wallet_decition">
                            <a href="{{route('myledger')}}">
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="main-balance text-center">
                                            <h2 class="text-light"><span>&#36;</span> 1000</h2>
                                            <p class="text-light">Main Balance</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card bg-primary wallet_decition">
                            <a href="{{route('myledger')}}">
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="main-balance text-center">
                                            <h2 class="text-light"><span>&#36;</span> 1000</h2>
                                            <p class="text-light">Main Balance</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
