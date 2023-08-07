<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from Deneriusvest.net/demo6/invest/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 21:04:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Deneriusvest" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." />
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.png') }}" />
    <title>Investment Dashboard | Deneriusvest Admin Template</title>
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/dashlitedeae.css?ver=3.2.1') }}" />
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/themedeae.css?ver=3.2.1') }}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-91615293-4");
    </script>
</head>

<body class="nk-body npc-invest bg-lighter">
    <div class="nk-app-root">
        <div class="nk-wrap">
            <div class="nk-header nk-header-fluid nk-header-fixed is-theme nk-header-fixed">
                <div class="container-xl wide-lg">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger me-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                                    class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="{{ url('account') }}" class="logo-link"><img
                                    class="logo-light logo-img" src="img/logo.png"
                                    srcset="/demo6/images/logo2x.png 2x" alt="logo" /><img
                                    class="logo-dark logo-img" src="img/logo.png"
                                    srcset="/demo6/images/logo-dark2x.png 2x" alt="logo-dark" /><span
                                    class="nio-version">Invest</span></a>
                        </div>
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="{{ url('account') }}" class="logo-link"><img
                                            class="logo-light logo-img" src="img/logo.png"
                                            srcset="/demo6/images/logo2x.png 2x" alt="logo" /><img
                                            class="logo-dark logo-img"
                                            src="img/logo.png"
                                            srcset="/demo6/images/logo-dark2x.png 2x" alt="logo-dark" /><span
                                            class="nio-version">Invest</span></a>
                                </div>
                                <div class="nk-menu-trigger me-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                        data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main">
                                <li class="nk-menu-item">
                                    <a href="{{ url('account') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">Home</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ url('account/investments') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">My Investments</span></a>
                                </li>
                                <li class="nk-menu-item active has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-text">Investment Options</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="welcome.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Long Term Investment Portfolios</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="invest-form.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">DIC Strategy Investment</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="scheme-details.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Alternative Investment</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item active has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-text">DIC</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="welcome.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Consult Our Experts</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="invest-form.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Customer Service</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="scheme-details.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Compounds Interest Calculator</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="scheme-details.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Guide</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown notification-dropdown">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                        data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-info">
                                            <em class="icon ni ni-bell"></em>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Notifications</span><a
                                                href="#">Mark All as Read</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-foot center">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown language-dropdown d-none d-sm-flex me-n1">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                        data-bs-toggle="dropdown">
                                        <div class="quick-icon">
                                            <img class="icon"
                                                src="{{ asset('dashboard/images/flags/english-sq.png') }}"
                                                alt="" />
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="{{ asset('dashboard/images/flags/english.png') }}"
                                                        alt="" class="language-flag" /><span
                                                        class="language-name">English</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="{{ asset('dashboard/images/flags/spanish.png') }}"
                                                        alt="" class="language-flag" /><span
                                                        class="language-name">Español</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="{{ asset('dashboard/images/flags/french.png') }}"
                                                        alt="" class="language-flag" /><span
                                                        class="language-name">Français</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="{{ asset('dashboard/images/flags/turkey.png') }}"
                                                        alt="" class="language-flag" /><span
                                                        class="language-name">Türkçe</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hide-mb-sm">
                                    <a href="#" class="nk-quick-nav-icon"><em
                                            class="icon ni ni-signout"></em></a>
                                </li>
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status user-status-verified">
                                                    Verified
                                                </div>
                                                <div class="user-name dropdown-indicator">
                                                    Your Account
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar"><span>AB</span></div>
                                                <div class="user-info">
                                                    <span class="lead-text">Abu Bin Ishtiyak</span><span
                                                        class="sub-text">info@Deneriusvest.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <a class="btn btn-icon me-n2" href="profile-setting.html"><em
                                                            class="icon ni ni-setting"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner user-account-info">
                                            <h6 class="overline-title-alt">Account Balance</h6>
                                            <div class="user-balance">
                                                1,494.23
                                                <small class="currency currency-usd">USD</small>
                                            </div>
                                            <div class="user-balance-sub">
                                                Locked
                                                <span>15,495.39
                                                    <span class="currency currency-usd">USD</span></span>
                                            </div>
                                            <a href="#" class="link"><span>Withdraw Balance</span>
                                                <em class="icon ni ni-wallet-out"></em></a>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="profile.html"><em
                                                            class="icon ni ni-user-alt"></em><span>Active Investments</span></a>
                                                </li>
                                                <li>
                                                    <a href="profile.html"><em
                                                            class="icon ni ni-user-alt"></em><span>Transactions</span></a>
                                                </li>
                                                <li>
                                                    <a href="profile-activity.html"><em
                                                            class="icon ni ni-activity-alt"></em><span>Login
                                                            Activity</span></a>
                                                </li>
                                                <li>
                                                    <a href="profile.html"><em
                                                            class="icon ni ni-user-alt"></em><span>View
                                                            Profile</span></a>
                                                </li>
                                                <li>
                                                    <a href="profile-setting.html"><em
                                                            class="icon ni ni-setting-alt"></em><span>Account
                                                            Setting</span></a>
                                                </li>
                                                <li>
                                                    <a href="profile-activity.html"><em
                                                            class="icon ni ni-activity-alt"></em><span>Earn Rewards</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                            out</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
