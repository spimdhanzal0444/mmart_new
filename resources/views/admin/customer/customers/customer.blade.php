@extends('admin.layout.master')
@section('content')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Update Modal -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <p class="lead">{{__('Update Contents')}}</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <form id="updateCustomerForm" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <input type="hidden" name="hideId" value="" id="hideId">
                            <!---- First Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>

                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="username" id="username">
                                </div>

                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="country" id="country">
                                </div>

                                <div class="form-group">
                                    <label>Change Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>

                            <!---- Second Column ----->
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone">
                                </div>

                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city" id="city">
                                </div>

                                <div class="form-group">
                                    <label>Reserved Balance</label>
                                    <input type="text" class="form-control" name="reserved_bal" id="reserved_bal">
                                </div>

                                <div class="form-group">
                                    <label>Wallet Balance</label>
                                    <input type="text" class="form-control" name="balance" id="balance">
                                </div>
                            </div>
                        </div>

                        <!-- Controll Button -->
                        <button type="button" class="btn btn-primary updateBtn" id="update" onclick="updateCustomer()">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End modal -->


    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{__('All Customer')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('Joined On')}}</th>
                                        <th>{{__('Name')}}</th>
                                        <th>{{__('Username')}}</th>
                                        <th>{{__('Referral Code')}}</th>
                                        <th>{{__('Referred By')}}</th>
                                        <th data-breakpoints="lg">{{__('Phone')}}</th>
                                        <th data-breakpoints="lg">{{__('Verify Code')}}</th>
                                        <th data-breakpoints="lg">{{__('Package')}}</th>
                                        <th data-breakpoints="lg">{{__('Account Balance')}}</th>
                                        <th data-breakpoints="lg">{{__('Agent Status')}}</th>
                                        <th class="text-center">{{__('Options')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tbody">
                                    @foreach($customers as $key => $customer)

                                        @if ($customer->user != null)
                                            <tr>
                                            <!--<td>{{ ($key+1) + ($customers->currentPage() - 1)*$customers->perPage() }}</td>-->
                                                <td>{{$customer->user->id}}</td>
                                                <td>{{$customer->user->created_at->format("j F, Y, g:i a")}}</td>
                                                <td>@if($customer->user->banned == 1) <i class="fa fa-ban text-danger"
                                                                                         aria-hidden="true"></i> @endif {{$customer->user->name}}
                                                </td>
                                                <td>{{$customer->user->username}}</td>
                                                <td>{{$customer->user->referral_id}}</td>
                                                <td>{{$customer->user->referral_code}}</td>
                                                <td>{{$customer->user->phone}}</td>
                                                <td>{{$customer->user->verification_code}}</td>
                                                @php
                                                    $packName = get_id_by_value('package_name','packages','id',$customer->user->customer_package_id);
                                                    $packVal = get_id_by_value('amount','packages','id',$customer->user->customer_package_id);
                                                @endphp
                                                <td>
                                                    @if($packName && $packVal)
                                                        {{$packName}} ({{$packVal}})
                                                    @else
                                                        No active pacakge
                                                    @endif
                                                </td>
                                                <td>{{currency($customer->user->balance)}}</td>


                                                <td class="text-center">
                                                    <label class="custom-switch">   <!-- Customer status -->
                                                        <input type="checkbox" name="agent_status" class="custom-switch-input" onclick="chengeAgStatus(this.value,'{{$customer->user->id}}')" @if($customer->user->agent_status == '1') checked value="0" @else value="1" @endif>
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </td>

                                                <td class="text-center">
                                                    <a href="javascript:void(0)" title="{{ __('update') }}" onclick="editCustomer({{$customer->user_id}})">
                                                        <label class="selectgroup-item" data-toggle="modal" data-target="#myModal">
                                                            <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-edit"></i></span>
                                                        </label>
                                                    </a>

                                                    <!-- Customer dashboard -->
                                                    <a href="{{route('customer.dashboard', encrypt($customer->id))}}" title="{{ __('Log in as this Customer') }}">
                                                        <label class="selectgroup-item">
                                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        </label>
                                                    </a>

                                                    @if($customer->user->banned != 1)
                                                        <a href="#" onclick="confirm_ban('{{route('customers.ban', $customer->id)}}');" title="{{ __('Ban this Customer') }}">
                                                            <label class="selectgroup-item">
                                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-slash"></i></span>
                                                            </label>
                                                        </a>
                                                    @else
                                                        <a href="#" class="btn btn-soft-success btn-icon btn-circle btn-sm"
                                                           onclick="confirm_unban('{{route('customers.ban', $customer->id)}}');"
                                                           title="{{ __('Unban this Customer') }}">
                                                            <i class="las la-user-check"></i>
                                                        </a>
                                                    @endif
                                                    <a href="javascript:void(0)" class="confirm-delete" onclick="deleteCustomer({{$customer->id}})" title="{{ __('Delete') }}">
                                                        <label class="selectgroup-item">
                                                            <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-trash-alt"></i></span>
                                                        </label>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
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
@endsection


<script type="text/javascript">
    function chengeAgStatus(id,cusId){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{route('customer.agent_status')}}",
            type: 'POST',
            data: {Id:id,cus:cusId,},
            success: function (response) {
                if (response == 1) {
                    $.notify('{{__('Agent Status updated successfully')}}', "success");
                }
            }
        });
    }


    function editCustomer(user_id){
        $.ajax({
            url: "{{route('customer.all')}}",
            success: function(response){
               var customer = response.data.find(item => item.id === user_id)

                $('input[name="hideId"]').val(customer.id)

                $('input[name="name"]').val(customer.name)
                $('input[name="email"]').val(customer.email)
                $('input[name="username"]').val(customer.username)
                $('input[name="phone"]').val(customer.phone)
                $('input[name="country"]').val(customer.country)
                $('input[name="city"]').val(customer.city)
                $('input[name="balance"]').val(customer.balance)
                $('input[name="reserved_bal"]').val(customer.reserved_bal)
            },
            error: function(){
                $.notify(`<li style="color: white">Something is wrong</li>`, "error");
            }
        });
    }


    function updateCustomer(){
        var hideId = $('input[name="hideId"]').val()
        var name = $('input[name="name"]').val()
        var email = $('input[name="email"]').val()
        var username = $('input[name="username"]').val()
        var phone = $('input[name="phone"]').val()
        var password = $('input[name="password"]').val()
        var country = $('input[name="country"]').val()
        var city = $('input[name="city"]').val()
        var balance = $('input[name="balance"]').val()
        var reserved_bal = $('input[name="reserved_bal"]').val()

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/secured/customer-update",
            data: {
                hideId: hideId,
                name: name,
                email: email,
                username: username,
                phone: phone,
                password: password,
                country: country,
                city: city,
                balance: balance,
                reserved_bal: reserved_bal,
            },
            success:function(response){
                if (response.status == 200){
                    $('#responseErrors').html("")
                    $('#responseErrors').addClass('d-none')

                    $('#packageCreate').find('input').val('')
                    $('#myModal').modal('hide')
                    $.notify(`<li style="color: white">${response.msg}</li>`, "success");
                    location.reload();
                }
            },
            error: function(error) {
                $.notify(`<li style="color: white">${error}</li>`, "error");
            }
        });
    }

    // DELETE A SPECIFIC DATA
    function deleteCustomer(id){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url : "/secured/customers/destroy/"+id,
                type: "DELETE",
            data : {"id": id},
            success: function(response) {
                if (response.status == 200){
                    $.notify(`<li style="color: white">${response.msg}</li>`, "success");
                    location.reload();
                }
                if (response.status == 400){
                    $.notify(`<li style="color: white">${response.msg}</li>`, "error");
                }
            },
            error: function (error) {
                $.notify(`<li style="color: white">Something went wrong. </li>`, "error");
            }
        });
    }

</script>






@section('script')
    <script type="text/javascript">

        $(document).on("change", ".check-all", function () {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function () {
                    this.checked = false;
                });
            }

        });

        function sort_customers(el) {
            $('#sort_customers').submit();
        }

        function confirm_ban(url) {
            $('#confirm-ban').modal('show', {backdrop: 'static'});
            document.getElementById('confirmation').setAttribute('href', url);
        }

        function confirm_unban(url) {
            $('#confirm-unban').modal('show', {backdrop: 'static'});
            document.getElementById('confirmationunban').setAttribute('href', url);
        }

        function bulk_delete() {
            var data = new FormData($('#sort_customers')[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('bulk-customer-delete')}}",
                type: 'POST',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response == 1) {
                        location.reload();
                    }
                }
            });
        }

        function changePassword(id) {
            $("#id").val(id);
            $("#changePassword").modal('show');
        }

    </script>
@endsection
