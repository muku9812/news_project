@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Advertisement</h1>
                        <h2>
                            <a href="{{route('advertisement.index')}}" class="btn btn-success btn-sm">Advertisement List</a>
                        </h2>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body col-sm-6">

                    <form action="{{route('advertisement.store')}}" enctype="multipart/form-data" method='POST'>
                        @csrf
{{--                       {{-- title start--}}
                        <div class="form-group">

                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Enter title for Advertisement " name="title" id="title" value="{{old('title')}}" >
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- title end--}}

                        {{-- image start--}}
                        <div class="form-group">
                            <label for="image_file">Image</label>
                            <input type="file" class="form-control"   name="image_file" id="image_file" value="{{old('image_file')}}" >
                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- image end--}}

                        {{-- expire_date start--}}
                        <div class="form-group">
                            <label for="expire_date">Expire On</label>
                            <input type="date" class="form-control" placeholder="Select Expire date for Adds" name="expire_date" id="expire_date" min="<?php echo date("Y-m-d"); ?>"  value="{{old('expire_date')}}" >
                            @error('expire_date')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- expire_date end--}}

                        {{-- link start--}}
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" placeholder="Enter links Adds" name="link" id="link" value="{{old('link')}}" >
                            @error('link')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- link end--}}



                        {{--category start--}}
                        <div class="form-group">
                            <label for="placement" class="control-label">Placement</label>
                            <select name="placement_id" class="form-control" id="placement_id">
                                <option value=" ">Select Class</option>
                                @foreach( $data['placements'] as $placement)
                                    <option value="{{$placement->id}}">{{$placement->name}}</option>
                                @endforeach
                            </select>
                            @error('placement_id')
                            <p class="text-danger">{{ "please select the Placement" }}</p>
                            @enderror
                        </div>
                        {{--category end--}}

                        {{-- status start--}}
                        <div class="form-group">
                            <label for="status" class="col-sm-1">Status</label>
                            <div class="form-check form-check-inline">
                                <input type="radio"  name='status' id="status" value="1">Active
                                <input  type="radio" name='status' id="status" value="0" checked>Deactive
                            </div>
                            @error('status')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- status end--}}

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
