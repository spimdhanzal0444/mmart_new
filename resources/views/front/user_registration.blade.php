@extends('front.layout.master')
@section('content')

    <style>
        .header-transporent-bg-black {
            background: #fefeff !important;
        }

        nav ul li a{
            color: #000 !important;
        }
    </style>

    <!-- COTENT CONTAINER -->
    <div class="container p-160-cont pt-sm-60">

        @if(session()->has('message'))
            <div class="alert alert-info">
                <li class="">{{ session()->get('message') }}</li>
            </div>
        @endif

        <!-- LOGIN / REGISTER CONTAINER -->
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 tabs-6">
                <!-- NAV TABS -->
                <div class="">
                    <ul class="nav nav-tabs bootstrap-tabs mb-0">

                        <li class="active">
                            <a href="#login-link" data-toggle="tab">Login</a>
                        </li>

                        <li>
                            <a href="#reg-link" data-toggle="tab">Registration</a>
                        </li>

                    </ul>
                </div>

                <!-- TAB PANELS -->
                <div class="tab-content tab6-cont">
                    <div class="tab-pane fade in active" id="login-link">
                        <!-- LOGIN FORM -->
                        <form id="login-form" method="POST" action="{{route('authenticate')}}">
                            @csrf
                            <!-- INPUTS -->
                            <div class="row mt-30">

                                <!-- email -->
                                <div class="col-md-12 mb-15" id="emailField">
                                    <input type="text" name="loginBy" class="controled" placeholder="Username or Phone or Email" required>
                                </div>

{{--                                <!-- username -->--}}
{{--                                <div class="col-md-12 mb-15" id="usernameField" style="display: none">--}}
{{--                                    <input type="text" name="username" class="controled" placeholder="User Name" required>--}}
{{--                                </div>--}}

{{--                                <!-- phone -->--}}
{{--                                <div class="col-md-12 mb-15" id="phoneField" style="display: none">--}}
{{--                                    <input type="text" name="phone" class="controled" placeholder="PHONE" required>--}}
{{--                                </div>--}}

                                <!-- PASSWORD -->
                                <div class="col-md-12 mb-15 mb-sm-15">
                                    <input type="password" name="password" id="password" class="controled" placeholder="PASSWORD" required>
                                </div>
                            </div>
                            <!-- BUTTONS -->
                            <div class="row">
                                <div class="col-md-6 text-sm-center mb-20 mb-sm-10">
                                    <a class="pt-10" href="#"><small>Forgot password?</small></a>
                                </div>

                                <div class="col-md-6 mb-50 text-sm-center text-right">
                                    <input id="remember-me" name="rememberme" type="checkbox" style="vertical-align:middle; margin:0" value="true">
                                    <label class="font-norm" for="remember-me"><small>Remember me</small></label>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="LOGIN" class="button rounded medium gray font-open-sans btn-block">
                                </div>
                            </div>
                        </form>

                        <!-- SOCIAL LOGIN -->
                        <div class="text-center mt-10 mb-10">
                            <small class="text-center font-open-sans">or login with</small>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-15"><a class="button medium color-facebook rounded btn-block text-center plr-0" href="#">FACEBOOK</a></div>
                            <div class="col-sm-6 mb-15"><a class="button medium color-twitter rounded btn-block text-center plr-0" href="#">TWITTER</a></div>
                        </div>
                        <!-- END LOGIN FORM -->
                    </div>

                    <div class="tab-pane fade" id="reg-link">

                        <!-- REGISTRY FORM -->
                        <form id="reg-form" action="{{route('registers')}}" method="POST">
                            @csrf

                            <div class="row mt-30">
                                <!-- NAME -->
                                <div class="col-md-12 mb-15">
                                    <input type="text" name="name" id="name" class="controled" placeholder="NAME">
                                </div>

                                <!-- USERNAME -->
                                <div class="col-md-12 mb-15">
                                    <input type="text" name="username" id="username" class="controled" placeholder="USERNAME">
                                </div>

                                <!-- EMIAL -->
                                <div class="col-md-12 mb-15">
                                    <input type="text" name="email" id="email" class="controled" placeholder="EMAIL" required>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-12 mb-15">
                                    <input type="text" name="phone" id="phone" class="controled" placeholder="PHONE" required>
                                </div>

                                <!-- PASSWORD -->
                                <div class="col-md-12 mb-15">
                                    <input type="password" name="password" id="password-reg" class="controled" placeholder="PASSWORD" required>
                                </div>

                                <!-- RE-ENTER PASSWORD -->
                                <div class="col-md-12 mb-50 mb-sm-30">
                                    <input type="password" name="confirm_password" id="confirm_password" class="controled" placeholder="RE-ENTER PASSWORD" required>
                                </div>

                                <!-- Referral Code -->
                                <div class="col-md-12 mb-50 mb-sm-30">
                                    <input type="text" name="referral_code" id="referral_code" class="controled" placeholder="Referral Code">
                                </div>

                                <!-- SEND BUTTON -->
                                <div class="col-md-12">
                                    <input type="submit" value="REGISTER" class="button rounded medium gray font-open-sans btn-block mb-15">
                                </div>
                            </div>
                        </form>
                        <!-- END REGISTRY FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function emailBtn(){
            $('#emailField').css('display', 'block')
            $('#usernameField').css('display', 'none')
            $('#phoneField').css('display', 'none')
        }
        function usernameBtn(){
            $('#emailField').css('display', 'none')
            $('#usernameField').css('display', 'block')
            $('#phoneField').css('display', 'none')
        }
        function phoneBtn(){
            $('#emailField').css('display', 'none')
            $('#usernameField').css('display', 'none')
            $('#phoneField').css('display', 'block')
        }
    </script>

@endsection
