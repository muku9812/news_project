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

                <div class="card-body">
                    <form action="{{route('news.update',$data['row']->id)}}" method='POST' enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT"/>
                        @csrf

                        {{--                       {{-- title start--}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  name="title" id="title" value="{{$data['row']->title}}"   oninput="makeSlug();">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- title end--}}

                        {{-- slug start--}}
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control"name="slug" id="slug" value={{$data['row']->slug}} readonly>
                            @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- slug end--}}

                        {{-- meta-tag start--}}
                        <div class="form-group">
                            <label for="slug">Meta Tag</label>
                            <input type="text" class="form-control"name="meta_tag" id="meta_tag" value={{$data['row']->meta_tag}} >
                            @error('meta_tag')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- meta-tag end--}}


                        {{-- meta_description start--}}
                        <div class="form-group" class="col-sm-2">
                            <label for="meta_description">Meta Description</label>
                            <textarea type="text" class="form-control"  name="meta_description" id="meta_description" > {!! ($data['row']->meta_description) !!}</textarea>

                            @error('meta_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- meta_description end--}}

                        {{--category start--}}
                        <div class="form-group">
                            <label for="category_id" class="control-label">Category</label>
                            <select name="category_id" class="form-control" id="category_id">
                                <option value=" {{$data['row']->category_id}}">{{$data['row']->CategoryId->name}} </option>
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
                                <option value=" {{$data['row']->pradesh}}">
                                    @if($data['row']->pradesh==1)
                                        प्रदेश १
                                    @elseif($data['row']->pradesh==2)
                                        मधेस प्रदेश
                                    @elseif($data['row']->pradesh==3)
                                        बागमती
                                    @elseif($data['row']->pradesh==4)
                                        गण्डकी
                                    @elseif($data['row']->pradesh==5)
                                        लुम्बिनी
                                    @elseif($data['row']->pradesh==6)
                                        कर्णाली
                                    @elseif($data['row']->pradesh==7)
                                        सुदुरपश्चिम
                                    @else
                                        अन्य
                                    @endif
                                </option>
                                <option value="1">प्रदेश १</option>
                                <option value="2">प्रदेश २</option>
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

                        {{-- image start--}}
                        <div class="form-group">
                            <label for="image_file">Image</label>
                            <input type="file"  class="form-control" name="image_file" id="image_file" >
                            <img src="{{asset('uploads/images/news/'.$data['row']->feature_image)}}" height="100px" width="100px" alt="image">

                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- image end--}}

                        {{-- short_description start--}}
                        <div class="form-group" class="col-sm-2">
                            <label for="short_description">Short Title</label>
                            <textarea type="text" class="form-control"  name="short_description" id="short_description" > {{($data['row']->short_description)}}</textarea>

                            @error('short_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- short_description end--}}

                        {{-- description start--}}
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control"  name="description" id="description" > {{($data['row']->description)}}</textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- description end--}}

                        {{--                        feature_key start--}}
                        <div class="form-group">
                            <label for="feature_key" class="col-sm-1">Feature Key </label>
                            @if ( $data['row']->feature_key== 0 )
                                <div class="form-check form-check-inline">
                                    <input  type="radio"  name='feature_key' id="active" value="1" >Yes
                                    <input  type="radio" name='feature_key' id="deactive" value="0" checked> No

                                </div>
                            @else
                                <div class="form-check form-check-inline">

                                    <input type="radio"  name='feature_key' id="active" value="1" checked>Yes
                                    <input type="radio" name='feature_key' id="deactive" value="0" >No
                                </div>
                            @endif


                        @error('feature_key')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- feature_key end--}}

                {{--                        breaking_key start--}}
                <div class="form-group">
                    <label for="breaking_key" class="col-sm-1">Breaking Key </label>
                    @if ( $data['row']->breaking_key== 0 )
                        <div class="form-check form-check-inline">
                            <input  type="radio"  name='breaking_key' id="active" value="1" >Yes
                            <input  type="radio" name='breaking_key' id="deactive" value="0" checked> No

                        </div>
                    @else
                        <div class="form-check form-check-inline">

                            <input type="radio"  name='breaking_key' id="active" value="1" checked>Yes
                            <input type="radio" name='breaking_key' id="deactive" value="0" >No
                        </div>
                    @endif


                @error('breaking_key')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- breaking_key end--}}

            {{--                        slider_key start--}}
            <div class="form-group">
                <label for="slider_key" class="col-sm-1">Slider Key </label>
                @if ( $data['row']->slider_key== 0 )
                    <div class="form-check form-check-inline">
                        <input  type="radio"  name='slider_key' id="active" value="1" >Yes
                        <input  type="radio" name='slider_key' id="deactive" value="0" checked> No

                    </div>
                @else
                    <div class="form-check form-check-inline">

                        <input type="radio"  name='slider_key' id="active" value="1" checked>No
                        <input type="radio" name='slider_key' id="deactive" value="0" >Yes
                    </div>
                @endif


            @error('slider_key')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    {{-- breaking_key end--}}
    {{--                        status start--}}
    <div class="form-group">
        <label for="status" class="col-sm-1">Status </label>
        @if ( $data['row']->status== 0 )
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

                        {{-- updated start--}}
                        <div class="form-group">
                            <input type="number" class="form-control" name="updated_by" id="updated_by" value="{{auth()->user()->id}}" hidden >
                        </div>
                        {{-- updated end--}}


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
