<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ mới #{{ strtoupper($contact->code) }}</title>
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
            border-bottom: 3px solid #28a745;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #28a745;
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
            color: #28a745;
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
        .message-box {
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #28a745;
            border-radius: 4px;
            margin-top: 10px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #666;
            font-size: 12px;
        }
        .action-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
        .action-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📬 LIÊN HỆ MỚI</h1>
            <div class="code">Mã liên hệ: #{{ strtoupper($contact->code) }}</div>
        </div>

        <div class="section">
            <div class="section-title">👤 THÔNG TIN LIÊN HỆ</div>
            <div class="info-row">
                <span class="info-label">Họ và tên:</span>
                <span class="info-value">{{ $contact->name }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Số điện thoại:</span>
                <span class="info-value">{{ $contact->phone }}</span>
            </div>
        </div>

        <div class="section">
            <div class="section-title">💬 NỘI DUNG</div>
            <div class="message-box">{{ $contact->message }}</div>
        </div>

        <div style="text-align: center;">
            <a href="tel:{{ $contact->phone }}" class="action-button">📞 Gọi lại ngay</a>
        </div>

        <div class="footer">
            <p>🕒 Thời gian gửi: {{ $contact->created_at ? $contact->created_at->format('d/m/Y H:i') : 'N/A' }}</p>
            <p>Email này được gửi tự động từ hệ thống</p>
        </div>
    </div>
</body>
</html>

