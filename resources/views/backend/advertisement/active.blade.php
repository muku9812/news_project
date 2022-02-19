@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Active Advertisements </h1>
                        <h2><a href="{{route('advertisement.create')}}" class="btn btn-success btn-sm">Add Advertisement</a></h2>
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
                            <th>Image</th>
                            <th>Expire Date</th>
                            <th>Link</th>

                            <th>Created By</th>

                            <td>Action</td>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data['adds_active'] as $i => $row)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$row->title}}</td>
                                <td>

                                    <img src="{{asset('uploads/images/advertisement/'.$row->image)}}" height="50px" width="200px" alt="image">
                                </td>
                                <td>{{$row->expire_date}}</td>
                                <td>{{$row->link}}</td>
                                <td>{{$row->UserId->name}}</td>
                                <td>
                                    <a href="{{route('advertisement.show',$row->id)}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('advertisement.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <form action="{{route('advertisement.destroy',$row->id)}}" method="post" class="d-inline">
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
