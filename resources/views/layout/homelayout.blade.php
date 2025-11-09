<!doctype html>
<html lang="vi-VN">

<x-header :config="$config" />

<body data-rsssl=1
    class="home page-template page-template-page-full page-template-page-full-php page page-id-2 kingcomposer kc-css-system">
    <div id="fb-root"></div>
    <div id="fb-customer-chat" class="fb-customerchat"></div>
    <div class="kc_clfw"></div>
    <nav>
        <x-navbar :config="$config" />
    </nav>
    <main id="main-content">
        @yield('content')
    </main>
    <script
        src="https://maps.googleapis.com/maps/api/js?libraries=places,geometry&key=AIzaSyCBTROq6LuvF_IE1r46-T4AeTSV-0d7my8&language=vi-VI&region=VN&avoid=tolls|highways|ferries">
    </script>

    <x-footer :config="$config" />
    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('dc_menu_pc');
            const menuItems = document.querySelectorAll('.dc_menu_top ul.menu li.menu-item-has-children');

            // Toggle submenu on mobile
            if (menuItems.length > 0) {
                menuItems.forEach(function(item) {
                    const link = item.querySelector('a');
                    if (link) {
                        link.addEventListener('click', function(e) {
                            if (window.innerWidth <= 1024) {
                                e.preventDefault();
                                item.classList.toggle('active');
                            }
                        });
                    }
                });
            }

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (mobileMenu && mobileMenuToggle && window.innerWidth <= 1024) {
                    if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                        if (mobileMenu.classList.contains('show')) {
                            mobileMenuToggle.click();
                        }
                    }
                }
            });
        });
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "https:\/\/www.taxinoibai.net\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "cached": "1"
        }; /* ]]> */
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var viewsCacheL10n = {
            "admin_ajax_url": "https:\/\/www.taxinoibai.net\/wp-admin\/admin-ajax.php",
            "post_id": "2"
        }; /* ]]> */
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var thickboxL10n = {
            "next": "Trang sau >",
            "prev": "< Trang tr\u01b0\u1edbc",
            "image": "\u1ea2nh",
            "of": "c\u1ee7a",
            "close": "\u0110\u00f3ng",
            "noiframes": "T\u00ednh n\u0103ng n\u00e0y y\u00eau c\u1ea7u b\u1eadt frame. B\u1ea1n c\u00f3 th\u1ec3 \u0111\u00e3 t\u1eaft t\u00ednh n\u0103ng n\u00e0y ho\u1eb7c tr\u00ecnh duy\u1ec7t kh\u00f4ng h\u1ed7 tr\u1ee3.",
            "loadingAnimation": "https:\/\/www.taxinoibai.net\/wp-includes\/js\/thickbox\/loadingAnimation.gif"
        }; /* ]]> */
    </script>
    <script>
        window.lazyLoadOptions = {
            elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids()
                            }
                        }
                    }
                }
            }
        };
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function(mutation) {
                        for (i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                return
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !==
                                'function') {
                                return
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName(
                                'rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                });
                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: !0,
                    subtree: !0
                };
                observer.observe(b, config)
            }
        }, !1)
    </script>
    <script data-no-minify="1" async src="{{ asset('plugins/wp-rocket/assets/js/lazyload/11.0.6/lazyload.min.js') }}">
    </script>
    <script src="{{ asset('cache/min/1/7ad9e9c01f077ff9e5d675874713646f.js') }}" data-minify="1" defer></script>
    @hasSection('scripts')
        @yield('scripts')
    @endif
</body>

</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1742772074 -->
