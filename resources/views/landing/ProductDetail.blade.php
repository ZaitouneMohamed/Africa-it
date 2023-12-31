@extends('landing.layouts.master')

@section('content')
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-t-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <!--====== Product Breadcrumb ======-->
                        <div class="pd-breadcrumb u-s-m-b-30">
                            <ul class="pd-breadcrumb__list">
                                <li class="has-separator">
                                    <a href="#"><i class="fa-solid fa-house"></i>Home</a>
                                </li>
                                <li class="has-separator">
                                    <a href="#">{{ $product->subcategorie->categorie->name }}</a>
                                </li>
                                <li class="has-separator">
                                    <a href="#">{{ $product->subcategorie->name }}</a>
                                </li>
                                <li class="is-marked">
                                    <a href="#">{{ $product->title }}</a>
                                </li>
                            </ul>
                        </div>
                        <!--====== End - Product Breadcrumb ======-->


                        <!--====== Product Detail Zoom ======-->
                        <div class="pd u-s-m-b-30">
                            <div class="slider-fouc pd-wrap">
                                <div id="pd-o-initiate">
                                    @foreach ($product->Images as $item)
                                        <div class="pd-o-img-wrap"
                                            data-src="{{ asset('images/products') }}/{{ $item->url }}">
                                            <img class="u-img-fluid"
                                                src="{{ asset('images/products') }}/{{ $item->url }}"
                                                data-zoom-image="{{ asset('images/products') }}/{{ $item->url }}"
                                                alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <span class="pd-text">Click for larger zoom</span>
                            </div>
                            <div class="u-s-m-t-15">
                                <div class="slider-fouc">
                                    <div id="pd-o-thumbnail">
                                        @foreach ($product->Images as $item)
                                            <div>
                                                <img class="u-img-fluid"
                                                    src="{{ asset('images/products') }}/{{ $item->url }}"
                                                    alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail Zoom ======-->
                    </div>
                    <div class="col-lg-7">

                        <!--====== Product Right Side Details ======-->
                        <div class="pd-detail">
                            <div>

                                <span class="pd-detail__name">{{ $product->title }}</span>
                            </div>
                            <div>
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__price">{{ $product->price }}</span><del
                                        class="pd-detail__del">{{ $product->old_price }}</del>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star-half-alt"></i>

                                    <span class="pd-detail__review u-s-m-l-4">

                                        <a data-click-scroll="#view-review">{{ $product->reviews->count() }}
                                            Reviews</a></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <span class="pd-detail__preview-desc">{!! html_entity_decode($product->description) !!}</span>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">
                                    <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>
                                        <a href="signin.html">Add to Wishlist</a>
                                        <span class="pd-detail__click-count">(222)</span></span>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail-inline-2">
                                    <div class="u-s-m-b-15">

                                        <!--====== Input Counter ======-->
                                        <div class="input-counter">

                                            <span class="input-counter__minus fas fa-minus"></span>

                                            <input class="input-counter__text input-counter--text-primary-style"
                                                id="qty{{ $product->id }}" type="text" value="1" data-min="1"
                                                data-max="1000">

                                            <span class="input-counter__plus fas fa-plus"></span>
                                        </div>
                                        <!--====== End - Input Counter ======-->
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <button class="btn btn--e-brand-b-2"
                                            style="padding: 1rem 3rem ; border-radius: 0.375rem "
                                            onclick="AddToCart({{ $product->id }})">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                <ul class="pd-detail__policy-list">
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Buyer Protection.</span>
                                    </li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Full Refund if you don't receive your order.</span>
                                    </li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Returns accepted if product not as described.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>

        <!--====== Product Detail Tab ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pd-tab">
                            <div class="u-s-m-b-30">
                                <ul class="nav pd-tab__list">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#pd-desc">DESCRIPTION</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="view-review" data-toggle="tab" href="#pd-rev">REVIEWS
                                            <span>({{ $product->reviews->count() }})</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="view-review" data-toggle="tab" href="#fiche">Fiche
                                            Technique</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">

                                <!--====== Tab 1 ======-->
                                <div class="tab-pane fade show active" id="pd-desc">
                                    <div class="pd-tab__desc">
                                        <div class="u-s-m-b-15">
                                            {!! html_entity_decode($product->description) !!}
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab 1 ======-->
                                <!--====== Tab 3 ======-->
                                <div class="tab-pane" id="pd-rev">
                                    <div class="pd-tab__rev">
                                        <div class="u-s-m-b-30">
                                            <div class="pd-tab__rev-score">
                                                <div class="u-s-m-b-8">
                                                    <h2>{{ $product->reviews->count() }} Reviews -
                                                        {{ $product->OverallReviews }} (Overall)</h2>
                                                </div>
                                                <div class="gl-rating-style-2 u-s-m-b-8">{!! GetStarsIcon($product->OverallReviews) !!}</div>
                                                <div class="u-s-m-b-8">
                                                    <h4>We want to hear from you!</h4>
                                                </div>
                                                <span class="gl-text">Tell us what you think about this item</span>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <form class="pd-tab__rev-f1">
                                                <div class="rev-f1__group">
                                                    <div class="u-s-m-b-15">
                                                        <h2>{{ $product->reviews->count() }} Review(s) for
                                                            {{ $product->title }} </h2>
                                                    </div>
                                                </div>
                                                <div class="rev-f1__review">
                                                    @foreach ($product->Reviews as $item)
                                                        <div class="review-o u-s-m-b-15">
                                                            <div class="review-o__info u-s-m-b-8">
                                                                <span class="review-o__name">{{ $item->name }}</span>
                                                                <span
                                                                    class="review-o__date">{{ $item->created_at }}</span>
                                                            </div>
                                                            <div class="review-o__rating gl-rating-style u-s-m-b-8">
                                                                {!! GetStarsIcon($item->stars) !!}
                                                                <span>({{ $item->stars }})</span>
                                                            </div>
                                                            <p class="review-o__text">
                                                                {{ $item->review }}
                                                            </p>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </form>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <form class="pd-tab__rev-f2" method="POST"
                                                action="{{ route('AddReview', $product->id) }}">
                                                @csrf
                                                <h2 class="u-s-m-b-15">Add a Review</h2>
                                                <span class="gl-text u-s-m-b-15">Your email address will not be published.
                                                    Required fields are marked *</span>
                                                <div class="u-s-m-b-30">
                                                    <div class="rev-f2__table-wrap gl-scroll">
                                                        <table class="rev-f2__table">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i>

                                                                            <span>(1)</span>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star-half-alt"></i>

                                                                            <span>(1.5)</span>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i>

                                                                            <span>(2)</span>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star-half-alt"></i>

                                                                            <span>(2.5)</span>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i>

                                                                            <span>(3)</span>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star-half-alt"></i>

                                                                            <span>(3.5)</span>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i>

                                                                            <span>(4)</span>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star-half-alt"></i>

                                                                            <span>(4.5)</span>
                                                                        </div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="gl-rating-style-2"><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i><i
                                                                                class="fas fa-star"></i>

                                                                            <span>(5)</span>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-1"
                                                                                value="1" name="rating">
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-1"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-1.5"
                                                                                value="1.5" name="rating">
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-1.5"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-2"
                                                                                value="2" name="rating">
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-2"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-2.5"
                                                                                value="2.5" name="rating">
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-2.5"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-3"
                                                                                value="3" name="rating">
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-3"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-3.5"
                                                                                value="3.5" name="rating">
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-3.5"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-4"
                                                                                value="4" name="rating">
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-4"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-4.5"
                                                                                value="4.5" name="rating">
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-4.5"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                    <td>

                                                                        <!--====== Radio Box ======-->
                                                                        <div class="radio-box">

                                                                            <input type="radio" id="star-5"
                                                                                value="5" name="rating" checked>
                                                                            <div
                                                                                class="radio-box__state radio-box__state--primary">

                                                                                <label class="radio-box__label"
                                                                                    for="star-5"></label>
                                                                            </div>
                                                                        </div>
                                                                        <!--====== End - Radio Box ======-->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="rev-f2__group">
                                                    <div class="u-s-m-b-15">

                                                        <label class="gl-label" for="reviewer-text">YOUR REVIEW *</label>
                                                        <textarea class="text-area text-area--primary-style" id="reviewer-text" name="body"></textarea>
                                                    </div>
                                                    <div>
                                                        <p class="u-s-m-b-30">
                                                            <label class="gl-label" for="reviewer-name">NAME *</label>
                                                            <input class="input-text input-text--primary-style"
                                                                name="name" type="text" id="reviewer-name">
                                                        </p>
                                                        <p class="u-s-m-b-30" <label class="gl-label"
                                                            for="reviewer-email">EMAIL *</label>
                                                            <input class="input-text input-text--primary-style"
                                                                name="email" type="text" id="reviewer-email">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn btn--e-brand-shadow" type="submit">SUBMIT</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Tab 3 ======-->
                                <div class="tab-pane" id="fiche">
                                    <div class="pd-tab__desc">
                                        <div class="u-s-m-b-15">
                                            @if ($product->fiche_technique)
                                                <a href="{{ asset('images/fiches_technique') }}/{{ $product->fiche_technique }}"
                                                    target="_blank" class="btn btn--e-brand-b-2"
                                                    style="padding: 1rem 3rem ; border-radius: 0.375rem ">check fiche
                                                    technique</a>
                                            @else
                                                no fiche technique found
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-related-products :categorieID="$product->subcategorie->categorie->id" />
    </div>
@endsection
