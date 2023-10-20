@extends('landing.layouts.master')

@section('content')
<br><br><br><br>
    <div class="app-content">
        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
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
                                    <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                    <div class="gl-s-api">
                                        <div class="u-s-m-b-15">
                                            <button class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i
                                                    class="fab fa-facebook-f"></i>
                                                <span>Signup with Facebook</span></button>
                                        </div>
                                        <div class="u-s-m-b-30">
                                            <button class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i
                                                    class="fab fa-google"></i>
                                                    <span><a href="{{ route('google.redirect') }}" style="color: white">Signin with
                                                        Google</a></span></button>
                                        </div>
                                    </div>
                                    <form class="l-f-o__form" action="{{ route('register.function') }}" method="POST">
                                        @csrf
                                        @method('post')
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="reg-fname">NAME *</label>
                                            <input class="input-text input-text--primary-style" type="text"
                                                name="name" id="reg-fname" placeholder="First Name">
                                            @error('name')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="gl-inline">
                                        <div class="u-s-m-b-30">

                                            <!--====== Date of Birth Select-Box ======-->

                                            <span class="gl-label">BIRTHDAY</span>
                                            <div class="gl-dob"><select class="select-box select-box--primary-style">
                                                    <option selected>Month</option>
                                                    <option value="male">January</option>
                                                    <option value="male">February</option>
                                                    <option value="male">March</option>
                                                    <option value="male">April</option>
                                                </select><select class="select-box select-box--primary-style">
                                                    <option selected>Day</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                </select><select class="select-box select-box--primary-style">
                                                    <option selected>Year</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                </select></div>
                                            <!--====== End - Date of Birth Select-Box ======-->
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="gender">GENDER</label><select class="select-box select-box--primary-style u-w-100" id="gender">
                                                <option selected>Select</option>
                                                <option value="male">Male</option>
                                                <option value="male">Female</option>
                                            </select></div>
                                    </div> --}}
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-email">E-MAIL *</label>

                                            <input class="input-text input-text--primary-style" type="email"
                                                name="email" id="reg-email" placeholder="Enter E-mail">
                                            @error('email')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-password">PASSWORD *</label>

                                            <input class="input-text input-text--primary-style" type="password"
                                                name="password" id="reg-password" placeholder="Enter Password">
                                                @error('password')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="reg-password">REPEAT PASSWORD *</label>

                                            <input class="input-text input-text--primary-style" type="password"
                                                name="password_confirmation" id="reg-password" placeholder="Enter Password">
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">CREATE</button>
                                        </div>

                                        <a class="gl-link" href="#">Return to Store</a>
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
    Register
@endsection
