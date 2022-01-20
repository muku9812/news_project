@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Category</h1>
                           <h2><a href="{{route('category.index')}}" class="btn btn-success btn-sm">Category List</a></h2>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card ">

                <div class="card-body col-sm-6">

                    <form action="{{route('category.store')}}" method='POST'>
                        @csrf
{{--                       {{-- Name start--}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Category to add " name="name" id="name" value="{{old('name')}}" >
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- Name end--}}

                        {{-- slug start--}}
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" value="{{old('slug')}}" >
                            @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- slug end--}}

                        {{-- status start--}}
                        <div class="form-group">
                            <label for="rank">Rank</label>
                            <input type="number" class="form-control" name="rank" id="rank" value="{{old('rank')}}" >
                            @error('rank')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- status end--}}

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

                        {{-- created_by start--}}
                        <div class="form-group">
                            <input type="number" class="form-control" name="created_by" id="created_by" value="{{auth()->user()->id}}" hidden >
                        </div>
                        {{-- created_by end--}}

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
    </div>

@endsection

