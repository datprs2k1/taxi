@extends('layout.homelayout')
@section('title')Bài viết - {{ $config->where('key', 'title')->first()->value }}@endsection
@section('seo')
    @php
        $siteTitle = $config->where('key', 'title')->first()->value;
        $pageTitle = 'Bài viết - ' . $siteTitle;
        $pageDescription = $config->where('key', 'description')->first()->value ?? 'Tổng hợp các bài viết về dịch vụ taxi sân bay Nội Bài, tin tức du lịch và giao thông.';
    @endphp
    <x-seo-meta 
        :config="$config"
        :title="$pageTitle"
        :description="$pageDescription"
        :url="route('posts.index')"
        type="website"
    />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "{{ $pageTitle }}",
      "description": "{{ $pageDescription }}",
      "url": "{{ route('posts.index') }}",
      "mainEntity": {
        "@type": "ItemList",
        "numberOfItems": {{ $allPosts->count() }},
        "itemListElement": [
          @foreach($allPosts->take(10) as $index => $post)
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
                <div class="posts-left-column">
                    <x-breadcrumb :items="[
                        ['name' => 'Trang chủ', 'url' => route('home.index')],
                        ['name' => 'Bài viết', 'url' => route('posts.index')]
                    ]" />
                    @php
                        $first5Posts = $allPosts->take(5);
                        $remainingPosts = $allPosts->skip(5)->take(3); // Giới hạn 3 bài để cân bằng 2 cột
                    @endphp

                    <x-post-top5 :first5Posts="$first5Posts" />
                    <x-post-list-regular :posts="$remainingPosts" />
                </div>

                <div class="posts-right-column">
                    <x-promotion-box :promotionPosts="$promotionPosts" />
                </div>
            </div>
        </div>
    </section>
@endsection


