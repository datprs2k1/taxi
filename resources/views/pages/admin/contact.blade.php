@extends('layout.adminlayout')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h3 class="mb-0">
                        <i class="bi bi-envelope me-2"></i>Quản lý Liên hệ
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Liên hệ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content-body">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h3 class="card-title mb-2">
                            <i class="bi bi-list-check me-2"></i>Danh sách Liên hệ
                        </h3>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
                                data-bs-target="#filterModal" aria-controls="filterModal">
                                <i class="bi bi-funnel me-1"></i>Bộ lọc
                                @if (request()->anyFilled(['status', 'date_from', 'date_to']))
                                    <span class="badge bg-primary ms-1">!</span>
                                @endif
                            </button>
                            <form action="" method="GET" class="d-flex">
                                <div class="input-group">
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
                                    <th class="d-none d-md-table-cell" width="5%">ID</th>
                                    <th width="10%">Mã</th>
                                    <th width="15%">Họ tên</th>
                                    <th class="d-none d-md-table-cell" width="12%">Số điện thoại</th>
                                    <th width="25%">Nội dung</th>
                                    <th class="d-none d-md-table-cell" width="13%">Thời gian</th>
                                    <th width="10%">Trạng thái</th>
                                    <th width="15%">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $contact)
                                    <tr>
                                        <td class="d-none d-md-table-cell">{{ $contact->id }}</td>
                                        <td>
                                            <span class="badge bg-secondary">{{ strtoupper($contact->code) }}</span>
                                        </td>
                                        <td>
                                            <strong>{{ $contact->name }}</strong>
                                            <div class="d-md-none mt-1">
                                                <a href="tel:{{ $contact->phone }}" class="text-decoration-none">
                                                    <i class="bi bi-telephone"></i> {{ $contact->phone }}
                                                </a>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="tel:{{ $contact->phone }}" class="text-decoration-none">
                                                <i class="bi bi-telephone me-1"></i>{{ $contact->phone }}
                                            </a>
                                        </td>
                                        <td>
                                            <div class="message-preview">
                                                {{ Str::limit($contact->message, 80) }}
                                            </div>
                                            @if(strlen($contact->message) > 80)
                                                <button type="button" class="btn btn-link btn-sm p-0 view-full-message" 
                                                    data-message="{{ $contact->message }}"
                                                    data-name="{{ $contact->name }}"
                                                    data-code="{{ $contact->code }}">
                                                    <small>Xem đầy đủ</small>
                                                </button>
                                            @endif
                                            <div class="d-md-none mt-1">
                                                <small class="text-muted">
                                                    <i class="bi bi-clock me-1"></i>
                                                    {{ $contact->created_at->format('d/m/Y H:i') }}
                                                </small>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <i class="bi bi-clock me-1"></i>
                                            {{ $contact->created_at->format('d/m/Y H:i') }}
                                        </td>
                                        <td class="text-center">
                                            <span class="badge rounded-pill {{ $contact->status == 1 ? 'bg-success' : 'bg-warning' }}">
                                                {{ $contact->status == 1 ? 'Đã xử lý' : 'Chưa xử lý' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <a href="tel:{{ $contact->phone }}" class="btn btn-primary" title="Gọi điện">
                                                    <i class="bi bi-telephone"></i>
                                                </a>
                                                @if ($contact->status == 0)
                                                    <button type="button" class="btn btn-success mark-processed"
                                                        data-id="{{ $contact->id }}" title="Đánh dấu đã xử lý">
                                                        <i class="bi bi-check-circle"></i>
                                                    </button>
                                                @else
                                                    <button type="button" class="btn btn-warning mark-pending"
                                                        data-id="{{ $contact->id }}" title="Đánh dấu chưa xử lý">
                                                        <i class="bi bi-arrow-counterclockwise"></i>
                                                    </button>
                                                @endif
                                                <button type="button" class="btn btn-danger delete-contact"
                                                    data-id="{{ $contact->id }}" title="Xóa">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-4">
                                            <div class="d-flex flex-column align-items-center">
                                                <i class="bi bi-inbox text-muted" style="font-size: 3rem;"></i>
                                                <h5 class="mt-3">Không tìm thấy liên hệ nào</h5>
                                                <p class="text-muted">Thử thay đổi bộ lọc hoặc từ khóa tìm kiếm</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Modal -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="filterModalLabel">
                        <i class="bi bi-funnel me-2"></i>Bộ lọc liên hệ
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="GET" id="filterForm">
                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái</label>
                            <select class="form-select" id="status" name="status">
                                <option value="">Tất cả trạng thái</option>
                                <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Chưa xử lý</option>
                                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Đã xử lý</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date_from" class="form-label">Từ ngày</label>
                            <input type="date" class="form-control" id="date_from" name="date_from"
                                value="{{ request('date_from') }}">
                        </div>
                        <div class="mb-3">
                            <label for="date_to" class="form-label">Đến ngày</label>
                            <input type="date" class="form-control" id="date_to" name="date_to"
                                value="{{ request('date_to') }}">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-funnel-fill me-1"></i>Áp dụng bộ lọc
                            </button>
                            <button type="button" class="btn btn-outline-secondary" id="resetFilter">
                                <i class="bi bi-arrow-counterclockwise me-1"></i>Đặt lại
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- View Full Message Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="messageModalLabel">
                        <i class="bi bi-chat-left-text me-2"></i>Nội dung liên hệ
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mã liên hệ:</label>
                        <div id="modalCode" class="text-muted"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Họ tên:</label>
                        <div id="modalName" class="text-muted"></div>
                    </div>
                    <div>
                        <label class="form-label fw-bold">Nội dung:</label>
                        <div id="modalMessage" class="p-3 bg-light rounded border" style="white-space: pre-wrap;"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirm Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Xác nhận</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="confirmModalBody">
                    Bạn có chắc chắn muốn thực hiện hành động này?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="confirmButton">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .message-preview {
            word-break: break-word;
        }
        .btn-link {
            text-decoration: none;
        }
        .btn-link:hover {
            text-decoration: underline;
        }
    </style>

    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // View full message
            $('.view-full-message').on('click', function() {
                const message = $(this).data('message');
                const name = $(this).data('name');
                const code = $(this).data('code');
                
                $('#modalCode').text(code.toUpperCase());
                $('#modalName').text(name);
                $('#modalMessage').text(message);
                $('#messageModal').modal('show');
            });

            // Mark as processed
            $('.mark-processed').on('click', function() {
                const contactId = $(this).data('id');
                $('#confirmModalLabel').text('Xác nhận đã xử lý');
                $('#confirmModalBody').text('Bạn có chắc chắn muốn đánh dấu liên hệ này là đã xử lý?');
                $('#confirmButton').removeClass('btn-danger btn-warning').addClass('btn-success');

                $('#confirmButton').off('click').on('click', function() {
                    $.ajax({
                        url: `/admin/contact/${contactId}/mark-processed`,
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#confirmModal').modal('hide');
                            location.reload();
                        },
                        error: function(error) {
                            alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
                            $('#confirmModal').modal('hide');
                        }
                    });
                });

                $('#confirmModal').modal('show');
            });

            // Mark as pending
            $('.mark-pending').on('click', function() {
                const contactId = $(this).data('id');
                $('#confirmModalLabel').text('Xác nhận chưa xử lý');
                $('#confirmModalBody').text('Bạn có chắc chắn muốn đánh dấu liên hệ này là chưa xử lý?');
                $('#confirmButton').removeClass('btn-danger btn-success').addClass('btn-warning');

                $('#confirmButton').off('click').on('click', function() {
                    $.ajax({
                        url: `/admin/contact/${contactId}/mark-pending`,
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#confirmModal').modal('hide');
                            location.reload();
                        },
                        error: function(error) {
                            alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
                            $('#confirmModal').modal('hide');
                        }
                    });
                });

                $('#confirmModal').modal('show');
            });

            // Delete contact
            $('.delete-contact').on('click', function() {
                const contactId = $(this).data('id');
                $('#confirmModalLabel').text('Xác nhận xóa');
                $('#confirmModalBody').text('Bạn có chắc chắn muốn xóa liên hệ này? Hành động này không thể hoàn tác.');
                $('#confirmButton').removeClass('btn-success btn-warning').addClass('btn-danger');

                $('#confirmButton').off('click').on('click', function() {
                    $.ajax({
                        url: `/admin/contact/${contactId}/delete`,
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#confirmModal').modal('hide');
                            location.reload();
                        },
                        error: function(error) {
                            alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
                            $('#confirmModal').modal('hide');
                        }
                    });
                });

                $('#confirmModal').modal('show');
            });

            // Reset filter
            $('#resetFilter').on('click', function() {
                $('#status').val('');
                $('#date_from').val('');
                $('#date_to').val('');
                $('#filterForm').submit();
            });

            // Close modals
            $('.btn-close, .btn-secondary').on('click', function() {
                $('.modal').modal('hide');
            });
        });
    </script>
@endsection

