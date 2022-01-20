@extends('layouts.backend')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Advertisement Place</h1>
                    <h2> <a href="{{route('placement.index')}}" class="btn btn-success btn-sm">placement List</a>
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

                <form action="{{route('placement.update',$data['row']->id)}}" method='POST'  id="edit">
                    <input type="hidden" name="_method" value="PUT"/>
                    @csrf
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="Placement " name="name" id="name" value="{{$data['row']->name}}" >
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
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


@endsection


