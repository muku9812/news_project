<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>

    <title>एज दैनिक - नेपालको राष्ट्रिय </title>
    <meta name="description" content="दैनिक - नेपालको राष्ट्रिय">

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="नेपालको राष्ट्रिय">
    <meta name="author" content="Freelancer Unit Pvt. Ltd.">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico'); ?>"> -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/ticker-style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/post-tab.css')}}">

    <!-- Gallery News  -->
    <!-- End Gallery News  -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/tab.css')}}">

</head>

<body oncontextmenu="return false;">


<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><img src="{{asset('frontend/assets/img/icon/header_icon1.png')}}" alt=""><span
                                            id="nepali_full_date_2"></span> | <span id="real_clock_2">{{$nepaliDate}}</span></li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="logo">
                                <a href="index.php">
                                    <img class="logo-lg-width" src="{{asset('frontend/assets/img/logo/logo.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <section id="ads">
                                <div class="container">
                                    <div class="row">
                                        <div class="second banner">
                                            <a href="#">
                                                <img src="{{asset('frontend/assets/img/banner/2_1631000762.gif')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.php"><img class="logo-sm-width" src="{{asset('frontend/assets/img/logo/logo.jpg')}}"
                                                         alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li>
                                            <a href="{{route('index')}}">
                                                    <span aria-hidden="true" class="fa fa-home"
                                                          style="padding-right: 6px;"></span>
                                            </a>
                                        </li>
                                        <li><a href="category.html">राजनीति</a></li>
                                        <li><a href="category.html">बिजनेस</a></li>
                                        <li><a href="category.html">समाचार</a></li>


                                        <li><a href="#"> प्रदेश </a>
                                            <ul class="submenu">
                                                <li><a href="#">प्रदेश १</a></li>
                                                <li><a href="#">मधेस प्रदेश</a></li>
                                                <li><a href="#">बागमती</a></li>
                                                <li><a href="#">गण्डकी</a></li>
                                                <li><a href="#">लुम्बिनी</a></li>
                                                <li><a href="#">कर्णाली</a></li>
                                                <li><a href="#">सुदुरपश्चिम</a></li>
                                            </ul>
                                        </li>
{{--                                        <li><a href="#"> बैंकिंग </a>--}}
{{--                                            <ul class="submenu">--}}
{{--                                                <li><a href="#">सेयर बजार</a></li>--}}
{{--                                                <li><a href="#">इन्स्योरेन्स</a></li>--}}
{{--                                                <li><a href="#">उधोग</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}


                                        <li><a href="category.html">मनोरञ्जन</a></li>
                                        <li><a href="category.html">अन्तर्राष्ट्रिय</a></li>
                                        <li><a href="category.html">खेलकुद</a></li>
                                        <li><a href="category.html">प्रवास</a></li>
                                        <li><a href="category.html">सुरक्षा र अपराध</a></li>

{{--                                        <li><a href="category.html">जीवन्शैली</a></li>--}}

                                        <li><a href="about_us.html">हाम्रो बारेमा</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
