<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://www.aasabie.com/storage/app/public/company/2023-06-18-648e8ec2b2b87.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://www.aasabie.com/storage/app/public/company/2023-06-18-648e8ec2b2b87.png">

    <link rel="stylesheet" media="screen"
        href="https://www.aasabie.com/public/assets/front-end/vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen"
        href="https://www.aasabie.com/public/assets/front-end/vendor/tiny-slider/dist/tiny-slider.css" />
    <link rel="stylesheet" media="screen"
        href="https://www.aasabie.com/public/assets/front-end/vendor/drift-zoom/dist/drift-basic.min.css" />
    <link rel="stylesheet" media="screen"
        href="https://www.aasabie.com/public/assets/front-end/vendor/lightgallery.js/dist/css/lightgallery.min.css" />
    <link rel="stylesheet" href="https://www.aasabie.com/public/assets/back-end/css/toastr.css" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="https://www.aasabie.com/public/assets/front-end/css/theme.min.css">
    <link rel="stylesheet" media="screen" href="https://www.aasabie.com/public/assets/front-end/css/slick.css">
    <link rel="stylesheet" media="screen"
        href="https://www.aasabie.com/public/assets/front-end/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://www.aasabie.com/public/assets/back-end/css/toastr.css" />
    <link rel="stylesheet" href="https://www.aasabie.com/public/assets/front-end/css/master.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Titillium+Web:wght@400;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://www.aasabie.com/public/css/lightbox.css">
    <link rel="stylesheet" href="https://www.aasabie.com/public/assets/back-end/vendor/icon-set/style.css">
    <style>
        .password-toggle-btn .custom-control-input:checked~.password-toggle-indicator {
            color: #4f409c;
        }

        .for-no-account {
            margin: auto;
            text-align: center;
        }
    </style>

    <style>
        .input-icons i {
            /* position: absolute; */
            cursor: pointer;
        }

        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }

        .icon {
            padding: 9% 0 0 0;
            min-width: 40px;
        }

        .input-field {
            width: 94%;
            padding: 10px 0 10px 10px;
            text-align: center;
            border-right-style: none;
        }
    </style>

    <link rel="stylesheet" href="https://www.aasabie.com/public/assets/front-end/css/home.css" />
    <link rel="stylesheet" href="https://www.aasabie.com/public/assets/front-end/css/responsive1.css" />



    <meta name="_token" content="V66PzBn9km396MetvqNhAvhZPVqXhVARKZR2Cu2W">

    <style>
        body {
            background-color: #ffffff;
            /*background-color: #f7f8fa94;*/
        }

        .rtl {
            direction: ltr;
        }

        .password-toggle-btn .password-toggle-indicator:hover {
            color: #4f409c;
        }

        .password-toggle-btn .custom-control-input:checked~.password-toggle-indicator {
            color: #88a7bf;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #4f409c;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0)
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #88a7bf;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0)
        }

        .topbar a {
            color: black !important;
        }

        .navbar-light .navbar-tool-icon-box {
            color: #4f409c;
        }

        .search_button {
            background-color: #4f409c;
            border: none;
        }

        .nav-link {
            color: white !important;
        }

        .navbar-stuck-menu {
            background-color: #4f409c;
            min-height: 0;
            padding-top: 0;
            padding-bottom: 0;
        }

        .mega-nav {
            background: #f2583b;
            color: #fff;
            position: relative;
            margin-top: 0px;
            line-height: 24px;
            width: 304px;
            border-radius: 0px;
        }

        .mega-nav .nav-item .nav-link {
            padding-top: 11px !important;
            /*color: #4f409c !important;*/
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            padding-left: 20px !important;
            text-transform: uppercase;
        }

        .nav-item .dropdown-toggle::after {
            margin-left: 20px !important;
        }

        .navbar-tool-text {
            padding-left: 5px !important;
            font-size: 16px;
        }

        .navbar-tool-text>small {
            color: #4b566b !important;
        }

        .modal-header .nav-tabs .nav-item .nav-link {
            color: black !important;
            /*border: 1px solid #E2F0FF;*/
        }

        .checkbox-alphanumeric::after,
        .checkbox-alphanumeric::before {
            content: '';
            display: table;
        }

        .checkbox-alphanumeric::after {
            clear: both;
        }

        .checkbox-alphanumeric input {
            left: -9999px;
            position: absolute;
        }

        .checkbox-alphanumeric label {
            width: 2.25rem;
            height: 2.25rem;
            float: left;
            padding: 0.375rem 0;
            margin-right: 0.375rem;
            display: block;
            color: #818a91;
            font-size: 0.875rem;
            font-weight: 400;
            text-align: center;
            background: transparent;
            text-transform: uppercase;
            border: 1px solid #e6e6e6;
            border-radius: 2px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            transform: scale(0.95);
        }

        .checkbox-alphanumeric-circle label {
            border-radius: 100%;
        }

        .checkbox-alphanumeric label>img {
            max-width: 100%;
        }

        .checkbox-alphanumeric label:hover {
            cursor: pointer;
            border-color: #4f409c;
        }

        .checkbox-alphanumeric input:checked~label {
            transform: scale(1.1);
            border-color: red !important;
        }

        .checkbox-alphanumeric--style-1 label {
            width: auto;
            padding-left: 1rem;
            padding-right: 1rem;
            border-radius: 2px;
        }

        .d-table.checkbox-alphanumeric--style-1 {
            width: 100%;
        }

        .d-table.checkbox-alphanumeric--style-1 label {
            width: 100%;
        }

        /* CUSTOM COLOR INPUT */
        .checkbox-color::after,
        .checkbox-color::before {
            content: '';
            display: table;
        }

        .checkbox-color::after {
            clear: both;
        }

        .checkbox-color input {
            left: -9999px;
            position: absolute;
        }

        .checkbox-color label {
            width: 2.25rem;
            height: 2.25rem;
            float: left;
            padding: 0.375rem;
            margin-right: 0.375rem;
            display: block;
            font-size: 0.875rem;
            text-align: center;
            opacity: 0.7;
            border: 2px solid #d3d3d3;
            border-radius: 50%;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            transform: scale(0.95);
        }

        .checkbox-color-circle label {
            border-radius: 100%;
        }

        .checkbox-color label:hover {
            cursor: pointer;
            opacity: 1;
        }

        .checkbox-color input:checked~label {
            transform: scale(1.1);
            opacity: 1;
            border-color: red !important;
        }

        .checkbox-color input:checked~label:after {
            content: "\f121";
            font-family: "Ionicons";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }

        .card-img-top img,
        figure {
            max-width: 200px;
            max-height: 200px !important;
            vertical-align: middle;
        }

        .product-card {
            box-shadow: 1px 1px 6px #00000014;
            border-radius: 5px;
        }

        .product-card .card-header {
            text-align: center;
            background: white 0% 0% no-repeat padding-box;
            border-radius: 5px 5px 0px 0px;
            border-bottom: white !important;
        }

        .product-title {
            font-family: 'Roboto', sans-serif !important;
            font-weight: 400 !important;
            font-size: 22px !important;
            color: #000000 !important;
        }

        .feature_header span {
            font-weight: 700;
            font-size: 25px;
            text-transform: uppercase;
        }

        html[dir="ltr"] .feature_header span {
            padding-right: 15px;
        }

        html[dir="rtl"] .feature_header span {
            padding-left: 15px;
        }

        @media (max-width: 768px) {
            .feature_header {
                margin-top: 0;
                display: flex;
                justify-content: flex-start !important;

            }

            .store-contents {
                justify-content: center;
            }

            .feature_header span {
                padding-right: 0;
                padding-left: 0;
                font-weight: 700;
                font-size: 25px;
                text-transform: uppercase;
            }

            .view_border {
                margin: 16px 0px;
                border-top: 2px solid #E2F0FF !important;
            }

        }

        .scroll-bar {
            max-height: calc(100vh - 100px);
            overflow-y: auto !important;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px white;
            border-radius: 5px;
        }

        ::-webkit-scrollbar {
            width: 3px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(194, 194, 194, 0.38) !important;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #88a7bf !important;
        }

        .mobileshow {
            display: none;
        }

        @media screen and (max-width: 500px) {
            .mobileshow {
                display: block;
            }
        }

        [type="radio"] {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        [type="radio"]+span:after {
            content: '';
            display: inline-block;
            width: 1.1em;
            height: 1.1em;
            vertical-align: -0.10em;
            border-radius: 1em;
            border: 0.35em solid #fff;
            box-shadow: 0 0 0 0.10em#88a7bf;
            margin-left: 0.75em;
            transition: 0.5s ease all;
        }

        [type="radio"]:checked+span:after {
            background: #88a7bf;
            box-shadow: 0 0 0 0.10em#88a7bf;
        }

        [type="radio"]:focus+span::before {
            font-size: 1.2em;
            line-height: 1;
            vertical-align: -0.125em;
        }


        .checkbox-color label {
            box-shadow: 0px 3px 6px #0000000D;
            border: none;
            border-radius: 3px !important;
            max-height: 35px;
        }

        .checkbox-color input:checked~label {
            transform: scale(1.1);
            opacity: 1;
            border: 1px solid #ffb943 !important;
        }

        .checkbox-color input:checked~label:after {
            font-family: "Ionicons", serif;
            position: absolute;
            content: "\2713" !important;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }

        .navbar-tool .navbar-tool-label {
            position: absolute;
            top: -.3125rem;
            right: -.3125rem;
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;
            background-color: #88a7bf !important;
            color: #fff;
            font-size: .75rem;
            font-weight: 500;
            text-align: center;
            line-height: 1.25rem;
        }

        .btn-primary {
            color: #fff;
            background-color: #4f409c !important;
            border-color: #4f409c !important;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #4f409c !important;
            border-color: #4f409c !important;
        }

        .btn-secondary {
            background-color: #88a7bf !important;
            border-color: #88a7bf !important;
        }

        .btn-outline-accent:hover {
            color: #fff;
            background-color: #4f409c;
            border-color: #4f409c;
        }

        .btn-outline-accent {
            color: #4f409c;
            border-color: #4f409c;
        }

        .text-accent {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #4f409c;
        }

        a:hover {
            color: #88a7bf;
            text-decoration: none
        }

        .active-menu {
            color: #88a7bf !important;
        }

        .page-item.active>.page-link {
            box-shadow: 0 0.5rem 1.125rem -0.425rem#4f409c
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #4f409c;
            border-color: rgba(0, 0, 0, 0)
        }

        .btn-outline-accent:not(:disabled):not(.disabled):active,
        .btn-outline-accent:not(:disabled):not(.disabled).active,
        .show>.btn-outline-accent.dropdown-toggle {
            color: #fff;
            background-color: #88a7bf;
            border-color: #88a7bf;
        }

        .btn-outline-primary {
            color: #4f409c;
            border-color: #4f409c;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #88a7bf;
            border-color: #88a7bf;
        }

        .btn-outline-primary:focus,
        .btn-outline-primary.focus {
            box-shadow: 0 0 0 0#88a7bf;
        }

        .btn-outline-primary.disabled,
        .btn-outline-primary:disabled {
            color: #6f6f6f;
            background-color: transparent
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .show>.btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #4f409c;
            border-color: #4f409c;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-outline-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0#4f409c;
        }

        .feature_header span {
            background-color: #fafafc !important
        }

        .discount-top-f {
            position: absolute;
        }

        html[dir="ltr"] .discount-top-f {
            left: 0;
        }

        html[dir="rtl"] .discount-top-f {
            right: 0;
        }

        .for-discoutn-value {
            background: #4f409c;

        }

        .czi-star-filled {
            color: #fea569 !important;
        }

        .flex-start {
            display: flex;
            justify-content: flex-start;
        }

        .flex-center {
            display: flex;
            justify-content: center;
        }

        .flex-around {
            display: flex;
            justify-content: space-around;
        }

        .flex-between {
            display: flex;
            justify-content: space-between;
        }

        .row-reverse {
            display: flex;
            flex-direction: row-reverse;
        }

        .count-value {
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;
            color: #fff;
            font-size: 0.75rem;
            font-weight: 500;
            text-align: center;
            line-height: 1.25rem;
        }
    </style>
    <style>
        .affinidi-login-button {
            border: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            cursor: pointer;
            background: #1d58fc;
            color: #fff !important;
            box-shadow: 0 4px 16px 0 rgba(55, 62, 151, 0.32);
        }

        .affinidi-login-img {
            margin-right: 1rem;
            width: 24px;
            height: 24px;
        }
    </style>

    <!--for product-->
    <style>
        .stock-out {
            position: absolute;
            top: 40% !important;
            color: white !important;
            font-weight: 900;
            font-size: 15px;
        }

        html[dir="ltr"] .stock-out {
            left: 35% !important;
        }

        html[dir="rtl"] .stock-out {
            right: 35% !important;
        }

        .product-card {
            height: 100%;
        }

        .badge-style {
            left: 75% !important;
            margin-top: -2px !important;
            background: transparent !important;
            color: black !important;
        }

        html[dir="ltr"] .badge-style {
            right: 0 !important;
        }

        html[dir="rtl"] .badge-style {
            left: 0 !important;
        }
    </style>

    <style>
        .dropdown-menu {
            min-width: 304px !important;
            margin-left: 0px !important;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
        }
    </style>


</head>
<!-- Body-->

<body class="toolbar-enabled">
    <!-- Sign in / sign up modal-->
    <style>
        .close {
            z-index: 99;
            background: white !important;
            padding: 3px 8px !important;
            margin: -23px -12px -1rem auto !important;
            border-radius: 50%;
        }
    </style>
    <!-- Navbar-->
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" id="quick-view-modal">

            </div>
        </div>
    </div>
    <!-- Navbar Electronics Store-->
    <style>
        .card-body.search-result-box {
            overflow: scroll;
            height: 400px;
            overflow-x: hidden;
        }

        .active .seller {
            font-weight: 700;
        }

        .for-count-value {
            position: absolute;

            right: 0.6875rem;
            ;
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;
            color: #4f409c;

            font-size: .75rem;
            font-weight: 500;
            text-align: center;
            line-height: 1.25rem;
        }

        .count-value {
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 50%;
            color: #4f409c;

            font-size: .75rem;
            font-weight: 500;
            text-align: center;
            line-height: 1.25rem;
        }

        @media (min-width: 992px) {
            .navbar-sticky.navbar-stuck .navbar-stuck-menu.show {
                display: block;
                height: 55px !important;
            }
        }

        @media (min-width: 768px) {
            .navbar-stuck-menu {
                background-color: #4f409c;
                line-height: 15px;
                padding-bottom: 0px;
            }

        }

        @media (max-width: 767px) {
            .search_button {
                background-color: transparent !important;
            }

            .search_button .input-group-text i {
                color: #4f409c !important;
            }

            .navbar-expand-md .dropdown-menu>.dropdown>.dropdown-toggle {
                position: relative;
                padding- right: 1.95rem;
            }

            .mega-nav1 {
                background: white;
                color: #4f409c !important;
                border-radius: 3px;
            }

            .mega-nav1 .nav-link {
                color: #4f409c !important;
            }
        }

        @media (max-width: 768px) {
            .tab-logo {
                width: 10rem;
            }
        }

        @media (max-width: 360px) {
            .mobile-head {
                padding: 3px;
            }
        }

        @media (max-width: 471px) {
            .navbar-brand img {}

            .mega-nav1 {
                background: white;
                color: #4f409c !important;
                border-radius: 3px;
            }

            .mega-nav1 .nav-link {
                color: #4f409c !important;
            }
        }

        #anouncement {
            width: 100%;
            padding: 2px 0;
            text-align: center;
            color: white;
        }
    </style>

    <header class="box-shadow-sm rtl">
        <!-- Topbar-->
        <div class="topbar">
            <div class="container">

                <div>
                    <div class="topbar-text dropdown d-md-none ml-auto">
                        <a class="topbar-link" href="tel: +91- 9901880844">
                            Need help? Call Us: <i class="fa fa-phone"></i> +91- 9901880844
                        </a>
                    </div>
                    <div class="d-none d-md-block ml-2 text-nowrap">
                        <a class="topbar-link d-none d-md-inline-block" href="tel:+91- 9901880844">
                            Need help? Call Us: <i class="fa fa-phone"></i> +91- 9901880844
                        </a>
                    </div>
                </div>

                <div>

                    <div class="topbar-text dropdown disable-autohide  text-capitalize">
                        <a class="topbar-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <img class="mr-2" width="20"
                                src="https://www.aasabie.com/public/assets/front-end/img/flags/en.png" alt="Eng">
                            english
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left" style="text-align: left;">
                            <li>
                                <a class="dropdown-item pb-1" href="https://www.aasabie.com/lang/en">
                                    <img class="mr-2" width="20"
                                        src="https://www.aasabie.com/public/assets/front-end/img/flags/en.png"
                                        alt="english" />
                                    <span style="text-transform: capitalize">english</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-sticky bg-light mobile-head">
            <div class="navbar navbar-expand-md navbar-light">
                <div class="container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand d-none d-sm-block mr-3 flex-shrink-0" href="https://www.aasabie.com"
                        style="min-width: 7rem;">
                        <img style="height: 40px!important; width:auto;"
                            src="https://www.aasabie.com/storage/app/public/company/2023-06-18-648e8ec2b13f1.png"
                            onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                            alt="Aasabie" />
                    </a>
                    <a class="navbar-brand d-sm-none mr-2" href="https://www.aasabie.com">
                        <img style="height: 38px!important;width:auto;" class="mobile-logo-img"
                            src="https://www.aasabie.com/storage/app/public/company/2023-06-18-648e8ec2b1c45.png"
                            onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                            alt="Aasabie" />
                    </a>
                    <!-- Search-->
                    <div class="input-group-overlay d-none d-md-block mx-5" style="text-align: left">
                        <form action="https://www.aasabie.com/products" type="submit" class="search_form">
                            <input class="form-control appended-form-control search-bar-input" type="text"
                                autocomplete="off" placeholder="Search" name="name">
                            <button class="input-group-append-overlay search_button" type="submit"
                                style="border-radius: 0px 7px 7px 0px; left: unset; right: 0;top:0">
                                <span class="input-group-text" style="font-size: 20px;">
                                    <i class="czi-search text-white"></i>
                                </span>
                            </button>
                            <input name="data_from" value="search" hidden>
                            <input name="page" value="1" hidden>
                            <diV class="card search-card"
                                style="position: absolute;background: white;z-index: 999;width: 100%;display: none">
                                <div class="card-body search-result-box"
                                    style="overflow:scroll; height:400px;overflow-x: hidden"></div>
                            </diV>
                        </form>
                    </div>
                    <!-- Toolbar-->
                    <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center" style="margin-right: 10px;">
                        <a class="navbar-tool navbar-stuck-toggler" href="#">
                            <span class="navbar-tool-tooltip">Expand menu</span>
                            <div class="navbar-tool-icon-box">
                                <i class="navbar-tool-icon czi-menu"></i>
                            </div>
                        </a>
                        <div class="navbar-tool dropdown ml-3">
                            <a class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                                href="https://www.aasabie.com/wishlists">
                                <span class="navbar-tool-label">
                                    <span class="countWishlist">0</span>
                                </span>
                                <i class="navbar-tool-icon czi-heart"></i>
                            </a>
                        </div>
                        <div class="dropdown">
                            <a class="navbar-tool ml-3" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="navbar-tool-icon-box bg-secondary">
                                    <div class="navbar-tool-icon-box bg-secondary">
                                        <i class="navbar-tool-icon czi-user"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton"
                                style="text-align: left;">
                                <a class="dropdown-item" href="https://www.aasabie.com/customer/auth/login">
                                    <i class="fa fa-sign-in mr-2"></i> Sign in
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://www.aasabie.com/customer/auth/register">
                                    <i class="fa fa-user-circle mr-2"></i>Sign up
                                </a>
                            </div>
                        </div>
                        <div id="cart_items">
                            <div class="navbar-tool dropdown ml-3" style="margin-right: 6px">
                                <a class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                                    href="https://www.aasabie.com/shop-cart">
                                    <span class="navbar-tool-label">
                                        0
                                    </span>
                                    <i class="navbar-tool-icon czi-cart"></i>
                                </a>
                                <a class="navbar-tool-text ml-2" href="https://www.aasabie.com/shop-cart"><small>My
                                        cart</small>
                                    ₹0.00
                                </a>
                                <!-- Cart dropdown-->
                                <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
                                    <div class="widget widget-cart px-3 pt-2 pb-3">
                                        <div class="widget-cart-item">
                                            <h6 class="text-danger text-center"><i class="fa fa-cart-arrow-down"></i>
                                                Empty Cart
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-expand-md navbar-stuck-menu">
                <div class="container" style="padding-left: 10px;padding-right: 10px;">
                    <div class="collapse navbar-collapse" id="navbarCollapse" style="text-align: left; ">

                        <!-- Search-->
                        <div class="input-group-overlay d-md-none my-3">
                            <form action="https://www.aasabie.com/products" type="submit" class="search_form">
                                <input class="form-control appended-form-control search-bar-input-mobile" type="text"
                                    autocomplete="off" placeholder="Search" name="name">
                                <input name="data_from" value="search" hidden>
                                <input name="page" value="1" hidden>
                                <button class="input-group-append-overlay search_button" type="submit"
                                    style="border-radius: 0px 7px 7px 0px; left: unset; right: 0;">
                                    <span class="input-group-text" style="font-size: 20px;">
                                        <i class="czi-search text-white"></i>
                                    </span>
                                </button>
                                <diV class="card search-card"
                                    style="position: absolute;background: white;z-index: 999;width: 100%;display: none">
                                    <div class="card-body search-result-box" id=""
                                        style="overflow:scroll; height:400px;overflow-x: hidden"></div>
                                </diV>
                            </form>
                        </div>

                        <ul class="navbar-nav mega-nav pr-2 pl-2 mr-2 d-none d-xl-block ">
                            <!--web-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown" style="">
                                    <i class="czi-menu align-middle mt-n1 mr-2"></i>
                                    <span style="margin-left: 40px !important;margin-right: 50px">
                                        Categories
                                    </span>
                                </a>
                                <ul class="dropdown-menu" style="right: 0; text-align: left;">
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between  " href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=1125&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-10-21-6533a6fca3a19.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Spa Services ( Men &amp; Women)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=467&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca012d51de3.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Women</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=909&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Women Footwear</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=913&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Women Accessories</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=954&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Cap</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=956&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Hat</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=922&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Women&#039;s Winter Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=944&amp;data_from=category&amp;page=1">Womens
                                                            sweater</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=948&amp;data_from=category&amp;page=1">Womens
                                                            Trench coat</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=950&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Handgloves</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=958&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Hoodies &amp; Sweatshirt</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=695&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Bags</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=696&amp;data_from=category&amp;page=1">Handbags</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=697&amp;data_from=category&amp;page=1">Shoulder
                                                            Bags</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=698&amp;data_from=category&amp;page=1">Totes
                                                            Bags</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=699&amp;data_from=category&amp;page=1">Sling
                                                            Bags</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=700&amp;data_from=category&amp;page=1">Clutches</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=701&amp;data_from=category&amp;page=1">Wallets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=702&amp;data_from=category&amp;page=1">Luggage
                                                            &amp; Travel</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=491&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Women Western Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=636&amp;data_from=category&amp;page=1">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=639&amp;data_from=category&amp;page=1">Crop
                                                            Top</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=640&amp;data_from=category&amp;page=1">Tank
                                                            Top</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=641&amp;data_from=category&amp;page=1">Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=642&amp;data_from=category&amp;page=1">Jumpsuits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=644&amp;data_from=category&amp;page=1">Skirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=645&amp;data_from=category&amp;page=1">Formal
                                                            Wear</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=647&amp;data_from=category&amp;page=1">Co-Ords</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=649&amp;data_from=category&amp;page=1">Activewear</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=651&amp;data_from=category&amp;page=1">Jackets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=656&amp;data_from=category&amp;page=1">Wollen
                                                            Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=657&amp;data_from=category&amp;page=1">Cocktail
                                                            Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=658&amp;data_from=category&amp;page=1">Jeggings
                                                            | Tights</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=946&amp;data_from=category&amp;page=1">Womens
                                                            Trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=960&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Blazer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=962&amp;data_from=category&amp;page=1">Women&#039;s
                                                            shorts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=964&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Jeans</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=966&amp;data_from=category&amp;page=1">Women&#039;s
                                                            T-shirt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=969&amp;data_from=category&amp;page=1">Oversized
                                                            T- shirt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=970&amp;data_from=category&amp;page=1">T-
                                                            shirt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=987&amp;data_from=category&amp;page=1">Bodysuit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1123&amp;data_from=category&amp;page=1">Body
                                                            Shaper</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=492&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Maternity Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=652&amp;data_from=category&amp;page=1">Maternity
                                                            Pants</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=653&amp;data_from=category&amp;page=1">Maternity
                                                            Tops</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=654&amp;data_from=category&amp;page=1">Maternity
                                                            Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=655&amp;data_from=category&amp;page=1">Maternity
                                                            Sleepwear</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=493&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Lingerie &amp; Sleep Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=659&amp;data_from=category&amp;page=1">Bras</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=660&amp;data_from=category&amp;page=1">Panties</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=661&amp;data_from=category&amp;page=1">Lingerie
                                                            Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=662&amp;data_from=category&amp;page=1">Night
                                                            Dresses &amp; Nighties</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=663&amp;data_from=category&amp;page=1">Shapewear</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=664&amp;data_from=category&amp;page=1">Camisoles
                                                            &amp; Slips</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=494&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Swim &amp; Beach Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=665&amp;data_from=category&amp;page=1">Bikini
                                                            Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=666&amp;data_from=category&amp;page=1">Swimwear</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=667&amp;data_from=category&amp;page=1">Beachwear</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=495&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Ethnic Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=668&amp;data_from=category&amp;page=1">Sarees</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=669&amp;data_from=category&amp;page=1">Kurtas
                                                            &amp; Kurtis</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=670&amp;data_from=category&amp;page=1">Dress
                                                            Material</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=671&amp;data_from=category&amp;page=1">Lehenga
                                                            Choli</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=672&amp;data_from=category&amp;page=1">Long
                                                            Skirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=673&amp;data_from=category&amp;page=1">Blouses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=674&amp;data_from=category&amp;page=1">Kurta
                                                            Sets &amp; Salwar Suits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=675&amp;data_from=category&amp;page=1">Indo-western</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=676&amp;data_from=category&amp;page=1">Gowns</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=677&amp;data_from=category&amp;page=1">Dupattas</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1122&amp;data_from=category&amp;page=1">Fusion
                                                            wear</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=496&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Ethnic Bottoms</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=678&amp;data_from=category&amp;page=1">Leggings</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=679&amp;data_from=category&amp;page=1">Palazzos</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=680&amp;data_from=category&amp;page=1">Shararas</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=681&amp;data_from=category&amp;page=1">Salwars
                                                            &amp; Patiala</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=682&amp;data_from=category&amp;page=1">Dhoti
                                                            Pants</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=683&amp;data_from=category&amp;page=1">Ethnic
                                                            trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=684&amp;data_from=category&amp;page=1">Saree
                                                            Shapewear &amp; Petticoats</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=497&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Accessories</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=687&amp;data_from=category&amp;page=1">Sunglasses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=688&amp;data_from=category&amp;page=1">Belts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=689&amp;data_from=category&amp;page=1">Scarfs</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=692&amp;data_from=category&amp;page=1">Watches</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=694&amp;data_from=category&amp;page=1">Travel
                                                            Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=952&amp;data_from=category&amp;page=1">Womens
                                                            Socks</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=466&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-01-64c911482e7f9.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Men</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=482&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Top Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=586&amp;data_from=category&amp;page=1">Formal
                                                            Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=587&amp;data_from=category&amp;page=1">Casual
                                                            Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=588&amp;data_from=category&amp;page=1">Polo
                                                            T-Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=589&amp;data_from=category&amp;page=1">Denim
                                                            Jackets &amp; Casual Jackets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=965&amp;data_from=category&amp;page=1">Men&#039;s
                                                            T-shirt</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=483&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Bottom Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=592&amp;data_from=category&amp;page=1">Casual
                                                            Trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=593&amp;data_from=category&amp;page=1">Formal
                                                            Trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=594&amp;data_from=category&amp;page=1">Track
                                                            Pants</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=596&amp;data_from=category&amp;page=1">Cargos</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=597&amp;data_from=category&amp;page=1">Three
                                                            Fourths</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=945&amp;data_from=category&amp;page=1">Mens
                                                            Trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=961&amp;data_from=category&amp;page=1">Men&#039;s
                                                            shorts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=963&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Jeans</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=484&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Suits, Blazers &amp; Waist Coat</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=598&amp;data_from=category&amp;page=1">Formal
                                                            Suits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=600&amp;data_from=category&amp;page=1">Waist
                                                            Coats</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=959&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Blazer</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=908&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Men&#039;s Footwear</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=921&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Men&#039;s Winterwear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=943&amp;data_from=category&amp;page=1">Mens
                                                            Sweater</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=947&amp;data_from=category&amp;page=1">Mens
                                                            trench coat</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=949&amp;data_from=category&amp;page=1">Mens
                                                            handgloves</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=957&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Hoodies &amp; Sweatshirt</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1037&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Men&#039;s Accessories</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1038&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Belt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1039&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Tie</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1040&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Socks</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1041&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Cap</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=487&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Ethnic Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=613&amp;data_from=category&amp;page=1">Sherwanis</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=614&amp;data_from=category&amp;page=1">Kurtas</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=615&amp;data_from=category&amp;page=1">Dhotis</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=616&amp;data_from=category&amp;page=1">Ethnic
                                                            Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=617&amp;data_from=category&amp;page=1">Lungis</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=618&amp;data_from=category&amp;page=1">Ethnic
                                                            Payjama</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=619&amp;data_from=category&amp;page=1">Ghamchas</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=488&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Inner Wear &amp; Lounge Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=624&amp;data_from=category&amp;page=1">Briefs
                                                            &amp; Trunks</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=625&amp;data_from=category&amp;page=1">Vests</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=626&amp;data_from=category&amp;page=1">Boxers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=627&amp;data_from=category&amp;page=1">Pajamas
                                                            &amp; Lounge Pants</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=628&amp;data_from=category&amp;page=1">Night
                                                            Suits</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=489&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Raincoats &amp; Windcheater</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=532&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca1736927ba.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Pets &amp; Pets Suppliments</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=988&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Fish</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=989&amp;data_from=category&amp;page=1">Fish
                                                            Suppliments</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=563&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Cat</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=562&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Dog</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=479&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-01-64c90fc26801e.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Organic</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=971&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Sustainable</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=972&amp;data_from=category&amp;page=1">Sustainable
                                                            Wellness</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=973&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Face Organic</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=975&amp;data_from=category&amp;page=1">Organic
                                                            Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=976&amp;data_from=category&amp;page=1">Organic
                                                            Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=977&amp;data_from=category&amp;page=1">Organic
                                                            eyeshadow palatte</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=978&amp;data_from=category&amp;page=1">Organic
                                                            Blush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=979&amp;data_from=category&amp;page=1">Organic
                                                            Liquid Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=980&amp;data_from=category&amp;page=1">Organic
                                                            concealer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=981&amp;data_from=category&amp;page=1">Organic
                                                            colour corrector</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=982&amp;data_from=category&amp;page=1">Organic
                                                            Eyeliner</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=468&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca014909c45.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Kids</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=916&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Kid&#039;s Accessories</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=910&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Kid&#039;s Footwear</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1120&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">3-6 Years Costumes</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1121&amp;data_from=category&amp;page=1">Fancy
                                                            Dress Costumes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1015&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">2-3 YEARS</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1021&amp;data_from=category&amp;page=1">GIRLS
                                                            2-3 YEARS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1022&amp;data_from=category&amp;page=1">2-3
                                                            YEARS BOYS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1016&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">4-5 YEARS</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1023&amp;data_from=category&amp;page=1">4-5
                                                            YEARS BOYS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1024&amp;data_from=category&amp;page=1">4-5
                                                            YEARS GIRLS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1018&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">6-7 YEARS</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1025&amp;data_from=category&amp;page=1">6-7
                                                            YEARS GIRLS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1026&amp;data_from=category&amp;page=1">6-7
                                                            YEARS BOYS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1019&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">8-9 YEARS</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1027&amp;data_from=category&amp;page=1">8-9
                                                            YEARS GIRLS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1028&amp;data_from=category&amp;page=1">8-9
                                                            YEARS BOYS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1020&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">10-11 YEARS</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1029&amp;data_from=category&amp;page=1">10-11
                                                            YEARS BOYS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1030&amp;data_from=category&amp;page=1">10-11
                                                            YEARS GIRLS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1032&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Kids Ethnic Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1033&amp;data_from=category&amp;page=1">Kids
                                                            Lehenga Set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1118&amp;data_from=category&amp;page=1">Kids
                                                            Salwar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1034&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Kids Western Wear</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1035&amp;data_from=category&amp;page=1">Kids
                                                            Top</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1036&amp;data_from=category&amp;page=1">Frock</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1042&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Infant</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1043&amp;data_from=category&amp;page=1">Swaddle</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=501&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">New Born [0-12 Months]</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=498&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Girls [6-14 Years]</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=499&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Boys [6-14 years]</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=500&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Baby Boy [9 Month - 6 Years]</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=502&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Baby Accessories</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=470&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca0165beea9.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Unisex</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=505&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Personal care</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=912&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Unisex Footwear</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=914&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Unisex Accessories</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1031&amp;data_from=category&amp;page=1">UNISEX
                                                            SOCKS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1052&amp;data_from=category&amp;page=1">Unisex
                                                            Bracelet</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1044&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Bath Essentials</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=469&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-01-64c90a58899fa.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">LGBTQ</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=510&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Pride Fashion</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=915&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Pride Accessories</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between  " href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=911&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Pride Footwear</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=475&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca17b4be5a6.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Cosmetics</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=547&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Face</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=798&amp;data_from=category&amp;page=1">Face
                                                            Primer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=799&amp;data_from=category&amp;page=1">Concealer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=800&amp;data_from=category&amp;page=1">Foundation</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=801&amp;data_from=category&amp;page=1">Compact</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=802&amp;data_from=category&amp;page=1">Contour</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=803&amp;data_from=category&amp;page=1">Loose
                                                            Powder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=804&amp;data_from=category&amp;page=1">Blush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=805&amp;data_from=category&amp;page=1">Bronzer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=806&amp;data_from=category&amp;page=1">Tinted
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=807&amp;data_from=category&amp;page=1">BB
                                                            &amp; CC Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=808&amp;data_from=category&amp;page=1">Highlighters</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=809&amp;data_from=category&amp;page=1">Setting
                                                            Spray</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=810&amp;data_from=category&amp;page=1">Makeup
                                                            Remover</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=811&amp;data_from=category&amp;page=1">Sindoor</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=548&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Eyes</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=812&amp;data_from=category&amp;page=1">Kajal</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=813&amp;data_from=category&amp;page=1">Eyeliner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=814&amp;data_from=category&amp;page=1">Mascara</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=815&amp;data_from=category&amp;page=1">Eye
                                                            Shadow</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=816&amp;data_from=category&amp;page=1">Eye
                                                            Brow Enhancers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=817&amp;data_from=category&amp;page=1">Eye
                                                            Primer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=818&amp;data_from=category&amp;page=1">False
                                                            Eyelashes</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=819&amp;data_from=category&amp;page=1">Eye
                                                            Makeup Remover</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=820&amp;data_from=category&amp;page=1">Under
                                                            Eye Concealer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=821&amp;data_from=category&amp;page=1">Contact
                                                            Lenses</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=549&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Lips</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=822&amp;data_from=category&amp;page=1">Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=823&amp;data_from=category&amp;page=1">Liquid
                                                            Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=826&amp;data_from=category&amp;page=1">Lip
                                                            Liner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=827&amp;data_from=category&amp;page=1">Lip
                                                            Plumper</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=828&amp;data_from=category&amp;page=1">Lip
                                                            Stain</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=829&amp;data_from=category&amp;page=1">Lip
                                                            Primer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=923&amp;data_from=category&amp;page=1">Lip
                                                            Crayon</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1119&amp;data_from=category&amp;page=1">Lip
                                                            &amp; Cheek Tint</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=550&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Nails</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=830&amp;data_from=category&amp;page=1">Nail
                                                            Polish</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=831&amp;data_from=category&amp;page=1">Nail
                                                            Art Kits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=832&amp;data_from=category&amp;page=1">Nail
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=833&amp;data_from=category&amp;page=1">Nail
                                                            Polish Remover</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=834&amp;data_from=category&amp;page=1">Nail
                                                            Polish Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=835&amp;data_from=category&amp;page=1">Manicure
                                                            &amp; Pedicure Kits</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=551&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Tools &amp; Brushes</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=836&amp;data_from=category&amp;page=1">Face
                                                            Brush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=837&amp;data_from=category&amp;page=1">Eye
                                                            Brush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=838&amp;data_from=category&amp;page=1">Lip
                                                            Brush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=839&amp;data_from=category&amp;page=1">Brush
                                                            Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=840&amp;data_from=category&amp;page=1">Brush
                                                            Cleansers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=841&amp;data_from=category&amp;page=1">Sponges
                                                            &amp; Applicators</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=842&amp;data_from=category&amp;page=1">Eyelash
                                                            Curlers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=843&amp;data_from=category&amp;page=1">Tweezers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=844&amp;data_from=category&amp;page=1">Sharpeners</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=845&amp;data_from=category&amp;page=1">Mirrors</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=846&amp;data_from=category&amp;page=1">Makeup
                                                            Pouches</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=847&amp;data_from=category&amp;page=1">Blush
                                                            Brush</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=552&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Makeup Palettes</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=848&amp;data_from=category&amp;page=1">Multi-functional
                                                            Palettes</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=849&amp;data_from=category&amp;page=1">Makeup
                                                            Palettes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=553&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Makeup kits &amp; Combos</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=850&amp;data_from=category&amp;page=1">Makeup
                                                            Kits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=851&amp;data_from=category&amp;page=1">Makeup
                                                            Combos</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=471&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca026c9832e.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Personal Care</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=511&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Men</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=726&amp;data_from=category&amp;page=1">Cleaners</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=729&amp;data_from=category&amp;page=1">Moisturizer
                                                            with SPF/antioxidants for daytime</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=730&amp;data_from=category&amp;page=1">Moisturizer
                                                            with retinol for nighttime</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=731&amp;data_from=category&amp;page=1">Eye
                                                            Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=732&amp;data_from=category&amp;page=1">Lip
                                                            balm</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=733&amp;data_from=category&amp;page=1">Hand
                                                            Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=734&amp;data_from=category&amp;page=1">Blemish
                                                            gel</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=735&amp;data_from=category&amp;page=1">Shower
                                                            gel &amp; Body wash</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=736&amp;data_from=category&amp;page=1">Antiperspirant</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=737&amp;data_from=category&amp;page=1">Cologne</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=738&amp;data_from=category&amp;page=1">Shampoo</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=739&amp;data_from=category&amp;page=1">Conditioner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=740&amp;data_from=category&amp;page=1">Hair
                                                            styling product</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=741&amp;data_from=category&amp;page=1">Face
                                                            cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=742&amp;data_from=category&amp;page=1">Face
                                                            wash</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=743&amp;data_from=category&amp;page=1">Body
                                                            Scrubs</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=744&amp;data_from=category&amp;page=1">Face
                                                            Scrub</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=745&amp;data_from=category&amp;page=1">Soaps</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=746&amp;data_from=category&amp;page=1">Bath
                                                            Salts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=747&amp;data_from=category&amp;page=1">Bath
                                                            Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=748&amp;data_from=category&amp;page=1">Mouthwash</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=749&amp;data_from=category&amp;page=1">Toothpaste</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=750&amp;data_from=category&amp;page=1">Toothbrush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=751&amp;data_from=category&amp;page=1">Floss
                                                            &amp; Tongue Cleaners</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=924&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Fragrance</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=927&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Sunscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=930&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=934&amp;data_from=category&amp;page=1">Mens
                                                            Body Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=935&amp;data_from=category&amp;page=1">Mens
                                                            Eye Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=936&amp;data_from=category&amp;page=1">Mens
                                                            kits &amp; combos</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=937&amp;data_from=category&amp;page=1">Mens
                                                            toner</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=512&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Women</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=754&amp;data_from=category&amp;page=1">Cleansers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=755&amp;data_from=category&amp;page=1">Masks</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=757&amp;data_from=category&amp;page=1">Neck
                                                            Creams</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=759&amp;data_from=category&amp;page=1">Hands
                                                            &amp; Feet</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=760&amp;data_from=category&amp;page=1">Specialised
                                                            Skincare</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=762&amp;data_from=category&amp;page=1">Lip
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=763&amp;data_from=category&amp;page=1">Sun
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=766&amp;data_from=category&amp;page=1">Hair
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=767&amp;data_from=category&amp;page=1">Bath
                                                            &amp; Shower</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=769&amp;data_from=category&amp;page=1">Feminine
                                                            Hygiene</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=770&amp;data_from=category&amp;page=1">Shaving
                                                            &amp; Hair Removal</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=771&amp;data_from=category&amp;page=1">Hygiene
                                                            Essentials</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=772&amp;data_from=category&amp;page=1">Oral
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=792&amp;data_from=category&amp;page=1">Face
                                                            Serum</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=925&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Fragrances</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=928&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Sunscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=931&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=938&amp;data_from=category&amp;page=1">Womens
                                                            body care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=939&amp;data_from=category&amp;page=1">Womens
                                                            Eye care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=940&amp;data_from=category&amp;page=1">Womens
                                                            kits &amp; combos</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=941&amp;data_from=category&amp;page=1">Women&#039;s
                                                            toner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1068&amp;data_from=category&amp;page=1">Multani
                                                            mitti</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1070&amp;data_from=category&amp;page=1">Sandalwood
                                                            Powder</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=513&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Kids</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=773&amp;data_from=category&amp;page=1">Lotions</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=774&amp;data_from=category&amp;page=1">Baby
                                                            Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=775&amp;data_from=category&amp;page=1">Baby
                                                            Hair Oil</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=776&amp;data_from=category&amp;page=1">Baby
                                                            Lip Balm</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=777&amp;data_from=category&amp;page=1">Baby
                                                            Lotion</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=779&amp;data_from=category&amp;page=1">Baby
                                                            Wash</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=780&amp;data_from=category&amp;page=1">Oils</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=781&amp;data_from=category&amp;page=1">Soap</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=932&amp;data_from=category&amp;page=1">Kids
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1061&amp;data_from=category&amp;page=1">Kids
                                                            Toothbrush</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=514&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Unisex</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=782&amp;data_from=category&amp;page=1">Facial
                                                            Cleanser</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=783&amp;data_from=category&amp;page=1">Facial
                                                            Scrub</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=784&amp;data_from=category&amp;page=1">Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=785&amp;data_from=category&amp;page=1">Face
                                                            Serum</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=786&amp;data_from=category&amp;page=1">Lip
                                                            Balm</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=788&amp;data_from=category&amp;page=1">Eye
                                                            Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=926&amp;data_from=category&amp;page=1">Unisex
                                                            Fragrances</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=929&amp;data_from=category&amp;page=1">Unisex
                                                            Sunscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=933&amp;data_from=category&amp;page=1">Unisex
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=942&amp;data_from=category&amp;page=1">Unisex
                                                            Body care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=983&amp;data_from=category&amp;page=1">Unisex
                                                            Haircare</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=984&amp;data_from=category&amp;page=1">Unisex
                                                            Toner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=985&amp;data_from=category&amp;page=1">Unisex
                                                            Mask</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=986&amp;data_from=category&amp;page=1">Unisex
                                                            Comb</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1047&amp;data_from=category&amp;page=1">Hand
                                                            Towel</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1049&amp;data_from=category&amp;page=1">Face
                                                            Towel</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1058&amp;data_from=category&amp;page=1">Unisex
                                                            Toothbrush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1059&amp;data_from=category&amp;page=1">Bath
                                                            Towel</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1065&amp;data_from=category&amp;page=1">Tongue
                                                            cleaner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1069&amp;data_from=category&amp;page=1">Wood
                                                            Comb</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=519&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Mom &amp; Baby</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=793&amp;data_from=category&amp;page=1">Baby
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=794&amp;data_from=category&amp;page=1">Kids
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=795&amp;data_from=category&amp;page=1">Maternity
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=796&amp;data_from=category&amp;page=1">Nursing
                                                            &amp; feeding</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=797&amp;data_from=category&amp;page=1">Gift
                                                            Sets</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item flex-between data-toggle='dropdown "
                                            data-toggle='dropdown' href="javascript:"
                                            onclick="location.href='https://www.aasabie.com/products?id=472&amp;data_from=category&amp;page=1'">
                                            <div>
                                                <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca1819485a4.png"
                                                    onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                    style="width: 18px; height: 18px; ">
                                                <span class="pl-3">Home Decor</span>
                                            </div>
                                            <div>
                                                <i class="czi-arrow-right"
                                                    style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=879&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Home Decor Item</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=880&amp;data_from=category&amp;page=1">Wall
                                                            Art</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=881&amp;data_from=category&amp;page=1">Figurine</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=882&amp;data_from=category&amp;page=1">Artificial
                                                            Plant</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=883&amp;data_from=category&amp;page=1">Shelf</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=884&amp;data_from=category&amp;page=1">Candle
                                                            Holder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=885&amp;data_from=category&amp;page=1">Vase</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=886&amp;data_from=category&amp;page=1">Lampshade</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=887&amp;data_from=category&amp;page=1">Home
                                                            Mirror</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=888&amp;data_from=category&amp;page=1">Hanging
                                                            Ornament</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=889&amp;data_from=category&amp;page=1">Sticker
                                                            Decal</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=890&amp;data_from=category&amp;page=1">Showpieces</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1054&amp;data_from=category&amp;page=1">Planter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1062&amp;data_from=category&amp;page=1">Wax
                                                            Candle</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1110&amp;data_from=category&amp;page=1">Glass
                                                            votive set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1111&amp;data_from=category&amp;page=1">Glass
                                                            jar</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1112&amp;data_from=category&amp;page=1">Detachable
                                                            Set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1113&amp;data_from=category&amp;page=1">Urli
                                                            Set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1114&amp;data_from=category&amp;page=1">Tealight
                                                            holder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1115&amp;data_from=category&amp;page=1">Tray</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1116&amp;data_from=category&amp;page=1">Lobaan</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1117&amp;data_from=category&amp;page=1">Wall
                                                            Clock</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1124&amp;data_from=category&amp;page=1">Sofa
                                                            Set</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item flex-between data-toggle='dropdown "
                                                    data-toggle='dropdown' href="javascript:"
                                                    onclick="location.href='https://www.aasabie.com/products?id=1075&amp;data_from=category&amp;page=1'">
                                                    <div>
                                                        <span class="pl-3">Kitchen and Dinning</span>
                                                    </div>
                                                    <div>
                                                        <i class="czi-arrow-right"
                                                            style="font-size: 8px !important;background:none !important;color:#4B5864;"></i>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1076&amp;data_from=category&amp;page=1">Steel
                                                            Bar set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1077&amp;data_from=category&amp;page=1">Tea/Coffee
                                                            glass</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1078&amp;data_from=category&amp;page=1">Rack
                                                            for bottles</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1079&amp;data_from=category&amp;page=1">Cake
                                                            Knife</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1080&amp;data_from=category&amp;page=1">Knife</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1081&amp;data_from=category&amp;page=1">Steel
                                                            serve set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1082&amp;data_from=category&amp;page=1">Steel
                                                            serving set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1083&amp;data_from=category&amp;page=1">Long
                                                            stem server set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1084&amp;data_from=category&amp;page=1">Tray
                                                            set with kullad</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1085&amp;data_from=category&amp;page=1">Bowl
                                                            set with mug</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1086&amp;data_from=category&amp;page=1">Aluminum
                                                            platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1087&amp;data_from=category&amp;page=1">Dry
                                                            fruits platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1088&amp;data_from=category&amp;page=1">Katori</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1089&amp;data_from=category&amp;page=1">Double
                                                            layer platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1090&amp;data_from=category&amp;page=1">Fondue
                                                            sticks</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1091&amp;data_from=category&amp;page=1">Pasta
                                                            plate</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1092&amp;data_from=category&amp;page=1">Snacks
                                                            bowl</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1093&amp;data_from=category&amp;page=1">Snacks
                                                            platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1094&amp;data_from=category&amp;page=1">Dinner
                                                            plate</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1095&amp;data_from=category&amp;page=1">Ceramic
                                                            jars with wooden lid set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1096&amp;data_from=category&amp;page=1">Tea
                                                            holder &amp; platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1097&amp;data_from=category&amp;page=1">Tea
                                                            glass</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1098&amp;data_from=category&amp;page=1">Steel
                                                            roti box</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1099&amp;data_from=category&amp;page=1">Dish
                                                            and handle</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1100&amp;data_from=category&amp;page=1">Fruits
                                                            platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1101&amp;data_from=category&amp;page=1">Khurpi
                                                            platter set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1102&amp;data_from=category&amp;page=1">Mangowood
                                                            puzzle platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1103&amp;data_from=category&amp;page=1">Handi
                                                            set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1104&amp;data_from=category&amp;page=1">Peanut
                                                            platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1105&amp;data_from=category&amp;page=1">Bowl</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1106&amp;data_from=category&amp;page=1">Metal
                                                            buffet platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1107&amp;data_from=category&amp;page=1">Resin
                                                            coaster set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1108&amp;data_from=category&amp;page=1">Napkin
                                                            ring</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1109&amp;data_from=category&amp;page=1">Barbecue
                                                            train with skewers</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <a class="dropdown-item" href="https://www.aasabie.com/categories"
                                        style="color: #4f409c !important;left: 29%">
                                        View more

                                        <i class="czi-arrow-right"
                                            style="font-size: 8px !important;background:none !important;color:#4f409c !important;"></i>
                                    </a>
                                </ul>
                            </li>
                        </ul>

                        <ul class="navbar-nav mega-nav1 pr-2 pl-2 d-block d-xl-none"><!--mobile-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle pl-0" href="#" data-toggle="dropdown">
                                    <i class="czi-menu align-middle mt-n1 mr-2"></i>
                                    <span style="margin-left: 20px !important;">Categories</span>
                                </a>
                                <ul class="dropdown-menu" style="right: 0%; text-align: left;">
                                    <li class="dropdown">
                                        <a class="dropdown-item  "
                                            href="https://www.aasabie.com/products?id=1125&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-10-21-6533a6fca3a19.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Spa Services ( Men &amp; Women)</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=467&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca012d51de3.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Women</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=909&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Women Footwear</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=913&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Women Accessories</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=954&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Cap</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=956&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Hat</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=922&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Women&#039;s Winter Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=944&amp;data_from=category&amp;page=1">Womens
                                                            sweater</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=948&amp;data_from=category&amp;page=1">Womens
                                                            Trench coat</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=950&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Handgloves</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=958&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Hoodies &amp; Sweatshirt</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=695&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Bags</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=696&amp;data_from=category&amp;page=1">Handbags</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=697&amp;data_from=category&amp;page=1">Shoulder
                                                            Bags</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=698&amp;data_from=category&amp;page=1">Totes
                                                            Bags</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=699&amp;data_from=category&amp;page=1">Sling
                                                            Bags</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=700&amp;data_from=category&amp;page=1">Clutches</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=701&amp;data_from=category&amp;page=1">Wallets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=702&amp;data_from=category&amp;page=1">Luggage
                                                            &amp; Travel</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=491&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Women Western Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=636&amp;data_from=category&amp;page=1">Tops</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=639&amp;data_from=category&amp;page=1">Crop
                                                            Top</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=640&amp;data_from=category&amp;page=1">Tank
                                                            Top</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=641&amp;data_from=category&amp;page=1">Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=642&amp;data_from=category&amp;page=1">Jumpsuits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=644&amp;data_from=category&amp;page=1">Skirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=645&amp;data_from=category&amp;page=1">Formal
                                                            Wear</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=647&amp;data_from=category&amp;page=1">Co-Ords</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=649&amp;data_from=category&amp;page=1">Activewear</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=651&amp;data_from=category&amp;page=1">Jackets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=656&amp;data_from=category&amp;page=1">Wollen
                                                            Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=657&amp;data_from=category&amp;page=1">Cocktail
                                                            Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=658&amp;data_from=category&amp;page=1">Jeggings
                                                            | Tights</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=946&amp;data_from=category&amp;page=1">Womens
                                                            Trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=960&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Blazer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=962&amp;data_from=category&amp;page=1">Women&#039;s
                                                            shorts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=964&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Jeans</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=966&amp;data_from=category&amp;page=1">Women&#039;s
                                                            T-shirt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=969&amp;data_from=category&amp;page=1">Oversized
                                                            T- shirt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=970&amp;data_from=category&amp;page=1">T-
                                                            shirt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=987&amp;data_from=category&amp;page=1">Bodysuit</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1123&amp;data_from=category&amp;page=1">Body
                                                            Shaper</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=492&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Maternity Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=652&amp;data_from=category&amp;page=1">Maternity
                                                            Pants</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=653&amp;data_from=category&amp;page=1">Maternity
                                                            Tops</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=654&amp;data_from=category&amp;page=1">Maternity
                                                            Dresses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=655&amp;data_from=category&amp;page=1">Maternity
                                                            Sleepwear</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=493&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Lingerie &amp; Sleep Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=659&amp;data_from=category&amp;page=1">Bras</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=660&amp;data_from=category&amp;page=1">Panties</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=661&amp;data_from=category&amp;page=1">Lingerie
                                                            Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=662&amp;data_from=category&amp;page=1">Night
                                                            Dresses &amp; Nighties</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=663&amp;data_from=category&amp;page=1">Shapewear</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=664&amp;data_from=category&amp;page=1">Camisoles
                                                            &amp; Slips</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=494&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Swim &amp; Beach Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=665&amp;data_from=category&amp;page=1">Bikini
                                                            Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=666&amp;data_from=category&amp;page=1">Swimwear</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=667&amp;data_from=category&amp;page=1">Beachwear</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=495&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Ethnic Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=668&amp;data_from=category&amp;page=1">Sarees</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=669&amp;data_from=category&amp;page=1">Kurtas
                                                            &amp; Kurtis</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=670&amp;data_from=category&amp;page=1">Dress
                                                            Material</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=671&amp;data_from=category&amp;page=1">Lehenga
                                                            Choli</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=672&amp;data_from=category&amp;page=1">Long
                                                            Skirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=673&amp;data_from=category&amp;page=1">Blouses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=674&amp;data_from=category&amp;page=1">Kurta
                                                            Sets &amp; Salwar Suits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=675&amp;data_from=category&amp;page=1">Indo-western</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=676&amp;data_from=category&amp;page=1">Gowns</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=677&amp;data_from=category&amp;page=1">Dupattas</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1122&amp;data_from=category&amp;page=1">Fusion
                                                            wear</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=496&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Ethnic Bottoms</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=678&amp;data_from=category&amp;page=1">Leggings</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=679&amp;data_from=category&amp;page=1">Palazzos</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=680&amp;data_from=category&amp;page=1">Shararas</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=681&amp;data_from=category&amp;page=1">Salwars
                                                            &amp; Patiala</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=682&amp;data_from=category&amp;page=1">Dhoti
                                                            Pants</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=683&amp;data_from=category&amp;page=1">Ethnic
                                                            trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=684&amp;data_from=category&amp;page=1">Saree
                                                            Shapewear &amp; Petticoats</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=497&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Accessories</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=687&amp;data_from=category&amp;page=1">Sunglasses</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=688&amp;data_from=category&amp;page=1">Belts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=689&amp;data_from=category&amp;page=1">Scarfs</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=692&amp;data_from=category&amp;page=1">Watches</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=694&amp;data_from=category&amp;page=1">Travel
                                                            Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=952&amp;data_from=category&amp;page=1">Womens
                                                            Socks</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=466&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-01-64c911482e7f9.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Men</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=482&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Top Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=586&amp;data_from=category&amp;page=1">Formal
                                                            Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=587&amp;data_from=category&amp;page=1">Casual
                                                            Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=588&amp;data_from=category&amp;page=1">Polo
                                                            T-Shirts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=589&amp;data_from=category&amp;page=1">Denim
                                                            Jackets &amp; Casual Jackets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=965&amp;data_from=category&amp;page=1">Men&#039;s
                                                            T-shirt</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=483&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Bottom Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=592&amp;data_from=category&amp;page=1">Casual
                                                            Trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=593&amp;data_from=category&amp;page=1">Formal
                                                            Trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=594&amp;data_from=category&amp;page=1">Track
                                                            Pants</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=596&amp;data_from=category&amp;page=1">Cargos</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=597&amp;data_from=category&amp;page=1">Three
                                                            Fourths</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=945&amp;data_from=category&amp;page=1">Mens
                                                            Trousers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=961&amp;data_from=category&amp;page=1">Men&#039;s
                                                            shorts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=963&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Jeans</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=484&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Suits, Blazers &amp; Waist Coat</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=598&amp;data_from=category&amp;page=1">Formal
                                                            Suits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=600&amp;data_from=category&amp;page=1">Waist
                                                            Coats</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=959&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Blazer</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=908&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Men&#039;s Footwear</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=921&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Men&#039;s Winterwear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=943&amp;data_from=category&amp;page=1">Mens
                                                            Sweater</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=947&amp;data_from=category&amp;page=1">Mens
                                                            trench coat</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=949&amp;data_from=category&amp;page=1">Mens
                                                            handgloves</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=957&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Hoodies &amp; Sweatshirt</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1037&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Men&#039;s Accessories</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1038&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Belt</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1039&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Tie</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1040&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Socks</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1041&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Cap</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=487&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Ethnic Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=613&amp;data_from=category&amp;page=1">Sherwanis</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=614&amp;data_from=category&amp;page=1">Kurtas</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=615&amp;data_from=category&amp;page=1">Dhotis</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=616&amp;data_from=category&amp;page=1">Ethnic
                                                            Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=617&amp;data_from=category&amp;page=1">Lungis</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=618&amp;data_from=category&amp;page=1">Ethnic
                                                            Payjama</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=619&amp;data_from=category&amp;page=1">Ghamchas</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=488&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Inner Wear &amp; Lounge Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=624&amp;data_from=category&amp;page=1">Briefs
                                                            &amp; Trunks</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=625&amp;data_from=category&amp;page=1">Vests</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=626&amp;data_from=category&amp;page=1">Boxers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=627&amp;data_from=category&amp;page=1">Pajamas
                                                            &amp; Lounge Pants</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=628&amp;data_from=category&amp;page=1">Night
                                                            Suits</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=489&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Raincoats &amp; Windcheater</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=532&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca1736927ba.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Pets &amp; Pets Suppliments</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=988&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Fish</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=989&amp;data_from=category&amp;page=1">Fish
                                                            Suppliments</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=563&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Cat</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=562&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Dog</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=479&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-01-64c90fc26801e.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Organic</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=971&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Sustainable</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=972&amp;data_from=category&amp;page=1">Sustainable
                                                            Wellness</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=973&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Face Organic</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=975&amp;data_from=category&amp;page=1">Organic
                                                            Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=976&amp;data_from=category&amp;page=1">Organic
                                                            Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=977&amp;data_from=category&amp;page=1">Organic
                                                            eyeshadow palatte</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=978&amp;data_from=category&amp;page=1">Organic
                                                            Blush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=979&amp;data_from=category&amp;page=1">Organic
                                                            Liquid Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=980&amp;data_from=category&amp;page=1">Organic
                                                            concealer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=981&amp;data_from=category&amp;page=1">Organic
                                                            colour corrector</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=982&amp;data_from=category&amp;page=1">Organic
                                                            Eyeliner</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=468&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca014909c45.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Kids</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=916&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Kid&#039;s Accessories</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=910&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Kid&#039;s Footwear</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1120&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">3-6 Years Costumes</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1121&amp;data_from=category&amp;page=1">Fancy
                                                            Dress Costumes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1015&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">2-3 YEARS</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1021&amp;data_from=category&amp;page=1">GIRLS
                                                            2-3 YEARS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1022&amp;data_from=category&amp;page=1">2-3
                                                            YEARS BOYS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1016&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">4-5 YEARS</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1023&amp;data_from=category&amp;page=1">4-5
                                                            YEARS BOYS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1024&amp;data_from=category&amp;page=1">4-5
                                                            YEARS GIRLS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1018&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">6-7 YEARS</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1025&amp;data_from=category&amp;page=1">6-7
                                                            YEARS GIRLS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1026&amp;data_from=category&amp;page=1">6-7
                                                            YEARS BOYS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1019&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">8-9 YEARS</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1027&amp;data_from=category&amp;page=1">8-9
                                                            YEARS GIRLS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1028&amp;data_from=category&amp;page=1">8-9
                                                            YEARS BOYS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1020&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">10-11 YEARS</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1029&amp;data_from=category&amp;page=1">10-11
                                                            YEARS BOYS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1030&amp;data_from=category&amp;page=1">10-11
                                                            YEARS GIRLS</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1032&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Kids Ethnic Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1033&amp;data_from=category&amp;page=1">Kids
                                                            Lehenga Set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1118&amp;data_from=category&amp;page=1">Kids
                                                            Salwar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1034&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Kids Western Wear</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1035&amp;data_from=category&amp;page=1">Kids
                                                            Top</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1036&amp;data_from=category&amp;page=1">Frock</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1042&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Infant</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1043&amp;data_from=category&amp;page=1">Swaddle</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=501&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">New Born [0-12 Months]</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=498&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Girls [6-14 Years]</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=499&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Boys [6-14 years]</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=500&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Baby Boy [9 Month - 6 Years]</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=502&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Baby Accessories</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=470&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca0165beea9.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Unisex</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=505&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Personal care</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=912&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Unisex Footwear</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=914&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Unisex Accessories</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1031&amp;data_from=category&amp;page=1">UNISEX
                                                            SOCKS</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1052&amp;data_from=category&amp;page=1">Unisex
                                                            Bracelet</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=1044&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Bath Essentials</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=469&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-01-64c90a58899fa.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">LGBTQ</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=510&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Pride Fashion</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=915&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Pride Accessories</span>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item  "
                                                    href="https://www.aasabie.com/products?id=911&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Pride Footwear</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=475&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca17b4be5a6.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Cosmetics</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=547&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Face</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=798&amp;data_from=category&amp;page=1">Face
                                                            Primer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=799&amp;data_from=category&amp;page=1">Concealer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=800&amp;data_from=category&amp;page=1">Foundation</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=801&amp;data_from=category&amp;page=1">Compact</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=802&amp;data_from=category&amp;page=1">Contour</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=803&amp;data_from=category&amp;page=1">Loose
                                                            Powder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=804&amp;data_from=category&amp;page=1">Blush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=805&amp;data_from=category&amp;page=1">Bronzer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=806&amp;data_from=category&amp;page=1">Tinted
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=807&amp;data_from=category&amp;page=1">BB
                                                            &amp; CC Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=808&amp;data_from=category&amp;page=1">Highlighters</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=809&amp;data_from=category&amp;page=1">Setting
                                                            Spray</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=810&amp;data_from=category&amp;page=1">Makeup
                                                            Remover</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=811&amp;data_from=category&amp;page=1">Sindoor</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=548&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Eyes</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=812&amp;data_from=category&amp;page=1">Kajal</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=813&amp;data_from=category&amp;page=1">Eyeliner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=814&amp;data_from=category&amp;page=1">Mascara</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=815&amp;data_from=category&amp;page=1">Eye
                                                            Shadow</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=816&amp;data_from=category&amp;page=1">Eye
                                                            Brow Enhancers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=817&amp;data_from=category&amp;page=1">Eye
                                                            Primer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=818&amp;data_from=category&amp;page=1">False
                                                            Eyelashes</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=819&amp;data_from=category&amp;page=1">Eye
                                                            Makeup Remover</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=820&amp;data_from=category&amp;page=1">Under
                                                            Eye Concealer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=821&amp;data_from=category&amp;page=1">Contact
                                                            Lenses</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=549&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Lips</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=822&amp;data_from=category&amp;page=1">Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=823&amp;data_from=category&amp;page=1">Liquid
                                                            Lipstick</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=826&amp;data_from=category&amp;page=1">Lip
                                                            Liner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=827&amp;data_from=category&amp;page=1">Lip
                                                            Plumper</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=828&amp;data_from=category&amp;page=1">Lip
                                                            Stain</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=829&amp;data_from=category&amp;page=1">Lip
                                                            Primer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=923&amp;data_from=category&amp;page=1">Lip
                                                            Crayon</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1119&amp;data_from=category&amp;page=1">Lip
                                                            &amp; Cheek Tint</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=550&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Nails</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=830&amp;data_from=category&amp;page=1">Nail
                                                            Polish</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=831&amp;data_from=category&amp;page=1">Nail
                                                            Art Kits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=832&amp;data_from=category&amp;page=1">Nail
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=833&amp;data_from=category&amp;page=1">Nail
                                                            Polish Remover</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=834&amp;data_from=category&amp;page=1">Nail
                                                            Polish Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=835&amp;data_from=category&amp;page=1">Manicure
                                                            &amp; Pedicure Kits</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=551&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Tools &amp; Brushes</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=836&amp;data_from=category&amp;page=1">Face
                                                            Brush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=837&amp;data_from=category&amp;page=1">Eye
                                                            Brush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=838&amp;data_from=category&amp;page=1">Lip
                                                            Brush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=839&amp;data_from=category&amp;page=1">Brush
                                                            Sets</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=840&amp;data_from=category&amp;page=1">Brush
                                                            Cleansers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=841&amp;data_from=category&amp;page=1">Sponges
                                                            &amp; Applicators</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=842&amp;data_from=category&amp;page=1">Eyelash
                                                            Curlers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=843&amp;data_from=category&amp;page=1">Tweezers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=844&amp;data_from=category&amp;page=1">Sharpeners</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=845&amp;data_from=category&amp;page=1">Mirrors</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=846&amp;data_from=category&amp;page=1">Makeup
                                                            Pouches</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=847&amp;data_from=category&amp;page=1">Blush
                                                            Brush</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=552&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Makeup Palettes</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=848&amp;data_from=category&amp;page=1">Multi-functional
                                                            Palettes</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=849&amp;data_from=category&amp;page=1">Makeup
                                                            Palettes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=553&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Makeup kits &amp; Combos</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=850&amp;data_from=category&amp;page=1">Makeup
                                                            Kits</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=851&amp;data_from=category&amp;page=1">Makeup
                                                            Combos</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=471&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca026c9832e.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Personal Care</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=511&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Men</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=726&amp;data_from=category&amp;page=1">Cleaners</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=729&amp;data_from=category&amp;page=1">Moisturizer
                                                            with SPF/antioxidants for daytime</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=730&amp;data_from=category&amp;page=1">Moisturizer
                                                            with retinol for nighttime</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=731&amp;data_from=category&amp;page=1">Eye
                                                            Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=732&amp;data_from=category&amp;page=1">Lip
                                                            balm</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=733&amp;data_from=category&amp;page=1">Hand
                                                            Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=734&amp;data_from=category&amp;page=1">Blemish
                                                            gel</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=735&amp;data_from=category&amp;page=1">Shower
                                                            gel &amp; Body wash</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=736&amp;data_from=category&amp;page=1">Antiperspirant</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=737&amp;data_from=category&amp;page=1">Cologne</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=738&amp;data_from=category&amp;page=1">Shampoo</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=739&amp;data_from=category&amp;page=1">Conditioner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=740&amp;data_from=category&amp;page=1">Hair
                                                            styling product</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=741&amp;data_from=category&amp;page=1">Face
                                                            cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=742&amp;data_from=category&amp;page=1">Face
                                                            wash</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=743&amp;data_from=category&amp;page=1">Body
                                                            Scrubs</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=744&amp;data_from=category&amp;page=1">Face
                                                            Scrub</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=745&amp;data_from=category&amp;page=1">Soaps</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=746&amp;data_from=category&amp;page=1">Bath
                                                            Salts</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=747&amp;data_from=category&amp;page=1">Bath
                                                            Accessories</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=748&amp;data_from=category&amp;page=1">Mouthwash</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=749&amp;data_from=category&amp;page=1">Toothpaste</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=750&amp;data_from=category&amp;page=1">Toothbrush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=751&amp;data_from=category&amp;page=1">Floss
                                                            &amp; Tongue Cleaners</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=924&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Fragrance</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=927&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Sunscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=930&amp;data_from=category&amp;page=1">Men&#039;s
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=934&amp;data_from=category&amp;page=1">Mens
                                                            Body Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=935&amp;data_from=category&amp;page=1">Mens
                                                            Eye Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=936&amp;data_from=category&amp;page=1">Mens
                                                            kits &amp; combos</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=937&amp;data_from=category&amp;page=1">Mens
                                                            toner</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=512&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Women</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=754&amp;data_from=category&amp;page=1">Cleansers</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=755&amp;data_from=category&amp;page=1">Masks</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=757&amp;data_from=category&amp;page=1">Neck
                                                            Creams</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=759&amp;data_from=category&amp;page=1">Hands
                                                            &amp; Feet</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=760&amp;data_from=category&amp;page=1">Specialised
                                                            Skincare</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=762&amp;data_from=category&amp;page=1">Lip
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=763&amp;data_from=category&amp;page=1">Sun
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=766&amp;data_from=category&amp;page=1">Hair
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=767&amp;data_from=category&amp;page=1">Bath
                                                            &amp; Shower</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=769&amp;data_from=category&amp;page=1">Feminine
                                                            Hygiene</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=770&amp;data_from=category&amp;page=1">Shaving
                                                            &amp; Hair Removal</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=771&amp;data_from=category&amp;page=1">Hygiene
                                                            Essentials</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=772&amp;data_from=category&amp;page=1">Oral
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=792&amp;data_from=category&amp;page=1">Face
                                                            Serum</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=925&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Fragrances</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=928&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Sunscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=931&amp;data_from=category&amp;page=1">Women&#039;s
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=938&amp;data_from=category&amp;page=1">Womens
                                                            body care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=939&amp;data_from=category&amp;page=1">Womens
                                                            Eye care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=940&amp;data_from=category&amp;page=1">Womens
                                                            kits &amp; combos</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=941&amp;data_from=category&amp;page=1">Women&#039;s
                                                            toner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1068&amp;data_from=category&amp;page=1">Multani
                                                            mitti</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1070&amp;data_from=category&amp;page=1">Sandalwood
                                                            Powder</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=513&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Kids</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=773&amp;data_from=category&amp;page=1">Lotions</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=774&amp;data_from=category&amp;page=1">Baby
                                                            Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=775&amp;data_from=category&amp;page=1">Baby
                                                            Hair Oil</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=776&amp;data_from=category&amp;page=1">Baby
                                                            Lip Balm</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=777&amp;data_from=category&amp;page=1">Baby
                                                            Lotion</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=779&amp;data_from=category&amp;page=1">Baby
                                                            Wash</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=780&amp;data_from=category&amp;page=1">Oils</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=781&amp;data_from=category&amp;page=1">Soap</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=932&amp;data_from=category&amp;page=1">Kids
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1061&amp;data_from=category&amp;page=1">Kids
                                                            Toothbrush</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=514&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Unisex</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=782&amp;data_from=category&amp;page=1">Facial
                                                            Cleanser</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=783&amp;data_from=category&amp;page=1">Facial
                                                            Scrub</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=784&amp;data_from=category&amp;page=1">Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=785&amp;data_from=category&amp;page=1">Face
                                                            Serum</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=786&amp;data_from=category&amp;page=1">Lip
                                                            Balm</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=788&amp;data_from=category&amp;page=1">Eye
                                                            Cream</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=926&amp;data_from=category&amp;page=1">Unisex
                                                            Fragrances</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=929&amp;data_from=category&amp;page=1">Unisex
                                                            Sunscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=933&amp;data_from=category&amp;page=1">Unisex
                                                            Moisturizer</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=942&amp;data_from=category&amp;page=1">Unisex
                                                            Body care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=983&amp;data_from=category&amp;page=1">Unisex
                                                            Haircare</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=984&amp;data_from=category&amp;page=1">Unisex
                                                            Toner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=985&amp;data_from=category&amp;page=1">Unisex
                                                            Mask</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=986&amp;data_from=category&amp;page=1">Unisex
                                                            Comb</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1047&amp;data_from=category&amp;page=1">Hand
                                                            Towel</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1049&amp;data_from=category&amp;page=1">Face
                                                            Towel</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1058&amp;data_from=category&amp;page=1">Unisex
                                                            Toothbrush</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1059&amp;data_from=category&amp;page=1">Bath
                                                            Towel</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1065&amp;data_from=category&amp;page=1">Tongue
                                                            cleaner</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1069&amp;data_from=category&amp;page=1">Wood
                                                            Comb</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=519&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Mom &amp; Baby</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=793&amp;data_from=category&amp;page=1">Baby
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=794&amp;data_from=category&amp;page=1">Kids
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=795&amp;data_from=category&amp;page=1">Maternity
                                                            Care</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=796&amp;data_from=category&amp;page=1">Nursing
                                                            &amp; feeding</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=797&amp;data_from=category&amp;page=1">Gift
                                                            Sets</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                            href="https://www.aasabie.com/products?id=472&amp;data_from=category&amp;page=1">
                                            <img src="https://www.aasabie.com/storage/app/public/category/2023-08-02-64ca1819485a4.png"
                                                onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                                style="width: 18px; height: 18px; ">
                                            <span class="pl-3">Home Decor</span>
                                        </a>
                                        <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=879&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Home Decor Item</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=880&amp;data_from=category&amp;page=1">Wall
                                                            Art</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=881&amp;data_from=category&amp;page=1">Figurine</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=882&amp;data_from=category&amp;page=1">Artificial
                                                            Plant</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=883&amp;data_from=category&amp;page=1">Shelf</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=884&amp;data_from=category&amp;page=1">Candle
                                                            Holder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=885&amp;data_from=category&amp;page=1">Vase</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=886&amp;data_from=category&amp;page=1">Lampshade</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=887&amp;data_from=category&amp;page=1">Home
                                                            Mirror</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=888&amp;data_from=category&amp;page=1">Hanging
                                                            Ornament</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=889&amp;data_from=category&amp;page=1">Sticker
                                                            Decal</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=890&amp;data_from=category&amp;page=1">Showpieces</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1054&amp;data_from=category&amp;page=1">Planter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1062&amp;data_from=category&amp;page=1">Wax
                                                            Candle</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1110&amp;data_from=category&amp;page=1">Glass
                                                            votive set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1111&amp;data_from=category&amp;page=1">Glass
                                                            jar</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1112&amp;data_from=category&amp;page=1">Detachable
                                                            Set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1113&amp;data_from=category&amp;page=1">Urli
                                                            Set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1114&amp;data_from=category&amp;page=1">Tealight
                                                            holder</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1115&amp;data_from=category&amp;page=1">Tray</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1116&amp;data_from=category&amp;page=1">Lobaan</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1117&amp;data_from=category&amp;page=1">Wall
                                                            Clock</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1124&amp;data_from=category&amp;page=1">Sofa
                                                            Set</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle " data-toggle='dropdown'
                                                    href="https://www.aasabie.com/products?id=1075&amp;data_from=category&amp;page=1">
                                                    <span class="pl-3">Kitchen and Dinning</span>
                                                </a>
                                                <ul class="dropdown-menu" style="right: 100%; text-align: left;">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1076&amp;data_from=category&amp;page=1">Steel
                                                            Bar set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1077&amp;data_from=category&amp;page=1">Tea/Coffee
                                                            glass</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1078&amp;data_from=category&amp;page=1">Rack
                                                            for bottles</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1079&amp;data_from=category&amp;page=1">Cake
                                                            Knife</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1080&amp;data_from=category&amp;page=1">Knife</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1081&amp;data_from=category&amp;page=1">Steel
                                                            serve set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1082&amp;data_from=category&amp;page=1">Steel
                                                            serving set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1083&amp;data_from=category&amp;page=1">Long
                                                            stem server set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1084&amp;data_from=category&amp;page=1">Tray
                                                            set with kullad</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1085&amp;data_from=category&amp;page=1">Bowl
                                                            set with mug</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1086&amp;data_from=category&amp;page=1">Aluminum
                                                            platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1087&amp;data_from=category&amp;page=1">Dry
                                                            fruits platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1088&amp;data_from=category&amp;page=1">Katori</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1089&amp;data_from=category&amp;page=1">Double
                                                            layer platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1090&amp;data_from=category&amp;page=1">Fondue
                                                            sticks</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1091&amp;data_from=category&amp;page=1">Pasta
                                                            plate</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1092&amp;data_from=category&amp;page=1">Snacks
                                                            bowl</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1093&amp;data_from=category&amp;page=1">Snacks
                                                            platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1094&amp;data_from=category&amp;page=1">Dinner
                                                            plate</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1095&amp;data_from=category&amp;page=1">Ceramic
                                                            jars with wooden lid set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1096&amp;data_from=category&amp;page=1">Tea
                                                            holder &amp; platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1097&amp;data_from=category&amp;page=1">Tea
                                                            glass</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1098&amp;data_from=category&amp;page=1">Steel
                                                            roti box</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1099&amp;data_from=category&amp;page=1">Dish
                                                            and handle</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1100&amp;data_from=category&amp;page=1">Fruits
                                                            platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1101&amp;data_from=category&amp;page=1">Khurpi
                                                            platter set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1102&amp;data_from=category&amp;page=1">Mangowood
                                                            puzzle platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1103&amp;data_from=category&amp;page=1">Handi
                                                            set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1104&amp;data_from=category&amp;page=1">Peanut
                                                            platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1105&amp;data_from=category&amp;page=1">Bowl</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1106&amp;data_from=category&amp;page=1">Metal
                                                            buffet platter</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1107&amp;data_from=category&amp;page=1">Resin
                                                            coaster set</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1108&amp;data_from=category&amp;page=1">Napkin
                                                            ring</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="https://www.aasabie.com/products?id=1109&amp;data_from=category&amp;page=1">Barbecue
                                                            train with skewers</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Primary menu-->
                        <ul class="navbar-nav" style="">
                            <li class="nav-item dropdown ">
                                <a class="nav-link" href="https://www.aasabie.com">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">All Brands</a>
                                <ul class="dropdown-menu dropdown-menu-left scroll-bar" style="text-align: left;">
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=110&amp;data_from=brand&amp;page=1">
                                                Two Hearts Fashion by House of The Pickmart
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 1 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=109&amp;data_from=brand&amp;page=1">
                                                Green Looks Salon
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=107&amp;data_from=brand&amp;page=1">
                                                Jaipur Trendz
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=106&amp;data_from=brand&amp;page=1">
                                                Vedic Fashion
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=105&amp;data_from=brand&amp;page=1">
                                                Pinkroot
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=104&amp;data_from=brand&amp;page=1">
                                                Epoxy Gememi
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 2 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=103&amp;data_from=brand&amp;page=1">
                                                SOUVENIR
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 6 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=102&amp;data_from=brand&amp;page=1">
                                                NASH AND HAMES PRIVATE LIMITED
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=100&amp;data_from=brand&amp;page=1">
                                                BITES OF BLISS
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=99&amp;data_from=brand&amp;page=1">
                                                Maryam
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=98&amp;data_from=brand&amp;page=1">
                                                Mafashion
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 5 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=97&amp;data_from=brand&amp;page=1">
                                                Ethnic Oyster
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=94&amp;data_from=brand&amp;page=1">
                                                BANDH PITARA
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=92&amp;data_from=brand&amp;page=1">
                                                Abhinav traders
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=91&amp;data_from=brand&amp;page=1">
                                                EYENAA
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=90&amp;data_from=brand&amp;page=1">
                                                Rutu&#039;s Kreations
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=88&amp;data_from=brand&amp;page=1">
                                                Dress 2 Impress
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=87&amp;data_from=brand&amp;page=1">
                                                Heeva Creation
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 7 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=86&amp;data_from=brand&amp;page=1">
                                                Healthy Forever
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=84&amp;data_from=brand&amp;page=1">
                                                Indo Crown
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=83&amp;data_from=brand&amp;page=1">
                                                Astitva Homes
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=82&amp;data_from=brand&amp;page=1">
                                                Rajasthan emporium and handicrafts
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=80&amp;data_from=brand&amp;page=1">
                                                Bel à Vous
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 200 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=76&amp;data_from=brand&amp;page=1">
                                                ILYANA
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=75&amp;data_from=brand&amp;page=1">
                                                THE ARTS ALAYA
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=74&amp;data_from=brand&amp;page=1">
                                                YASH FASHION
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=73&amp;data_from=brand&amp;page=1">
                                                Hreem Creations
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=72&amp;data_from=brand&amp;page=1">
                                                Launceston
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=71&amp;data_from=brand&amp;page=1">
                                                Bunko Junko
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 20 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=70&amp;data_from=brand&amp;page=1">
                                                VMP Casuals
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 10 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=69&amp;data_from=brand&amp;page=1">
                                                Brado Jewellery
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=68&amp;data_from=brand&amp;page=1">
                                                Simon Art and Printing
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 43 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=67&amp;data_from=brand&amp;page=1">
                                                Darling Fashions
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=66&amp;data_from=brand&amp;page=1">
                                                ZOFF
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=64&amp;data_from=brand&amp;page=1">
                                                Siron.c
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 15 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=63&amp;data_from=brand&amp;page=1">
                                                IKTAC Creations
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=61&amp;data_from=brand&amp;page=1">
                                                Payal Sarees
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=60&amp;data_from=brand&amp;page=1">
                                                Sparsh
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=59&amp;data_from=brand&amp;page=1">
                                                Arihant Traders
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=55&amp;data_from=brand&amp;page=1">
                                                SNA fabrics and Silhouette pvt ltd
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=53&amp;data_from=brand&amp;page=1">
                                                Winddura Furnishers
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=52&amp;data_from=brand&amp;page=1">
                                                Paxal&#039;s Paridhan
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=50&amp;data_from=brand&amp;page=1">
                                                www.mehrang.co.in
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 214 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=49&amp;data_from=brand&amp;page=1">
                                                TN 24 Menswear
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=47&amp;data_from=brand&amp;page=1">
                                                Andani Gift Gallery
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 50 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=46&amp;data_from=brand&amp;page=1">
                                                Go2eight
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 98 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=43&amp;data_from=brand&amp;page=1">
                                                Ecotyl
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 21 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=42&amp;data_from=brand&amp;page=1">
                                                Om Traders
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=41&amp;data_from=brand&amp;page=1">
                                                Trudiance
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 34 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=40&amp;data_from=brand&amp;page=1">
                                                Choice Footwear
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=39&amp;data_from=brand&amp;page=1">
                                                Vittals
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=38&amp;data_from=brand&amp;page=1">
                                                Funday Fashion
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=37&amp;data_from=brand&amp;page=1">
                                                Gurjari Jewellers
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 1 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=34&amp;data_from=brand&amp;page=1">
                                                Unhattar
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 6 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=33&amp;data_from=brand&amp;page=1">
                                                Rashida Creation
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=32&amp;data_from=brand&amp;page=1">
                                                Abstract naturals co
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=31&amp;data_from=brand&amp;page=1">
                                                SHADAB FABRICS
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=30&amp;data_from=brand&amp;page=1">
                                                Miraco. Handloom cottage industries
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=29&amp;data_from=brand&amp;page=1">
                                                Cottage arts &amp; craft emporium
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=28&amp;data_from=brand&amp;page=1">
                                                Navrang nx
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 253 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=25&amp;data_from=brand&amp;page=1">
                                                BAMBOOLOGY
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 83 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=24&amp;data_from=brand&amp;page=1">
                                                Rahmani Handloom
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=22&amp;data_from=brand&amp;page=1">
                                                Artizay
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 23 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=21&amp;data_from=brand&amp;page=1">
                                                Icawnic
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 13 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=20&amp;data_from=brand&amp;page=1">
                                                Be You by Sejal Dharia
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=19&amp;data_from=brand&amp;page=1">
                                                Party Mart
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=18&amp;data_from=brand&amp;page=1">
                                                HARKOI ECOM (OPC) PRIVATE LIMITED
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 60 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=17&amp;data_from=brand&amp;page=1">
                                                BlushBee Organic Beauty
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 26 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=16&amp;data_from=brand&amp;page=1">
                                                Arogya Gluten Free Foods
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=14&amp;data_from=brand&amp;page=1">
                                                TVAM Naturally Yours
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 36 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=13&amp;data_from=brand&amp;page=1">
                                                Gayatri Healthcare Products
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=12&amp;data_from=brand&amp;page=1">
                                                Earth N Pure
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 36 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=11&amp;data_from=brand&amp;page=1">
                                                Dishaa Apparels
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 16 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=10&amp;data_from=brand&amp;page=1">
                                                Frescia
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 19 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=9&amp;data_from=brand&amp;page=1">
                                                Amaya Decors
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 226 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=8&amp;data_from=brand&amp;page=1">
                                                attiitude jayanagar
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=7&amp;data_from=brand&amp;page=1">
                                                MISHMASH BY MANISHA
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 11 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=6&amp;data_from=brand&amp;page=1">
                                                Sanriya
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=5&amp;data_from=brand&amp;page=1">
                                                MaySay Beauty
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 16 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=4&amp;data_from=brand&amp;page=1">
                                                Destello
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 10 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=3&amp;data_from=brand&amp;page=1">
                                                Nine Box
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 48 )</span>
                                        </div>
                                    </li>
                                    <li
                                        style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:space-between; ">
                                        <div>
                                            <a class="dropdown-item"
                                                href="https://www.aasabie.com/products?id=2&amp;data_from=brand&amp;page=1">
                                                Fancy Gallery
                                            </a>
                                        </div>
                                        <div class="align-baseline">
                                            <span class="count-value px-2">( 17 )</span>
                                        </div>
                                    </li>
                                    <li style="border-bottom: 1px solid #e3e9ef; display:flex; justify-content:center;">
                                        <div>
                                            <a class="dropdown-item" href="https://www.aasabie.com/brands"
                                                style="color: #4f409c !important;">
                                                View more
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link text-capitalize"
                                    href="https://www.aasabie.com/products?data_from=discounted&amp;page=1">Discounted
                                    products</a>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link" href="https://www.aasabie.com/sellers">All Sellers</a>
                            </li>

                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        style="color: white;margin-top: 5px; padding-left: 0">
                                        Seller Zone
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                        style="min-width: 165px !important; text-align: left;">
                                        <a class="dropdown-item" href="https://www.aasabie.com/shop/apply">
                                            Become a Seller
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="https://www.aasabie.com/seller/auth/login">
                                            Seller Login
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        function myFunction() {
            $('#anouncement').addClass('d-none').removeClass('d-flex')
        }
    </script>
    <!-- Page title-->


    <div class="row">
        <div class="col-12" style="margin-top:10rem;position: fixed;z-index: 9999;">
            <div id="loading" style="display: none;">
                <center>
                    <img width="200"
                        src="https://www.aasabie.com/storage/app/public/company/2023-06-18-648e8ec2b41ac.png"
                        onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/loader.gif'">
                </center>
            </div>
        </div>
    </div>


    <!-- Page Content-->
    <div class="container py-4 py-lg-5 my-4" style="text-align: left;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 box-shadow">
                    <div class="card-body">
                        <h2 class="h4 mb-1">Sign in</h2>
                        <hr class="mt-2">
                        @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form class="needs-validation mt-2" autocomplete="off"
                            action="https://www.aasabie.com/customer/auth/login" method="post" id="form-id">
                            <input type="hidden" name="_token" value="V66PzBn9km396MetvqNhAvhZPVqXhVARKZR2Cu2W">
                            <div class="form-group">
                                <label for="si-email">Email address
                                    / Phone</label>
                                <input class="form-control" type="text" name="user_id" id="si-email"
                                    style="text-align: left;" value="" placeholder="Enter email address or phone number"
                                    required>
                                <div class="invalid-feedback">Please provide valid email or phone number
                                    .
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="si-password">Password</label>
                                <div class="password-toggle">
                                    <input class="form-control" name="password" type="password" id="si-password"
                                        style="text-align: left;" required>
                                    <label class="password-toggle-btn">
                                        <input class="custom-control-input" type="checkbox"><i
                                            class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show
                                            Password </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">

                                <div class="form-group">
                                    <input type="checkbox" class="mr-1" name="remember" id="remember">

                                    <label class="" for="remember">Remember me</label>
                                </div>
                                <a class="font-size-sm" href="https://www.aasabie.com/customer/auth/recover-password">
                                    Forgot password?
                                </a>
                            </div>

                            <div id="recaptcha_element" style="width: 100%;" data-type="image"></div>
                            <br />
                            <button class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12 flex-between row p-0" style="direction: ltr">
                                <div class="mb-3 ml-2">
                                    <h6>No account Sign up now</h6>
                                </div>
                                <div class="mb-3 ">
                                    <a class="btn btn-outline-primary"
                                        href="https://www.aasabie.com/customer/auth/register">
                                        <i class="fa fa-user-circle"></i> Sign up
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center mb-1">
                                <a class="btn btn-outline-primary"
                                    href="https://www.aasabie.com/customer/auth/login/google" style="width: 100%">
                                    <i class="czi-google mr-2 ml-n1"></i>Sign in with google
                                </a>
                            </div>

                            <div class="col-sm-6 text-center mb-1">
                                <a class="btn affinidi-login-button" href="/login/affinidi">
                                    <img alt="logo affinidi" class="affinidi-login-img"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAExUlEQVRoge2ZT2iURxjGf+/styZmq1WjiSQbkSYYCwVrRNCDUJUehEqhQrSHilpq1UsvxYMglUov0ksp2CoE+8eDUPDQQy/9Z/9SWoyeihW1rckGjTVWaVw3uztPD18SNcluvk2yyR7ywMB++80z87zzzbzvvDMwi1lMCjZF7cSgJQH354SPNQNwpR/IR2+iPgEkwBSdE+QnaEBDDbi1YBswrQGWA7VA1WCFDNAH/IXsPOgHyP4GN/sLt9l4CGeHgPsRRcQQV4MShbfi3B7ENqAZVGzAmoBVwIvhY/waljyL9x3Qc2lUbWfzEAlQIpIUA7C7LprwZCOu8TjmLiAOYmrGiop/pCMNlaeQ3sTcBVzyBDQmR1T02KCwKCVEPoIBja9gdILtxzS3pCk6yhgDUzXSXsw6oWnXxBsLUcSANfFw1PkEUx1MQvgwBtswwLQE06nwawAoN4E+rMAaaJmP9Z5GtvXRfssCsRe3bCH+eg/UgKsFRe+wgBdqrAV7BpSZIpnjIGULNv+0Pt395e+ZP47chuUxyI5HMiA9DeKioe5lHavfoY5SeRG9UPlhyuWk/J4l23O7S+FVjAFeeCQMHWvYoaaovIoxICbnAQxbnPP5w1F5g16oqRnT+0CM8vqcsaHufPqfX1ur69aB8oB2xlccXp69fDSPJQs4GjmM7tAAx6ugLdOneKQW8Nl7w4/mgqq5S597Pnv56KCfLDCmsi4H9Qmkl6ZF6Jgihn6EIV4SSMxZtEo2b4Pwd4qxMw6CdcCKMsuMDDMDPLGqhRZPbhH0U2zX73BuU9EaMwBJYI6q2tXj1g2QNoasmbJhaA6NFhAkmkIvKc8ohxnWnhsgTgGfMxPe56GSgXhi2QtIm4b/kydINPZS3fYeDy7moOFxA4WB+ipm6izdoSPe594yLPwWEmbu76f3uZZzGy1XiFcxgSzvc/HhpTi8G1XNpeMsLMarGAMmiooxIOaC7MOEZ2hm2/2VBygaCAJIvkZ4ojBDixige2Dg30sb4k+2An5o/uOz96rPbdl8ENzoRRyu9L4AYzewfgZUD0IgyPZfJ75g5cNhNEeuP1XPg853sIbRNANkPQFm3yKtn1SyPhk8vpV4bJRz/V1hADBHgQmSdnj/TaG3MwWzMA5kbl8Yt66D3C/A5fLLigZJgCOfuaNs1xcGT1BsfB3c7Mfs7LQpHInhSRNuJcwMzBjou2j670fDLSjGrgrzAU8HZs8yUwkN5F18fivQDCCfy6RvfPc9kA+3DGNtGMKEZlpVFsPS9vzbde1Z1W/Pqa49dzIqr2ICWd68AxC6FbjY0ai8Ek+nywdnOIUbuYM9Z6wrKq9iDJAFgUFH7xn7qBReAQOm/2gx3fvzjXTqq6+BtaUcLRbIB1rmY5nToK1TK7SQFPdZeLibeAO3qJTD3asFFvGVe6huG2Yfhh2oPAXAOIm/3o5L3g19vi+JX8QLnc/iu/Yj7UTWOzV5/yNtyG4h7cJ3vz74LphAH4rgRlOfItpAHyBLTy75F8jS4E4gtUHq40k0BkSOA90pfOoA8qsxjiG7iizaScZQPdk1sHeRb8N37YPUiCgqhyByCREr9zXrn8g6y3nNOoUX3YtrYM6gAdN30V2KyFnMYgz8D4yD44VCwb0lAAAAAElFTkSuQmCC"
                                        crossorigin="anonymous" class="sc-dmyDmy fxYwlQ">
                                    Affinidi Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer-->
    <!-- Footer-->
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->
    <div class="section newsletter_small">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="heading_s1 mb-md-0">
                        <h3 class="text-white">Subscribe Our Newsletter</h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsletter_form">
                        <form>
                            <input type="text" required="" class="form-control rounded-0"
                                placeholder="Enter Email Address">
                            <button type="submit" class="btn btn-fill-out rounded-0 btn-send" name="submit"
                                value="Submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    <!-- START FOOTER -->
    <footer class="bg_gray">
        <div class="footer_top small_pt pb_20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <div class="footer_logo">
                                <a href="https://www.aasabie.com">
                                    <img style="height: 46px!important; width: 180px;"
                                        src="https://www.aasabie.com/storage/app/public/company/2023-06-18-648e8ec2b2642.png"
                                        onerror="this.src='https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png'"
                                        alt="Aasabie" />
                                </a>
                            </div>
                            <p class="mb-3">Aasabie is one of the best website to find fashionable and affordable
                                western wear for women. With a constantly updating inventory of casual, formal, and
                                partywear.</p>
                            <ul class="contact_info">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>260, 9th A Main Rd, Jaya Nagar 1st Block, Jayanagar 3rd Block, Jayanagar,
                                        Bengaluru, Karnataka 560041</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:support@aasabie.com">support@aasabie.com</a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+91- 9901880844</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="https://www.aasabie.com/about-us">About Company</a></li>
                                <li><a href="https://www.aasabie.com/contacts">Contact Us</a></li>
                                <li><a href="https://www.aasabie.com/helpTopic">FAQ</a></li>
                                <li><a href="https://www.aasabie.com/terms">Terms &amp; Conditions</a></li>
                                <li><a href="https://www.aasabie.com/privacy-policy">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="https://www.aasabie.com/customer/auth/login">My Account</a></li>
                                <li><a href="https://www.aasabie.com/customer/auth/login">Wish List</a></li>
                                <li><a href="https://www.aasabie.com/customer/auth/login">Track Order</a></li>
                                <li><a href="https://www.aasabie.com/customer/auth/login">Address</a></li>
                                <li><a href="https://www.aasabie.com/customer/auth/login">Support Ticket</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="widget">
                            <h6 class="widget_title">Instagram</h6>
                            <ul class="widget_instafeed instafeed_col4">
                                <li><a href="#"><img
                                            src="https://www.aasabie.com/public/assets/front-end/img/new/insta_img1.jpg"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img
                                            src="https://www.aasabie.com/public/assets/front-end/img/new/insta_img2.jpg"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img
                                            src="https://www.aasabie.com/public/assets/front-end/img/new/insta_img3.jpg"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img
                                            src="https://www.aasabie.com/public/assets/front-end/img/new/insta_img4.jpg"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img
                                            src="https://www.aasabie.com/public/assets/front-end/img/new/insta_img5.jpg"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img
                                            src="https://www.aasabie.com/public/assets/front-end/img/new/insta_img6.jpg"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img
                                            src="https://www.aasabie.com/public/assets/front-end/img/new/insta_img7.jpg"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img
                                            src="https://www.aasabie.com/public/assets/front-end/img/new/insta_img8.jpg"
                                            alt="insta_img"><span class="insta_icon"><i
                                                class="ti-instagram"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="middle_footer">-->
        <!--	<div class="container">-->
        <!--    	<div class="row">-->
        <!--        	<div class="col-12">-->
        <!--            	<div class="shopping_info">-->
        <!--                    <div class="row justify-content-center">-->
        <!--                        <div class="col-md-4">	-->
        <!--                            <div class="icon_box icon_box_style2">-->
        <!--                                <div class="icon">-->
        <!--                                    <i class="flaticon-shipped"></i>-->
        <!--                                </div>-->
        <!--                                <div class="icon_box_content">-->
        <!--                                	<h5>Free Delivery</h5>-->
        <!--                                    <p>Phasellus blandit massa enim elit of passage varius nunc.</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-4">	-->
        <!--                            <div class="icon_box icon_box_style2">-->
        <!--                                <div class="icon">-->
        <!--                                    <i class="flaticon-money-back"></i>-->
        <!--                                </div>-->
        <!--                                <div class="icon_box_content">-->
        <!--                                	<h5>30 Day Returns Guarantee</h5>-->
        <!--                                    <p>Phasellus blandit massa enim elit of passage varius nunc.</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-4">	-->
        <!--                            <div class="icon_box icon_box_style2">-->
        <!--                                <div class="icon">-->
        <!--                                    <i class="flaticon-support"></i>-->
        <!--                                </div>-->
        <!--                                <div class="icon_box_content">-->
        <!--                                	<h5>27/4 Online Support</h5>-->
        <!--                                    <p>Phasellus blandit massa enim elit of passage varius nunc.</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- Grid row -->
        <div style="background-color: #151515;">
            <div class="container">
                <div class="row end-footer footer-end last-footer-content-align justify-content-between">
                    <div class=" mt-4">
                        <p class="text-left text-white" style="font-size: 16px;">Copyright Pick Mart Technologies PVT
                            LTD @2022 - 2023 Aasabie India</p>
                    </div>
                    <div class="mt-md-4 mt-0 mb-md-3 text-left">
                        <span class="social-media ">
                            <a class="social-btn sb-light sb-linkedin mr-2 mb-2" target="_blank"
                                href="https://www.linkedin.com/company/aasabie-x/">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </span>
                        <span class="social-media ">
                            <a class="social-btn sb-light sb-instagram mr-2 mb-2" target="_blank"
                                href="https://www.instagram.com/aasabie_official/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </span>
                        <span class="social-media ">
                            <a class="social-btn sb-light sb-facebook mr-2 mb-2" target="_blank"
                                href="https://www.facebook.com/AASABIE">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Grid row -->
        </div>
    </footer>
    <!-- END FOOTER --><!-- Toolbar for handheld devices-->
    <!--<div class="cz-handheld-toolbar" id="toolbar">
    
    </div>-->

    <!-- Back To Top Button-->
    <a class="btn-scroll-top" href="#top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i
            class="btn-scroll-top-icon czi-arrow-up"> </i>
    </a>

    <!-- Vendor scrits: js libraries and plugins-->



    <script src="https://www.aasabie.com/public/assets/front-end/vendor/jquery/dist/jquery-2.2.4.min.js"></script>
    <script
        src="https://www.aasabie.com/public/assets/front-end/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://www.aasabie.com/public/assets/front-end/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
    <script src="https://www.aasabie.com/public/assets/front-end/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="https://www.aasabie.com/public/assets/front-end/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script
        src="https://www.aasabie.com/public/assets/front-end/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>


    <script src="https://www.aasabie.com/public/js/lightbox.min.js"></script>
    <script src="https://www.aasabie.com/public/assets/front-end/vendor/drift-zoom/dist/Drift.min.js"></script>
    <script
        src="https://www.aasabie.com/public/assets/front-end/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="https://www.aasabie.com/public/assets/front-end/vendor/lg-video.js/dist/lg-video.min.js"></script>

    <script src=https://www.aasabie.com/public/assets/back-end/js/toastr.js></script>
    <!-- Main theme script-->
    <script src="https://www.aasabie.com/public/assets/front-end/js/theme.min.js"></script>
    <script src="https://www.aasabie.com/public/assets/front-end/js/slick.min.js"></script>

    <script src="https://www.aasabie.com/public/assets/front-end/js/sweet_alert.js"></script>

    <script src=https://www.aasabie.com/public/assets/back-end/js/toastr.js></script>
    <script type="text/javascript"></script>

    <script>
        function addWishlist(product_id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "https://www.aasabie.com/store-wishlist",
                method: 'POST',
                data: {
                    product_id: product_id
                },
                success: function (data) {
                    if (data.value == 1) {
                        Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: data.success,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        $('.countWishlist').html(data.count);
                        $('.countWishlist-' + product_id).text(data.product_count);
                        $('.tooltip').html('');

                    } else if (data.value == 2) {
                        Swal.fire({
                            type: 'info',
                            title: 'WishList',
                            text: data.error
                        });
                    } else {
                        Swal.fire({
                            type: 'error',
                            title: 'WishList',
                            text: data.error
                        });
                    }
                }
            });
        }

        function removeWishlist(product_id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "https://www.aasabie.com/delete-wishlist",
                method: 'POST',
                data: {
                    id: product_id
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    Swal.fire({
                        type: 'success',
                        title: 'WishList',
                        text: data.success
                    });
                    $('.countWishlist').html(data.count);
                    $('#set-wish-list').html(data.wishlist);
                    $('.tooltip').html('');
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        }

        function quickView(product_id) {
            $.get({
                url: 'https://www.aasabie.com/quick-view',
                dataType: 'json',
                data: {
                    product_id: product_id
                },
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    console.log("success...")
                    $('#quick-view').modal('show');
                    $('#quick-view-modal').empty().html(data.view);
                },
                complete: function () {
                    $('#loading').hide();
                },
            });
        }

        function addToCart(form_id = 'add-to-cart-form', redirect_to_checkout = false) {
            if (checkAddToCartValidity()) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.post({
                    url: 'https://www.aasabie.com/cart/add',
                    data: $('#' + form_id).serializeArray(),
                    beforeSend: function () {
                        $('#loading').show();
                    },
                    success: function (response) {
                        console.log(response);
                        if (response.status == 1) {
                            updateNavCart();
                            toastr.success(response.message, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                            $('.call-when-done').click();
                            if (redirect_to_checkout) {
                                location.href = "https://www.aasabie.com/checkout-details";
                            }
                            return false;
                        } else if (response.status == 0) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Cart',
                                text: response.message
                            });
                            return false;
                        }
                    },
                    complete: function () {
                        $('#loading').hide();

                    }
                });
            } else {
                Swal.fire({
                    type: 'info',
                    title: 'Cart',
                    text: 'Please choose all the options'
                });
            }
        }

        function buy_now() {
            addToCart('add-to-cart-form', true);
            /* location.href = "https://www.aasabie.com/checkout-details"; */
        }

        function currency_change(currency_code) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: 'https://www.aasabie.com/currency',
                data: {
                    currency_code: currency_code
                },
                success: function (data) {
                    toastr.success('Currency changed to' + data.name);
                    location.reload();
                }
            });
        }

        function removeFromCart(key) {
            $.post('https://www.aasabie.com/cart/remove', { _token: 'V66PzBn9km396MetvqNhAvhZPVqXhVARKZR2Cu2W', key: key }, function (response) {
                console.log(response)
                updateNavCart();
                $('#cart-summary').empty().html(response.data);
                toastr.info('Item has been removed from cart', {
                    CloseButton: true,
                    ProgressBar: true
                });
            });
        }

        function updateNavCart() {
            $.post('https://www.aasabie.com/cart/nav-cart-items', { _token: 'V66PzBn9km396MetvqNhAvhZPVqXhVARKZR2Cu2W' }, function (response) {
                $('#cart_items').html(response.data);
            });
        }

        function cartQuantityInitialize() {
            $('.btn-number').click(function (e) {
                e.preventDefault();

                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());

                if (!isNaN(currentVal)) {
                    if (type == 'minus') {

                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('min')) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {

                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
            });

            $('.input-number').focusin(function () {
                $(this).data('oldValue', $(this).val());
            });

            $('.input-number').change(function () {

                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());

                var name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Cart',
                        text: 'Sorry  the minimum value was reached'
                    });
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Cart',
                        text: 'Sorry  stock limit exceeded.'
                    });
                    $(this).val($(this).data('oldValue'));
                }


            });
            $(".input-number").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        }

        function updateQuantity(key, element) {
            $.post('https://www.aasabie.com/cart/updateQuantity', {
                _token: 'V66PzBn9km396MetvqNhAvhZPVqXhVARKZR2Cu2W',
                key: key,
                quantity: element.value
            }, function (data) {
                updateNavCart();
                $('#cart-summary').empty().html(data);
            });
        }

        function updateCartQuantity(key) {
            var quantity = $("#cartQuantity" + key).children("option:selected").val();
            $.post('https://www.aasabie.com/cart/updateQuantity', {
                _token: 'V66PzBn9km396MetvqNhAvhZPVqXhVARKZR2Cu2W',
                key: key,
                quantity: quantity
            }, function (response) {
                if (response.status == 0) {
                    toastr.error(response.message, {
                        CloseButton: true,
                        ProgressBar: true
                    });
                    $("#cartQuantity" + key).val(response['qty']);
                } else {
                    updateNavCart();
                    $('#cart-summary').empty().html(response);
                }
            });
        }

        $('#add-to-cart-form input').on('change', function () {
            getVariantPrice();
        });

        function getVariantPrice() {
            if ($('#add-to-cart-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: 'https://www.aasabie.com/cart/variant_price',
                    data: $('#add-to-cart-form').serializeArray(),
                    success: function (data) {
                        console.log(data)
                        $('#add-to-cart-form #chosen_price_div').removeClass('d-none');
                        $('#add-to-cart-form #chosen_price_div #chosen_price').html(data.price);
                        $('#set-tax-amount').html(data.tax);
                        $('#set-discount-amount').html(data.discount);
                        $('#available-quantity').html(data.quantity);
                        $('.cart-qty-field').attr('max', data.quantity);
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#add-to-cart-form input:radio').each(function () { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function () { // then count them
                count++;
            });
            if ($('input:radio:checked').length == count) {
                return true;
            }
            return false;
        }


        $(".clickable").click(function () {
            window.location = $(this).find("a").attr("href");
            return false;
        });
    </script>


    <script>
        function couponCode() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: 'https://www.aasabie.com/coupon/apply',
                data: $('#coupon-code-ajax').serializeArray(),
                success: function (data) {
                    /* console.log(data);
                    return false; */
                    if (data.status == 1) {
                        let ms = data.messages;
                        ms.forEach(
                            function (m, index) {
                                toastr.success(m, index, {
                                    CloseButton: true,
                                    ProgressBar: true
                                });
                            }
                        );
                    } else {
                        let ms = data.messages;
                        ms.forEach(
                            function (m, index) {
                                toastr.error(m, index, {
                                    CloseButton: true,
                                    ProgressBar: true
                                });
                            }
                        );
                    }
                    setInterval(function () {
                        location.reload();
                    }, 2000);
                }
            });
        }

        jQuery(".search-bar-input").keyup(function () {
            $(".search-card").css("display", "block");
            let name = $(".search-bar-input").val();
            if (name.length > 0) {
                $.get({
                    url: 'https://www.aasabie.com/searched-products',
                    dataType: 'json',
                    data: {
                        name: name
                    },
                    beforeSend: function () {
                        $('#loading').show();
                    },
                    success: function (data) {
                        $('.search-result-box').empty().html(data.result)
                    },
                    complete: function () {
                        $('#loading').hide();
                    },
                });
            } else {
                $('.search-result-box').empty();
            }
        });

        jQuery(".search-bar-input-mobile").keyup(function () {
            $(".search-card").css("display", "block");
            let name = $(".search-bar-input-mobile").val();
            if (name.length > 0) {
                $.get({
                    url: 'https://www.aasabie.com/searched-products',
                    dataType: 'json',
                    data: {
                        name: name
                    },
                    beforeSend: function () {
                        $('#loading').show();
                    },
                    success: function (data) {
                        $('.search-result-box').empty().html(data.result)
                    },
                    complete: function () {
                        $('#loading').hide();
                    },
                });
            } else {
                $('.search-result-box').empty();
            }
        });

        jQuery(document).mouseup(function (e) {
            var container = $(".search-card");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });

        const img = document.getElementByTagName("img")
        img.addEventListener("error", function (event) {
            event.target.src = 'https://www.aasabie.com/public/assets/front-end/img/image-place-holder.png';
            event.onerror = null
        }, false)

        function route_alert(route, message) {
            Swal.fire({
                title: 'Are you sure?',
                text: message,
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: 'default',
                confirmButtonColor: '#4f409c',
                cancelButtonText: 'No',
                confirmButtonText: 'Yes',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    location.href = route;
                }
            })
        }
    </script>

    <!--    <script>
        $('#sign-in-form').submit(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post({
                url: 'https://www.aasabie.com/customer/auth/login',
                dataType: 'json',
                data: $('#sign-in-form').serialize(),
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    if (data.errors) {
                        for (var i = 0; i < data.errors.length; i++) {
                            toastr.error(data.errors[i].message, {
                                CloseButton: true,
                                ProgressBar: true
                            });
                        }
                    } else {
                        toastr.success(data.message, {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        setInterval(function () {
                            location.href = data.url;
                        }, 2000);
                    }
                },
                complete: function () {
                    $('#loading').hide();
                },
                error: function () {
                    toastr.error('Credentials do not match or account has been suspended.', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });
        });
    </script>-->

    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('recaptcha_element', {
                'sitekey': ''
            });
        };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <script>
        $("#form-id").on('submit', function (e) {
            var response = grecaptcha.getResponse();

            if (response.length === 0) {
                e.preventDefault();
                toastr.error("Please check the recaptcha");
            }
        });
    </script>


</body>

</html>