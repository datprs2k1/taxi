@extends('layout.homelayout')
@section('title')Chính sách bảo vệ quyền riêng tư - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $siteTitle = $config->where('key', 'title')->first()->value;
        $pageTitle = 'Chính sách bảo vệ quyền riêng tư - ' . $siteTitle;
        $pageDescription = 'Chính sách bảo vệ quyền riêng tư của ' . $siteTitle . '. Cam kết bảo mật thông tin khách hàng.';
    @endphp
    <x-seo-meta 
        :config="$config"
        :title="$pageTitle"
        :description="$pageDescription"
        :url="route('policy.privacy')"
        type="website"
    />
@endsection
@section('content')
    <section class="posts-section">
        <div class="posts-container">
            <div class="post-detail-card">
                <x-breadcrumb :items="[
                    ['name' => 'Trang chủ', 'url' => route('home.index')],
                    ['name' => 'Chính sách', 'url' => '#'],
                    ['name' => 'Bảo vệ quyền riêng tư', 'url' => route('policy.privacy')]
                ]" />
                <h1 class="post-title">Chính sách bảo vệ quyền riêng tư</h1>
                <div class="post-content">
                    <p>Đang cập nhật nội dung...</p>
                </div>
            </div>
        </div>
    </section>
@endsection


