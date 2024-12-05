@extends('frontend.layouts.main')
@section('main-content')
@include('frontend.layouts.menu')

<body class="bg-color2">

    <!-- Preloader Start -->
    {{-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="F" class="letters-loading">
                    F
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="H" class="letters-loading">
                    H
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> --}}

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
                            <a href="assets/img/header/01.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/01.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/img/header/02.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/02.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/img/header/03.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/03.jpg')}}" alt="gallery-img">
                            </a>
                        </div>
                        <div class="offcanvas-gallery-items">
                            <a href="assets/img/header/04.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/04.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/img/header/05.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/05.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/img/header/06.jpg" class="offcanvas-image img-popup">
                                <img src="{{asset('assets/frontend/assets/img/header/06.jpg')}}" alt="gallery-img">
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
                            <h1 class="breadcumb-title">About Us 01</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">About Us 01</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offer Section   S T A R T -->
    <section class="mt-5 offer-section fix bg-color2">
        <div class="offer-wrapper">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.2s"
                            style="background-image: url(assets/frontend/assets/img/bg/offerBG2_1.jpg);">
                            <div class="offer-content">
                                <h6 class="text-white">start price $25</h6>
                                <h3>TODAY SPACIAL FOOD</h3>
                                <p class="text-white">limits Time Offer</p>
                                <a href="menu.html" class="theme-btn style5">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="{{asset('assets/frontend/assets/img/offer/offerThumb1_2.png')}}" alt="thumb">
                                <div class="shape float-bob-x"><img src="{{asset('assets/frontend/assets/img/shape/offerShape1_4.png')}}"
                                        alt="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.5s"
                            style="background-image: url(assets/frontend/assets/img/bg/offerBG2_2.jpg);">
                            <div class="offer-content">
                                <h6>start price $28</h6>
                                <h3>special chicken roll</h3>
                                <p>limits Time Offer</p>
                                <a href="menu.html" class="theme-btn style4">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="{{asset('assets/frontend/assets/img/offer/offerThumb1_3.png')}}" alt="thumb">
                                <div class="shape float-bob-x"><img src="{{asset('assets/frontend/assets/img/shape/offerShape1_4.png')}}"
                                        alt="shape"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.7s"
                            style="background-image: url(assets/frontend/assets/img/bg/offerBG2_3.jpg);">
                            <div class="offer-content">
                                <h6 class="text-white">start price $55</h6>
                                <h3>SPICY FRIED CHICKEN</h3>
                                <p class="text-white">limits Time Offer</p>
                                <a href="menu.html" class="theme-btn style4">
                                    ORDER NOW <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="offer-thumb">
                                <img class="thumbImg" src="{{asset('assets/frontend/assets/img/offer/offerThumb1_1.png')}}" alt="thumb">
                                <div class="shape float-bob-x"><img src="{{asset('assets/frontend/assets/img/shape/offerShape1_4.png')}}"
                                        alt="shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section   S T A R T -->
    <section class="about-us-section fix section-padding">
        <div class="about-wrapper style1 style-padding">
            <div class="shape1 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/aboutShape1_1.png')}}" alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/aboutShape1_2.png')}}" alt="shape"></div>
            <div class="shape3 d-none d-xxl-block"><img class="cir36" src="{{asset('assets/frontend/assets/img/shape/aboutShape1_3.png')}}"
                    alt="shape"></div>
            <div class="shape4 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/aboutShape1_4.png')}}" alt="shape"></div>
            <div class="shape5 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/aboutShape1_5.png')}}" alt="shape"></div>
            <div class="shape6 d-none d-xxl-block"><img class="cir36" src="{{asset('assets/frontend/assets/img/shape/aboutShape1_6.png')}}"
                    alt="shape"></div>
            <div class="container">
                <div class="about-us section-padding">
                    <div class="row">
                        <div class="col-12">
                            <div class="title-area">
                                <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                                    <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">About US<img
                                        class="ms-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                                </div>
                                <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                                    Variety of flavours from american cuisine
                                </h2>
                                <div class="text wow fadeInUp" data-wow-delay="0.8s">It is a long established fact that
                                    a reader will be distracted the readable content of a page when looking at layout
                                    the point established fact that</div>
                                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                                    <a class="theme-btn" href="menu.html">ORDER NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="marquee-wrapper style-1 text-slider section-padding ">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style1">
                        <span class="text-slider"></span><span class="text-slider text-style">chicken pizza</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN PIZZA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">chicken pizza</span>
                        <span class="text-slider"></span><span class="text-slider text-style">GRILLED CHICKEN</span>
                        <span class="text-slider"></span><span class="text-slider text-style">BURGER</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN PIZZA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">FRESH PASTA</span>
                        <span class="text-slider"></span><span class="text-slider text-style">ITALIANO FRENCH FRY</span>
                        <span class="text-slider"></span><span class="text-slider text-style">CHICKEN FRY</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Cta section  S T A R T -->
    <section class="cta-section fix">
        <div class="cta-wrapper style1 section-padding">
            <div class="shape1 float-bob-x d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape1_1.png')}}" alt="shape">
            </div>
            <div class="shape2 float-bob-y d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape1_2.png')}}" alt="shape">
            </div>
            <div class="shape3 float-bob-y d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape1_3.png')}}" alt="shape">
            </div>
            <div class="container">
                <div class="cta-wrap style1">
                    <div class="row">
                        <div class="order-2 col-xl-6 order-xl-1">
                            <div class="cta-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.5s">WELCOME FRESHEAT</h6>
                                <h3 class="wow fadeInUp" data-wow-delay="0.7s">TODAY SPACIAL FOOD</h3>
                                <p class="wow fadeInUp" data-wow-delay="0.8s">limits Time Offer</p>
                                <a class="theme-btn wow fadeInUp" data-wow-delay="0.9s" href="menu.html">ORDER NOW <i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="order-1 col-xl-6 order-xl-2">
                            <div class="cta-thumb">
                                <img class="img-fluid float-bob-x" src="{{asset('assets/frontend/assets/img/cta/ctaThumb1_1.png')}}" alt="thumb">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Chefe Section    S T A R T -->
    <section class="chefe-section fix section-padding">
        <div class="chefe-wrapper style1">
            <div class="shape1 d-none d-xxl-block"><img class="float-bob-y" src="{{asset('assets/frontend/assets/img/shape/chefeShape2_1.png')}}"
                    alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img class="float-bob-x" src="{{asset('assets/frontend/assets/img/shape/chefeShape2_2.png')}}"
                    alt="shape"></div>
            <div class="container">
                <div class="title-area">
                    <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                        <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">OUR CHEFE<img class="ms-1"
                            src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                        Meet Our Expert Chefe
                    </h2>
                </div>
                <div class="pb-5 chefe-card-wrap style1">
                    <div class="row gy-5 gx-80">
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb2_1.jpg')}}" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Devon Lane</h3>
                                    </a>
                                    <p>President of Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb2_2.jpg')}}" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>

                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Ralph Edwards</h3>
                                    </a>
                                    <p>Chefe Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="chefe-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb2_3.jpg')}}" alt="thumb">
                                </div>

                                <div class="icon">
                                    <span>Share</span>
                                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>

                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Marvin McKinney</h3>
                                    </a>
                                    <p>Main Chefe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Cta section  S T A R T -->
    <section class="cta-section fix">
        <div class="cta-wrapper style3">
            <div class="container">
                <div class="cta-wrap section-padding pt-xl-0 pb-xl-0 style3">
                    <div class="shape1 float-bob-x d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape3_1.png')}}"
                            alt="shape"></div>
                    <div class="shape2 float-bob-y d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape3_2.png')}}"
                            alt="shape"></div>
                    <div class="shape3 float-bob-y d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape3_3.png')}}"
                            alt="shape"></div>
                    <div class="shape4 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape3_4.png')}}" alt="shape">
                    </div>
                    <div class="shape5 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape3_5.png')}}" alt="shape">
                    </div>
                    <div class="shape6 d-none d-xxl-block"><img class="cir36" src="{{asset('assets/frontend/assets/img/shape/ctaShape3_6.png')}}"
                            alt="shape"></div>
                    <div class="shape7 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/ctaShape3_7.png')}}" alt="shape">
                    </div>
                    <div class="row g-5">
                        <div class="order-2 col-xl-6 d-flex align-items-center justify-content-center order-xl-1">
                            <div class="cta-content">
                                <h6 class="text-white wow fadeInUp" data-wow-delay="0.5s"><img class="me-1"
                                        src="{{asset('assets/frontend/assets/img/icon/titleIconWhite.svg')}}" alt="icon">DOWNLOAD APP<img
                                        class="ms-1" src="{{asset('assets/frontend/assets/img/icon/titleIconWhite.svg')}}" alt="icon"></h6>
                                <h3 class="wow fadeInUp" data-wow-delay="0.7s">Download food app Order today!</h3>
                                <div class="gap-2 btn-wrapper d-md-flex align-items-center">
                                    <div class="btns">
                                        <a class="apple-btn wow fadeInUp" data-wow-delay="0.9s"
                                            href="https://www.apple.com/store">
                                            <div class="gap-2 d-flex align-items-center">
                                                <img src="{{asset('assets/frontend/assets/img/icon/appleStore.svg')}}" alt="icon">
                                                <div>
                                                    <span>Get it on</span>
                                                    <h6>App store</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="btns">
                                        <a class="google-btn wow fadeInUp" data-wow-delay="0.9s"
                                            href="https://play.google.com/store/">
                                            <div class="gap-2 d-flex align-items-center">
                                                <img src="{{asset('assets/frontend/assets/img/icon/playStore.svg')}}" alt="icon">
                                                <div>
                                                    <span>Get it on</span>
                                                    <h6>Google play</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div
                            class="order-1 col-xl-6 d-flex align-items-center justify-content-center justify-content-xl-start order-xl-2">
                            <div class="cta-thumb">
                                <img class="img-fluid float-bob-x" src="{{asset('assets/frontend/assets/img/cta/ctaThumb3_1.png')}}" alt="thumb">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial section  S T A R T -->
    <section class="testimonial-section fix section-padding">
        <div class="testimonial-wrapper style2">
            <div class="container">

                <div class="testimonial-wrap style2">
                    <div class="row gx-80 gy-5">
                        <div class="order-2 col-xl-7 order-xl-1">
                            <div class="title-area">
                                <div class="sub-title text-start wow fadeInUp" data-wow-delay="0.5s">
                                    <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">TESTIMONIALS<img
                                        class="ms-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                                </div>
                                <h2 class="title text-start wow fadeInUp" data-wow-delay="0.7s">
                                    what have lots of happy customer feedback
                                </h2>
                            </div>

                            <div class="slider-area">
                                <div class="swiper testimonialSliderTwo">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-card style2">
                                                <div class="quote"><img src="{{asset('assets/frontend/assets/img/icon/quote.svg')}}" alt="icon">
                                                </div>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                    has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard McClintock !</p>
                                                <div class="profile-box">
                                                    <div class="one"><img
                                                            src="{{asset('assets/frontend/assets/img/testimonial/testimonialProfile2_1.png')}}"
                                                            alt="thumb"></div>
                                                    <div class="two"><img
                                                            src="{{asset('assets/frontend/assets/img/testimonial/testimonialProfile2_2.png')}}"
                                                            alt="thumb"></div>
                                                    <div class="three"><img
                                                            src="{{asset('assets/frontend/assets/img/testimonial/testimonialProfile2_3.png')}}"
                                                            alt="thumb"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-card style2">
                                                <div class="quote"><img src="{{asset('assets/frontend/assets/img/icon/quote.svg')}}" alt="icon">
                                                </div>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                    has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard McClintock !</p>
                                                <div class="profile-box">
                                                    <div class="one"><img
                                                            src="{{asset('assets/frontend/assets/img/testimonial/testimonialProfile2_1.png')}}"
                                                            alt="thumb"></div>
                                                    <div class="two"><img
                                                            src="{{asset('assets/frontend/assets/img/testimonial/testimonialProfile2_2.png')}}"
                                                            alt="thumb"></div>
                                                    <div class="three"><img
                                                            src="{{asset('assets/frontend/assets/img/testimonial/testimonialProfile2_3.png')}}"
                                                            alt="thumb"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-wrap">
                                        <div class="arrow-prev"><i class="fa-regular fa-arrow-left"></i></div>
                                        <div class="arrow-next"><i class="fa-regular fa-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="order-1 col-xl-5 order-xl-2">
                            <div class="testimonial-thumb">
                                <img src="{{asset('assets/frontend/assets/img/testimonial/testimonialThumb2_1.png')}}" alt="thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Gallery Section    S T A R T -->
    <div class="gallery-section">
        <div class="gallery-wrapper style1">
            <div class="container">
                <div class="slider-area">
                    <div class="swiper gallerySliderOne">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="menu.html">
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_5.jpg')}}" alt="thumb">
                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/camera.svg')}}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="menu.html">
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_1.jpg')}}" alt="thumb">
                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/camera.svg')}}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="menu.html">
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_2.jpg')}}" alt="thumb">
                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/camera.svg')}}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="menu.html">
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_3.jpg')}}" alt="thumb">
                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/camera.svg')}}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="menu.html">
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_4.jpg')}}" alt="thumb">
                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/camera.svg')}}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="menu.html">
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_5.jpg')}}" alt="thumb">
                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/camera.svg')}}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="menu.html">
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_1.jpg')}}" alt="thumb">
                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/camera.svg')}}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="gallery-thumb">
                                    <a href="menu.html">
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_2.jpg')}}" alt="thumb">
                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/camera.svg')}}" alt="icon"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section    S T A R T -->
    {{-- <footer class="footer-section bg-title fix">
        <div class="footer-widgets-wrapper">
            <div class="shape1 float-bob-y d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/footerShape1_1.png')}}"
                    alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/footerShape1_2.png')}}" alt="shape"></div>
            <div class="shape3 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/footerShape1_3.png')}}" alt="shape"></div>
            <div class="shape4 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/footerShape1_4.png')}}" alt="shape"></div>
            <div class="container">
                <div class="footer-top">
                    <div class="row gy-4">
                        <div class="col-lg-4">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="item2">
                                    <h6>address</h6>
                                    <p>4648 Rocky Road Philadelphia </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-start justify-content-lg-end">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-solid fa-envelope"></i></div>
                                <div class="item2">
                                    <h6>send email</h6>
                                    <p>info@exmple.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-start justify-content-lg-end">
                            <div class="fancy-box">
                                <div class="item1"><i class="fa-regular fa-phone-volume"></i></div>
                                <div class="item2">
                                    <h6>call emergency</h6>
                                    <p>+88 0123 654 99</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <a href="index.html">
                                    <img src="{{asset('assets/frontend/assets/img/logo/logoWhite.svg')}}" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p>
                                    Phasellus ultricies aliquam volutpat ullamcorper laoreet neque, a lacinia
                                    curabitur
                                    lacinia mollis
                                </p>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Quick Links</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="about.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Our Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Our Blogs
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        FAQ’S
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Our Menu</h3>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="menu.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Burger King
                                    </a>
                                </li>
                                <li>
                                    <a href="menu.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Pizza king
                                    </a>
                                </li>
                                <li>
                                    <a href="menu.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Fresh Food
                                    </a>
                                </li>
                                <li>
                                    <a href="menu.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Vegetable
                                    </a>
                                </li>
                                <li>
                                    <a href="menu.html">
                                        <i class="fa-solid fa-chevrons-right"></i>
                                        Desserts
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Contact Us</h3>
                            </div>
                            <ul class="list-area">
                                <li class="mb-2">
                                    Monday – Friday: <span class="text-theme-color2"> 8am – 4pm </span>
                                </li>
                                <li>
                                    Saturday: <span class="text-theme-color2"> 8am – 12am </span>
                                </li>
                            </ul>
                            <form action="#" class="mt-4">
                                <div class="form-control">
                                    <input class="email" type="email" placeholder="Your email address">
                                    <button type="submit" class="submit-btn"><i
                                            class="fa-solid fa-arrow-right-long"></i></button>
                                </div>
                                <div class="mt-3 form-control style2">
                                    <input id="checkbox" name="checkbox" type="checkbox">
                                    <label for="checkbox">I agree to the <a href="contact.html">Privacy Policy.
                                        </a></label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-wrapper d-flex align-items-center justify-content-between">
                    <p class="wow fadeInLeft" data-wow-delay=".3s">
                        © All Copyright 2024 by <a href="index.html">FreshEat</a>
                    </p>
                    <ul class="brand-logo wow fadeInRight" data-wow-delay=".5s">
                        <li>
                            <a class="text-white" href="contact.html">
                                Terms & Condition
                            </a>
                        </li>
                        <li>
                            <a class="text-white" href="contact.html">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> --}}


</body>



@endsection
