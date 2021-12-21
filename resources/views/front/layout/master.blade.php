<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{general()->sitetitle}}</title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="robots" content="index, follow" >
    <meta name="keywords" content="{{general()->metakeyword}}" >
    <meta name="description" content="{{general()->metadescription}}" >
    <meta name="author" content="{{general()->metaauthor}}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{asset('asset/server/general/'.general()->favicon)}}">
    <link rel="apple-touch-icon" href="{{asset('asset/server/general/'.general()->favicon)}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('asset/server/general/'.general()->favicon)}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('asset/server/general/'.general()->favicon)}}">

    <!-- CSS -->
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="{{asset('asset/front/revo-slider-5/css/settings.css')}}" rel="stylesheet" type="text/css">

    <!-- PARTICLES ADD-ON FILES -->
    <link rel="stylesheet" href="{{asset('asset/front/revo-slider-5/revolution-addons/particles/css/revolution.addon.particles.css')}}" type="text/css" media="all">

    <!--  BOOTSTRAP -->
    <link rel="stylesheet" href="{{asset('asset/front/css/bootstrap.min.css')}}">

    <!--  GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->
    <link rel="stylesheet" href="{{asset('asset/front/css/icons-fonts.css')}}" >

    <!--  CSS THEME -->
    <link rel="stylesheet" href="{{asset('asset/front/css/style.css')}}" >

    <!-- ANIMATE -->
    <link rel='stylesheet' href="{{asset('asset/front/css/animate.min.css')}}">
    <!-- dignari css -->
    <link rel="stylesheet" href="{{asset('asset/front/css/designer.css')}}">

    <!-- IE Warning CSS -->
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{{asset('asset/front/css/ie-warning.css')}}" ><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="{{asset('asset/front/css/ie8-fix.css')}}" ><![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr -->
    <!-- <script src="js/modernizr.js"></script> -->

    <style>
        .pt-100-b-80-cont {
            padding-top: 20px;
            padding-bottom: 10px;
        }
        .p-110-cont {
            padding-top: 65px;
            padding-bottom: 65px;
        }
        .fes1-cont {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .pt-60 {
            padding-top: 0px;
        }
        .demo {
            padding: 0 0 70px 0;
        }
    </style>

</head>
<body>

<!-- LOADER -->
<div id="loader-overflow">
    <div id="loader3">Please enable JS</div>
</div>

<div id="wrap" class="boxed ">
    <div class="grey-bg"> <!-- Grey BG  -->

    <!--[if lte IE 8]>
        <div id="ie-container">
            <div id="ie-cont-close">
                <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='{{asset("asset/front/images/ie-warn/ie-warning-close.jpg")}}' style='border: none;' alt='Close'></a>
            </div>
            <div id="ie-cont-content" >
                <div id="ie-cont-warning">
                    <img src='{{asset('asset/front/images/ie-warn/ie-warning.jpg')}}' alt='Warning!'>
                </div>
                <div id="ie-cont-text" >
                    <div id="ie-text-bold">
                        You are using an outdated browser
                    </div>
                    <div id="ie-text">
                        For a better experience using this site, please upgrade to a modern web browser.
                    </div>
                </div>
                <div id="ie-cont-brows" >
                    <a href='http://www.firefox.com' target='_blank'><img src='{{asset('asset/front/images/ie-warn/ie-warning-firefox.jpg')}}' alt='Download Firefox'></a>
                    <a href='http://www.opera.com/download/' target='_blank'><img src='{{asset('asset/front/images/ie-warn/ie-warning-opera.jpg')}}' alt='Download Opera'></a>
                    <a href='http://www.apple.com/safari/download/' target='_blank'><img src='{{asset('asset/front/images/ie-warn/ie-warning-safari.jpg')}}' alt='Download Safari'></a>
                    <a href='http://www.google.com/chrome' target='_blank'><img src='{{asset('asset/front/images/ie-warn/ie-warning-chrome.jpg')}}' alt='Download Google Chrome'></a>
                </div>
            </div>
        </div>
        <![endif]-->

        <div class="header-transporent-bg-black">


            <!-- HEADER 1 BLACK MOBILE-NO-TRANSPARENT -->
            <header id="nav" class="header header-1 header-black-white affix-on-mobile">
                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">

                            <!-- LOGO -->
                            <div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="{{route('/')}}" class="clearfix">
                                        <img src="{{asset('asset/server/general/'.general()->logo)}}" class="logo-img logo-color-change" alt="Logo">
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
                        <form class="form-search" id="searchForm" action="{{route('/')}}" method="get">
                            <input type="text" value="" name="q" id="q" placeholder="Search...">
                        </form>
                    </div>

                </div>
            </header>




@yield('content')



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

<!-- BACK TO TOP -->
<p id="back-top">
    <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>

</div><!-- End BG -->
</div><!-- End wrap -->

<!-- JS begin -->

<!-- jQuery  -->
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
<script src="{{asset('asset/front/revo-slider-5/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('asset/front/revo-slider-5/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- SLIDER REVOLUTION INITIALIZATION  -->
<script>

    var tpj=jQuery;
    var revapi8;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_280_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_280_1");
        }else{
            revapi8 = tpj("#rev_slider_280_1").show().revolution({
                sliderType:"hero",
                jsFileLocation:"revo-slider-5/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                particles: {
                    startSlide: "first",
                    endSlide: "last",
                    zIndex: "1",
                    particles: {
                        number: {
                            value: 90
                        },
                        color: {
                            value: "#dadada"
                        },
                        shape: {
                            type: "circle",
                            stroke: {
                                width: 0,
                                color: "#dadada",
                                opacity: 1
                            },
                            image: {
                                src: ""
                            }
                        },
                        opacity: {
                            value: .1,
                            random: false,
                            min: 0.25,
                            anim: {
                                enable: false,
                                speed: 1,
                                opacity_min: 0,
                                sync: false
                            }
                        },
                        size: {
                            value: 5,
                            random: true,
                            min: 1,
                            anim: {
                                enable: false,
                                speed: 40,
                                size_min: 0.1,
                                sync: false
                            }
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: "#dadada",
                            opacity: 0.5,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "none",
                            random: true,
                            min_speed: 3,
                            straight: false,
                            out_mode: "out"
                        }
                    },
                    interactivity: {
                        events: {
                            onhover: {
                                enable: true,
                                mode: "repulse"
                            },
                            onclick: {
                                enable: false,
                                mode: "bubble"
                            }
                        },
                        modes: {
                            grab: {
                                distance: 400,
                                line_linked: {
                                    opacity: 0.5
                                }
                            },
                            bubble: {
                                distance: 400,
                                size: 40,
                                opacity: 1
                            },
                            repulse: {
                                distance: 75
                            }
                        }
                    }
                },
                navigation: {
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[868,768,960,720],
                lazyType:"none",
                parallax: {
                    type: "off",
                    origo: "slidercenter",
                    speed: 1000,
                    levels: [0],
                    type: "scroll",
                    disable_onmobile: "on"
                },
                shadow:0,
                spinner:"spinner0",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                }
            });
        }

        RsParticlesAddOn(revapi8);
    });	/*ready*/
</script>

<!-- JS end -->

</body>
</html>

