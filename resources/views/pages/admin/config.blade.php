@extends('layout.adminlayout')
@section('content')
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <div class="app-content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Cấu hình</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.config.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Nhập tiêu đề"
                                        value="{{ $config->where('key', 'title')->first()->value }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Tên</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Nhập tên" value="{{ $config->where('key', 'name')->first()->value }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="logo">Logo</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="logo" accept="image/*"
                                            name="logo" onchange="previewImage(this)">
                                    </div>
                                    <div class="mt-2">
                                        <img id="preview"
                                            src="{{ $config->where('key', 'logo')->first()->value ? asset('storage/config/' . $config->where('key', 'logo')->first()->value) : asset('images/no-image.png') }}"
                                            class="img-thumbnail" style="max-height: 100px">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Mô tả</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Nhập mô tả">{{ $config->where('key', 'description')->first()->value }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="address">Địa chỉ</label>
                                    <textarea class="form-control" id="address" name="address" placeholder="Nhập địa chỉ">{{ $config->where('key', 'address')->first()->value }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Nhập email"
                                        value="{{ $config->where('key', 'email')->first()->value }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Nhập số điện thoại"
                                        value="{{ $config->where('key', 'phone')->first()->value }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                        placeholder="Nhập link facebook"
                                        value="{{ $config->where('key', 'facebook')->first()->value }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="zalo">Zalo</label>
                                    <input type="text" class="form-control" id="zalo" name="zalo"
                                        placeholder="Nhập link zalo"
                                        value="{{ $config->where('key', 'zalo')->first()->value }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="messenger">Messenger</label>
                                    <input type="text" class="form-control" id="messenger" name="messenger"
                                        placeholder="Nhập link messenger"
                                        value="{{ $config->where('key', 'messenger')->first()->value }}">
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById('preview').src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
