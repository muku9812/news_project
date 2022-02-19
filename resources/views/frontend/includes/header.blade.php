<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <title>Home</title>
</head>
<div class="container">
    <div class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <span class="icons header-margin">{{$nepaliDate}}</span>
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        ताजा अपडेट
                    </button>

                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="text-justify"> ताजा अपडेट</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                </div>

                                <div class="modal-body ">
                                    <div class="container-fluid">
                                        <div class="row">
                                            @foreach($data['brk'] as $break)

                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                                <a href="{{route('details',$break->slug)}}">
                                                <div class="card mb-3" style="max-width: 540px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('uploads/images/news/'.$break->feature_image)}}" class="img-fluid rounded-start" alt="{{$break->title}}" width="100%">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-center" > {!! $break->title !!} </h5>

                                                            </div>
                                                        </div>
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
                    </div>
                </div>

                <div class="d-flex">

                    <a href="{{$data['row']->facebook}}" target="_blank"><i class="fa icons fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="{{$data['row']->twitter}}" target="_blank"><i class="fa icons  fa-twitter" aria-hidden="true"></i></a>
                    <a href="{{$data['row']->youtube}}" target="_blank"><i class="fa icons fa-youtube-play" aria-hidden="true"></i></a>
                </div>

            </div>
        </nav>
    </div>

</div>
</div>

<div class="container">
    <div class="row justify-content-lg-start align-items-sm-start">
        <div class="row ">
            <div class="col-3" style="padding-top: 20px;">
            <a href="{{route('index')}}">
            <figure  >
                <img src="{{asset('uploads/images/setting/logo/'.$data['row']->logo)}}" alt="Logo" class="img-fluid">
            </figure>
            </a>
            </div>

                <div class=" col-9" style="padding-left: 40px";>
                            @foreach($data['add_top'] as $add)
                                <figure class="img-thubmail">
                                    <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERSISEMENT" width="100%">
                                </figure>
                            @endforeach
                </div>

        </div>
    </div>

</div>
{{--<div class="row justify-content-center align-items-center w-100" >--}}
    <div class="col-xl-12 col-lg-9 col-md-9 col-sm-12   col-12 ">
{{--        @foreach($data['add_top'] as $add)--}}
{{--            <figure class="img-thubmail">--}}
{{--                <img src="{{asset('uploads/images/advertisement/'.$add->image)}}" alt="ADVERSISEMENT" width="100%">--}}
{{--            </figure>--}}
{{--        @endforeach--}}
    </div>
{{--</div>--}}
<div class="">
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#0F3F88; ">
        <div class="container">


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                    <li class="nav-item header-margin nav_margin" >
                        <a class="nav-link navbar-brand "  aria-current="page" href="{{route('index')}}">मुख्य पाना</a>
                    </li>
                    <li class="nav-item nav_margin">
                        <a class="nav-link navbar-brand " href="{{route('politics')}}">राजनीति</a>
                    </li>
                    <li class="nav-item nav_margin">
                        <a class="nav-link navbar-brand " aria-current="page" href="{{route('corporate')}}">कर्पोरेट फोकस</a>
                    </li>
                    <li class="nav-item nav_margin">
                        <a class="nav-link navbar-brand " href="{{route('samachar')}}">समाचार</a>
                    </li>

                    <li class="nav-item navbar-dark dropdown nav_margin">
                        <a class="nav-link navbar-brand dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            बैंकिंग
                        </a>




                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">


                            <li><a class="dropdown-item " href="{{route('share')}}">सेयर बजार</a></li>
{{--                            <li><a class="dropdown-item" href="auto.php">अटो</a></li>--}}
                            <li><a class="dropdown-item" href="{{route('insurance')}}">इन्स्योरेन्स</a></li>
                            <li><a class="dropdown-item" href="{{route('udyog')}}">उधोग</a></li>

                        </ul>

                    </li>
                    <li class="nav-item dropdown nav_margin">
                        <a class="nav-link navbar-brand dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            प्रदेश
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item " href="{{route('pradesh1')}}"> प्रदेश १</a></li>
                            <li><a class="dropdown-item " href="{{route('pradesh2')}}">मधेस प्रदेश</a></li>
                            <li><a class="dropdown-item " href="{{route('bagmati')}}">बागमती</a></li>
                            <li><a class="dropdown-item " href="{{route('gandaki')}}">गण्डकी</a></li>
                            <li><a class="dropdown-item " href="{{route('lumbini')}}">लुम्बिनी</a></li>
                            <li><a class="dropdown-item " href="{{route('karnali')}}">कर्णाली</a></li>
                            <li><a class="dropdown-item " href="{{route('sudurpashchim')}}">सुदुरपश्चिम</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">


                    <li class="nav-item nav_margin">
                        <a class="nav-link navbar-brand " aria-current="page" href="{{route('entertainment')}}">मनोरञ्जन</a>
                    </li>
                    <li class="nav-item nav_margin">
                        <a class="nav-link navbar-brand " href="{{route('international')}}">अन्तर्राष्ट्रिय</a>
                    </li>
                    <li class="nav-item nav_margin">
                        <a class="nav-link navbar-brand " aria-current="page" href="{{route('sports')}}">खेलकुद</a>
                    </li>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href=""><i class="fa icon-s  fa-clock-o" aria-hidden="true"></i></a>
                    <a href=""><i class="fa icon-s   fa-user-o" aria-hidden="true"></i></a>


                    <a href=""><i class="fa  icon-s  fa-clone" aria-hidden="true"></i></a>

                </div>
            </div>
        </div>
    </nav>
</div>
</div>
</html>
