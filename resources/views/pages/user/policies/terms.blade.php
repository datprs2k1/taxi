@extends('layout.homelayout')
@section('title')Điều khoản sử dụng dịch vụ - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $siteTitle = $config->where('key', 'title')->first()->value;
        $pageTitle = 'Điều khoản sử dụng dịch vụ - ' . $siteTitle;
        $pageDescription = 'Điều khoản sử dụng dịch vụ của ' . $siteTitle . '. Quy định và điều kiện khi sử dụng dịch vụ taxi.';
    @endphp
    <x-seo-meta 
        :config="$config"
        :title="$pageTitle"
        :description="$pageDescription"
        :url="route('policy.terms')"
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
                    ['name' => 'Điều khoản sử dụng dịch vụ', 'url' => route('policy.terms')]
                ]" />
                <h1 class="post-title">Điều khoản sử dụng dịch vụ</h1>
                <div class="post-content">
                    <p>Đang cập nhật nội dung...</p>
                </div>
            </div>
        </div>
    </section>
@endsection


