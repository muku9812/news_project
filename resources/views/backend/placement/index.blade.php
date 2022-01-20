@extends('layouts.backend')
@section('content')


    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Placement List</h1>
                           <h2> <a href="{{route('placement.create')}}" class="btn btn-success btn-sm">Add Placement</a></h2>
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
                            <th>Name</th>
                            <th>Status</th>
                            <td>Action</td>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data['rows'] as $i => $row)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$row->name}}</td>
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
                                    <a href="{{route('placement.show',$row->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{route('placement.edit',$row->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                                    <form action="{{route('role.destroy',$row->id)}}" method="post" class="d-inline">
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

@endsection
