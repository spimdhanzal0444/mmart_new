<!doctype html>
<html lang="en">
<head>
    <title>{{App\Helper::general()->sitetitle}}</title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="{{App\Helper::general()->metakeyword}}" >
    <meta name="description" content="{{App\Helper::general()->metadescription}}" >
    <meta name="author" content="{{App\Helper::general()->metaauthor}}">

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
                            <a href="index.html" class="clearfix" style="color: #000">
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
                        <li class="list-group-item active"><a href="{{route('admin.customer')}}"><i class="ficon icon-basic-globe mx-2"></i> Dashboard</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Profile</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>My Wallet</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Buy Package</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Notice</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>My Generation</a></li>
                        <li class="list-group-item"><a href=""><i class="icon icon-basic-globe  mx-2"></i>Helpline</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="profile-content">
                <div class="row">
                    <div class="col-12">
                        <h3 class="lead">Dashboard</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg" style='background: linear-gradient(to right, rgba(18, 115, 185, 0.8), rgba(18, 115, 185, 0.3)), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title"> Wallet</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg"  style='background: linear-gradient(to right, rgba(235, 71, 134, .8), rgba(235, 71, 134, 0.3)), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title">Packages</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg" style='background: linear-gradient(315deg, #875fc0 0%, #5346ba 74%), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title">Current Packages</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg" style='background: linear-gradient(to right, rgba(71, 197, 244, .8), rgba(71, 197, 244, .3)), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title"> Wallet</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg" style='background: linear-gradient(to right, rgba(71, 197, 244, .8), rgba(71, 197, 244, .3)), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title"> Wallet</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg" style='background: linear-gradient(to right, rgba(71, 197, 244, .8), rgba(71, 197, 244, .3)), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title"> Wallet</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg" style='background: linear-gradient(to right, rgba(71, 197, 244, .8), rgba(71, 197, 244, .3)), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title"> Wallet</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg" style='background: linear-gradient(to right, rgba(71, 197, 244, .8), rgba(71, 197, 244, .3)), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title"> Wallet</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card card_bg" style='background: linear-gradient(to right, rgba(71, 197, 244, .8), rgba(71, 197, 244, .3)), url("http://localhost/bright/public/uploads/package/starter_bright.jpg");'>
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="card-content text-center align-middle text-light">
                                        <h3 class="card-font-title"> Wallet</h3>
                                        <h2 class="font-18">1,287</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="page-section text-center pt-100-b-80-cont">
    <div class="container">

        <!-- Social Links -->
        <div class="footer-soc-a">
            @foreach(App\Helper::footer()->social_icon as $key=>$icon)
                <a href="{{App\Helper::footer()->social_link[$key]}}" title="Facebook" target="_blank"><i class="{{$icon}}"></i></a>
            @endforeach
        </div>

        <!-- Copyright -->
        <div class="footer-copy">
            <a href="http://themeforest.net/user/abcgomel/portfolio" target="_blank">{{App\Helper::footer()->copyright}}</a>
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
