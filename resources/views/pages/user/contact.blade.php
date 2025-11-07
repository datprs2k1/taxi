@extends('layout.homelayout')
@section('title')Liên hệ - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $siteTitle = $config->where('key', 'title')->first()->value;
        $phone = $config->where('key', 'phone')->first()->value ?? '';
        $pageTitle = 'Liên hệ - ' . $siteTitle;
        $pageDescription = 'Liên hệ ' . $siteTitle . ' - Hotline: ' . $phone . '. Dịch vụ taxi sân bay Nội Bài 24/7, hỗ trợ đặt xe nhanh chóng.';
    @endphp
    <x-seo-meta 
        :config="$config"
        :title="$pageTitle"
        :description="$pageDescription"
        :url="route('contact')"
        type="website"
    />
@endsection
@section('content')
    @include('components.post-styles')
    <section class="posts-section">
        <div class="posts-container">
            <div class="row">
                <div class="col-lg-7">
                    <article class="post-detail-card">
                        <x-breadcrumb :items="[
                            ['name' => 'Trang chủ', 'url' => route('home.index')],
                            ['name' => 'Liên hệ', 'url' => route('contact')]
                        ]" />
                        <h1 class="post-title" style="margin-bottom: 10px;">Liên hệ</h1>
                        <div class="post-excerpt" style="margin-top: 10px;">
                            Chúng tôi luôn sẵn sàng hỗ trợ 24/7. Vui lòng để lại thông tin, hoặc liên hệ trực tiếp Hotline.
                        </div>
                        <div class="post-content">
                            <form action="#" method="post" onsubmit="return false;">
                                <div class="form-group">
                                    <label for="contact_name">Họ và tên</label>
                                    <input type="text" id="contact_name" class="form-control" placeholder="Nhập họ tên" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_phone">Số điện thoại</label>
                                    <input type="tel" id="contact_phone" class="form-control" placeholder="Nhập số điện thoại" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_message">Nội dung</label>
                                    <textarea id="contact_message" class="form-control" rows="4" placeholder="Nhập nội dung cần hỗ trợ" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Gửi yêu cầu</button>
                                <a class="btn btn-secondary" href="tel:{{ $config->where('key', 'phone')->first()->value }}">
                                    <i class="bi bi-telephone"></i> Gọi Hotline: {{ $config->where('key', 'phone')->first()->value }}
                                </a>
                            </form>
                        </div>
                    </article>
                </div>
                <div class="col-lg-5">
                    <div class="post-detail-card">
                        <h3 class="related-posts-title" style="border: 0; padding-bottom: 0;">Thông tin liên hệ</h3>
                        <div class="post-content" style="margin-top: 10px;">
                            <p><strong>Địa chỉ:</strong> {{ $config->where('key', 'address')->first()->value }}</p>
                            <p><strong>Hotline:</strong> <a class="tdhotline" href="tel:{{ $config->where('key', 'phone')->first()->value }}">{{ $config->where('key', 'phone')->first()->value }}</a></p>
                            @php
                                $email = $config->where('key', 'email')->first()->value ?? null;
                            @endphp
                            @if($email)
                                <p><strong>Email:</strong> {{ $email }}</p>
                            @endif
                            <div class="post-share" style="margin-top: 15px;">
                                <span>Kết nối:</span>
                                @php
                                    $fb = $config->where('key', 'facebook')->first()->value ?? '#';
                                    $zalo = $config->where('key', 'zalo')->first()->value ?? '#';
                                    $messenger = $config->where('key', 'messenger')->first()->value ?? '#';
                                @endphp
                                <a href="{{ $fb }}" target="_blank" class="btn btn-sm btn-primary"><i class="bi bi-facebook"></i> Facebook</a>
                                <a href="{{ $messenger }}" target="_blank" class="btn btn-sm btn-info"><i class="bi bi-messenger"></i> Messenger</a>
                                <a href="{{ $zalo }}" target="_blank" class="btn btn-sm btn-secondary">Zalo</a>
                            </div>
                        </div>
                    </div>
                    <div class="post-detail-card" style="margin-top: 20px;">
                        <h3 class="related-posts-title" style="border: 0; padding-bottom: 0;">Bản đồ</h3>
                        <div class="post-content" style="margin-top: 10px;">
                            <div style="width:100%; height:280px; border-radius:8px; overflow:hidden; background:#f3f3f3; display:flex; align-items:center; justify-content:center; color:#888;">
                                Đang cập nhật bản đồ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .post-detail-card .btn-primary { background-color: var(--theme-primary); border-color: var(--theme-primary); }
        .post-detail-card .btn-primary:hover { filter: brightness(0.95); }
        .post-detail-card .btn-secondary { background-color: #6c757d; border-color: #6c757d; color: #fff; }
        @media (max-width: 768px) {
            .posts-section { padding-top: 80px !important; }
        }
    </style>
@endsection


