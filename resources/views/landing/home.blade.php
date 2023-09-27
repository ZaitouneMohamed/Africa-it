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
                            <div class="hero-slide hero-slide--4">
                                <div class="primary-style-2-container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="slider-content slider-content--animation">
                                                <span class="content-span-1 u-c-white">Find Top Brands</span>
                                                <span class="content-span-2 u-c-white">10% Off On Intimates</span>
                                                <span class="content-span-3 u-c-white">Find Intimates on best prices</span>
                                                <span class="content-span-4 u-c-white">Starting At
                                                    <span class="u-c-brand">$100.00</span></span>
                                                <a class="shop-now-link btn--e-brand" href="#">SHOP
                                                    NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-slide hero-slide--4">
                                <div class="primary-style-2-container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="slider-content slider-content--animation">
                                                <span class="content-span-1 u-c-white">Find Top Brands</span>
                                                <span class="content-span-2 u-c-white">10% Off On Intimates</span>
                                                <span class="content-span-3 u-c-white">Find Intimates on best prices</span>
                                                <span class="content-span-4 u-c-white">Starting At
                                                    <span class="u-c-brand">$100.00</span></span>
                                                <a class="shop-now-link btn--e-brand" href="#">SHOP
                                                    NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-slide hero-slide--4">
                                <div class="primary-style-2-container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="slider-content slider-content--animation">
                                                <span class="content-span-1 u-c-white">Find Top Brands</span>
                                                <span class="content-span-2 u-c-white">10% Off On Intimates</span>
                                                <span class="content-span-3 u-c-white">Find Intimates on best prices</span>
                                                <span class="content-span-4 u-c-white">Starting At
                                                    <span class="u-c-brand">$100.00</span></span>
                                                <a class="shop-now-link btn--e-brand" href="#">SHOP
                                                    NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                @foreach ($lastCategories as $item)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                        <div class="category-o">
                                            <div class="aspect aspect--bg-grey aspect--square category-o__img-wrap">
                                                <img class="aspect__img category-o__img"
                                                    src="{{ $item->CategorieImage }}"
                                                    alt="">
                                            </div>
                                            <div class="category-o__info">
                                                <a class="category-o__shop-now btn--e-white-brand"
                                                    href="{{route('ProductOfCategorie',$item->id)}}">{{ $item->name }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                            @foreach ($last_products as $item)
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
                                                                        <a data-modal="modal" data-modal-id="#quick-look" onclick="GetProduct({{$item->id}})"
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
                                                                    <li>
                                                                        <a href="#" data-tooltip="tooltip"
                                                                            data-placement="top"
                                                                            title="Add to Wishlist"><i
                                                                                class="fas fa-heart"></i></a>
                                                                    </li>
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
                                                            <span class="product-o__review">({{$item->OverallReviews}})</span>
                                                        </div>
                                                        <span class="product-o__price">${{ $item->price }}
                                                            <span
                                                                class="product-o__discount">${{ $item->old_price }}</span></span>
                                                    </div>
                                                </div>
                                            @endforeach
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
                                        {{-- <ul class="nav tab-list">
                                            <li class="nav-item">

                                                <a class="nav-link btn--e-white-brand-shadow" data-toggle="tab"
                                                    href="#e-l-p">LATEST PRODUCTS</a>
                                            </li>
                                            <li class="nav-item">

                                                <a class="nav-link btn--e-white-brand-shadow active" data-toggle="tab"
                                                    href="#e-b-s">BEST SELLING</a>
                                            </li>
                                            <li class="nav-item">

                                                <a class="nav-link btn--e-white-brand-shadow" data-toggle="tab"
                                                    href="#e-t-r">TOP RATING</a>
                                            </li>
                                            <li class="nav-item">

                                                <a class="nav-link btn--e-white-brand-shadow" data-toggle="tab"
                                                    href="#e-f-p">FEATURED PRODUCTS</a>
                                            </li>
                                        </ul> --}}
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
                                            @foreach ($prenium_product as $item)
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
                                                                    <a data-modal="modal" data-modal-id="#quick-look" onclick="GetProduct({{$item->id}})"
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
                                                                <li>
                                                                    <a href="#" data-tooltip="tooltip"
                                                                        data-placement="top"
                                                                        title="Add to Wishlist"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
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
                                                        <span class="product-o__review">({{$item->OverallReviews}})</span>
                                                    </div>
                                                    <span class="product-o__price">${{ $item->price }}
                                                        <span
                                                            class="product-o__discount">${{ $item->old_price }}</span></span>
                                                </div>
                                            </div>
                                            @endforeach
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

                <!--====== Section 9 ======-->
                <div class="u-s-p-b-60">

                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                        <h1 class="section__heading u-c-secondary u-s-m-b-12">LATEST FROM BLOG</h1>

                                        <span class="section__span u-c-silver">START YOU DAY WITH FRESH AND LATEST
                                            NEWS</span>
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
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="bp-mini bp-mini--img u-h-100">
                                        <div class="bp-mini__thumbnail">

                                            <!--====== Image Code ======-->

                                            <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="#">

                                                <img class="aspect__img"
                                                    src="{{ asset('assets/ludus/images/blog/post-2.jpg') }}"
                                                    alt=""></a>
                                            <!--====== End - Image Code ======-->
                                        </div>
                                        <div class="bp-mini__content">
                                            <div class="bp-mini__stat">

                                                <span class="bp-mini__stat-wrap">

                                                    <span class="bp-mini__publish-date">

                                                        <a>

                                                            <span>25 February 2018</span></a></span></span>

                                                <span class="bp-mini__stat-wrap">

                                                    <span class="bp-mini__preposition">By</span>

                                                    <span class="bp-mini__author">

                                                        <a href="#">Dayle</a></span></span>

                                                <span class="bp-mini__stat">

                                                    <span class="bp-mini__comment">

                                                        <a href="#"><i class="far fa-comments u-s-m-r-4"></i>

                                                            <span>8</span></a></span></span>
                                            </div>
                                            <div class="bp-mini__category">

                                                <a>Learning</a>

                                                <a>News</a>
                                                <a>Health</a>
                                            </div>

                                            <span class="bp-mini__h1">

                                                <a href="#">Life is an extraordinary Adventure</a></span>
                                            <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</p>
                                            <div class="blog-t-w">

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="bp-mini bp-mini--img u-h-100">
                                        <div class="bp-mini__thumbnail">
                                            <!--====== Image Code =====-->
                                            <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="#">

                                                <img class="aspect__img"
                                                    src="{{ asset('assets/ludus/images/blog/post-12.jpg') }}"
                                                    alt=""></a>
                                            <!--====== End - Image Code ======-->
                                        </div>
                                        <div class="bp-mini__content">
                                            <div class="bp-mini__stat">

                                                <span class="bp-mini__stat-wrap">

                                                    <span class="bp-mini__publish-date">

                                                        <a>

                                                            <span>25 February 2018</span></a></span></span>

                                                <span class="bp-mini__stat-wrap">

                                                    <span class="bp-mini__preposition">By</span>

                                                    <span class="bp-mini__author">

                                                        <a href="#">Dayle</a></span></span>

                                                <span class="bp-mini__stat">

                                                    <span class="bp-mini__comment">

                                                        <a href="#"><i class="far fa-comments u-s-m-r-4"></i>

                                                            <span>8</span></a></span></span>
                                            </div>
                                            <div class="bp-mini__category">

                                                <a>Learning</a>

                                                <a>News</a>

                                                <a>Health</a>
                                            </div>

                                            <span class="bp-mini__h1">

                                                <a href="#">Wait till its open</a></span>
                                            <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</p>
                                            <div class="blog-t-w">

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="bp-mini bp-mini--img u-h-100">
                                        <div class="bp-mini__thumbnail">

                                            <!--====== Image Code ======-->

                                            <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="#">

                                                <img class="aspect__img"
                                                    src="{{ asset('assets/ludus/images/blog/post-5.jpg') }}"
                                                    alt=""></a>
                                            <!--====== End - Image Code ======-->
                                        </div>
                                        <div class="bp-mini__content">
                                            <div class="bp-mini__stat">

                                                <span class="bp-mini__stat-wrap">

                                                    <span class="bp-mini__publish-date">

                                                        <a>

                                                            <span>25 February 2018</span></a></span></span>

                                                <span class="bp-mini__stat-wrap">

                                                    <span class="bp-mini__preposition">By</span>

                                                    <span class="bp-mini__author">

                                                        <a href="#">Dayle</a></span></span>

                                                <span class="bp-mini__stat">

                                                    <span class="bp-mini__comment">

                                                        <a href="#"><i class="far fa-comments u-s-m-r-4"></i>

                                                            <span>8</span></a></span></span>
                                            </div>
                                            <div class="bp-mini__category">

                                                <a>Learning</a>

                                                <a>News</a>

                                                <a>Health</a>
                                            </div>

                                            <span class="bp-mini__h1">

                                                <a href="#">Tell me difference between smoke and
                                                    vape</a></span>
                                            <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry.</p>
                                            <div class="blog-t-w">

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                                <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - Section 9 ======-->


                <!--====== Section 11 ======-->
                <div class="u-s-p-b-90 u-s-m-b-30">

                    <!--====== Section Intro ======-->
                    <div class="section__intro u-s-m-b-46">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__text-wrap">
                                        <h1 class="section__heading u-c-secondary u-s-m-b-12">CLIENTS FEEDBACK</h1>

                                        <span class="section__span u-c-silver">WHAT OUR CLIENTS SAY</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Intro ======-->


                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">

                            <!--====== Testimonial Slider ======-->
                            <div class="slider-fouc">
                                <div class="owl-carousel" id="testimonial-slider">
                                    <div class="testimonial">
                                        <div class="testimonial__img-wrap">

                                            <img class="testimonial__img"
                                                src="{{ asset('assets/ludus/images/about/test-1.jpg') }} "
                                                alt="">
                                        </div>
                                        <div class="testimonial__content-wrap">

                                            <span class="testimonial__double-quote"><i
                                                    class="fas fa-quote-right"></i></span>
                                            <blockquote class="testimonial__block-quote">
                                                <p>"Far far away, behind the word mountains, far from the countries Vokalia
                                                    and Consonantia, there live the blind texts. Separated they live in
                                                    Bookmarksgrove right at the coast of the Semantics, a large language
                                                    ocean."</p>
                                            </blockquote>

                                            <span class="testimonial__author">John D. / DVNTR Inc.</span>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="testimonial__img-wrap">

                                            <img class="testimonial__img"
                                                src="{{ asset('assets/ludus/images/about/test-2.jpg') }} "
                                                alt="">
                                        </div>
                                        <div class="testimonial__content-wrap">

                                            <span class="testimonial__double-quote"><i
                                                    class="fas fa-quote-right"></i></span>
                                            <blockquote class="testimonial__block-quote">
                                                <p>"Far far away, behind the word mountains, far from the countries Vokalia
                                                    and Consonantia, there live the blind texts. Separated they live in
                                                    Bookmarksgrove right at the coast of the Semantics, a large language
                                                    ocean."</p>
                                            </blockquote>

                                            <span class="testimonial__author">John D. / DVNTR Inc.</span>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="testimonial__img-wrap">

                                            <img class="testimonial__img"
                                                src="{{ asset('assets/ludus/images/about/test-3.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial__content-wrap">

                                            <span class="testimonial__double-quote"><i
                                                    class="fas fa-quote-right"></i></span>
                                            <blockquote class="testimonial__block-quote">
                                                <p>"Far far away, behind the word mountains, far from the countries Vokalia
                                                    and Consonantia, there live the blind texts. Separated they live in
                                                    Bookmarksgrove right at the coast of the Semantics, a large language
                                                    ocean."</p>
                                            </blockquote>
                                            <span class="testimonial__author">John D. / DVNTR Inc.</span>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="testimonial__img-wrap">
                                            <img class="testimonial__img"
                                                src="{{ asset('assets/ludus/images/about/test-4.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial__content-wrap">

                                            <span class="testimonial__double-quote"><i
                                                    class="fas fa-quote-right"></i></span>
                                            <blockquote class="testimonial__block-quote">
                                                <p>"Far far away, behind the word mountains, far from the countries Vokalia
                                                    and Consonantia, there live the blind texts. Separated they live in
                                                    Bookmarksgrove right at the coast of the Semantics, a large language
                                                    ocean."</p>
                                            </blockquote>

                                            <span class="testimonial__author">John D. / DVNTR Inc.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Testimonial Slider ======-->
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
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

                <a class="nav-link" href="#top" data-click-scroll="#top"><i
                        class="fas fa-tv"></i></a>
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
