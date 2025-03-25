<section class="kc-elm kc-css-422110 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-851729 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-109938 kc_text_block">
                        <h3 style="text-align: center;">{{ $config->where('key', 'name')->first()->value }}</h3>
                        <p><span style="color: #104282; font-family: 'Bebeboo-SemiBold'; font-size: 17px;">Hotline:
                                <a
                                    href="tel:{{ $config->where('key', 'phone')->first()->value }}">{{ $config->where('key', 'phone')->first()->value }}</a>|
                            </span><br />
                            {{ $config->where('key', 'address')->first()->value }}<br /> Email: <a
                                href="mailto:{{ $config->where('key', 'email')->first()->value }}">{{ $config->where('key', 'email')->first()->value }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-797100 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-600706 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-304469 kc_text_block">
                        <h3 style="text-align: center;"><span style="font-family: 'Bebeboo-SemiBold';">CHAT
                                ONLINE VỚI CHÚNG TÔI</span></h3>
                    </div>
                    <div class="kc-elm kc-css-477419 kc_row kc_row_inner">
                        <div class="kc-elm kc-css-962165 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="kc-elm kc-css-225845 kc_text_block mhome_chatonline">
                                    <p><img class="size-full alignleft"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2026%2028'%3E%3C/svg%3E"
                                            alt="" width="26" height="28"
                                            data-lazy-src="{{ asset('uploads/2018/03/fb-chat.png') }}" /><noscript><img
                                                class="size-full alignleft"
                                                src="{{ asset('uploads/2018/03/fb-chat.png') }}" alt=""
                                                width="26" height="28" /></noscript><a
                                            href="{{ $config->where('key', 'facebook')->first()->value }}">{{ $config->where('key', 'name')->first()->value }}</a>
                                    </p>
                                    <hr />
                                    <p><img class="size-full alignleft"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2028%2028'%3E%3C/svg%3E"
                                            alt="" width="28" height="28"
                                            data-lazy-src="{{ asset('uploads/2018/03/v_chat.png') }}" /><noscript><img
                                                class="size-full alignleft"
                                                src="{{ asset('uploads/2018/03/v_chat.png') }}" alt=""
                                                width="28" height="28" /></noscript> <a
                                            href="viber://chat?number={{ $config->where('key', 'phone')->first()->value }}">{{ $config->where('key', 'phone')->first()->value }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="kc-elm kc-css-210475 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="kc-elm kc-css-662412 kc_text_block mhome_chatonline">
                                    <p><img class="size-full alignleft"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2028%2028'%3E%3C/svg%3E"
                                            alt="" width="28" height="28"
                                            data-lazy-src="{{ asset('uploads/2018/03/z_chat.png') }}" /><noscript><img
                                                class="size-full alignleft"
                                                src="{{ asset('uploads/2018/03/z_chat.png') }}" alt=""
                                                width="28" height="28" /></noscript><a
                                            href="https://zalo.me/{{ $config->where('key', 'phone')->first()->value }}">{{ $config->where('key', 'phone')->first()->value }}</a>
                                    </p>
                                    <hr />
                                    <p><img class="size-full alignleft"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2028%2028'%3E%3C/svg%3E"
                                            alt="" width="28" height="28"
                                            data-lazy-src="{{ asset('uploads/2018/03/w_chat.png') }}" /><noscript><img
                                                class="size-full alignleft"
                                                src="{{ asset('uploads/2018/03/w_chat.png') }}" alt=""
                                                width="28" height="28" /></noscript><a
                                            href="https://api.whatsapp.com/send?phone={{ $config->where('key', 'phone')->first()->value }}">{{ $config->where('key', 'phone')->first()->value }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="dc_footer" class="kc-elm kc-css-775579 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div id="dc_footer"
                class="kc-elm kc-css-662606 kc_col-sm-12 kc-animated kc-animate-eff-fadeIn kc-animate-delay-200 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-513251 kc_row kc_row_inner">
                        <div class="kc-elm kc-css-236289 kc_col-sm-4 kc_column_inner kc_col-sm-4">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="kc-elm kc-css-652533 kc_text_block">
                                    <div class="row shortcode-section"></div>
                                    <p><strong>{{ $config->where('key', 'name')->first()->value }}</strong></p>
                                    {{ $config->where('key', 'address')->first()->value }}<br /> Tel: <a
                                        href="tel:{{ $config->where('key', 'phone')->first()->value }}">{{ $config->where('key', 'phone')->first()->value }}</a><br />
                                    Email: <a
                                        href="mailto:{{ $config->where('key', 'email')->first()->value }}">{{ $config->where('key', 'email')->first()->value }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="kc-elm kc-css-947882 kc_col-sm-8 kc_column_inner kc_col-sm-8">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="kc-elm kc-css-831110 kc_text_block">
                                    <p><a href="#">Trang chủ</a> <a href="#">Bảng giá</a> <a
                                            href="#">Loại xe</a> <a href="#">Chính sách bảo mật</a>
                                        <a href="#">Blog</a> <a href="#">Liên hệ</a>
                                    </p>
                                    <p>{{ $config->where('key', 'name')->first()->value }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-352817 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-342142 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-378541 kc_text_block">
                        <p>{{ $config->where('key', 'name')->first()->value }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="wpfm-floating-wh-wrapper ">
    <div class="wpfm-menu-wrapper wpfm-57340 wpfm-template-11">
        <nav id="wpfm-floating-menu-nav" class="wpfm-menu-nav wpfm wpfm-position-bottom-right">
            <ul>
                <li class="wpfm-title-hidden call-floating-menu"> <a title="" class="wpfm-menu-link"
                        href="tel:{{ $config->where('key', 'phone')->first()->value }}"> <span
                            class="wpfm-icon-menu-name-wrapper"> <span class='wpfm-icon-block wpfm-image-icon-block'>
                                <img class="wpfm-image-icon"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                    data-lazy-src="{{ asset('uploads/dt-1.png') }}"><noscript><img
                                        class="wpfm-image-icon" src="{{ asset('uploads/dt-1.png') }}"></noscript>
                            </span> </span> </a></li>
                <li class="wpfm-title-hidden zalo-floating-menu gclick"> <a title="" class="wpfm-menu-link"
                        href="https://zalo.me/{{ $config->where('key', 'phone')->first()->value }}"> <span
                            class="wpfm-icon-menu-name-wrapper"> <span class='wpfm-icon-block wpfm-image-icon-block'>
                                <img class="wpfm-image-icon"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                    data-lazy-src="{{ asset('uploads/zl-1.png') }}"><noscript><img
                                        class="wpfm-image-icon" src="{{ asset('uploads/zl-1.png') }}"></noscript>
                            </span> </span> </a></li>
                <li class="wpfm-title-hidden messenger-floating-menu"> <a title="" class="wpfm-menu-link"
                        href="https://m.me/{{ $config->where('key', 'messenger')->first()->value }}"> <span
                            class="wpfm-icon-menu-name-wrapper"> <span class='wpfm-icon-block wpfm-image-icon-block'>
                                <img class="wpfm-image-icon"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                    data-lazy-src="{{ asset('uploads/messenger-2.png') }}"><noscript><img
                                        class="wpfm-image-icon"
                                        src="{{ asset('uploads/messenger-2.png') }}"></noscript>
                            </span> </span> </a></li>
            </ul>
        </nav>
    </div>
    <style type="text/css">
        .wpfm-57340.wpfm-template-1 ul li,
        .wpfm-57340.wpfm-template-1 ul li .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-right ul li:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-right ul li:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-right ul li:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-left ul li.wpfm-title-hidden:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-left ul li.wpfm-title-hidden:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-left ul li.wpfm-title-hidden:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-right ul li.wpfm-title-hidden:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-right ul li.wpfm-title-hidden:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-right ul li.wpfm-title-hidden:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-left ul li:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-left ul li:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-left ul li:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav.wpfm-position-left ul li,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav.wpfm-position-top-left ul li,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav.wpfm-position-bottom-left ul li,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav.wpfm-position-right ul li,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav.wpfm-position-top-right ul li,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav.wpfm-position-bottom-right ul li,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-left ul>li>a span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-top-left ul>li>a span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-bottom-left ul>li>a span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-left ul li:hover,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-top-left ul li:hover,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-bottom-left ul li:hover,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-right ul>li>a span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-right ul li:hover,
        .wpfm-57340.wpfm-template-4 ul li .wpfm-icon-block,
        .wpfm-57340.wpfm-template-7 ul>li>a,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav a .wpfm-icon-block,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav a::before,
        .wpfm-57340.wpfm-template-9 .wpfm-menu-nav a .wpfm-icon-block,
        .wpfm-57340.wpfm-template-9 .wpfm-menu-nav a::before,
        .wpfm-57340.wpfm-template-10 ul li a span,
        .wpfm-57340.wpfm-template-10 ul li:before,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav ul li a,
        .wpfm-57340.wpfm-template-13 .wpfm-menu-nav ul li a {
            background:
        }

        .wpfm-57340 .wpfm-template-7 span.name.wpfm-menu-name:after {
            border-bottom: 2px solid none
        }

        .wpfm-57340.wpfm-template-5 ul,
        .wpfm-template-5 .wpfm-nav-strech-trigger span,
        .wpfm-57340.wpfm-template-6 .wpfm-menu-nav ul:before,
        .wpfm-template-6 .wpfm-nav-strech-trigger span,
        .wpfm-57340.wpfm-template-6 .wpfm-menu-name,
        .wpfm-57340.wpfm-template-7 span.name.wpfm-menu-name:after,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav:before,
        .wpfm-57340.wpfm-template-9 .wpfm-menu-nav .wpfm-nav:before,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav ul,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav ul {
            background: none
        }

        .wpfm-57340.wpfm-template-1 .wpfm-menu-nav.wpfm-position-right ul li>a:hover>span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-1 .wpfm-menu-nav.wpfm-position-top-right ul li>a:hover>span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-1 .wpfm-menu-nav.wpfm-position-bottom-right ul li>a:hover>span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-1 ul li .wpfm-menu-name,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-left ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-right ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-4 ul li .wpfm-menu-name,
        .wpfm-template-3 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-6 .wpfm-menu-name,
        .wpfm-57340.wpfm-template-7 .wpfm-menu-name,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav:hover .wpfm-menu-name,
        .wpfm-57340.wpfm-template-9 .wpfm-menu-nav .wpfm-menu-name,
        .wpfm-57340.wpfm-template-10 .wpfm-menu-nav ul li .wpfm-tooltip span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav .wpfm-icon-menu-name-wrapper span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-13 .wpfm-menu-nav .wpfm-icon-menu-name-wrapper span.wpfm-menu-name {
            color: ;
            font-family: default
        }

        .wpfm-57340.wpfm-template-1 a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-4 ul li .wpfm-menu-name,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-6 .wpfm-menu-name,
        .wpfm-57340.wpfm-template-7 .wpfm-menu-name,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav:hover .wpfm-menu-name,
        .wpfm-57340.wpfm-template-9.wpfm-position-left .wpfm-nav:hover .wpfm-menu-name,
        .wpfm-57340.wpfm-template-9.wpfm-position-top-left .wpfm-nav:hover .wpfm-menu-name,
        .wpfm-57340.wpfm-template-9.wpfm-position-bottom-left .wpfm-nav:hover .wpfm-menu-name,
        .wpfm-57340.wpfm-template-9.wpfm-position-right .wpfm-nav:hover .wpfm-menu-name,
        .wpfm-57340.wpfm-template-9.wpfm-position-top-right .wpfm-nav:hover .wpfm-menu-name,
        .wpfm-57340.wpfm-template-9.wpfm-position-bottom-right .wpfm-nav:hover .wpfm-menu-name,
        .wpfm-57340.wpfm-template-10 .wpfm-menu-nav ul li .wpfm-tooltip span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav ul li a span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav .wpfm-icon-menu-name-wrapper span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-13 .wpfm-menu-nav .wpfm-icon-menu-name-wrapper span.wpfm-menu-name {
            font-size: 8px;
            text-transform: uppercase
        }

        .wpfm-57340.wpfm-template-1 .wpfm-menu-nav ul li>a .wpfm-icon-block i,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav ul li a span i,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav ul li a span i,
        .wpfm-57340.wpfm-template-4 .wpfm-menu-nav ul li a span i,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li a span.wpfm-icon-block i,
        .wpfm-57340.wpfm-template-6 .wpfm-icon-block i,
        .wpfm-template-6 .wpfm-nav-close-trigger span,
        .wpfm-57340.wpfm-template-6 .wpfm-nav-strech-trigger span,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav a .wpfm-icon-block i,
        .wpfm-57340.wpfm-template-9 .wpfm-menu-nav a .wpfm-icon-block i,
        .wpfm-57340.wpfm-template-10 .wpfm-tooltip .wpfm-icon-block i,
        .wpfm-57340.wpfm-template-11 .wpfm-tooltip .wpfm-icon-block i {
            font-size: px
        }

        .wpfm-57340.wpfm-template-1 .wpfm-menu-nav ul li a img,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav ul li a span img.wpfm-image-icon,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav ul li a span img.wpfm-image-icon,
        .wpfm-57340.wpfm-template-4 .wpfm-menu-nav ul li a span img.wpfm-image-icon,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li a span.wpfm-icon-block img.wpfm-image-icon,
        .wpfm-57340.wpfm-template-6 .wpfm-icon-block img,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav a .wpfm-icon-block img,
        .wpfm-57340.wpfm-template-9 .wpfm-menu-nav a .wpfm-icon-block img,
        .wpfm-57340.wpfm-template-10 .wpfm-tooltip .wpfm-icon-block img,
        .wpfm-57340.wpfm-template-11 .wpfm-tooltip .wpfm-icon-block img {
            width: 32px !important
        }

        .wpfm-57340.wpfm-template-7 ul>li>a:hover,
        .wpfm-57340.wpfm-template-7 ul>li.wpfm-active-nav a {
            background: ;
            -webkit-transform: scale(1) translate3d(0, 0, 0);
            transform: scale(1) translate3d(0, 0, 0)
        }

        .wpfm-57340.wpfm-template-4 .wpfm-menu-nav ul li>a:hover>span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-10 .wpfm-tooltip,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav .wpfm-icon-menu-name-wrapper,
        .wpfm-57340.wpfm-template-7 .wpfm-menu-name,
        .wpfm-57340.wpfm-template-13 .wpfm-menu-nav .wpfm-icon-menu-name-wrapper {
            background:
        }

        .wpfm-57340.wpfm-template-7 span.name.wpfm-menu-name:after {
            border-bottom: 2px solid
        }

        .wpfm-57340.wpfm-template-1 ul li,
        .wpfm-template-2 ul li,
        .wpfm-57340.wpfm-template-3 ul li,
        .wpfm-template-4 ul li,
        .wpfm-57340.wpfm-template-4 ul li a,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li a,
        .wpfm-57340.wpfm-template-6 ul li a,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav a,
        .wpfm-57340.wpfm-template-9 .wpfm-menu-nav a {
            margin-bottom: px
        }

        .wpfm-57340.wpfm-template-1 ul li>.wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-2 ul li>.wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-3 ul li>.wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-4 ul li>.wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-8.wpfm-position-right .wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-8.wpfm-position-top-right .wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-8.wpfm-position-bottom-right .wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li>span.wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-6 .wpfm-menu-nav ul li span.wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-7 ul li>.wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-8 .wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-9 .wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav ul li .wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav ul li .wpfm-tootltip-title,
        .wpfm-57340.wpfm-template-13 .wpfm-menu-nav ul li .wpfm-tootltip-title {
            color: ;
            background: ;
            font-size: 8px;
            font-family: default;
            text-transform: uppercase
        }

        .wpfm-template-10 ul li:last-child:before {
            height: 0
        }

        .wpfm-57340.wpfm-template-7 ul li>.wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-8.wpfm-position-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-top-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-bottom-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-right .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-top-right .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-bottom-right .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-top-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-bottom-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-right .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-top-right .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-bottom-right .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-9.wpfm-position-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-9.wpfm-position-top-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-9.wpfm-position-bottom-left .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-9.wpfm-position-right .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-9.wpfm-position-top-right .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-9.wpfm-position-bottom-right .wpfm-tootltip-title:after {
            color:
        }

        .wpfm-57340.wpfm-template-1 .wpfm-position-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-2 .wpfm-position-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-2 .wpfm-position-top-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-2 .wpfm-position-bottom-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-top-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-bottom-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-4 .wpfm-position-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-4 .wpfm-position-top-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-4 .wpfm-position-bottom-right ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-5 .wpfm-position-right ul li span.wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-5 .wpfm-position-top-right ul li span.wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav.wpfm-position-bottom-right ul li span.wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-6 .wpfm-position-right ul li span.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-6 .wpfm-position-top-right ul li span.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-6 .wpfm-position-bottom-right ul li span.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-7 .wpfm-position-top-right ul li.wpfm-title-hidden>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-7 .wpfm-position-right ul li.wpfm-title-hidden>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-7 .wpfm-position-bottom-right ul li.wpfm-title-hidden>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-right .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-8.wpfm-position-top-right .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-8.wpfm-position-bottom-right .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-9.wpfm-position-right .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-9.wpfm-position-top-right .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-9.wpfm-position-bottom-right .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav.wpfm-position-right ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav.wpfm-position-right ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-13 .wpfm-menu-nav.wpfm-position-right ul li .wpfm-tootltip-title:after {
            border-color: transparent transparent transparent
        }

        .wpfm-57340.wpfm-template-1 .wpfm-position-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-2 .wpfm-position-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-2 .wpfm-position-top-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-2 .wpfm-position-bottom-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-top-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-bottom-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-top-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-3 .wpfm-position-bottom-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-4 .wpfm-position-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-4 .wpfm-position-top-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-4 .wpfm-position-bottom-left ul li>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-5 .wpfm-position-left ul li span.wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-5 .wpfm-position-top-left ul li span.wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav.wpfm-position-bottom-left ul li span.wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-6 .wpfm-position-left ul li span.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-6 .wpfm-position-top-left ul li span.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-6 .wpfm-position-bottom-left ul li span.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-7 .wpfm-position-top-left ul li.wpfm-title-hidden>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-7 .wpfm-position-left ul li.wpfm-title-hidden>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-7 .wpfm-position-bottom-left ul li.wpfm-title-hidden>.wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-8.wpfm-position-left .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-8.wpfm-position-top-left .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-8.wpfm-position-bottom-left .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-9.wpfm-position-left .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-9.wpfm-position-top-left .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-9.wpfm-position-bottom-left .wpfm-tootltip-title:before,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav.wpfm-position-left ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav.wpfm-position-left ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-13 .wpfm-menu-nav.wpfm-position-left ul li .wpfm-tootltip-title:after {
            border-color: transparent transparent transparent
        }

        .wpfm-57340.wpfm-template-11 .wpfm-position-bottom-left ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-12 .wpfm-position-bottom-left ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-13 .wpfm-position-bottom-left ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-11 .wpfm-position-bottom-right ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-12 .wpfm-position-bottom-right ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-13 .wpfm-position-bottom-right ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-11 .wpfm-position-bottom-center ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-12 .wpfm-position-bottom-center ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-13 .wpfm-position-bottom-center ul li .wpfm-tootltip-title:after,
        .wpfm-57340.wpfm-template-7 ul li>.wpfm-tootltip-title:after {
            border-top: 7px solid
        }

        .wpfm-template-11 .wpfm-position-top-left ul li .wpfm-tootltip-title:after,
        .wpfm-template-12 .wpfm-position-top-left ul li .wpfm-tootltip-title:after,
        .wpfm-template-13 .wpfm-position-top-left ul li .wpfm-tootltip-title:after,
        .wpfm-template-11 .wpfm-position-top-right ul li .wpfm-tootltip-title:after,
        .wpfm-template-12 .wpfm-position-top-right ul li .wpfm-tootltip-title:after,
        .wpfm-template-13 .wpfm-position-top-right ul li .wpfm-tootltip-title:after {
            border-bottom: 7px solid
        }

        .wpfm-57340.wpfm-template-1 ul li.wpfm-active-nav,
        .wpfm-57340.wpfm-template-1 ul li.wpfm-active-nav .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-left ul li.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-left ul li.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-left ul li.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-right ul li.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-right ul li.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-right ul li.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-left ul li.wpfm-title-hidden.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-top-left ul li.wpfm-title-hidden.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-1 .wpfm-position-bottom-left ul li.wpfm-title-hidden.wpfm-active-nav:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-2 .wpfm-menu-nav ul li.wpfm-active-nav,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-left ul>li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-top-left ul>li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-bottom-left ul>li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-right ul>li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-top-right ul>li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-bottom-right ul>li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-left ul li.wpfm-active-nav,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-top-left ul li.wpfm-active-nav,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-bottom-left ul li.wpfm-active-nav,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-right ul li.wpfm-active-nav,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-top-right ul li.wpfm-active-nav,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-bottom-right ul li.wpfm-active-nav,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-left ul li.wpfm-active-nav:hover,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-top-left ul li.wpfm-active-nav:hover,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-bottom-left ul li.wpfm-active-nav:hover,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-right ul li.wpfm-active-nav:hover,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-top-right ul li.wpfm-active-nav:hover,
        .wpfm-57340.wpfm-template-3 .wpfm-menu-nav.wpfm-position-bottom-right ul li.wpfm-active-nav:hover,
        .wpfm-57340.wpfm-template-4 .wpfm-position-left ul li a:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-top-left ul li a:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-bottom-left ul li a:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-right ul li a:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-top-right ul li a:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-bottom-right ul li a:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-left ul li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-top-left ul li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-bottom-left ul li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-right ul li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-top-right ul li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340.wpfm-template-4 .wpfm-position-bottom-right ul li.wpfm-active-nav span.wpfm-icon-block,
        .wpfm-57340 li.wpfm-title-hidden.wpfm-active-nav span.wpfm-image-icon-block,
        .wpfm-57340 li.wpfm-active-nav span.wpfm-image-icon-block,
        .wpfm-57340.wpfm-template-8 .wpfm-menu-nav li.wpfm-active-nav .wpfm-icon-block,
        .wpfm-57340.wpfm-template-9 .wpfm-menu-nav li.wpfm-active-nav .wpfm-icon-block,
        .wpfm-57340.wpfm-template-10 ul li a:hover span,
        .wpfm-57340.wpfm-template-10 ul li.wpfm-active-nav span.wpfm-initia-icon,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav ul li.wpfm-active-nav span.wpfm-image-icon-block,
        .wpfm-57340.wpfm-template-12 .wpfm-menu-nav ul li.wpfm-active-nav a,
        .wpfm-57340.wpfm-template-13 .wpfm-menu-nav ul li.wpfm-active-nav a {
            background:
        }

        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li a:hover span.wpfm-icon-block i,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li a:hover span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li.wpfm-active-nav span.wpfm-icon-block i,
        .wpfm-57340.wpfm-template-5 .wpfm-menu-nav ul li.wpfm-active-nav span.wpfm-menu-name,
        .wpfm-57340.wpfm-template-6 ul li.wpfm-active-nav .wpfm-icon-block,
        .wpfm-57340.wpfm-template-6 ul li a:hover .wpfm-icon-block,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav ul li a:hover span,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav ul li.wpfm-active-nav span,
        .wpfm-57340.wpfm-template-11 .wpfm-menu-nav ul li.wpfm-active-nav span.wpfm-icon-menu-name-wrapper i {
            color: !important
        }

        .wpfm-57340 img.wpfm-trigger-image-icon {
            padding: 10px
        }

        .wpfm-57340.wpfm-template-5 .wpfm-nav-strech-trigger span i {
            color:
        }

        .wpfm-57340.wpfm-template-5 .wpfm-nav-close-trigger span i {
            color:
        }
    </style>
</div>
