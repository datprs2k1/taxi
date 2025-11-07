@props(['promotionPosts'])

<div class="promotion-box">
    <h3 class="promotion-title" style="margin: 0 0 20px 0; font-size: 18px; font-weight: bold;">Khuyến mãi</h3>

    @if($promotionPosts->count() > 0)
        @php $firstPromo = $promotionPosts->first(); @endphp
        <div class="promotion-featured">
            <div class="promotion-featured-thumbwrap">
                @if($firstPromo->image)
                    @php
                        $firstImagePath = str_starts_with($firstPromo->image, 'posts/') 
                            ? asset('storage/' . $firstPromo->image) 
                            : asset('uploads/' . $firstPromo->image);
                    @endphp
                    <img src="{{ $firstImagePath }}" alt="{{ $firstPromo->title }}" class="promotion-thumb--lg" loading="lazy" decoding="async">
                @else
                    <div class="promotion-thumb--lg" style="background: #ddd;"></div>
                @endif
            </div>
            <h4 class="promotion-title" style="margin: 0; font-size: 16px; font-weight: bold; line-height: 1.4;">
                <a href="{{ route('posts.show', $firstPromo->slug ?? $firstPromo->id) }}">{{ $firstPromo->title }}</a>
            </h4>
        </div>

        <div class="promotion-grid">
            @foreach($promotionPosts->skip(1) as $promo)
                <div style="margin-bottom: 15px;">
                    @if($promo->image)
                        @php
                            $promoImagePath = str_starts_with($promo->image, 'posts/') 
                                ? asset('storage/' . $promo->image) 
                                : asset('uploads/' . $promo->image);
                        @endphp
                        <img src="{{ $promoImagePath }}" alt="{{ $promo->title }}" class="promotion-thumb--sm" loading="lazy" decoding="async">
                    @else
                        <div class="promotion-thumb--sm" style="background: #ddd;"></div>
                    @endif
                    <h5 class="promotion-item-title" style="margin: 0; font-weight: bold; line-height: 1.3;">
                        <a href="{{ route('posts.show', $promo->slug ?? $promo->id) }}">{{ Str::limit($promo->title, 40) }}</a>
                    </h5>
                </div>
            @endforeach
        </div>
    @else
        <div class="promotion-empty">Chưa có bài khuyến mãi</div>
    @endif
</div>


