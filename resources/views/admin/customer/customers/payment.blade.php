@extends('admin.layout.master')
@section('content')

    <style>
        #viewPay {
            padding: 2px 11px;
        }
    </style>

    <!-- Update Modal -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <p class="lead">{{__('Payment Information')}}</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Payment Date:</td>
                                        <td class="date"></td>
                                    </tr>

                                    <tr>
                                        <td>Payment By:</td>
                                        <td class="identity"></td>
                                    </tr>

                                    <tr>
                                        <td>Customer Phone Number:</td>
                                        <td class="user_phone"></td>
                                    </tr>

                                    <tr>
                                        <td>Payment Phone Number:</td>
                                        <td class="payment_phone"></td>
                                    </tr>

                                    <tr>
                                        <td>Payment Type:</td>
                                        <td class="payment_method"></td>
                                    </tr>

                                    <tr>
                                        <td>Payment Amount:</td>
                                        <td class="amount"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-12">
                            <form id="updateCustomerForm" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Admin Note</label>
                                    <textarea name="admin_note" id="admin_note" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                                <!-- Control Button -->
                                <a href="" id="setApproveUrl" class="btn btn-primary updateBtn">Approve</a>
                                <a href="javascript:void(0)" id="setRejectUrl" data-id="" onclick="setRejectUrl()" class="btn btn-danger updateBtn">Reject</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End modal -->

    <!-- Start View Area -->
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{__('All Customers Payment')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{__('Date & Time')}}</th>
                                            <th>{{__('Name')}}</th>
                                            <th>{{__('Type')}}</th>
                                            <th>{{__('Number')}}</th>
                                            <th>{{__('Trans')}}</th>
                                            <th>{{__('Amount')}}</th>
                                            <th>{{__('Status')}}</th>
                                            <th>{{__('Options')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @php $i=1;@endphp
                                        @foreach($customerpayment as $key => $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{\Carbon\Carbon::parse($row->created_at)->format('d M Y | H:i a')}}</td>
                                                <td>{{get_id_by_value('name','users','id', $row->customer_id)}}</td>
                                                <td>{{$row->type}}</td>
                                                <td>{{$row->number}}</td>
                                                <td>{{$row->trans_id}}</td>
                                                <td>{{currency($row->amount)}}</td>
                                                <td>
                                                    @if($row->status == 0)
                                                        <span class="badge-inline badge badge-danger">{{__('Pending')}}</span>
                                                    @elseif($row->status == 2)
                                                        <span class="badge badge-inline badge-dark">{{__('Rejected')}}</span>
                                                    @else
                                                        <span class="badge badge-inline badge-pill badge-primary">{{__('paid')}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($row->status == 0)
                                                        <a href="{{route('action.payment', $row->id)}}" id="getApproveUrl" class="btn btn btn-info btn-soft-info btn-sm" onclick="" title="{{ __('Approve') }}">
                                                            {{ __('Approve') }}
                                                        </a>
                                                        <a href="{{route('action.payment.rejected', $row->id)}}"
                                                           class="btn btn-danger btn-soft-danger  btn-sm getRejectedId" onclick="" title="{{ __('Reject') }}">
                                                            {{ __('Reject') }}
                                                        </a>
                                                        <a href="javascript:void(0)" id="viewPay" data-toggle="modal" data-target="#myModal"
                                                           class="btn btn-primary btn-soft-danger btn-sm" onclick="paymentDataInfo({{$row->id}})" title="{{ __('View') }}">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    @elseif($row->status == 2)
                                                        <a href="#"
                                                           class="btn btn-danger btn-soft-dark  btn-sm" onclick="" title="{{ __('Rejected') }}">
                                                            {{ __('Rejected') }}
                                                        </a>
                                                    @else
                                                        <a href="#" class="btn btn-primary  btn-sm" onclick=""
                                                           title="{{ __('Approved') }}">
                                                            {{ __('Approved') }}
                                                        </a>
                                                    @endif
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
        function paymentDataInfo(id)
        {   // last id remove and concat real id
            var getApproveUrl = $('#getApproveUrl').attr('href')
            var urlConvertArr = getApproveUrl.split("/")
            urlConvertArr.pop()
            var generateUrl = urlConvertArr.toString().replace(/,/g, '/')
            $('#setApproveUrl').attr('href', generateUrl +"/"+ id);
            $('#setRejectUrl').attr('data-id', id);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/secured/payment/view/"+id,
                type: 'GET',
                data: {id:id},
                success: function (response) {
                    if (response.status == 200) {
                        $('.date').text(response.paymentDate.date)
                        $('.identity').text(`${response.customer.name} (${response.customer.referral_id})`)
                        $('.user_phone').text(response.customer.phone)
                        $('.payment_phone').text(response.paymentDate.number)
                        $('.payment_method').text(response.paymentDate.type)
                        $('.amount').text(response.paymentDate.amount)
                    }

                    if (response.status == 400){
                        $('#myModal').modal('hide')
                        $.notify(response.msg, "error");
                    }
                }
            });
        }

        function setRejectUrl()
        {
            var admin_note = $('#admin_note').val();
            var id = $('#setRejectUrl').attr('data-id')

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/secured/payment/action-rejected/"+id,
                type: 'GET',
                data: {
                    id: id,
                    admin_note: admin_note
                },
                success: function (response) {
                    if (response){
                        $('#admin_note').val('');
                        $('#myModal').modal('hide')
                        $.notify('{{__('Rejected Successfull.')}}', "success");
                        location.reload()
                    }
                },
                error: function (error){
                    console.log(error)
                }
            });
        }
    </script>
@endsection
