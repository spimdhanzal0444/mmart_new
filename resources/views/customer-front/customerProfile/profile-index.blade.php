@extends('customer-front.layout.master')
@section('content')
    <div class="profile-content">
        <div class="row">
            <div class="col-12">
                <h3 class="lead ">{{__('Your Profile')}}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12" style="text-align: center">
                <div class="payWith">
                    <div class="card">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="userProfileImage">
                                        <img src="{{asset('asset/admin/img/cards/default_user.png')}}" alt="{{Auth::user()->name}}">
                                    </div>
                                </div>

                                <div class="col-md-8 col-sm-12">
                                    <table class="table userProfile">
                                        <tbody>
                                            <tr class="success">
                                                <td>Name</td>
                                                <td>{{__(':')}}</td>
                                                <td>{{Auth::user()->name}}</td>
                                            </tr>
                                            <tr class="success">
                                                <td>Role</td>
                                                <td>{{__(':')}}</td>
                                                <td>@if(Auth::user()->user_type == 'customer') User @endif</td>
                                            </tr>
                                            <tr class="success">
                                                <td>Email</td>
                                                <td>{{__(':')}}</td>
                                                <td>{{Auth::user()->email}}</td>
                                            </tr>
                                            <tr class="success">
                                                <td>Phone</td>
                                                <td>{{__(':')}}</td>
                                                <td>{{Auth::user()->phone}}</td>
                                            </tr>
                                            <tr class="success">
                                                <td>Address</td>
                                                <td>{{__(':')}}</td>
                                                <td>@if(Auth::user()->address !== null) {{Auth::user()->address}} @else __ @endif</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('show.profile')}}" class="btn btn-primary">Edit Your Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
