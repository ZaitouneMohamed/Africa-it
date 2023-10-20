@extends('landing.layouts.master')

@section('title', 'SHOP')

@section('content')
    <input type="hidden" name="" id="qty" value="1">
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Anti Flash White Background ======-->
        <div class="bg-anti-flash-white">

            <!--====== White Container ======-->
            <div class="white-container">
                <div class="container">

                    <!--====== Primary Slider ======-->
                    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-black">
                        <div class="owl-carousel primary-style-2" id="hero-slider">
                            @forelse ($baniers as $item)
                                <div class="hero-slide hero-slide--4"
                                    style="background-image: url('{{ $item->BanierImage }}')">
                                    <div class="primary-style-2-container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="slider-content slider-content--animation">
                                                    <span
                                                        class="content-span-2 u-c-white">{{ $item->categorie->name }}</span><br><br><br><br>
                                                    <a class="shop-now-link btn--e-brand" href="#">SHOP
                                                        NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <!--====== End - Primary Slider ======-->
                </div>

                <!--====== Section 1 ======-->


                <!--====== Electronic Category ======-->
                <div class="u-s-p-y-60" id="top">

                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="block">

                                        <span class="block__title">ELECTRONIC TOP CATEGORY</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Intro ======-->


                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="row">
                                @forelse ($lastCategories as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                        <div class="category-o">
                                            <div class="aspect aspect--bg-grey aspect--square category-o__img-wrap">
                                                <img class="aspect__img category-o__img" src="{{ $item->CategorieImage }}"
                                                    alt="">
                                            </div>
                                            <div class="category-o__info">
                                                <a class="category-o__shop-now btn--e-white-brand"
                                                    href="{{ route('ProductOfCategorie', $item->id) }}">{{ $item->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>

                <!--====== Electronic Category ======-->
                <!--====== End - Section 1 ======-->


                <!--====== Section 2 ======-->
                <!--====== Latest Product Tab ======-->
                <div class="u-s-p-b-60" id="latest">
                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="block">

                                        <span class="block__title">Latest Products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Intro ======-->

                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="tab-content">
                                <!--====== Tab ======-->
                                <div class="tab-pane fade show active" id="e-b-s">
                                    <div class="slider-fouc">
                                        <div class="owl-carousel tab-slider" data-item="4">
                                            @forelse ($last_products as $item)
                                                <div class="u-s-m-b-30">
                                                    <div class="product-o product-o--hover-on">
                                                        <div class="product-o__wrap">
                                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                href="{{ route('oneProduct', $item->id) }}">
                                                                <img class="aspect__img" src="{{ $item->FirstImage }}"
                                                                    alt=""></a>
                                                            <div class="product-o__action-wrap">
                                                                <ul class="product-o__action-list">
                                                                    <li>
                                                                        <a data-modal="modal" data-modal-id="#quick-look"
                                                                            onclick="GetProduct({{ $item->id }})"
                                                                            style="color: white" data-tooltip="tooltip"
                                                                            data-placement="top" title="Quick View"><i
                                                                                class="fas fa-search-plus"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal="modal" data-modal-id="#add-to-cart"
                                                                            data-tooltip="tooltip" data-placement="top"
                                                                            style="color: white"
                                                                            onclick="AddToCart({{ $item->id }})"
                                                                            title="Add to Cartt"><i
                                                                                class="fas fa-plus-circle"></i></a>
                                                                    </li>
                                                                    @auth
                                                                        <li>
                                                                            <a data-tooltip="tooltip" data-placement="top"
                                                                                style="color: white"
                                                                                onclick="ToogleFavorites({{ $item->id }},{{ Auth::user()->id }})"
                                                                                title="Add to Wishlistttt"><i
                                                                                    class="fas fa-heart"></i></a>
                                                                        </li>
                                                                    @endauth
                                                                    <li>
                                                                        <a href="#" data-tooltip="tooltip"
                                                                            data-placement="top"
                                                                            title="Email me When the price drops"><i
                                                                                class="fas fa-envelope"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <span class="product-o__category">
                                                            <a href="#">{{ $item->subcategorie->name }}</a></span>
                                                        <span class="product-o__name">
                                                            <a
                                                                href="{{ route('oneProduct', $item->id) }}">{{ $item->title }}</a></span>
                                                        <div class="product-o__rating gl-rating-style"><i
                                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                class="fas fa-star"></i>
                                                            <span
                                                                class="product-o__review">({{ $item->OverallReviews }})</span>
                                                        </div>
                                                        <span class="product-o__price">${{ $item->price }}
                                                            <span
                                                                class="product-o__discount">${{ $item->old_price }}</span></span>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab ======-->
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - latest product Tab ======-->
                <!--====== End - Section 2 ======-->

                <!--====== Section 2 ======-->
                <!--====== Latest Product Tab ======-->
                <div class="u-s-p-b-60">
                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="block">

                                        <span class="block__title">Prenium Products</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Intro ======-->


                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="tab-content">
                                <!--====== Tab ======-->
                                <div class="tab-pane fade show active" id="e-b-s">
                                    <div class="slider-fouc">
                                        <div class="owl-carousel tab-slider" data-item="4">
                                            @forelse ($prenium_product as $item)
                                                <div class="u-s-m-b-30">
                                                    <div class="product-o product-o--hover-on">
                                                        <div class="product-o__wrap">
                                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                href="{{ route('oneProduct', $item->id) }}">
                                                                <img class="aspect__img" src="{{ $item->FirstImage }}"
                                                                    alt=""></a>
                                                            <div class="product-o__action-wrap">
                                                                <ul class="product-o__action-list">
                                                                    <li>
                                                                        <a data-modal="modal" data-modal-id="#quick-look"
                                                                            onclick="GetProduct({{ $item->id }})"
                                                                            data-tooltip="tooltip" data-placement="top"
                                                                            title="Quick View"><i
                                                                                class="fas fa-search-plus"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal="modal" data-modal-id="#add-to-cart"
                                                                            data-tooltip="tooltip" data-placement="top"
                                                                            onclick="AddToCart({{ $item->id }})"
                                                                            title="Add to Cart"><i
                                                                                class="fas fa-plus-circle"></i></a>
                                                                    </li>
                                                                    @auth
                                                                        <li>
                                                                            <a data-tooltip="tooltip" data-placement="top"
                                                                                style="color: white"
                                                                                onclick="ToogleFavorites({{ $item->id }},{{ Auth::user()->id }})"
                                                                                title="Add to Wishlistttt"><i
                                                                                    class="fas fa-heart"></i></a>
                                                                        </li>
                                                                    @endauth
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <span class="product-o__category">
                                                            <a href="#">{{ $item->subcategorie->name }}</a></span>
                                                        <span class="product-o__name">
                                                            <a
                                                                href="{{ route('oneProduct', $item->id) }}">{{ $item->title }}</a></span>
                                                        <div class="product-o__rating gl-rating-style"><i
                                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                class="fas fa-star"></i>
                                                            <span
                                                                class="product-o__review">({{ $item->OverallReviews }})</span>
                                                        </div>
                                                        <span class="product-o__price">${{ $item->price }}
                                                            <span
                                                                class="product-o__discount">${{ $item->old_price }}</span></span>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab ======-->
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - latest product Tab ======-->
                <!--====== Latest Product Tab ======-->
                <div class="u-s-p-b-60">
                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="block">
                                        <span class="block__title">Products You might like</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Intro ======-->
                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="tab-content">
                                <!--====== Tab ======-->
                                <div class="tab-pane fade show active" id="e-b-s">
                                    <div class="slider-fouc">
                                        <div class="owl-carousel tab-slider" data-item="4">
                                            @forelse ($random_products as $item)
                                                <div class="u-s-m-b-30">
                                                    <div class="product-o product-o--hover-on">
                                                        <div class="product-o__wrap">
                                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                href="{{ route('oneProduct', $item->id) }}">
                                                                <img class="aspect__img" src="{{ $item->FirstImage }}"
                                                                    alt=""></a>
                                                            <div class="product-o__action-wrap">
                                                                <ul class="product-o__action-list">
                                                                    <li>
                                                                        <a data-modal="modal" data-modal-id="#quick-look"
                                                                            onclick="GetProduct({{ $item->id }})"
                                                                            data-tooltip="tooltip" data-placement="top"
                                                                            title="Quick View"><i
                                                                                class="fas fa-search-plus"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal="modal" data-modal-id="#add-to-cart"
                                                                            data-tooltip="tooltip" data-placement="top"
                                                                            onclick="AddToCart({{ $item->id }})"
                                                                            title="Add to Cart"><i
                                                                                class="fas fa-plus-circle"></i></a>
                                                                    </li>
                                                                    @auth
                                                                        <li>
                                                                            <a data-tooltip="tooltip" data-placement="top"
                                                                                style="color: white"
                                                                                onclick="ToogleFavorites({{ $item->id }},{{ Auth::user()->id }})"
                                                                                title="Add to Wishlistttt"><i
                                                                                    class="fas fa-heart"></i></a>
                                                                        </li>
                                                                    @endauth
                                                                    <li>
                                                                        <a href="#" data-tooltip="tooltip"
                                                                            data-placement="top"
                                                                            title="Email me When the price drops"><i
                                                                                class="fas fa-envelope"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <span class="product-o__category">
                                                            <a href="#">{{ $item->subcategorie->name }}</a></span>
                                                        <span class="product-o__name">
                                                            <a
                                                                href="{{ route('oneProduct', $item->id) }}">{{ $item->title }}</a></span>
                                                        <div class="product-o__rating gl-rating-style"><i
                                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                class="fas fa-star"></i>
                                                            <span
                                                                class="product-o__review">({{ $item->OverallReviews }})</span>
                                                        </div>
                                                        <span class="product-o__price">${{ $item->price }}
                                                            <span
                                                                class="product-o__discount">${{ $item->old_price }}</span></span>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab ======-->
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - latest product Tab ======-->
                <!--====== End - Section 2 ======-->

                <!--====== Section 11 ======-->
                @include('pages.FeedBack')
                <!--====== End - Section 11 ======-->

                <!--====== Section 10 ======-->
                <div class="u-s-p-b-60">

                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="service u-h-100">
                                        <div class="service__icon"><i class="fas fa-truck"></i></div>
                                        <div class="service__info-wrap">

                                            <span class="service__info-text-1">Free Shipping</span>

                                            <span class="service__info-text-2">Free shipping on all US order or order
                                                above $200</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="service u-h-100">
                                        <div class="service__icon"><i class="fas fa-redo"></i></div>
                                        <div class="service__info-wrap">

                                            <span class="service__info-text-1">Shop with Confidence</span>

                                            <span class="service__info-text-2">Our Protection covers your purchase from
                                                click to delivery</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="service u-h-100">
                                        <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                                        <div class="service__info-wrap">

                                            <span class="service__info-text-1">24/7 Help Center</span>

                                            <span class="service__info-text-2">Round-the-clock assistance for a smooth
                                                shopping experience</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - Section 10 ======-->
            </div>
            <!--====== End - White Container ======-->
        </div>
        <!--====== End - Anti Flash White Background ======-->
    </div>
    <!--====== End - App Content ======-->
    <div class="fixed-list">
        <ul class="nav" id="init-scrollspy">
            <li>

                <a class="nav-link" href="#top" data-click-scroll="#top"><i class="fas fa-tv"></i></a>
            </li>
            <li>

                <a class="nav-link" href="#latest" data-click-scroll="#latest"><i class="fas fa-female"></i></a>
            </li>
            <li>

                <a class="nav-link" href="#male-03" data-click-scroll="#male-03"><i class="fas fa-male"></i></a>
            </li>
        </ul>
    </div>
@endsection
