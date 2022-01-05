@extends('user.customer-master')
@section('content')
    <div class="profile-content">
        <div class="row">
            <div class="col-12">
                <h3 class="lead ">My Ledger</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="table_area">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>{{__('SN')}}</th>
                                <th>{{__('Date')}}</th>
                                <th>{{__('Particulation')}}</th>
                                <th>{{__('Reason')}}</th>
                                <th>{{__('Type')}}</th>
                                <th>{{__('Credit')}}</th>
                                <th>{{__('Debit')}}</th>
                                <th>{{__('Balance')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $balance = 0;
                        @endphp
                        @foreach($customerLedgers as $key=>$customerLedger)
                            @php
                                $restbalance = $balance+$customerLedger->credit-$customerLedger->debit;
                                $balance = $restbalance;
                            @endphp
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{\Carbon\Carbon::parse($customerLedger->created_at)->format('d M Y H:i:s A')}}</td>
                                <td>{{$customerLedger->particulation}}</td>
                                <td>{{$customerLedger->reason}}</td>
                                <td>
                                    @if(!$customerLedger->credit == NULL)
                                        CR
                                    @endif
                                    @if(!$customerLedger->debit == NULL)
                                        DR
                                    @endif
                                </td>
                                <td>{{currency($customerLedger->credit)}}</td>
                                <td>{{currency($customerLedger->debit)}}</td>
                                <td>{{currency($balance)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
