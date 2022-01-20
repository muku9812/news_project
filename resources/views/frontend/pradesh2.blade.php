@include('frontend.includes.header')
<div class="container pt-2">

    <div class=" row inter-national pt-2">
        {{--        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}

        {{--                    <a href="">--}}
        {{--                        <div class="card">--}}
        {{--                            <img src="img/international2.jpg" class="card-img-top" alt="...">--}}
        {{--                            <div class="card-body">--}}
        {{--                                <h5 class="card-title">एगोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन</h5>--}}
        {{--                                <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>--}}

        {{--                                <p class="card-text">गोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन भएको छ । भुतपूर्व गोर्खाहरु समान पेन्सनलगायत माग राख्दै बेलायती प्रधानमन्त्री</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </a>--}}
        {{--                </div>--}}
        {{--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
        {{--                    <a href="">--}}
        {{--                        <div class="card">--}}
        {{--                            <img src="img/international2.jpg" class="card-img-top" alt="...">--}}
        {{--                            <div class="card-body">--}}
        {{--                                <h5 class="card-title">एगोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन</h5>--}}
        {{--                                <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>--}}

        {{--                                <p class="card-text">गोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन भएको छ । भुतपूर्व गोर्खाहरु समान पेन्सनलगायत माग राख्दै बेलायती प्रधानमन्त्री</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </a>--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="row pt-2">--}}
        {{--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}

        {{--                    <a href="">--}}
        {{--                        <div class="card">--}}
        {{--                            <img src="img/international2.jpg" class="card-img-top" alt="...">--}}
        {{--                            <div class="card-body">--}}
        {{--                                <h5 class="card-title">एगोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन</h5>--}}
        {{--                                <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>--}}

        {{--                                <p class="card-text">गोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन भएको छ । भुतपूर्व गोर्खाहरु समान पेन्सनलगायत माग राख्दै बेलायती प्रधानमन्त्री</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </a>--}}
        {{--                </div>--}}
        {{--                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
        {{--                    <a href="">--}}
        {{--                        <div class="card">--}}
        {{--                            <img src="img/international2.jpg" class="card-img-top" alt="...">--}}
        {{--                            <div class="card-body">--}}
        {{--                                <h5 class="card-title">एगोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन</h5>--}}
        {{--                                <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>--}}

        {{--                                <p class="card-text">गोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन भएको छ । भुतपूर्व गोर्खाहरु समान पेन्सनलगायत माग राख्दै बेलायती प्रधानमन्त्री</p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </a>--}}

        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}



        <div class=" pt-2">
            @foreach($data['add_td'] as $add)
            <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ads1" class="img-fliud img-thumbnail" width="100%">
            @endforeach
        </div>

        <h1 class="text-left mt-5 ">मधेस प्रदेश</h1>
    </div>
</div>




<div class="container pt-4">
    <div class="row">
        @foreach($cat as $intr)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="{{route('details',$intr->slug)}}">
                    <div class="card">
                        <img src="{{asset('uploads/images/news/'.$intr->feature_image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$intr->title}}</h5>

                            <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                            <p class="card-text">{!! $intr->short_description !!}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
            <div class="mt-3">
                {{$cat->links('vendor.pagination.bootstrap-4')}}
            </div>
    </div>

{{--    <nav aria-label="...">--}}
{{--        <ul class="pagination pt-3 justify-content-center">--}}
{{--            <li class="page-item disabled">--}}
{{--                <a class="page-link">Previous</a>--}}
{{--            </li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--            <li class="page-item active" aria-current="page">--}}
{{--                <a class="page-link" href="#">2</a>--}}
{{--            </li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="#">Next</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
</div>
<!-- <div class="container">
    <h3 class="topic-text"> अन्य </h3>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">


        </div>

    </div>
  </div> -->
@include('frontend.includes.footer')
