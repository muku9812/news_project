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
                            <a href="{{route('page.create')}}" class="btn btn-success btn-sm">Add Page</a>
                            <a href="{{route('page.index')}}" class="btn btn-info btn-sm">Page List</a>
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
                            <th>Page Image</th>
                            <td>

                                <img src="{{asset('uploads/images/page_image/'.$data['row']->page_image)}}" height="200px" width="200px" alt="news">
                            </td>
                        </tr>

                        {{--                        image end--}}


                        {{--                        short_description start--}}


                        <tr>
                            <th>Short Description</th>
                            <td>{{$data['row']->short_description}}</td>
                        </tr>
                        {{--                        short_description end--}}


                        {{--                        description start--}}
                        <tr>
                            <th>Description</th>
                            <td>{!! $data['row']->description !!}</td>
                        </tr>
                        {{--                        short_description end--}}








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
                        {{--                        updated end--}}

                        {{--                        created_at start--}}
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
