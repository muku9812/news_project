@extends('layouts.backend')

@section('content')
{{--    <div class="page-breadcrumb">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-md-6 col-8 align-self-center">--}}
{{--                <h3 class="page-title mb-0 p-0">Dashboard</h3>--}}
{{--                <div class="d-flex align-items-center">--}}
{{--                    <nav aria-label="breadcrumb">--}}
{{--                        <ol class="breadcrumb">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page">Home</li>--}}
{{--                        </ol>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-4 align-self-center">--}}
{{--                <div class="text-end upgrade-btn">--}}
{{--                    <a href="#"--}}
{{--                       class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Hello World</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add User</h1>
                        <h2><a href="{{route('user.index')}}" class="btn btn-success btn-sm">User List</a></h2>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card ">

                <div class="card-body col-sm-6">

                    <form action="{{route('user.store')}}" method='POST' enctype="multipart/form-data">
                        @csrf
                        {{--                       {{-- Name start--}}
                        <div class="form-group row">
                            <label for="name" ">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter User Name " name="name" id="name" value="{{old('name')}}" >
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                        </div>
                        {{-- Name end--}}

                        {{-- slug start--}}
                        <div class="form-group row">
                            <label for="email">Email</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter User Email" name="email" id="email" value="{{old('email')}}" >
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>
                        {{-- slug end--}}


                        {{-- password start--}}
                        <div class="form-group row">
                            <label for="password" >Password</label>
                            <div class="col-sm-10">
                            <input type="password" crypt="bcrypt" class="form-control" placeholder="Enter Password" name="password" id="password" value="{{old('password')}}" >
                            @error('password')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>
                        {{-- Password end--}}

                        {{-- image start--}}
                        <div class="form-group row">
                            <label for="image_file" >Image</label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control"   name="image_file" id="image_file" value="{{old('image_file')}}" >
                            @error('image_file')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>
                        {{-- image end--}}


                        {{-- phone start--}}
                        <div class="form-group row">
                            <label for="phone" >Phone</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control"placeholder="Enter User Phone" name="phone" id="phone" value="{{old('phone')}}" >
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>
                        {{-- phone end--}}


                        {{-- address start--}}
                        <div class="form-group row">
                            <label for="address" >Address</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Enter User Address"   name="address" id="address" value="{{old('address')}}" >
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>
                        {{-- address end--}}

                        <div class="form-group row">
                            <label for="role_id">Role</label>
                            <div class="col-sm-10">
                            <select name="role_id" class="form-control" id="role_id">
                                <option value=" ">Select Class</option>
                                @foreach( $data['role_id'] as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                            <p class="text-danger">{{ "please select role" }}</p>
                            @enderror
                        </div>
                        </div>
                        {{--category end--}}


                        <div class="form-group row">
                            <label for="status">Status</label>
                            <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input type="radio"  name='status' id="status" value="1">Active
                                <input  type="radio" name='status' id="status" value="0" checked>
                                Deactive
                            </div>
                            @error('status')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>


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

