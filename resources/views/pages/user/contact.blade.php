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
                            <div id="contact-success-message" class="alert alert-success" style="display: none;">
                                <strong>Thành công!</strong> <span id="success-text"></span>
                            </div>
                            <div id="contact-error-message" class="alert alert-danger" style="display: none;">
                                <strong>Lỗi!</strong> <span id="error-text"></span>
                            </div>
                            <form id="contact-form" action="#" method="post">
                                <div class="form-group">
                                    <label for="contact_name">Họ và tên <span class="text-danger">*</span></label>
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Nhập họ tên" required>
                                    <small class="text-danger" id="error-name"></small>
                                </div>
                                <div class="form-group">
                                    <label for="contact_phone">Số điện thoại <span class="text-danger">*</span></label>
                                    <input type="tel" id="contact_phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required>
                                    <small class="text-danger" id="error-phone"></small>
                                </div>
                                <div class="form-group">
                                    <label for="contact_message">Nội dung <span class="text-danger">*</span></label>
                                    <textarea id="contact_message" name="message" class="form-control" rows="4" placeholder="Nhập nội dung cần hỗ trợ" required></textarea>
                                    <small class="text-danger" id="error-message"></small>
                                </div>
                                <button type="submit" id="submit-btn" class="btn btn-primary">
                                    <span id="submit-text">Gửi yêu cầu</span>
                                    <span id="submit-loading" style="display: none;">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Đang gửi...
                                    </span>
                                </button>
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
        .form-group { margin-bottom: 1rem; }
        .form-control { margin-bottom: 0.25rem; }
        .alert { padding: 0.75rem 1.25rem; margin-bottom: 1rem; border: 1px solid transparent; border-radius: 0.25rem; }
        .alert-success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
        .alert-danger { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
        .spinner-border { display: inline-block; width: 1rem; height: 1rem; vertical-align: text-bottom; border: 0.15em solid currentColor; border-right-color: transparent; border-radius: 50%; animation: spinner-border .75s linear infinite; }
        .spinner-border-sm { width: 0.875rem; height: 0.875rem; border-width: 0.125em; }
        @keyframes spinner-border { to { transform: rotate(360deg); } }
    </style>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const submitBtn = document.getElementById('submit-btn');
    const submitText = document.getElementById('submit-text');
    const submitLoading = document.getElementById('submit-loading');
    const successMessage = document.getElementById('contact-success-message');
    const errorMessage = document.getElementById('contact-error-message');
    const successText = document.getElementById('success-text');
    const errorText = document.getElementById('error-text');

    // Clear all error messages
    function clearErrors() {
        document.getElementById('error-name').textContent = '';
        document.getElementById('error-phone').textContent = '';
        document.getElementById('error-message').textContent = '';
        successMessage.style.display = 'none';
        errorMessage.style.display = 'none';
    }

    // Show error messages
    function showErrors(errors) {
        if (errors.name) {
            document.getElementById('error-name').textContent = errors.name[0];
        }
        if (errors.phone) {
            document.getElementById('error-phone').textContent = errors.phone[0];
        }
        if (errors.message) {
            document.getElementById('error-message').textContent = errors.message[0];
        }
    }

    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Clear previous errors
        clearErrors();
        
        // Disable submit button
        submitBtn.disabled = true;
        submitText.style.display = 'none';
        submitLoading.style.display = 'inline-block';

        // Get form data
        const formData = {
            name: document.getElementById('contact_name').value.trim(),
            phone: document.getElementById('contact_phone').value.trim(),
            message: document.getElementById('contact_message').value.trim()
        };

        try {
            const response = await fetch('/api/user/contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(formData)
            });

            const data = await response.json();

            if (response.ok) {
                // Success
                successText.textContent = data.message || 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi sớm nhất.';
                successMessage.style.display = 'block';
                
                // Reset form
                contactForm.reset();
                
                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 5000);
            } else {
                // Validation errors
                if (data.messages) {
                    showErrors(data.messages);
                } else if (data.message) {
                    errorText.textContent = data.message;
                    errorMessage.style.display = 'block';
                } else {
                    errorText.textContent = 'Có lỗi xảy ra. Vui lòng thử lại sau.';
                    errorMessage.style.display = 'block';
                }
                
                // Scroll to error message
                if (errorMessage.style.display === 'block') {
                    errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            }
        } catch (error) {
            console.error('Error:', error);
            errorText.textContent = 'Không thể kết nối đến máy chủ. Vui lòng kiểm tra kết nối mạng và thử lại.';
            errorMessage.style.display = 'block';
            errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } finally {
            // Re-enable submit button
            submitBtn.disabled = false;
            submitText.style.display = 'inline-block';
            submitLoading.style.display = 'none';
        }
    });
});
</script>
@endsection


