@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Advertisement Details</h1>
                        <h2>
                            <a href="{{route('advertisement.create')}}" class="btn btn-success btn-sm">Add Advertisement</a>
                            <a href="{{route('advertisement.index')}}" class="btn btn-info btn-sm">Advertisement List</a>
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


                        {{--                        title start--}}
                        <tr>
                            <th>Expire On</th>
                            <td>{{$data['row']->expire_date}}</td>
                        </tr>
                        {{--                        title end--}}


                        {{--                        slug start--}}
                        <tr>
                            <th>Image</th>
                            <td>

                                <img src="{{asset('uploads/images/advertisement/'.$data['row']->image)}}" height="100px" width="400px" alt="advertisement">
                            </td>
                        </tr>

                        {{--                        Slug end--}}


                        {{--                        Placement start--}}


                        <tr>
                            <th>Placement</th>
                            <td>{{$data['row']->PlacementId->name}}</td>
                        </tr>
                        {{--                        Placement end--}}

                        {{--                        Status start--}}

                        <tr>
                            <th>Status</th>
                            <td>
                                @if($data['row']->status==1)
                                   <h3><p style="color:Green">Active</p></h3>
                                @else
                                    <h3><p style="color:red">Deactive</p></h3>

                                @endif
                            </td>
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
