@extends('layout.homelayout')
@section('title')Tin tức - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $siteTitle = $config->where('key', 'title')->first()->value;
        $pageTitle = 'Tin tức - ' . $siteTitle;
        $pageDescription = 'Tin tức mới nhất về dịch vụ taxi sân bay Nội Bài, cập nhật thông tin du lịch, giao thông và các sự kiện liên quan.';
    @endphp
    <x-seo-meta
        :config="$config"
        :title="$pageTitle"
        :description="$pageDescription"
        :url="route('news.index')"
        type="website"
    />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "{{ $pageTitle }}",
      "description": "{{ $pageDescription }}",
      "url": "{{ route('news.index') }}",
      "mainEntity": {
        "@type": "ItemList",
        "numberOfItems": {{ $newsPosts->count() }},
        "itemListElement": [
          @foreach($newsPosts as $index => $post)
          {
            "@type": "ListItem",
            "position": {{ $index + 1 }},
            "item": {
              "@type": "Article",
              "name": "{{ $post->title }}",
              "url": "{{ route('posts.show', $post->slug ?? $post->id) }}"
            }
          }@if(!$loop->last),@endif
          @endforeach
        ]
      }
    }
    </script>
@endsection
@section('content')
    @include('components.post-styles')
    <section class="posts-section">
        <div class="posts-container">
            <div class="posts-row_news">
                <div class="posts-left-column" style="flex: 0 0 100%; max-width: 100%;">
                    <x-breadcrumb :items="[
                        ['name' => 'Trang chủ', 'url' => route('home.index')],
                        ['name' => 'Tin tức', 'url' => route('news.index')]
                    ]" />
                    <h1 class="post-title" style="margin-bottom:20px;">Tin tức</h1>
                    @if($newsPosts->count() === 0)
                        <div class="post-detail-card">Hiện chưa có bài viết.</div>
                    @else
                        @foreach($newsPosts as $n)
                            @php
                                $img = $n->image ? (str_starts_with($n->image, 'posts/') ? asset('storage/'.$n->image) : asset('uploads/'.$n->image)) : null;
                            @endphp
                            <article class="regular-post">
                                @if($img)
                                    <div class="regular-thumb"><img src="{{ $img }}" alt="{{ $n->title }}" width="400" height="250" loading="lazy" decoding="async"></div>
                                @endif
                                <div class="content" style="flex:1;">
                                    <h3 class="regular-title"><a href="{{ route('posts.show', $n->slug ?? $n->id) }}">{{ $n->title }}</a></h3>
                                    <p class="regular-excerpt">{{ $n->excerpt ?: Str::limit(strip_tags($n->content), 160) }}</p>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection


