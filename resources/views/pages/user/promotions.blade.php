@extends('layout.homelayout')
@section('title')Khuyến mại - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $siteTitle = $config->where('key', 'title')->first()->value;
        $pageTitle = 'Khuyến mại - ' . $siteTitle;
        $pageDescription = 'Tổng hợp các chương trình khuyến mại, ưu đãi đặc biệt từ ' . $siteTitle . '. Cập nhật thường xuyên các ưu đãi hấp dẫn.';
    @endphp
    <x-seo-meta 
        :config="$config"
        :title="$pageTitle"
        :description="$pageDescription"
        :url="route('promotions.index')"
        type="website"
    />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "{{ $pageTitle }}",
      "description": "{{ $pageDescription }}",
      "url": "{{ route('promotions.index') }}",
      "mainEntity": {
        "@type": "ItemList",
        "numberOfItems": {{ $promotionPosts->count() }},
        "itemListElement": [
          @foreach($promotionPosts as $index => $post)
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
            <div class="posts-row">
                <div class="posts-left-column" style="flex: 0 0 100%; max-width: 100%;">
                    <x-breadcrumb :items="[
                        ['name' => 'Trang chủ', 'url' => route('home.index')],
                        ['name' => 'Khuyến mại', 'url' => route('promotions.index')]
                    ]" />
                    <h1 class="post-title" style="margin-bottom:20px;">Khuyến mại</h1>
                    @if($promotionPosts->count() === 0)
                        <div class="post-detail-card">Hiện chưa có khuyến mại.</div>
                    @else
                        @foreach($promotionPosts as $p)
                            @php
                                $img = $p->image ? (str_starts_with($p->image, 'posts/') ? asset('storage/'.$p->image) : asset('uploads/'.$p->image)) : null;
                            @endphp
                            <article class="regular-post">
                                @if($img)
                                    <div class="regular-thumb"><img src="{{ $img }}" alt="{{ $p->title }}" width="400" height="250" loading="lazy" decoding="async"></div>
                                @endif
                                <div class="content" style="flex:1;">
                                    <h3 class="regular-title"><a href="{{ route('posts.show', $p->slug ?? $p->id) }}">{{ $p->title }}</a></h3>
                                    <p class="regular-excerpt">{{ $p->excerpt ?: Str::limit(strip_tags($p->content), 160) }}</p>
                                </div>
                            </article>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection


