@extends('admin.layout.layout')
@section('title'){{'Edit User'}}@endsection
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
                        <form class="" method="post" enctype="multipart/form-data" action="{{ route('admin.user.update', $user->id) }}">
                            @csrf
                            <input type="hidden" name="isAddUser" value="1">
                            <div class="position-relative form-group">
                                <label for="username" class="">Username</label>
                                <input name="username" id="username" placeholder="Username" type="text" class="form-control" required disabled value="{{ $user->user_name }}">
                            </div>

                            <div class="position-relative form-group">
                                <label for="name" class="">Name</label>
                                <input name="name" id="name" placeholder="Name" type="text" class="form-control" required value="{{ $user->name }}">
                            </div>

                            <div class="position-relative form-group">
                                <label for="role" class="">Select Position</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="{{config('roles.admin')}}" {{ array_search($user->id, config('roles'), true) ? 'selected' : '' }}>Admin</option>
                                    <option value="{{config('roles.host')}}" {{ array_search($user->id, config('roles'), true) ? 'selected' : '' }}>Host</option>
                                </select>
                            </div>
                            <div class="position-relative form-group">
                                <label for="status">Status</label>
                                @if ($user->status == 1)
                                    <div class="custom-radio custom-control">
                                        <input type="radio" id="exampleCustomRadio" name="status" checked class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="exampleCustomRadio">Active</label>
                                    </div>
                                    <div class="custom-radio custom-control">
                                        <input type="radio" id="exampleCustomRadio2" name="status" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="exampleCustomRadio2">Deactive</label>
                                    </div>
                                @else
                                    <div class="custom-radio custom-control">
                                        <input type="radio" id="exampleCustomRadio" name="status" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="exampleCustomRadio">Active</label>
                                    </div>
                                    <div class="custom-radio custom-control">
                                        <input type="radio" id="exampleCustomRadio2" name="status" checked class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="exampleCustomRadio2">Deactive</label>
                                    </div>
                                @endif
                            </div>

                            <div class="position-relative form-group">
                                <small class="form-text text-muted">All field is required</small>
                            </div>
                            <button type="submit" id="submit" class="btn btn-sm btn-primary">Update</button>
                            <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-warning">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
