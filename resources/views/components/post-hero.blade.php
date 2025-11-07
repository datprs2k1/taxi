@props(['post'])

<div class="hero-post">
    <div class="hero-thumb">
        @if($post->image)
            @php
                $imagePath = str_starts_with($post->image, 'posts/') 
                    ? asset('storage/' . $post->image) 
                    : asset('uploads/' . $post->image);
            @endphp
            <img src="{{ $imagePath }}" alt="{{ $post->title }}" loading="lazy" decoding="async">
        @else
            <div class="hero-thumb-placeholder">
                <span>Không có hình</span>
            </div>
        @endif
    </div>
    <div class="hero-body">
        <div>
            <h3 class="hero-title">
                <a href="{{ route('posts.show', $post->slug ?? $post->id) }}">{{ $post->title }}</a>
            </h3>
            @if($post->excerpt)
                <p class="hero-excerpt">{{ Str::limit($post->excerpt, 140) }}</p>
            @endif
        </div>
        @if($post->published_date)
            <div class="hero-date">{{ \Carbon\Carbon::parse($post->published_date)->format('d/m/Y') }}</div>
        @endif
    </div>
</div>


