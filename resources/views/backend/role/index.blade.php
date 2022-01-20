@extends('layouts.backend')
@section('content')


    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Role Index </h1>
                           <h2> <a href="{{route('role.create')}}" class="btn btn-success btn-sm">Add Role</a></h2>
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
                            <th>Key</th>
                            <th>Status</th>
                            <td>Action</td>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data['rows'] as $i => $row)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->key}}</td>
{{--                                <td>--}}
{{--                                    @if($row->status==1)--}}
{{--                                        <p style="color:Green">Active</p>--}}
{{--                                    @else--}}
{{--                                        <p style="color:red">Deactive</p>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
                                <td>
                                    <input data-id="{{$row->id}}" class="toggle-class-r1" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $row->status ? 'checked' : '' }} >
                                </td>

                                <td>
                                    <a href="{{route('role.show',$row->id)}}" class="btn btn-success btn-sm">View</a>
                                    <a href="{{route('role.edit',$row->id)}}" class="btn btn-primary btn-sm">Update</a>
                                    <form action="{{route('role.destroy',$row->id)}}" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="delete" />
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                                    </form>
                                    <a href="{{route('role.assign_permission',$row->id)}}" class="btn btn-info btn-sm">Assign </a>
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

@endsection
