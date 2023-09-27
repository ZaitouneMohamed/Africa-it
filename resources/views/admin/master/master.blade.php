    <!DOCTYPE html>

    <!-- =========================================================
    * Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
    ==============================================================

    * Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
    * Created by: ThemeSelection
    * License: You must have a valid license purchased in order to legally use the theme for your project.
    * Copyright ThemeSelection (https://themeselection.com)

    =========================================================
    -->
    <!-- beautify ignore:start -->
    <html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
    >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <head>
        <meta charset="utf-8" />
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />

        <title>Africa-It SHop | Admin</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/ludus/images/logo/africa-it-logo.jpeg') }}"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href=" {{ asset('assets/admin/assets/vendor/fonts/boxicons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/core.css') }} " class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/theme-default.css') }} " class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/demo.css') }} " />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <!-- Page CSS -->

        <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/css/pages/page-icons.css') }}" />

        <!-- Helpers -->
        <script src="{{ asset('assets/admin/assets/vendor/js/helpers.js') }}"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{ asset('assets/admin/assets/js/config.js') }}"></script>
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="/admin" class="app-brand-link">
                <img src="{{ asset('assets/ludus/images/logo/africa-It-full-removebg-preview.png') }}" width="100px" alt="">

                {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashboard</span> --}}
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item">
                <a href="/admin" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
                </li>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">ORDERS SECTION</span>
                </li>
                {{-- categorie --}}
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Orders</div>
                    </a>
                    <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.orders.all') }}" class="menu-link">
                        <div data-i18n="Account">All
                            <span class="badge bg-label-success me-1">
                                {{ \App\Models\Order::all()->unique('order_number')->count() }}
                            </span>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.orders.ConfirmedOrders') }}" class="menu-link">
                        <div data-i18n="Account">comfirmed
                            <span class="badge bg-label-success me-1">
                                {{ \App\Models\Order::groupBy('order_number')->Confirmed()->count() }}
                            </span>
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                        <a href="{{ route('admin.orders.AnnuledOrders') }}" class="menu-link">
                            <div data-i18n="Account">annuller
                                <span class="badge bg-label-success me-1">
                                {{ \App\Models\Order::groupBy('order_number')->Annuller()->count() }}
                            </span>
                        </div>
                        </a>
                    </li>
                    </ul>
                </li>
                {{--  --}}
                <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Pages</span>
                </li>
                {{-- categorie --}}
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Categorie</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                    <a href="{{ route('admin.categories.index') }}" class="menu-link">
                        <div data-i18n="Account">Categorie</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="{{ route('admin.SubCategorie.index') }}" class="menu-link">
                        <div data-i18n="Connections">Sub Categorie</div>
                    </a>
                    </li>
                </ul>
                </li>
                <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Product</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                    <a href="{{ route('admin.product.index') }}" class="menu-link">
                        <div data-i18n="Account">List</div>
                    </a>
                    </li>
                    <li class="menu-item">
                    <a href="{{ route('admin.product.create') }}" class="menu-link">
                        <div data-i18n="Connections">Add New</div>
                    </a>
                    </li>
                </ul>
                </li>
                <!-- Tables -->
                <li class="menu-item">
                <a href="{{ route('admin.TimeSlot.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-table"></i>
                    <div data-i18n="Tables">Time Slot</div>
                </a>
                </li>
                <li class="menu-item">
                <a href="{{ route('admin.branch.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-table"></i>
                    <div data-i18n="Tables">Branch</div>
                </a>
                </li>
                <!-- Misc -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
                <li class="menu-item">
                <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="menu-link"
                >
                    <i class="menu-icon tf-icons bx bx-support"></i>
                    <div data-i18n="Support">Support</div>
                </a>
                </li>
                <li class="menu-item">
                <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="menu-link"
                >
                    <i class="menu-icon tf-icons bx bx-file"></i>
                    <div data-i18n="Documentation">Documentation</div>
                </a>
                </li>
            </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">


                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                        <img src="{{ asset('assets/admin/assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                <img src="{{ asset('assets/admin/assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <span class="fw-semibold d-block"></span>
                                <small class="text-muted">Admin</small>
                            </div>
                            </div>
                        </a>
                        </li>
                        <li>
                        <div class="dropdown-divider"></div>
                        </li>
                        <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                        </li>
                        <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                        </li>
                        <li>
                        <a class="dropdown-item" href="#">
                            <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                            <span class="flex-grow-1 align-middle">Billing</span>
                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                            </span>
                        </a>
                        </li>
                        <li>
                        <div class="dropdown-divider"></div>
                        </li>
                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                        </li>
                    </ul>
                    </li>
                    <!--/ User -->
                </ul>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="container-xxl flex-grow-1 container-p-y">
                @include('messages.success')
                @include('messages.error')
                @include('messages.any')
                @yield('content')
            <!-- Content wrapper -->
            </div>
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        {{-- <div class="buy-now">
        <a
            href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
            target="_blank"
            class="btn btn-danger btn-buy-now"
            >Upgrade to Pro</a
        >
        </div> --}}

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        @yield('scripts')
        <script src="{{ asset('assets/admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/vendor/js/menu.js') }}"></script>
        <script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
    </html>
