<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng mới #{{ strtoupper($order->code) }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            border-bottom: 3px solid #007bff;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #007bff;
            margin: 0;
            font-size: 24px;
        }
        .header .code {
            font-size: 18px;
            color: #666;
            margin-top: 10px;
        }
        .section {
            margin-bottom: 25px;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px solid #e0e0e0;
        }
        .info-row {
            margin-bottom: 8px;
            padding-left: 10px;
        }
        .info-label {
            font-weight: bold;
            display: inline-block;
            width: 140px;
        }
        .info-value {
            color: #333;
        }
        .stop-points {
            margin-left: 20px;
            margin-top: 5px;
        }
        .stop-point {
            margin-bottom: 5px;
            color: #555;
        }
        .price-section {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .total-price {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 2px solid #007bff;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #666;
            font-size: 12px;
        }
        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .badge-round-trip {
            background-color: #28a745;
            color: white;
        }
        .badge-one-way {
            background-color: #17a2b8;
            color: white;
        }
        .badge-long-trip {
            background-color: #ffc107;
            color: #333;
        }
        .badge-airport {
            background-color: #6c757d;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚖 ĐƠN HÀNG MỚI</h1>
            <div class="code">Mã đơn hàng: #{{ strtoupper($order->code) }}</div>
        </div>

        <div class="section">
            <div class="section-title">👤 THÔNG TIN KHÁCH HÀNG</div>
            <div class="info-row">
                <span class="info-label">Tên:</span>
                <span class="info-value">{{ $order->name }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Số điện thoại:</span>
                <span class="info-value">{{ $order->phone }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Loại xe:</span>
                <span class="info-value">{{ $order->num_seats }} chỗ</span>
            </div>
        </div>

        <div class="section">
            <div class="section-title">🗺️ HÀNH TRÌNH</div>
            <div class="info-row">
                <span class="info-label">Loại chuyến:</span>
                <span class="info-value">
                    @if($order->round_trip)
                        <span class="badge badge-round-trip">Khứ hồi ↔️</span>
                    @else
                        <span class="badge badge-one-way">Một chiều →</span>
                    @endif
                </span>
            </div>
            <div class="info-row">
                <span class="info-label">Loại đường:</span>
                <span class="info-value">
                    @if($order->long_trip)
                        <span class="badge badge-long-trip">Đường dài 🛣️</span>
                    @else
                        <span class="badge badge-airport">Sân bay ✈️</span>
                    @endif
                </span>
            </div>
            <div class="info-row">
                <span class="info-label">Điểm đi:</span>
                <span class="info-value">{{ $order->start_place }}</span>
            </div>
            @if(!empty($order->stop_points) && is_array($order->stop_points) && count($order->stop_points) > 0)
            <div class="info-row">
                <span class="info-label">Điểm dừng:</span>
                <div class="stop-points">
                    @foreach($order->stop_points as $index => $stop)
                        <div class="stop-point">{{ $index + 1 }}. {{ $stop }}</div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="info-row">
                <span class="info-label">Điểm đến:</span>
                <span class="info-value">{{ $order->end_place }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Khoảng cách:</span>
                <span class="info-value">{{ $order->distance }} km</span>
            </div>
        </div>

        <div class="section">
            <div class="section-title">⏰ THỜI GIAN</div>
            <div class="info-row">
                <span class="info-label">Thời gian đón:</span>
                <span class="info-value">{{ $order->pickup_time }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Thời gian chờ:</span>
                <span class="info-value">{{ $order->waittime }} phút</span>
            </div>
        </div>

        <div class="section">
            <div class="section-title">💰 CHI PHÍ</div>
            <div class="price-section">
                <div class="info-row">
                    <span class="info-label">Giá cước:</span>
                    <span class="info-value">{{ number_format($order->price) }} đ</span>
                </div>
                @if($order->vat)
                <div class="info-row">
                    <span class="info-label">VAT (10%):</span>
                    <span class="info-value">{{ number_format($order->price * 0.1) }} đ</span>
                </div>
                @endif
                <div class="total-price">
                    Tổng cộng: {{ number_format($totalPrice) }} đ
                </div>
            </div>
        </div>

        @if(!empty($order->note))
        <div class="section">
            <div class="section-title">📝 GHI CHÚ</div>
            <div style="padding: 10px; background-color: #fff3cd; border-left: 4px solid #ffc107; border-radius: 4px;">
                {{ $order->note }}
            </div>
        </div>
        @endif

        <div class="footer">
            <p>🕒 Thời gian đặt: {{ $order->created_at ? $order->created_at->format('d/m/Y H:i') : 'N/A' }}</p>
            <p>Xem chi tiết đơn hàng: <a href="{{ url('/order/' . $order->code) }}">{{ url('/order/' . $order->code) }}</a></p>
        </div>
    </div>
</body>
</html>

