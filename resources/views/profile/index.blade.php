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

                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="is-marked">

                                    <a href="{{ route('user.profile.index') }}">My Account</a>
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
                                        <h1 class="dash__h1 u-s-m-b-14">Manage My Account</h1>
                                        <span class="dash__text u-s-m-b-30">From your My Account Dashboard you have the
                                            ability to view a snapshot of your recent account activity and update your
                                            account information. Select a link below to view or edit information.</span>
                                        <div class="row">
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                    <div class="dash__pad-3">
                                                        <h2 class="dash__h2 u-s-m-b-8">PERSONAL PROFILE</h2>

                                                        <span class="dash__text">{{ Auth::user()->full_name }}</span>

                                                        <span class="dash__text">{{ Auth::user()->email }}</span>
                                                        <div class="dash__link dash__link--secondary u-s-m-t-8">
                                                            <a href="{{ route('user.profile.profile.edit') }}">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 u-s-m-b-30">
                                                <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                    <div class="dash__pad-3">
                                                        <h2 class="dash__h2 u-s-m-b-8"><i class="fa fa-phone" aria-hidden="true"></i></h2>
                                                        <span class="dash__text">{{ Auth::user()->phone }}</span>

                                                        <div class="dash__link dash__link--secondary u-s-m-t-8">
                                                            <a href="{{ route('user.profile.profile.edit') }}">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                                    <h2 class="dash__h2 u-s-p-xy-20">RECENT ORDERS</h2>
                                    <div class="dash__table-wrap gl-scroll">
                                        <table class="dash__table">
                                            <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Placed On</th>
                                                    <th>Time</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($orders->unique('order_number') as $item)
                                                    <tr>
                                                        <td>{{ $item->order_number }}</td>
                                                        <td>{{ $item->delivery_date }}</td>
                                                        <td>{{ $item->delivery_time }}</td>
                                                        <td>
                                                            <div class="dash__table-total">

                                                                <span>DH{{ $item->total }}</span>
                                                                <div class="dash__link dash__link--brand">

                                                                    <a
                                                                        href="{{ route('user.profile.OrderDetails', $item->order_number) }}">MANAGE</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                @endforelse
                                            </tbody>
                                        </table>
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
