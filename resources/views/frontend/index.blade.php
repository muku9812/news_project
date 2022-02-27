
@include('frontend.includes.header')


<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>ब्रेकिङ न्युज</strong>
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    @foreach($data['slider'] as $slider)
                                    <a href="{{route('details',$slider->slug)}}">
                                        <li class="news-item">{{$slider->title}}</li>
                                    </a>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->

    <!--1st Section of Trending Area-->
    <div class="trending-area fix fullarea">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    @foreach($data['latest'] as $latest)
                    <div class="col-12">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-cap">
                                <h2><a href="{{route('details',$latest->slug)}}">{{$latest->title}}</a></h2>
                            </div>
                            <div class="top_wd" style="padding: 0.5rem 0px; text-align: center;">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन
                                        १० गते </span>
                            </div>
                            <a href="{{route('details',$latest->slug)}}">
                                <div class="trend-top-img">
                                    <img src="{{asset('uploads/images/news/'.$latest->feature_image)}}" alt="">
                                </div>
                            </a>
                            <p class="parao">{!! $latest->short_description !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--End Trending Area-->

    <!--3rd Section of Trending Area-->
    <div class="trending-area fix fullarea">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    @foreach( $data['latest3'] as $latest)
                    <div class="col-12">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-cap">
                                <h2><a href="{{route('details',$latest->slug)}}">{{$latest->title}}</a></h2>
                            </div>
                            <div class="top_wd" style="padding: 0.5rem 0px; text-align: center;">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन
                                        १० गते </span>
                            </div>
                            <p class="parao">{!! $latest->short_description !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--Ads-->
            <div class="border card">
                <div class="full-banner">
                    <img src="{{asset('frontend/images/banner/1.gif')}}" class="card-img-bottom" alt="images/banner/1.gif">
                </div>
            </div>
            <!--End ads-->
        </div>
    </div>
    <!--End Trending Area-->

    <!--Latest Post Trending Area-->
    <div class="trending-area fix">
        <div class="container">
            <div class="freelancerunit-title">
                <h2>
                    <span class="h2">मुख्य समाचार </span>
                    <a href="#" class="circle-arrow"><span>सबै </span></a>
                </h2>
            </div>
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-cap">
                                <h2><a href="#">भारतद्वारा वेस्ट इन्डिज माथि तेस्रो तथा अन्तिम टी-२० खेलमा भारतकाे
                                        'क्लिन स्वीप'</a></h2>
                            </div>
                            <div class="top_wd" style="padding: 0.5rem 0px;">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन
                                        १० गते </span>
                            </div>
                            <a href="post.php?post_id=1186">
                                <div class="trend-top-img">
                                    <img src="{{asset('frontend/assets/img/blog/blog_4.png')}}" alt="">
                                </div>
                            </a>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <a href="#"><img class="latest_down_post_image"
                                                             src="{{asset('frontend/assets/img/blog/learn_about_bg.png')}}" alt=""></a>
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="#">एमसीसीबारे नेकपा एकीकृत समाजवादीमा आन्तरिक विवाद</a>
                                            </h4>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <a href="#"><img class="latest_down_post_image"
                                                             src="{{asset('frontend/assets/img/blog/learn_about_bg.png')}}" alt=""></a>
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="#">एमसीसीबारे नेकपा एकीकृत समाजवादीमा आन्तरिक विवाद</a>
                                            </h4>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <a href="#"><img class="latest_down_post_image"
                                                             src="{{asset('frontend/assets/img/blog/learn_about_bg.png')}}" alt=""></a>
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <h4><a href="#">एमसीसीबारे नेकपा एकीकृत समाजवादीमा आन्तरिक विवाद</a>
                                            </h4>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="#"><img class="right_post_image" src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}"
                                                 alt=""></a>
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="#">अन्तर्राष्ट्रिय मातृभाषा दिवस आज</a></h4>
                                <div class="top_wd" style="font-size: small; display: flex; margin: -16px;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="#"><img class="right_post_image" src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}"
                                                 alt=""></a>
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="#">अन्तर्राष्ट्रिय मातृभाषा दिवस आज</a></h4>
                                <div class="top_wd" style="font-size: small; display: flex; margin: -16px;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="#"><img class="right_post_image" src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}" alt=""></a>
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="#">अन्तर्राष्ट्रिय मातृभाषा दिवस आज</a></h4>
                                <div class="top_wd" style="font-size: small; display: flex; margin: -16px;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="#"><img class="right_post_image" src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}"
                                                 alt=""></a>
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="#">अन्तर्राष्ट्रिय मातृभाषा दिवस आज</a></h4>
                                <div class="top_wd" style="font-size: small; display: flex; margin: -16px;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="#"><img class="right_post_image" src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}"
                                                 alt=""></a>
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="#">अन्तर्राष्ट्रिय मातृभाषा दिवस आज</a></h4>
                                <div class="top_wd" style="font-size: small; display: flex; margin: -16px;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <a href="#"><img class="right_post_image" src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}" alt=""></a>
                            </div>
                            <div class="trand-right-cap">
                                <h4><a href="#">अन्तर्राष्ट्रिय मातृभाषा दिवस आज</a></h4>
                                <div class="top_wd" style="font-size: small; display: flex; margin: -16px;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Latest Post Trending Area-->

    <!--1 section-->
    <section id="first">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="freelancerunit-title">
                        <h2>
                            <span class="h2">@foreach( $data['politics'] as $politics)
                                                 {{$politics->name}}@endforeach</span>
                            <a href="{{route('details',$politics->slug)}}" class="circle-arrow"><span>सबै </span></a>
                        </h2>
                    </div>
                    <div class="row">
                        @foreach($data['politics_news'] as $politics)
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-6">
                                        <img src="{{asset('uploads/images/news/'.$politics->feature_image)}}" class="img-fluid rounded-start"
                                             alt="{{route('details',$politics->slug)}}">
                                    </div>
                                    <div class="col-6 text">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="{{route('details',$politics->slug)}}">{{$politics->title}}</a></h5>
                                            <p class="card-text">{!! $politics->short_description !!}</p>
                                            <div class="top_wd" style="padding: 0.5rem 0px;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="card">
                            <div class="mid-banner">
                                <img src="{{asset('frontend/images/banner/5.gif')}}" class="card-img-bottom" alt="images/banner/5.gif">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                           @foreach($data['politics4'] as $politics)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('uploads/images/news/'.$politics->feature_image)}}"
                                             class="img-fluid rounded-start"
                                             alt="assets/img/blog/learn_about_bg.png">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="{{route('details',$politics->slug)}}">
                                                <h6 class="card-text">{{$politics->title}}</h6>
                                            </a>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            @foreach($data['politics8'] as $politics)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('uploads/images/news/'.$politics->feature_image)}}"
                                             class="img-fluid rounded-start"
                                             alt="assets/img/blog/learn_about_bg.png">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="{{route('details',$politics->slug)}}">
                                                <h6 class="card-text">{{$politics->title}}</h6>
                                            </a>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-4 col-sm-12">
                            <div class="card">
                                <img src="images/banner/3.gif" class="card-img-bottom" alt="images/banner/3.gif">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-12">
                            <div class="card">
                                <img src="{{asset('frontend/images/banner/3.gif')}}" class="card-img-bottom" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-12">
                            <div class="card">
                                <img src="{{asset('frontend/images/banner/3.gif')}}" class="card-img-bottom" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Ads-->
            <div class="border card">
                <div class="full-banner">
                    <img src="{{asset('frontend/images/banner/1.gif')}}" class="card-img-bottom" alt="">
                </div>
            </div>
            <!--End ads-->
        </div>
    </section>
    <!--End section-->



    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <a href="#">
                                <h3>बिजनेस </h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{asset('frontend/assets/img/news/recent3.jpg')}}" alt="" srcset="">
                                </div>
                                <div class="dweekly-caption">
                                    <h4><a href="">प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</a></h4>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{asset('frontend/assets/img/news/recent3.jpg')}}" alt="" srcset="">
                                </div>
                                <div class="dweekly-caption">
                                    <h4><a href="">प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</a></h4>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{asset('frontend/assets/img/news/recent3.jpg')}}" alt="" srcset="">
                                </div>
                                <div class="dweekly-caption">
                                    <h4><a href="">प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</a></h4>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{asset('frontend/assets/img/news/recent3.jpg')}}" alt="" srcset="">
                                </div>
                                <div class="dweekly-caption">
                                    <h4><a href="">प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</a></h4>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{asset('frontend/assets/img/news/recent3.jpg')}}" alt="" srcset="">
                                </div>
                                <div class="dweekly-caption">
                                    <h4><a href="">प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</a></h4>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{asset('frontend/assets/img/news/recent3.jpg')}}" alt="" srcset="">
                                </div>
                                <div class="dweekly-caption">
                                    <h4><a href="">प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</a></h4>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{asset('frontend/assets/img/news/recent3.jpg')}}" alt="" srcset="">
                                </div>
                                <div class="dweekly-caption">
                                    <h4><a href="">प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</a></h4>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->

    <!--Pradesh News-->
    <section id="tabbs">
        <div class="container">
            <div class="main">

                <div id="myBtnContainer">
                    <button class="btn active" onclick="filterSelection('all')">प्रदेश समाचार</button>
                    <button class="btn" onclick="filterSelection('tab1')"> प्रदेश १</button>
                    <button class="btn" onclick="filterSelection('tab2')"> मधेस प्रदेश</button>
                    <button class="btn" onclick="filterSelection('tab3')"> बागमती</button>
                    <button class="btn" onclick="filterSelection('tab4')"> गण्डकी</button>
                    <button class="btn" onclick="filterSelection('tab5')">लुम्बिनी</button>
                    <button class="btn" onclick="filterSelection('tab6')"> कर्णाली</button>
                    <button class="btn" onclick="filterSelection('tab7')"> प्सुदुरपश्चिम</button>
                </div>

                <!-- Portfolio Gallery Grid -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 tab1">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}" alt="Mountains" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tab7">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_2.png')}}" alt="Lights" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tab1">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_3.png')}}" alt="Nature" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 tab2">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_4.png')}}" alt="Car" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tab2">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_5.png')}}" alt="Car" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tab2">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}" alt="Car" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 tab3">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}" alt="Car" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tab3">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}" alt="Car" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tab3">
                        <div class="content">
                            <img src="{{asset('frontend/assets/img/blog/single_blog_1.png')}}" alt="Car" style="width:100%">
                            <h4>प्रदेशको नामांकनमा एमालेको सहयोग अपरिहार्य</h4>
                            <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                        खबर</span>&nbsp;
                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                        फागुन १० गते </span>
                            </div>
                        </div>
                    </div>
                    <!-- END GRID -->
                </div>

                <!-- END MAIN -->
            </div>
        </div>
    </section>
    <!--end Pradesh News-->

    <!-- News Post  -->
    <section id="tnews-post" class="section-wrapper container-full without-background">
        <div class="container">
            <div class="freelancerunit-title">
                <h2>
                    <span class="h2">मनोरञ्जन </span>
                    <a href="#" class="circle-arrow"><span>सबै </span></a>
                </h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
                    <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                        </a>
                        <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                    खबर</span>&nbsp;
                            <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन १०
                                    गते </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
                    <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                        </a>
                        <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                    खबर</span>&nbsp;
                            <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन १०
                                    गते </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
                    <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                        </a>
                        <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                    खबर</span>&nbsp;
                            <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन १०
                                    गते </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
                    <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                        </a>
                        <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                    खबर</span>&nbsp;
                            <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन १०
                                    गते </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
                    <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                        </a>
                        <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                    खबर</span>&nbsp;
                            <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन १०
                                    गते </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
                    <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                        </a>
                        <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                    खबर</span>&nbsp;
                            <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन १०
                                    गते </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
                    <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                        </a>
                        <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                    खबर</span>&nbsp;
                            <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन १०
                                    गते </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
                    <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="">
                            <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                        </a>
                        <div class="top_wd" style="padding: 0.5rem 0px; font-size:small">
                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                    खबर</span>&nbsp;
                            <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन १०
                                    गते </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Post  -->

    <!-- Ads Section  -->
    <div class="container">
        <div class="border card">
            <div class="full-banner">
                <img src="{{asset('frontend/images/banner/1.gif')}}" class="card-img-bottom" alt="images/banner/1.gif">
            </div>
        </div>
    </div>
    <!-- End Ads Section  -->

    <section id="press">
        <div class="container">
            <div class="freelancerunit-title">
                <h2>
                    <span class="h2">अन्तर्राष्ट्रिय </span>
                    <a href="#" class="circle-arrow"><span>सबै </span></a>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="{{asset('frontend/assets/img/blog/single_blog_4.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <h2 class="card-title">जिल्ला छोड्दा सिडिओको अनुमति लिनु पर्ने</h2>
                                    </a>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="{{asset('frontend/assets/img/blog/single_blog_4.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <h2 class="card-title">जिल्ला छोड्दा सिडिओको अनुमति लिनु पर्ने</h2>
                                    </a>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="{{asset('frontend/assets/img/blog/single_blog_4.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <h2 class="card-title">जिल्ला छोड्दा सिडिओको अनुमति लिनु पर्ने</h2>
                                    </a>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="{{asset('frontend/assets/img/blog/single_blog_4.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="">
                                        <h2 class="card-title">जिल्ला छोड्दा सिडिओको अनुमति लिनु पर्ने</h2>
                                    </a>
                                    <div class="top_wd" style="padding: 0.5rem 0px;">
                                            <span class="pwriter"><i class="fa fa-user"
                                                                     aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                                फागुन १० गते </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="news_loop_txt">
                                <h2 class="sbhd"><a href="#" rel="bookmark">जिल्ला छोड्दा सिडिओको अनुमति लिनु
                                        पर्ने</a></h2>
                                <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="news_loop_txt">
                                <h2 class="sbhd"><a href="#" rel="bookmark">जिल्ला छोड्दा सिडिओको अनुमति लिनु
                                        पर्ने</a></h2>
                                <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="news_loop_txt">
                                <h2 class="sbhd"><a href="#" rel="bookmark">जिल्ला छोड्दा सिडिओको अनुमति लिनु
                                        पर्ने</a></h2>
                                <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="news_loop_txt">
                                <h2 class="sbhd"><a href="#" rel="bookmark">जिल्ला छोड्दा सिडिओको अनुमति लिनु
                                        पर्ने</a></h2>
                                <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section  -->

    <section id="tsports-page">
        <div class="container">
            <div class="freelancerunit-title">
                <h2>
                    <span class="h2">सुचना प्रवीधी</span>
                    <a href="#" class="circle-arrow"><span>सबै </span></a>
                </h2>
            </div>
            <div class="row">

                <div class="group-bunch">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 card">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                                </a>
                                <div class="top_wd" style="padding: 0.5rem 0px;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 small">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 small">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                                    <span class="pwriter"><i class="fa fa-user"
                                                                             aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock"
                                                                       aria-hidden="true">&nbsp;</i>२०७८ फागुन १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border card">
                <div class="full-banner">
                    <img src="{{asset('frontend/images/banner/1.gif')}}" class="card-img-bottom" alt="images/banner/1.gif">
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section  -->

    <!-- second blog section  -->
    <section id="tsecond-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 second">
                    <div class="freelancerunit-title">
                        <h2>
                            <span class="h2">अन्तर्वार्ता</span>
                            <a href="#" class="circle-arrow"><span>सबै </span></a>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                                </a>
                                <div class="top_wd" style="padding: 0.5rem 0px; ">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h5 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h5>
                                </a>
                                <div class="top_wd" style="padding: 0.5rem 0px;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <div class="top_wd" style="padding: 0.5rem 0px; font-size: small;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="freelancerunit-title">
                        <h2>
                            <span class="h2">ट्रेन्डिङ </span>
                            <a href="#" class="circle-arrow"><span>सबै </span></a>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 small">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{'frontend/assets/img/slider2.jpg'}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- second blog section  -->

    <!-- Third Blog Section  -->
    <section id="tthird-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="freelancerunit-title">
                        <h2>
                            <span class="h2">सुरक्षा र अपराध</span>
                            <a href="#" class="circle-arrow"><span>सबै </span></a>
                        </h2>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 mb-3">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <div class="top_wd" style="padding: 1.5rem 0px; display: flex;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-lg-12 small">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="freelancerunit-title">
                        <h2>
                            <span class="h2">खेलकुद</span>
                            <a href="#" class="circle-arrow"><span>सबै </span></a>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <div class="top_wd" style="padding: 1.5rem 0px; display: flex;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-lg-12 small">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="freelancerunit-title">
                        <h2>
                            <span class="h2">प्रवास </span>
                            <a href="#" class="circle-arrow"><span>सबै </span></a>
                        </h2>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 mb-3">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">

                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <div class="top_wd" style="padding: 1.5rem 0px; display: flex;">
                                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई
                                            खबर</span>&nbsp;
                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८
                                            फागुन १० गते </span>
                                </div>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-lg-12 small">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border card">
                <div class="full-banner">
                    <img src="{{asset('frontend/images/banner/1.gif')}}" class="card-img-bottom" alt="images/banner/1.gif">
                </div>
            </div>
        </div>
    </section>

    <!-- End Third Blog Section  -->

    <!-- six blog section  -->
    <section id="tsecond-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 second">
                    <div class="freelancerunit-title">
                        <h2>
                            <span class="h2">विचार </span>
                            <a href="#" class="circle-arrow"><span>सबै </span></a>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <p class="date">
                                    <i class="fas fa-clock"></i>
                                    1 वर्ष पहिले
                                </p>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <p class="date">
                                    <i class="fas fa-clock"></i>
                                    1 वर्ष पहिले
                                </p>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <p class="date">
                                    <i class="fas fa-clock"></i>
                                    1 वर्ष पहिले
                                </p>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <p class="date">
                                    <i class="fas fa-clock"></i>
                                    1 वर्ष पहिले
                                </p>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <p class="date">
                                    <i class="fas fa-clock"></i>
                                    1 वर्ष पहिले
                                </p>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <img src="{{asset('frontend/assets/img/slider1.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <a href="http://">
                                    <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                </a>
                                <p class="date">
                                    <i class="fas fa-clock"></i>
                                    1 वर्ष पहिले
                                </p>
                                <p class="card-text">केहि द्रुत उदाहरण पाठ कार्ड को शीर्षक मा निर्माण र कार्ड को
                                    सामग्री को थोक बनाउन को लागी।</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="freelancerunit-title">
                        <h2>
                            <span class="h2">जीवन्शैली</span>
                            <a href="#" class="circle-arrow"><span>सबै </span></a>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 small">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{asset('frontend/assets/img/slider2.jpg')}}" class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="http://">
                                                <h6 class="card-title">उदाहरण पाठ कार्ड को शीर्षक</h6>
                                            </a>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-clock"></i>
                                                    १ वर्ष पहिले
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border card">
                <div class="full-banner">
                    <img src="{{asset('frontend/images/banner/1.gif')}}" class="card-img-bottom" alt="images/banner/1.gif">
                </div>
            </div>
        </div>
    </section>
    <!-- six blog section  -->

    <!-- Fouth Blog Section  -->
    <section id="tfourth-blog">
        <div class="container">
            <div class="freelancerunit-title">
                <h2>
                    <span class="h2">समाचार वर्गहरु</span>
                    <!-- <a href="#" class="circle-arrow"><span>सबै </span></a> -->
                </h2>
            </div>
            <div class="row">

                <div class="col-sm-6 col-md-3 col-lg-2 small card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('frontend/images/svg/2151496.svg')}}" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-12 line">
                            <div class="card-body">
                                <p class="card-text" style="text-align: center;">
                                    <a href="">
                                        <small class="text-muted" style="font-size: medium; font-weight: 700;">
                                            <i class="fas fa-fist-raised"></i>
                                            बैंकिंग
                                        </small>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 small card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('frontend/images/svg/images.png')}}" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-12 line">
                            <div class="card-body">
                                <p class="card-text" style="text-align: center;">
                                    <a href="">
                                        <small class="text-muted" style="font-size: medium; font-weight: 700;">
                                            <i class="fas fa-fist-raised"></i>
                                            मनोरञ्जन
                                        </small>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 small card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('frontend/images/svg/nepal.svg')}}" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-12 line">
                            <div class="card-body">
                                <p class="card-text" style="text-align: center;">
                                    <a href="">
                                        <small class="text-muted" style="font-size: medium; font-weight: 700;">
                                            <i class="fas fa-fist-raised"></i>
                                            प्रदेश
                                        </small>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 small card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('frontend/images/svg/64d2f6959054380bcf8ff14c6998c946.gif')}}"
                                 class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-12 line">
                            <div class="card-body">
                                <p class="card-text" style="text-align: center;">
                                    <a href="">
                                        <small class="text-muted" style="font-size: medium; font-weight: 700;">
                                            <i class="fas fa-fist-raised"></i>
                                            अन्तर्राष्ट्रिय
                                        </small>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 small card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('frontend/images/svg/sports-ball-1935522-1644095.png')}}" class="img-fluid rounded-start"
                                 alt="">
                        </div>
                        <div class="col-md-12 line">
                            <div class="card-body">
                                <p class="card-text" style="text-align: center;">
                                    <a href="">
                                        <small class="text-muted" style="font-size: medium; font-weight: 700;">
                                            <i class="fas fa-fist-raised"></i>
                                            खेलकुद
                                        </small>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2 small card mb-3">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src="{{asset('frontend/images/svg/download.png')}}" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-12 line">
                            <div class="card-body">
                                <p class="card-text" style="text-align: center;">
                                    <a href="">
                                        <small class="text-muted" style="font-size: medium; font-weight: 700;">
                                            <i class="fas fa-fist-raised"></i>
                                            राजनीति
                                        </small>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="border card">
                <div class="full-banner">
                    <img src="{{asset('frontend/images/banner/1.gif')}}" class="card-img-bottom" alt="images/banner/1.gif">
                </div>
            </div>
        </div>
    </section>
    <!-- End Fouth Blog Section  -->
</main>
@include('frontend.includes.footer')

