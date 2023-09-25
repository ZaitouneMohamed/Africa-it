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
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Add new Address</h1>
                                        <span class="dash__text u-s-m-b-30">We need an address where we could deliver products.</span>
                                        <form class="dash-address-manipulation" action="{{route('user.profile.adresse.store')}}" method="POST">
                                            @csrf
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">
                                                    <label class="gl-label" for="address-fname">Name *</label>
                                                    <input class="input-text input-text--primary-style" type="text" name="name" id="address-fname" placeholder="Name">
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <!--====== Select Box ======-->
                                                    <label class="gl-label" for="address-country">Type *</label>
                                                    <select class="select-box select-box--primary-style" name="type" id="address-country">
                                                        <option selected>Shoose Type</option>
                                                        <option value="home">Home</option>
                                                        <option value="office">Office</option>
                                                    </select>
                                                    <!--====== End - Select Box ======-->
                                                </div>
                                            </div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">
                                                    <label class="gl-label" for="address-fname">Code Postal *</label>
                                                    <input class="input-text input-text--primary-style" type="text" name="postel_code" id="address-fname" placeholder="Code Postal">
                                                </div>
                                                <div class="u-s-m-b-30">
                                                    <label class="gl-label" for="address-lname">phone number *</label>
                                                    <input class="input-text input-text--primary-style" type="text" name="phone_number" id="address-lname" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">
                                                    <!--====== Select Box ======-->
                                                    <label class="gl-label" for="address-country">City *</label>
                                                    <select class="select-box select-box--primary-style" name="city">
                                                        <option selected>shoose city</option>
                                                        <option value="Agadir">Agadir</option>
                                                        <option value="Al Hoceima">Al Hoceima</option>
                                                        <option value="Azilal">Azilal</option>
                                                        <option value="Beni Mellal">Beni Mellal</option>
                                                        <option value="Ben Slimane">Ben Slimane</option>
                                                        <option value="Boulemane">Boulemane</option>
                                                        <option value="Casablanca">Casablanca</option>
                                                        <option value="Chaouen">Chaouen</option>
                                                        <option value="El Jadida">El Jadida</option>
                                                        <option value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
                                                        <option value="Er Rachidia">Er Rachidia</option>
                                                        <option value="Essaouira">Essaouira</option>
                                                        <option value="Fes">Fes</option>
                                                        <option value="Figuig">Figuig</option>
                                                        <option value="Guelmim">Guelmim</option>
                                                        <option value="Ifrane">Ifrane</option>
                                                        <option value="Kenitra">Kenitra</option>
                                                        <option value="Khemisset">Khemisset</option>
                                                        <option value="Khenifra">Khenifra</option>
                                                        <option value="Khouribga">Khouribga</option>
                                                        <option value="Laayoune">Laayoune</option>
                                                        <option value="Larache">Larache</option>
                                                        <option value="Marrakech">Marrakech</option>
                                                        <option value="Meknes">Meknes</option>
                                                        <option value="Nador">Nador</option>
                                                        <option value="Ouarzazate">Ouarzazate</option>
                                                        <option value="Oujda">Oujda</option>
                                                        <option value="Rabat-Sale">Rabat-Sale</option>
                                                        <option value="Safi">Safi</option>
                                                        <option value="Settat">Settat</option>
                                                        <option value="Sidi Kacem">Sidi Kacem</option>
                                                        <option value="Tangier">Tangier</option>
                                                        <option value="Tan-Tan">Tan-Tan</option>
                                                        <option value="Taounate">Taounate</option>
                                                        <option value="Taroudannt">Taroudannt</option>
                                                        <option value="Tata">Tata</option>
                                                        <option value="Taza">Taza</option>
                                                        <option value="Tetouan">Tetouan</option>
                                                        <option value="Tiznit">Tiznit</option>
                                                    </select>
                                                    <!--====== End - Select Box ======-->
                                                </div>
                                            </div>
                                            <div class="u-s-m-b-30">
                                                <label class="gl-label" for="address-street">ADDRESS *</label>
                                                <textarea name="adresse" id="" cols="30" rows="10"></textarea>
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
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    </div>
    <!--====== End - App Content ======-->
@endsection
