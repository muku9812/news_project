@extends('layouts.backend')

@section('content')


    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Permission</h1>
                           <h2> <a href="{{route('permission.index')}}" class="btn btn-success btn-sm">Permission List</a>
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

                    <form action="{{route('permission.store')}}" method='POST'  id="regForm">
                        @csrf

                        <div class="form-group">
                            <label for="module_id" class="control-label">Class</label>
                            <select name="module_id" class="form-control" id="module_id">
                                <option value="">Select Class</option>
                                @foreach($data['module_id'] as $module)
                                    <option value="{{$module->id}}">{{$module->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Permission to add " name="name" id="name" value="{{old('name')}}" >
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="route">Route</label>
                            <input type="text" class="form-control" name="route" id="route" value="{{old('route')}}" >
                            @error('route')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status" class="col-sm-1">Status</label>
                            <div class="form-check form-check-inline">
                                <input type="radio"  name='status' id="status" value="1">Active
                                <input  type="radio" name='status' id="status" value="0" checked>
                                Deactive
                            </div>
                            @error('status')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="created_by" id="created_by" value="{{auth()->user()->id}}" hidden >
                        </div>
                        <div class="form-group">
                            <input type="submit" value="save" class="btn btn-primary">
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->


@endsection


