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
                                        <div class="dash__address-header">
                                            <h1 class="dash__h1">Address Book</h1>
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::user()->adresses->count() > 0)
                                    <div
                                        class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius u-s-m-b-30">
                                        <div class="dash__table-2-wrap gl-scroll">
                                            <table class="dash__table-2">
                                                <thead>
                                                    <tr>
                                                        <th>name</th>
                                                        <th>Address</th>
                                                        <th>phone</th>
                                                        <th>City</th>
                                                        <th>postal code</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach (Auth::user()->adresses as $item)
                                                        <tr>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->adresse }}</td>
                                                            <td>{{ $item->phone_number }}</td>
                                                            <td>{{ $item->city }}</td>
                                                            <td>{{ $item->postel_code }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                @else
                                    <h1 class="dash__h1">No Address Found</h1><br><br>
                                @endif
                                <div>
                                    <a class="dash__custom-link btn--e-brand-b-2" href="{{route('user.profile.adresse.create')}}"><i
                                            class="fas fa-plus u-s-m-r-8"></i>
                                        <span>Add New Address</span></a>
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
