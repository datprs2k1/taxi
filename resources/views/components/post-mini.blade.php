@props(['post'])

<div class="mini-post">
    <div class="mini-thumb">
        @if($post->image)
            @php
                $imagePath = str_starts_with($post->image, 'posts/') 
                    ? asset('storage/' . $post->image) 
                    : asset('uploads/' . $post->image);
            @endphp
            <img src="{{ $imagePath }}" alt="{{ $post->title }}" loading="lazy" decoding="async">
        @else
            <div class="mini-thumb-placeholder"></div>
        @endif
    </div>
    <div class="mini-body">
        <h4 class="mini-title">
            <a href="{{ route('posts.show', $post->slug ?? $post->id) }}">{{ $post->title }}</a>
        </h4>
        @if(!empty($post->excerpt))
            <p class="mini-excerpt">{{ Str::limit($post->excerpt, 100) }}</p>
        @endif
    </div>
    </div>


