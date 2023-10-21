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
        @yield('style')
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
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAhlJREFUSEuNli1sF0EQxX+Dp5YEU4NqZSUEWkNS06ZJkxosQbYGQqDBIIBQAdUV1Q0kKBIMX01R2JKQYFBgSapqhuze3u3s3O7/euLE7c6+efPezJ4w+QigaZcgKGo/xZX2nrDi1xlOSHFluIXLW/M5NglBRslYRsIllMfAHYR5VH6DHgLPA60c2z6lYzAUoI+KAeH1DlgbsYQjYKvOzDGoBPd428Ar4BewA5wAN4H9xOYu6EG32dZyBoDL6LsKSyjLwBdDdBXhPco34PqUR2yJPgHLhSFG0ZVa50+fgRUfYkQWjf4o2eZPF7NmcHGhqmVQLE1RL51RtEkRavvA2+4W8LVsEmu3MoU6wSB4fjqA9BI01Mx1YeXQHFQh5QBsR2QAOvETWBwV0/UbBG9qIJAYeNnceGiDxbNniZzWBnddRjkD/gJX3Ll/gKvAHPAvk22WaCh+yKGzL9wAOQF9Bjx0ajwFfYKwgvLRWOEiDIYShbm0kUr3CGQb9Bx4DbxMh34Abhu5WgCDNcJeo6ncF3Sv97Oz5gvgQdFl1EpUzmAHEEV7qzFrOU7Y6yD3QFddh8WuNiLLqaAL+e6a4aKRZdMEtQjdpwJgMwl4LXVvDz62/cRN19CgeTGegi50Q7DcM7qf8xT4ocJiZNC6lYy2m0CwZs/MEKz29E9gF+HNCMCNCn/31/4Oqn3sk64MzIpodvDlUpgfmvoI+Q/C9d4hT/X9xgAAAABJRU5ErkJggg=="/>
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
                <div class="menu-item">
                    <a href="{{ route('admin.banier.index') }}" class="menu-link">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAehJREFUSEuVlj1OJDEQhb9KNyRFQlohBILDEPCTwiFIuAFcBSRCLrHZJgRICCTiyZDICrVdbVfZ7gY6gBnP1N97z69GKI8gKJre22sBNP2xb9nrb45qzimTe3ycP7eatU4XFCumRq25XGDc6THCDcrBahM+Ntd5ErhSeJxTl/Fr5XT0jrA9tdKcl4YqpBFB4AVhN8e2T53WA99lcNS10HkarcAYfCsg4jN0/Pa8V/gVpuiikWaYWKDjyZDqIVDLmNDpIapg6Fyhy7EM2PSJgyhy0GKuWV2+iTDvpcCHwv1w8qyNEKyminmqNYgOgX/AJ7AHsnGKco1K4CCQU3oPE6SO/mhOPhWZDu5RzusUsshBkFflvqjoFDgC/gIXDSwnwEM+WyngFFfJyjBuAc/2v8inMiIb0D1g0xhXUFHADtRIThPcAWfFBMdeNJF93k3gugjYDSBqPG/grD+HKGls+R50uYN8g9z9RZudXwzkN2CnmO2qpXZX8dXEsHQPUkeTXd+isr/imiNn/Q9cIzyuXDSPwdJ2834Rt6HfgAEiF+Jmjnb4263nNhoF8xWvN3uyK5Wl1himn2b+MFvxMegtwv4cNcvB63MwQbHl5qdBCRvczKiKbhXYQUf+wMbDeGN8I+HddutWXFxEX6WQ4x5hB9QtAAAAAElFTkSuQmCC"/>
                        <div data-i18n="Tables">banner</div>
                    </a>
                </div>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAiRJREFUSEuNlj9uVEEMxn/uuACwAgUkTpCSKsoWKeAMKSiQ4AaIC9BxAKREFJyAHimLROo0tCkSlgIQHAGjmeeZsWdmFbZYvef12J//fN+sUD8CaHtNT96Un6PPYLKfvT09x0CWooWaJN51yOyCGhbJGCeoB+iD2w5cDW2ppsN3BhxOc8IGWFv5n1EOWiEB0AZ0vcQIFaQX1TKFHY0Rs7dh+b77gYYK2lR8fD+baM/bUA/5IWY/AekPlNxmT0ADSKus2tv5WOpg77fo/xLnNakT8I3J6yPorIIMRW33XWKzL/FKZUOLLGdXgeQTDkxNEDjmtqqsdel15F4MViF5/k7X1BJ8AjkypDf4cVR2wBFtQq5hBSdaMLC34+0uSRjSTYgx50oecm1dGKagZyoc1p7FCBuQtVugFegJ8NgwnwPPQX75JXNDzm6FB0FZGw/rUqyAC4FVp7/fgH2BP0V4wxZlqVhQh8RpNx0DE4oPIMegH4HXVsFbhCco74CXZRIj0SyBZ0/jh/FA+I5yD7gL/DTZeIRwiXINPKwJXPm+RUEqXL/K1m2B+8AesF1UUx8oXKV3gb1piwakrYye4e9ReWYtegXcAt4AT4HTZdiDXE+G3JVnWpFmcBv4CtzxvVZhi7IP/C5SsAyzfd3IZKeyaQZlTf8CX4AXID+aT7lwJpfGCL6/5yb/CQaXIHZjgGCZKEkV7HANRsdeli1mpHDXxqnPPBn8A/ig9iLaeke1AAAAAElFTkSuQmCC"/>
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
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAcZJREFUSEuNVsFNBDEMHNeBhIR4QDfXDB86gIauED73QyDRR9DGdjxOnIU87vayju0Zj50TjCUQNDQB7APoz+ML84a9jv1wZqaHz2OZ0x5gMbINDryz4X1znAL0dE/9GcrIiuHxyQR2vBC0SwPeAHmOYEHEnCBTZOhvAF4AXJlezuIHgrvM04J7T6ki+xS0R60lIBO1zpHuMxX/4T2KqNU1gTBfzSJQbTLNC2FZdV0lAoirUR3FGghsq/69RhHDO9sbRUsAEUPbD/SM1CapmBj0RMN+SH9GoC80QCGgYGTpwpEAJZSLfOC0wjrknj8HO60BazsVOVqkWXFWTvVABaqzaMh41gwGc5HVkavIZ4fLbhugFoVwkTsVgyKeS6c9kftjQuDDLuSQZVbUcQmWO7V3gaC56owKroE+eydPB45zaX57FyaZ2nw2gZjQj/IxRdw4uz4gyaa+SQEmyD4pkkyXMV7MvygyUzRdOKMNFPhYrP0/nufOXxx9N+A+X41FO9OM8KlJW18AHsYtOR2/AHgH8LRzW+MaKX0AeBXg6qM+jeXl8I6PXQ02s6swz/8wlj8DIevy8stXxOyem6uebGVC1SQ/DH8BbEfnJDnHOt8AAAAASUVORK5CYII="/>
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
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">BUSINESS SECTION</span>
                </li>
                <!-- Tables -->
                <li class="menu-item">
                <a href="{{ route('admin.TimeSlot.index') }}" class="menu-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAsxJREFUSEuN1l/IZlMUBvDfmjR8mRR3jMaUC4qGpsaV4kqGJiF/LlBKk0RcyAUyI1xJUxiluSCUxoUmf0aUCw3uxBBNGCa5Vaav/Iks7fPu8777nO+8fXPq7d1nn332Ws9az/PsE8oVyG40H3dT7Xx93P6t83i23WJRCFnjDMeL6DX+qURv8p0n1QbrNg2nSzcH12a4TMZWsmA9ga/wAd7GP8uQDRC0mWInXsLWNWUclutH3IuP++kWYBlPXXuDPbUHv+Ag3sfRGuxyGbvIW3F+bd3DGZ6bN66Wo0Ewj7OX2BNyNbmDeDdkV5chG7qJDbgFrwQryYN4ftjXIXN2Je/gT+zAtxObTk1dgc9qwKvwaVuufrwJ3+Nc3Ik3JmrXMzfG3A75ULIPx4JtWRvf9uC+YH/yHS5tlNHqo1FLS+Uu3MYMJ2SX4I041BenT+Zwx5xwv7R/iYgaBC2GvqOekR4NDmTYXRo+QzDj1a/kZlyIn6bJFVn1UTQ5ZQBX4kjwZbK9rGhL9AdW6u+vJWLtSzTmVL/POfgNv+PshVXMEK4Gm5KziNWa6Uh7c8caA+wDlHdPVoqX8QDBMVyEbfhmwv+WaHIwvR1fKEQJl3RlbETxZsjbMzwiPTuW+1qhzRvbgn0cT+F13LVg0SyJwv3XhB+ki4P/Bg7e7remQd3EaThObCFvw1ujALFCljJtwd3Bq+udBw0DS4AHik1UsZYy/z1GUO6vwYfFKoId2VnFKV3FVj6fWUVcTR6ZsIp5Nx7D0zipMzvvTZwT3XEXckNSynEAZ6KgeHFMkKkUn8CT1SN+Jg8Kh6WvsbFayQ3VSc+rtlKc9IX5ZrVPjdDWHJnXJy8TmxdH6WS5yoFzDz5pyzLwlNbNRovOkG4KrsuZPi7osg3HZcf3j4RDMv5tvxrahAYIFoQeOuUi70nuj2DVd5ul7afCOufL8q+NZVz7Hzr+Ay24mx86AAAAAElFTkSuQmCC"/>
                    <div data-i18n="Tables">Time Slot</div>
                </a>
                </li>
                <li class="menu-item">
                <a href="{{ route('admin.branch.index') }}" class="menu-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAs9JREFUSEuF1UvoVVUUBvDfKoqEIovoX9qDGkTiwEYRjYSSyIggIiFC6DFwXEEEDqJB4sBGDRKkIJOMRoH0IAknUU2KSJyFj6zUIpuUSNCKfe6+9+xz7vnbmZx99lmPvdb6vm+H8gSyWw3X0xvVsJpW3zbEwqCGa78nnZcMlqJNnLBJPPRfsu02bsI+3FeNv8Tz+G2q7HGIRVtWKbME/w7l3cSLn8h78MelWhB90BBSdhuDVPvxND7CK/X3Hulh7MWOicENzjLZoibFz1gnrEjn6tzvlPEjeQq3jytYbtFEjU1lZ8gV4VYZpyvcbsNJnMHNpYKu+kEHZ8gscf4POQfwVG3Ry8FVyevYGryT4dnS0j7BcrLJGTWbd+ErXD8yPFtRdWKyRQOYtoOdgFKwLnkBL9Zgu/EGzs1IOu00atGwNKwRHpBxqKF51nU02H5UxuGQF+YI7NE4mkE93dV4rRLpCqwNLlbncYI1+BMX8Zbwqoy/+wPNE/T9ujf5EAUl5TlKh/fT9bs9ZNkqdh8TG2vQ43gi+LY3LGazBAXPhbHX4fvgpeTwaIDzbrctKr4PBXsybJSdfGwSfh3D9AM8iUPEY+S/A2WYfbRQH8w3uDzDJ9KW4O3kufnZ53FKG9bPCFVbsiTFcaTm2LwKezcQx0Keyo7hodGirrQbhPUyfmkHVeWhwHFzpeeRRS39z7K6hU4Ei6SsdBU0CD6IbSjMfQb/DC6iCRkYqcCVGd6XHsd+YfuM4c2Qgx+Sa4ivySIPxy+l5c3h7sZBYZOM8yE3JGdnGtUnKKtH8B6xliwDLRB8N+Q3GU7OUZFchjtwP7YTD9bW/S5tC75YwG2C6TdiZ7AjKURrngnVnP29ELyZ7CLOL2R0qKZLd+W1RTHpYLc1u/tgoDkngs+Sz/Fp8FdDkoVpI9dDTPaVrXKRDu6ACd8GFIvlKlfmmFBDhI4JMYLefyukFi1Pjb/fAAAAAElFTkSuQmCC"/>
                    <div data-i18n="Tables">Branch</div>
                </a>
                </li>
                <li class="menu-item">
                <a href="{{ route('admin.ReviewsList') }}" class="menu-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAk1JREFUSEuNljtoFUEUhr+DVytBC1+lEERsYmMjKIhiJCpYmHSiKFiksxPUVrG0SpVGxZSCBgmCCpJgZZGkiVYhZXIbQdRC45HZmd0989iNC5c7O/fMefznP/9cIX0E0LBZrcNGWAsatmLDat/6qu17/WXRYw+Z0ywAOP/N0yZczG4A8k7QvwpjwJ/tq08ClA80wa4Bz4ONW79IUrO4es9aqqAysxU055ZRRsPbCnA8CxC3q+qfWFh6MD0LvE8qPAN89LkIXWejHvSU/Aa4mAR4DVzxe10B3P72z1GB1RrOFjxR0BGEtZifKdPa93PAJeCA+wgcVL/eD+yoM7VDIuiWwhBkE3QD2ATct6v4g6+sJel30N39Jcftt3NouSGwoXCoCmCMpgSmo2mMiZeAWWCat3AubgJPq+4kk3xLhRk02w8wx04zFYCfIBOg831zMAnMAoP/oaCXqopFQxXGUJbiNqcs8gfGQV8BO4sky9CRr4JeUGE9ZVQEUTLE08BUOX4rA6Fnp4HFUjKeRQVJFfSTwslIVCIZjxjwAHhYQ9qIUKpFJoMB8AthEN8NIVwuDy57V0WWraWp8S+nBF2oG9gOVzqlzSWzBewBfrRjVVDTNgG5C/o4h44nweZOQR6uAi9LiJd6MwdcNjR1WnQd+BzadQJkFvSImfwZhdvlCvKhHAL7gN9V8+BRWFuYdwncU+E+iuvZOnA4zjbWIqvpb4G9wA3gS3EW6nYKx1B5BvoN4XzzJ6EmWSZYln2FHzsVKMXG+OlKsONI141a5to/uaHjIUvCDTcAAAAASUVORK5CYII="/>
                    <div data-i18n="Tables">Products Review</div>
                </a>
                </li>
                <li class="menu-item">
                <a href="{{ route('admin.livreur.index') }}" class="menu-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAk1JREFUSEuNljtoFUEUhr+DVytBC1+lEERsYmMjKIhiJCpYmHSiKFiksxPUVrG0SpVGxZSCBgmCCpJgZZGkiVYhZXIbQdRC45HZmd0989iNC5c7O/fMefznP/9cIX0E0LBZrcNGWAsatmLDat/6qu17/WXRYw+Z0ywAOP/N0yZczG4A8k7QvwpjwJ/tq08ClA80wa4Bz4ONW79IUrO4es9aqqAysxU055ZRRsPbCnA8CxC3q+qfWFh6MD0LvE8qPAN89LkIXWejHvSU/Aa4mAR4DVzxe10B3P72z1GB1RrOFjxR0BGEtZifKdPa93PAJeCA+wgcVL/eD+yoM7VDIuiWwhBkE3QD2ATct6v4g6+sJel30N39Jcftt3NouSGwoXCoCmCMpgSmo2mMiZeAWWCat3AubgJPq+4kk3xLhRk02w8wx04zFYCfIBOg831zMAnMAoP/oaCXqopFQxXGUJbiNqcs8gfGQV8BO4sky9CRr4JeUGE9ZVQEUTLE08BUOX4rA6Fnp4HFUjKeRQVJFfSTwslIVCIZjxjwAHhYQ9qIUKpFJoMB8AthEN8NIVwuDy57V0WWraWp8S+nBF2oG9gOVzqlzSWzBewBfrRjVVDTNgG5C/o4h44nweZOQR6uAi9LiJd6MwdcNjR1WnQd+BzadQJkFvSImfwZhdvlCvKhHAL7gN9V8+BRWFuYdwncU+E+iuvZOnA4zjbWIqvpb4G9wA3gS3EW6nYKx1B5BvoN4XzzJ6EmWSZYln2FHzsVKMXG+OlKsONI141a5to/uaHjIUvCDTcAAAAASUVORK5CYII="/>
                    <div data-i18n="Tables">Livreur</div>
                </a>
                </li>
                <li class="menu-item">
                <a href="{{ route('admin.coupon.index') }}" class="menu-link">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAk1JREFUSEuNljtoFUEUhr+DVytBC1+lEERsYmMjKIhiJCpYmHSiKFiksxPUVrG0SpVGxZSCBgmCCpJgZZGkiVYhZXIbQdRC45HZmd0989iNC5c7O/fMefznP/9cIX0E0LBZrcNGWAsatmLDat/6qu17/WXRYw+Z0ywAOP/N0yZczG4A8k7QvwpjwJ/tq08ClA80wa4Bz4ONW79IUrO4es9aqqAysxU055ZRRsPbCnA8CxC3q+qfWFh6MD0LvE8qPAN89LkIXWejHvSU/Aa4mAR4DVzxe10B3P72z1GB1RrOFjxR0BGEtZifKdPa93PAJeCA+wgcVL/eD+yoM7VDIuiWwhBkE3QD2ATct6v4g6+sJel30N39Jcftt3NouSGwoXCoCmCMpgSmo2mMiZeAWWCat3AubgJPq+4kk3xLhRk02w8wx04zFYCfIBOg831zMAnMAoP/oaCXqopFQxXGUJbiNqcs8gfGQV8BO4sky9CRr4JeUGE9ZVQEUTLE08BUOX4rA6Fnp4HFUjKeRQVJFfSTwslIVCIZjxjwAHhYQ9qIUKpFJoMB8AthEN8NIVwuDy57V0WWraWp8S+nBF2oG9gOVzqlzSWzBewBfrRjVVDTNgG5C/o4h44nweZOQR6uAi9LiJd6MwdcNjR1WnQd+BzadQJkFvSImfwZhdvlCvKhHAL7gN9V8+BRWFuYdwncU+E+iuvZOnA4zjbWIqvpb4G9wA3gS3EW6nYKx1B5BvoN4XzzJ6EmWSZYln2FHzsVKMXG+OlKsONI141a5to/uaHjIUvCDTcAAAAASUVORK5CYII="/>
                    <div data-i18n="Tables">Discount</div>
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
                                <small class="text-muted">{{ Auth::user()->full_name }}</small>
                            </div>
                            </div>
                        </a>
                        </li>
                        <li>
                        <div class="dropdown-divider"></div>
                        </li>
                        <li>
                        <a class="dropdown-item" href="{{ route('admin.profile') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
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
