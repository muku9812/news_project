@include('frontend.includes.header')

<div class="container pt-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h1>{{$data['news']-> title}}</h1>
        </div>
    </div>
</div>
<div class="container">


    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <h6 class="author-name" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-pencil-square-o" aria-hidden="true"></i>अनलाइनपाना </h6>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>१ घण्टा अगाडि</span>

                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-comment-o" aria-hidden="true"></i>
              टिप्पणी</span>

                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                    <div class="d-flex">
                        <a href=""><i class="fa icons fa-facebook-official" aria-hidden="true"></i></a>
                        <a href=""><i class="fa icons  fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa icons fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="">
                <img  class="image-fluid image-thumbnail img-animination" src="{{asset('uploads/images/news/'.$data['news']->feature_image)}}" alt="{{$data['news']->title}}" width="100%">

            </div>
            <div class="">
                <p class="pt-5 content">
                </p>
                {!! $data['news']->description!!}
            </div>

        </div>


        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

            @foreach($data['adds'] as $add)
            <a href="{{$add->link}}" target="_blank">
            <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERSISEMENT" class="img-fluid img-thumbnail">
            </a>
            @endforeach
            <div>

            </div>

        </div>

    </div>
</div>

{{--<div class="image-ads container" style="display:block; margin-top:auto; margin-left:auto;">--}}
{{--    <figure>--}}
{{--        <img src="img/ads3.jpg" alt="ADVERTISEMENT" class="img-fluid img-thumbnail">--}}
{{--    </figure>--}}
{{--</div>--}}

<div class="image-ads container" style="justify-content:center;">
    @foreach($data['add_top'] as $add)
    <figure>
        <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERTISEMENT" class="img-fluid img-thumbnail" width="65%">
    </figure>
    @endforeach
</div>
<div class="comments pb-5 ml-3">
    <div class="container mt-5">
        <div class="row d-flex ">
            <div class="col-md-8">
                <div class="headings d-flex justify-content-between align-items-center mb-3">
                    <h5>Unread comments(6)</h5>
                    <div class="buttons"> <span class="badge bg-white d-flex flex-row align-items-center"> <span class="text-primary">Comments "ON"</span>
                        <div class="form-check form-switch"> <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked> </div>
                    </span> </div>
                </div>
                <div class="card p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">&nbsp &nbsp james_olesenn</small> <small class="font-weight-bold">Hmm, This poster looks cool</small></span> </div> <small>2 days ago</small>
                    </div>
                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                        <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                        <div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>
                    </div>
                </div>
                <div class="card p-3 mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/C4egmYM.jpg" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary"> &nbsp &nbsp olan_sams</small> <small class="font-weight-bold">Loving your work and profile! </small></span> </div> <small>3 days ago</small>
                    </div>
                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                        <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                        <div class="icons align-items-center"> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                    </div>
                </div>
                <div class="card p-3 mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/0LKZQYM.jpg" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary">&nbsp &nbsp rashida_jones</small> <small class="font-weight-bold">Really cool Which filter are you using? </small></span> </div> <small>3 days ago</small>
                    </div>
                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                        <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                        <div class="icons align-items-center"> <i class="fa fa-user-plus text-muted"></i> <i class="fa fa-star-o text-muted"></i> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                    </div>
                </div>
                <div class="card p-3 mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center"> <img src="https://i.imgur.com/ZSkeqnd.jpg" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary"> &nbsp &nbsp simona_rnasi</small> <small class="font-weight-bold text-primary">@macky_lones</small> <small class="font-weight-bold text-primary">@rashida_jones</small> <small class="font-weight-bold">Thanks </small></span> </div> <small>3 days ago</small>
                    </div>
                    <div class="action d-flex justify-content-between mt-2 align-items-center">
                        <div class="reply px-4"> <small>Remove</small> <span class="dots"></span> <small>Reply</small> <span class="dots"></span> <small>Translate</small> </div>
                        <div class="icons align-items-center"> <i class="fa fa-check-circle-o check-icon text-primary"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="image-ads container" style="justify-content:center;">
    <figure>
        <img src="img/ads3.jpg" alt="ADVERTISEMENT" class="img-fluid img-thumbnail">
    </figure>
</div>
@include('frontend.includes.footer')
