<!--====== Main Header ======-->
<header class="header--style-2">

    <!--====== Nav 1 ======-->
    <nav class="primary-nav-wrapper" style="background-color: white">
        <div class="container">
            <!--====== Primary Nav ======-->
            <div class="primary-nav">
                <!--====== Main Logo ======-->
                <a class="main-logo" href="/">
                    <img src="{{ asset('assets/ludus/images/logo/africa-It-full-removebg-preview.png') }}" width="180px"
                        height="80px" alt="">
                </a>
                <!--====== End - Main Logo ======-->
                <!--====== Search Form ======-->
                <form class="main-form" action="{{ route('Search') }}" method="POST">
                    @csrf
                    @method('GET')
                    <label for="main-search"></label>
                    <input class="input-text input-text--border-radius input-text--style-2" type="text"
                        id="main-search" placeholder="Search">
                    <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button>
                </form>
                <!--====== End - Search Form ======-->
                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation">
                    <button class="btn btn--icon toggle-button toggle-button--white fas fa-cogs"
                        type="button"></button>
                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">
                        <span class="ah-close">✕ Close</span>
                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                            {{-- <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">
                                <a><i class="fas fa-user-cog" style="color: rgb(0, 0, 0)"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    <li class="has-dropdown has-dropdown--ul-right-100">

                                        <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a class="u-c-brand">ENGLISH</a>
                                            </li>
                                            <li>

                                                <a>ARABIC</a>
                                            </li>
                                            <li>

                                                <a>FRANCAIS</a>
                                            </li>
                                            <li>

                                                <a>ESPANOL</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-right-100">

                                        <a>Currency<i class="fas fa-angle-down u-s-m-l-6" style="color: rgb(0, 0, 0)"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:225px">
                                            <li>

                                                <a class="u-c-brand">$ - US DOLLAR</a>
                                            </li>
                                            <li>

                                                <a>£ - BRITISH POUND STERLING</a>
                                            </li>
                                            <li>

                                                <a>€ - EURO</a>
                                            </li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li> --}}
                            <li data-tooltip="tooltip" data-placement="left" title="Facebook">
                                <a href="#"><i class="fa-brands fa-facebook" style="color: rgb(0, 0, 0)"></i></a>
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="Twitter">
                                <a href="#"><i class="fa-brands fa-square-x-twitter"
                                        style="color: rgb(0, 0, 0)"></i></a>
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="Instagram">
                                <a href="#"><i class="fa-brands fa-instagram" style="color: rgb(0, 0, 0)"></i></a>
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="LinkedIn">
                                <a href="#"><i class="fa-brands fa-linkedin" style="color: rgb(0, 0, 0)"></i></a>
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Primary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 1 ======-->
    <!--====== Nav 2 ======-->
    <nav class="secondary-nav-wrapper" style="background-color: rgb(155,116,59)">
        <div class="container">

            <!--====== Secondary Nav ======-->
            <div class="secondary-nav">

                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation1">

                    <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list">
                            <li class="has-dropdown">

                                <span class="mega-text">
                                    <i class="fa-solid fa-bars"></i><span
                                        style="margin-left: 10px;font-size: initial;">Categories</span>
                                </span>

                                <!--====== Mega Menu ======-->
                                {{-- @php
                                    $categories = \App\Models\Categorie::latest()->get();
                                @endphp --}}
                                <span class="js-menu-toggle"></span>
                                <div class="mega-menu">
                                    <div class="mega-menu-wrap">
                                        <div class="mega-menu-list">
                                            <ul>
                                                @foreach ($categories as $item)
                                                    <li @if ($loop->first) class="js-active" @endif>
                                                        <a href="{{ route('ProductOfCategorie', $item->id) }}"><i
                                                                class="{{ $item->icon_class }}"></i>
                                                            <span>{{ $item->name }}</span></a>
                                                        <span class="js-menu-toggle js-toggle-mark"></span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @foreach ($categories as $item)
                                            <div
                                                class="mega-menu-content @if ($loop->first) js-active @endif">
                                                <div class="row">
                                                    @if ($item->subcategories)
                                                        @foreach ($item->subcategories as $item)
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">
                                                                        <a href="#">{{ $item->name }}</a>
                                                                    </li>
                                                                    @if ($item->products->count() != 0)
                                                                        @foreach ($item->products->take(4) as $item)
                                                                            <li>
                                                                                <a
                                                                                    href="{{ route('oneProduct', $item->id) }}">{{ $item->title }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    @else
                                                                        <li>
                                                                            <a href="#">no product found</a>
                                                                        </li>
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div class="mega-menu-content">
                                                            <h5>No Sub Categories</h5>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                        {{--
                                        <!--====== No Sub Categories ======-->
                                        <div class="mega-menu-content">
                                            <h5>No Categories</h5>
                                        </div>
                                        <!--====== End - No Sub Categories ======-->
                                        <!--====== No Sub Categories ======-->
                                        <div class="mega-menu-content">
                                            <h5>No Categories</h5>
                                        </div>
                                        <!--====== End - No Sub Categories ======--> --}}
                                        <!--====== No Sub Categories ======-->
                                        <div class="mega-menu-content">
                                            <h5>No Categories</h5>
                                        </div>
                                        <!--====== End - No Sub Categories ======-->
                                        <!--====== No Sub Categories ======-->
                                        <div class="mega-menu-content">
                                            <h5>No Categories</h5>
                                        </div>
                                        <!--====== End - No Sub Categories ======-->
                                    </div>
                                </div>
                                <!--====== End - Mega Menu ======-->
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation2">
                    <button class="btn btn--icon toggle-button toggle-button--white fas fa-cog" type="button"></button>
                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">
                        <span class="ah-close">✕ Close</span>
                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design2 ah-list--link-color-white">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('allProducts') }}">Products</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li>
                                <a href="{{ route('offer') }}">Promotions</a>
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation3">
                    <button
                        class="btn btn--icon toggle-button toggle-button--white fas fa-shopping-bag toggle-button-shop"
                        type="button"></button>
                    <span class="total-item-round">2</span>
                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">
                        <span class="ah-close">✕ Close</span>
                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">
                                <a><i class="far fa-user-circle" style="color: white"></i></a>
                                <!--====== Dropdown ======-->
                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    @auth
                                        <li>
                                            <a href="{{ route('user.profile.index') }}"><i
                                                    class="fas fa-user-circle u-s-m-r-6"></i>
                                                <span>Account</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}"><i class="fas fa-lock-open u-s-m-r-6"></i>
                                                <span>Signout</span></a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('register') }}"><i class="fas fa-user-plus u-s-m-r-6"></i>
                                                <span>Signup</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('login') }}"><i class="fas fa-lock u-s-m-r-6"></i>
                                                <span>Signin</span></a>
                                        </li>
                                    @endauth
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li>
                                <a href="#"><i class="far fa-heart"></i></a>
                            </li>
                            <li class="has-dropdown">
                                @include('landing.layouts.cart.CartNavCount')
                                <!--====== Dropdown ======-->
                                <span class="js-menu-toggle"></span>
                                @include('landing.layouts.cart.CartNavContent')
                                <!--====== End - Dropdown ======-->
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Secondary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 2 ======-->
</header>
<!--====== End - Main Header ======-->
