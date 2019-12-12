@extends('admin.layout.layout')
@section('title'){{'Add User'}}@endsection
@section('content')
    <div id="user-add">
        <div class="tab-content">
            <div class="col-12">
                <div class="main-card mb-3 card">
                    <div class="card-header d-flex justify-content-between	">
                        <h5 class="card-title">Add new user</h5>
                        <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-wide btn-outline-primary btn-icon btn-dashed"><i class="ion-android-arrow-back btn-icon-wrapper"></i> Back</a>
                    </div>

                    <div class="card-body">
                        <form class="" action="{{ route('admin.user.create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="isAddUser" value="1">
                            <div class="position-relative form-group">
                                <label for="user_name" class="">Username</label>
                                <input name="user_name" id="user_name" placeholder="Username" type="text" class="form-control" required>
                                @if ($errors->has('user_name'))
                                    <div class="invalid-feedback">{{$errors->first('user_name')}}</div>
                                @endif
                            </div>

                            <div class="position-relative form-group">
                                <label for="password" class="">Password</label>
                                <input name="password" id="password" placeholder="Password" type="password" class="form-control" required>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">{{$errors->first('password')}}</div>
                                @endif
                            </div>

                            <div class="position-relative form-group">
                                <label for="name" class="">Name</label>
                                <input name="name" id="name" placeholder="Name" type="text" class="form-control" required>
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">{{$errors->first('name')}}</div>
                                @endif
                            </div>

                            <div class="position-relative form-group">
                                <label for="role" class="">Select Position</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="{{config('roles.admin')}}" selected>Admin</option>
                                    <option value="{{config('roles.host')}}">Host</option>
                                    <option value="{{config('roles.editor')}}">Editor</option>
                                </select>
                            </div>


                            <div class="position-relative form-group">
                                <small class="form-text text-muted">All field is required</small>
                            </div>
                            <button type="submit" id="submit" class="mt-1 btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
