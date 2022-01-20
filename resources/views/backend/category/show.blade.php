@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Category Details
                            <a href="{{route('category.create')}}" class="btn btn-success">Add Category</a>
                            <a href="{{route('category.index')}}" class="btn btn-info">Category List</a>
                        </h1>
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
                        {{--                        Name start--}}
                        <tr>
                            <th>Name</th>
                            <td>{{$data['row']->name}}</td>
                        </tr>
                        {{--                        Name end--}}

                        {{--                        slug start--}}
                        <tr>
                            <th>Slug</th>
                            <td>{{$data['row']->slug}}</td>
                        </tr>

                        {{--                        Slug end--}}


                        {{--                        Rank start--}}


                        <tr>
                            <th>Rank</th>
                            <td>{{$data['row']->rank}}</td>
                        </tr>
                        {{--                        Rank end--}}

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
                                {{$data['row']->UpdatedId->name}}

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
