@props(['post'])

<div class="regular-post">
    <div class="regular-thumb">
        @if($post->image)
            @php
                $imagePath = str_starts_with($post->image, 'posts/') 
                    ? asset('storage/' . $post->image) 
                    : asset('uploads/' . $post->image);
            @endphp
            <img src="{{ $imagePath }}" alt="{{ $post->title }}" loading="lazy" decoding="async">
        @else
            <div class="regular-thumb-placeholder">
                <span>Không có hình</span>
            </div>
        @endif
    </div>
    <div class="content" style="flex: 1;">
        <h3 class="regular-title" style="margin: 0 0 10px 0; font-weight: bold;">
            <a href="{{ route('posts.show', $post->slug ?? $post->id) }}">{{ $post->title }}</a>
        </h3>
        @if($post->excerpt)
            <p class="regular-excerpt" style="margin: 0 0 10px 0; line-height: 1.5;">
                {{ Str::limit($post->excerpt, 100) }}
            </p>
        @endif
        @if($post->published_date)
            <div style="color: #999; font-size: 12px;">
                {{ \Carbon\Carbon::parse($post->published_date)->format('d/m/Y') }}
            </div>
        @endif
    </div>
</div>


