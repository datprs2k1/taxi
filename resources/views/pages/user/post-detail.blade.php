@extends('layout.homelayout')
@section('title'){{ $post->title }} - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $seoDescription = $post->excerpt ?: Str::limit(strip_tags($post->content), 160);
        $seoUrl = route('posts.show', $post->slug ?? $post->id);
        $seoImage = null;
        $imageWidth = 1200;
        $imageHeight = 630;
        if ($post->image) {
            $seoImage = str_starts_with($post->image, 'posts/')
                ? asset('storage/' . $post->image)
                : asset('uploads/' . $post->image);
        } else {
            $seoImage = asset($config->where('key', 'logo')->first()->value);
        }
        $publishedTime = $post->published_date ? \Carbon\Carbon::parse($post->published_date)->toIso8601String() : null;
        $modifiedTime = $post->updated_at ? $post->updated_at->toIso8601String() : null;
        $siteName = $config->where('key', 'name')->first()->value ?? $config->where('key', 'title')->first()->value;
    @endphp
    <x-seo-meta
        :config="$config"
        :title="$post->title"
        :description="$seoDescription"
        :url="$seoUrl"
        :image="$seoImage"
        :imageWidth="$imageWidth"
        :imageHeight="$imageHeight"
        type="article"
        :author="$siteName"
        :publishedTime="$publishedTime"
        :modifiedTime="$modifiedTime"
    />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "headline": "{{ $post->title }}",
      "description": "{{ $seoDescription }}",
      "image": {
        "@type": "ImageObject",
        "url": "{{ $seoImage }}",
        "width": {{ $imageWidth }},
        "height": {{ $imageHeight }}
      },
      "author": {
        "@type": "Organization",
        "name": "{{ $siteName }}",
        "url": "{{ url('/') }}"
      },
      "publisher": {
        "@type": "Organization",
        "name": "{{ $siteName }}",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ asset($config->where('key', 'logo')->first()->value) }}"
        }
      },
      "datePublished": "{{ $publishedTime }}",
      "dateModified": "{{ $modifiedTime }}",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ $seoUrl }}"
      }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Trang chủ", "item": "{{ route('home.index') }}"},
        {"@type": "ListItem", "position": 2, "name": "Bài viết", "item": "{{ route('posts.index') }}"},
        {"@type": "ListItem", "position": 3, "name": "{{ $post->title }}", "item": "{{ $seoUrl }}"}
      ]
    }
    </script>
@endsection
@section('content')
    @include('components.post-styles')

    <section class="posts-section">
        <div class="posts-container">
            <div class="row">
                <!-- Single Column Content -->
                <div class="col-12">
                    <article class="post-detail-card">
                        <!-- Breadcrumb -->
                        <x-breadcrumb :items="[
                            ['name' => 'Trang chủ', 'url' => route('home.index')],
                            ['name' => 'Bài viết', 'url' => route('posts.index')],
                            ['name' => Str::limit($post->title, 50), 'url' => route('posts.show', $post->slug ?? $post->id)]
                        ]" />

                        <!-- Post Header -->
                        <header class="post-header">
                            <h1 class="post-title">
                                {{ $post->title }}
                            </h1>

                            <div class="post-meta">
                                @if($post->published_date)
                                    <span class="post-meta-item">
                                        <i class="bi bi-calendar3"></i>
                                        {{ \Carbon\Carbon::parse($post->published_date)->format('d/m/Y') }}
                                    </span>
                                @endif
                                @if($post->featured)
                                    <span class="badge bg-warning">
                                        <i class="bi bi-star-fill"></i> Nổi bật
                                    </span>
                                @endif
                                <span class="badge {{ $post->type == 'promotion' ? 'bg-danger' : 'bg-primary' }}">
                                    {{ $post->type == 'promotion' ? 'Khuyến mãi' : 'Bài viết' }}
                                </span>
                            </div>
                        </header>

                        <!-- Post Image -->
                        @if($post->image)
                            <div class="post-image">
                                @php
                                    $imagePath = str_starts_with($post->image, 'posts/')
                                        ? asset('storage/' . $post->image)
                                        : asset('uploads/' . $post->image);
                                @endphp
                                <img src="{{ $imagePath }}" alt="{{ $post->title }}" width="1200" height="630" loading="lazy" decoding="async">
                            </div>
                        @endif

                        <!-- Post Excerpt -->
                        @if($post->excerpt)
                            <div class="post-excerpt">
                                {{ $post->excerpt }}
                            </div>
                        @endif

                        <!-- Post Content -->
                        <div class="post-content">
                            {!! $post->content !!}
                        </div>

                        <!-- Post Footer -->
                        <footer class="post-footer">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                                <div class="post-share">
                                    <span>Chia sẻ:</span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                       target="_blank"
                                       class="btn btn-sm btn-primary">
                                        <i class="bi bi-facebook"></i> Facebook
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}"
                                       target="_blank"
                                       class="btn btn-sm btn-info">
                                        <i class="bi bi-twitter"></i> Twitter
                                    </a>
                                </div>
                                <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary btn-sm" title="Xem tất cả bài viết">
                                    <i class="bi bi-arrow-left"></i> Quay lại danh sách
                                </a>
                                <a href="{{ route('promotions.index') }}" class="btn btn-outline-primary btn-sm" title="Xem khuyến mại">
                                    <i class="bi bi-tag"></i> Khuyến mại
                                </a>
                                <a href="{{ route('news.index') }}" class="btn btn-outline-info btn-sm" title="Xem tin tức">
                                    <i class="bi bi-newspaper"></i> Tin tức
                                </a>
                            </div>
                        </footer>
                    </article>

                    <!-- Related Posts -->
                    @if($relatedPosts->count() > 0)
                        <div class="related-posts-card">
                            <h3 class="related-posts-title">
                                <i class="bi bi-newspaper me-2"></i>Bài viết liên quan
                            </h3>
                            <div class="related-posts-grid">
                                @foreach($relatedPosts as $relatedPost)
                                    @php
                                        $relatedImagePath = null;
                                        if ($relatedPost->image) {
                                            $relatedImagePath = str_starts_with($relatedPost->image, 'posts/')
                                                ? asset('storage/' . $relatedPost->image)
                                                : asset('uploads/' . $relatedPost->image);
                                        }
                                        $relatedExcerpt = $relatedPost->excerpt ?: Str::limit(strip_tags($relatedPost->content), 140);
                                    @endphp
                                    <article class="related-card">
                                        @if($relatedImagePath)
                                            <a href="{{ route('posts.show', $relatedPost->slug ?? $relatedPost->id) }}" class="related-card-thumbwrap">
                                                <img src="{{ $relatedImagePath }}" alt="{{ $relatedPost->title }}" width="400" height="250" loading="lazy" decoding="async" class="related-card-thumb">
                                            </a>
                                        @endif
                                        <div class="related-card-body">
                                            <h4 class="related-card-title">
                                                <a href="{{ route('posts.show', $relatedPost->slug ?? $relatedPost->id) }}">{{ $relatedPost->title }}</a>
                                            </h4>
                                            <p class="related-card-excerpt">{{ $relatedExcerpt }}</p>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Increase top space below header for this page */
        .posts-section { padding-top: 40px !important; margin-top: 0; }

        :root {
            --detail-card-bg: #fff;
            --detail-title-color: var(--text-color);
            --detail-muted: var(--muted-color);
            --detail-border: var(--border-color);
            --detail-accent: var(--theme-primary);
        }
        .post-detail-card {
            background: var(--detail-card-bg);
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .post-header { margin-bottom: 30px; }
        .post-title { font-size: 32px; font-weight: bold; margin-bottom: 15px; color: var(--detail-title-color); line-height: 1.3; }
        .post-meta { display: flex; align-items: center; gap: 20px; color: var(--detail-muted); font-size: 14px; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 1px solid var(--detail-border); }
        .post-meta-item { display: flex; align-items: center; gap: 5px; }
        .post-image { margin-bottom: 20px; border-radius: 8px; overflow: hidden; }
        .post-image img { width: 100%; height: 360px; object-fit: cover; display: block; }
        .post-excerpt { background: #f8f9fa; padding: 20px; border-left: 4px solid var(--detail-accent); margin-bottom: 30px; font-size: 18px; line-height: 1.6; color: #555; font-style: italic; }
        .post-content { font-size: 16px; line-height: 1.8; color: #444; margin-bottom: 30px; }
        .post-footer { padding-top: 20px; border-top: 1px solid var(--detail-border); margin-top: 30px; }
        .post-share { display: flex; gap: 10px; align-items: center; }
        .post-share > span { font-weight: 600; color: var(--detail-muted); }

        .post-content p {
            margin-bottom: 15px;
        }
        .post-content h2, .post-content h3 {
            margin-top: 25px;
            margin-bottom: 15px;
            color: var(--detail-title-color);
        }
        .post-content ul, .post-content ol {
            margin-bottom: 15px;
            padding-left: 30px;
        }
        .post-content li {
            margin-bottom: 8px;
        }
        .post-content a { color: var(--detail-accent); text-decoration: underline; }
        .post-content a:hover { color: #c71c24; }
        /* Related posts */
        .related-posts-card { background: #fff; border-radius: 8px; padding: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 30px; }
        .related-posts-title { font-size: 20px; font-weight: bold; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid var(--detail-accent); color: var(--detail-title-color); }
        .related-posts-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
        @media (max-width: 992px) { .related-posts-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 576px) { .related-posts-grid { grid-template-columns: 1fr; } }
        .related-card { background: #fff; border: 1px solid var(--detail-border); border-radius: 8px; overflow: hidden; transition: box-shadow var(--transition), transform var(--transition); display: flex; flex-direction: column; min-height: 100%; }
        .related-card:hover { box-shadow: var(--card-shadow-hover); transform: translateY(-2px); }
        .related-card-thumbwrap { display: block; width: 100%; height: 160px; overflow: hidden; }
        .related-card-thumb { width: 100%; height: 100%; object-fit: cover; display: block; }
        .related-card-body { padding: 12px; display: flex; flex-direction: column; gap: 8px; }
        .related-card-title { font-size: 16px; font-weight: 700; line-height: 1.35; margin: 0; }
        .related-card-title a { color: var(--text-color); text-decoration: none; }
        .related-card-title a:hover { color: var(--detail-accent); }
        .related-card-excerpt { margin: 0; font-size: 14px; color: var(--muted-color); line-height: 1.5; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }

        /* Brand-colored badges and buttons within post detail */
        .post-detail-card .badge.bg-primary { background-color: var(--detail-accent) !important; }
        .post-detail-card .post-share .btn-primary { background-color: var(--detail-accent); border-color: var(--detail-accent); }
        .post-detail-card .post-share .btn-info { background-color: var(--detail-accent); border-color: var(--detail-accent); }
        .post-detail-card .post-share .btn-primary, .post-detail-card .post-share .btn-info { color: #fff; }

        @media (max-width: 768px) {
            .posts-section { padding-top: 30px !important; margin-top: 0; }
            .post-detail-card { padding: 20px !important; }
            .post-title { font-size: 24px !important; }
            .post-image img { height: 220px; }
            .related-thumb { width: 80px; height: 60px; }
        }
    </style>
@endsection
