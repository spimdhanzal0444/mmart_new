<!doctype html>
<html lang="en">
<head>
    <title>{{general()->sitetitle}}</title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="{{general()->metakeyword}}" >
    <meta name="description" content="{{general()->metadescription}}" >
    <meta name="author" content="{{general()->metaauthor}}">

    <link rel="shortcut icon" href="{{asset('asset/front/images/favicon/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('asset/front/images/favicon/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('asset/front/images/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('asset/front/images/favicon/apple-touch-icon-114x114.png')}}">
    <link href="{{asset('asset/front/css/settings.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" href="{{asset('asset/front/revolution-addons/particles/css/revolution.addon.particles.css?ver=1.0.3')}}'" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('asset/front/css/bootstrap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('asset/front/css/icons-fonts.css')}}" >
    <link rel="stylesheet" href="{{asset('asset/front/css/style.css')}}" >
    <link rel='stylesheet' href="{{asset('asset/front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/admin/developer.css')}}">

    <style>
        header ul li a{
            color: #0D0A0A !important;
        }
        .pt-100-b-80-cont {
            padding-top: 20px;
            padding-bottom: 10px;
        }
    </style>

    <style>


    </style>
</head>
<body>

<div class="header-transporent-bg-black">
    <!-- HEADER 1 BLACK MOBILE-NO-TRANSPARENT -->
    <header id="nav" class="header header-1 header-black-white affix-on-mobile affix" style="background: #ffffff">
        <div class="header-wrapper">
            <div class="container-m-30 clearfix">
                <div class="logo-row">

                    <!-- LOGO -->
                    <div class="logo-container-2">
                        <div class="logo-2">
                            <a href="{{route('/')}}" class="clearfix" style="color: #000">
                                <img src="http://127.0.0.1:8000/asset/front/images/logo.png" class="logo-img logo-color-change" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- BUTTON -->
                    <div class="menu-btn-respons-container">
                        <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                            <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- MAIN MENU CONTAINER -->
            <div class="main-menu-container">
                <div class="container-m-30 clearfix">
                    <!--top bar menu-->
                    <div class="top-bar">
                        @include('front.layout.loginRegistrationMenu')
                    </div>
                    <!-- MAIN MENU -->
                    <div id="main-menu">
                        <div class="navbar navbar-default" role="navigation">

                            <!-- MAIN MENU LIST -->
                            <nav class="collapse collapsing navbar-collapse right-1024">
                                @includeIf('front.layout.menu')
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SEARCH READ DOCUMENTATION -->
            <ul class="cd-header-buttons">
                <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
            </ul> <!-- cd-header-buttons -->
            <div id="cd-search" class="cd-search">
                <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
                    <input type="text" value="" name="q" id="q" placeholder="Search...">
                </form>
            </div>

        </div>
    </header>
</div>

<div class="container-fluid" style="padding-top: 100px; background: #eeeded">
    <div class="row profile">
        <div class="col-sm-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <img src="{{asset('asset/admin/img/cards/default_user.png')}}" class="img-responsive" alt="">
                </div>

                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">Sohozeto</div>
                    <div class="profile-usertitle-job">Developer</div>
                </div>

                <div class="profile-usermenu">
                    <ul class="list-group">
                        <li class="list-group-item active"><a href=""><i class="ficon icon-basic-globe mx-2"></i> Dashboard</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Profile</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>My Wallet</a></li>
                        <li class="list-group-item"><a href="{{route('customer.package.buynow')}}"><i class="icon icon-basic-globe  mx-2"></i>Buy Package</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Notice</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>My Generation</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Helpline</a></li>
                        <li class="list-group-item"><a href="{{route('customer.logout')}}"><i class="icon icon-basic-globe  mx-2"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-9">
            
        </div>
    </div>
</div>

<footer class="page-section text-center pt-100-b-80-cont">
    <div class="container">

        <!-- Social Links -->
        <div class="footer-soc-a">
            @foreach(footer()->social_icon as $key=>$icon)
                <a href="{{footer()->social_link[$key]}}" title="Facebook" target="_blank"><i class="{{$icon}}"></i></a>
            @endforeach
        </div>

        <!-- Copyright -->
        <div class="footer-copy">
            <a href="http://themeforest.net/user/abcgomel/portfolio" target="_blank">{{footer()->copyright}}</a>
        </div>

    </div>
</footer>
<script src="{{asset('asset/front/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{asset('asset/front/js/bootstrap.min.js')}}"></script>
<script src='{{asset('asset/front/js/jquery.magnific-popup.min.js')}}'></script>
<script src="{{asset('asset/front/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('asset/front/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('asset/front/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('asset/front/js/jquery.countTo.js')}}"></script>
<script src="{{asset('asset/front/js/jquery.appear.js')}}"></script>
<script src="{{asset('asset/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/front/js/jquery.sticky.js')}}"></script>
<script src="{{asset('asset/front/js/jquery.placeholder.js')}}"></script>
<script src="{{asset('asset/front/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('asset/front/js/contact-form-validation.min.js')}}"></script>
<script src="{{asset('asset/front/js/main.js')}}"></script>
<script src="{{asset('asset/front/js/jquery.themepunch.tools.min.js')}}" ></script>
<script src="{{asset('asset/front/js/jquery.themepunch.revolution.min.js')}}" ></script>
<script src="{{asset('asset/front/revolution-addons/particles/js/revolution.addon.particles.min.js')}}?ver=1.0.3"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('asset/front/js/extensions/revolution.extension.video.min.js')}}"></script>
</body>
</html>
