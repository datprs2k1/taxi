@extends('layout.adminlayout')
@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">
                        <i class="bi bi-gear me-2"></i>Cấu hình hệ thống
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Cấu hình</li>
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

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <strong>Có lỗi xảy ra:</strong>
                    <ul class="mb-0 mt-2">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="bi bi-sliders me-2"></i>Quản lý cấu hình
                            </h3>
                        </div>

                        <form action="{{ route('admin.config.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs mb-4" id="configTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" 
                                            data-bs-target="#general" type="button" role="tab">
                                            <i class="bi bi-info-circle me-2"></i>Thông tin chung
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" 
                                            data-bs-target="#contact" type="button" role="tab">
                                            <i class="bi bi-telephone me-2"></i>Liên hệ
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="social-tab" data-bs-toggle="tab" 
                                            data-bs-target="#social" type="button" role="tab">
                                            <i class="bi bi-share me-2"></i>Mạng xã hội
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" 
                                            data-bs-target="#notifications" type="button" role="tab">
                                            <i class="bi bi-bell me-2"></i>Thông báo đơn hàng
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="email-settings-tab" data-bs-toggle="tab" 
                                            data-bs-target="#email-settings" type="button" role="tab">
                                            <i class="bi bi-envelope me-2"></i>Cấu hình Email
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="telegram-settings-tab" data-bs-toggle="tab" 
                                            data-bs-target="#telegram-settings" type="button" role="tab">
                                            <i class="bi bi-telegram me-2"></i>Cấu hình Telegram
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="google-distance-tab" data-bs-toggle="tab" 
                                            data-bs-target="#google-distance" type="button" role="tab">
                                            <i class="bi bi-geo-alt me-2"></i>Google Distance Matrix
                                        </button>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content" id="configTabContent">
                                    <!-- General Tab -->
                                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="title" class="form-label">
                                                    <i class="bi bi-tag me-1"></i>Title
                                                </label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                                    id="title" name="title" placeholder="Nhập tiêu đề"
                                                    value="{{ old('title', $config->where('key', 'title')->first()?->value ?? '') }}">
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="name" class="form-label">
                                                    <i class="bi bi-building me-1"></i>Tên
                                                </label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                                    id="name" name="name" placeholder="Nhập tên" 
                                                    value="{{ old('name', $config->where('key', 'name')->first()?->value ?? '') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="logo" class="form-label">
                                                    <i class="bi bi-image me-1"></i>Logo
                                                </label>
                                                <input type="file" class="form-control @error('logo') is-invalid @enderror" 
                                                    id="logo" accept="image/*" name="logo" onchange="previewImage(this)">
                                                @error('logo')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <div class="mt-2">
                                                    <img id="preview"
                                                        src="{{ $config->where('key', 'logo')->first()?->value ? asset('storage/config/' . $config->where('key', 'logo')->first()->value) : asset('images/no-image.png') }}"
                                                        class="img-thumbnail" style="max-height: 120px; max-width: 200px;">
                                                </div>
                                                <small class="form-text text-muted">
                                                    Chấp nhận: JPG, PNG, GIF. Kích thước tối đa: 2MB
                                                </small>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="description" class="form-label">
                                                    <i class="bi bi-text-paragraph me-1"></i>Mô tả
                                                </label>
                                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                                    id="description" name="description" rows="3" 
                                                    placeholder="Nhập mô tả">{{ old('description', $config->where('key', 'description')->first()?->value ?? '') }}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Contact Tab -->
                                    <div class="tab-pane fade" id="contact" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="address" class="form-label">
                                                    <i class="bi bi-geo-alt me-1"></i>Địa chỉ
                                                </label>
                                                <textarea class="form-control @error('address') is-invalid @enderror" 
                                                    id="address" name="address" rows="3" 
                                                    placeholder="Nhập địa chỉ">{{ old('address', $config->where('key', 'address')->first()?->value ?? '') }}</textarea>
                                                @error('address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label">
                                                    <i class="bi bi-envelope me-1"></i>Email
                                                </label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                                    id="email" name="email" placeholder="Nhập email"
                                                    value="{{ old('email', $config->where('key', 'email')->first()?->value ?? '') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="phone" class="form-label">
                                                    <i class="bi bi-telephone-fill me-1"></i>Số điện thoại
                                                </label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                                    id="phone" name="phone" placeholder="Nhập số điện thoại"
                                                    value="{{ old('phone', $config->where('key', 'phone')->first()?->value ?? '') }}">
                                                @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Social Media Tab -->
                                    <div class="tab-pane fade" id="social" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="facebook" class="form-label">
                                                    <i class="bi bi-facebook me-1 text-primary"></i>Facebook
                                                </label>
                                                <input type="url" class="form-control @error('facebook') is-invalid @enderror" 
                                                    id="facebook" name="facebook" placeholder="https://www.facebook.com/..."
                                                    value="{{ old('facebook', $config->where('key', 'facebook')->first()?->value ?? '') }}">
                                                @error('facebook')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="zalo" class="form-label">
                                                    <i class="bi bi-chat-dots me-1 text-info"></i>Zalo
                                                </label>
                                                <input type="url" class="form-control @error('zalo') is-invalid @enderror" 
                                                    id="zalo" name="zalo" placeholder="https://zalo.me/..."
                                                    value="{{ old('zalo', $config->where('key', 'zalo')->first()?->value ?? '') }}">
                                                @error('zalo')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="messenger" class="form-label">
                                                    <i class="bi bi-messenger me-1 text-primary"></i>Messenger
                                                </label>
                                                <input type="url" class="form-control @error('messenger') is-invalid @enderror" 
                                                    id="messenger" name="messenger" placeholder="https://m.me/..."
                                                    value="{{ old('messenger', $config->where('key', 'messenger')->first()?->value ?? '') }}">
                                                @error('messenger')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order Notifications Tab -->
                                    <div class="tab-pane fade" id="notifications" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <h5 class="mb-3">
                                                    <i class="bi bi-bell-fill me-2"></i>Cài đặt thông báo
                                                </h5>
                                                
                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="email_order_enabled" 
                                                        name="email_order_enabled" value="1"
                                                        {{ old('email_order_enabled', $config->where('key', 'email_order_enabled')->first()?->value ?? '0') == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="email_order_enabled">
                                                        <i class="bi bi-envelope-check me-1"></i>
                                                        <strong>Bật gửi email thông báo đơn hàng</strong>
                                                    </label>
                                                </div>

                                                <div class="form-check form-switch mb-3">
                                                    <input class="form-check-input" type="checkbox" id="telegram_order_enabled" 
                                                        name="telegram_order_enabled" value="1"
                                                        {{ old('telegram_order_enabled', $config->where('key', 'telegram_order_enabled')->first()?->value ?? '0') == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="telegram_order_enabled">
                                                        <i class="bi bi-send me-1"></i>
                                                        <strong>Bật gửi Telegram thông báo đơn hàng</strong>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="email_order_recipient" class="form-label">
                                                    <i class="bi bi-envelope-at me-1"></i>Email nhận thông báo đơn hàng
                                                </label>
                                                <input type="email" class="form-control @error('email_order_recipient') is-invalid @enderror" 
                                                    id="email_order_recipient" name="email_order_recipient"
                                                    placeholder="admin@example.com"
                                                    value="{{ old('email_order_recipient', $config->where('key', 'email_order_recipient')->first()?->value ?? '') }}">
                                                @error('email_order_recipient')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-text text-muted">
                                                    Email này sẽ nhận thông báo khi có đơn hàng mới
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email Settings Tab -->
                                    <div class="tab-pane fade" id="email-settings" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <div class="alert alert-info">
                                                    <i class="bi bi-info-circle me-2"></i>
                                                    <strong>Lưu ý:</strong> Cấu hình Gmail SMTP để gửi email thông báo. 
                                                    Bạn cần sử dụng mật khẩu ứng dụng (App Password) từ Google Account.
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="gmail_smtp_host" class="form-label">
                                                    <i class="bi bi-server me-1"></i>Gmail SMTP Host
                                                </label>
                                                <input type="text" class="form-control @error('gmail_smtp_host') is-invalid @enderror" 
                                                    id="gmail_smtp_host" name="gmail_smtp_host"
                                                    placeholder="smtp.gmail.com"
                                                    value="{{ old('gmail_smtp_host', $config->where('key', 'gmail_smtp_host')->first()?->value ?? 'smtp.gmail.com') }}">
                                                @error('gmail_smtp_host')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="gmail_smtp_port" class="form-label">
                                                    <i class="bi bi-123 me-1"></i>Gmail SMTP Port
                                                </label>
                                                <input type="number" class="form-control @error('gmail_smtp_port') is-invalid @enderror" 
                                                    id="gmail_smtp_port" name="gmail_smtp_port"
                                                    placeholder="587"
                                                    value="{{ old('gmail_smtp_port', $config->where('key', 'gmail_smtp_port')->first()?->value ?? '587') }}">
                                                @error('gmail_smtp_port')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="gmail_smtp_username" class="form-label">
                                                    <i class="bi bi-person me-1"></i>Gmail SMTP Username (Email)
                                                </label>
                                                <input type="email" class="form-control @error('gmail_smtp_username') is-invalid @enderror" 
                                                    id="gmail_smtp_username" name="gmail_smtp_username"
                                                    placeholder="your-email@gmail.com"
                                                    value="{{ old('gmail_smtp_username', $config->where('key', 'gmail_smtp_username')->first()?->value ?? '') }}">
                                                @error('gmail_smtp_username')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="gmail_smtp_password" class="form-label">
                                                    <i class="bi bi-lock me-1"></i>Gmail SMTP Password
                                                </label>
                                                <input type="password" class="form-control @error('gmail_smtp_password') is-invalid @enderror" 
                                                    id="gmail_smtp_password" name="gmail_smtp_password"
                                                    placeholder="Nhập mật khẩu ứng dụng Gmail"
                                                    value="{{ old('gmail_smtp_password', $config->where('key', 'gmail_smtp_password')->first()?->value ?? '') }}">
                                                @error('gmail_smtp_password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-text text-muted">
                                                    <i class="bi bi-shield-check me-1"></i>
                                                    Sử dụng mật khẩu ứng dụng (App Password) từ Google Account, không phải mật khẩu đăng nhập thông thường.
                                                </small>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="gmail_smtp_encryption" class="form-label">
                                                    <i class="bi bi-shield-lock me-1"></i>Gmail SMTP Encryption
                                                </label>
                                                <select class="form-control @error('gmail_smtp_encryption') is-invalid @enderror" 
                                                    id="gmail_smtp_encryption" name="gmail_smtp_encryption">
                                                    <option value="tls" {{ old('gmail_smtp_encryption', $config->where('key', 'gmail_smtp_encryption')->first()?->value ?? 'tls') == 'tls' ? 'selected' : '' }}>TLS</option>
                                                    <option value="ssl" {{ old('gmail_smtp_encryption', $config->where('key', 'gmail_smtp_encryption')->first()?->value ?? 'tls') == 'ssl' ? 'selected' : '' }}>SSL</option>
                                                </select>
                                                @error('gmail_smtp_encryption')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Telegram Settings Tab -->
                                    <div class="tab-pane fade" id="telegram-settings" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <div class="alert alert-info">
                                                    <i class="bi bi-info-circle me-2"></i>
                                                    <strong>Hướng dẫn:</strong> 
                                                    <ol class="mb-0 mt-2">
                                                        <li>Tạo bot Telegram bằng cách chat với <a href="https://t.me/BotFather" target="_blank">@BotFather</a></li>
                                                        <li>Sử dụng lệnh <code>/newbot</code> và làm theo hướng dẫn để lấy Bot Token</li>
                                                        <li>Để lấy Chat ID, gửi tin nhắn cho bot của bạn, sau đó truy cập: <code>https://api.telegram.org/bot&lt;YOUR_BOT_TOKEN&gt;/getUpdates</code></li>
                                                        <li>Tìm giá trị <code>"chat":{"id":XXXXXXXXX}</code> trong response JSON</li>
                                                    </ol>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="telegram_bot_token" class="form-label">
                                                    <i class="bi bi-key me-1"></i>Telegram Bot Token
                                                </label>
                                                <input type="text" class="form-control @error('telegram_bot_token') is-invalid @enderror" 
                                                    id="telegram_bot_token" name="telegram_bot_token"
                                                    placeholder="123456789:ABCdefGHIjklMNOpqrsTUVwxyz"
                                                    value="{{ old('telegram_bot_token', $config->where('key', 'telegram_bot_token')->first()?->value ?? '') }}">
                                                @error('telegram_bot_token')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-text text-muted">
                                                    <i class="bi bi-shield-check me-1"></i>
                                                    Token nhận được từ @BotFather khi tạo bot
                                                </small>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="telegram_chat_id" class="form-label">
                                                    <i class="bi bi-chat-dots me-1"></i>Telegram Chat ID
                                                </label>
                                                <input type="text" class="form-control @error('telegram_chat_id') is-invalid @enderror" 
                                                    id="telegram_chat_id" name="telegram_chat_id"
                                                    placeholder="123456789"
                                                    value="{{ old('telegram_chat_id', $config->where('key', 'telegram_chat_id')->first()?->value ?? '') }}">
                                                @error('telegram_chat_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-text text-muted">
                                                    <i class="bi bi-info-circle me-1"></i>
                                                    ID của chat/group nhận thông báo đơn hàng
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Google Distance Matrix Tab -->
                                    <div class="tab-pane fade" id="google-distance" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 mb-4">
                                                <div class="alert alert-info">
                                                    <i class="bi bi-info-circle me-2"></i>
                                                    <strong>Hướng dẫn:</strong> 
                                                    <ol class="mb-0 mt-2">
                                                        <li>Truy cập <a href="https://console.cloud.google.com/" target="_blank">Google Cloud Console</a></li>
                                                        <li>Tạo hoặc chọn một project</li>
                                                        <li>Bật API "Distance Matrix API" trong Library</li>
                                                        <li>Tạo API Key trong phần "Credentials"</li>
                                                        <li>Giới hạn API Key chỉ sử dụng cho Distance Matrix API để bảo mật</li>
                                                    </ol>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="google_distance_matrix_enabled" 
                                                        name="google_distance_matrix_enabled" value="1"
                                                        {{ old('google_distance_matrix_enabled', $config->where('key', 'google_distance_matrix_enabled')->first()?->value ?? '0') == '1' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="google_distance_matrix_enabled">
                                                        <i class="bi bi-calculator me-1"></i>
                                                        <strong>Bật tính giá tiền bằng Google Distance Matrix API</strong>
                                                    </label>
                                                </div>
                                                <small class="form-text text-muted ms-4">
                                                    Khi bật, hệ thống sẽ tự động tính khoảng cách và giá tiền dựa trên Google Distance Matrix API
                                                </small>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="google_distance_matrix_api_key" class="form-label">
                                                    <i class="bi bi-key me-1"></i>Google Distance Matrix API Key
                                                </label>
                                                <input type="text" class="form-control @error('google_distance_matrix_api_key') is-invalid @enderror" 
                                                    id="google_distance_matrix_api_key" name="google_distance_matrix_api_key"
                                                    placeholder="AIzaSyXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
                                                    value="{{ old('google_distance_matrix_api_key', $config->where('key', 'google_distance_matrix_api_key')->first()?->value ?? '') }}">
                                                @error('google_distance_matrix_api_key')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-text text-muted">
                                                    <i class="bi bi-shield-check me-1"></i>
                                                    API Key từ Google Cloud Console với quyền sử dụng Distance Matrix API
                                                </small>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="alert alert-warning">
                                                    <i class="bi bi-exclamation-triangle me-2"></i>
                                                    <strong>Lưu ý về chi phí:</strong> Google Distance Matrix API có thể tính phí dựa trên số lượng request. 
                                                    Hãy kiểm tra <a href="https://developers.google.com/maps/documentation/distance-matrix/usage-and-billing" target="_blank">bảng giá</a> 
                                                    và thiết lập giới hạn sử dụng phù hợp.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end gap-2">
                                <a href="{{ route('admin.home.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-x-circle me-1"></i>Hủy
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save me-1"></i>Lưu cấu hình
                                </button>
                            </div>
                        </form>
                    </div>
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

        // Remember active tab on page reload
        document.addEventListener('DOMContentLoaded', function() {
            const activeTab = sessionStorage.getItem('activeConfigTab');
            if (activeTab) {
                const tab = new bootstrap.Tab(document.querySelector(activeTab));
                tab.show();
            }

            // Save active tab to sessionStorage
            const tabButtons = document.querySelectorAll('#configTabs button[data-bs-toggle="tab"]');
            tabButtons.forEach(button => {
                button.addEventListener('shown.bs.tab', function(event) {
                    sessionStorage.setItem('activeConfigTab', event.target.getAttribute('data-bs-target'));
                });
            });
        });
    </script>
@endsection
