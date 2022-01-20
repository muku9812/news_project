@extends('layouts.backend')

@section('content')

    <div class="row">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>User List </h1>
                            <h2><a href="{{route('user.create')}}" class="btn btn-success btn-sm">Create User</a></h2>
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
                                <th>Name</th>
                                <th>email</th>
                                <td>Action</td>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data['rows'] as $i => $row)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>

                                    <td>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
{{--                                        <form action="{{route('role.destroy',$row->id)}}" method="post" class="d-inline">--}}
{{--                                            <input type="hidden" name="_method" value="delete" />--}}
{{--                                            @csrf--}}
{{--                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>--}}

{{--                                        </form>--}}
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




    </div>

@endsection
