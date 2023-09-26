@extends('landing.layouts.master')

@section('content')
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">SHOPPING CART</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            @if (session('cart'))
                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                                <div class="table-responsive">
                                    <table class="table-p">
                                        <tbody id="cart_body">
                                            <!--====== Row ======-->
                                            {{-- <tr>
                                                <td>
                                                    <div class="table-p__box">
                                                        <div class="table-p__img-wrap">
                                                            <img class="u-img-fluid" src="{{ $item['image'] }}"
                                                                alt="{{ $item['image'] }}">
                                                        </div>
                                                        <div class="table-p__info">
                                                            <span class="table-p__name">
                                                                <a href="#">{{ $item['title'] }}</a>
                                                            </span>
                                                            <span class="table-p__category">
                                                                    <a href="#">Electronics</a>
                                                                </span>
                                                                <ul class="table-p__variant-list">
                                                                    <li>
                                                                        <span>Size: 22</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Color: Red</span>
                                                                    </li>
                                                                </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="table-p__price">${{ $item['price'] }}</span>
                                                </td>
                                                <td>
                                                    <div class="table-p__input-counter-wrap">
                                                        <!--====== Input Counter ======-->
                                                        <div class="input-counter">
                                                            <span class="input-counter__minus fas fa-minus"></span>
                                                            <input
                                                                class="input-counter__text input-counter--text-primary-style"
                                                                type="text" value="{{ $item['quantity'] }}"
                                                                data-min="1" data-max="1000">
                                                            <span class="input-counter__plus fas fa-plus"></span>
                                                        </div>
                                                        <!--====== End - Input Counter ======-->
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-p__del-wrap">
                                                        <a class="far fa-trash-alt table-p__delete-link"
                                                            onclick="DeleteProductFromCard({{ $item['id'] }})"></a>
                                                    </div>
                                                </td>
                                            </tr> --}}
                                            <!--====== End - Row ======-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="route-box">
                                    <div class="route-box__g1">
                                        <a class="route-box__link" href="{{ route('home') }}"><i
                                                class="fas fa-long-arrow-alt-left"></i>
                                            <span>CONTINUE SHOPPING</span></a>
                                    </div>
                                    <div class="route-box__g2">
                                        <a class="route-box__link" href="#"><i class="fas fa-trash"></i>
                                            <span>CLEAR CART</span></a>
                                        <a class="route-box__link" href="#"><i class="fas fa-sync"></i>
                                            <span>UPDATE CART</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            @else
                <h1 style="text-align: center">empty cart</h1>
            @endif
        </div>
        <!--====== End - Section 2 ======-->


        @if (session('cart'))
            <!--====== Sec tion 3 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                                <form class="f-cart">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                            <div class="f-cart__pad-box">
                                                <h1 class="gl-h1">Delivery Option</h1>
                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">
                                                    <input type="radio" id="cash-on-delivery" checked
                                                        name="DeliveryOption">
                                                    <div class="radio-box__state radio-box__state--primary">
                                                        <label class="radio-box__label" for="cash-on-delivery">Delivery (30
                                                            MAD)</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Radio Box ======-->
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                            <div class="f-cart__pad-box">
                                                <h1 class="gl-h1">Preference Time</h1>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="radio-box">
                                                            <input type="radio" id="tomorrow" name="DeliveryDay" checked>
                                                            <div class="radio-box__state radio-box__state--primary">
                                                                <label class="radio-box__label"
                                                                    for="tomorrow">Tomorrow</label>
                                                            </div>
                                                        </div>
                                                        <div class="radio-box">
                                                            <input type="radio" id="AftrerTomorrow" name="DeliveryDay">
                                                            <div class="radio-box__state radio-box__state--primary">
                                                                <label class="radio-box__label"
                                                                    for="AftrerTomorrow">Tomorrow</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        @foreach (\App\Models\TimeSlot::all() as $item)
                                                            <div class="radio-box">
                                                                <input type="radio" id="{{ $item->id }}"
                                                                    @if ($loop->first) checked @endif
                                                                    name="DeliveryTime" value="{{ $item->Fulltime }}">
                                                                <div class="radio-box__state radio-box__state--primary">
                                                                    <label class="radio-box__label"
                                                                        for="{{ $item->id }}">{{ $item->FullTime }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                            <div class="f-cart__pad-box">
                                                <div class="u-s-m-b-30">
                                                    <table class="f-cart__table">
                                                        <tbody>
                                                            <tr>
                                                                <td>SHIPPING</td>
                                                                <td>$4.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>TAX</td>
                                                                <td>$0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>SUBTOTAL</td>
                                                                <td>$379.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>GRAND TOTAL</td>
                                                                <td>$379.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 u-s-m-b-30">
                                            <div class="f-cart__pad-box">
                                                <h1 class="gl-h1">Select Branch</h1>
                                                @foreach (\App\Models\Branch::all() as $item)
                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">
                                                        <input type="radio" id="{{ $item->id }}" name="branch"
                                                            @if ($loop->first) checked @endif>
                                                        <div class="radio-box__state radio-box__state--primary">
                                                            <label class="radio-box__label"
                                                                for="{{ $item->id }}">{{ $item->name }}</label>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 u-s-m-b-30">
                                            <div class="f-cart__pad-box">
                                                <h1 class="gl-h1">Payement Method</h1>
                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">
                                                    <input type="radio" id="CashOnDelivery" name="PayementMethod"
                                                        checked value="on delivery">
                                                    <div class="radio-box__state radio-box__state--primary">
                                                        <label class="radio-box__label" for="CashOnDelivery">Cash On
                                                            Delivery</label>
                                                    </div>
                                                </div><br>
                                                <div class="radio-box">
                                                    <input type="radio" id="CashOnDelivery" name="PayementMethod"
                                                        value="card">
                                                    <div class="radio-box__state radio-box__state--primary">
                                                        <label class="radio-box__label" for="CashOnDelivery">By
                                                            Card</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Radio Box ======-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 u-s-m-b-30">
                                        <div class="f-cart__pad-box">
                                            <h1 class="gl-h1">Adresse</h1>
                                            @forelse (Auth::user()->adresses as $item)
                                                <div class="radio-box">
                                                    <input type="radio" id="CashOnDelivery" name="adresse"
                                                        @if ($loop->first) checked @endif
                                                        value="{{ $item->id }}">
                                                    <div class="radio-box__state radio-box__state--primary">
                                                        <label class="radio-box__label"
                                                            for="CashOnDelivery">{{ $item->adresse }}</label>
                                                    </div>
                                                </div>
                                            @empty
                                                <p>Add Adresse</p>
                                            @endforelse
                                        </div>
                                    </div>
                                    <button class="btn btn--e-brand-b-2" type="submit">PLACE ORDER</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 3 ======-->
    @endif
    </div>
    <!--====== End - App Content ======-->
@endsection

@section('title', 'checkout')

@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
