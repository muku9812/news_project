@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News Details</h1>
                        <h2>
                            <a href="{{route('news.create')}}" class="btn btn-success btn-sm">Add News</a>
                            <a href="{{route('news.index')}}" class="btn btn-info btn-sm">News List</a>
                        </h2>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">

                    <table class="table table-bordered">
                        {{--                        title start--}}
                        <tr>
                            <th>Title</th>
                            <td>{{$data['row']->title}}</td>
                        </tr>
                        {{--                        title end--}}


                        {{--                        slug start--}}
                        <tr>
                            <th>Slug</th>
                            <td>{{$data['row']->slug}}</td>
                        </tr>
                        {{--                        slug end--}}


                        {{--                        image start--}}
                        <tr>
                            <th>Image</th>
                            <td>

                                <img src="{{asset('uploads/images/news/'.$data['row']->feature_image)}}" height="200px" width="200px" alt="news">
                            </td>
                        </tr>

                        {{--                        image end--}}


                        {{--                        meta_description start--}}
                        <tr>
                            <th>Meta Description</th>
                            <td>{!! $data['row']->meta_description !!}</td>
                        </tr>
                        {{--                        meta_description end--}}


                        {{--                        meta_description start--}}
                        <tr>
                            <th>Meta Tag</th>
                            <td>{!! $data['row']->meta_tag !!}</td>
                        </tr>
                        {{--                        meta_tag end--}}


                        {{--                        short_description start--}}
                        <tr>
                            <th>Short Description</th>
                            <td>{!! $data['row']->short_description !!}</td>
                        </tr>
                        {{--                        short_description end--}}



                        {{--                        description start--}}
                        <tr>
                            <th>Description</th>
                            <td>{!! $data['row']->description !!}</td>
                        </tr>
                        {{--                        short_description end--}}


                        {{--                        categoryId start--}}

                        <tr>
                            <th>Category</th>
                            <td>{{$data['row']->CategoryId->name}} </td>
                        </tr>
                        {{--                        created_by end--}}


                        {{--                        feature_key start--}}

                        <tr>
                            <th>Feature Key</th>
                            <td>
                                @if($data['row']->feature_key==1)
                                    <p style="color:Green">Yes</p>
                                @else
                                    <p style="color:red">No</p>
                                @endif
                            </td>
                        </tr>
                        {{--                        feature_key end--}}

                        {{--                        slider_key start--}}

                        <tr>
                            <th>Slider Key</th>
                            <td>
                                @if($data['row']->slider_key==1)
                                    <p style="color:Green">Yes</p>
                                @else
                                    <p style="color:red">No</p>
                                @endif
                            </td>
                        </tr>
                        {{--                        slider_key end--}}

                        {{--                        breaking_key start--}}

                        <tr>
                            <th>Breaking Key</th>
                            <td>
                                @if($data['row']->breaking_key==1)
                                    <p style="color:Green">Yes</p>
                                @else
                                    <p style="color:red">No</p>
                                @endif
                            </td>
                        </tr>
                        {{--                        breaking_key end--}}

                        {{--                        pradresh start--}}

                        <tr>
                            <th>Pradesh</th>
                            <td>
                                @if($data['row']->pradesh==1)
                                    प्रदेश १
                                @elseif($data['row']->pradesh==2)
                                    मधेस प्रदेश
                                @elseif($data['row']->pradesh==3)
                                    बागमती
                                @elseif($data['row']->pradesh==4)
                                    गण्डकी
                                @elseif($data['row']->pradesh==5)
                                    लुम्बिनी
                                @elseif($data['row']->pradesh==6)
                                    कर्णाली
                                @elseif($data['row']->pradesh==7)
                                    सुदुरपश्चिम
                                @else
                                    अन्य
                                @endif
                            </td>
                        </tr>
                        {{--                        pradesh end--}}

                        {{--                        Status start--}}

                        <tr>
                            <th>Status</th>
                            <td>
                                @if($data['row']->status==1)
                                    <p style="color:Green">Active</p>
                                @else
                                    <p style="color:red">Deactive</p>
                                @endif
                            </td>
                        </tr>
                        {{--                        Status end--}}

                        {{--                        created_by start--}}

                        <tr>
                            <th>Created By</th>
                            <td>{{$data['row']->UserId->name}}</td>
                        </tr>
                        {{--                        created_by end--}}


                        {{--                        updated start--}}

                        <tr>
                            <th>Updated By</th>
                            <td>
                            @if( $data['row']->updated_by == Null)
                                Not Updated Yet!!

                            @else
                                {{ $data['row']->UpdatedId->name }}

                            @endif
                            </td>
                        </tr>

                        <tr>
                            <th>Created_At</th>
                            <td>{{$data['row']->created_at}}</td>
                        </tr>
                        {{--                        created_at end--}}


                        {{--                        Updated_At start--}}
                        <tr>
                            <th>Updated_At</th>
                            <td>{{$data['row']->updated_at}}</td>
                        </tr>
                        {{--                        Updated_At end--}}



                    </table>
                    <!-- /.card-body -->
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
