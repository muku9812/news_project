@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Advertisement</h1>
                        <h2><a href="{{route('advertisement.index')}}" class="btn btn-success">Advertisement List</a></h2>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">

                    <form action="{{route('advertisement.update',$data['row']->id)}}" enctype="multipart/form-data" method='POST'>
                        <input type="hidden" name="_method" value="PUT"/>
                        @csrf

{{--                       {{-- title start--}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text"  class="form-control" name="title" id="title" value={{$data['row']->title}} >
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- title end--}}


                        {{-- image start--}}
                        <div class="form-group">
                            <label for="image_file">Image</label>
                            <input type="file"  class="form-control" name="image_file" id="image_file"  >
                            <img src="{{asset('uploads/images/advertisement/'.$data['row']->image)}}" height="100px" width="100px" alt="image">

                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- image end--}}


                        {{-- expire_date start--}}
                        <div class="form-group">
                            <label for="expire_date">Expire On</label>
                            <input type="date"  class="form-control" name="expire_date" id="expire_date" min="<?php echo date("Y-m-d"); ?>" value={{$data['row']->expire_date}} >
                            @error('expire_date')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- expire_date end--}}


                        {{--category start--}}
                        <div class="form-group">
                            <label for="placement_id" class="control-label">Category</label>
                            <select name="category_id" class="form-control" id="category_id">
                                <option value=" {{$data['row']->placement_id}}">{{$data['row']->PlacementId->name}} </option>
                                @foreach( $data['placements'] as $placement)
                                    <option value="{{$placement->id}}">{{$placement->name}}</option>
                                @endforeach
                            </select>
                            @error('placement_id')
                            <p class="text-danger">{{ "please select the Placement" }}</p>
                            @enderror
                        </div>
                        {{--category end--}}

                        {{-- link start--}}
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text"  class="form-control" name="link" id="link" value={{$data['row']->link}} >
                            @error('link')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- link end--}}



                {{-- updated_by start--}}
                        <div class="form-group">
                            <input type="number" class="form-control" name="updated_by" id="updated_by" value="{{auth()->user()->id}}" hidden >
                        </div>
                        {{-- updated_by end--}}

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
    </div>
        <!-- /.content -->

@endsection
