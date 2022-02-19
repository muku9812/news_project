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
                    <h6 class="author-name" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-pencil-square-o" aria-hidden="true"></i>तराई खबर  </h6>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-clock-o" aria-hidden="true"></i>{{ $data['news']->created_at->diffForHumans() }}</span>

                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <span class="blog-title ml-2" style="font-weight: 500; color: #807d7d; font-size: 16px;"><i class="fa icons fa-comment-o" aria-hidden="true"></i>{{$data['news']->CategoryId->name}}</span>

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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="pt-5 content">
                </p>
                {!! $data['news']->description!!}
            </div>

        </div>



        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
           <b>ADVERTISEMENT</b>
            @foreach($data['adds'] as $add)
            <a href="{{$add->link}}" target="_blank">
            <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERSISEMENT" class="img-fluid img-thumbnail">
            </a>
            @endforeach

            <div>

            </div>

        </div>
        <div class="image-ads container pt-5" style="justify-content:center;">

            @foreach( $data['details_down1'] as $add)
                <a href="{{$add->link}}" target="-_blank">
                    <figure>
                        <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERTISEMENT" class="img-fluid img-thumbnail" width="65%">
                    </figure>
                </a>
            @endforeach
        </div>

        <div class="container contact">
            <H1><u class="btn btn-danger" style="pointer-events: none;">प्रतिक्रिया दिनुहोस्</u></H1>
            <form action="{{route('comment.store')}}" enctype="multipart/form-data" method='POST'>
                @csrf
                <div class="col-md-9">
                    <div class="contact-form">
                        <div class="row ">
                        <div class=" form-group">
                            <label class="control-label col-sm-2" for="name">पुरा नाम*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="पुरा नाम" name="name">
                            </div>
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                            <div class=" form-group">
                                <label class="control-label col-sm-2" for="email">इमेल*</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="इमेल" name="email">
                                </div>
                            </div>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="comment">प्रतिक्रिया</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                            </div>
                            <input type="hidden" value="{{$data['news']->id}}" name="news_id" id="news_id">
                        </div>
                        @error('comment')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 pt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        <div class="container">
        @foreach($data['comment'] as $comment)
        <div class="col-3 pt-3">
            <h4 style="font-size: large ">
               {{$comment->name}}
            </h4>
        </div>
        <div class="col-5" style="padding-left: 1.5%;"><p>{{$comment->comment}}</p>
        </div>
    @endforeach
        </div>
    </div>
</div>

<div class="image-ads container pt-5" style="justify-content:center;">

    @foreach( $data['details_down'] as $add)
        <a href="{{$add->link}}" target="-_blank">
    <figure>
        <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERTISEMENT" class="img-fluid img-thumbnail" width="65%">
    </figure>
        </a>
    @endforeach
</div>

<div class=" row container " style="padding-left: 117px">
    <h1 class="text-center">छुटाउनुभयो कि ?</h1>
    @foreach( $data['cate'] as $cat)
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">

            <a href="{{route('details',$cat->slug)}}">

                <div class="card image">

                    <div class="img-hover-zoom">
                        <img src="{{asset('uploads/images/news/'.$cat->feature_image)}}" class="card-img-top" alt="{{$cat->title}}" width="120px" height="120px">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: large;">{{$cat->title}}</h5>
                        <p class="card-text"></p>
                    </div>

                </div>

            </a>



    </div>
    @endforeach
</div>



@include('frontend.includes.footer')
