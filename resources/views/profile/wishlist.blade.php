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
                                        <h1 class="dash__h1 u-s-m-b-14">My Wish List</h1>
                                        <span class="dash__text u-s-m-b-30">Here you can see all your favorite products.</span>
                                        <div class="m-order__list">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">product</th>
                                                        <th scope="col">name</th>
                                                        <th scope="col">prix</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($products as $item)
                                                        <tr>
                                                            <td><img src="{{ $item->FirstImage }}" width="150px" alt=""></td>
                                                            <th>{{ $item->title }}</th>
                                                            <th>{{ $item->price }}</th>
                                                            <td style="color: red"><i class="fa fa-trash" aria-hidden="true"></i></td>
                                                        </tr>
                                                    @empty
                                                        <h1>No Order Found</h1>
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
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>
    <!--====== End - App Content ======-->
@endsection
