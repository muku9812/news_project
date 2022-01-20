@extends('layouts.backend')



@section('content')

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Permission
                            <a href="{{route('permission.index')}}" class="btn btn-success">Permission List</a>
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

                    <form action="{{route('permission.update',$data['row']->id)}}" method='POST'>
                        <input type="hidden" name="_method" value="PUT"/>
                        @csrf
                        <div class="form-group">

                            <label for="name">Name</label>
                            <input type="text"  class="form-control" name="name" id="name" value="{{$data['row']->name}}" >
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <label for="route">Route</label>
                        <input type="text"  class="form-control" name="route" id="route" value="{{$data['row']->route}}" >
                        @error('route')
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
                </div>
                <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
@endsection
