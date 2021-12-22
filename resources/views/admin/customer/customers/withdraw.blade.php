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
                    <p class="lead">{{__('Fund Withdraw Request Approval')}}</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <form id="updateCustomerForm" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" name="hideId" value="" id="hideId">
                            <!---- First Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Current Balance:</label>
                                    <input type="text" class="form-control" name="balance" disabled id="balance" value="">
                                </div>
                            </div>

                            <!---- Second Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Requested Amount:</label>
                                    <input type="text" class="form-control" name="req_amount" id="req_amount" value="">
                                </div>
                            </div>
                        </div>

                        <!-- Withdraw Method Details: -->
                        <div class="row" id="methodarea">
                            <div class="col-12">
                                <p class="font-weight-bold">Withdraw Method Details:</p>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="paymentMethod text-center">
                                            <p>Withdraw Method: <br><span class="wMethod"></span></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="paymentAccount text-center">
                                            <p>Withdraw to Account No: <br><span class="wAccount"></span></p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="memberNote text-center">
                                            <p>Member's Notes: <br><span class="mNote"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!---- First Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Admin Transaction ID:</label>
                                    <input type="text" class="form-control" name="trans_id" id="trans_id" value="">
                                </div>

                                <div class="form-group">
                                    <label for="status">Approve or Not:</label>
                                    <select class="custom-select form-control" name="status" id="status">

                                    </select>
                                </div>
                            </div>

                            <!---- Second Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Admin Notes:</label>
                                    <textarea name="admin_notes" id="admin_notes" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Control Button -->
                        <button type="button" class="btn btn-primary updateBtn" id="update" onclick="updateWithdrawRequest()">Update Withdraw Request</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
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
                                        <th>{{__('Request Date')}}</th>
                                        <th>{{__('Requested by')}}</th>
                                        <th>{{__('Username/Phone/Email')}}</th>
                                        <th>{{__('Withdraw Method')}}</th>
                                        <th>{{__('Withdrawal AC No')}}</th>
                                        <th>{{__('Requested Amount')}}</th>
                                        <th>{{__('Notes')}}</th>
                                        <th>{{__('Status')}}</th>
                                        <th>{{__('Options')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbody">
                                    @php $i=1;@endphp
                                    @foreach($withdraw as $key => $row)

                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->created_at->format("j F, Y, g:i a")}}</td>
                                            <td>{{get_id_by_value('name','users','id',$row->customer_id)}}
                                                ({{get_id_by_value('referral_id','users','id',$row->customer_id)}})
                                            </td>
                                            <td>
                                                <p>Username: {{get_id_by_value('username','users','id',$row->customer_id)}}</p>
                                                @if(get_id_by_value('phone','users','id',$row->customer_id))
                                                    <p>Phone: {{get_id_by_value('phone','users','id',$row->customer_id)}}</p>
                                                @endif
                                                @if(get_id_by_value('email','users','id',$row->customer_id))
                                                    <p>Email: {{get_id_by_value('email','users','id',$row->customer_id)}}</p>
                                                @endif
                                            </td>
                                            <td>{{$row->withdraw_method}}</td>
                                            <td>{{$row->withdraw_to_number}}</td>
                                            <td>{{currency($row->req_amount)}}</td>
                                            <td>{{$row->withdraw_notes}}</td>
                                            <td>@if($row->status == 0)
                                                    <span class="badge badge-inline btn-danger badge-danger">{{__('Pending')}}</span>
                                                @elseif($row->status == 1)
                                                    <span class="badge badge-inline badge-success btn-primary">{{__('Approved')}}</span>
                                                @elseif($row->status == 2)
                                                    <span class="badge badge-inline badge-soft-danger btn-danger">{{__('Rejected')}}</span>
                                                @endif
                                            </td>

                                            <td>
                                                @if($row->status == 0)
{{--                                                    {{route('action.withdraw.details',$row->id)}}--}}
                                                    <a href=""
                                                       class="btn btn-danger btn-sm"
                                                       data-toggle="modal" data-target="#myModal"
                                                       onclick="updateStatus({{$row->id}})" title="{{ __('Update Status') }}">
                                                        {{ __('Update Status') }}
                                                    </a>
                                                @endif

                                                @if($row->status == 1)
                                                    <span class="text-success">Approved by <span
                                                            class="text-danger"> {{get_id_by_value('name','users','id',$row->approved_by)}}</span></span>
                                                @endif
                                                @if($row->status == 2)
                                                    <span class="text-danger">Rejected by <span
                                                            class="text-success"> {{get_id_by_value('name','users','id',$row->approved_by)}}</span></span>
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
        function updateStatus(id){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/secured/withdraw/details/"+id,
                type: 'GET',
                data: {id:id},
                success: function (response) {
                    if (response.status == 200) {
                        $('input[name="hideId"]').val(response.withdraw.id)
                        $('input[name="req_amount"]').val(response.withdraw.req_amount)
                        $('input[name="balance"]').val(response.withdraw.balance)
                        $('input[name="trans_id"]').val(response.withdraw.trans_id)
                        $('#admin_notes').val(response.withdraw.admin_notes)

                        $('.wMethod').text(response.withdraw.withdraw_method)
                        $('.wAccount').text(response.withdraw.withdraw_to_number)
                        $('.mNote').text(response.withdraw.withdraw_notes)

                        var status = response.withdraw.status
                        var option = `
                            <option ${(status===0) ? "selected": ''} value="0">{{__('Pending')}}</option>
                            <option ${(status===1) ? "selected": ''} value="1">{{__('Approve')}}</option>
                            <option ${(status===2) ? "selected": ''} value="2">{{__('Reject')}}</option>
                        `

                        $('#status').html(option)
                    }
                },
                error: function (error){
                    $.notify(`${error}`, "error");
                }
            });
        }

        function updateWithdrawRequest(){
            var id = $('input[name="hideId"]').val()

            var req_amount = $('input[name="req_amount"]').val()
            var trans_id = $('input[name="trans_id"]').val()
            var admin_notes = $('#admin_notes').val()
            var status = $('#status').val()

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{route('action.withdraw.done')}}",
                data: {
                    id: id,
                    req_amount: req_amount,
                    trans_id: trans_id,
                    admin_notes: admin_notes,
                    status: status,
                },
                success:function(response){
                    if (response.status == 200){
                        $('#responseErrors').addClass('d-none')

                        $('#myModal').modal('hide')
                        $.notify(`<li style="color: white">${response.msg}</li>`, "success");
                        location.reload();
                    }
                },
                error: function(error) {
                    $.notify(`${error}`, "error");
                }
            });
        }
    </script>
@endsection
