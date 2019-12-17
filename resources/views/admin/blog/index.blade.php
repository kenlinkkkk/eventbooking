@extends('admin.layout.layout')
@section('title'){{"Blog Manager"}}@endsection
@section('content')
    <div id="user-table">
        <div class="col-12">
            <div class="main-card mb-3 card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">Blog Manager</h5>
                    <a href="{{ route('admin.blog.add') }}" class="mb-2 mr-2 btn-icon btn btn-sm btn-success text-white"><i class="pe-7s-add-user btn-icon-wrapper"></i> Add</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="mb-0 table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Tag</th>
                            <th>Thumbnail</th>
                            <th>Status</th>
                            <th class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->name }}</td>
                                <td>{{ $blog->tag }}</td>
                                <td><img src="{{ asset($center->thumbnail) }}" alt="avatar" class="rounded" style="width: 36px"></td>
                                @if ($blog->status == 1)
                                    <td><input name="status" type="checkbox" checked data-on="On" data-off="Off" data-toggle="toggle" data-size="mini" value="1" id="{{ $blog->id }}" disabled></td>
                                @else
                                    <td><input name="status" type="checkbox" data-on="On" data-off="Off" data-toggle="toggle" data-size="mini" value="0" id="{{ $blog->id }}" disabled></td>
                                @endif
                                <td class="text-right">
                                    <form id="form-{{$center->id}}" method="post" action="{{ route('admin.center.delete', $center->id) }}">
                                        @csrf
                                        <a href="{{ route('admin.center.edit', $center->id) }}" class="btn btn-sm btn-primary btn-icon position-relative"><i class="pe-7s-pen btn-icon-wrapper"></i> Edit</a>
                                        <button blogId="{{ $center->id }}" class="btn btn-sm btn-icon btn-danger btn-delete"><i class="lnr-cross-circle"></i></button>
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
            let id = $(this).attr('blogId');
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
