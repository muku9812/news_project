@extends('layouts.backend')

@section('content')


    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Role List
                            <a href="{{route('role.index')}}" class="btn btn-success">Role List</a>
                        </h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">

                <div class="card-body">

                    <form action="{{route('role.update',$data['row']->id)}}" method='POST'>
                        <input type="hidden" name="_method" value="PUT"/>
                        @csrf
                        <div class="form-group">

                            <label for="name">Name</label>
                            <input type="text"  class="form-control" name="name" id="name" value="{{$data['row']->name}}" >
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="number" class="form-control" name="key" id="key" value="{{$data['row']->key}}" >
                            @error('key')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
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


@endsection
