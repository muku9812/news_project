@extends('layouts.backend')

@section('content')


    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Role</h1>
                           <h2> <a href="{{route('role.index')}}" class="btn btn-success btn-sm">Role List</a>
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

                    <form action="{{route('role.store')}}" method='POST'  id="regForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Enter role to add " name="name" id="name" value="{{old('name')}}" >
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="number" class="form-control" placeholder="Enter role key " name="key" id="key" value="{{old('key')}}" >
                            @error('key')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
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
                    <div class="card-footer">

                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->


@endsection


