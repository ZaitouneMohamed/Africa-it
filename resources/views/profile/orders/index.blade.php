@extends('landing.layouts.master')

@section('content')
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
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">My Orders</h1>

                                        <span class="dash__text u-s-m-b-30">Here you can see all products that have been
                                            delivered.</span>
                                        <form class="m-order u-s-m-b-30">
                                            <div class="m-order__select-wrapper">

                                                <label class="u-s-m-r-8" for="my-order-sort">Show:</label><select
                                                    class="select-box select-box--primary-style" id="my-order-sort">
                                                    <option selected>Last 5 orders</option>
                                                    <option>Last 15 days</option>
                                                    <option>Last 30 days</option>
                                                    <option>Last 6 months</option>
                                                    <option>Orders placed in 2018</option>
                                                    <option>All Orders</option>
                                                </select>
                                            </div>
                                        </form>
                                        <div class="m-order__list">
                                            @forelse ($orders->unique('order_number') as $item)
                                                <div class="m-order__get">
                                                    <div class="manage-o__header u-s-m-b-30">
                                                        <div class="dash-l-r">
                                                            <div>
                                                                <div class="manage-o__text-2 u-c-secondary">Order
                                                                    #{{ $item->order_number }}
                                                                </div>
                                                                <div class="manage-o__text u-c-silver">Placed on
                                                                    {{ $item->delivery_date }}</div>
                                                            </div>
                                                            <div>
                                                                <div class="dash__link dash__link--brand">

                                                                    <a href="{{ route('user.profile.OrderDetails', $item->order_number) }}">MANAGE</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <h1>No Order Found</h1>
                                            @endforelse
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
