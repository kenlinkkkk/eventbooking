@extends('admin.layout.layout')
@section('title'){{'Add Center'}}@endsection
@section('content')
    <div id="user-add">
        <div class="tab-content">
            <div class="col-12">
                <div class="main-card mb-3 card">
                    <div class="card-header d-flex justify-content-between	">
                        <h5 class="card-title">Add new Center</h5>
                        <a href="{{ route('admin.center.index') }}" class="btn btn-sm btn-wide btn-outline-primary btn-icon btn-dashed"><i class="ion-android-arrow-back btn-icon-wrapper"></i> Back</a>
                    </div>

                    <div class="card-body">
                        <form class="" action="{{ route('admin.center.create') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="isAddCenter" value="1">
                            <div class="position-relative form-group">
                                <label for="name">Tên</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="row">
                                <div class="position-relative form-group col-md-3">
                                    <label for="address">Thành phố</label>
                                    <select name="city" class="form-control">
                                        @foreach(config('address') as $key => $value)
                                            <option value="{{ $key }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="position-relative form-group col-md-3">
                                    <label for="address">Quận</label>
                                    <input type="text" class="form-control" name="county" required placeholder="...">
                                </div>
                                <div class="position-relative form-group col-md-3">
                                    <label for="address">Phường</label>
                                    <input type="text" class="form-control" name="district" required placeholder="...">
                                </div>
                                <div class="position-relative form-group col-md-3">
                                    <label for="address">Đường</label>
                                    <input type="text" class="form-control" name="street" required placeholder="Số 11, Láng">
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" class="form-control-file dropify" name="thumbnail" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="pictures">Ảnh</label>
                                    <input type="file" class="form-control-file dropify" name="pictures[]" multiple required>
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="description">Mô tả</label>
                                <textarea class="description" name="description"></textarea>
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

@section('script')
    <script>
        $('.dropify').dropify();

        tinyMCE.init({
            selector: 'textarea.description',
            height: 500,
            plugins: ["image code", "lists", "table"],
            table_reponsive_width: true,
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function () {
                    var file = this.files[0];
                    var reader = new FileReader();

                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), {title: file.name});
                    };
                    reader.readAsDataURL(file);
                };
                input.click();
            }
        });
    </script>
@endsection
