<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Đơn #{{ $order->code ?? '000' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="theme-color" content="#0d6efd">
    <meta name="description" content="Chi tiết đơn hàng #{{ $order->code ?? '000' }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
</head>

<body class="bg-light">
    <div class="container-fluid py-3 px-3 px-lg-5 max-width-wrapper">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="card shadow-sm border-0 rounded-4 mb-4 overflow-hidden">
                    <div class="card-header bg-primary p-3 p-md-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="text-white mb-0 fs-5 fw-bold d-flex align-items-center">
                                <i class="bi bi-file-earmark-text me-2"></i>Đơn #{{ $order->code ?? '000' }}
                            </h3>
                            <span class="badge bg-white text-primary px-3 py-2 rounded-pill fs-7">
                                {{ isset($order->created_at) ? $order->created_at->format('d/m/Y') : now()->format('d/m/Y') }}
                            </span>
                        </div>
                    </div>

                    <div class="card-body p-3 p-md-4">
                        <!-- Customer Info Card -->
                        <div class="card mb-4 border-0 shadow-sm rounded-4 hover-card">
                            <div class="card-body p-3 p-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-person-circle text-primary"></i>
                                    </div>
                                    <h5 class="fw-bold mb-0 fs-6">Thông tin khách hàng</h5>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column info-item">
                                            <small class="text-muted">Họ tên</small>
                                            <span class="fw-medium">{{ $order->name ?? 'Chưa cập nhật' }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column info-item">
                                            <small class="text-muted">Số điện thoại</small>
                                            <a href="tel:{{ $order->phone ?? '' }}"
                                                class="text-primary text-decoration-none fw-medium">
                                                <i
                                                    class="bi bi-telephone me-1 small"></i>{{ $order->phone ?? 'Chưa cập nhật' }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column info-item">
                                            <small class="text-muted">Loại xe</small>
                                            <span class="fw-medium">
                                                <i class="bi bi-car-front me-1 text-muted"></i>
                                                {{ $order->num_seats ? $order->num_seats . ' chỗ' : 'Chưa xác định' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column info-item">
                                            <small class="text-muted">Thời gian đón</small>
                                            <span class="fw-medium">
                                                <i class="bi bi-clock me-1 text-muted"></i>
                                                {{ $order->pickup_time ?? 'Chưa xác định' }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column info-item">
                                            <small class="text-muted">Thời gian chờ</small>
                                            <span class="fw-medium">
                                                <i class="bi bi-hourglass-split me-1 text-muted"></i>
                                                {{ $order->waittime ?? 0 }} phút
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column info-item">
                                            <small class="text-muted">Loại chuyến</small>
                                            <span class="fw-medium">
                                                @if ($order->long_trip)
                                                    <i class="bi bi-check-circle-fill me-1 text-success"></i> Đường dài
                                                @else
                                                    <i class="bi bi-airplane me-1 text-primary"></i> Sân bay
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    @if (!empty($order->note))
                                        <div class="col-12 mt-3">
                                            <div class="d-flex flex-column info-item p-3 bg-light rounded-3">
                                                <small class="text-muted mb-1">Ghi chú</small>
                                                <span class="fw-medium">{{ $order->note }}</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Journey Card -->
                        <div class="card mb-4 border-0 shadow-sm rounded-4 hover-card">
                            <div class="card-body p-3 p-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-map text-primary"></i>
                                    </div>
                                    <h5 class="fw-bold mb-0 fs-6">Hành trình</h5>
                                </div>

                                <div class="journey-timeline position-relative mb-4 ps-2">
                                    <!-- Starting Point -->
                                    <div class="journey-point d-flex mb-4">
                                        <div class="journey-icon">
                                            <div class="icon-wrapper bg-primary text-white">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </div>
                                        </div>
                                        <div class="journey-content ms-3">
                                            <h6 class="fw-bold mb-1">Điểm đi</h6>
                                            <p class="mb-0 text-dark">{{ $order->start_place ?? 'Chưa cập nhật' }}</p>
                                        </div>
                                    </div>

                                    <!-- Stop Points -->
                                    @if (!empty($order->stop_points))
                                        @foreach ($order->stop_points as $stop)
                                            <div class="journey-point d-flex mb-4">
                                                <div class="journey-icon">
                                                    <div class="icon-wrapper bg-warning text-white">
                                                        <i class="bi bi-pin-map-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="journey-content ms-3">
                                                    <h6 class="fw-bold mb-1">Điểm dừng {{ $loop->iteration }}</h6>
                                                    <p class="mb-0 text-dark">{{ $stop }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                    <!-- Destination -->
                                    <div class="journey-point d-flex">
                                        <div class="journey-icon">
                                            <div class="icon-wrapper bg-success text-white">
                                                <i class="bi bi-flag-fill"></i>
                                            </div>
                                        </div>
                                        <div class="journey-content ms-3">
                                            <h6 class="fw-bold mb-1">Điểm đến</h6>
                                            <p class="mb-0 text-dark">{{ $order->end_place ?? 'Chưa cập nhật' }}</p>
                                        </div>
                                    </div>

                                    <!-- Return Journey for Round Trip -->
                                    @if ($order->round_trip)
                                        <div class="journey-point d-flex mt-4">
                                            <div class="journey-icon">
                                                <div class="icon-wrapper bg-info text-white">
                                                    <i class="bi bi-arrow-return-left"></i>
                                                </div>
                                            </div>
                                            <div class="journey-content ms-3">
                                                <h6 class="fw-bold mb-1">Quay về</h6>
                                                <p class="mb-0 text-dark">{{ $order->start_place ?? 'Chưa cập nhật' }}
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-3">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-signpost-split me-2 text-primary"></i>
                                        <span class="fw-medium">{{ $order->distance ?? 0 }} km
                                            {{ $order->round_trip ? 'x 2' : '' }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        @if ($order->round_trip)
                                            <i class="bi bi-arrow-left-right me-2 text-success"></i>
                                            <span class="fw-medium text-success">Khứ hồi</span>
                                        @else
                                            <i class="bi bi-arrow-right me-2 text-primary"></i>
                                            <span class="fw-medium">Một chiều</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Price Card -->
                        <div class="card mb-4 border-0 shadow-sm rounded-4 hover-card">
                            <div class="card-body p-3 p-md-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="bi bi-cash-stack text-primary"></i>
                                    </div>
                                    <h5 class="fw-bold mb-0 fs-6">Chi phí</h5>
                                </div>

                                <div class="list-group list-group-flush">
                                    <div class="list-group-item px-0 py-3 d-flex justify-content-between border-0">
                                        <span>Giá cước:</span>
                                        <span class="fw-medium">{{ number_format($order->price ?? 0) }} đ</span>
                                    </div>
                                    @if ($order->round_trip)
                                        <div class="list-group-item px-0 py-3 d-flex justify-content-between border-0">
                                            <span>Loại hành trình:</span>
                                            <span class="fw-medium text-success">Khứ hồi</span>
                                        </div>
                                    @endif
                                    @if (!empty($order->vat) && $order->vat)
                                        <div class="list-group-item px-0 py-3 d-flex justify-content-between border-0">
                                            <span>VAT (10%):</span>
                                            <span class="fw-medium">{{ number_format(($order->price ?? 0) * 0.1) }}
                                                đ</span>
                                        </div>
                                    @endif
                                    <div
                                        class="list-group-item px-0 py-3 d-flex justify-content-between border-0 total-price">
                                        <span class="fw-bold">Tổng cộng:</span>
                                        <span
                                            class="fw-bold text-primary fs-5">{{ number_format($order->vat ? $order->price * 1.1 : $order->price) }}
                                            đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer bg-white p-3 p-md-4 border-top">
                        <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
                            <a href="{{ url()->previous() }}"
                                class="btn btn-outline-secondary flex-grow-1 d-flex align-items-center justify-content-center">
                                <i class="bi bi-arrow-left me-2"></i>Quay lại
                            </a>
                            <button
                                class="btn btn-primary flex-grow-1 d-flex align-items-center justify-content-center"
                                id="downloadBtn">
                                <i class="bi bi-download me-2"></i>Tải xuống
                            </button>
                            <a href="tel:{{ $order->phone ?? '' }}"
                                class="btn btn-success flex-grow-1 d-flex align-items-center justify-content-center">
                                <i class="bi bi-telephone me-2"></i>Gọi khách hàng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        :root {
            --primary-color: #0d6efd;
            --primary-light: rgba(13, 110, 253, 0.1);
            --success-color: #198754;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --info-color: #0dcaf0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --border-radius: 1rem;
            --box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-color);
            font-size: 14px;
            color: var(--dark-color);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            overflow-x: hidden;
        }

        .max-width-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        .fs-7 {
            font-size: 0.85rem;
        }

        .hover-card {
            transition: var(--transition);
            border-radius: var(--border-radius) !important;
            will-change: transform;
        }

        .hover-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--box-shadow);
        }

        .journey-timeline::before {
            content: '';
            position: absolute;
            top: 12px;
            bottom: 12px;
            left: 12px;
            width: 2px;
            background-color: #e9ecef;
            z-index: 0;
        }

        .journey-icon {
            position: relative;
            z-index: 1;
        }

        .icon-wrapper {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .info-item {
            padding: 0.5rem 0;
        }

        .total-price {
            border-top: 1px dashed #dee2e6 !important;
            padding-top: 1rem !important;
        }

        .btn {
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease;
            touch-action: manipulation;
        }

        .ripple-effect {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.4);
            width: 100px;
            height: 100px;
            margin-top: -50px;
            margin-left: -50px;
            animation: ripple 0.6s;
            opacity: 0;
        }

        @keyframes ripple {
            0% {
                transform: scale(0);
                opacity: 0.5;
            }

            100% {
                transform: scale(4);
                opacity: 0;
            }
        }

        @media (min-width: 768px) {
            body {
                font-size: 16px;
            }

            .icon-wrapper {
                width: 36px;
                height: 36px;
                font-size: 1rem;
            }

            .journey-timeline::before {
                left: 18px;
            }
        }

        @media (max-width: 767px) {
            .card-body {
                padding: 1rem !important;
            }

            .journey-content {
                width: calc(100% - 40px);
            }

            .journey-content p {
                word-break: break-word;
            }

            .btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }

            .bg-primary.bg-opacity-10.rounded-circle.p-2 {
                padding: 0.5rem !important;
            }

            .bi {
                font-size: 0.9rem;
            }
        }

        @media (min-width: 992px) {
            .icon-wrapper {
                width: 40px;
                height: 40px;
                font-size: 1.1rem;
            }

            .journey-timeline::before {
                left: 20px;
            }

            .bi {
                font-size: 1.1rem;
            }
        }

        @media print {
            body {
                background-color: white;
                font-size: 12pt;
            }

            .card {
                box-shadow: none !important;
                border: 1px solid #dee2e6 !important;
            }

            .card-footer,
            .btn {
                display: none !important;
            }

            .hover-card:hover {
                transform: none;
                box-shadow: none;
            }

            a {
                text-decoration: none !important;
                color: inherit !important;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Auto-hide alerts after 5 seconds
            setTimeout(function() {
                $('.alert').alert('close');
            }, 5000);

            // Print functionality
            $('#downloadBtn').click(function() {
                window.print();
            });

            // Add ripple effect to buttons
            $('.btn').on('click', function(e) {
                let x = e.clientX - e.target.getBoundingClientRect().left;
                let y = e.clientY - e.target.getBoundingClientRect().top;

                let ripple = document.createElement('span');
                ripple.classList.add('ripple-effect');
                ripple.style.left = `${x}px`;
                ripple.style.top = `${y}px`;

                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });

            // Improve mobile experience by adding touch feedback
            document.addEventListener('touchstart', function() {}, {
                passive: true
            });

            // Lazy load images if needed
            if ('loading' in HTMLImageElement.prototype) {
                const images = document.querySelectorAll('img[loading="lazy"]');
                images.forEach(img => {
                    img.src = img.dataset.src;
                });
            }

            // Add smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>

</html>
