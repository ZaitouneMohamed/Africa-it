@extends('landing.layouts.master')

@section('content')
    <!--====== App Content ======-->
    <div class="app-content">
        <!--====== Section 1 ======-->
        <div class="u-s-p-y-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="shop-w-master">
                            <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>
                                <span>FILTERS (Not Working)</span>
                            </h1>
                            @if ($products)
                                <div class="shop-w-master__sidebar sidebar--bg-snow">
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">PRICE</h1>
                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-price"
                                                    data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-price">
                                                <form class="shop-w__form-p" {{-- @if (Route::currentRouteName() == 'allProducts') action="{{ route('allProducts') }}" --}} {{-- @else --}}
                                                    {{-- action="{{ route('ProductOfCategorie', $id) }}" @endif --}} method="POST" action="#">

                                                    @csrf
                                                    @method('get')
                                                    <div class="shop-w__form-p-wrap">
                                                        <div>
                                                            <label for="price-min"></label>
                                                            <input class="input-text input-text--primary-style"
                                                                type="number" name="min" min="0" id="price-min"
                                                                placeholder="Min">
                                                        </div>
                                                        <div>
                                                            <label for="price-max"></label>
                                                            <input class="input-text input-text--primary-style"
                                                                type="number" name="max" min="0" id="price-max"
                                                                placeholder="Max">
                                                        </div>
                                                        <div>
                                                            <button
                                                                class="btn btn--icon fas fa-angle-right btn--e-transparent-platinum-b-2"
                                                                type="submit"></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="shop-p">
                            <div class="shop-p__collection">
                                <div class="row is-grid-active">
                                    @forelse ($products as $item)
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product-m">
                                                <div class="product-m__thumb">
                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                        href="{{ route('oneProduct', $item->id) }}">
                                                        <img class="aspect__img" src="{{ $item->FirstImage }}"
                                                            alt=""></a>
                                                    <div class="product-m__quick-look">
                                                        <a class="fas fa-search" data-modal="modal"
                                                            data-modal-id="#quick-look" data-tooltip="tooltip"
                                                            data-placement="top" title="Quick Look"></a>
                                                    </div>
                                                    <div class="product-m__add-cart">
                                                        <a class="btn--e-brand" onclick="AddToCart({{ $item->id }})"
                                                            data-modal-id="#add-to-cart">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="product-m__content">
                                                    <div class="product-m__category">
                                                        <a
                                                            href="shop-side-version-2.html">{{ $item->subcategorie->title }}</a>
                                                    </div>
                                                    <div class="product-m__name">
                                                        <a
                                                            href="{{ route('oneProduct', $item->id) }}">{{ $item->title }}</a>
                                                    </div>
                                                    <div class="product-m__rating gl-rating-style"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i>
                                                        <span
                                                            class="product-m__review">({{ $item->reviews->count() }})</span>
                                                    </div>
                                                    <div class="product-m__price">DH{{ $item->price }}</div>
                                                    <div class="product-m__hover">
                                                        <div class="product-m__preview-description">
                                                            <span>{!! html_entity_decode($item->description) !!}</span>
                                                        </div>
                                                        <div class="product-m__wishlist">
                                                            <a class="far fa-heart" href="#" data-tooltip="tooltip"
                                                                data-placement="top" title="Add to Wishlist"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="empty">
                                            <div class="empty__wrap">
                                                <span class="empty__big-text">SORRY</span>
                                                <span class="empty__text-1">Your search, did not match any products. A
                                                    partial match of your keywords is listed below.</span>
                                                <form class="empty__search-form" action="{{ route('Search') }}"
                                                    method="POST">
                                                    @csrf
                                                    <label for="search-label"></label>
                                                    <input class="input-text input-text--primary-style" type="text"
                                                        id="search-label" placeholder="Search Keywords" name="word">
                                                    <button class="btn btn--icon fas fa-search" type="submit"></button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->
@endsection
