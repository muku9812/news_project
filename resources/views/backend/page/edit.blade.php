@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Page</h1>
                        <h2>
                            <a href="{{route('page.index')}}" class="btn btn-success btn-sm">Page List</a>
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

                    <form action="{{route('page.update',$data['row']->id)}}" enctype="multipart/form-data" method='POST'>
                        <input type="hidden" name="_method" value="PUT"/>
                        @csrf
                        {{--                       {{-- title start--}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Enter title for Page " name="title" id="title" value="{{$data['row']->title}}" >
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- title end--}}

                        {{-- slug start--}}
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" placeholder="Enter slug for Page " name="slug" id="slug" value="{{$data['row']->slug}}" >
                            @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- slug end--}}



                        {{-- short_description start--}}
                        <div class="form-group">
                            <label for="short_description">Short description</label>
                            <input type="text" class="form-control" placeholder="Enter short description for page" name="short_description" id="short_description" value="{{$data['row']->short_description}}" >
                            @error('short_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- short_description end--}}

                        {{-- description start--}}
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control" placeholder="Enter description for Page" name="description" id="description"  >{!! $data['row']->description !!} </textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- description end--}}


                        {{-- image start--}}
                        <div class="form-group">
                            <label for="page_image">Page Image</label>
                            <input type="file" class="form-control"   name="image_file" id="image_file" value="{{old('image_file')}}" >
                            <img src="{{asset('uploads/images/page_image/'.$data['row']->page_image)}}" height="200px" width="200px" alt="news">

                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- image end--}}
                        {{--                        status start--}}
                        <div class="form-group">
                            <label for="status">Status </label>
                            @if ( $data['row']->status == 0 )
                                <div class="form-check form-check-inline">
                                    <input  type="radio"  name='status' id="active" value="1" >Active
                                    <input  type="radio" name='status' id="deactive" value="0" checked> Deactive

                                </div>
                            @else
                                <div class="form-check form-check-inline">

                                    <input type="radio"  name='status' id="active" value="1" checked>Active
                                    <input type="radio" name='status' id="deactive" value="0" >Deactive
                                </div>
                            @endif

                            @error('status')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- status end--}}

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
        <!-- /.content -->
    </div>

@endsection
@section('js')

    <script>
        CKEDITOR.replace( 'description' );

    </script>

@endsection

