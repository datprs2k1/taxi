@extends('layout.adminlayout')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h3 class="mb-0">Quản lý Bài viết</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Bài viết</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content-body">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h3 class="card-title mb-2">
                            <i class="bi bi-newspaper me-2"></i>Danh sách Bài viết
                        </h3>
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.post.create') }}" class="btn btn-primary">
                                <i class="bi bi-plus-circle me-1"></i>Thêm bài viết
                            </a>
                            <form action="{{ route('admin.post.index') }}" method="GET" class="d-flex">
                                <div class="input-group">
                                    <select class="form-select" name="type" style="max-width: 150px;">
                                        <option value="">Tất cả loại</option>
                                        <option value="post" {{ request('type') == 'post' ? 'selected' : '' }}>Bài viết</option>
                                        <option value="promotion" {{ request('type') == 'promotion' ? 'selected' : '' }}>Khuyến mãi</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Tìm kiếm..." name="search"
                                        value="{{ request('search') }}">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 p-md-3">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Hình ảnh</th>
                                    <th width="20%">Tiêu đề</th>
                                    <th width="10%">Loại</th>
                                    <th width="10%">Nổi bật</th>
                                    <th width="15%">Ngày xuất bản</th>
                                    <th width="15%">Ngày tạo</th>
                                    <th width="10%">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>
                                            @if ($post->image)
                                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                                    class="img-thumbnail table-thumb" loading="lazy" decoding="async">
                                            @else
                                                <span class="text-muted">Không có ảnh</span>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $post->title }}</strong>
                                            @if ($post->excerpt)
                                                <br><small class="text-muted">{{ Str::limit($post->excerpt, 50) }}</small>
                                            @endif
                                        </td>
                                        <td>
                                            <span
                                                class="badge {{ $post->type == 'promotion' ? 'bg-warning' : 'bg-info' }}">
                                                {{ $post->type == 'promotion' ? 'Khuyến mãi' : 'Bài viết' }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            @if ($post->featured)
                                                <span class="badge bg-success">
                                                    <i class="bi bi-star-fill"></i> Có
                                                </span>
                                            @else
                                                <span class="badge bg-secondary">Không</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $post->published_date ? \Carbon\Carbon::parse($post->published_date)->format('d/m/Y') : 'Chưa đặt' }}
                                        </td>
                                        <td>
                                            {{ $post->created_at->format('d/m/Y H:i') }}
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="{{ route('admin.post.edit', $post->id) }}"
                                                    class="btn btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <button type="button" class="btn btn-outline-danger delete-post"
                                                    data-id="{{ $post->id }}" data-title="{{ $post->title }}">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-4">
                                            <div class="d-flex flex-column align-items-center">
                                                <i class="bi bi-inbox text-muted empty-icon"></i>
                                                <h5 class="mt-3">Không tìm thấy bài viết nào</h5>
                                                <p class="text-muted">Thử thay đổi bộ lọc hoặc từ khóa tìm kiếm</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confirm Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="deleteModalBody">
                    Bạn có chắc chắn muốn xóa bài viết này?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <form id="deleteForm" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-post');
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            const deleteForm = document.getElementById('deleteForm');
            const deleteModalBody = document.getElementById('deleteModalBody');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const postId = this.getAttribute('data-id');
                    const postTitle = this.getAttribute('data-title');
                    deleteModalBody.textContent = `Bạn có chắc chắn muốn xóa bài viết "${postTitle}"?`;
                    deleteForm.action = `/admin/post/${postId}`;
                    deleteModal.show();
                });
            });
        });
    </script>

    <style>
        .table-thumb { max-width: 100px; max-height: 80px; }
        .empty-icon { font-size: 3rem; }
    </style>
@endsection
