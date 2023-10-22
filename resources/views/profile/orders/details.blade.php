@extends('landing.layouts.master')

@section('content')
    @php
        $total = 0;
        $shipping_free = 0;
    @endphp
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="breadcrumb">
                        <div class="breadcrumb__wrap">
                            <ul class="breadcrumb__list">
                                <li class="has-separator">

                                    <a href="index.html">Home</a>
                                </li>
                                <li class="is-marked">

                                    <a href="dash-my-profile.html">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="dash">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">

                                <!--====== Dashboard Features ======-->
                                @include('profile.dash')
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <h1 class="dash__h1 u-s-m-b-30">Order Details</h1>
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <div class="dash-l-r">
                                            <div>
                                                <div class="manage-o__text-2 u-c-secondary">Order
                                                    #{{ $order->first()->order_number }}</div>
                                                <div class="manage-o__text u-c-silver">Placed on
                                                    {{ $order->first()->created_at }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <div class="manage-o">
                                            <div class="manage-o__header u-s-m-b-30">
                                                <div class="manage-o__icon"><i class="fas fa-box u-s-m-r-5"></i>
                                                    <span class="manage-o__text">Package
                                                        {{ $order->count('product') }}</span>
                                                </div>
                                            </div>
                                            @foreach ($order as $item)
                                                @php
                                                    $total += $item->qty * $item->product->price;
                                                @endphp
                                                <div class="manage-o__description">
                                                    <div class="description__container">
                                                        <div class="description__img-wrap">
                                                            <img class="u-img-fluid" src="{{ $item->product->first_image }}"
                                                                alt="">
                                                        </div>
                                                        <div class="description-title">{{ $item->product->title }}</div>
                                                    </div>
                                                    <div class="description__info-wrap">
                                                        <div>
                                                            <span class="manage-o__text-2 u-c-silver">Quantity:
                                                                <span
                                                                    class="manage-o__text-2 u-c-secondary">{{ $item->qty }}</span></span>
                                                        </div>
                                                        <div>
                                                            <span class="manage-o__text-2 u-c-silver">Total:
                                                                <span class="manage-o__text-2 u-c-secondary">DH
                                                                    {{ $item->qty * $item->product->price }}</span></span>
                                                        </div>
                                                    </div>
                                                </div><br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                            <div class="dash__pad-3">
                                                <h2 class="dash__h2 u-s-m-b-8">Shipping Address</h2>
                                                @if ($order->first()->adresse_id)
                                                    <h2 class="dash__h2 u-s-m-b-8">John Doe</h2>
                                                    <span class="dash__text-2">{{ $order->first()->adresse }}</span>
                                                    <span class="dash__text-2">(+0) 900901904</span>
                                                @else
                                                    <h5 class="card-title">no adresse found</h5>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dash__box dash__box--bg-white dash__box--shadow u-h-100">
                                            <div class="dash__pad-3">
                                                <h2 class="dash__h2 u-s-m-b-8">Total Summary</h2>
                                                <div class="dash-l-r u-s-m-b-8">
                                                    <div class="manage-o__text-2 u-c-secondary">Subtotal</div>
                                                    <div class="manage-o__text-2 u-c-secondary">DH {{ $total }}</div>
                                                </div>
                                                <div class="dash-l-r u-s-m-b-8">
                                                    <div class="manage-o__text-2 u-c-secondary">Shipping Fee</div>
                                                    <div class="manage-o__text-2 u-c-secondary">DH {{ $shipping_free }}
                                                    </div>
                                                </div>
                                                <div class="dash-l-r u-s-m-b-8">
                                                    <div class="manage-o__text-2 u-c-secondary">Total</div>
                                                    <div class="manage-o__text-2 u-c-secondary">DH {{ $total + $shipping_free  }}</div>
                                                </div>
                                                <span class="dash__text-2">Paid by Cash on Delivery</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>
    <!--====== End - App Content ======-->
@endsection
