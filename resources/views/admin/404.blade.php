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

    <!-- PAGE TITLE SMALL -->
    <div class="page-title-cont page-title-small grey-light-bg">
        <div class="relative container align-left">
            <div class="row">

                <div class="col-md-8">
                    <h1 class="page-title">PAGE TITLES</h1>
                </div>

                <div class="col-md-4">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><span class="slash-divider">/</span><a href="#">PAGES & FEATURES</a><span class="slash-divider">/</span><span class="bread-current">PAGE TITLES</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- COTENT CONTAINER -->
    <div class="container p-140-cont">

        <div class="row mb-40">
            <div class="col-md-6 text-center img-container-404">
                <img alt="img" src="images/content/404.png">
            </div>
            <div class="col-md-6 m-top-10">
                <h3>OOPS! THE PAGE YOU WERE LOOKING FOR, COULDN'T BE FOUND</h3>
                <p>We're sorry, but the page you were looking for doesn't exist. Here are some useful links</p>
                <div class="row m-top-20">
                    <div class="col-md-6">
                        <ul class="icon-list">
                            <li><i class="fa fa-angle-right"></i><a class="a-invert" href="index.html">Home</a></li>
                            <li><i class="fa fa-angle-right"></i><a class="a-invert" href="about-us.html">About Us</a></li>
                            <li><i class="fa fa-angle-right"></i><a class="a-invert" href="faq.html">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="icon-list">
                            <li><i class="fa fa-angle-right"></i><a class="a-invert" href="portfolio-2-col.html">Portfolio</a></li>
                            <li><i class="fa fa-angle-right"></i><a class="a-invert" href="blog.html">Blog</a></li>
                            <li><i class="fa fa-angle-right"></i><a class="a-invert" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- NEWS LETTER -->
    <div class="page-section nl-cont">
        <div class="container">
            <div class="relative" >
                <div id="mc_embed_signup" class="nl-form-container clearfix">
                    <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                        <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>

                        <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                    </form>
                    <div id="notification_container"  ></div>
                </div>
            </div>
        </div>
    </div>


@endsection
