@extends('layouts.backend')

@section('content')

    <div class="row">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>My profile </h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">

                    <div class="card-body">
                            <div class="row">
                            <div class="col-md-3">
                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="{{asset('uploads/images/user/'.auth()->user()->image)}}" alt="User profile picture">
                                        </div>
                                        <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- About Me Box -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">About Me</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <strong><i class="fa fa-box mr-1"></i> E-mail</strong>
                                        <p class="text-muted">
                                            {{auth()->user()->email}}
                                        </p>
                                        <hr>
                                        <strong><i class="fa fa-mobile mr-1"></i> Phone</strong>
                                        <p class="text-muted">{{auth()->user()->phone}}</p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="col-md-9">
                                <form class="form-horizontal" action="{{route('user.update',auth()->user()->id)}}" method="POST" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PUT"/>
                                    @csrf
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content">


                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="name" class="form-control" id="name"  value="{{auth()->user()->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" name="email" class="form-control" id="inputEmail" value="{{auth()->user()->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="address" class="form-control" id="inputAddress" value="{{auth()->user()->address}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="phone" class="form-control" id="inputPhone" value="{{auth()->user()->phone}}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="Role" class="col-sm-2 col-form-label">Role</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="role" class="form-control" id="Role" value="{{auth()->user()->RoleId->name}}" readonly>
                                                        </div>
                                                    </div>

                                                {{-- image start--}}
                                                <div class="form-group row">
                                                    <label for="image_file" class="col-sm-2 col-form-label">Change Image</label>
                                                    <div class="col-sm-10">
                                                    <input type="file" class="form-control"   name="image_file" id="image_file">
                                                    </div>
                                                </div>
                                                {{-- image end--}}

                                                </div>
                                            </div>
                                        </div>
                                    <div class="card-footer">
                                        <a class="btn btn-danger" href="{{route('changePasswordGet')}}" data-toggle="tab">Change Password</a>

                                        <button type="submit" class="btn btn-primary float-right">Update Profile</button>

                                    </div>
                                </form>
                            </div>
                            </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
