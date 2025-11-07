@props(['first5Posts'])

@if($first5Posts->count() > 0)
<div class="posts-top-5">
    <div class="posts-top-5-left">
        @if($first5Posts->first())
            @php $firstPost = $first5Posts->first(); @endphp
            <x-post-hero :post="$firstPost" />
        @endif
    </div>
    <div class="posts-top-5-right">
        @foreach($first5Posts->skip(1) as $post)
            <x-post-mini :post="$post" />
        @endforeach
    </div>
</div>
@endif


