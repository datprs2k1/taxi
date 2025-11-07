@extends('layout.adminlayout')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">
                        <i class="bi bi-speedometer2 me-2"></i>Dashboard
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content-body">
        <div class="container-fluid">
            <!-- Summary Cards -->
            <div class="row g-3 mb-4">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="small-box bg-info shadow-sm" style="transition: transform 0.2s, box-shadow 0.2s;"
                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.1)'">
                        <div class="inner">
                            <h3>{{ $pendingCount }}</h3>
                            <p class="mb-0">Đơn hàng mới</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-cart-plus"></i>
                        </div>
                        <a href="{{ route('admin.order.index') }}" class="small-box-footer">
                            Xem chi tiết <i class="bi bi-arrow-right-circle ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="small-box bg-success shadow-sm" style="transition: transform 0.2s, box-shadow 0.2s;"
                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.1)'">
                        <div class="inner">
                            <h3>
                                {{ $totalOrders > 0 ? round(($acceptedCount / $totalOrders) * 100) : 0 }}
                                <sup style="font-size: 20px">%</sup>
                            </h3>
                            <p class="mb-0">Tỷ lệ chấp nhận</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <a href="{{ route('admin.order.index') }}" class="small-box-footer">
                            Xem chi tiết <i class="bi bi-arrow-right-circle ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="small-box bg-warning shadow-sm" style="transition: transform 0.2s, box-shadow 0.2s;"
                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.1)'">
                        <div class="inner">
                            <h3>{{ $totalOrders }}</h3>
                            <p class="mb-0">Tổng đơn hàng</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <a href="{{ route('admin.order.index') }}" class="small-box-footer">
                            Xem chi tiết <i class="bi bi-arrow-right-circle ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="small-box bg-danger shadow-sm" style="transition: transform 0.2s, box-shadow 0.2s;"
                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.1)'">
                        <div class="inner">
                            <h3>{{ $rejectedCount }}</h3>
                            <p class="mb-0">Đơn hàng từ chối</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-x-circle"></i>
                        </div>
                        <a href="{{ route('admin.order.index') }}" class="small-box-footer">
                            Xem chi tiết <i class="bi bi-arrow-right-circle ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Statistics -->
            <div class="row g-3 mb-4">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="small-box bg-primary shadow-sm" style="transition: transform 0.2s, box-shadow 0.2s;"
                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.1)'">
                        <div class="inner">
                            <h3>{{ $totalContacts }}</h3>
                            <p class="mb-0">Tổng liên hệ</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <a href="{{ route('admin.contact.index') }}" class="small-box-footer">
                            Xem chi tiết <i class="bi bi-arrow-right-circle ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="small-box bg-warning shadow-sm" style="transition: transform 0.2s, box-shadow 0.2s;"
                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.1)'">
                        <div class="inner">
                            <h3>{{ $pendingContacts }}</h3>
                            <p class="mb-0">Liên hệ chưa xử lý</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-envelope-exclamation"></i>
                        </div>
                        <a href="{{ route('admin.contact.index', ['status' => 0]) }}" class="small-box-footer">
                            Xem chi tiết <i class="bi bi-arrow-right-circle ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="small-box bg-success shadow-sm" style="transition: transform 0.2s, box-shadow 0.2s;"
                         onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.1)'">
                        <div class="inner">
                            <h3>{{ $processedContacts }}</h3>
                            <p class="mb-0">Liên hệ đã xử lý</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-envelope-check"></i>
                        </div>
                        <a href="{{ route('admin.contact.index', ['status' => 1]) }}" class="small-box-footer">
                            Xem chi tiết <i class="bi bi-arrow-right-circle ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="row g-3 mb-4">
                <!-- Revenue Chart -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title mb-0">
                                <i class="bi bi-bar-chart-fill me-2"></i>
                                Doanh thu 7 ngày qua
                            </h3>
                        </div>
                        <div class="card-body">
                            <canvas id="revenueChart" height="250"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Orders Chart -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white">
                            <h3 class="card-title mb-0">
                                <i class="bi bi-pie-chart-fill me-2"></i>
                                Đơn hàng theo trạng thái
                            </h3>
                        </div>
                        <div class="card-body">
                            <canvas id="orderChart" height="250"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <!-- Popular Locations Chart -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h3 class="card-title mb-0">
                                <i class="bi bi-geo-alt-fill me-2"></i>
                                Địa điểm phổ biến
                            </h3>
                        </div>
                        <div class="card-body">
                            <canvas id="locationsChart" height="260"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Seat Distribution Chart -->
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-warning text-dark">
                            <h3 class="card-title mb-0">
                                <i class="bi bi-people-fill me-2"></i>
                                Phân bổ số ghế
                            </h3>
                        </div>
                        <div class="card-body">
                            <canvas id="seatChart" height="260"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const revenueLabels = @json($revenueLabels);
            const revenueData = @json($revenueLast7Days);
            const ordersByStatus = @json($ordersByStatus);
            const locationLabels = @json($locationLabels);
            const startCounts = @json($startCounts);
            const endCounts = @json($endCounts);
            const seatLabels = @json($seatLabels);
            const seatCounts = @json($seatCounts);
            // Revenue Chart - Optimized for daily data
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            new Chart(revenueCtx, {
                type: 'bar',
                data: {
                    labels: revenueLabels,
                    datasets: [{
                        label: 'Doanh thu (VNĐ)',
                        data: revenueData,
                        backgroundColor: 'rgba(60, 141, 188, 0.7)',
                        borderColor: 'rgba(60, 141, 188, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { precision: 0 }
                        }
                    }
                }
            });

            // Order Chart by Status
            const orderCtx = document.getElementById('orderChart').getContext('2d');
            new Chart(orderCtx, {
                type: 'pie',
                data: {
                    labels: ['Chưa xử lý', 'Đã nhận', 'Đã từ chối'],
                    datasets: [{
                        data: ordersByStatus,
                        backgroundColor: [
                            'rgba(255, 193, 7, 0.8)', // Warning - Chưa xử lý
                            'rgba(40, 167, 69, 0.8)', // Success - Đã nhận
                            'rgba(220, 53, 69, 0.8)' // Danger - Đã từ chối
                        ],
                        borderColor: [
                            'rgba(255, 193, 7, 1)',
                            'rgba(40, 167, 69, 1)',
                            'rgba(220, 53, 69, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `${label}: ${value} (${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });

            // Locations Chart (Combined start and end locations)
            const locationsCtx = document.getElementById('locationsChart').getContext('2d');
            new Chart(locationsCtx, {
                type: 'bar',
                data: {
                    labels: locationLabels,
                    datasets: [{
                        label: 'Điểm đi',
                        data: startCounts,
                        backgroundColor: 'rgba(60, 141, 188, 0.7)'
                    }, {
                        label: 'Điểm đến',
                        data: endCounts,
                        backgroundColor: 'rgba(40, 167, 69, 0.7)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            stacked: false
                        },
                        y: {
                            stacked: false
                        }
                    }
                }
            });

            // Seat Chart
            const seatCtx = document.getElementById('seatChart').getContext('2d');
            new Chart(seatCtx, {
                type: 'doughnut',
                data: {
                    labels: seatLabels,
                    datasets: [{
                        data: seatCounts,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        });
    </script>
@endsection
