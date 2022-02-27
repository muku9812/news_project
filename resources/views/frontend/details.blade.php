
@include('frontend.includes.header')

<!--================Blog Area =================-->
<section class="post-page-area">
    <div class="container">
        <!--Ads-->
        <div class="border card">
            <div class="full-banner">
                <img src="{{asset('frontend/images/banner/1.gif')}}" class="card-img-bottom" alt="images/banner/1.gif">
            </div>
        </div>
        <!--End ads-->
        <!--single page-->
        <div class="main-title">
            <div class="content">
                <h2 class="title">
                    {{$data['news']->title}}
                </h2>
{{--                <h3 class="sub-title"> संघीय सांसदहरुलाई एमसीसीविरुद्ध खडा हुन पत्राचार गर्ने</h3>--}}
                <div class="date_share">
                    <div class="top_wd">
                        <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                        <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन  १० गते </span>
                    </div>
                    <div class="socail_icons" style="float: right; margin: -2rem 0; padding: 0rem 11rem;">
                        <span><a href="#"><img src="{{asset('frontend/images/facebok.png')}}" height="30" width="30"></a></span>
                        <span><a href="#"><img src="{{asset('frontend/images/twitter.png')}}" width="30" height="30"></a> </span>
                        <span><a href="#"><img src="{{asset('frontend/images/youtube.png')}}" width="30" height="30"></a></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <img src="{{asset('uploads/images/news/'.$data['news']->feature_image)}}" class="card-img-top" alt="{{$data['news']->title}}">
                        <div class="card-body">
                            <p class="card-text">
                                {!! $data['news']->description !!}
                            </p>
                        </div>
                        <!--Ads-->
                        <div class="border card">
                            <div class="full-banner">
                                <img src="{{asset('frontend/images/1.gif')}}" class="card-img-bottom" alt="images/1.gif">
                            </div>
                        </div>
                        <!--End ads-->
                        <!--Ads-->
                        <div class="border card">
                            <div class="full-banner">
                                <img src="{{asset('frontend/images/2.gif')}}" class="card-img-bottom" alt="images/2.gif">
                            </div>
                        </div>
                        <!--End ads-->
                        <!--Socail Plugins-->
                        <div class="comments">
                            <h2>प्रतिक्रिया</h2>
                            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-width="100%" data-href="https://www.meronews.com/2022/02/104518.html" data-numposts="7" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=844459216167725&amp;container_width=777&amp;height=100&amp;href=https%3A%2F%2Fwww.meronews.com%2F2022%2F02%2F104518.html&amp;locale=en_US&amp;numposts=7&amp;sdk=joey&amp;version=v10.0&amp;width=" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 287px;"><iframe name="fb7f135b887358" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v10.0/plugins/comments.php?app_id=844459216167725&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df18a28e6cd52b9%26domain%3Dwww.meronews.com%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.meronews.com%252Ff1a52ca84a95928%26relation%3Dparent.parent&amp;container_width=777&amp;height=100&amp;href=https%3A%2F%2Fwww.meronews.com%2F2022%2F02%2F104518.html&amp;locale=en_US&amp;numposts=7&amp;sdk=joey&amp;version=v10.0&amp;width=" style="border: none; visibility: visible; width: 100%; height: 287px;" class=""></iframe></span></div>
                        </div>
                        <!--End Socail Plugins-->
                        <!--Ads-->
                        <div class="border card">
                            <div class="full-banner">
                                <img src="images/1.gif" class="card-img-bottom" alt="images/1.gif">
                            </div>
                        </div>
                        <!--End ads-->
                        <!--Ads-->
                        <div class="border card">
                            <div class="full-banner">
                                <img src="images/2.gif" class="card-img-bottom" alt="images/2.gif">
                            </div>
                        </div>
                        <!--End ads-->
                        <section id="relatedpost">
                            <div class="card text-center">
                                <div class="card-header heading">
                                    <h2 class="main">
                                        <p>सम्बन्धित</p>
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($data['cate'] as $related)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card">
                                        <img src="{{asset('uploads/images/news/'.$related->feature_image)}}" class="card-img-top" alt="assets/img/blog/single_blog_1.png">
                                        <div class="card-body">
                                            <a href="{{route('details',$related->slug)}}"><h6 class="card-title">{{$related->title}}</h6></a>
                                            <div class="top_wd" style="font-size: small;">
                                                <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन  १० गते </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="tabs">
                        <div role="tablist" aria-label="Entertainment">
                            <button type="button" role="tab" aria-selected="true" aria-controls="nils-tab" id="nils">पछिल्ला</button>
                            <button type="button" role="tab" aria-selected="false" aria-controls="agnes-tab" id="agnes" tabindex="-1">लोकप्रिय</button>
                        </div>

                        <div tabindex="0" role="tabpanel" id="nils-tab" aria-labelledby="nils">
                            <p>
                            <div class="row">
                                <div class="col-lg-12 small">
                                    @foreach($data['latest'] as $latest)
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{asset('uploads/images/news/'.$latest->feature_image)}}" class="img-fluid rounded-start" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <a href="{{route('details',$latest->slug)}}"><h6 class="card-title">{{$latest->title}}</h6></a>
                                                </div>
                                                <div class="top_wd" style="font-size: 12px!important;">
                                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन  १० गते </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            </p>
                        </div>

                        <div tabindex="0" role="tabpanel" id="agnes-tab" aria-labelledby="agnes" class="is-hidden">
                            <p>
                            <div class="row">
                                <div class="col-lg-12 small">
                                    @foreach($data['view'] as $view)
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="{{asset('uploads/images/news/'.$view->feature_image)}}" class="img-fluid rounded-start" alt="{{$view->title}}">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <a href="{{route('details',$view->slug)}}"><h6 class="card-title">{{$view->title}}</h6></a>
                                                </div>
                                                <div class="top_wd" style="font-size: 12px!important;">
                                                    <span class="pwriter"><i class="fa fa-user" aria-hidden="true">&nbsp;</i>तराई खबर</span>&nbsp;
                                                    <span class="pdate"><i class="fa fa-clock" aria-hidden="true">&nbsp;</i>२०७८ फागुन  १० गते </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            </p>
                        </div>

                    </div>
                    <!--Ads-->
                    <div class="row">
                        <div class="col-lg-12 col-md-4">
                            <!--1 Ads-->
                            <div class="border card">
                                <div class="full-banner">
                                    <img src="images/banner/4.gif" class="card-img-bottom" alt="images/banner/4.gif">
                                </div>
                            </div>
                            <!--End ads-->
                        </div>
                        <div class="col-lg-12 col-md-4">
                            <!--1 Ads-->
                            <div class="border card">
                                <div class="full-banner">
                                    <img src="images/banner/3.gif" class="card-img-bottom" alt="images/banner/3.gif">
                                </div>
                            </div>
                            <!--End ads-->
                        </div>
                        <div class="col-lg-12 col-md-4">
                            <!--1 Ads-->
                            <div class="border card">
                                <div class="full-banner">
                                    <img src="images/banner/4.gif" class="card-img-bottom" alt="images/banner/4.gif">
                                </div>
                            </div>
                            <!--End ads-->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--end single page-->
    </div>
</section>
<!--================ Blog Area end =================-->
@include('frontend.includes.footer')
