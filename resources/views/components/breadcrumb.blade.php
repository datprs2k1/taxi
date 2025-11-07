@php
    // Default breadcrumbs structure
    $items = $items ?? [
        ['name' => 'Trang chủ', 'url' => route('home.index')]
    ];
    
    // Ensure all items have proper structure
    $breadcrumbItems = [];
    foreach ($items as $index => $item) {
        $breadcrumbItems[] = [
            'position' => $index + 1,
            'name' => $item['name'] ?? '',
            'url' => $item['url'] ?? '#'
        ];
    }
@endphp

@if(count($breadcrumbItems) > 0)
    {{-- Visual Breadcrumb --}}
    <nav aria-label="breadcrumb" class="mb-3">
        <ol class="breadcrumb" style="background: transparent; padding: 0; margin: 0;">
            @foreach($breadcrumbItems as $index => $item)
                @if($index === count($breadcrumbItems) - 1)
                    <li class="breadcrumb-item active" aria-current="page">{{ $item['name'] }}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>

    {{-- Structured Data (JSON-LD) --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            @foreach($breadcrumbItems as $item)
            {
                "@type": "ListItem",
                "position": {{ $item['position'] }},
                "name": "{{ $item['name'] }}",
                "item": "{{ $item['url'] }}"
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>
@endif

