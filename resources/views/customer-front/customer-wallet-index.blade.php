@extends('customer-front.layout.master')
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
                <div class="myWallet">
                    <div class="card">
                        <a href="{{route('myledger')}}">
                            <div class="card-body">
                                <div class="main-balance">
                                    <p><span>&#36;</span></p>
                                    <h2>৳ 1000</h2>
                                    <p>Main Balance</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="reserved-balance">
                                <p style="margin: 0"><span>&#36;</span></p>
                                <h2>৳ 2000</h2>
                                <p style="margin: 0;color: #FFFFFF">Reserved Balance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
