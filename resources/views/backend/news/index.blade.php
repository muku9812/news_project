@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News List</h1>
                    <h2><a href="{{route('news.create')}}" class="btn btn-success btn-sm">Add News</a></h2>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">
                    <table id="datatable" class="table table-striped" style="width:100%" >
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Image</th>
{{--                            <th>Slug</th>--}}
{{--                            <th>Short Description</th>--}}
{{--                            <th>Description</th>--}}
                            <th>Feature Key</th>
                            <th>Slider News</th>
                            <th>Breaking Key</th>
                            <th>Status</th>
{{--                            <th>Created By</th>--}}

                            <td>Action</td>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data['rows'] as $i => $row)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$row->title}}</td>
                                <td>

                                    <img src="{{asset('uploads/images/news/'.$row->feature_image)}}" height="100px" width="100px" alt="image">
                                </td>
{{--                                <td>{{$row->slug}}</td>--}}
{{--                                <td>{!! $row->short_description !!}</td>--}}
{{--                                <td>{!! $row->description !!}</td>--}}

{{--                                <td>--}}
{{--                                    @if($row->feature_key==1)--}}
{{--                                        <p style="color:Green">Yes</p>--}}
{{--                                    @else--}}
{{--                                        <p style="color:red">No</p>--}}
{{--                                    @endif--}}
{{--                                </td>--}}

                                <td>
                                    <input data-id="{{$row->id}}" class="toggle-class-1" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Yes" data-off="No" {{ $row->feature_key ? 'checked' : '' }} >
                                </td>

{{--                                <td>--}}
{{--                                    @if($row->slider_key==1)--}}
{{--                                        <p style="color:Green">Yes</p>--}}
{{--                                    @else--}}
{{--                                        <p style="color:red">No</p>--}}
{{--                                    @endif--}}
{{--                                </td>--}}

                                <td>
                                    <input data-id="{{$row->id}}" class="toggle-class-2" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Yes" data-off="No" {{ $row->slider_key ? 'checked' : '' }} >
                                </td>

{{--                                <td>--}}
{{--                                    @if($row->breaking_key==1)--}}
{{--                                        <p style="color:Green">Yes</p>--}}
{{--                                    @else--}}
{{--                                        <p style="color:red">No</p>--}}
{{--                                    @endif--}}
{{--                                </td>--}}


                                <td>
                                    <input data-id="{{$row->id}}" class="toggle-class-3" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Yes" data-off="No" {{ $row->breaking_key ? 'checked' : '' }} >
                                </td>

                                <td>
                                    <input data-id="{{$row->id}}" class="toggle-class-4" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $row->status ? 'checked' : '' }} >
                                </td>

{{--                                <td>--}}
{{--                                    @if($row->status==1)--}}
{{--                                        <p style="color:Green">Active</p>--}}
{{--                                    @else--}}
{{--                                        <p style="color:red">Deactive</p>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td>{{$row->UserId->name}}</td>--}}
                                <td style="width: 100px">
                                    <a href="{{route('news.show',$row->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('news.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <form action="{{route('news.destroy',$row->id)}}" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="delete" />
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>

                                    </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
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
