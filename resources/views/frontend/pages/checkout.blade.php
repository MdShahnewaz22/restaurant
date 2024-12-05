@extends('frontend.layouts.main')
@section('main-content')
@include('frontend.layouts.menu')

<body class="bg-color2">


    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="mb-5 offcanvas__top d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{asset('assets/frontend/assets/img/logo/logo.svg')}}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-lg-block">
                        This involves interactions between a business and its customers. It's about meeting customers'
                        needs and resolving their problems. Effective customer service is crucial.
                    </p>
                    <div class="offcanvas-gallery-area d-none d-xl-block">
                        <div class="offcanvas-gallery-items">
                            <a href="assets/frontend/assets/img/header/01.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/01.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/02.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/02.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/03.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/03.jpg')}}" alt="gallery-img">
                            </a>
                        </div>
                        <div class="offcanvas-gallery-items">
                            <a href="assets/frontend/assets/img/header/04.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/04.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/05.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/')}}assets/img/header/05.jpg" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/06.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/')}}assets/img/header/06.jpg" alt="gallery-img">
                            </a>
                        </div>
                    </div>
                    <div class="mb-3 mobile-menu fix"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+013-003-003-9993"><span
                                            class="mailto:info@enofik.com">info@fresheat.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="mt-4 header-button">
                            <a href="shop.html" class="theme-btn">
                                <span class="button-content-wrapper d-flex align-items-center justify-content-center">
                                    <span class="button-icon"><i
                                            class="text-white bg-transparent fa-sharp fa-regular fa-cart-shopping me-2"></i></span>
                                    <span class="button-text">ORDER NOW</span>
                                </span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>




    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Breadcumb Section   S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Checkout</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Checkoutt</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="th-checkout-wrapper section-padding fix">
        <div class="container">
            <div class="woocommerce-form-login-toggle">
                <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="woocommerce-form-login">
                        <div class="form-group">
                            <label>Username or email *</label>
                            <input type="text" class="form-control" placeholder="Username or email">
                        </div>
                        <div class="form-group">
                            <label>Password *</label>
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="remembermylogin">
                                <label for="remembermylogin">Remember Me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="th-btn">Login</button>
                            <p class="mt-2 mb-0 fs-xs"><a class="text-reset" href="#">Lost your password?</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="woocommerce-form-coupon-toggle">
                <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your
                        code</a> </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="woocommerce-form-coupon">
                        <div class="form-group">
                            <label>Coupon code</label>
                            <input type="text" class="form-control" placeholder="Write your coupon code">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="th-btn">Apply coupon</button>
                        </div>
                    </form>
                </div>
            </div>
            <form action="#" class="mt-5 woocommerce-checkout">
                <div class="row ">
                    <div class="col-lg-6">
                        <h2 class="h4">Billing Details</h2>
                        <div class="row">
                            <div class="col-12 form-group">
                                <select class="mb-3 single-select w-100">
                                    <option>United Kingdom (UK)</option>
                                    <option>United State (US)</option>
                                    <option>Equatorial Guinea (GQ)</option>
                                    <option>Australia (AU)</option>
                                    <option>Germany (DE)</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Your Company Name">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Street Address">
                                <input type="text" class="form-control"
                                    placeholder="Apartment, suite, unit etc. (optional)">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Town / City">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Postcode / Zip">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <input type="text" class="form-control" placeholder="Phone number">
                            </div>
                            <div class="col-12 form-group">
                                <input type="checkbox" id="accountNewCreate">
                                <label for="accountNewCreate">Create An Account?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p id="ship-to-different-address">
                            <input id="ship-to-different-address-checkbox" type="checkbox"
                                name="ship_to_different_address" value="1" checked="">
                            <label for="ship-to-different-address-checkbox">
                                Ship to a different address?
                                <span class="checkmark"></span>
                            </label>
                        </p>
                        <div class="mt-1 shipping_address">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <select class="mb-3 single-select w-100">
                                        <option>United Kingdom (UK)</option>
                                        <option>United State (US)</option>
                                        <option>Equatorial Guinea (GQ)</option>
                                        <option>Australia (AU)</option>
                                        <option>Germany (DE)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Your Company Name">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Street Address">
                                    <input type="text" class="form-control"
                                        placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Town / City">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="Postcode / Zip">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <input type="text" class="form-control" placeholder="Phone number">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <textarea cols="20" rows="5" class="form-control"
                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </div>
                    </div>
                </div>
            </form>
            <h4 class="mt-4 pt-lg-2">Your Order</h4>
            <form action="#" class="woocommerce-cart-form">
                <table class="mb-20 cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-colname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product">
                                <a class="cartimage" href="shop-details.html"><img width="91" height="91"
                                        src="{{asset('assets/frontend/assets/img/dishes/dishes4_1.png')}}" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cartname" href="shop-details.html">Brick Oven Pepperoni</a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span>281</bdi></span>
                            </td>
                            <td data-title="Quantity">
                                <strong class="product-quantity">01</strong>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span>281</bdi></span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot class="checkout-ordertable">
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal" colspan="4"><span
                                    class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></td>
                        </tr>
                        <tr class="woocommerce-shipping-totals shipping">
                            <th>Shipping</th>
                            <td data-title="Shipping" colspan="4"> Enter your address to view shipping options.
                            </td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total" colspan="4"><strong><span
                                        class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
            <div class="mt-lg-3 mb-30">
                <div class="woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                        <li class="wc_payment_method payment_method_bacs">
                            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method"
                                value="bacs" checked="checked">
                            <label for="payment_method_bacs">Direct bank transfer</label>
                            <div class="payment_box payment_method_bacs">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order will not be shipped until the funds have cleared in
                                    our account.
                                </p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cheque">
                            <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method"
                                value="cheque">
                            <label for="payment_method_cheque">Cheque Payment</label>
                            <div class="payment_box payment_method_cheque">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cod">
                            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method">
                            <label for="payment_method_cod">Credit Cart <img src="{{asset('assets/frontend/assets/img/shop/credit_card.jpg')}}"
                                    alt="image"></label>
                            <div class="payment_box payment_method_cod">
                                <p>Pay with cash upon delivery.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_paypal">
                            <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method"
                                value="paypal">
                            <label for="payment_method_paypal">Paypal<img src="{{asset('assets/frontend/assets/img/shop/paypal.jpg')}}"
                                    alt="PayPal acceptance mark"></label>
                            <div class="payment_box payment_method_paypal">
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="form-row place-order">
                        <button type="submit" class="theme-btn">Place order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


@endsection
