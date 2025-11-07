@extends('layout.homelayout')
@section('title')Chính sách vận chuyển hành khách - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $siteTitle = $config->where('key', 'title')->first()->value;
        $pageTitle = 'Chính sách vận chuyển hành khách - ' . $siteTitle;
        $pageDescription = 'Chính sách vận chuyển hành khách của ' . $siteTitle . '. Quy định và điều khoản về dịch vụ vận chuyển.';
    @endphp
    <x-seo-meta 
        :config="$config"
        :title="$pageTitle"
        :description="$pageDescription"
        :url="route('policy.transport')"
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
                    ['name' => 'Vận chuyển hành khách', 'url' => route('policy.transport')]
                ]" />
                <h1 class="post-title">Chính sách vận chuyển hành khách</h1>
                <div class="post-content">
                    <p>Đang cập nhật nội dung...</p>
                </div>
            </div>
        </div>
    </section>
@endsection


