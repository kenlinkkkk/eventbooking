@extends('admin.layout.layout')
@section('title'){{"User Manager"}}@endsection
@section('content')
    <div id="user-table">
        <div class="col-12">
            <div class="main-card mb-3 card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">User Manager</h5>
                    <a href="{{ route('admin.user.add') }}" class="mb-2 mr-2 btn-icon btn btn-sm btn-success text-white"><i class="pe-7s-add-user btn-icon-wrapper"></i> Add</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="mb-0 table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Avatar</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td><img src="{{ $user->avatar }}" alt="avatar" class="rounded-circle" style="width: 36px"></td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ array_search($user->role, config('roles'), true) }}</td>
                                @if ($user->status == 1)
                                    <td><input name="status" type="checkbox" checked data-on="On" data-off="Off" data-toggle="toggle" data-size="mini" value="1" id="{{ $user->id }}" disabled></td>
                                @else
                                    <td><input name="status" type="checkbox" data-on="On" data-off="Off" data-toggle="toggle" data-size="mini" value="0" id="{{ $user->id }}" disabled></td>
                                @endif
                                <td>
                                    <form id="form-{{$user->id}}" method="post" action="{{ route('admin.user.delete', $user->id) }}">
                                        @csrf
                                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-sm btn-primary btn-icon position-relative"><i class="pe-7s-pen btn-icon-wrapper"></i> Edit</a>
                                        <button userId="{{ $user->id }}" class="btn btn-sm btn-icon btn-danger btn-delete"><i class="lnr-cross-circle"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("body").on("click", ".btn-delete", function(e){
            e.preventDefault();
            let id = $(this).attr('userId');
            swal({
                title: "Are you sure?",
                text: "You can not rollback this",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes",
                cancelButtonText: "Cancel",
                closeOnConfirm: false
            }, function() {
                $('#form-' + id).submit();
            });
        });
    </script>
@endsection
