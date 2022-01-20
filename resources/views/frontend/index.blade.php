
@include('frontend.includes.header')


<div class="container  image " style="justify-content:center;">

    @foreach($data['adds'] as $add)
    <div class=" pt-2">
        <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERSISEMENT" class="img-fluid img-thumbnail" width="100%">
    </div>
    @endforeach

</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            @foreach($data['new'] as  $new)
                <a class="text-dor" href="{{route('details',$new->slug)}}">
                    <div class=" pt-1">
                        <img src="{{asset('uploads/images/news/'.$new->feature_image)}}" alt="add" class="img-fluid img-thumbnail ">
                    </div>

                    <h1 class="news">{!! $new->title!!}</h1>
                </a>
                <div class="container">
                    <div class="d-flex" style="justify-content:center;">
                        <h6 class="author-name" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-pencil-square-o" aria-hidden="true"></i>अनलाइनपाना </h6>
                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-comment-o" aria-hidden="true"></i>
        टिप्पणी</span>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-3 mt-3   ">
            @foreach($data['addsss'] as $add)
                <a href="{{$add->link}}" target="_blank">
                    <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERSISEMENT" class="img-fluid img-thumbnail">
                </a>
            @endforeach
                @foreach($data['latests'] as $latest)
                <div class="card mt-5">
                    <a href="{{route('details',$latest->slug)}}">
                        <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$latest->title}}</h5>

                            <p class="card-text">{!! $latest->short_description !!}</p>
                        </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="mt-5">
                    @foreach($data['addss'] as $add)
                        <a href="{{$add->link}}" target="_blank">
                            <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERSISEMENT" class="img-fluid img-thumbnail">
                        </a>
                    @endforeach
                </div>
        </div>
    </div>
</div>
<div class="container pt-5">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">


            <div class="row pt-5">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <h5 class="topic-text" style="background-color:#DC3545; color:#fff;">अन्तर्राष्ट्रिय</h5>

                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <a href="">
                        <h5 class="topic-text" style="color:#DC3545;">थप</h5>
                    </a>

                </div>


                <hr>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

            </div>
        </div>

    </div>

    <div class="row ">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 ">
            @foreach($data['international'] as $inter)
                <a class="text-dor" href="{{route('details',$inter->slug)}}">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">

                    <div class="col-md-4">
                        <img src="{{asset('uploads/images/news/'.$inter->feature_image)}}" class="img-fluid rounded-start" alt="...">
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$inter->title}}</h5>
                            <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                        </div>
                    </div>
                </div>
            </div>
                </a>
            @endforeach
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            @foreach($data['international1'] as $inter)
            <a href="{{route('details',$inter->slug)}}">
                <div class="card image">
                    <figure class="img-hover-zoom">
                        <img src="{{asset('uploads/images/news/'.$inter->feature_image)}}" class="card-img-top" alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">{{$inter->title}}</h5>
                        <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                        <p class="card-text">{!! $inter->short_description !!}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <!-- <img src="img/ad2.jpg" class="img-fluid img-thumbnail" alt="ads2"> -->


            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-taja" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ताजा</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-lokpriye" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">लोकप्रिय</button>
                </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">


                <div class="tab-pane fade show active" id="pills-taja" role="tabpanel" aria-labelledby="pills-home-tab">
                    @foreach($data['breaking'] as $break)
                    <li><a href="{{route('details',$break->slug)}}"> {{$break-> title}} </a> </li>
                    @endforeach
                </div>


                <div class="tab-pane fade" id="pills-lokpriye" role="tabpanel" aria-labelledby="pills-profile-tab">
                    @foreach($data['lok'] as $lok)
                    <li><a href="{{route('details',$lok->slug)}}">{{$lok->title}} </a> </li>
                    @endforeach

                </div>




            </div>

        </div>
    </div>
</div>









<div class="container pt-5 pb-5">
    <div class="row">


        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            @foreach($data['shr'] as $shr)
            <a href="{{route('details',$shr->slug)}}">
            <div class="card image">

                    <div class="img-hover-zoom">
                        <img src="{{asset('uploads/images/news/'.$shr->feature_image)}}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$shr->title}}ो</h5>
                        <p class="card-text">{!! $shr->short_description !!}</p>
                    </div>

            </div>
            </a>
            @endforeach

        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            @foreach($data['shr1'] as $shr)
            <div class="card image">
                <a href="{{route('details',$shr->slug)}}">
                    <div class="img-hover-zoom">
                        <img src="{{asset('uploads/images/news/'.$shr->feature_image)}}" class="card-img-top" alt="...">
                    </div>
                </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$shr->title}}</h5>
                        <p class="card-text">{!! $shr->short_description !!} </p>

            </div>
        </div>
            @endforeach

    </div>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
       @foreach( $data['top'] as $top)
        <img src="{{asset('uploads/images/advertisement/'.$top->image)}}" class="img-fluid img-thumbnail" alt="{{$top->name}}" height="100%" width="100%">
        @endforeach

    </div>
</div>




<div class="container">
    <div class=" pt-5">
        <div class="row ">

            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                <h5 class="topic-text" style="background-color:#DC3545; color:#fff;">मुख्य समाचार</h5>

            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                <a href="">
                    <h5 class="topic-text" style=" color:#DC3545;">थप</h5>
                </a>

            </div>

            <hr>
        </div>


        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card mb-3" style="max-width: 540px;">

                    @foreach( $data['break'] as $breaking)
                        <a class="text-dor" href="{{route('details',$breaking->slug)}}">
                    <div class="row g-0">

                        <div class="col-md-4">
                            <img src="{{asset('uploads/images/news/'.$breaking->feature_image)}}" class="img-fluid rounded-start" alt="...">
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">

                                <h5 class="card-title">{{$breaking->title}} </h5>
                                <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                            </div>
                        </div>
                    </div>
                        </a>
                    @endforeach
                </div>

            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                @foreach( $data['features'] as $feature)

                <a href="{{route('details',$feature->slug)}}">
                    <div class="card image">
                        <figure class="img-hover-zoom">
                            <img src="{{asset('uploads/images/news/'.$feature->feature_image)}}" class="card-img-top" alt="...">
                        </figure>
                        <div class="card-body">
                            <h5 class="card-title">{{$feature->title}}</h5>
                            <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                            <p class="card-text">{!! $feature->short_description !!}</p>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        @foreach($data['latest_break'] as $latest)
                            <a class="text-dor" href="{{route('details',$latest->slug)}}">
                                <div class="row g-0">

                                    <div class="col-md-4">
                                        <img src="{{asset('uploads/images/news/'.$latest->feature_image)}}" class="img-fluid rounded-start" alt="...">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card-body">

                                            <h5 class="card-title">{{$latest->title}} </h5>
                                            <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                                        </div>
                                    </div>
                                </div>
                            </a>

                        @endforeach


                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<div class="container">
                    <ul class="nav nav-pills mb-3 mt-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-province1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">प्रदेश १</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-province2" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">प्रदेश २</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-province3" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">बागमती</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-province4" type="button" role="tab" aria-controls="pills-home" aria-selected="true">गण्डकी</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-province5" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">लुम्बिनी</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-province6" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">कर्णाली</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-province7" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">सुदुरपश्चिम</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-province1" role="tabpanel" aria-labelledby="pills-home-tab">
                                     <div class="container pt-1">
                                <div class="row">
                                    @foreach($data['pd1'] as $pd)
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="test">
                                        <a href="{{route('details',$pd->slug)}}">
                                            <div class="card image">
                                                <figure class="img-hover-zoom">
                                                    <img src="{{asset('uploads/images/news/'.$pd->feature_image)}}" class="card-img-top" alt="...">
                                                </figure>
                                                <div class="card-body">
                                                    <h5 class="card-title">{!! $pd->title !!}</h5>
                                                    <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                                    <p class="card-text">{!! $pd->short_description !!} </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach

                                </div>

                            </div>
                                </div>
                                <div class="tab-pane fade" id="pills-province2" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="container pt-1">
                                        <div class="row">
                                            @foreach($data['pd2'] as $pd)
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="test">
                                                <a href="{{route('details',$pd->slug)}}">
                                                    <div class="card image">
                                                        <figure class="img-hover-zoom">
                                                            <img src="{{asset('uploads/images/news/'.$pd->feature_image)}}" class="card-img-top" alt="...">
                                                        </figure>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{$pd->title}}</h5>
                                                            <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                                            <p class="card-text">{!! $pd->short_description !!} </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-province3" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="container pt-1">
                                        <div class="row">
                                            @foreach($data['pd3'] as $pd)
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="test">
                                                <a href="{{route('details',$pd->slug)}}">
                                                    <div class="card image">
                                                        <figure class="img-hover-zoom">
                                                            <img src="{{asset('uploads/images/news/'.$pd->feature_image)}}" class="card-img-top" alt="...">
                                                        </figure>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{$pd->title}}ी</h5>
                                                            <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                                            <p class="card-text">{!! $pd->short_description !!} </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-province3" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="container pt-1">
                                        <div class="row">
                                            @foreach($data['pd4'] as $pd)
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="test">
                                                <a href="{{route('details',$pd->slug)}}">
                                                    <div class="card image">
                                                        <figure class="img-hover-zoom">
                                                            <img src="{{asset('uploads/images/news/'.$pd->feature_image)}}" class="card-img-top" alt="...">
                                                        </figure>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{!! $pd->title !!}</h5>
                                                            <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                                            <p class="card-text">{!! $pd->short_description !!}} </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-province4" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="container pt-1">
                                        <div class="row">
                                            @foreach($data['pd4'] as $pd)
                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="test">
                                                <a href="{{route('details',$pd->slug)}}">
                                                    <div class="card image">
                                                        <figure class="img-hover-zoom">
                                                            <img src="{{asset('uploads/images/news/'.$pd->feature_image)}}" class="card-img-top" alt="...">
                                                        </figure>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{$pd->title}}</h5>
                                                            <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                                            <p class="card-text">{!! $pd->short_description !!}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-province5" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="container pt-1">
                                        <div class="row">
                                            @foreach($data['pd5'] as $pd)
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="test">
                                                    <a href="">
                                                        <div class="card image">
                                                            <figure class="img-hover-zoom">
                                                                <img src="{{asset('uploads/images/news/'.$pd->feature_image)}}" class="card-img-top" alt="...">
                                                            </figure>
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{$pd->title}}</h5>
                                                                <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                                                <p class="card-text">{!! $pd->short_description !!}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-province6" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="container pt-1">
                                        <div class="row">
                                            @foreach($data['pd6'] as $pd)
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="test">
                                                    <a href="{{route('details',$pd->slug)}}">
                                                        <div class="card image">
                                                            <figure class="img-hover-zoom">
                                                                <img src="{{asset('uploads/images/news/'.$pd->feature_image)}}" class="card-img-top" alt="...">
                                                            </figure>
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{$pd->title}}</h5>
                                                                <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                                                <p class="card-text">{!! $pd->short_description !!}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-province7" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="container pt-1">
                                        <div class="row">
                                            @foreach($data['pd7'] as $pd)
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="test">
                                                    <a href="{{route('details',$pd->slug)}}">
                                                        <div class="card image">
                                                            <figure class="img-hover-zoom">
                                                                <img src="{{asset('uploads/images/news/'.$pd->feature_image)}}" class="card-img-top" alt="...">
                                                            </figure>
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{$pd->title}}</h5>
                                                                <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                                                <p class="card-text">{!! $pd->short_description !!}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>


                        </div>
</div>

<div class="container pt-5">
    <div class=" ">

        <div class="row ">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                <h5 class="topic-text" style="background-color:#DC3545; color:#fff;">मनोरन्जन</h5>

            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                <a href="">
                    <h5 class="topic-text" style=" color:#DC3545;">थप</h5>
                </a>

            </div>
            <hr>


        </div>
    </div>
    <div class="row height">
{{--        <div class="col-lg-6 image1 col-md-6 col-sm-12 entertainment-position ">--}}

{{--            <!-- <img src="img/entertaintment1.jpg" alt="entertainmnet1" class="img-fliud  img-thumbnail"> -->--}}
{{--            <h5 class="ent-text1">स नेपाललाई बताउनुभयो । गैरेको यस अघी पनी दर्जन बढी सा</h5>--}}
{{--        </div>--}}
        <div class="col-lg-6 col-md-6 col-sm-12  entertainment-position ">
            @foreach($data['entertainment2'] as $entr)
                <a href="{{route('details',$entr->slug)}}">

             <img src="{{asset('uploads/images/news/'.$entr->feature_image)}}" alt="entertainmnet1" class="img-fliud  img-thumbnail" style="height: 590px; width: 800px;">

                    <h5 class="ent-text1 text-dark text-center mt-3 mb-3">{{$entr->title}}</h5>
                </a>


            @endforeach
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="row height">
                @foreach($data['entertainment1'] as $entr)
                    <a href="{{route('details',$entr->slug)}}">
                <div class="col-lg-12 p-1   col-md-12 col-sm-12 image2 entertainment-position">

                     <img src="{{asset('uploads/images/news/'.$entr->feature_image)}}" style="height: 250px; width: 400px;" alt="entertainmnet1 " class="img-fliud  img-thumbnail" >
                    <h5 class="ent-text text-dark text-center mt-3 mb-3">{{$entr->title}}</h5>
                </div>
                    </a>
                @endforeach

            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="row height">
                @foreach($data['entertainment3'] as $entr)
                    <a href="{{route('details',$entr->slug)}}">
                <div class="col-lg-12 p-1   col-md-12 col-sm-12  image4 entertainment-position">
                     <img src="{{asset('uploads/images/news/'.$entr->feature_image)}}"  style="height: 250px; width: 400px;" alt="entertainmnet1" class="img-fliud   img-thumbnail">
                    <h5 class="ent-text text-dark text-center mt-3 mb-3">{{$entr->title}}</h5>
                </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
<div class="container pt-5">
    <div class="row ">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <h5 class="topic-text" style="background-color:#DC3545; color:#fff;">कर्पोरेट फोकस</h5>

        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
{{--            <a href="">--}}
{{--                <h5 class="topic-text" style=" color:#DC3545;">थप</h5>--}}
{{--            </a>--}}

        </div>
        <hr>


    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            @foreach($data['lok1'] as $lok)
            <a href="{{route('details',$lok->slug)}}">
                <div class="card image">
                    <figure class="img-hover-zoom">
                        <img src="{{asset('uploads/images/news/'.$lok->feature_image)}}" class="card-img-top" alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">{{$lok->title}}</h5>
                        <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                        <p class="card-text">{!! $lok->short_description !!}</p>
                    </div>
                </div>
            </a>
            @endforeach

        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            @foreach($data['lok2'] as $lok)
            <a href="{{route('details',$lok->slug)}}">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/images/news/'.$lok->feature_image)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$lok->title}} </h5>
                            <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                        </div>
                    </div>
                </div>
            </div>
            </a>
            @endforeach

        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            @foreach($data['lok3'] as $lok)
            <a href="{{route('details',$lok->slug)}}">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/images/news/'.$lok->feature_image)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$lok->title}}</h5>
                            <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                        </div>
                    </div>
                </div>
            </div>
                </a>
            @endforeach

        </div>

    </div>

</div>
</div>
<div class="container pt-5">
    <div class="row ">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <h5 class="topic-text" style="background-color:#DC3545; color:#fff;">अन्य</h5>

        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <a href="">
{{--                <h5 class="topic-text" style=" color:#DC3545;">थप</h5>--}}
            </a>

        </div>
        <hr>


    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            @foreach($data['uncat1'] as $uncat)
            <a href="{{route('details',$uncat->slug)}}">
                <div class="card image">
                    <figure class="img-hover-zoom">
                        <img src="{{asset('uploads/images/news/'.$uncat->feature_image)}}" class="card-img-top" alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">{{$uncat->title}}</h5>
                        <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                        <p class="card-text">{!! $uncat->short_description !!}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            @foreach($data['uncat2'] as $uncat)
                <a href="{{route('details',$uncat->slug)}}">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/images/news/'.$uncat->feature_image)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$uncat->title}}</h5>
                            <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                        </div>
                    </div>
                </div>
            </div>
                </a>
            @endforeach
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            @foreach($data['uncat3'] as $uncat)
            <a href="{{route('details',$uncat->slug)}}">
                <div class="card image">
                    <figure class="img-hover-zoom">
                        <img src="{{asset('uploads/images/news/'.$uncat->feature_image)}}" class="card-img-top" alt="...">
                    </figure>
                    <div class="card-body">
                        <h5 class="card-title">{{$uncat->title}}</h5>
                        <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                        <p class="card-text">{!! $uncat->short_description !!} </p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

    </div>

</div>

<div class="container pt-5">
    <div class="row ">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <h5 class="topic-text" style="background-color:#DC3545; color:#fff;">शिक्षा</h5>

        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <a href="">
                <h5 class="topic-text" style=" color:#DC3545;">थप</h5>
            </a>

        </div>
        <hr>


    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            @foreach($data['edu'] as $edu)
            <a href="{{route('details',$edu->slug)}}">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/images/news/'.$edu->feature_image)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$edu->title}}</h5>
                            <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                        </div>
                    </div>
                </div>
            </div>
            </a>
            @endforeach
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            @foreach($data['edu1'] as $edu)
                <a href="{{route('details',$edu->slug)}}">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('uploads/images/news/'.$edu->feature_image)}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$edu->title}}</h5>
                                    <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            @foreach($data['edu2'] as $edu)
                <a href="{{route('details',$edu->slug)}}">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset('uploads/images/news/'.$edu->feature_image)}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$edu->title}}</h5>
                                    <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

</div>

<div class="container pt-5">

    <div class="row ">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <h5 class="topic-text" style="background-color:#DC3545; color:#fff;">खेलकुद</h5>

        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

        </div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
            <a href="">
                <h5 class="topic-text" style=" color:#DC3545;">थप</h5>
            </a>

        </div>
        <hr>


    </div>

    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card-group">
                <div class="card mb-3">
                    @foreach( $data['sport1'] as $sport)
                        <a href="{{route('details',$sport->slug)}}">
                    <div class="row g-0">

                        <div class="col-md-5 ">

                            <img src="{{asset('uploads/images/news/'.$sport->feature_image)}}" class="img-fluid rounded-start" alt="sports4">

                        </div>

                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">{{$sport->title}}</h5>
                                <p class="card-text">{!! $sport->short_description !!}</p>
                                <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                            </div>
                        </div>
                    </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 col-sm-12">
            <div class="card mb-3" style="max-width: 540px;">
                @foreach( $data['sport3'] as $sports)
                    <a href="{{route('details',$sports->slug)}}">
                <div class="row g-0">

                    <div class="col-md-4">
                        <img src="{{asset('uploads/images/news/'.$sports->feature_image)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$sports->title}} </h5>
                            <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>


                        </div>
                    </div>
                </div>
            </a>
                @endforeach
            </div>

        </div>



        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @foreach($data['sport2'] as $sports)
                    <a href="{{route('details',$sports->slug)}}">
                <div class="card-group">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('uploads/images/news/'.$sports->feature_image)}}" class="img-fluid rounded-start" alt="sports4">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">{{$sports->title}}</h5>
                                    <p class="card-text">{!! $sports->short_description !!}</p>
                                    <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

            <img src="{{asset('frontend/assets/img/ad2.jpg')}}" alt="ad2" class="img-fluid img-thumbnail">
        </div>

    </div>
</div>
</body>

@include('frontend.includes.footer')

