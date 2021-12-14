@extends('front.layout.master')
@section('content')
    <style>
        .pricingTable .price-value .amount {
            font-size: 26px;
        }
        .custom_check ul li{
            display: inline-block;
        }
        .subscribe_area {
            text-align: center;
        }
        .newsletterform {
             float: none !important;
        }
        .subscribe_area {
            text-align: center;
            margin-top: 50px;
        }
        .pricingTable .price-value .amount {
            margin-top: 10px;
        }
    </style>
            <div id="index-link" class="relative">
                <div class="rev_slider_wrapper fullscreen-container" id="rev_slider_280_1_wrapper" style="background-color:#fff;padding:0px;">
                    <div class="rev_slider fullscreenbanner" data-version="5.1.4" id="rev_slider_280_1" style="display:none;">
                        <ul  style="perspective:none !important;">
                            <!-- SLIDE -->
                            <li data-description="" style="perspective:none !important;" data-easein="Power2.easeInOut" data-easeout="default" data-index="rs-898" data-masterspeed="1500" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-title="Slide" data-transition="fade">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('asset/server/general/'.$general->banner_image)}}"
                                     alt="img" class="rev-slidebg" data-bgparallax="12" style="perspective:none !important;"
                                     data-bgposition="top center" data-duration="30000" data-ease="Linear.easeNone" data-no-retina="">

                                <div class="tp-caption font-lato font-white tp-resizeme " id="slide-898-layer-1" style="z-index: 8; white-space: nowrap; letter-spacing:10px;"
                                     data-fontsize="['77','77','52','49']"
                                     data-fontweight="300"
                                     data-height="none"
                                     data-lineheight="['85','85','85','85']"
                                     data-responsive_offset="on"
                                     data-splitin="none"
                                     data-splitout="none"

                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:.95;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'

                                     data-whitespace="nowrap"
                                     data-width="none"
                                     data-x="['center','center','center','center']"
                                     data-hoffset="['0','0','0','0']"
                                     data-y="['center','center','center','center']"
                                     data-voffset="['-105','-105','-90','-85']">{{$general->banner_normal_text}}</div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption font-lato font-white tp-resizeme " id="slide-898-layer-2" style="z-index: 8; white-space: nowrap; letter-spacing:10px;"
                                     data-fontsize="['67','67','45','42']"
                                     data-fontweight="300"
                                     data-height="none"
                                     data-lineheight="['80','80','80','80']"
                                     data-responsive_offset="on"
                                     data-splitin="none"
                                     data-splitout="none"

                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:.95;","delay":900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'

                                     data-whitespace="nowrap"
                                     data-width="none"
                                     data-x="['center','center','center','center']"
                                     data-hoffset="['0','0','0','0']"
                                     data-y="['center','center','center','center']"
                                     data-voffset="['-20','-20','-20','-20']">{{$general->banner_normal_text2}}
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption font-lato font-white tp-resizeme " id="slide-898-layer-3" style="z-index: 8; white-space: nowrap; letter-spacing:10px; "
                                     data-fontsize="['78','78','52','50']"
                                     data-fontweight="600"
                                     data-height="none"
                                     data-lineheight="['90','90','90','90']"
                                     data-responsive_offset="on"
                                     data-splitin="none"
                                     data-splitout="none"

                                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:.95;","delay":1300,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'

                                     data-whitespace="nowrap"
                                     data-width="none"
                                     data-x="['center','center','center','center']"
                                     data-hoffset="['0','0','0','0']"
                                     data-y="['center','center','center','center']"
                                     data-voffset="['70','70','55','50']">{{$general->banner_bold_text}}
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->

                <!-- SCROLL ICON -->
                <div class="local-scroll-cont font-white">
                    <a href="#about" class="scroll-down smooth-scroll">
                        <div class="icon icon-arrows-down"></div>
                    </a>
                </div>

            </div>
        </div>


        <!-- FEATURES 1 we are creative -->
        <div id="about" class="page-section grey-light-bg">
            <div class="container fes1-cont">
                <div class="row">
                    <div class="col-md-4 fes1-img-cont wow fadeInUp mb-20">
                        <img src="{{asset('asset/server/creative/'.$creative->image)}}" alt="img" >
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="fes1-main-title-cont wow fadeInDown">
                                    <div class="title-fs-60">
                                        {{$creative->title_normal_text}}<br>
                                        <span class="bold">{{$creative->title_bold_text}}</span>
                                    </div>
                                    <div class="line-3-100"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="fes1-box wow fadeIn" >
                                    <div class="fes1-box-icon">
                                        <div class="{{$creative->item1_icon}}"></div>
                                    </div>
                                    <h3>{{$creative->item1_title}}</h3>
                                    <p>{{$creative->item1_description}}</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="fes1-box wow fadeIn" >
                                    <div class="fes1-box-icon">
                                        <div class="{{$creative->item2_icon}}"></div>
                                    </div>
                                    <h3>{{$creative->item2_title}}</h3>
                                    <p>{{$creative->item2_description}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="fes1-box wow fadeIn" >
                                    <div class="fes1-box-icon">
                                        <div class="{{$creative->item3_icon}}"></div>
                                    </div>
                                    <h3>{{$creative->item3_title}}</h3>
                                    <p>{{$creative->item3_description}}</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="fes1-box wow fadeIn" >
                                    <div class="fes1-box-icon">
                                        <div class="{{$creative->item4_icon}}"></div>
                                    </div>
                                    <h3>{{$creative->item4_title}}</h3>
                                    <p>{{$creative->item4_description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rank Table -->
        <div class="page-section pt-60">
            <div class="demo">
                <div class="prifcing-table">
                    <h1>{{$ranks->rank_section_normal_title	}}<span> {{$ranks->rank_section_bold_title}}</span></h1>
                </div>
                <div class="container">
                    <div class="row custom_check">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable">
                                <div class="price-value">
                                    <span class="amount">{{$ranks->rank1_circle_text}}</span>
                                </div>
                                <ul class="pricing-content">
                                    @foreach($ranks->rank1_item_text as $row)
                                        <div>
                                            <li><input type="checkbox" checked></li>
                                            <li>{{$row}}</li>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable green">
                                <div class="price-value">
                                    <span class="amount">{{$ranks->rank2_circle_text}}</span>
                                </div>
                                <ul class="pricing-content">
                                @foreach($ranks->rank2_item_text as $row)
                                        <div>
                                            <li><input type="checkbox" checked></li>
                                            <li>{{$row}}</li>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable">
                                <div class="price-value">
                                    <span class="amount">{{$ranks->rank3_circle_text}}</span>
                                </div>
                                <ul class="pricing-content">
                                    @foreach($ranks->rank3_item_text as $row)
                                        <div>
                                            <li><input type="checkbox" checked></li>
                                            <li>{{$row}}</li>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable green">
                                <div class="price-value">
                                    <span class="amount">{{$ranks->rank4_circle_text}}</span>
                                </div>
                                <ul class="pricing-content">
                                    @foreach($ranks->rank4_item_text as $row)
                                        <div>
                                            <li><input type="checkbox" checked></li>
                                            <li>{{$row}}</li>
                                        </div>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- WORK PROCESS 1 -->
        <div id="work-process-link" class="page-section work-proc-1-bg" style="background: #2c2c2c url(<?= asset('asset/server/work_and_video/'.$works->bg_image) ?>) fixed;">
            <div class="container fes4-cont">
                <div class="row">

                    <div class="col-md-4 ">
                        <div class="mb-50">
                            <h2 class="section-title">{{$works->section_title_normal}}<span class="bold">{{$works->section_title_bold}}</span></h2>
                        </div>
                        <p class="mb-50 " >{{$works->section_description}}</p>
                    </div>
                    <div class="col-md-7 col-lg-offset-1">
                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="fes4-box">
                                    <div class="fes4-title-cont" >
                                        <div class="fes4-box-icon">
                                            <div class="{{$works->work_item_icon1}}"></div>
                                        </div>
                                        <h3><span class="bold">{{$works->work_item_title1}}</span></h3>
                                        <p>{{$works->work_item_desc1}}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="fes4-box" >
                                    <div class="fes4-title-cont" >
                                        <div class="fes4-box-icon">
                                            <div class="{{$works->work_item_icon2}}"></div>
                                        </div>
                                        <h3><span class="bold">{{$works->work_item_title2}}</span></h3>
                                        <p>{{$works->work_item_desc2}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="fes4-box" >
                                    <div class="fes4-title-cont" >
                                        <div class="fes4-box-icon">
                                            <div class="{{$works->work_item_icon3}}"></div>
                                        </div>
                                        <h3><span class="bold">{{$works->work_item_title3}}</span></h3>
                                        <p>{{$works->work_item_desc3}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="fes4-box" >
                                    <div class="fes4-title-cont" >
                                        <div class="fes4-box-icon">
                                            <div class="{{$works->work_item_icon4}}"></div>
                                        </div>
                                        <h3><span class="bold">{{$works->work_item_title4}}</span></h3>
                                        <p>{{$works->work_item_desc4}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- VIDEO ADS 1 -->
        <div class="page-section video-ads-bg" style="background:#2c2c2c url(<?= asset('asset/server/work_and_video/'.$works->image) ?>) fixed;">
            <div class="container">
                <div class="video-ads-text-cont clearfix">
                    <span class="video-ads-text">{{$works->video_text_1}}</span>
                    <span class="video-ads-a">
                <a class="popup-youtube" href="{{asset('asset/server/work_and_video/'.$works->video)}}">
                  <span class="icon icon-music-play-button"></span>
                </a>
              </span>
                    <span class="video-ads-text">{{$works->video_text_2}}</span>
                </div>
            </div>
        </div>

        <!-- CONTACT INFO SECTION 1 -->
        <div id="contact-link" class="page-section p-110-cont">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="{{$homeContact->address_icon}}"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">{{$homeContact->address}}</span></h3>
                                <p>{{$homeContact->address_title}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="{{$homeContact->email_icon}}"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">{{$homeContact->email}}</span></h3>
                                <p><a href="mailto:info@haswell.com">{{$homeContact->email_address}}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="{{$homeContact->call_icon}}"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">{{$homeContact->call_text}}</span></h3>
                                <p>{{$homeContact->number_one}}, {{$homeContact->number_two}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="subscribe_area">
                            <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                                <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
                                <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>

                                <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
