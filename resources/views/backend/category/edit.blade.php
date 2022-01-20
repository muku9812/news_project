@extends('layouts.backend')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Category </h1>
                        <h2> <a href="{{route('category.index')}}" class="btn btn-success btn-sm">Category List</a></h2>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">

                    <form action="{{route('category.update',$data['row']->id)}}" method='POST'>
                        <input type="hidden" name="_method" value="PUT"/>
                        @csrf

{{--                       {{-- name start--}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"  class="form-control" name="name" id="name" value="{{$data['row']->name}}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- name end--}}

                        {{-- slug start--}}
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text"  class="form-control" name="slug" id="slug" value={{$data['row']->slug}} >
                            @error('slug')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- slug end--}}

                        {{-- rank start--}}
                        <div class="form-group">
                            <label for="rank">Rank</label>
                            <input type="text"  class="form-control" name="rank" id="rank" value={{$data['row']->rank}} >
                            @error('rank')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- rank end--}}

                        <div class="form-group">
                            <label for="status">Status </label>
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

                                </div>
                                @error('status')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>

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
