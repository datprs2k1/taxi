@extends('layout.adminlayout')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h3 class="mb-0">Quản lý Đơn hàng</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content-body">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h3 class="card-title mb-2">
                            <i class="bi bi-list-check me-2"></i>Danh sách Đơn hàng
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
                                    <th width="15%">Khách Hàng</th>
                                    <th class="d-none d-md-table-cell" width="10%">Số điện thoại</th>
                                    <th class="d-none d-md-table-cell" width="10%">Tổng tiền</th>
                                    <th width="15%">Lộ trình</th>
                                    <th class="d-none d-md-table-cell" width="15%">Thời gian</th>
                                    <th width="10%">Trạng thái</th>
                                    <th width="20%">Hành động</th>
                                </tr>
                            </thead>
                            <tbody id="orderTable">
                                @forelse ($orders as $order)
                                    <tr data-widget="expandable-table" aria-expanded="false" class="order-row">
                                        <td class="d-none d-md-table-cell">{{ $order->id }}</td>
                                        <td>
                                            <strong>{{ $order->name }}</strong>
                                            @if ($order->email)
                                                <br><small class="text-muted">{{ $order->email }}</small>
                                            @endif
                                            <div class="d-md-none mt-1">
                                                <a href="tel:{{ $order->phone }}" class="text-decoration-none">
                                                    <i class="bi bi-telephone"></i> {{ $order->phone }}
                                                </a>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <a href="tel:{{ $order->phone }}" class="text-decoration-none">
                                                {{ $order->phone }}
                                            </a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-end fw-bold">
                                            {{ number_format($order->price, 0, ',', '.') }} VND
                                        </td>
                                        <td>
                                            <i class="bi bi-geo-alt text-danger"></i> {{ $order->start_place }}
                                            <br>
                                            <i class="bi bi-arrow-down"></i>
                                            <br>
                                            <i class="bi bi-geo-alt-fill text-success"></i> {{ $order->end_place }}
                                            <div class="d-md-none mt-1">
                                                <i class="bi bi-calendar-event me-1"></i>
                                                {{ $order->pickup_time }}
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <i class="bi bi-calendar-event me-1"></i>
                                            {{ $order->pickup_time }}
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="badge rounded-pill {{ $order->status == 1 ? 'bg-success' : ($order->status == 2 ? 'bg-danger' : ($order->status == 4 ? 'bg-info' : 'bg-warning')) }}">
                                                {{ $order->status == 1 ? 'Đã nhận' : ($order->status == 2 ? 'Đã từ chối' : ($order->status == 4 ? 'Hoàn thành' : 'Chưa xử lý')) }}
                                            </span>
                                            <div class="d-md-none mt-1">
                                                <strong>{{ number_format($order->price, 0, ',', '.') }} VND</strong>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-primary toggle-details">
                                                    <i class="bi bi-info-circle"></i><span
                                                        class="d-none d-md-inline ms-1">Chi tiết</span>
                                                </button>
                                                <a href="tel:{{ $order->phone }}" class="btn btn-primary">
                                                    <i class="bi bi-telephone"></i><span
                                                        class="d-none d-md-inline ms-1">Gọi</span>
                                                </a>
                                                @if ($order->status == 0)
                                                    <button type="button" class="btn btn-success accept-order"
                                                        data-id="{{ $order->id }}">
                                                        <i class="bi bi-check-circle"></i><span
                                                            class="d-none d-md-inline ms-1">Nhận</span>
                                                    </button>
                                                    <button type="button" class="btn btn-danger reject-order"
                                                        data-id="{{ $order->id }}">
                                                        <i class="bi bi-x-circle"></i><span
                                                            class="d-none d-md-inline ms-1">Từ chối</span>
                                                    </button>
                                                @endif
                                                @if ($order->status == 1)
                                                    <button type="button" class="btn btn-info complete-order"
                                                        data-id="{{ $order->id }}">
                                                        <i class="bi bi-check2-all"></i><span
                                                            class="d-none d-md-inline ms-1">Hoàn thành</span>
                                                    </button>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="expandable-body d-none">
                                        <td colspan="8" class="bg-light p-3">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="card border-0 shadow-sm mb-0">
                                                        <div
                                                            class="card-header bg-primary text-white d-flex align-items-center">
                                                            <i class="bi bi-info-circle me-2"></i>
                                                            <span class="fw-semibold">Thông tin chuyến đi</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-sm table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th width="30%" class="text-nowrap"><i
                                                                                    class="bi bi-signpost-2 me-1 text-muted"></i>Loại
                                                                                đường:</th>
                                                                            <td><span
                                                                                    class="badge bg-{{ $order->long_trip ? 'info' : 'warning' }} text-white">{{ $order->long_trip ? 'Đường dài' : 'Sân bay' }}</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-nowrap"><i
                                                                                    class="bi bi-car-front me-1 text-muted"></i>Loại
                                                                                xe:</th>
                                                                            <td><span
                                                                                    class="badge bg-secondary">{{ $order->num_seats }}
                                                                                    chỗ</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-nowrap"><i
                                                                                    class="bi bi-arrow-left-right me-1 text-muted"></i>Chiều
                                                                                đi:</th>
                                                                            <td><span
                                                                                    class="badge bg-{{ $order->round_trip ? 'primary' : 'secondary' }}">{{ $order->round_trip ? 'Hai chiều' : 'Một chiều' }}</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-nowrap"><i
                                                                                    class="bi bi-rulers me-1 text-muted"></i>Khoảng
                                                                                cách:</th>
                                                                            <td><span
                                                                                    class="badge bg-dark">{{ $order->distance ?? 'N/A' }}
                                                                                    km</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-nowrap"><i
                                                                                    class="bi bi-map me-1 text-muted"></i>Lộ
                                                                                trình:</th>
                                                                            <td>
                                                                                <div class="trip-route">
                                                                                    <div class="route-point start-point">
                                                                                        <i
                                                                                            class="bi bi-geo-alt-fill text-danger"></i>
                                                                                        <span
                                                                                            class="ms-2">{{ $order->start_place }}</span>
                                                                                    </div>

                                                                                    @if (count($order->stop_points) > 0)
                                                                                        <div class="route-line"></div>
                                                                                        @foreach ($order->stop_points as $index => $stop)
                                                                                            <div
                                                                                                class="route-point stop-point">
                                                                                                <i
                                                                                                    class="bi bi-record-circle text-primary"></i>
                                                                                                <span
                                                                                                    class="ms-2">{{ $stop[0] }}</span>
                                                                                            </div>
                                                                                            @if ($index < count($order->stop_points) - 1)
                                                                                                <div class="route-line">
                                                                                                </div>
                                                                                            @endif
                                                                                        @endforeach
                                                                                        <div class="route-line"></div>
                                                                                    @else
                                                                                        <div class="route-line"></div>
                                                                                    @endif

                                                                                    <div class="route-point end-point">
                                                                                        <i
                                                                                            class="bi bi-geo-alt-fill text-success"></i>
                                                                                        <span
                                                                                            class="ms-2">{{ $order->end_place }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card border-0 shadow-sm mb-0">
                                                        <div
                                                            class="card-header bg-success text-white d-flex align-items-center">
                                                            <i class="bi bi-clock-history me-2"></i>
                                                            <span class="fw-semibold">Thông tin thời gian & thanh
                                                                toán</span>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-sm table-borderless mb-0">
                                                                    <tbody>
                                                                        @php
                                                                            $pickup_time = Carbon\Carbon::createFromFormat(
                                                                                'd/m/Y H:i',
                                                                                $order->pickup_time,
                                                                            );
                                                                            $pickup_date = $pickup_time->format(
                                                                                'd/m/Y',
                                                                            );
                                                                            $pickup_time = $pickup_time->format('H:i');
                                                                        @endphp
                                                                        <tr>
                                                                            <th width="30%" class="text-nowrap"><i
                                                                                    class="bi bi-calendar-event me-1 text-muted"></i>Ngày
                                                                                đón:</th>
                                                                            <td>{{ $pickup_date }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-nowrap"><i
                                                                                    class="bi bi-clock me-1 text-muted"></i>Giờ
                                                                                đón:</th>
                                                                            <td>{{ $pickup_time }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-nowrap"><i
                                                                                    class="bi bi-hourglass-split me-1 text-muted"></i>Thời
                                                                                gian chờ:</th>
                                                                            <td>{{ $order->wait_time ?? 0 }} giờ</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-nowrap"><i
                                                                                    class="bi bi-currency-dollar me-1 text-muted"></i>Giá
                                                                                tiền:</th>
                                                                            <td><span
                                                                                    class="fw-bold text-danger">{{ number_format($order->price, 0, ',', '.') }}
                                                                                    VND</span></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="text-nowrap align-top pt-2"><i
                                                                                    class="bi bi-chat-left-text me-1 text-muted"></i>Ghi
                                                                                chú:</th>
                                                                            <td>
                                                                                @if ($order->note)
                                                                                    <div
                                                                                        class="p-2 bg-light rounded border-start border-warning border-3">
                                                                                        {{ $order->note }}
                                                                                    </div>
                                                                                @else
                                                                                    <span
                                                                                        class="text-muted fst-italic">Không
                                                                                        có ghi chú</span>
                                                                                @endif
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-4">
                                            <div class="d-flex flex-column align-items-center">
                                                <i class="bi bi-inbox text-muted" style="font-size: 3rem;"></i>
                                                <h5 class="mt-3">Không tìm thấy đơn hàng nào</h5>
                                                <p class="text-muted">Thử thay đổi bộ lọc hoặc từ khóa tìm kiếm</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $orders->links() }}
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
                        <i class="bi bi-funnel me-2"></i>Bộ lọc đơn hàng
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="GET" id="filterForm">
                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái đơn hàng</label>
                            <select class="form-select" id="status" name="status">
                                <option value="">Tất cả trạng thái</option>
                                <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Chưa xử lý
                                </option>
                                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Đã nhận</option>
                                <option value="2" {{ request('status') == '2' ? 'selected' : '' }}>Đã từ chối
                                </option>
                                <option value="4" {{ request('status') == '4' ? 'selected' : '' }}>Hoàn thành
                                </option>
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

    <!-- Modal Confirm -->
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
        .trip-route {
            position: relative;
            padding: 10px 0;
        }

        .route-point {
            display: flex;
            align-items: center;
            position: relative;
            z-index: 2;
            background-color: white;
            padding: 5px 0;
        }

        .route-line {
            position: relative;
            height: 20px;
            margin-left: 8px;
            border-left: 2px dashed #ccc;
        }

        .start-point i {
            font-size: 1.1rem;
        }

        .stop-point {
            margin-left: 5px;
        }

        .end-point i {
            font-size: 1.1rem;
        }
    </style>
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Toggle details functionality
            $('.toggle-details').on('click', function(e) {
                e.preventDefault();
                const $row = $(this).closest('tr');
                const $expandableRow = $row.next();

                // Check if this row is already expanded
                const isExpanded = !$expandableRow.hasClass('d-none');

                // Close all expanded rows first
                $('.expandable-body').addClass('d-none');

                // Reset button text for all rows
                $('.toggle-details').each(function() {
                    const isMobile = $(window).width() < 768;
                    $(this).html(isMobile ?
                        '<i class="bi bi-info-circle"></i>' :
                        '<i class="bi bi-info-circle me-1"></i>Chi tiết');
                });

                // If the clicked row wasn't already expanded, expand it
                if (!isExpanded) {
                    $expandableRow.removeClass('d-none');
                    // Change button text to show it's expanded
                    const btnText = $(window).width() < 768 ?
                        '<i class="bi bi-dash-circle"></i>' :
                        '<i class="bi bi-dash-circle me-1"></i>Thu gọn';
                    $(this).html(btnText);
                }
                // If it was already expanded, it will remain closed (as we closed all above)
            });

            // Handle responsive button text
            function updateButtonText() {
                const isMobile = $(window).width() < 768;
                $('.toggle-details').each(function() {
                    const isExpanded = !$(this).closest('tr').next().hasClass('d-none');

                    if (isExpanded) {
                        $(this).html(isMobile ?
                            '<i class="bi bi-dash-circle"></i>' :
                            '<i class="bi bi-dash-circle me-1"></i>Thu gọn');
                    } else {
                        $(this).html(isMobile ?
                            '<i class="bi bi-info-circle"></i>' :
                            '<i class="bi bi-info-circle me-1"></i>Chi tiết');
                    }
                });
            }

            // Update on resize
            $(window).on('resize', updateButtonText);

            // Initial update
            updateButtonText();

            // Accept order functionality
            $('.accept-order').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevent event bubbling to parent elements
                const orderId = $(this).data('id');
                $('#confirmModalLabel').text('Xác nhận nhận đơn');
                $('#confirmModalBody').text('Bạn có chắc chắn muốn nhận đơn hàng này?');
                $('#confirmButton').removeClass('btn-danger').addClass('btn-success');

                $('#confirmButton').off('click').on('click', function() {
                    $.ajax({
                        url: `/admin/order/${orderId}/accept`,
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#confirmModal').modal('hide');
                            // Update UI to show order is accepted
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

            // Reject order functionality
            $('.reject-order').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevent event bubbling to parent elements
                const orderId = $(this).data('id');
                $('#confirmModalLabel').text('Xác nhận từ chối đơn');
                $('#confirmModalBody').text('Bạn có chắc chắn muốn từ chối đơn hàng này?');
                $('#confirmButton').removeClass('btn-success').addClass('btn-danger');

                $('#confirmButton').off('click').on('click', function() {
                    $.ajax({
                        url: `/admin/order/${orderId}/reject`,
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#confirmModal').modal('hide');
                            // Update UI to show order is rejected
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

            // Complete order functionality
            $('.complete-order').on('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevent event bubbling to parent elements
                const orderId = $(this).data('id');
                $('#confirmModalLabel').text('Xác nhận hoàn thành đơn');
                $('#confirmModalBody').text('Bạn có chắc chắn muốn đánh dấu đơn hàng này là hoàn thành?');
                $('#confirmButton').removeClass('btn-danger').addClass('btn-info');

                $('#confirmButton').off('click').on('click', function() {
                    $.ajax({
                        url: `/admin/order/${orderId}/complete`,
                        type: 'POST',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            $('#confirmModal').modal('hide');
                            // Update UI to show order is completed
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

            // Prevent phone link from expanding the table
            $('a[href^="tel:"]').on('click', function(e) {
                e.stopPropagation(); // Prevent event bubbling to parent elements
            });

            // Close modal when clicking the close button
            $('.btn-close, .btn-secondary').on('click', function(e) {
                e.preventDefault();
                $('#confirmModal').modal('hide');
                $('#filterModal').modal('hide');
            });

            // Filter modal functionality
            $('[data-bs-target="#filterModal"]').on('click', function() {
                $('#filterModal').modal('show');
            });

            // Reset filter button
            $('#resetFilter').on('click', function() {
                $('#status').val('');
                $('#date_from').val('');
                $('#date_to').val('');
                $('#filterForm').submit();
            });
        });
    </script>
@endsection
