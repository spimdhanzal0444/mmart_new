@extends('admin.layout.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #formdata .form-control {
            margin-bottom: -20px !important;
        }
    </style>
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
                            <h4>{{__('Packages Wise Members List')}}</h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                        <tr>
                                            <th data-breakpoints="lg">#</th>
                                            <th>{{__('Joined On')}}</th>
                                            <th>{{__('Name')}}</th>
                                            <th>{{__('Username')}}</th>
                                            <th>{{__('Referral Code')}}</th>
                                            <th>{{__('Referred By')}}</th>
                                            <th data-breakpoints="lg">{{__('Phone')}}</th>
                                            <th data-breakpoints="lg">{{__('Package')}}</th>
                                            <th data-breakpoints="lg">{{__('Account Balance')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        @foreach($user as $view)
                                            <tr>
                                                <td>{{$view->id}}</td>
                                                <td>{{$view->created_at->format("j F, Y, g:i a")}}</td>
                                                <td>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" title="{{ __('update') }}" onclick="editCustomer({{$view->id}})">{{$view->name}}</a>
                                                </td>
                                                <td>{{$view->username}}</td>
                                                <td>{{$view->referral_id}}</td>
                                                <td>{{$view->referral_code}}</td>
                                                <td>{{$view->phone}}</td>
                                                <td>{{get_id_by_value('package_name','packages','id',$view->customer_package_id)}}</td>
                                                <td>{{currency($view->balance)}}</td>
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



    <script type="text/javascript">
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
    </script>
@endsection
