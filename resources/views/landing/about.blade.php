@extends('landing.layouts.master')

@section('content')
    <!--====== Main App ======-->

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

                                    <a href="about.html">About</a>
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
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about">
                                <div class="about__container">
                                    <div class="about__info">
                                        <h2 class="about__h2">Welcome to Africa-It Store!</h2>
                                        <div class="about__p-wrap">
                                            <p class="about__p">
                                                Nous sommes tous conscients que l’innovation est un vecteur de croissance
                                                pour l’entreprise, nous sommes inscrits dans une démarche de créativité et
                                                de recherche de méthodes out-of-the-box. Une meilleure collaboration se base
                                                l’innovation qui génère les énergies autour de l’avenir afin de concrétiser
                                                le futur.
                                                L’innovation est également un vecteur riche de collaboration entre une
                                                entité et ses clients, au travers, notamment de la co-construction ou de la
                                                mise en place de principes de collaboration agiles.
                                            </p>
                                        </div>

                                        <a class="about__link btn--e-secondary" href="{{route('home')}}" target="_blank">Shop
                                            Now</a>
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


        <!--====== Section 3 ======-->
        {{-- <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">Our Team Members</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                            <div class="team-member u-h-100">
                                <div class="team-member__wrap">
                                    <div class="aspect aspect--bg-grey-fb aspect--square">

                                        <img class="aspect__img team-member__img" src="images/about/member-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="team-member__social-wrap">
                                        <ul class="team-member__social-list">
                                            <li>

                                                <a class="s-tw--bgcolor-hover" href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-fb--bgcolor-hover" href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-insta--bgcolor-hover" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-linked--bgcolor-hover" href="#"><i
                                                        class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member__info">

                                    <span class="team-member__name">Ahnan Bashri</span>

                                    <span class="team-member__job-title">Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                            <div class="team-member u-h-100">
                                <div class="team-member__wrap">
                                    <div class="aspect aspect--bg-grey-fb aspect--square">

                                        <img class="aspect__img team-member__img" src="images/about/member-2.jpg"
                                            alt="">
                                    </div>
                                    <div class="team-member__social-wrap">
                                        <ul class="team-member__social-list">
                                            <li>

                                                <a class="s-tw--bgcolor-hover" href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-fb--bgcolor-hover" href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-insta--bgcolor-hover" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-linked--bgcolor-hover" href="#"><i
                                                        class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member__info">

                                    <span class="team-member__name">Joseph Min</span>

                                    <span class="team-member__job-title">UI, Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                            <div class="team-member u-h-100">
                                <div class="team-member__wrap">
                                    <div class="aspect aspect--bg-grey-fb aspect--square">

                                        <img class="aspect__img team-member__img" src="images/about/member-3.jpg"
                                            alt="">
                                    </div>
                                    <div class="team-member__social-wrap">
                                        <ul class="team-member__social-list">
                                            <li>

                                                <a class="s-tw--bgcolor-hover" href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-fb--bgcolor-hover" href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-insta--bgcolor-hover" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-linked--bgcolor-hover" href="#"><i
                                                        class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member__info">

                                    <span class="team-member__name">Mike Pipe</span>

                                    <span class="team-member__job-title">App, Architect</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                            <div class="team-member u-h-100">
                                <div class="team-member__wrap">
                                    <div class="aspect aspect--bg-grey-fb aspect--square">

                                        <img class="aspect__img team-member__img" src="images/about/member-4.jpg"
                                            alt="">
                                    </div>
                                    <div class="team-member__social-wrap">
                                        <ul class="team-member__social-list">
                                            <li>

                                                <a class="s-tw--bgcolor-hover" href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-fb--bgcolor-hover" href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-insta--bgcolor-hover" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-linked--bgcolor-hover" href="#"><i
                                                        class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-member__info">

                                    <span class="team-member__name">Klronr Jim</span>

                                    <span class="team-member__job-title">Team Leader</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div> --}}
        <!--====== End - Section 3 ======-->


        @include("pages.FeedBack")
    </div>
    <!--====== End - App Content ======-->
    <!--====== End - Main App ======-->
@endsection
