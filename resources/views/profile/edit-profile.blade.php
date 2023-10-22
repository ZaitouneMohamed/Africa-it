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

                                    <a href="dashboard.html">My Account</a>
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
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Edit Profile</h1>

                                        <span class="dash__text u-s-m-b-30">Looks like you haven't update your
                                            profile</span>
                                        <div class="dash__link dash__link--secondary u-s-m-b-30">

                                            <a data-modal="modal" data-modal-id="#dash-newsletter">Subscribe
                                                Newsletter</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form class="dash-edit-p"
                                                    action="{{ route('user.profile.UpdateProfile') }}" method="POST">
                                                    @csrf
                                                    @method("PUT")
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-fname">FIRST NAME *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                value="{{ Auth::user()->first_name }}" type="text"
                                                                id="reg-fname" name="first_name">
                                                        </div>
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-lname">LAST NAME *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                value="{{ Auth::user()->last_name }}" type="text"
                                                                id="reg-lname" name="last_name">
                                                        </div>
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-lname">Phone *</label>

                                                            <input class="input-text input-text--primary-style"
                                                                value="{{ Auth::user()->phone }}" type="text"
                                                                id="reg-lname" name="phone">
                                                        </div>
                                                    </div>

                                                    <button class="btn btn--e-brand-b-2" type="submit">SAVE</button>
                                                </form>
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
