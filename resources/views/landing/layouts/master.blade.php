<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>AFRICA IT INNOVATION - @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/ludus/images/logo/africa-it-logo.jpeg') }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/ludus/css/vendor.css') }} ">
    @yield('styles')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('assets/ludus/css/utility.css') }} ">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('assets/ludus/css/app.css') }} ">
</head>

<body class="config" id="js-scrollspy-trigger">
    <div class="preloader is-active">
        <div class="preloader__wrap">
            <img class="preloader__img" src="{{ asset('assets/ludus/images/preloader.png') }} " alt="">
        </div>
    </div>

    <!--====== Main App ======-->
    <div id="app">
        @include('landing.layouts.navbar')

        @yield('content')

        @include('landing.layouts.footer')

        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick-look">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">
                                            <a href="/">Home</a>
                                        </li>
                                        <li class="has-separator">
                                            <a href="#" id="product_categorie_model"></a>
                                        </li>
                                        <li class="is-marked">

                                            <a href="#" id="product_sub_categorie_model"></a>
                                        </li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="js-product-detail-modal">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg"
                                                    alt="">
                                            </div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name" id="product_name_model">Nikon Camera 4k Lens
                                            Zoom
                                            Pro</span>
                                    </div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price" id="product_price_model"></span>

                                            <del class="pd-detail__del" id="product_old_price_model"></del>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__preview-desc" id="product_description_model"></span>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="#">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i
                                                    class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="#">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i
                                                        class="fab fa-whatsapp"></i></a>
                                            </li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form class="pd-detail__form">
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">
                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">
                                                        <span class="input-counter__minus fas fa-minus"></span>
                                                        <input
                                                            class="input-counter__text input-counter--text-primary-style"
                                                            type="text" value="1" data-min="1"
                                                            data-max="1000">
                                                        <span class="input-counter__plus fas fa-plus"></span>
                                                    </div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-brand-b-2" type="submit">Add to
                                                        Cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span>
                                            </li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span>
                                            </li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span>
                                    </div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="images/product/electronic/product1.jpg"
                                            alt="">
                                    </div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow"
                                            data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW
                                            CART</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO
                                            CHECKOUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->


        <!--====== Newsletter Subscribe Modal ======-->
        {{-- <div class="modal fade new-l" id="newsletter-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn new-l__dismiss fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row u-s-m-x-0">
                            <div class="col-lg-6 new-l__col-1 u-s-p-x-0">

                                <a class="new-l__img-wrap u-d-block" href="#">

                                    <img class="u-img-fluid u-d-block"
                                        src="{{ asset('assets/ludus/images/newsletter/newsletter.jpg') }} "
                                        alt=""></a>
                            </div>
                            <div class="col-lg-6 new-l__col-2">
                                <div class="new-l__section u-s-m-t-30">
                                    <div class="u-s-m-b-8 new-l--center">
                                        <h3 class="new-l__h3">Newsletter</h3>
                                    </div>
                                    <div class="u-s-m-b-30 new-l--center">
                                        <p class="new-l__p1">Sign up for emails to get the scoop on new arrivals,
                                            special sales and more.</p>
                                    </div>
                                    <form class="new-l__form">
                                        <div class="u-s-m-b-15">

                                            <input class="news-l__input" type="text" placeholder="E-mail Address">
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Sign up!</button>
                                        </div>
                                    </form>
                                    <div class="u-s-m-b-15 new-l--center">
                                        <p class="new-l__p2">By Signing up, you agree to receive Reshop
                                            offers,<br />promotions and other commercial messages. You may unsubscribe
                                            at any time.</p>
                                    </div>
                                    <div class="u-s-m-b-15 new-l--center">

                                        <a class="new-l__link" data-dismiss="modal">No Thanks</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--====== End - Newsletter Subscribe Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')

        function GetProduct(id) {
            $.ajax({
                type: 'GET',
                url: "{{ route('GetProduct') }}",
                data: {
                    id: id
                },
                success: function(response) {
                    product = response
                    document.getElementById('product_name_model').innerHTML = response.title
                    document.getElementById('product_description_model').innerHTML = response.description
                    document.getElementById('product_old_price_model').innerHTML = response.old_price
                    document.getElementById('product_price_model').innerHTML = response.price
                    document.getElementById('product_sub_categorie_model').innerHTML = response.sub_categorie
                        .name
                    document.getElementById('product_categorie_model').innerHTML = response.sub_categorie
                        .categorie.name
                    console.log(product);
                },
                error: function() {
                    alert('An error occurred .');
                }
            })
        }

        function AddToCart(id) {
            let qty_element = document.getElementById('qty' + id)
            qty = 1;
            if (qty_element !== null) {
                qty = qty_element.value ?? 1;
            }
            $.ajax({
                type: 'GET',
                url: "{{ route('cart.addProdustToCart') }}", // Enclose the URL in quotes
                data: {
                    id: id,
                    qty: qty // Include the quantity in the data object
                }, // Add a comma here
                success: function(response) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    });
                    Toast.fire({
                        icon: 'success',
                        title: 'product added successfully'
                    });
                    // Make sure 'MyFunctions' is defined and serves your intended purpose
                    MyFunctions();
                },
                error: function() {
                    alert('An error occurred.');
                }
            });
        }


        function ToogleFavorites(product_id, user_id) {
            $.ajax({
                type: 'POST',
                url: "{{ route('AddToFavorite') }}",
                data: {
                    user_id: user_id,
                    product_id: product_id
                },
                success: function(response) {
                    title = response.success
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: true,
                        timer: 4000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'success',
                        title: title
                    })
                    MyFunctions();
                },
                error: function() {
                    alert('An error occurred .');
                }
            })
        }

        function getcartCount() {
            $.ajax({
                type: 'GET',
                url: "{{ route('cart.getCartCount') }}",
                success: function(response) {
                    document.getElementById('CartCount').innerHTML = response.count
                    document.getElementById('total_content').innerHTML = response.total + " DH"
                    document.getElementById('cart_total').innerHTML = response.total + " DH"
                    document.getElementById('cart_subtotal').innerHTML = response.subtotal + " DH"
                },
                error: function() {
                    console.log('An error occurred .');
                }
            })
        }

        function getCartContent() {
            total = 0;
            cartNav = "";
            cart = "";
            $.ajax({
                type: 'GET',
                url: "{{ route('cart.getCartContent') }}",
                success: function(response) {
                    if (response.length > 0) {
                        response.forEach(function(item) {
                            total += item.price * item.quantity
                            cartNav +=
                                `
                                <div class="card-mini-product">
                                    <div class="mini-product">
                                        <div class="mini-product__image-wrapper">
                                            <a class="mini-product__link" href="#">
                                                <img class="u-img-fluid" src="` + item.image + `" alt=""></a>
                                        </div>
                                        <div class="mini-product__info-wrapper">
                                            <span class="mini-product__category">
                                                <a href="#">` + item.title + `</a>
                                            </span>
                                            <span class="mini-product__name">
                                                <a href="#">` + item.title + `</a>
                                            </span>
                                            <span class="mini-product__quantity">` + item.quantity + ` x</span>
                                            <span class="mini-product__price">$` + item.price +
                                `</span>
                                        </div>
                                    </div>
                                    <a class="mini-product__delete-link far fa-trash-alt" onclick="DeleteProductFromCard(` +
                                item.id + `)"></a>
                                </div>
                                `
                            cart +=
                                `
                            <tr>
                                                    <td>
                                                        <div class="table-p__box">
                                                            <div class="table-p__img-wrap">
                                                                <img class="u-img-fluid" src="` + item.image + `"
                                                                    alt="` + item.image + `">
                                                            </div>
                                                            <div class="table-p__info">
                                                                <span class="table-p__name">
                                                                    <a href="#">` + item.title + `</a>
                                                                </span>
                                                                {{-- <span class="table-p__category">
                                                                    <a href="#">Electronics</a>
                                                                </span>
                                                                <ul class="table-p__variant-list">
                                                                    <li>
                                                                        <span>Size: 22</span>
                                                                    </li>
                                                                    <li>
                                                                        <span>Color: Red</span>
                                                                    </li>
                                                                </ul> --}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="table-p__price">` + item.price +
                                `</span>
                                                    </td>
                                                    <td>
                                                        <div class="table-p__input-counter-wrap">
                                                            <div class="input-counter">
                                                                <span class="input-counter__minus fas fa-minus"></span>
                                                                <input
                                                                    class="input-counter__text input-counter--text-primary-style" id="item` +
                                item.id + `"
                                                                    type="text" value="` + item.quantity +
                                `" onchange=edit(` + item.id + `)
                                                                    data-min="1" data-max="1000">
                                                                <span class="input-counter__plus fas fa-plus"></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="table-p__del-wrap">
                                                            <a class="far fa-trash-alt table-p__delete-link"
                                                                onclick="DeleteProductFromCard(` + item.id + `)"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                            `
                        });
                        document.getElementById('cart_parent').innerHTML = cartNav;
                        document.getElementById('cart_body').innerHTML = cart;
                        document.getElementById('total_content').innerHTML = "$" + total;
                    } else {
                        console.log("response 0");
                    }
                },
                error: function() {
                    console.log('An error occurred .');
                }
            })
        }

        function DeleteProductFromCard(id) {
            $.ajax({
                type: 'DELETE',
                url: "{{ route('cart.deleteProduct') }}",
                data: {
                    id: id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    MyFunctions();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'success',
                        title: 'product deleted successfully'
                    })
                    if (response === "empty") {
                        location.reload();
                    }
                },
                error: function() {
                    console.log('An error occurred.');
                }
            });
        }

        function edit(id) {
            var quantity = document.getElementById("item" + id).value;
            if (quantity <= 0) {
                quantity = 1; // Fix the assignment operator
            }
            $.ajax({
                type: 'PUT',
                url: "{{ route('cart.updateCart') }}",
                data: {
                    id: id,
                    quantity: quantity
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    MyFunctions();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    });
                    Toast.fire({
                        icon: 'success',
                        title: 'product updated successfully'
                    });
                },
                error: function() {
                    console.log('An error occurred.');
                }
            });
        }


        function MyFunctions() {
            getCartContent();
            getcartCount()
        }


        MyFunctions()
    </script>

    @yield('script')
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--====== Vendor Js ======-->
    <script src="{{ asset('assets/ludus/js/vendor.js') }} "></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{ asset('assets/ludus/js/jquery.shopnav.js') }} "></script>

    <!--====== App ======-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/ludus/js/app.js') }} "></script>
</body>

</html>
