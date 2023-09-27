@extends('landing.layouts.master')

@section('content')
    <br><br><br><br>
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
                                <h1 class="section__heading u-c-secondary">ALREADY REGISTERED?</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row row--center">
                        <div class="col-lg-6 col-md-8 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                    <h1 class="gl-h1">I'M NEW CUSTOMER</h1>
                                    <div class="u-s-m-b-15">

                                        <a class="l-f-o__create-link btn--e-transparent-brand-b-2"
                                            href="{{ route('register') }}">CREATE
                                            AN ACCOUNT</a>
                                    </div>
                                    <h1 class="gl-h1">SIGNIN</h1>

                                    <span class="gl-text u-s-m-b-30">If you have an account with us, please log in.</span>
                                    <div class="gl-s-api">
                                        <div class="u-s-m-b-15">

                                            <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i
                                                    class="fab fa-facebook-f"></i>

                                                <span>Signin with Facebook</span></button>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i
                                                    class="fab fa-google"></i>

                                                <span>Signin with Google</span></button>
                                        </div>
                                    </div>
                                    <form class="l-f-o__form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @method('post')
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="login-email">E-MAIL *</label>

                                            <input class="input-text input-text--primary-style" type="email"
                                                id="login-email" placeholder="Enter E-mail" name="email">
                                            @error('email')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="login-password">PASSWORD *</label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                name="password" id="login-password" placeholder="Enter Password">
                                            @error('password')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <button class="btn btn--e-transparent-brand-b-2"
                                                    type="submit">LOGIN</button>
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <a class="gl-link" href="lost-password.html">Lost Your Password?</a>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <!--====== Check Box ======-->
                                            <div class="check-box">
                                                <input type="checkbox" id="remember-me">
                                                <div class="check-box__state check-box__state--primary">
                                                    <label class="check-box__label" for="remember-me">Remember Me</label>
                                                </div>
                                            </div>
                                            <!--====== End - Check Box ======-->
                                        </div>
                                    </form>
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

@section('title')
    Login
@endsection
