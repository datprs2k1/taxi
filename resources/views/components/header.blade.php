<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes'>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>@hasSection('title')@yield('title')@else{{ $config->where('key', 'title')->first()->value }}@endif</title>
    <style id="rocket-critical-css">
        .wp-block-media-text .wp-block-media-text__media {
            grid-area: media-text-media;
            margin: 0
        }

        .wp-block-media-text .wp-block-media-text__content {
            word-break: break-word;
            grid-area: media-text-content;
            padding: 0 8%
        }

        ul.dc_datxe {
            margin: 0;
            padding: 0 15px;
            background: #FFF;
            display: block;
            clear: both
        }

        @media only screen and (max-width:767px) {
            ul.dc_datxe {
                height: auto !important
            }
        }

        nav#wpfm-floating-menu-nav {
            z-index: 999999
        }

        .wpfm-icon-block img {
            padding: 3px;
            display: block
        }

        .wpfm-menu-nav ul {
            margin: 0;
            list-style: none;
            z-index: 99999
        }

        .wpfm-position-bottom-left ul {
            left: 0;
            bottom: 7%;
            position: fixed
        }

        .wpfm-icon-block.wpfm-image-icon-block {
            width: 35px
        }

        .wpfm-menu-wrapper ul {
            -webkit-margin-before: 0;
            -webkit-margin-after: 0;
            -webkit-margin-start: 0;
            -webkit-margin-end: 0;
            -webkit-padding-start: 0
        }

        .wpfm-template-11 .wpfm-menu-nav ul {
            position: fixed;
            bottom: 10px;
            background: #ededed;
            padding: 5px 0;
            border-radius: 15px
        }

        .wpfm-template-11 .wpfm-position-bottom-left ul {
            left: 25px
        }

        .wpfm-template-11 .wpfm-menu-nav ul li {
            display: inline-block;
            padding: 0 20px;
            position: relative
        }

        .wpfm-template-11 .wpfm-menu-nav ul li a {
            outline: 0
        }

        .wpfm-template-11 .wpfm-menu-nav ul li a span {
            color: #ada7a6;
            display: inline-block;
            vertical-align: middle;
            line-height: 1
        }

        *,
        .kc-col-container,
        .kc-container,
        .kc-elm {
            box-sizing: border-box
        }

        div {
            display: block
        }

        .kc-elm {
            float: left;
            width: 100%
        }

        div.kc_col-of-5 {
            width: 20%;
            float: left
        }

        .kc_col-sm-3 {
            width: 25%
        }

        .kc_col-sm-5 {
            width: 41.6667%
        }

        .kc_col-sm-6 {
            width: 50%
        }

        .kc_col-sm-7 {
            width: 58.3333%
        }

        .kc_col-sm-12 {
            width: 100%
        }

        .kc-container {
            width: 100%;
            max-width: 1170px;
            margin: 0 auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .kc_single_image img {
            max-width: 100%;
            display: inline-block
        }

        .kc_row:not(.kc_row_inner) {
            clear: both;
            float: left;
            width: 100%
        }

        .kc-row-container.kc-container .kc-wrap-columns,
        .kc_row_inner {
            margin-left: -15px;
            margin-right: -15px;
            clear: both
        }

        .kc_row.kc_row_inner {
            width: calc(100% + 30px)
        }

        .kc_column,
        .kc_column_inner {
            min-height: 1px;
            position: relative;
            padding-right: 15px;
            padding-left: 15px;
            float: left
        }

        .kc_column>.kc-col-container,
        .kc_column_inner>.kc-col-inner-container {
            height: 100%
        }

        .kingcomposer div.kc_column,
        .kingcomposer div.kc_column_inner {
            clear: none
        }

        .kc_clfw {
            width: 100% !important;
            clear: both !important;
            display: block !important;
            height: 0 !important;
            padding: 0 !important;
            margin: 0 !important
        }

        .kc-col-container {
            clear: both;
            display: block;
            width: 100%
        }

        .kc_text_block {
            display: inline-block;
            clear: both;
            width: 100%
        }

        @media screen and (min-width:992px) {

            .kc-row-container .kc-wrap-columns,
            .kc_row_inner {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                width: 100%;
                flex-wrap: wrap
            }

            .kc-row-container.kc-container .kc-wrap-columns,
            .kc_row_inner {
                width: calc(100% + 30px)
            }
        }
        
        /* Override for mobile - must be after desktop styles */
        @media screen and (max-width:767px) {
            .kc-row-container .kc-wrap-columns,
            .kc_row_inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }
        }

        @media screen and (max-width:767px) {

            body.kc-css-system .kc_column,
            body.kc-css-system .kc_column_inner {
                width: 100% !important;
                max-width: 100% !important;
                float: none !important;
                clear: both !important;
            }
            
            body.kc-css-system .kc_col-sm-6,
            .kc_col-sm-6 {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
                float: none !important;
                clear: both !important;
            }
            
            body.kc-css-system .kc-css-830723.kc_column,
            body.kc-css-system .kc-css-606785.kc_column {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
                float: none !important;
                clear: both !important;
            }

            div.kc_row {
                display: block
            }
            
            body.kc-css-system .kc-wrap-columns {
                flex-direction: column !important;
                display: flex !important;
            }
        }

        .nav-pills {
            line-height: 45px;
            margin: 0;
            padding: 0
        }

        .nav-pills:after,
        .nav-pills:before {
            display: table;
            line-height: 0;
            content: ""
        }

        .nav-pills:after {
            clear: both
        }

        .nav-pills>li {
            float: left
        }

        .nav-pills>li>a {
            padding: 0 30px;
            text-decoration: none;
            outline: 0;
            display: block;
            line-height: 50px;
            color: #6b6b6b
        }

        .kc_button {
            padding: 10px 20px;
            color: #FFF;
            display: inline-block
        }

        .kc_button {
            white-space: nowrap;
            text-decoration: none;
            font-size: 14px;
            background-color: #1E73BE
        }

        .kc-owl-post-carousel .in-post-content {
            text-align: justify
        }

        .kc_single_image {
            position: relative
        }

        .kc-read-more {
            float: left;
            padding: 7px 30px;
            border: 1px solid #e4e4e4;
            border-radius: 30px;
            font-weight: 600;
            color: #505050
        }

        .kc_single_image {
            max-width: 100%;
            width: 100%;
            line-height: 0
        }

        .kc_single_image>a {
            width: 100%;
            float: left;
            position: relative
        }

        .kc-title-wrap {
            width: 100%
        }

        @media screen and (min-width:768px) {
            .kc-animated {
                opacity: 0
            }
        }

        @font-face {
            font-family: 'FontAwesome';
            src: url({{ asset('fonts/fa-solid-900.eot') }});
            src: url({{ asset('fonts/fa-solid-900.eot?#iefix') }}) format("embedded-opentype"),
                url({{ asset('fonts/fa-solid-900.woff2') }}) format("woff2"),
                url({{ asset('fonts/fa-solid-900.woff') }}) format("woff"),
                url({{ asset('fonts/fa-solid-900.ttf') }}) format("truetype"),
                url({{ asset('fonts/fa-solid-900.svg#fontawesome') }}) format("svg");
            font-weight: 400;
            font-style: normal
        }

        [class^="fa-"],
        [class*=" fa-"],
        [class^="fa-"]:before,
        [class*=" fa-"]:before {
            font-family: 'FontAwesome';
            font-style: inherit;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            text-rendering: auto;
            speak: none;
            font-weight: 400
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9"
        }

        .fa-exclamation-circle:before {
            content: "\f06a"
        }

        .fa-info-circle:before {
            content: "\f05a"
        }

        .fa-plane:before {
            content: "\f072"
        }

        .fa-road:before {
            content: "\f018"
        }

        .owl-carousel {
            display: none;
            position: relative;
            width: 100%;
            -ms-touch-action: pan-y
        }

        img {
            max-width: 100%;
            height: auto
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        nav,
        section {
            display: block
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        h1,
        h3,
        h4,
        h5 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ul ul {
            margin-bottom: 0
        }

        b {
            font-weight: bolder
        }

        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent
        }

        img {
            vertical-align: middle;
            border-style: none
        }

        table {
            border-collapse: collapse
        }

        label {
            display: inline-block;
            margin-bottom: .5rem
        }

        button {
            border-radius: 0
        }

        button,
        input,
        select {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        <style id="rocket-critical-css">.wp-block-media-text .wp-block-media-text__media {
            grid-area: media-text-media;
            margin: 0
        }

        .wp-block-media-text .wp-block-media-text__content {
            word-break: break-word;
            grid-area: media-text-content;
            padding: 0 8%
        }

        ul.dc_datxe {
            margin: 0;
            padding: 0 15px;
            background: #FFF;
            display: block;
            clear: both
        }

        @media only screen and (max-width:767px) {
            ul.dc_datxe {
                height: auto !important
            }
        }

        nav#wpfm-floating-menu-nav {
            z-index: 999999
        }

        .wpfm-icon-block img {
            padding: 3px;
            display: block
        }

        .wpfm-menu-nav ul {
            margin: 0;
            list-style: none;
            z-index: 99999
        }

        .wpfm-position-bottom-left ul {
            left: 0
        }

        .wpfm-position-bottom-left ul {
            bottom: 7%;
            position: fixed
        }

        .wpfm-icon-block.wpfm-image-icon-block {
            width: 35px
        }

        .wpfm-menu-wrapper ul {
            -webkit-margin-before: 0em;
            -webkit-margin-after: 0em;
            -webkit-margin-start: 0;
            -webkit-margin-end: 0;
            -webkit-padding-start: 0
        }

        .wpfm-template-11 .wpfm-menu-nav ul {
            position: fixed;
            bottom: 10px;
            background: #ededed;
            padding: 5px 0;
            -webkit-border-radius: 15px;
            border-radius: 15px
        }

        .wpfm-template-11 .wpfm-position-bottom-left ul {
            left: 25px
        }

        .wpfm-template-11 .wpfm-menu-nav ul li {
            display: inline-block;
            padding: 0 20px;
            position: relative
        }

        .wpfm-template-11 .wpfm-menu-nav ul li a {
            outline: 0
        }

        .wpfm-template-11 .wpfm-menu-nav ul li a span {
            color: #ada7a6;
            display: inline-block;
            vertical-align: middle;
            line-height: 1
        }

        *,
        .kc-col-container,
        .kc-container,
        .kc-elm {
            box-sizing: border-box
        }

        div {
            display: block
        }

        .kc-elm {
            float: left;
            width: 100%
        }

        div.kc_col-of-5 {
            width: 20%;
            float: left
        }

        .kc_col-sm-3 {
            width: 25%
        }

        .kc_col-sm-5 {
            width: 41.6667%
        }

        .kc_col-sm-6 {
            width: 50%
        }

        .kc_col-sm-7 {
            width: 58.3333%
        }

        .kc_col-sm-12 {
            width: 100%
        }

        .kc-container {
            width: 100%;
            max-width: 1170px;
            margin: 0 auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .kc_single_image img {
            max-width: 100%;
            display: inline-block
        }

        .kc_row:not(.kc_row_inner) {
            clear: both;
            float: left;
            width: 100%
        }

        .kc-row-container.kc-container .kc-wrap-columns,
        .kc_row_inner {
            margin-left: -15px;
            margin-right: -15px;
            clear: both
        }

        .kc_row.kc_row_inner {
            width: calc(100% + 30px)
        }

        .kc_column,
        .kc_column_inner {
            min-height: 1px;
            position: relative;
            padding-right: 15px;
            padding-left: 15px;
            float: left
        }

        .kc_column>.kc-col-container,
        .kc_column_inner>.kc-col-inner-container {
            height: 100%
        }

        .kingcomposer div.kc_column,
        .kingcomposer div.kc_column_inner {
            clear: none
        }

        .kc_clfw {
            width: 100% !important;
            clear: both !important;
            display: block !important;
            height: 0 !important;
            padding: 0 !important;
            margin: 0 !important
        }

        .kc-col-container {
            clear: both;
            display: block;
            width: 100%
        }

        .kc_text_block {
            display: inline-block;
            clear: both;
            width: 100%
        }

        @media screen and (min-width:992px) {

            .kc-row-container .kc-wrap-columns,
            .kc_row_inner {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                width: 100%;
                flex-wrap: wrap
            }

            .kc-row-container.kc-container .kc-wrap-columns,
            .kc_row_inner {
                width: calc(100% + 30px)
            }
        }
        
        /* Override for mobile - must be after desktop styles */
        @media screen and (max-width:767px) {
            .kc-row-container .kc-wrap-columns,
            .kc_row_inner {
                flex-direction: column !important;
                flex-wrap: nowrap !important;
            }
        }

        @media screen and (max-width:767px) {

            body.kc-css-system .kc_column,
            body.kc-css-system .kc_column_inner {
                width: 100% !important;
                max-width: 100% !important;
                float: none !important;
                clear: both !important;
            }
            
            body.kc-css-system .kc_col-sm-6,
            .kc_col-sm-6 {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
                float: none !important;
                clear: both !important;
            }
            
            body.kc-css-system .kc-css-830723.kc_column,
            body.kc-css-system .kc-css-606785.kc_column {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
                float: none !important;
                clear: both !important;
            }

            div.kc_row {
                display: block
            }
            
            body.kc-css-system .kc-wrap-columns {
                flex-direction: column !important;
                display: flex !important;
            }
        }

        .nav-pills {
            line-height: 45px;
            margin: 0;
            padding: 0
        }

        .nav-pills:after,
        .nav-pills:before {
            display: table;
            line-height: 0;
            content: ""
        }

        .nav-pills:after {
            clear: both
        }

        .nav-pills>li {
            float: left
        }

        .nav-pills>li>a {
            padding: 0 30px;
            text-decoration: none;
            outline: 0;
            display: block;
            line-height: 50px;
            color: #6b6b6b
        }

        .kc_button {
            padding: 10px 20px;
            color: #FFF;
            display: inline-block
        }

        .kc_button {
            white-space: nowrap;
            text-decoration: none;
            font-size: 14px;
            background-color: #1E73BE
        }

        .kc-owl-post-carousel .in-post-content {
            text-align: justify
        }

        .kc_single_image {
            position: relative
        }

        .kc-read-more {
            float: left;
            padding: 7px 30px;
            border: 1px solid #e4e4e4;
            border-radius: 30px;
            font-weight: 600;
            color: #505050
        }

        .kc_single_image {
            max-width: 100%;
            width: 100%;
            line-height: 0
        }

        .kc_single_image>a {
            width: 100%;
            float: left;
            position: relative
        }

        .kc-title-wrap {
            width: 100%
        }

        @media screen and (min-width:768px) {
            .kc-animated {
                opacity: 0
            }
        }

        @font-face {
            font-family: 'FontAwesome';
            src: url({{ asset('fonts/fa-solid-900.eot') }});
            src: url({{ asset('fonts/fa-solid-900.eot?#iefix') }}) format("embedded-opentype"),
                url({{ asset('fonts/fa-solid-900.woff2') }}) format("woff2"),
                url({{ asset('fonts/fa-solid-900.woff') }}) format("woff"),
                url({{ asset('fonts/fa-solid-900.ttf') }}) format("truetype"),
                url({{ asset('fonts/fa-solid-900.svg#fontawesome') }}) format("svg");
            font-weight: 400;
            font-style: normal
        }

        [class^="fa-"],
        [class*=" fa-"],
        [class^="fa-"]:before,
        [class*=" fa-"]:before {
            font-family: 'FontAwesome';
            font-style: inherit;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: inline-block;
            text-rendering: auto;
            speak: none;
            font-weight: 400
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9"
        }

        .fa-exclamation-circle:before {
            content: "\f06a"
        }

        .fa-info-circle:before {
            content: "\f05a"
        }

        .fa-plane:before {
            content: "\f072"
        }

        .fa-road:before {
            content: "\f018"
        }

        .owl-carousel {
            display: none;
            position: relative;
            width: 100%;
            -ms-touch-action: pan-y
        }

        img {
            max-width: 100%;
            height: auto
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        nav,
        section {
            display: block
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        h1,
        h3,
        h4,
        h5 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ul ul {
            margin-bottom: 0
        }

        b {
            font-weight: bolder
        }

        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent
        }

        img {
            vertical-align: middle;
            border-style: none
        }

        table {
            border-collapse: collapse
        }

        label {
            display: inline-block;
            margin-bottom: .5rem
        }

        button {
            border-radius: 0
        }

        button,
        input,
        select {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        select {
            word-wrap: normal
        }

        [type=button],
        button {
            -webkit-appearance: button
        }

        [type=button]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        input[type=checkbox] {
            box-sizing: border-box;
            padding: 0
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        h1,
        h3,
        h4,
        h5 {
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2
        }

        h1 {
            font-size: 2.5rem
        }

        h3 {
            font-size: 1.75rem
        }

        h4 {
            font-size: 1.5rem
        }

        h5 {
            font-size: 1.25rem
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-group {
            margin-bottom: 1rem
        }

        .form-check-input {
            position: absolute;
            margin-top: .3rem;
            margin-left: -1.25rem
        }

        .form-check-label {
            margin-bottom: 0
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-secondary {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .fade:not(.show) {
            opacity: 0
        }

        .input-group {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%
        }

        .input-group>.form-control {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            margin-bottom: 0
        }

        .nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav-link {
            display: block;
            padding: .5rem 1rem
        }

        .nav-pills .nav-link {
            border-radius: .25rem
        }

        .nav-pills .nav-link.active {
            color: #fff;
            background-color: #007bff
        }

        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px)
        }

        .modal-dialog-centered {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - 1rem)
        }

        .modal-dialog-centered::before {
            display: block;
            height: calc(100vh - 1rem);
            content: ""
        }

        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0
        }

        .modal-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: .3rem;
            border-top-right-radius: .3rem
        }

        .modal-header .close {
            padding: 1rem 1rem;
            margin: -1rem -1rem -1rem auto
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .modal-body {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem
        }

        .modal-footer {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 1rem;
            border-top: 1px solid #dee2e6;
            border-bottom-right-radius: .3rem;
            border-bottom-left-radius: .3rem
        }

        .modal-footer>:not(:first-child) {
            margin-left: .25rem
        }

        .modal-footer>:not(:last-child) {
            margin-right: .25rem
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem)
            }

            .modal-dialog-centered::before {
                height: calc(100vh - 3.5rem)
            }
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .text-center {
            text-align: center !important
        }

        a {
            color: #EC2029
        }

        @font-face {
            font-family: 'Bebeboo';
            src: url({{ asset('fonts/Bebeboo-Regular.ttf') }})
        }

        @font-face {
            font-family: 'Bebeboo-SemiBold';
            src: url({{ asset('fonts/Bebeboo-SemiBold.ttf') }})
        }

        .close {
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .5
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -25%);
            -ms-transform: translate(0, -25%);
            transform: translate(0, -25%)
        }

        .modal-dialog-centered {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - (0.5rem * 2))
        }

        .modal-content {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0
        }

        .modal-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 1px solid #e9ecef;
            border-top-left-radius: .3rem;
            border-top-right-radius: .3rem
        }

        .modal-header .close {
            padding: 1rem;
            margin: -1rem -1rem -1rem auto
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem
        }

        .modal-footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 1rem;
            border-top: 1px solid #e9ecef
        }

        .modal-footer>:not(:first-child) {
            margin-left: .25rem
        }

        .modal-footer>:not(:last-child) {
            margin-right: .25rem
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto
            }

            .modal-dialog-centered {
                min-height: calc(100% - (1.75rem * 2))
            }
        }

        h1,
        h3,
        h4,
        h5 {
            font-family: 'Bebeboo-SemiBold';
            font-weight: 400
        }

        .regular {
            font-family: 'Bebeboo'
        }

        img {
            max-width: 100%;
            height: auto
        }

        .alignleft {
            float: left;
            display: inline;
            margin-right: 20px;
            margin-top: 0
        }

        img.size-full {
            max-width: 100%;
            margin-bottom: 30px
        }

        img[class*="align"] {
            height: auto
        }

        p:last-child {
            margin-bottom: 0
        }

        .kc-container {
            max-width: 1200px
        }

        .flex {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .navbar-toggler {
            padding: 0
        }

        .navbar-toggler img {
            margin-bottom: 0;
            margin-top: -6px
        }

        .home_kmai .home_kmai_slider {
            width: calc(100% - 165px);
            float: left
        }

        .home_slider {
            background: #FFF
        }

        .nav_button {
            position: absolute;
            width: 60px;
            height: 60px;
            right: 0;
            top: -15px;
            border-radius: 0;
            z-index: 999
        }

        @media only screen and (min-width:992px) {
            .dc_nav_top ul {
                margin: 0;
                padding: 0;
                display: flex;
                flex-flow: wrap;
                align-items: center;
                justify-content: center
            }

            .dc_nav_top ul li {
                list-style: none;
                position: relative
            }

            .dc_nav_top ul li a {
                color: #FFF;
                padding: 0 25px;
                text-decoration: none;
                display: block;
                line-height: 40px;
                white-space: nowrap
            }

            .dc_nav_top ul li ul {
                visibility: hidden;
                opacity: 0;
                height: 0;
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 999;
                background: #EC2029;
                font-size: 16px
            }

            .dc_nav_top ul li ul li {
                display: block
            }

            .dc_nav_top ul li.current-menu-item a {
                background: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
            }

            .dc_nav_top ul li.menu-item-has-children a::after {
                content: "";
                display: inline-block;
                margin-left: 5px;
                position: relative;
                top: -2px;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 5px 5px 0 5px;
                border-color: #fff transparent transparent transparent
            }

            .dc_nav_top ul li.menu-item-has-children ul li a::after {
                display: none
            }
        }

        @media only screen and (max-width:991px) {
            .kc_row:not(.kc_row_inner) {
                padding-left: 15px;
                padding-right: 15px
            }

            .dc_menu_top {
                position: relative;
                z-index: 99
            }

            #dc_menu_pc {
                position: fixed;
                width: 100%;
                height: calc(100vh - 60px);
                top: 60px;
                left: 0;
                background: #0f589d;
                overflow-y: scroll
            }

            .dc_header_menu {
                padding: 0
            }

            .dc_menu_top ul.menu {
                margin: 0;
                padding: 0;
                font-size: 16px
            }

            .dc_menu_top ul.menu li {
                list-style: none;
                padding: 0 15px;
                position: relative;
                clear: both
            }

            .dc_menu_top ul.menu li.menu_icon {
                padding-left: 45px
            }

            .dc_menu_top ul.menu li.menu_icon:before {
                content: '\f015';
                font-family: 'FontAwesome';
                width: 15px;
                padding: 10px 0;
                position: absolute;
                left: 15px;
                top: -5px;
                color: #FFF
            }

            .dc_menu_top ul.menu li.menu_dichvu:before {
                content: '\f124'
            }

            .dc_menu_top ul.menu li.menu_loaixe:before {
                content: '\f1b9'
            }

            .dc_menu_top ul.menu li.menu_banggia:before {
                content: '\f15c'
            }

            .dc_menu_top ul.menu li.menu_kmai:before {
                content: '\f02e'
            }

            .dc_menu_top ul.menu li.menu_news:before {
                content: '\f1ea'
            }

            .dc_menu_top ul.menu li.menu_about:before {
                content: '\f1ad'
            }

            .dc_menu_top ul.menu li.menu_contact:before {
                content: '\f2a0'
            }

            .dc_menu_top ul.menu li a {
                color: #FFF;
                display: block;
                padding: 5px 0
            }

            .dc_menu_top ul.menu li.menu-item-has-children {
                position: relative
            }

            .dc_menu_top ul.menu li.menu-item-has-children:after {
                content: "";
                right: 15px;
                display: block;
                position: absolute;
                top: 15px;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 8px 5px 0 5px;
                border-color: #fff transparent transparent transparent
            }

            .dc_menu_top ul.menu li.menu-item-has-children a {
                width: calc(100% - 40px)
            }

            .dc_menu_top ul.menu li.menu-item-has-children a:after {
                display: none
            }

            .dc_menu_top ul.menu li ul {
                margin: 0;
                padding: 0;
                display: none
            }

            .dc_menu_top ul.menu li.current-menu-item {
                background: #EC2029
            }

            .home_kmai .home_kmai_slider {
                width: 100%
            }

            .home_kmai .home_kmai_slider:after {
                display: none
            }

            .mhome_chatonline img {
                margin-bottom: 0;
                margin-right: 15px
            }

            .mhome_chatonline hr {
                border-top: 1px solid transparent;
                display: block;
                clear: both;
                margin-top: 5px;
                margin-bottom: 5px
            }
        }

        #home_map .modal-dialog {
            min-width: 80% !important
        }

        #home_map #map {
            padding: 15px 15px 0 15px !important;
            width: 100% !important;
            min-height: 600px !important;
            margin: auto
        }

        .hidden {
            display: none !important;
            visibility: hidden !important
        }

        .call-floating-menu,
        .zalo-floating-menu,
        .mail-floating-menu,
        .messenger-floating-menu {
            border-radius: 50%;
            box-shadow: 0 3px 10px #888
        }

        .call-floating-menu,
        .zalo-floating-menu {
            background-color: #1e73be
        }

        .mail-floating-menu {
            background-color: #f60
        }

        .messenger-floating-menu {
            background-color: #e60f1e
        }

        .call-floating-menu .wpfm-icon-block img,
        .zalo-floating-menu .wpfm-icon-block img,
        .mail-floating-menu .wpfm-icon-block img,
        .messenger-floating-menu .wpfm-icon-block img {
            padding: 6px
        }
    </style>
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Concert%20One%7CPlay%7CRoboto%3A100italic%2C100%2C300italic%2C300%2C400italic%2C400%2C500italic%2C500%2C700italic%2C700%2C900italic%2C900&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <link rel="preload" href="{{ asset('cache/min/1/a63dc7665cb0edb3c77d6832737d98c9.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'" data-minify="1" />
    @hasSection('seo')
        @yield('seo')
    @else
        <meta name="description" content="{{ $config->where('key', 'description')->first()->value }}" />
        <link rel="canonical" href="{{ url()->current() }}" />
        <meta name="robots" content="index,follow" />
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $config->where('key', 'title')->first()->value }}" />
        <meta property="og:description" content="{{ $config->where('key', 'description')->first()->value }}" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:site_name" content="{{ $config->where('key', 'title')->first()->value }}" />
        <meta property="og:image" content="{{ asset($config->where('key', 'logo')->first()->value) }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="{{ $config->where('key', 'description')->first()->value }}" />
        <meta name="twitter:title" content="{{ $config->where('key', 'title')->first()->value }}" />
        <meta name="twitter:image" content="{{ asset($config->where('key', 'logo')->first()->value) }}" />
        <script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>
        {
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebSite",
                    "@id": "{{ url('/') }}/#website",
                    "url": "{{ url('/') }}/",
                    "name": "{{ $config->where('key', 'title')->first()->value }}",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "{{ url('/') }}/?s={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                },
                {
                    "@type": "ImageObject",
                    "@id": "{{ url('/') }}/#primaryimage",
                    "url": "{{ asset($config->where('key', 'logo')->first()->value) }}",
                    "width": 404,
                    "height": 90
                },
                {
                    "@type": "WebPage",
                    "@id": "{{ url('/') }}/#webpage",
                    "url": "{{ url('/') }}/",
                    "inLanguage": "vi-VN",
                    "name": "{{ $config->where('key', 'title')->first()->value }}",
                    "isPartOf": {"@id": "{{ url('/') }}/#website"},
                    "primaryImageOfPage": {"@id": "{{ url('/') }}/#primaryimage"},
                    "datePublished": "2018-03-12T11:14:19+00:00",
                    "dateModified": "2025-01-12T11:26:14+00:00",
                    "description": "{{ $config->where('key', 'description')->first()->value }}"
                },
                @php
                    $orgName = $config->where('key', 'name')->first()->value ?? $config->where('key', 'title')->first()->value;
                    $orgLogo = asset($config->where('key', 'logo')->first()->value);
                    $orgPhone = $config->where('key', 'phone')->first()->value ?? '';
                    $orgEmail = $config->where('key', 'email')->first()->value ?? '';
                    $orgAddress = $config->where('key', 'address')->first()->value ?? '';
                    $orgFacebook = $config->where('key', 'facebook')->first()->value ?? '';
                    $orgZalo = $config->where('key', 'zalo')->first()->value ?? '';
                    $orgMessenger = $config->where('key', 'messenger')->first()->value ?? '';
                    $sameAs = array_filter([$orgFacebook, $orgZalo, $orgMessenger]);
                @endphp
                {
                    "@type": "Organization",
                    "@id": "{{ url('/') }}/#organization",
                    "name": "{{ $orgName }}",
                    "url": "{{ url('/') }}",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "{{ $orgLogo }}"
                    },
                    @if($orgPhone)
                    "contactPoint": {
                        "@type": "ContactPoint",
                        "telephone": "{{ $orgPhone }}",
                        "contactType": "customer service",
                        "areaServed": "VN",
                        "availableLanguage": "Vietnamese"
                    },
                    @endif
                    @if(count($sameAs) > 0)
                    "sameAs": [
                        @foreach($sameAs as $index => $url)
                        "{{ $url }}"@if(!$loop->last),@endif
                        @endforeach
                    ]
                    @endif
                },
                {
                    "@type": "LocalBusiness",
                    "@id": "{{ url('/') }}/#localbusiness",
                    "name": "{{ $orgName }}",
                    "image": "{{ $orgLogo }}",
                    @if($orgAddress)
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Hà Nội",
                        "addressCountry": "VN",
                        "streetAddress": "{{ $orgAddress }}"
                    },
                    @endif
                    @if($orgPhone)
                    "telephone": "{{ $orgPhone }}",
                    @endif
                    @if($orgEmail)
                    "email": "{{ $orgEmail }}",
                    @endif
                    "priceRange": "$$",
                    "areaServed": {
                        "@type": "City",
                        "name": "Hà Nội"
                    },
                    "serviceType": "Taxi Service"
                }
            ]
        }
        </script>
    @endif
    <link rel='dns-prefetch' href='//ajax.googleapis.com' />
    <link rel='https://api.w.org/' href='{{ url('/') }}/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ url('/') }}/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="{{ url('/') }}/wp-includes/wlwmanifest.xml" />
    <link rel='shortlink' href='{{ url('/') }}/' />
    <meta property="fb:app_id" content="" />
    <link rel="icon" href="{{ asset('uploads/2018/08/cropped-faicon-2-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('uploads/2018/08/cropped-faicon-2-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('uploads/2018/08/cropped-faicon-2-180x180.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('uploads/2018/08/cropped-faicon-2-270x270.png') }}" />
    <style type="text/css" id="wp-custom-css">
        body {
            margin: 0;
            font-family: "Bebeboo", sans-serif !important;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #414141;
            text-align: left;
            background-color: #fff
        }

        [class^="icon-"],
        [class*=" icon-"] {
            font-family: 'icomoon' !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        a {
            color: #EC2029;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        p {
            margin: 0 0 10px 0
        }

        p:last-child {
            margin: 0
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        hr {
            clear: both
        }

        .current-menu-parent>a {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
        }

        .navbar-nav>.active>a {
            background: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
        }

        .dc_table table {
            border: 1px solid #cacaca;
            border-bottom: 0
        }

        .dc_table table tr:first-child {
            background: #EC2029;
            color: #FFF
        }

        .dc_table table tr td {
            border-right: 1px solid #cacaca;
            border-bottom: 1px solid #cacaca
        }

        .dc_table table tr td:last-child{border-right:0}.nav_button{right:-15px!important}input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        input[type="number"] {
            -moz-appearance: textfield
        }

        .cf7_lienhe .dien_thoai {
            padding: 0
        }

        .form-control::-webkit-input-placeholder {
            color: #000
        }

        .form-control:-moz-placeholder {
            color: #000;
            opacity: 1
        }

        .form-control::-moz-placeholder {
            color: #000;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #000
        }

        .form-control::-ms-input-placeholder {
            color: #000
        }

        ::placeholder {
            color: #000
        }

        .chieu_di,
        .chieu_ve {
            width: calc(50% - 100px) !important
        }

        .dc_vat {
            width: 100px !important
        }

        .xem_ban_do {
            cursor: pointer
        }

        .datetimepicker.datetimepicker-dropdown-bottom-right.dropdown-menu {
            padding: 10px
        }

        .kc-css-system .datetimepicker td,
        .kc-css-system .datetimepicker th {
            width: 30px;
            height: 30px
        }

        .datetimepicker th.prev,
        .datetimepicker th.next {
            background: none
        }

        .datetimepicker th.prev:before {
            content: '⇦';
            color: #EC2029
        }

        .datetimepicker th.next:before {
            content: '⇨';
            color: #EC2029
        }

        .datetimepicker table {
            width: 100%;
            min-width: 200px
        }

        .widget_form .nav-pills:before,
        .widget_form .nav-pills:after {
            display: none !important
        }

        .single_facebook,
        .single_related {
            display: none !important
        }

        .vnt_title {
            position: relative
        }

        .vnt_link {
            position: absolute;
            z-index: 9;
            width: 100%;
            height: 100%;
            display: block;
            top: 0;
            left: 0
        }

        @media only screen and (max-width:991px) {
            #dc_menu_mobile .collapse.show {
                left: 0 !important
            }

            .mcall_btn i {
                vertical-align: middle;
                font-size: 90%
            }
        }

        @media only screen and (max-width:767px) {
            .dc_table_m {
                margin-bottom: 15px
            }

            .dc_table_m tr:first-child {
                background: #EC2029;
                color: #fff
            }

            .dc_table_m table {
                background-color: #efefef
            }

            .wpfm-floating-wh-wrapper {
                display: block
            }

            .wpfm-floating-wh-wrapper .wpfm-menu-nav ul {
                margin: 0;
                padding: 0;
                left: 5px;
                bottom: 26px;
                display: flex;
                justify-content: flex-end
            }

            .wpfm-floating-wh-wrapper .wpfm-menu-nav ul li {
                padding: 5px;
                margin-left: 15px
            }

            .wpfm-floating-wh-wrapper .wpfm-menu-nav ul li:last-child {
                margin-right: 0
            }

            .wpfm-icon-block.wpfm-image-icon-block {
                width: auto
            }

            .wpfm-icon-block img {
                height: auto
            }
        }

        body.dc_tracking .wpfm-floating-wh-wrapper .wpfm-menu-nav ul li {
            padding: 0;
            margin-left: 0;
            margin-right: 0;
            background: transparent;
            box-shadow: 0 0 0
        }

        body.dc_tracking .wpfm-icon-block img {
            width: auto;
            padding: 0;
            height: 40px
        }

        @media only screen and (max-width:767px) {
            body.error404 .wpfm-floating-wh-wrapper .wpfm-menu-nav ul li {
                padding: 5px
            }

            #mb_datxe #rotate_btn {
                top: 90px
            }
        }
    </style>
    <style type="text/css" id="kc-css-general">
        .kc-off-notice {
            display: inline-block !important
        }

        .kc-container {
            max-width: 1200px
        }
    </style>
    <style type="text/css" id="kc-css-render">
        @media only screen and (min-width:1000px) and (max-width:5000px) {
            body.kc-css-system .kc-css-500672 {
                width: 60.32%
            }

            body.kc-css-system .kc-css-902550 {
                width: 39.67%
            }

            body.kc-css-system .kc-css-660945 {
                width: 20.18%
            }

            body.kc-css-system .kc-css-637520 {
                width: 37%
            }

            body.kc-css-system .kc-css-331137 {
                width: 24.64%
            }

            body.kc-css-system .kc-css-489636 {
                width: 18.14%
            }

            body.kc-css-system .kc-css-720684 {
                width: 50%
            }

            body.kc-css-system .kc-css-221841 {
                width: 50%
            }

            body.kc-css-system .kc-css-340647 {
                width: 50%
            }

            body.kc-css-system .kc-css-698619 {
                width: 50%
            }

            body.kc-css-system .kc-css-830723 {
                width: 50.27%
            }

            body.kc-css-system .kc-css-606785 {
                width: 49.72%
            }
        }
        
        /* Override for mobile - must be after desktop styles */
        @media only screen and (max-width:767px) {
            body.kc-css-system .kc-css-830723,
            body.kc-css-system .kc-css-606785 {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
            }

            body.kc-css-system .kc-css-962165 {
                width: 50%
            }

            body.kc-css-system .kc-css-210475 {
                width: 50%
            }

            body.kc-css-system .kc-css-812800 {
                width: 50%
            }

            body.kc-css-system .kc-css-108502 {
                width: 50%
            }

            body.kc-css-system .kc-css-466249 {
                width: 33.33%
            }

            body.kc-css-system .kc-css-205157 {
                width: 33.33%
            }

            body.kc-css-system .kc-css-29226 {
                width: 33.33%
            }

            body.kc-css-system .kc-css-236289 {
                width: 29.82%
            }

            body.kc-css-system .kc-css-947882 {
                width: 70.17%
            }
        }

        body.kc-css-system .kc-css-277686 {
            background: #f7f7f7
        }

        body.kc-css-system .kc-css-133714.kc_title,
        body.kc-css-system .kc-css-133714 .kc_title,
        body.kc-css-system .kc-css-133714 .kc_title a.kc_title_link {
            color: #414141;
            font-size: 14px;
            font-weight: 400;
            line-height: 30px;
            margin: 0 0 0 0
        }

        body.kc-css-system .kc-css-378675 {
            line-height: 16px;
            padding-top: 10px;
            padding-bottom: 10px;
            display: none
        }

        body.kc-css-system .kc-css-500672 {
            border-right: 1px solid #EC2029;
        }

        body.kc-css-system .kc-css-176438 .kc_button {
            color: #EC2029;
            background-color: rgba(255, 255, 255, 0);
            font-size: 20px;
            font-weight: 700;
            padding: 0 0 0 0;
            margin: 0 0 0 0
        }

        body.kc-css-system .kc-css-176438 .kc_button:hover {
            color: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
        }

        body.kc-css-system .kc-css-758892 .kc_button {
            color: #EC2029;
            background-color: rgba(255, 255, 255, 0);
            font-size: 20px;
            font-weight: 700;
            padding: 0 0 0 0;
            margin: 0 0 0 0
        }

        body.kc-css-system .kc-css-758892 .kc_button:hover {
            color: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
        }

        body.kc-css-system .kc-css-117587 img {
            width: 225px;
            height: 50px;
            max-width: 225px
        }

        body.kc-css-system .kc-css-117587 {
            margin-top: 25px;
            margin-bottom: 25px
        }

        body.kc-css-system .kc-css-331137 {
            margin-top: 20px
        }

        body.kc-css-system .kc-css-709621,
        body.kc-css-system .kc-css-709621 p {
            color: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
        }

        body.kc-css-system .kc-css-703953 .kc_button {
            color: #EC2029;
            background-color: rgba(255, 255, 255, 0);
            font-size: 30px;
            font-weight: 700;
            padding: 0 0 0 0;
            margin: 0 0 0 0
        }

        body.kc-css-system .kc-css-703953 .kc_button:hover {
            color: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
        }

        body.kc-css-system .kc-css-489636 {
            margin-top: 20px
        }

        body.kc-css-system .kc-css-412596,
        body.kc-css-system .kc-css-412596 p {
            color: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
        }

        body.kc-css-system .kc-css-517665 .kc_button {
            color: #EC2029;
            background-color: rgba(255, 255, 255, 0);
            font-size: 30px;
            font-weight: 700;
            padding: 0 0 0 0;
            margin: 0 0 0 0
        }

        body.kc-css-system .kc-css-517665 .kc_button:hover {
            color: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%)
        }

        body.kc-css-system .kc-css-994597 {
            background: #EC2029;
            display: none
        }

        body.kc-css-system .kc-css-50831 {
            padding-top: 15px;
            padding-bottom: 15px;
            height: 60px
        }

        body.kc-css-system .kc-css-711805,
        body.kc-css-system .kc-css-711805 p {
            text-align: right
        }

        /* Only apply red background to the nav container, not the entire NAV element */
        body.kc-css-system .kc-css-44176 .dc_nav_top {
            background: #EC2029
        }

        /* Remove red background from NAV element itself */
        body.kc-css-system .kc-css-44176 {
            background: transparent !important;
        }

        body.kc-css-system .kc-css-989966 {
            font-size: 18px
        }

        body.kc-css-system .kc-css-268160 {
            background: transparent url({{ asset('uploads/2018/11/nbc_banner_tiny.jpg') }}) center center/cover no-repeat scroll;
            padding-top: 20px;
            padding-bottom: 20px
        }

        body.kc-css-system .kc-css-828692 {
            background: #f7f7f7
        }

        body.kc-css-system .kc-css-563895 {
            .dc_xxmain acolor: red
        }

        body.kc-css-system .kc-css-766684 .kc-owl-post-carousel .owl-item .title a,
        body.kc-css-system .kc-css-766684 .kc-owl-post-carousel .caption a {
            color: #414141;
            text-transform: none
        }

        body.kc-css-system .kc-css-766684 .kc-owl-post-carousel .title a,
        body.kc-css-system .kc-css-766684 .kc-owl-post-carousel .caption a {
            font-size: 16px
        }

        body.kc-css-system .kc-css-766684 .read-more {
            color: linear-gradient(180deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.095) 100%);
            margin-top: 5px
        }

        body.kc-css-system .kc-css-121359 {
            padding-top: 30px;
            padding-bottom: 30px
        }

        body.kc-css-system .kc-css-238438.kc_title,
        body.kc-css-system .kc-css-238438 .kc_title,
        body.kc-css-system .kc-css-238438 .kc_title a.kc_title_link {
            color: #EC2029;
            font-size: 20px;
            text-transform: uppercase
        }

        body.kc-css-system .kc-css-238438 {
            display: block
        }

        body.kc-css-system .kc-css-5099 .divider_inner {
            border-color: #EC2029;
            border-style: solid;
            border-width: 1px
        }

        body.kc-css-system .kc-css-5099 {
            display: flex;
            margin-top: 10px;
            margin-bottom: 20px
        }

        body.kc-css-system .kc-css-724720 {
            border-bottom: 1px dashed #414141;
            ;
            display: block;
            padding-bottom: 0
        }

        body.kc-css-system .kc-css-724720 p {
            margin-bottom: 0
        }

        body.kc-css-system .kc-css-208875 {
            border-bottom: 1px dashed #414141;
            ;
            padding-top: 15px;
            padding-bottom: 0
        }

        body.kc-css-system .kc-css-528428 {
            border-bottom: 1px dashed #414141;
            ;
            display: block;
            padding-top: 15px
        }

        body.kc-css-system .kc-css-528428 p {
            margin-bottom: 15px;
            margin-left: 19px
        }

        body.kc-css-system .kc-css-653593 {
            display: block;
            padding-top: 15px
        }

        body.kc-css-system .kc-css-247956.kc_title,
        body.kc-css-system .kc-css-247956 .kc_title,
        body.kc-css-system .kc-css-247956 .kc_title a.kc_title_link {
            color: #EC2029;
            font-size: 20px;
            text-transform: uppercase
        }

        body.kc-css-system .kc-css-247956 {
            display: block
        }

        body.kc-css-system .kc-css-726804 .divider_inner {
            border-color: #EC2029;
            border-style: solid;
            border-width: 1px
        }

        body.kc-css-system .kc-css-726804 {
            display: flex;
            margin-top: 10px;
            margin-bottom: 20px
        }

        body.kc-css-system .kc-css-559676 {
            border-bottom: 1px dashed #414141;
            ;
            display: block;
            padding-bottom: 5px
        }

        body.kc-css-system .kc-css-261565 {
            border-bottom: 1px dashed #414141;
            ;
            display: block;
            padding-top: 15px;
            padding-bottom: 5px
        }

        body.kc-css-system .kc-css-844510 {
            border-bottom: 1px dashed #414141;
            ;
            display: block;
            padding-top: 15px;
            padding-bottom: 5px
        }

        body.kc-css-system .kc-css-790555 {
            display: block;
            padding-top: 15px
        }

        body.kc-css-system .kc-css-345558 {
            background: #f7f7f7;
            padding-top: 50px;
            padding-bottom: 3px
        }

        body.kc-css-system .kc-css-195830.kc_title,
        body.kc-css-system .kc-css-195830 .kc_title,
        body.kc-css-system .kc-css-195830 .kc_title a.kc_title_link {
            color: #EC2029;
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px
        }

        body.kc-css-system .kc-css-555566 {
            background: #f7f7f7;
            padding-bottom: 50px
        }

        body.kc-css-system .kc-css-448414 {
            background: #efefef;
            padding-top: 30px;
            padding-bottom: 30px
        }

        body.kc-css-system .kc-css-141527 {
            padding-right: 0;
            padding-left: 0
        }

        body.kc-css-system .kc-css-863199,
        body.kc-css-system .kc-css-863199 p {
            text-align: center
        }

        body.kc-css-system .kc-css-863199 {
            display: none
        }

        body.kc-css-system .kc-css-863199 p {
            margin-top: 15px;
            margin-bottom: 15px
        }

        body.kc-css-system .kc-css-190573,
        body.kc-css-system .kc-css-190573 p {
            text-align: center
        }

        body.kc-css-system .kc-css-190573 {
            display: none
        }

        body.kc-css-system .kc-css-996449,
        body.kc-css-system .kc-css-996449 p {
            text-align: center
        }

        body.kc-css-system .kc-css-996449 {
            display: none
        }

        body.kc-css-system .kc-css-996449 p {
            margin-top: 15px;
            margin-bottom: 15px
        }

        body.kc-css-system .kc-css-648707,
        body.kc-css-system .kc-css-648707 p {
            text-align: center
        }

        body.kc-css-system .kc-css-648707 {
            display: none
        }

        body.kc-css-system .kc-css-648707 p {
            margin-top: 15px;
            margin-bottom: 15px
        }

        body.kc-css-system .kc-css-422110 {
            display: none
        }

        body.kc-css-system .kc-css-109938 {
            padding-top: 30px;
            padding-bottom: 30px
        }

        body.kc-css-system .kc-css-797100 {
            display: none
        }

        body.kc-css-system .kc-css-304469 {
            padding-top: 30px;
            padding-bottom: 30px
        }

        body.kc-css-system .kc-css-962165 {
            width: 50%
        }

        body.kc-css-system .kc-css-210475 {
            width: 50%
        }

        body.kc-css-system .kc-css-196933 {
            padding-top: 50px;
            padding-bottom: 20px
        }

        body.kc-css-system .kc-css-775579 {
            color: #fff;
            background: transparent url({{ asset('uploads/2018/03/footer_tiny.png') }}) center center/cover no-repeat scroll;
            padding-top: 30px;
            padding-bottom: 30px;
            #dc_footer a color: #fff
        }

        body.kc-css-system .kc-css-662606 {
            color: #fff
        }

        body.kc-css-system .kc-css-876635,
        body.kc-css-system .kc-css-876635 p {
            color: #fff
        }

        body.kc-css-system .kc-css-125558 .divider_inner {
            border-color: #1e73be;
            border-style: solid
        }

        body.kc-css-system .kc-css-125558 {
            display: flex;
            margin-top: 20px;
            margin-bottom: 10x
        }

        body.kc-css-system .kc-css-652533,
        body.kc-css-system .kc-css-652533 p {
            color: #fff
        }

        body.kc-css-system .kc-css-831110,
        body.kc-css-system .kc-css-831110 p {
            color: #fff;
            text-align: right
        }

        body.kc-css-system .kc-css-352817 {
            background: #EC2029;
            display: none
        }

        body.kc-css-system .kc-css-378541,
        body.kc-css-system .kc-css-378541 p {
            color: #fff;
            text-align: center
        }

        @media only screen and (max-width:991px) {
            body.kc-css-system .kc-css-133714 {
                display: none
            }

            body.kc-css-system .kc-css-378675 {
                display: block
            }

            body.kc-css-system .kc-css-280488 {
                display: none
            }

            body.kc-css-system .kc-css-994597 {
                display: block
            }

            body.kc-css-system .kc-css-778181 img {
                height: 35px
            }

            body.kc-css-system .kc-css-44176 {
                display: none
            }

            body.kc-css-system .kc-css-340647 {
                width: 100%
            }

            body.kc-css-system .kc-css-698619 {
                display: none
            }

            body.kc-css-system .kc-css-828692 {
                display: none
            }

            body.kc-css-system .kc-css-121359 {
                display: none
            }

            body.kc-css-system .kc-css-345558 {
                display: none
            }

            body.kc-css-system .kc-css-555566 {
                display: none
            }

            body.kc-css-system .kc-css-422110 {
                display: block
            }

            body.kc-css-system .kc-css-109938,
            body.kc-css-system .kc-css-109938 p {
                text-align: center
            }

            body.kc-css-system .kc-css-797100 {
                margin-bottom: 20px;
                display: block
            }

            body.kc-css-system .kc-css-196933 {
                display: none
            }

            body.kc-css-system .kc-css-775579 {
                display: none
            }

            body.kc-css-system .kc-css-352817 {
                padding-top: 30px;
                padding-bottom: 80px;
                display: block
            }
        }

        @media only screen and (max-width:991px) {
            body.kc-css-system .kc-css-660945 {
                text-align: center;
                width: 33.33%
            }

            body.kc-css-system .kc-css-637520 {
                display: none
            }

            body.kc-css-system .kc-css-331137 {
                text-align: center;
                width: 33.33%
            }

            body.kc-css-system .kc-css-489636 {
                text-align: center;
                width: 33.33px
            }

            body.kc-css-system .kc-css-268160 {
                background: rgba(255, 255, 255, 0)
            }

            body.kc-css-system .kc-css-775579 {
                background: transparent url({{ asset('uploads/2018/03/footer_tiny-480x144.png') }}) center center/cover no-repeat scroll
            }
        }

        @media only screen and (max-width:767px) {
            body.kc-css-system .kc-css-133714 {
                display: none
            }

            body.kc-css-system .kc-css-378675 {
                display: none
            }

            body.kc-css-system .kc-css-500672 {
                width: 60%
            }

            body.kc-css-system .kc-css-902550 {
                width: 40%
            }

            body.kc-css-system .kc-css-280488 {
                display: none
            }

            body.kc-css-system .kc-css-660945 {
                width: 100%
            }

            body.kc-css-system .kc-css-331137 {
                width: 100%
            }

            body.kc-css-system .kc-css-489636 {
                width: 100%
            }

            body.kc-css-system .kc-css-994597 {
                display: block
            }

            body.kc-css-system .kc-css-720684 {
                width: 50%
            }

            body.kc-css-system .kc-css-221841 {
                width: 50%
            }

            body.kc-css-system .kc-css-44176 {
                background: #0f589d;
                display: none
            }

            body.kc-css-system .kc-css-404844 {
                padding-right: 0;
                padding-left: 0
            }

            body.kc-css-system .kc-css-268160 {
                padding: 0 0 0 0
            }

            body.kc-css-system .kc-css-340647 {
                padding: 0 0 0 0
            }

            body.kc-css-system .kc-css-698619 {
                display: none !important
            }

            body.kc-css-system .kc-css-828692 {
                display: none
            }

            body.kc-css-system .kc-css-121359 {
                display: block !important
            }

            body.kc-css-system .kc-css-345558 {
                background: #fff;
                margin-top: 30px;
                padding-top: 0
            }

            body.kc-css-system .kc-css-555566 {
                background: #fff;
                padding-top: 0;
                padding-bottom: 20px
            }

            body.kc-css-system .kc-css-858148 {
                padding-right: 30px;
                padding-left: 30px
            }

            body.kc-css-system .kc-css-863199 {
                display: block
            }

            body.kc-css-system .kc-css-863199 p {
                margin-bottom: 15px
            }

            body.kc-css-system .kc-css-190573 {
                display: block
            }

            body.kc-css-system .kc-css-190573 p {
                margin-bottom: 15px
            }

            body.kc-css-system .kc-css-996449 {
                display: block
            }

            body.kc-css-system .kc-css-648707 {
                display: block
            }

            body.kc-css-system .kc-css-422110 {
                background: #fff;
                border-top: 10px solid #efefef;
                border-bottom: 10px solid #efefef;
                ;
                display: block
            }

            body.kc-css-system .kc-css-109938,
            body.kc-css-system .kc-css-109938 p {
                text-align: left
            }

            body.kc-css-system .kc-css-797100 {
                background: #fff;
                padding-bottom: 30px;
                display: block
            }

            body.kc-css-system .kc-css-196933 {
                display: none !important
            }

            body.kc-css-system .kc-css-775579 {
                display: none !important
            }

            body.kc-css-system .kc-css-831110,
            body.kc-css-system .kc-css-831110 p {
                text-align: center
            }

            body.kc-css-system .kc-css-352817 {
                display: block !important
            }

            body.kc-css-system .kc-css-378541,
            body.kc-css-system .kc-css-378541 p {
                color: #fff;
                line-height: 30px;
                text-align: center
            }
        }

        @media only screen and (max-width:479px) {
            body.kc-css-system .kc-css-606785 {
                margin-top: 30px
            }
        }
        
        @media only screen and (max-width:767px) {
            body.kc-css-system .kc-css-830723,
            body.kc-css-system .kc-css-606785 {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
            }
            
            body.kc-css-system .kc-css-830723.kc_col-sm-6,
            body.kc-css-system .kc-css-606785.kc_col-sm-6 {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
            }
            
            body.kc-css-system .kc-css-606785 {
                margin-top: var(--space-lg);
            }
            
            /* Force single column layout */
            body.kc-css-system .kc-wrap-columns {
                flex-direction: column !important;
            }
            
            body.kc-css-system .kc-css-121359 .kc-wrap-columns {
                flex-direction: column !important;
            }
        }
    </style><noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important
            }
        </style>
    </noscript>
    <script>
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
        (function(w) {
            "use strict";
            if (!w.loadCSS) {
                w.loadCSS = function() {}
            }
            var rp = loadCSS.relpreload = {};
            rp.support = (function() {
                var ret;
                try {
                    ret = w.document.createElement("link").relList.supports("preload")
                } catch (e) {
                    ret = !1
                }
                return function() {
                    return ret
                }
            })();
            rp.bindMediaToggle = function(link) {
                var finalMedia = link.media || "all";

                function enableStylesheet() {
                    link.media = finalMedia
                }
                if (link.addEventListener) {
                    link.addEventListener("load", enableStylesheet)
                } else if (link.attachEvent) {
                    link.attachEvent("onload", enableStylesheet)
                }
                setTimeout(function() {
                    link.rel = "stylesheet";
                    link.media = "only x"
                });
                setTimeout(enableStylesheet, 3000)
            };
            rp.poly = function() {
                if (rp.support()) {
                    return
                }
                var links = w.document.getElementsByTagName("link");
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute(
                            "data-loadcss")) {
                        link.setAttribute("data-loadcss", !0);
                        rp.bindMediaToggle(link)
                    }
                }
            };
            if (!rp.support()) {
                rp.poly();
                var run = w.setInterval(rp.poly, 500);
                if (w.addEventListener) {
                    w.addEventListener("load", function() {
                        rp.poly();
                        w.clearInterval(run)
                    })
                } else if (w.attachEvent) {
                    w.attachEvent("onload", function() {
                        rp.poly();
                        w.clearInterval(run)
                    })
                }
            }
            if (typeof exports !== "undefined") {
                exports.loadCSS = loadCSS
            } else {
                w.loadCSS = loadCSS
            }
        }(typeof global !== "undefined" ? global : this))
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KMF5BRK');
    </script>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '177472966510612');
        fbq('track', 'PageView');
    </script> <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=177472966510612&ev=PageView&noscript=1" /></noscript> <noscript>
        <div class="statcounter"><a title="Web Analytics
    Made Easy - StatCounter" href="https://statcounter.com/"
                target="_blank"><img class="statcounter" src="https://c.statcounter.com/10578920/0/e2e7fabb/1/"
                    alt="Web Analytics Made Easy -
    StatCounter"></a></div>
    </noscript>
</head>
