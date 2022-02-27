@extends('layouts.backend')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add News</h1>
                        <h2>
                            <a href="{{route('news.index')}}" class="btn btn-success btn-sm">News List</a>
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

                    <form action="{{route('news.store')}}" enctype="multipart/form-data" method='POST'>
                        @csrf
{{--                       {{-- title start--}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" placeholder="Enter title for News " name="title" id="title" value="{{old('title')}}"  oninput="makeSlug();">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- title end--}}

                        {{-- slug start--}}
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" placeholder="Enter slug for News " name="slug" id="slug" readonly>
                            @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- slug end--}}

                        {{-- meta tag start--}}
                        <div class="form-group">
                            <label for="meta_tag">Meta Tag</label>
                            <input type="text" class="form-control" placeholder="Enter meta tag " name="meta_tag" id="meta_tag">
                            @error('meta_tag')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- meta tag end--}}

                        {{-- meta_description start--}}
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea type="text" class="form-control" name="meta_description" id="meta_description" value="{{old('meta_description')}}" ></textarea>
                            @error('meta_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- Meta_description end--}}

                        {{-- image start--}}
                        <div class="form-group">
                            <label for="image_file">Feature Image</label>
                            <input type="file" multiple class="form-control"   name="image_file" id="image_file" value="{{old('image_file')}}" >
                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- image end--}}
                        {{--category start--}}
                        <div class="form-group">
                            <label for="category_id" class="control-label">Category</label>
                            <select multiple name="category_id[]" class="form-control" id="category_id">
                                <option value=" ">Select Class</option>
                                @foreach( $data['category_id'] as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <p class="text-danger">{{ "please select the category" }}</p>
                            @enderror
                        </div>
                        {{--category end--}}

                        {{--pradesh start--}}
                        <div class="form-group">
                            <label for="pradesh" class="control-label">Pradesh</label>
                            <select name="pradesh" class="form-control" id="pradesh">
                                <option value=" ">Select Class</option>
                                    <option value="1">प्रदेश १</option>
                                    <option value="2">मधेस प्रदेश</option>
                                    <option value="3">बागमती</option>
                                    <option value="4">गण्डकी</option>
                                    <option value="5">लुम्बिनी</option>
                                    <option value="6">कर्णाली</option>
                                    <option value="7">सुदुरपश्चिम</option>
                                    <option value="0">अन्य</option>

                            </select>
                            @error('pradesh')
                            <p class="text-danger">{{ "please select the pradesh" }}</p>
                            @enderror
                        </div>
                        {{--pradesh end--}}

                        {{-- short_description start--}}
                        <div class="form-group">
                            <label for="short_description">Short Title</label>
                            <textarea type="text" class="form-control" name="short_description" id="short_description" value="{{old('short_description')}}" ></textarea>
                            @error('short_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- short_description end--}}


                        {{-- description start--}}
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control" placeholder="Enter description for news" name="description" id="description" > </textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- description end--}}

                        {{-- feature_key start--}}
                        <div class="form-group">
                            <label for="FKey" class="col-sm-2">Feature Key</label>
                            <div class="form-check form-check-inline">
                                <input type="radio"  name='feature_key' id="feature_key" value="1">Active
                                <input  type="radio" name='feature_key' id="feature_key" value="0" checked>Deactive
                            </div>
                            @error('feature_key')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- feature_key end--}}

                        {{-- breaking_key start--}}
                        <div class="form-group">
                            <label for="breaking_key" class="col-sm-2">Breaking Key</label>
                            <div class="form-check form-check-inline">
                                <input type="radio"  name='breaking_key' id="breaking_key" value="1">Active
                                <input  type="radio" name='breaking_key' id="breaking_key" value="0" checked>Deactive
                            </div>
                            @error('breaking_key')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- breaking_key end--}}

                        {{-- slider_key start--}}
                        <div class="form-group">
                            <label for="slider_key" class="col-sm-2">Slider key</label>
                            <div class="form-check form-check-inline">
                                <input type="radio"  name='slider_key' id="slider_key" value="1">Active
                                <input  type="radio" name='slider_key' id="slider_key" value="0" checked>Deactive
                            </div>
                            @error('slider_key')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- slider_key end--}}

                        {{-- status start--}}
                        <div class="form-group">
                            <label for="status" class="col-sm-2">Status</label>
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

                        <div class="form-group ">
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
        CKEDITOR.replace( 'meta_description' );
//
// function makeSlug() {
//     var title = document.getElementById('title').value;
//     var slug = document.getElementById('slug');
//     slug.value = string_to_slug(title);
// }
//         function string_to_slug(str) {
//             str = str.replace(/^\s+|\s+$/g, ''); // trim
//             str = str.toLowerCase();
//
//             // remove accents, swap ñ for n, etc
//             var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
//             var to   = "aaaaaeeeeeiiiiooooouuuunc------";
//             for (var i = 0, l = from.length; i < l; i++) {
//                 str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
//             }
//
//             str = str.replace(/\s+/g+ '-') // collapse whitespace and replace by -
//                 .replace(/\?/g, '-')
//                 .replace(/-+/g, '-'); // collapse dashes
//
//             return str;
//         };
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
