@include('frontend.includes.header')
<div class="container pt-2">
    <h3 class="topic-text">अन्तर्राष्ट्रिय</h3>
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



        <div class=" col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <img src="img/ads1.jpg" alt="ads1" class="img-fliud img-thumbnail">

        </div>


    </div>
</div>

<div class="container pt-5">
    <div class="row">
{{--        @foreach($international as $intr)--}}
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="{{asset('uploads/images/news/'.$data['row']->feature_image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">एगोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन</h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text">गोर्खा आन्दोलनको समर्थनमा लन्डनमा विशाल प्रदर्शन भएको छ । भुतपूर्व गोर्खाहरु समान पेन्सनलगायत माग राख्दै बेलायती प्रधानमन्त्री</p>
                    </div>
                </div>
            </a>
        </div>
{{--        @endforeach--}}
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="img/international3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">२ महिनामै फिप्ना अमेरिका द्धारा नेपालमा २२ हजार बढी </h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text"> महासंघ अमेरिका (फिप्ना) ले २ महिनाको अवधिमै नेपालमा २२ हजार बढी अमेरिकी डलर बराबरको आर्थिक सहयोग गरेको छ । उक्त रकम बाट नेपालमा खाद्धान्न </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="img/international4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">असंलग्न आन्दोलनको सान्दर्भिकता आज पनि यथावत : सभामुख सापकोट</h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text">असमानता र अनुचित व्यवहारका घटनाका कारण असंलग्न आन्दोलनको सान्दर्भिकता आज पनि यथावत रहेको बताएका छन् ।</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="container pt-4">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="img/international5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">यूएईमा दुई नेपालीको ह*त्या</h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text">यूएईमा दुई नेपालीको ह*त्या भएको छ । सारजाहमा दुई जनाको ह*त्या भए पनि तनहुँ भगवतीपुर ७ का ३६ वर्षिय मंगलराज श्रेष्ठको मात्रै परिचय खुलेको छ । अर्का नेपालीको भने परिचय खुलेको छैन</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="img/international6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">एमाले सचिवमा टंक कार्कीले दिए उम्मेदवारी</h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text">सौराहमा चलिरहेको दशौं महाधिवेशनको बन्दसत्रमा केपी र्शा ओलीले सहमतिका लागि १९ पदाधिकारी र ३०१  </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="img/international7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">जनजाति महासंघ अमेरीकाद्धारा राउटे शमुदायलाई राहत वितरण</h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text">नेपाल आदिवासी जनजाति महासंघ अमेरीका (फिप्ना) ले नेपालका राउटे समुदायलाई राहत वितरण गरेको छ । जनजाति महासंघ अमेरीकाले ५३ राउटे घर परिवारलाई खा</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="img/international5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">यूएईमा दुई नेपालीको ह*त्या</h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text">यूएईमा दुई नेपालीको ह*त्या भएको छ । सारजाहमा दुई जनाको ह*त्या भए पनि तनहुँ भगवतीपुर ७ का ३६ वर्षिय मंगलराज श्रेष्ठको मात्रै परिचय खुलेको छ । अर्का नेपालीको भने परिचय खुलेको छैन</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="img/international6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">एमाले सचिवमा टंक कार्कीले दिए उम्मेदवारी</h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text">सौराहमा चलिरहेको दशौं महाधिवेशनको बन्दसत्रमा केपी र्शा ओलीले सहमतिका लागि १९ पदाधिकारी र ३०१  </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="">
                <div class="card">
                    <img src="img/international7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">जनजाति महासंघ अमेरीकाद्धारा राउटे शमुदायलाई राहत वितरण</h5>

                        <span class="blog-title ml-2" style="font-weight: 500;  padding-right: 14px; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>
                        <p class="card-text">नेपाल आदिवासी जनजाति महासंघ अमेरीका (फिप्ना) ले नेपालका राउटे समुदायलाई राहत वितरण गरेको छ । जनजाति महासंघ अमेरीकाले ५३ राउटे घर परिवारलाई खा</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <nav aria-label="...">
        <ul class="pagination pt-3 justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<!-- <div class="container">
    <h3 class="topic-text"> अन्य </h3>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">


        </div>

    </div>
  </div> -->
@include('frontend.includes.footer')
