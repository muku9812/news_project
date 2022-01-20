@extends('layouts.backend')


@section('content')


    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Permission List </h1>
                           <h2> <a href="{{route('permission.create')}}" class="btn btn-success btn-sm">Create Permission</a></h2>
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
                            <th>Module</th>
                            <th>Name</th>
                            <th>Route</th>
                            <th>Status</th>
                            <td>Action</td>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data['rows'] as $i => $row)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$row->module->name}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->route}}</td>
{{--                                <td>--}}
{{--                                    @if($row->status==1)--}}
{{--                                        <p style="color:Green">Active</p>--}}
{{--                                    @else--}}
{{--                                        <p style="color:red">Deactive</p>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
                                <td>
                                    <input data-id="{{$row->id}}" class="toggle-class-p1" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Deactive" {{ $row->status ? 'checked' : '' }} >
                                </td>
                                <td>
                                    <a href="{{route('permission.show',$row->id)}}" class="btn btn-success btn-sm">View</a>
                                    <a href="{{route('permission.edit',$row->id)}}" class="btn btn-primary btn-sm">Update</a>
                                    <form action="{{route('permission.destroy',$row->id)}}" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="delete" />
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>

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


@endsection
