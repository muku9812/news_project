@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Page</h1>
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

                <div class="card-body col-sm-6">

                    <form action="{{route('page.store')}}" enctype="multipart/form-data" method='POST'>
                        @csrf
                        {{--                       {{-- title start--}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Enter title for Page " name="title" id="title" value="{{old('title')}}" oninput="makeSlug();" >
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- title end--}}

                        {{-- slug start--}}
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" placeholder="Enter slug for Page " name="slug" id="slug" value="{{old('slug')}}" readonly>
                            @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- slug end--}}



                        {{-- short_description start--}}
                        <div class="form-group">
                            <label for="short_description">Short description</label><textarea class="form-control"  name="short_description" id="short_description" value="{{old('short_description')}}" ></textarea>@error('short_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- short_description end--}}

                        {{-- description start--}}
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control" placeholder="Enter description for Page" name="description" id="description" value="{{old('description')}}" > </textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- description end--}}


                        {{-- image start--}}
                        <div class="form-group">
                            <label for="page_image">Page Image</label>
                            <input type="file" class="form-control"   name="image_file" id="image_file" value="{{old('image_file')}}" >
                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- image end--}}

                        {{-- status start--}}
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

@section('js')
    <script>

        CKEDITOR.replace( 'description' );
        CKEDITOR.replace( 'short_description' );

        function makeSlug() {
            var title = document.getElementById('title').value;
            var slug = document.getElementById('slug');
            slug.value = string_to_slug(title);
        }
        function string_to_slug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
            var to   = "aaaaaeeeeeiiiiooooouuuunc------";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/\?/g, '-')
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        };
    </script>


@endsection
