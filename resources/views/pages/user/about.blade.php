@extends('layout.homelayout')
@section('title')Về chúng tôi - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $siteTitle = $config->where('key', 'title')->first()->value;
        $pageTitle = 'Về chúng tôi - ' . $siteTitle;
        $pageDescription = 'Giới thiệu về ' . $siteTitle . ' - Dịch vụ taxi sân bay Nội Bài chuyên nghiệp, uy tín, giá rẻ.';
    @endphp
    <x-seo-meta 
        :config="$config"
        :title="$pageTitle"
        :description="$pageDescription"
        :url="route('about')"
        type="website"
    />
@endsection
@section('content')
    <section class="posts-section">
        <div class="posts-container">
            <div class="post-detail-card">
                <x-breadcrumb :items="[
                    ['name' => 'Trang chủ', 'url' => route('home.index')],
                    ['name' => 'Về chúng tôi', 'url' => route('about')]
                ]" />
                <h1 class="post-title">Về chúng tôi</h1>
                <div class="post-content">
                    <p>Đang cập nhật nội dung...</p>
                </div>
            </div>
        </div>
    </section>
@endsection


