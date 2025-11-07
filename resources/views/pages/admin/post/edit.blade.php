@extends('layout.adminlayout')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Sửa Bài viết</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Bài viết</a></li>
                        <li class="breadcrumb-item active">Sửa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--end::App Content Header-->
    <div class="app-content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 col-sm-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Sửa bài viết</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.post.update', $post->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group mb-3">
                                    <label for="title">Tiêu đề <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" placeholder="Nhập tiêu đề bài viết"
                                        value="{{ old('title', $post->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="excerpt">Mô tả ngắn</label>
                                    <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt"
                                        name="excerpt" rows="3" placeholder="Nhập mô tả ngắn">{{ old('excerpt', $post->excerpt) }}</textarea>
                                    @error('excerpt')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="content">Nội dung</label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" id="content"
                                        name="content" rows="10"
                                        placeholder="Nhập nội dung bài viết">{{ old('content', $post->content) }}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image">Hình ảnh</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" accept="image/*" name="image" onchange="previewImage(this)">
                                    </div>
                                    <div class="mt-2">
                                        <img id="preview"
                                            src="{{ $post->image ? asset('storage/' . $post->image) : asset('images/no-image.png') }}"
                                            class="img-thumbnail admin-preview" decoding="async">
                                    </div>
                                    @error('image')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="type">Loại bài viết <span class="text-danger">*</span></label>
                                            <select class="form-control @error('type') is-invalid @enderror" id="type"
                                                name="type" required>
                                                <option value="">Chọn loại</option>
                                                <option value="post"
                                                    {{ old('type', $post->type) == 'post' ? 'selected' : '' }}>Bài viết
                                                </option>
                                                <option value="promotion"
                                                    {{ old('type', $post->type) == 'promotion' ? 'selected' : '' }}>Khuyến mãi
                                                </option>
                                            </select>
                                            @error('type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="published_date">Ngày xuất bản</label>
                                            <input type="date"
                                                class="form-control @error('published_date') is-invalid @enderror"
                                                id="published_date" name="published_date"
                                                value="{{ old('published_date', $post->published_date ? \Carbon\Carbon::parse($post->published_date)->format('Y-m-d') : '') }}">
                                            @error('published_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="featured" name="featured"
                                            value="1"
                                            {{ old('featured', $post->featured) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="featured">
                                            Đánh dấu là bài viết nổi bật
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex justify-content-between">
                                <a href="{{ route('admin.post.index') }}" class="btn btn-secondary">Hủy</a>
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // TinyMCE
        document.addEventListener('DOMContentLoaded', function() {
            const script = document.createElement('script');
            // Use keyless NPM build to avoid API key warnings
            script.src = 'https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js';
            script.referrerPolicy = 'origin';
            script.onload = function () {
                tinymce.init({
                    selector: '#content',
                    menubar: 'file edit view insert format tools table help',
                    plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars image link media table charmap pagebreak nonbreaking anchor lists wordcount fullscreen insertdatetime advlist help',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | image media link table | code preview fullscreen',
                    toolbar_sticky: true,
                    height: 500,
                    image_caption: true,
                    image_advtab: true,
                    automatic_uploads: true,
                    convert_urls: false,
                    images_upload_handler: function (blobInfo, progress) {
                        return new Promise(function(resolve, reject) {
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', '{{ route('admin.upload.image') }}');
                            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
                            xhr.upload.onprogress = function (e) {
                                if (e.lengthComputable) {
                                    progress(e.loaded / e.total * 100);
                                }
                            };
                            xhr.onload = function() {
                                if (xhr.status < 200 || xhr.status >= 300) { reject('HTTP Error: ' + xhr.status); return; }
                                var json;
                                try { json = JSON.parse(xhr.responseText); } catch (e) { reject('Invalid JSON'); return; }
                                if (!json || typeof json.location != 'string') { reject('Invalid response'); return; }
                                resolve(json.location);
                            };
                            xhr.onerror = function() { reject('Image upload failed due to a XHR Transport error.'); };
                            var formData = new FormData();
                            formData.append('file', blobInfo.blob(), blobInfo.filename());
                            xhr.send(formData);
                        });
                    }
                });
            };
            document.body.appendChild(script);
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var preview = document.getElementById('preview');

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <style>
        .admin-preview { max-height: 200px; }
    </style>
@endsection
