<section class="kc-elm kc-css-277686 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-862164 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-133714 kc-title-wrap ">
                        <h1 class="kc_title regular">{{ $config->where('key', 'name')->first()->value }} - Trọn gói, an
                            toàn, đúng hẹn. Tổng đài đặt xe:
                            {{ $config->where('key', 'phone')->first()->value }}</h1>
                    </div>
                    <div class="kc-elm kc-css-378675 kc_row kc_row_inner">
                        <div class="kc-elm kc-css-500672 kc_col-sm-7 kc_column_inner kc_col-sm-7">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="kc-elm kc-css-176438"> <a class="kc_button tdhotline"
                                        href="tel:{{ $config->where('key', 'phone')->first()->value }}" target="_self"
                                        title="" onclick="">
                                        {{ $config->where('key', 'phone')->first()->value }} </a></div>
                            </div>
                        </div>
                        <div class="kc-elm kc-css-902550 kc_col-sm-5 kc_column_inner kc_col-sm-5">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="kc-elm kc-css-758892"> <a class="kc_button tdhotline"
                                        href="tel:{{ $config->where('key', 'phone')->first()->value }}" target="_self"
                                        title="" onclick="">
                                        {{ $config->where('key', 'phone')->first()->value }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="kc-elm kc-css-280488 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-660945 kc_col-of-5 kc_column kc_col-of-5">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-117587 kc_shortcode kc_single_image logo_nbc"><a href="#"
                            title="" target="_self"> <img
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                class="logo" alt="Logo"
                                data-lazy-src="{{ asset('/storage/config/' . $config->where('key', 'logo')->first()->value) }}" /><noscript><img
                                    src="{{ asset('/storage/config/' . $config->where('key', 'logo')->first()->value) }}"
                                    class="logo" alt="Logo" /></noscript>
                        </a></div>
                </div>
            </div>
            <div class="kc-elm kc-css-637520 kc_col-sm-5 kc_column kc_col-sm-5">
                <div class="kc-col-container"></div>
            </div>
            <div class="kc-elm kc-css-331137 kc_col-sm-3 kc_column kc_col-sm-3">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-709621 kc_text_block">
                        <p>Tổng đài</p>
                    </div>
                    <div class="kc-elm kc-css-703953"> <a class="kc_button tdhotline"
                            href="tel:{{ $config->where('key', 'phone')->first()->value }}" target="_self"
                            title="" onclick=""> {{ $config->where('key', 'phone')->first()->value }} </a>
                    </div>
                </div>
            </div>
            <div class="kc-elm kc-css-489636 kc_col-of-5 kc_column kc_col-of-5">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-412596 kc_text_block">
                        <p>Hotline</p>
                    </div>
                    <div class="kc-elm kc-css-517665"> <a class="kc_button tdhotline"
                            href="tel:{{ $config->where('key', 'phone')->first()->value }}" target="_self"
                            title="" onclick=""> {{ $config->where('key', 'phone')->first()->value }} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="dc_menu_mobile" class="kc-elm kc-css-994597 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-302678 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-50831 kc_row kc_row_inner">
                        <div class="kc-elm kc-css-720684 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="kc-elm kc-css-778181 kc_shortcode kc_single_image"><a href="#"
                                        title="" target="_self"> <img
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                            class="" alt="Logo"
                                            data-lazy-src="{{ asset('/storage/config/' . $config->where('key', 'logo')->first()->value) }}" /><noscript><img
                                                src="{{ asset('/storage/config/' . $config->where('key', 'logo')->first()->value) }}"
                                                class="" alt="Logo" /></noscript> </a></div>
                            </div>
                        </div>
                        <div class="kc-elm kc-css-221841 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="kc-elm kc-css-711805 kc_text_block">
                                    <p><button class="navbar-toggler nav_button collapsed" type="button"
                                            aria-expanded="false" aria-controls="navbarToggleExternalContent"
                                            aria-label="Toggle navigation" data-target="#dc_menu_pc"
                                            data-toggle="collapse"><img class="alignnone size-full"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2020%2012'%3E%3C/svg%3E"
                                                alt="Menu Button" width="20" height="12"
                                                data-lazy-src="{{ asset('images/menubutton.png') }}" /><noscript><img
                                                    class="alignnone size-full"
                                                    src="{{ asset('images/menubutton.png') }}" alt="Menu Button"
                                                    width="20" height="12" /></noscript></button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="dc_menu_pc" class="kc-elm kc-css-44176 kc_row dc_menu_top">
    <div class="kc-row-container  kc-container  dc_nav_top">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-404844 kc_col-sm-12 kc_column kc_col-sm-12 dc_header_menu">
                <div class="dc_header_nav kc-col-container">
                    <div class="widget widget_nav_menu kc-elm kc-css-989966">
                        <div class="menu-menu-top-container">
                            <ul id="menu-menu-top" class="menu">
                                <li id="menu-item-124"
                                    class="menu_icon menu_home menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-124">
                                    <a href="#" aria-current="page">Trang Chủ</a>
                                </li>
                                <li id="menu-item-393"
                                    class="menu_icon menu_dichvu menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-393">
                                    <a href="#">Dịch vụ</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-619"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-619">
                                            <a href="#">Sân bay</a>
                                        </li>
                                        <li id="menu-item-618"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-618">
                                            <a href="#">Đường dài</a>
                                        </li>
                                        <li id="menu-item-617"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-617">
                                            <a href="#">Cho thuê xe
                                                khác</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-401"
                                    class="menu_icon menu_loaixe menu-item menu-item-type-post_type menu-item-object-page menu-item-401">
                                    <a href="#">Loại xe</a>
                                </li>
                                <li id="menu-item-2709"
                                    class="menu_icon menu_banggia menu-item menu-item-type-post_type menu-item-object-page menu-item-2709">
                                    <a href="#">Bảng giá</a>
                                </li>
                                <li id="menu-item-394"
                                    class="menu_icon menu_kmai menu-item menu-item-type-taxonomy menu-item-object-category menu-item-394">
                                    <a href="#">Khuyến mại</a>
                                </li>
                                <li id="menu-item-395"
                                    class="menu_icon menu_news menu-item menu-item-type-taxonomy menu-item-object-category menu-item-395">
                                    <a href="#">Tin tức</a>
                                </li>
                                <li id="menu-item-392"
                                    class="menu_icon menu_about menu-item menu-item-type-post_type menu-item-object-page menu-item-392">
                                    <a href="#">Về chúng tôi</a>
                                </li>
                                <li id="menu-item-938"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-938">
                                    <a href="#">Chính sách</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-939"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-939">
                                            <a href="#">Vận chuyển
                                                hành khách</a>
                                        </li>
                                        <li id="menu-item-3883"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3883">
                                            <a href="#">Bảo
                                                vệ quyền riêng tư</a>
                                        </li>
                                        <li id="menu-item-941"
                                            class="menu-item menu-item-type-post_type menu-item-object-post menu-item-941">
                                            <a href="#">Sử dụng dịch
                                                vụ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-391"
                                    class="menu_icon menu_contact menu-item menu-item-type-post_type menu-item-object-page menu-item-391">
                                    <a href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
