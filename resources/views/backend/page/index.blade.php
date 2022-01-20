@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pages List</h1>
                        <h2><a href="{{route('page.create')}}" class="btn btn-success btn-sm">Add Page</a></h2>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">
                    @if(Session::has('success'))
                        <p class="alert alert-success">{{Session::get('success')}}</p>
                    @endif
                    @if(Session::has('error'))
                        <p class="alert alert-danger">{{Session::get('danger')}}</p>
                    @endif
                    <table id="datatable" class="table table-striped" style="width:100%" >
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>slug</th>
                            <th>short Description</th>
                            <th>Page Image</th>
                            <th>Status</th>
                            <th>Created By</th>

                            <td>Action</td>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data['rows'] as $i => $row)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$row->title}}</td>
                                <td>{{$row->slug}}</td>
                                <td>{{$row->short_description}}</td>
                                <td>

                                    <img src="{{asset('uploads/images/page_image/'.$row->page_image)}}" height="100px" width="100px" alt="image">
                                </td>
                                {{--                                <td>{{$row->slug}}</td>--}}

                                {{--                                <td>{!! $row->description !!}</td>--}}





                                <td>
                                    <input data-id="{{$row->id}}" class="toggle-class-p1" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $row->status ? 'checked' : '' }} >
                                </td>

{{--                                <td>--}}
{{--                                    @if($row->status==1)--}}
{{--                                        <p style="color:Green">Active</p>--}}
{{--                                    @else--}}
{{--                                        <p style="color:red">Deactive</p>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
                                <td>{{$row->UserId->name}}</td>
                                <td>
                                    <a href="{{route('page.show',$row->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('page.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <form action="{{route('page.destroy',$row->id)}}" method="post" class="d-inline">
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
