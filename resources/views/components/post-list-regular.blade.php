@props(['posts'])

@foreach($posts as $post)
    <x-post-regular :post="$post" />
@endforeach


