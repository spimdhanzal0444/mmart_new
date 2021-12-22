@extends('admin.layout.master')
@section('content')
    @php
        $refund_request_addon = \App\Models\Addon::where('unique_identifier', 'refund_request')->first();
    @endphp
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Orders</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Order Code') }}</th>
                                            <th data-breakpoints="md">{{ __('Num. of Products') }}</th>
                                            <th data-breakpoints="md">{{ __('Customer') }}</th>
                                            <th data-breakpoints="md">{{ __('Amount') }}</th>
                                            <th data-breakpoints="md">{{ __('Delivery Status') }}</th>
                                            <th data-breakpoints="md">{{ __('Payment Status') }}</th>
                                            @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                                                <th>{{ __('Refund') }}</th>
                                            @endif
                                            <th class="text-right" width="15%">{{__('options')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @foreach ($orders as $key => $order)
                                            <tr>
                                                <td>
                                                    {{ $order->code }}
                                                </td>
                                                <td>
                                                    {{ count($order->orderDetails) }}
                                                </td>
                                                <td>
                                                    @if ($order->user != null)
                                                        {{ $order->user->name }}
                                                    @else
                                                        Guest ({{ $order->guest_id }})
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ currency($order->grand_total) }}
                                                </td>
                                                <td>
                                                    @php
                                                        $status = $order->delivery_status;
                                                        if($order->delivery_status == 'cancelled') {
                                                            $status = '<span class="badge badge-inline badge-danger">'.__('Cancel').'</span>';
                                                        }

                                                    @endphp
                                                    {!! $status !!}
                                                </td>
                                                <td>
                                                    @if ($order->payment_status == 'paid')
                                                        <span class="badge badge-inline btn-primary badge-success">{{__('Paid')}}</span>
                                                    @else
                                                        <span class="badge badge-inline btn-danger badge-danger">{{__('Unpaid')}}</span>
                                                    @endif
                                                </td>
                                                @if ($refund_request_addon != null && $refund_request_addon->activated == 1)
                                                    <td>
                                                        @if (count($order->refund_requests) > 0)
                                                            {{ count($order->refund_requests) }} {{ __('Refund') }}
                                                        @else
                                                            {{ __('No Refund') }}
                                                        @endif
                                                    </td>
                                                @endif
                                                <td class="text-right">
                                                    <label class="selectgroup-item" onclick="">
                                                        <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-eye"></i></span>
                                                    </label>
                                                    <label class="selectgroup-item" onclick="">
                                                        <span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-download"></i></span>
                                                    </label>

                                                    <label class="selectgroup-item" onclick="deleteItem({{$order->id}})">
                                                        <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-trash-alt"></i></span>
                                                    </label>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        // DELETE A SPECIFIC DATA
        function deleteItem(id){
            alert('sometime')
            // $.ajax({
            //     url : "/secured/orders/destroy/"+id,
            //     type: "GET",
            //     data : {"id": id},
            //     success: function(response) {
            //         console.log(response)
            //         // $.notify(`<li style="color: white">${response.msg}</li>`, "success");
            //     },
            //     error: function (error) {
            //         console.log(error)
            //     }
            // });
        }
    </script>
@endsection
