@php
    // Get default values from config
    $siteTitle = $config->where('key', 'title')->first()->value ?? 'Taxi Nội Bài';
    $siteDescription = $config->where('key', 'description')->first()->value ?? '';
    $siteLogo = $config->where('key', 'logo')->first()->value ?? '';
    $siteName = $config->where('key', 'name')->first()->value ?? $siteTitle;
    
    // Get page-specific values or use defaults
    $pageTitle = $title ?? $siteTitle;
    $pageDescription = $description ?? $siteDescription;
    $pageImage = $image ?? ($siteLogo ? asset($siteLogo) : asset('images/logo.png'));
    $pageUrl = $url ?? url()->current();
    $pageType = $type ?? 'website';
    $robots = $robots ?? 'index,follow';
    $keywords = $keywords ?? '';
    
    // Article specific
    $articleAuthor = $author ?? $siteName;
    $articlePublishedTime = $publishedTime ?? null;
    $articleModifiedTime = $modifiedTime ?? null;
    
    // Get image dimensions if possible
    $imageWidth = $imageWidth ?? 1200;
    $imageHeight = $imageHeight ?? 630;
@endphp

{{-- Basic Meta Tags --}}
<meta name="description" content="{{ $pageDescription }}" />
@if($keywords)
<meta name="keywords" content="{{ $keywords }}" />
@endif
<meta name="robots" content="{{ $robots }}" />
<link rel="canonical" href="{{ $pageUrl }}" />

{{-- Open Graph Tags --}}
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="{{ $pageType }}" />
<meta property="og:title" content="{{ $pageTitle }}" />
<meta property="og:description" content="{{ $pageDescription }}" />
<meta property="og:url" content="{{ $pageUrl }}" />
<meta property="og:site_name" content="{{ $siteName }}" />
<meta property="og:image" content="{{ $pageImage }}" />
<meta property="og:image:width" content="{{ $imageWidth }}" />
<meta property="og:image:height" content="{{ $imageHeight }}" />
<meta property="og:image:alt" content="{{ $pageTitle }}" />
@if($articlePublishedTime)
<meta property="og:updated_time" content="{{ $articlePublishedTime }}" />
@endif

{{-- Article specific OG tags --}}
@if($pageType === 'article')
    @if($articleAuthor)
    <meta property="article:author" content="{{ $articleAuthor }}" />
    @endif
    @if($articlePublishedTime)
    <meta property="article:published_time" content="{{ $articlePublishedTime }}" />
    @endif
    @if($articleModifiedTime)
    <meta property="article:modified_time" content="{{ $articleModifiedTime }}" />
    @endif
@endif

{{-- Twitter Card Tags --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $pageTitle }}" />
<meta name="twitter:description" content="{{ $pageDescription }}" />
<meta name="twitter:image" content="{{ $pageImage }}" />
@if($siteName)
<meta name="twitter:site" content="{{ $siteName }}" />
@endif

