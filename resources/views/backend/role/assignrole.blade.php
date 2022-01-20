@extends('layouts.backend')

@section('content')


    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Role Details
                            <a href="{{route('role.create')}}" class="btn btn-success">Add Role</a>
                            <a href="{{route('role.index')}}" class="btn btn-info">Role List</a>
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
                        <tr>
                            <th>Name</th>
                            <td>{{$data['row']->name}}</td>
                        </tr>
                        <tr>
                            <th>Key</th>
                            <td>{{$data['row']->key}}</td>
                        </tr>
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
                        <tr>
                            <th>Created_At</th>
                            <td>{{$data['row']->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Updated_At</th>
                            <td>{{$data['row']->updated_at}}</td>
                        </tr>


                    </table>


                    <h2>Permission Assignment</h2>
                    <form action="{{route('role.post_permission')}}" method="post">
                        @csrf
                        <input type="hidden" name="role_id" value="{{$data['row']->id}}"/>
                        <table class="table table-bordered">
                            <tr>
                                <th>Module</th>
                                <th>Permission</th>
                            </tr>
                            @foreach($data['modules'] as $module)
                                <tr>
                                    <td>{{$module->name}}</td>
                                    <td>
                                        <ul style="list-style: none">
                                            @foreach($module->permissions as $permission)
                                                @if(in_array($permission->id,$data['assigned_permission']))
                                                    <li><input type="checkbox" name="permission_id[]" value="{{$permission->id}}" checked="checked"/> {{$permission->name}}</li>
                                                @else
                                                    <li><input type="checkbox" name="permission_id[]" value="{{$permission->id}}"/> {{$permission->name}}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"><input type="submit" class="btn btn-info" value="Assign"/></td>
                            </tr>
                        </table>
                    </form>
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
