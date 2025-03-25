@extends('layout.adminlayout')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content-body">
        <div class="container-fluid">
            <!-- Summary Cards -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-cart-plus"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Completion Rate</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Active Drivers</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Total Routes</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Charts -->
            <div class="row">
                <!-- Revenue Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="bi bi-bar-chart-fill me-1"></i>
                                Daily Revenue (Last 7 Days)
                            </h3>
                        </div>
                        <div class="card-body">
                            <canvas id="revenueChart" height="250"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Orders Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="bi bi-graph-up me-1"></i>
                                Orders by Status
                            </h3>
                        </div>
                        <div class="card-body">
                            <canvas id="orderChart" height="250"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Popular Locations Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="bi bi-geo-alt-fill me-1"></i>
                                Popular Locations
                            </h3>
                        </div>
                        <div class="card-body">
                            <canvas id="locationsChart" height="260"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Seat Distribution Chart -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="bi bi-people-fill me-1"></i>
                                Seat Distribution
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Revenue Chart - Optimized for daily data
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            new Chart(revenueCtx, {
                type: 'bar',
                data: {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    datasets: [{
                        label: 'Daily Revenue (Million VND)',
                        data: [12.5, 15.8, 10.2, 18.4, 22.6, 25.1, 19.7],
                        backgroundColor: [
                            'rgba(60, 141, 188, 0.7)',
                            'rgba(60, 141, 188, 0.7)',
                            'rgba(60, 141, 188, 0.7)',
                            'rgba(60, 141, 188, 0.7)',
                            'rgba(60, 141, 188, 0.7)',
                            'rgba(255, 193, 7, 0.7)',
                            'rgba(255, 193, 7, 0.7)'
                        ],
                        borderColor: [
                            'rgba(60, 141, 188, 1)',
                            'rgba(60, 141, 188, 1)',
                            'rgba(60, 141, 188, 1)',
                            'rgba(60, 141, 188, 1)',
                            'rgba(60, 141, 188, 1)',
                            'rgba(255, 193, 7, 1)',
                            'rgba(255, 193, 7, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Million VND'
                            }
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
                        data: [42, 86, 27],
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
                    labels: ['Hà Nội', 'Hồ Chí Minh', 'Đà Nẵng', 'Nha Trang', 'Huế'],
                    datasets: [{
                        label: 'Start Locations',
                        data: [35, 30, 15, 10, 10],
                        backgroundColor: 'rgba(60, 141, 188, 0.7)'
                    }, {
                        label: 'End Locations',
                        data: [25, 40, 20, 8, 7],
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
                    labels: ['4 Seats', '7 Seats', '16 Seats', '29 Seats', '45 Seats'],
                    datasets: [{
                        data: [45, 25, 20, 7, 3],
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
