<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{general()->sitetitle}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="{{general()->metakeyword}}" >
    <meta name="description" content="{{general()->metadescription}}" >
    <meta name="author" content="{{general()->metaauthor}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{asset('asset/user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/style.css')}}">
</head>
<body>
<header class="header-aria">
    <div class="nav-manu" id="navManu">
        <div class="nav-container">

            <nav class="navbar navbar-expand-lg px-5">
                <a class="navbar-brand" href="{{route('/')}}">
                    <img src="{{asset('asset/user/img/apple-touch-icon.png')}}" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto pr-5">
                        <li class="nav-item active"><a class="nav-link" href="{{route('/')}}">HOME</a> </li>
                        <li class="nav-item"><a class="nav-link" href="#">PORTFOLIO</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#">SHORTCODES</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="top-bar w-100 pt-2">
        <ul class="ml-auto"><li class="pr-2"><a href="{{route('user.login')}}">My Account</a></li></ul>

    </div>
    <div class="search-bar" id="charchBar">
        <i class="fas fa-search"></i>
    </div>
    <div class="search-input w-100" id="searchInput">
        <form action="#">
            <input type="text" name="" id="" placeholder="Search....." class="w-100 p-5">
        </form>
        <div class="quersBar" id="quersBar">
            <i class="fas fa-times"></i>
        </div>
    </div>
</header>

<div class="main-document">
    <div class="container-fluid">
        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column">

                                <div class="profile-userpic text-center">
                                    @if (file_exists('asset/server/users/'.Auth::user()->avatar))
                                        <img src="{{asset('asset/server/users/'.Auth::user()->avatar)}}" alt="11">
                                    @else
                                        <img id="previewImg" src="{{asset('asset/admin/img/cards/default_user.png')}}" alt="Profile Picture">
                                    @endif
                                </div>

                                <div class="mt-3">
                                    <div class="profile-usertitle text-center">
                                        <div class="profile-usertitle-name"><h4>{{Auth::user()->username}}</h4></div>
                                        <div class=""><p>{{Auth::user()->email}}</p></div>
                                    </div>

                                    <div class="profile-usermenu">
                                        <ul class="list-group">
                                            <li class="list-group-item active"><a href="{{route('customer.dashboard')}}"><i class="ficon icon-basic-globe mx-2"></i> {{__('Dashboard')}}</a></li>
                                            <li class="list-group-item"><a href="{{route('mywallet.index')}}"><i class="icon icon-basic-globe  mx-2"></i>My Wallet</a></li>
                                            <li class="list-group-item"><a href="{{route('customer.package.buynow')}}"><i class="icon icon-basic-globe  mx-2"></i>{{__('Buy Package')}}</a></li>
                                            <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Notice</a></li>
                                            <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>My Generation</a></li>
                                            <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Helpline</a></li>
                                            <li class="list-group-item"><a href="{{route('customer.profile')}}"><i class="icon icon-basic-globe  mx-2"></i>{{__('Manage Profile')}}</a></li>
                                            <li class="list-group-item"><a href="{{route('customer.logout')}}"><i class="icon icon-basic-globe  mx-2"></i>{{__('Logout')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card mb-3">
                        <div class="card-body">

                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="foother-aria">
    <div class="container">

        <!-- Social Links -->
        <div class="Social-icon">
            <ul class="m-auto">
                <li class="px-2"> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="px-2"><a href="#"><i class="fab fa-behance"></i></a></li>
            </ul>
        </div>

        <!-- Copyright -->
        <div class="copy-write text-center pt-2">
            <a href="http://themeforest.net/user/abcgomel/portfolio">&copy; HASWELL 2020</a>
        </div>

    </div>
</footer>
<script src="{{asset('asset/user/js/Jquery.js')}}"></script>
<script src="{{asset('asset/user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/user/js/app.js')}}"></script>
</body>
</html>
