<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>{{ env('APP_NAME') }} | Admin Dashboard</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlite.css?ver=3.1.1') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/assets/css/theme.css?ver=3.1.1') }}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="{{ route('admin.dashboard') }}" class="logo-link nk-sidebar-logo">
                            <h4 style="font-weight: bolder; color: white">Admin Dash</h4>
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">

                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Dashboards</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.dashboard') }}" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                                        <span class="nk-menu-text"> Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.dashboard') }}" target="_blank" class="nk-menu-link ">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text"> User Dashboard</span>
                                    </a>
                                </li>

                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">User</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.users.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                        <span class="nk-menu-text">Users</span>
                                    </a>
                                </li>
                                 <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Main</h6>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.transactions.deposits') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-arrow-down"></em></span>
                                        <span class="nk-menu-text">Deposits</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.transactions.withdraws') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-arrow-up"></em></span>
                                        <span class="nk-menu-text">withdrawal</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.stocks.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chart-up"></em></span>
                                        <span class="nk-menu-text">Stock Market</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.tradeHistory') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-history"></em></span>
                                        <span class="nk-menu-text">Stock History</span>
                                    </a>
                                </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('admin.trade.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-trend-up"></em></span>
                                        <span class="nk-menu-text">Trade Management</span>
                                    </a>
                                </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ route('admin.copiedTrades') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-history"></em></span>
                                        <span class="nk-menu-text">Copied Trades History</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.subscriptions.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-history"></em></span>
                                        <span class="nk-menu-text">Subscription</span>
                                    </a>
                                </li>

                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">CRUD</h6>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.copyTrader.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-check-fill"></em></span>
                                        <span class="nk-menu-text">Copy Trader</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.package.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-briefcase"></em></span>
                                        <span class="nk-menu-text">Package</span>
                                    </a>
                                </li>

                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Others</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.payment-method.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                        <span class="nk-menu-text">Payment Method</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.settings') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                                        <span class="nk-menu-text">Settings</span>
                                    </a>
                                </li>


                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="{{ route('admin.dashboard') }}" class="logo-link">
                                    <h4 style="font-weight: bolder; color: white">Admin Dash</h4>
                                </a>
                            </div><!-- .nk-header-brand -->

                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AD</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ auth()->user()->name }}</span>
                                                        <span class="sub-text">{{ auth()->user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')"
                                                                onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                            <em class="icon ni ni-signout"></em><span>Sign out</span>
                                                        </x-dropdown-link>
                                                    </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->

                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; {{ Date('Y') }} {{ env('APP_NAME') }}.
                            </div>

                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="{{ asset('admin/assets/js/bundle.js?ver=3.1.1') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.js?ver=3.1.1') }}"></script>
    <script src="{{ asset('admin/assets/js/charts/gd-default.js?ver=3.1.1') }}"></script>
</body>

</html>
