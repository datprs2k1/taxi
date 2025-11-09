<style>
    :root {
        --theme-primary: #EC2029;
        --text-color: #333;
        --muted-color: #666;
        --border-color: rgba(0,0,0,0.06);
        --card-shadow: 0 2px 4px rgba(0,0,0,0.1);
        --card-shadow-hover: 0 6px 16px rgba(0,0,0,0.16);
        --radius: 8px;
        --space-xxs: 6px;
        --space-xs: 8px;
        --space-sm: 12px;
        --space-md: 16px;
        --space-lg: 20px;
        --transition: 200ms ease;
        --fs-hero-title: 20px;
        --fs-hero-excerpt: 14px;
        --fs-mini-title: 17px;
        --fs-mini-excerpt: 14px;
        --fs-regular-title: 18px;
        --fs-regular-excerpt: 14px;
        --fs-promotion-item: 14px;
    }
    .posts-section { 
        background: #f5f5f5; 
        padding: 40px 0; 
    }
    
    @media (max-width: 767px) {
        .posts-section {
            padding: var(--space-xxl) 0;
        }
    }
    
    /* News posts section - always visible on mobile */
    .news-posts-section { 
        background: #f5f5f5; 
        padding: 40px 0; 
        display: block !important;
    }
    
    @media (max-width: 767px) {
        .news-posts-section {
            padding: var(--space-xxl) 0;
            display: block !important;
            visibility: visible !important;
        }
    }
    
    .posts-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }
    
    @media (max-width: 767px) {
        .posts-container {
            padding: 0 var(--space-md);
        }
    }
    
    .posts-row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -15px;
        align-items: flex-start;
    }
    
    @media (max-width: 767px) {
        .posts-row {
            margin: 0;
            flex-direction: column;
        }
    }
    
    .posts-left-column {
        flex: 0 0 66.666%;
        max-width: 66.666%;
        padding: 0 15px;
        display: flex;
        flex-direction: column;
    }
    
    .posts-right-column {
        flex: 0 0 33.333%;
        max-width: 33.333%;
        padding: 0 15px;
        display: flex;
        flex-direction: column;
    }
    
    @media (max-width: 768px) {
        .posts-left-column,
        .posts-right-column {
            flex: 0 0 100%;
            max-width: 100%;
            width: 100%;
            margin-bottom: var(--space-xxl);
            padding: 0;
        }
        
        .posts-left-column {
            order: 1;
        }
        
        .posts-right-column {
            order: 2;
            margin-bottom: 0;
            margin-top: var(--space-lg);
        }
    }
    
    /* Ẩn cột khuyến mãi trên mobile */
    @media (max-width: 767px) {
        .posts-right-column {
            display: none !important;
        }
    }
    .posts-top-5 {
        display: flex;
        gap: var(--space-lg);
        margin-bottom: var(--space-lg);
    }
    
    .posts-top-5-left {
        flex: 0 0 50%;
        max-width: 50%;
    }
    
    .posts-top-5-right {
        flex: 0 0 50%;
        max-width: 50%;
        display: flex;
        flex-direction: column;
        gap: var(--space-sm);
    }
    
    @media (max-width: 768px) {
        .posts-top-5 { 
            flex-direction: column; 
            gap: var(--space-md);
            margin-bottom: var(--space-md);
        }
        
        .posts-top-5-left,
        .posts-top-5-right { 
            flex: 0 0 100%; 
            max-width: 100%; 
        }
    }
    .regular-post {
        background: #fff;
        margin-bottom: var(--space-sm);
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: var(--card-shadow);
        display: flex;
        min-height: 80px;
        transition: transform var(--transition), box-shadow var(--transition);
    }
    
    @media (min-width: 769px) {
        .regular-post:hover { 
            transform: translateY(-2px); 
            box-shadow: var(--card-shadow-hover); 
        }
    }
    
    .regular-post a { 
        color: var(--text-color); 
        text-decoration: none; 
    }
    
    .regular-post a:hover { 
        color: var(--theme-primary); 
    }
    
    .regular-thumb { 
        flex: 0 0 200px; 
    }
    
    @media (max-width: 767px) {
        .regular-thumb {
            flex: 0 0 120px;
            min-width: 120px;
        }
        
        .regular-post {
            width: 100%;
            max-width: 100%;
        }
    }
    
    .regular-thumb img { 
        width: 100%; 
        height: 150px; 
        object-fit: cover; 
        display: block; 
    }
    
    @media (max-width: 767px) {
        .regular-thumb img {
            height: 100px;
        }
    }
    
    .regular-thumb-placeholder { 
        width: 100%; 
        height: 150px; 
        background: #ddd; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        color: #999; 
        font-size: 12px; 
    }
    
    @media (max-width: 767px) {
        .regular-thumb-placeholder {
            height: 100px;
        }
    }
    .post-item { background: #fff; margin-bottom: var(--space-sm); border-radius: var(--radius); overflow: hidden; box-shadow: var(--card-shadow); }
    .hero-post { 
        background: #fff; 
        border-radius: var(--radius); 
        overflow: hidden; 
        box-shadow: var(--card-shadow); 
        display: flex; 
        flex-direction: column; 
        height: 440px; 
        transition: transform var(--transition), box-shadow var(--transition); 
    }
    
    @media (max-width: 767px) {
        .hero-post {
            height: auto;
            min-height: 300px;
        }
    }
    
    @media (min-width: 769px) {
        .hero-post:hover { 
            transform: translateY(-2px); 
            box-shadow: var(--card-shadow-hover); 
        }
    }
    
    .hero-thumb { 
        flex: 0 0 230px; 
    }
    
    @media (max-width: 767px) {
        .hero-thumb {
            flex: 0 0 200px;
        }
    }
    
    .hero-thumb img { 
        width: 100%; 
        height: 230px; 
        object-fit: cover; 
        display: block; 
    }
    
    @media (max-width: 767px) {
        .hero-thumb img {
            height: 200px;
        }
    }
    
    .hero-thumb-placeholder { 
        width: 100%; 
        height: 230px; 
        background: #ddd; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        color: #999; 
        font-size: 12px; 
    }
    
    @media (max-width: 767px) {
        .hero-thumb-placeholder {
            height: 200px;
        }
    }
    
    .hero-body { 
        flex: 1; 
        padding: var(--space-md); 
        display: flex; 
        flex-direction: column; 
        justify-content: space-between; 
    }
    
    @media (max-width: 767px) {
        .hero-body {
            padding: var(--space-sm);
        }
    }
    
    .hero-title { 
        margin: 0 0 8px 0; 
        font-size: var(--fs-hero-title); 
        font-weight: 700; 
        line-height: 1.35; 
        display: -webkit-box; 
        -webkit-line-clamp: 2; 
        -webkit-box-orient: vertical; 
        overflow: hidden; 
    }
    
    @media (max-width: 767px) {
        .hero-title {
            font-size: var(--fs-regular-title);
            margin-bottom: var(--space-xs);
        }
    }
    
    .hero-title a { 
        color: var(--text-color); 
        text-decoration: none; 
    }
    
    .hero-title a:hover { 
        color: var(--theme-primary); 
    }
    
    .hero-excerpt { 
        color: var(--muted-color); 
        font-size: var(--fs-hero-excerpt); 
        line-height: 1.5; 
        display: -webkit-box; 
        -webkit-line-clamp: 3; 
        -webkit-box-orient: vertical; 
        overflow: hidden; 
    }
    
    @media (max-width: 767px) {
        .hero-excerpt {
            -webkit-line-clamp: 2;
            font-size: var(--font-size-xs);
        }
    }
    
    .hero-date { 
        color: #999; 
        font-size: 12px; 
    }
    .mini-post { 
        display: flex; 
        box-shadow: 0 2px 4px rgba(0,0,0,0.06); 
        border-radius: var(--radius); 
        overflow: hidden; 
        min-height: 80px; 
        background: #fff; 
        transition: transform var(--transition), box-shadow var(--transition); 
    }
    
    @media (min-width: 769px) {
        .mini-post:hover { 
            transform: translateY(-2px); 
            box-shadow: var(--card-shadow-hover); 
        }
    }
    
    .mini-thumb { 
        flex: 0 0 100px; 
    }
    
    @media (max-width: 767px) {
        .mini-thumb {
            flex: 0 0 80px;
        }
    }
    
    .mini-thumb img { 
        width: 100%; 
        height: 100%; 
        object-fit: cover; 
    }
    
    .mini-body { 
        padding: var(--space-sm); 
        display: flex; 
        align-items: flex-start; 
        flex-direction: column; 
        gap: 6px; 
        flex: 1;
    }
    
    @media (max-width: 767px) {
        .mini-body {
            padding: var(--space-xs);
            gap: 4px;
        }
    }
    
    .mini-thumb-placeholder { 
        width: 100%; 
        height: 100%; 
        background: #ddd; 
    }
    
    .mini-title { 
        margin: 0; 
        font-size: var(--fs-mini-title); 
        font-weight: 700; 
        line-height: 1.35; 
        display: -webkit-box; 
        -webkit-line-clamp: 2; 
        -webkit-box-orient: vertical; 
        overflow: hidden; 
    }
    
    @media (max-width: 767px) {
        .mini-title {
            font-size: var(--font-size-sm);
            line-height: var(--line-height-tight);
        }
    }
    
    .mini-title a { 
        color: var(--text-color); 
        text-decoration: none; 
    }
    
    .mini-title a:hover { 
        color: var(--theme-primary); 
    }
    
    .mini-excerpt { 
        margin: 0; 
        color: var(--muted-color); 
        font-size: var(--fs-mini-excerpt); 
        line-height: 1.5; 
        display: -webkit-box; 
        -webkit-line-clamp: 2; 
        -webkit-box-orient: vertical; 
        overflow: hidden; 
    }
    
    @media (max-width: 767px) {
        .mini-excerpt {
            font-size: var(--font-size-xs);
            -webkit-line-clamp: 1;
        }
    }

    /* Promotion titles */
    .promotion-title { 
        color: var(--theme-primary); 
        font-weight: 700; 
        font-size: var(--font-size-lg);
        margin: 0 0 var(--space-lg) 0;
        line-height: var(--line-height-tight);
    }
    
    @media (max-width: 767px) {
        .promotion-title {
            font-size: var(--font-size-base);
            margin-bottom: var(--space-md);
        }
    }
    
    .promotion-title a, 
    .promotion-item-title a { 
        color: var(--text-color); 
        text-decoration: none; 
    }
    
    .promotion-title a:hover, 
    .promotion-item-title a:hover { 
        color: var(--theme-primary); 
    }
    
    .promotion-item-title { 
        font-size: var(--fs-promotion-item); 
        margin: 0 0 var(--space-xs) 0;
        font-weight: 700;
        line-height: var(--line-height-tight);
    }
    
    @media (max-width: 767px) {
        .promotion-item-title {
            font-size: var(--font-size-xs);
        }
    }
    
    .promotion-box { 
        background: #fff; 
        padding: var(--space-lg); 
        border-radius: var(--radius); 
        box-shadow: var(--card-shadow); 
    }
    
    @media (max-width: 767px) {
        .promotion-box {
            padding: var(--space-md);
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
        }
        
        .promotion-featured {
            width: 100%;
        }
        
        .promotion-featured-thumbwrap {
            width: 100%;
        }
        
        .promotion-thumb--lg {
            width: 100%;
            max-width: 100%;
        }
    }
    
    .promotion-featured { 
        margin-bottom: var(--space-lg); 
    }
    
    @media (max-width: 767px) {
        .promotion-featured {
            margin-bottom: var(--space-md);
        }
    }
    
    .promotion-featured-thumbwrap { 
        margin-bottom: var(--space-sm); 
    }
    
    .promotion-thumb--lg { 
        width: 100%; 
        height: 160px; 
        object-fit: cover; 
        border-radius: 5px; 
        display: block; 
    }
    
    @media (max-width: 767px) {
        .promotion-thumb--lg {
            height: 140px;
        }
    }
    
    .promotion-grid { 
        display: grid; 
        grid-template-columns: repeat(2, 1fr); 
        gap: var(--space-sm); 
    }
    
    @media (max-width: 768px) {
        .promotion-grid {
            grid-template-columns: 1fr;
            gap: var(--space-md);
        }
        
        .promotion-grid > div {
            margin-bottom: var(--space-md);
            width: 100%;
        }
        
        .promotion-grid > div:last-child {
            margin-bottom: 0;
        }
    }
    
    .promotion-thumb--sm { 
        width: 100%; 
        height: 100px; 
        object-fit: cover; 
        border-radius: 5px; 
        display: block; 
        margin-bottom: var(--space-xs); 
    }
    
    @media (max-width: 767px) {
        .promotion-thumb--sm {
            height: 90px;
            width: 100%;
            max-width: 100%;
        }
        
        .promotion-item-title {
            word-wrap: break-word;
            overflow-wrap: break-word;
            hyphens: auto;
        }
        
        .promotion-item-title a {
            display: block;
            line-height: 1.4;
        }
    }
    
    .promotion-empty { 
        text-align: center; 
        color: #999; 
        padding: var(--space-lg); 
        font-size: var(--font-size-sm);
    }
    
    @media (max-width: 767px) {
        .promotion-empty {
            padding: var(--space-md);
            font-size: var(--font-size-xs);
        }
    }

    /* Utility: consistent inner padding for regular posts */
    .regular-post .content { padding: var(--space-md); }

    /* Regular post typography */
    .regular-post h3, 
    .regular-title { 
        font-size: var(--fs-regular-title); 
        margin: 0 0 var(--space-xs) 0;
        font-weight: 700;
        line-height: var(--line-height-tight);
    }
    
    .regular-post .content {
        padding: var(--space-md);
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
    @media (max-width: 767px) {
        .regular-post .content {
            padding: var(--space-sm);
        }
    }
    
    .regular-excerpt { 
        font-size: var(--fs-regular-excerpt); 
        color: var(--muted-color); 
        margin: 0 0 var(--space-xs) 0;
        line-height: var(--line-height-base);
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    @media (max-width: 767px) {
        .regular-excerpt {
            font-size: var(--font-size-xs);
            -webkit-line-clamp: 1;
        }
    }
    
    @media (max-width: 768px) {
        :root {
            --fs-hero-title: 18px;
            --fs-regular-title: 16px;
            --fs-mini-title: 15px;
        }
    }
    
    @media (max-width: 479px) {
        :root {
            --fs-hero-title: 16px;
            --fs-regular-title: 15px;
            --fs-mini-title: 14px;
        }
    }
</style>


