@extends('admin.layout.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #formdata .form-control {
            margin-bottom: -20px !important;
        }
    </style>

    <div class="secured_pages_container">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="" id="sort_customers" action="" method="GET">
                                <div class="card-header row gutters-5">
                                    <div class="col-12">
                                        <h5 class="mb-0 h6">{{__('All Customers')}}</h5>
                                    </div>

                                    {{--                        <div class="dropdown mb-2 mb-md-0">--}}
                                    {{--                            <button class="btn border dropdown-toggle" type="button" data-toggle="dropdown">--}}
                                    {{--                                {{__('Bulk Action')}}--}}
                                    {{--                            </button>--}}
                                    {{--                            <div class="dropdown-menu dropdown-menu-right">--}}
                                    {{--                                <a class="dropdown-item" href="#" onclick="bulk_delete()">{{__('Delete selection')}}</a>--}}
                                    {{--                            </div>--}}
                                    {{--                        </div>--}}

                                    {{--                        <div class="col-md-6">--}}
                                    {{--                            <div class="form-group mb-0">--}}
                                    {{--                                <input type="text" class="form-control" id="search" name="search"--}}
                                    {{--                                       @isset($sort_search) value="{{ $sort_search }}"--}}
                                    {{--                                       @endisset placeholder="{{ __('Type email / name / phone / username or ref id & Enter') }}">--}}
                                    {{--                            </div>--}}
                                    {{--                        </div>--}}
                                </div>

                                <div class="card-body">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                        <tr>
                                            <!--<th data-breakpoints="lg">#</th>-->
                                            <th>
                                                <div class="form-group">
                                                    <div class="aiz-checkbox-inline">
                                                        <label class="aiz-checkbox">
                                                            <input type="checkbox" class="check-all">
                                                            <span class="aiz-square-check"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </th>
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
                                        <tbody>
                                        @foreach($customers as $key => $customer)

                                            @if ($customer->user != null)
                                                <tr>
                                                <!--<td>{{ ($key+1) + ($customers->currentPage() - 1)*$customers->perPage() }}</td>-->
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="aiz-checkbox-inline">
                                                                <label class="aiz-checkbox">
                                                                    <input type="checkbox" class="check-one" name="id[]"
                                                                           value="{{$customer->id}}">
                                                                    <span class="aiz-square-check"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </td>
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
                                                        <label class="custom-switch">
                                                            <input type="checkbox" name="agent_status" class="custom-switch-input" onclick="chengeAgStatus(this.value,'{{$customer->user->id}}')" @if($customer->user->agent_status == '1') checked value="0" @else value="1" @endif>
                                                            <span class="custom-switch-indicator"></span>
                                                        </label>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="{{route('customers.update',encrypt($customer->user_id))}}" title="{{ __('update') }}">
                                                            <label class="selectgroup-item" data-toggle="modal" data-target="#myModal">
                                                                <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-edit"></i></span>
                                                            </label>
                                                        </a>

                                                        <a href="{{route('customers.login', encrypt($customer->id))}}" title="{{ __('Log in as this Customer') }}">
                                                            <label class="selectgroup-item" data-toggle="modal" data-target="#myModal">
                                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            </label>
                                                        </a>

                                                        @if($customer->user->banned != 1)
                                                            <a href="#" onclick="confirm_ban('{{route('customers.ban', $customer->id)}}');" title="{{ __('Ban this Customer') }}">
                                                                <label class="selectgroup-item" data-toggle="modal" data-target="#myModal">
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
                                                        <a href="#" class="confirm-delete" data-href="{{route('customers.destroy', $customer->id)}}" title="{{ __('Delete') }}">
                                                            <label class="selectgroup-item" data-toggle="modal" data-target="#myModal">
                                                                <span class="selectgroup-button selectgroup-button-icon"><i class="far fa-trash-alt"></i></span>
                                                            </label>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="aiz-pagination">
                                        {{--  {{ $customers->appends(request()->input())->links() }}--}}
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal fade" id="confirm-ban">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title h6">{{__('Confirmation')}}</h5>
                                        <button type="button" class="close" data-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{__('Do you really want to ban this Customer?')}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">{{__('Cancel')}}</button>
                                        <a type="button" id="confirmation" class="btn btn-primary">{{__('Proceed!')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="confirm-unban">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title h6">{{__('Confirmation')}}</h5>
                                        <button type="button" class="close" data-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{__('Do you really want to unban this Customer?')}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">{{__('Cancel')}}</button>
                                        <a type="button" id="confirmationunban" class="btn btn-primary">{{__('Proceed!')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endsection

                        @section('modal')
                            @include('admin.modals.delete_modal')

                            <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Change Password</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('customer.changepassword')}}" method="POST">
                                            @csrf
                                            <input type="hidden" id="id" name="id">
                                            <div class="modal-body mx-3">
                                                <div class="md-form mb-4">
                                                    <i class="la la-lock"></i>
                                                    <input type="text" name="password" id="password" class="form-control validate">
                                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Customer's
                                                        password</label>
                                                </div>

                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn btn-primary">Change Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

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
                        AIZ.plugins.notify('success', '{{ __('Agent Status updated successfully') }}');
                    }
                }
            });
        }
    </script>
@endsection
