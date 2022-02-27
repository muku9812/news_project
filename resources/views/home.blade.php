@extends('layouts.backend')
@section('content')

<div class="row" style="padding-left:40px; padding-top: 2% ">

       <div class="col-xl-3 col-md-6 mb-4" style="width: 24%; height:100px;   ">
           <a href="{{route('category.index')}}">

                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Category</div>
                            <div class="col-auto">
                                <i class="fas fa-tags fa-2x"></i></div>
                            <div class="col mr-1">
                                <div class="h5 mb-2 font-weight-bold text-gray-1000">{{$data['category']}}</div>
                            </div>
                        </div>
                    </div>
                </div>
           </a>
            </div>

    <div class="col-xl-3 col-md-6 mb-4" style="width: 24%; height:100px ">
        <a href="{{route('news.index')}}">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">News</div>
                    <div class="col-auto">
                            <i class="fa fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    <div class="col mr-1">
                        <div class="h5 mb-2 font-weight-bold text-gray-1000">{{$data['news']}}</div>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4" style="width: 24%; height:100px">
        <a href="{{route('user.index')}}">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Users</div>
                    <div class="col-auto">
                        <i class="fa fa-users fa-2x text-gray-300"></i></div>
                    <div class="col mr-1">
                        <div class="h5 mb-2 font-weight-bold text-gray-1000">{{$data['user']}}</div>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4" style="width: 24%; height:100px">
        <a href="{{route('advertisement.active')}}">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Active Adds</div>
                    <div class="col-auto">
                        <i class="fa fa-bullhorn fa-2x text-gray-300"></i></div>
                    <div class="col mr-1">
                        <div class="h5 mb-2 font-weight-bold text-gray-1000">{{$data['active_adds']}}</div>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>
<div class="row" style="padding-left:40px; padding-top: 2% ">
    <div class="col-xl-3 col-md-6 mb-4" style="width: 24%; height:100px;   ">
        <a href="{{route('news.test')}}">

            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">News Post by you</div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x"></i></div>
                        <div class="col mr-1">
                            <div class="h5 mb-2 font-weight-bold text-gray-1000">{{$data['count']}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4" style="width: 24%; height:100px;   ">
        <a href="#">

            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">No.of Post In this Month</div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x"></i></div>
                        <div class="col mr-1">
                            <div class="h5 mb-2 font-weight-bold text-gray-1000">{{  $data['count_post']}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>


</div>


@endsection

