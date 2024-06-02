<!doctype html>
<html lang="en">


<!-- Mirrored from www.indonez.com/html-demo/wave/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jul 2023 10:40:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Indonez">
    <meta name="theme-color" content="#FCB42D">
    <!-- preload assets -->
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/rubik-v9-latin-regular.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('fonts/rubik-v9-latin-500.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('fonts/rubik-v9-latin-300.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <link rel="preload" href="{{ asset('js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('js/utilities.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('js/config-theme.js') }}" as="script">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- uikit -->
    <script src="{{ asset('js/vendors/uikit.min.js') }}"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <!-- touch icon -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/apple-touch-icon.png') }}">
    <title>@yield('title')</title>
</head>

<body>
    <!-- page loader begin -->
    <div class="page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->
    <!-- header begin -->
    <header>
        <div class="uk-section uk-padding-remove-vertical in-header-inner uk-background-cover uk-background-top-center"
            style="background-image: url({{ asset('img/in-wave-background-1.png') }});">
            <nav class="uk-navbar-container uk-navbar-transparent"
                data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between">
                        <a class="uk-navbar-item uk-logo" href="{{ url('/') }}"
                            data-logo-inverse="sticky-only: true">
                            <img src="{{ asset('img/logo2.png') }}" alt="logo" style="width: 65px">
                        </a>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="/">Home</a>
                            </li>
                            <li><a href="{{ url('/about') }}">About Us</a>
                            </li>
                            <li><a href="{{ url('/products') }}">Services</a>
                            </li>
                            <li><a href="{{ url('/guide') }}">Guide</a>
                            </li>
                            <li><a href="{{ url('/education') }}">Education</a>
                            </li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="uk-navbar-right uk-width-auto">
                        <div class="uk-navbar-item uk-visible@m">
                            <div class="in-optional-nav">
                                <a href="{{ url('signin') }}" class="uk-button uk-button-text"><i
                                        class="fas fa-user-circle uk-margin-small-right"></i>Log in</a>
                                <a href="#"
                                    class="uk-button uk-button-primary uk-button-small uk-border-pill">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-secondary uk-card-small uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-text-small" data-uk-grid>
                                <div class="uk-width-3-4@m uk-visible@m">
                                    <p>Trading involves substantial risk and may result in the loss of your
                                        invested/greater that your invested capital, respectively.</p>
                                </div>
                                <div class="uk-width-expand@m uk-text-center uk-text-right@m">
                                    <a class="uk-margin-right" href="#"><i
                                            class="fas fa-comment-alt uk-margin-small-right"></i>Live Chat</a>
                                    <a href="#"><i
                                            class="fas fa-phone-alt uk-margin-small-right uk-margin-small-left"></i>+1-702-793-2495</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- breadcrumb content begin -->
                    <div class="uk-section uk-padding-remove-vertical in-wave-breadcrumb">
                        <div class="uk-container">
                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    <ul class="uk-breadcrumb">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- breadcrumb content end -->
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
