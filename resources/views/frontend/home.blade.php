@extends('frontend.layouts.main')
@section('main-content')
@include('frontend.layouts.menu')

<body class="bg-color2">

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
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
    </div>

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


                                <img src="{{ asset('assets/frontend/assets/img/logo/logo.svg') }}" alt="logo-img">
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


    <!-- Banner Section   S T A R T -->
    <section class="banner-section fix">
        <div class="slider-area">
            <div class="swiper banner-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-wrapper style1 bg-img">
                            <div class="shape1_1 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_1.svg')}}" alt="shape"></div>
                            <div class="shape1_2 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_2.svg')}}" alt="shape"></div>
                            <div class="shape1_3 d-none d-xxl-block" data-animation="slideInLeft" data-duration="3s"
                                data-delay="2s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_3.svg')}}" alt="shape"></div>
                            <div class="shape1_4 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_4.svg')}}" alt="shape"></div>
                            <div class="shape1_5 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_5.svg')}}" alt="shape"></div>
                            <div class="shape1_6 d-none d-xxl-block cir36"><img
                                    src="{{asset('assets/frontend/assets/img/shape/bannerShape1_6.svg')}}" alt="shape"></div>
                            <div class="overlay"></div>
                            <div class="banner-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-xxl-6">
                                            <div class="banner-title-area">
                                                <div class="banner-style1">
                                                    <div class="section-title">
                                                        <h6 class="sub-title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".3s"> WELCOME FRESHEAT </h6>
                                                        <h1 class="title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".5s">
                                                            SPICY FRIED CHICKEN
                                                        </h1>
                                                        <a class="theme-btn" href="contact.html"
                                                            data-animation="slideInRight" data-duration="2s"
                                                            data-delay=".7s">ORDER NOW <i
                                                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6 d-none d-xxl-block">
                                            <div class="banner-thumb-area" data-tilt data-animation="slideInRight"
                                                data-duration="2s" data-delay=".9s">
                                                <img src="{{asset('assets/frontend/assets/img/banner/bannerThumb1_1.png')}}" alt="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-wrapper style1 bg-img">
                            <div class="shape1_1 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_1.svg')}}" alt="shape"></div>
                            <div class="shape1_2 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_2.svg')}}" alt="shape"></div>
                            <div class="shape1_3 d-none d-xxl-block" data-animation="slideInLeft" data-duration="3s"
                                data-delay="2s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_3.svg')}}" alt="shape"></div>
                            <div class="shape1_4 d-none d-xxl-block float-bob-x" data-animation="slideInLeft"
                                data-duration="2s" data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_4.svg')}}"
                                    alt="shape"></div>
                            <div class="shape1_5 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_5.svg')}}" alt="shape"></div>
                            <div class="shape1_6 d-none d-xxl-block cir36"><img
                                    src="{{asset('assets/frontend/assets/img/shape/bannerShape1_6.svg')}}" alt="shape"></div>
                            <div class="overlay"></div>
                            <div class="banner-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-xxl-6">
                                            <div class="banner-title-area">
                                                <div class="banner-style1">
                                                    <div class="section-title">
                                                        <h6 class="sub-title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".3s"> WELCOME FRESHEAT </h6>
                                                        <h1 class="title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".5s">
                                                            Chicago Deep Pizza King
                                                        </h1>
                                                        <a class="theme-btn" href="menu.html"
                                                            data-animation="slideInRight" data-duration="2s"
                                                            data-delay=".7s">ORDER NOW <i
                                                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6 d-none d-xxl-block">
                                            <div class="banner-thumb-area" data-tilt data-animation="slideInRight"
                                                data-duration="2s" data-delay=".9s">
                                                <img src="{{asset('assets/frontend/assets/img/banner/bannerThumb1_2.png')}}" alt="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-wrapper style1 bg-img">
                            <div class="shape1_1 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_1.svg')}}" alt="shape"></div>
                            <div class="shape1_2 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_2.svg')}}" alt="shape"></div>
                            <div class="shape1_3 d-none d-xxl-block" data-animation="slideInLeft" data-duration="3s"
                                data-delay="2s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_3.svg')}}" alt="shape"></div>
                            <div class="shape1_4 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_4.svg')}}" alt="shape"></div>
                            <div class="shape1_5 d-none d-xxl-block" data-animation="slideInLeft" data-duration="2s"
                                data-delay=".3s"><img src="{{asset('assets/frontend/assets/img/shape/bannerShape1_5.svg')}}" alt="shape"></div>
                            <div class="shape1_6 d-none d-xxl-block cir36"><img
                                    src="{{asset('assets/frontend/assets/img/shape/bannerShape1_6.svg')}}" alt="shape"></div>
                            <div class="overlay"></div>
                            <div class="banner-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-xxl-6">
                                            <div class="banner-title-area">
                                                <div class="banner-style1">
                                                    <div class="section-title">
                                                        <h6 class="sub-title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".3s"> WELCOME FRESHEAT </h6>
                                                        <h1 class="title" data-animation="slideInRight"
                                                            data-duration="2s" data-delay=".5s">
                                                            Chicago Deep Burger King
                                                        </h1>
                                                        <a class="theme-btn" href="menu.html"
                                                            data-animation="slideInRight" data-duration="2s"
                                                            data-delay=".7s">ORDER NOW <i
                                                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6 d-none d-xxl-block">
                                            <div class="banner-thumb-area" data-tilt data-animation="slideInRight"
                                                data-duration="2s" data-delay=".9s">
                                                <img src="{{asset('assets/frontend/assets/img/banner/bannerThumb1_3.png')}}" alt="shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="arrow-prev"><img src="{{asset('assets/frontend/assets/img/icon/arrowPrev.svg')}}" alt="Icon"></div>
                <div class="arrow-next"><img src="{{asset('assets/frontend/assets/img/icon/arrowNext.svg')}}" alt="Icon"></div>
                <div class="pagination-class swiper-pagination"></div>
            </div>
        </div>
    </section>


    <!-- Best Food Items Section   S T A R T -->
    <section class="best-food-items-section fix section-padding bg-color2">
        <div class="best-food-wrapper">

            <div class="shape2 float-bob-x d-none d-xxl-block"><img src="{{ asset('assets/frontend/assets/img/shape/bestFoodItemsShape1_2.png')}}"
                    alt="shape"></div>
            <div class="container">
                <div class="title-area">
                    <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                        <img class="me-1" src="{{ asset ('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">Best Food <img
                            src="{{ asset ('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                        Popular Food Items
                    </h2>
                </div>
                <div class="slider-area mb-n40">
                    <div class="swiper bestFoodItems-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-food-items">
                                    <div class="item-thumb">
                                        <img src="{{ asset('assets/frontend/assets/img/food-items/item1_1.png')}}" alt="thumb">
                                        <div class="circle-shape"><img class="cir36"
                                                src="{{ asset ('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <a href="menu.html">
                                            <h3>Chicken Pizza</h3>
                                        </a>
                                        <div class="text">The registration fee</div>
                                        <h6>$26.99</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">
                                <div class="single-food-items">
                                    <div class="item-thumb">
                                        <img src="{{ asset ('assets/frontend/assets/img/food-items/item1_2.png')}}" alt="thumb">
                                        <div class="circle-shape"><img class="cir36"
                                                src="{{ asset ('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <a href="menu.html">
                                            <h3>Egg and Cucumber</h3>
                                        </a>
                                        <div class="text">The registration fee</div>
                                        <h6>$28.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-food-items">
                                    <div class="item-thumb">
                                        <img src="{{ asset ('assets/frontend/assets/img/food-items/item1_3.png')}}" alt="thumb">
                                        <div class="circle-shape"><img class="cir36"
                                                src="{{ asset ('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <a href="menu.html">
                                            <h3>Chicken Fried Rice</h3>
                                        </a>
                                        <div class="text">The registration fee</div>
                                        <h6>$100.99</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-food-items">
                                    <div class="item-thumb">
                                        <img src="{{ asset ('assets/frontend/assets/img/food-items/item1_4.png')}}" alt="thumb">
                                        <div class="circle-shape"><img class="cir36"
                                                src="{{ asset ('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                    </div>
                                    <div class="item-content">
                                        <a href="menu.html">
                                            <h3>Chicken Leg Piece</h3>
                                        </a>
                                        <div class="text">The registration fee</div>
                                        <h6>$20.99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bestFoodItems-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Section   S T A R T -->
    <div class="offer-section fix bg-color2" style="margin-top: -400px">
        <div class="offer-wrapper">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.2s"
                            style="background-image: url(assets/frontend/assets/img/bg/offerBG1_1.jpg);">
                            <div class="offer-content">
                                <h6>ON THIS WEEK</h6>
                                <h3>SPICY FRIED CHICKEN</h3>
                                <p>limits Time Offer</p>
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
                    <div class="col-lg-6 col-xl-4">
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.5s"
                            style="background-image: url(assets/frontend/assets/img/bg/offerBG1_1.jpg);">
                            <div class="offer-content">
                                <h6>WELCOME FRESHEAT</h6>
                                <h3>TODAY SPACIAL FOOD</h3>
                                <p>limits Time Offer</p>
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
                        <div class="offer-card style1 wow fadeInUp" data-wow-delay="0.7s"
                            style="background-image: url(assets/frontend/assets/img/bg/offerBG1_1.jpg);">
                            <div class="offer-content">
                                <h6>ON THIS WEEK</h6>
                                <h3>SPECIAL CHICKEN ROLL</h3>
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
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section   S T A R T -->
    <section class="pb-0 about-us-section fix section-padding">
        <div class="about-wrapper style1">
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
    </section>

    <!-- Popular Dishes Section   S T A R T -->
    <section class="popular-dishes-section fix section-padding">
        <div class="popular-dishes-wrapper style1">
            <div class="shape1 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/popularDishesShape1_1.png')}}" alt="shape">
            </div>
            <div class="shape2 float-bob-y d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/popularDishesShape1_2.png')}}"
                    alt="shape"></div>
            <div class="container">
                <div class="title-area">
                    <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                        <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">POPULAR DISHES<img class="ms-1"
                            src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                    </div>
                    <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                        Best selling Dishes
                    </h2>
                </div>
                <div class="dishes-card-wrap style1">
                    <div class="dishes-card style1 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="dishes-thumb">
                            <img src="{{asset('assets/frontend/assets/img/dishes/dishes1_1.png')}}" alt="thmb">
                        </div>
                        <a href="menu.html">
                            <h3>Chicken Fried Rice</h3>
                        </a>
                        <p>The registration fee</p>
                        <h6>$100.99</h6>
                        <div class="social-profile">
                            <span class="plus-btn"> <a href="#"> <i class="fa-regular fa-heart"></i></a></span>
                            <ul>
                                <li><a href="cart.html"><i class="fa-regular fa-basket-shopping-simple"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dishes-card style1 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="social-profile">
                            <span class="plus-btn"> <a href="#"> <i class="fa-regular fa-heart"></i></a></span>
                            <ul>
                                <li><a href="cart.html"><i class="fa-regular fa-basket-shopping-simple"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="dishes-thumb">
                            <img src="{{asset('assets/frontend/assets/img/dishes/dishes1_2.png')}}" alt="thmb">
                        </div>
                        <a href="menu.html">
                            <h3>Chinese Pasta</h3>
                        </a>
                        <p>The registration fee</p>
                        <h6>$15.99</h6>
                    </div>
                    <div class="dishes-card style1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="social-profile">
                            <span class="plus-btn"> <a href="#"> <i class="fa-regular fa-heart"></i></a></span>
                            <ul>
                                <li><a href="cart.html"><i class="fa-regular fa-basket-shopping-simple"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="dishes-thumb">
                            <img src="{{asset('assets/frontend/assets/img/dishes/dishes1_3.png')}}" alt="thmb">
                        </div>
                        <a href="menu.html">
                            <h3>Chicken Pizza</h3>
                        </a>
                        <p>The registration fee</p>
                        <h6>$26.99</h6>
                    </div>
                    <div class="dishes-card style1 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="social-profile">
                            <span class="plus-btn"> <a href="#"> <i class="fa-regular fa-heart"></i></a></span>
                            <ul>
                                <li><a href="cart.html"><i class="fa-regular fa-basket-shopping-simple"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="dishes-thumb">
                            <img src="{{asset('assets/frontend/assets/img/dishes/dishes1_4.png')}}" alt="thmb">
                        </div>
                        <a href="menu.html">
                            <h3>Chicken Noodles</h3>
                        </a>
                        <p>The registration fee</p>
                        <h6>$39.00</h6>
                    </div>
                    <div class="dishes-card style1 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="social-profile">
                            <span class="plus-btn"> <a href="wishlist.html"> <i
                                        class="fa-regular fa-heart"></i></a></span>
                            <ul>
                                <li><a href="cart.html"><i class="fa-regular fa-basket-shopping-simple"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="dishes-thumb">
                            <img src="{{asset('assets/frontend/assets/img/dishes/dishes1_5.png')}}" alt="thmb">
                        </div>
                        <a href="menu.html">
                            <h3>Grilled Chicken</h3>
                        </a>
                        <p>The registration fee</p>
                        <h6>$20.99</h6>
                    </div>
                </div>
                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.9s">
                    <a class="theme-btn" href="menu2.html">VIEW ALL ITEM <i
                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="pb-3 modal-content pe-3">
                    <div class="border-0 modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row gy-5">
                                <div class="col-xxl-6">
                                    <div class="modal-thumb">
                                        <div class="product-big-img bg-color2">
                                            <div class="dishes-thumb">
                                                <img class="img-fluid" src="{{asset('assets/frontend/assets/img/dishes/dishes3_1.png')}}"
                                                    alt="thumb">
                                                <div class="circle-shape"><img class="cir36"
                                                        src="{{asset('assets/frontend/assets/img/food-items/circleShape2.png')}}" alt="shape"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6">
                                    <div class="modal-details">
                                        <div class="product-about">
                                            <div class="title-wrapper">
                                                <h2 class="product-title">Chicken Pizza</h2>
                                                <div class="price">$69</div>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                                    <span style="width:100%">Rated <strong class="rating">5.00</strong>
                                                        out of 5 based on <span class="rating">1</span> customer
                                                        rating</span>
                                                </div>
                                                <a href="shop-details.html" class="woocommerce-review-link">(<span
                                                        class="count">2</span> customer reviews)</a>
                                            </div>
                                            <p class="text">Aliquam hendrerit a augue insuscipit. Etiam aliquam massa
                                                quis des mauris commodo venenatis ligula commodo leez sed blandit
                                                convallis dignissim onec vel pellentesque neque.</p>

                                            <div class="actions">
                                                <div class="quantity">
                                                    <p>Quantity</p>

                                                    <div class="qty-wrapper">
                                                        <button class="quantity-plus qty-btn"><i
                                                                class="fa-solid fa-plus"></i></button>
                                                        <input type="number" class="qty-input" step="1" min="1"
                                                            max="100" name="quantity" value="1" title="Qty">
                                                        <button class="quantity-minus qty-btn"><i
                                                                class="fa-solid fa-minus"></i></button>
                                                    </div>
                                                </div>
                                                <a href="cart.html" class="theme-btn">Add to Cart<i
                                                        class="text-white bg-transparent fa-regular fa-cart-shopping"></i></a>
                                                <a href="wishlist.html" class="border-0 theme-btn style5">ADD TO
                                                    wishlist<i class="fa-sharp fa-solid fa-heart"></i></a>
                                            </div>
                                            <div class="share">
                                                <h6>share with friends</h6>
                                                <ul class="social-media">
                                                    <li> <a href="https://www.facebook.com/"> <i
                                                                class="fa-brands fa-facebook-f"></i> </a> </li>
                                                    <li> <a href="https://www.youtube.com/"> <i
                                                                class="fa-brands fa-youtube"></i> </a> </li>
                                                    <li> <a href="https://www.x.com/"> <i
                                                                class="fa-brands fa-twitter"></i> </a> </li>
                                                    <li> <a href="https://www.instagram.com/"> <i
                                                                class="fa-brands fa-instagram"></i> </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- Food Menu section  S T A R T -->
    <section class="food-menu-section fix section-padding">
        <div class="burger-shape">
            <img src="{{asset('assets/frontend/assets/img/shape/burger-shape.png')}}" alt="img">
        </div>
        <div class="fry-shape">
            <img src="{{asset('assets/frontend/assets/img/shape/fry-shape.png')}}" alt="img">
        </div>
        <div class="food-menu-wrapper style1">
            <div class="container">
                <div class="food-menu-tab-wrapper style-bg">
                    <div class="title-area">
                        <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                            <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">FOOD MENU<img class="ms-1"
                                src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                        </div>
                        <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                            Fresheat Foods Menu
                        </h2>
                    </div>


                    <div class="food-menu-tab">
                        <ul class="mb-3 nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-FastFood-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-FastFood" type="button" role="tab"
                                    aria-controls="pills-FastFood" aria-selected="true"><img
                                        src="{{asset('assets/frontend/assets/img/menu/menuIcon1_1.png')}}" alt="icon">Fast Food</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-drinkJuice-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-drinkJuice" type="button" role="tab"
                                    aria-controls="pills-drinkJuice" aria-selected="false"><img
                                        src="{{asset('assets/frontend/assets/img/menu/menuIcon1_2.png')}}" alt="icon">Drink & Juice</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-chickenPizza-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-chickenPizza" type="button" role="tab"
                                    aria-controls="pills-chickenPizza" aria-selected="false"><img
                                        src="{{asset('assets/frontend/assets/img/menu/menuIcon1_3.png')}}" alt="icon">Chicken Pizza</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-freshPasta-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-freshPasta" type="button" role="tab"
                                    aria-controls="pills-freshPasta" aria-selected="false"><img
                                        src="{{asset('assets/frontend/assets/img/menu/menuIcon1_4.png')}}" alt="icon">Fresh Pasta</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-FastFood" role="tabpanel"
                                aria-labelledby="pills-FastFood-tab" tabindex="0">
                                <div class="row gx-60">
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_1.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3 class="active">Chinese Pasta</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$15.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_2.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Fried Rice</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$25.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_3.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Pizza</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$115.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_4.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Noodles</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$154.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_5.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Grilled Chicken</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$55.99</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_6.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Egg and Cucumber</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$65.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_7.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken White Rice</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$135.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_8.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Spatial Barger</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$95.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_9.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Vegetables Burger</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$75.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        src="{{asset('assets/frontend/assets/img/menu/menuThumb1_10.png')}}" alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Brief Chicken</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$44.99</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-drinkJuice" role="tabpanel"
                                aria-labelledby="pills-drinkJuice-tab" tabindex="0">
                                <div class="row gx-30">
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_1.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chinese Pasta</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$15.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_2.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Fried Rice</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$25.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_3.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Pizza</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$115.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_4.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Noodles</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$154.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_5.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Grilled Chicken</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$55.99</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_6.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Egg and Cucumber</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$65.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_7.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken White Rice</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$135.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_8.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Spatial Barger</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$95.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_9.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Vegetables Burger</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$75.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        src="{{asset('assets/frontend/assets/img/menu/menuThumb1_10.png')}}" alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Brief Chicken</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$44.99</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-chickenPizza" role="tabpanel"
                                aria-labelledby="pills-chickenPizza-tab" tabindex="0">
                                <div class="row gx-30">
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_1.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chinese Pasta</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$15.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_2.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Fried Rice</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$25.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_3.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Pizza</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$115.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_4.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Noodles</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$154.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_5.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Grilled Chicken</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$55.99</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_6.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Egg and Cucumber</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$65.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_7.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken White Rice</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$135.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_8.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Spatial Barger</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$95.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_9.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Vegetables Burger</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$75.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        src="{{asset('assets/frontend/assets/img/menu/menuThumb1_10.png')}}" alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Brief Chicken</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$44.99</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-freshPasta" role="tabpanel"
                                aria-labelledby="pills-freshPasta-tab" tabindex="0">
                                <div class="row gx-30">
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_1.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chinese Pasta</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$15.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_2.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Fried Rice</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$25.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_3.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Pizza</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$115.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_4.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken Noodles</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$154.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_5.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Grilled Chicken</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$55.99</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_6.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Egg and Cucumber</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$65.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_7.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Chicken White Rice</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$135.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_8.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Spatial Barger</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$95.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img src="{{asset('assets/frontend/assets/img/menu/menuThumb1_9.png')}}"
                                                        alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Vegetables Burger</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$75.99</h6>
                                        </div>
                                        <div class="single-menu-items">
                                            <div class="details">
                                                <div class="menu-item-thumb"><img
                                                        src="{{ asset('assets/frontend/assets/img/menu/menuThumb1_10.png')}}" alt="thumb"></div>
                                                <div class="menu-content">
                                                    <a href="menu.html">
                                                        <h3>Brief Chicken</h3>
                                                    </a>
                                                    <p>It's a testament to our.</p>
                                                </div>
                                            </div>

                                            <h6>$44.99</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="pt-0 mt-5 marquee-wrapper style-1 text-slider section-padding">
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

    <!-- Timer section  S T A R T -->
    <div class="timer-section fix">
        <div class="timer-wrapper style1">
            <div class="container">
                <div class="timer-wrap style1">
                    <div class="shape1 d-none d-xxl-block"><img class="cir36" src="{{asset('assets/frontend/assets/img/shape/timerShape1_1.svg')}}"
                            alt="shape"></div>
                    <div class="shape2 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/timerShape1_2.svg')}}" alt="shape">
                    </div>
                    <div class="shape3 d-none d-xxl-block"><img src="{{asset('assets/frontend/assets/img/shape/timerShape1_3.svg')}}" alt="shape">
                    </div>
                    <div class="container">
                        <div class="row gy-4 gx-134">
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="timer-thumb wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="{{asset('assets/frontend/assets/img/timer/timerThumb1_1.png')}}" alt="thumb">
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="timer-card style1 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="title-area">
                                        <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                                            <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">Special
                                            Offer<img class="ms-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                                        </div>
                                        <h2 class="text-white title wow fadeInUp" data-wow-delay="0.7s">
                                            Get 30% Discount Every Item
                                        </h2>
                                    </div>
                                    <div class="clock-wrapper">
                                        <div class="clock">
                                            <div class="number" id="days">00</div>
                                            <div class="text">days</div>
                                        </div>
                                        <div class="clock">
                                            <div class="number" id="hours">00</div>
                                            <div class="text">hrs</div>
                                        </div>
                                        <div class="clock">
                                            <div class="number" id="minutes">00</div>
                                            <div class="text">mins</div>
                                        </div>
                                        <div class="clock">
                                            <div class="number" id="seconds">00</div>
                                            <div class="text">secs</div>
                                        </div>
                                    </div>

                                    <div class="btn-wrap">
                                        <a class="theme-btn" href="menu.html">ORDER NOW <i
                                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chefe Section    S T A R T -->
    <section class="chefe-section fix section-padding">
        <div class="chefe-wrapper style1">
            <div class="shape1 d-none d-xxl-block"><img class="float-bob-y" src="{{asset('assets/frontend/assets/img/shape/chefeShape1_1.png')}}"
                    alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img class="float-bob-x" src="{{asset('assets/frontend/assets/img/shape/chefeShape1_2.png')}}"
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
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb1_1.png')}}" alt="thumb">
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Ralph Edwards</h3>
                                    </a>
                                    <p>Chef Lead</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb1_2.png')}}" alt="thumb">
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Leslie Alexander</h3>
                                    </a>
                                    <p>Chef Assistant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb1_3.png')}}" alt="thumb">
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Ronald Richards</h3>
                                    </a>
                                    <p>Chef Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-5 mt-4 slider-area wow fadeInUp" data-wow-delay="0.5s">
                    <div class="swiper clientSliderOne">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="text-center client-img"><img src="{{asset('assets/frontend/assets/img/logo/clientLogo1_1.png')}}"
                                        alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center client-img"><img src="{{asset('assets/frontend/assets/img/logo/clientLogo1_2.png')}}"
                                        alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center client-img"><img src="{{asset('assets/frontend/assets/img/logo/clientLogo1_3.png')}}"
                                        alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center client-img"><img src="{{asset('assets/frontend/assets/img/logo/clientLogo1_4.png')}}"
                                        alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center client-img"><img src="{{asset('assets/frontend/assets/img/logo/clientLogo1_5.png')}}"
                                        alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="text-center client-img"><img src="{{asset('assets/frontend/assets/img/logo/clientLogo1_6.png')}}"
                                        alt="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section    S T A R T -->
    <section class="testimonial-section fix bg-color3" style="margin-top: -600px">
        <div class="testimonial-wrapper style1 section-padding ">
            <div class="shape"><img src="{{asset('assets/frontend/assets/img/testimonial/testimonialThumb1_1.png')}}" alt="thumb"></div>
            <div class="shape2"><img src="{{asset('assets/frontend/assets/img/shape/testimonialShape1_1.png')}}" alt="shape"></div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-5 d-flex align-items-center justify-content-center">
                        <div class="video-wrap cir36 ">
                            <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8" class="play-btn popup-video"><img
                                    src="{{asset('assets/frontend/assets/img/shape/player.svg')}}" alt="icon"></a>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="title-area">
                            <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                                <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">Testimonials<img
                                    class="ms-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                            </div>
                            <h2 class="text-white title wow fadeInUp" data-wow-delay="0.7s">
                                What our Clients Say
                            </h2>
                        </div>
                        <div class="slider-area">
                            <div class="swiper testmonialSliderOne">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-card style1">
                                            <div class="testimonial-header">
                                                <div class="fancy-box">
                                                    <div class="item1"><img
                                                            src="{{asset('assets/frontend/assets/img/testimonial/testimonialProfile1_1.png')}}"
                                                            alt="thumb"></div>
                                                    <div class="item2">
                                                        <h6>Albert Flores</h6>
                                                        <p>Web Designer</p>
                                                        <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/star.svg')}}"
                                                                alt="icon"></div>
                                                    </div>
                                                    <div class="quote"><img src="{{asset('assets/frontend/assets/img/icon/quote.svg')}}" alt="icon">
                                                    </div>
                                                </div>
                                            </div>

                                            <p>Penatibus magnis dis point parturient montes nascetur ridiculus mus Ut id
                                                lorem ac enim the vestibulum blandit nec sit amet felis. Fusce quis diam
                                                odio Cras mattis mi quis tincidunt</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap">
                <div class="arrow-prev"><i class="fa-regular fa-arrow-left"></i></div>
                <div class="arrow-next"><i class="fa-regular fa-arrow-right"></i></div>
            </div>
        </div>

        <div class="marquee-wrapper style-2 text-slider section-padding">
            <div class="marquee-inner to-left">
                <ul class="marqee-list d-flex">
                    <li class="marquee-item style-2">
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

    <!-- Blog Section    S T A R T -->
    <section class="blog-section section-padding fix">
        <div class="burger-shape">
            <img src="{{asset('assets/frontend/assets/img/blog/burger-shape.png')}}" alt="img">
        </div>
        <div class="pizza-shape">
            <img src="{{asset('assets/frontend/assets/img/blog/pizza-shape.png')}}" alt="img">
        </div>
        <div class="blog-wrapper style1">
            <div class="container">
                <div class="blog-card-wrap style1">
                    <div class="title-area">
                        <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                            <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">LATEST NEWS<img
                                class="ms-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                        </div>
                        <h2 class="title wow fadeInUp" data-wow-delay="0.7s">
                            Our Latest Foods News
                        </h2>
                    </div>
                    <div class="slider-area">
                        <div class="swiper blogSliderOne">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="blog-thumb">
                                            <img src="{{asset('assets/frontend/assets/img/blog/blogThumb1_1.jpg')}}" alt="thumb">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <div class="item1">
                                                    <h6>15</h6>
                                                    <p>Dec</p>
                                                </div>
                                                <div class="item2">
                                                    <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/user.svg')}}"
                                                            alt="icon"><span>By Admin</span></div>
                                                </div>
                                                <div class="item3">
                                                    <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/tag.svg')}}"
                                                            alt="icon"><span>Noodles</span></div>
                                                </div>
                                            </div>
                                            <a href="blog-details.html">
                                                <h3>Fast Food Frenzy a Taste of Convenience</h3>
                                            </a>
                                            <a href="blog-details.html" class="link-btn">
                                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="blog-thumb">
                                            <img src="{{asset('assets/frontend/assets/img/blog/blogThumb1_2.jpg')}}" alt="thumb">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <div class="item1">
                                                    <h6>17</h6>
                                                    <p>Dec</p>
                                                </div>
                                                <div class="item2">
                                                    <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/user.svg')}}"
                                                            alt="icon"><span>By Admin</span></div>
                                                </div>
                                                <div class="item3">
                                                    <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/tag.svg')}}"
                                                            alt="icon"><span>Chicken</span></div>
                                                </div>
                                            </div>
                                            <a href="blog-details.html">
                                                <h3>Benefits of health and safety measures</h3>
                                            </a>
                                            <a href="blog-details.html" class="link-btn">
                                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-card style1 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="blog-thumb">
                                            <img src="{{asset('assets/frontend/assets/img/blog/blogThumb1_3.jpg')}}" alt="thumb">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <div class="item1">
                                                    <h6>25</h6>
                                                    <p>Dec</p>
                                                </div>
                                                <div class="item2">
                                                    <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/user.svg')}}"
                                                            alt="icon"><span>By Admin</span></div>
                                                </div>
                                                <div class="item3">
                                                    <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/tag.svg')}}"
                                                            alt="icon"><span>Noodles</span></div>
                                                </div>
                                            </div>
                                            <a href="blog-details.html">
                                                <h3>Quick Cravings Unraveling Fast Food Delights</h3>
                                            </a>
                                            <a href="blog-details.html" class="link-btn">
                                                <span>Read More</span> <i class="fa-solid fa-arrow-right-long"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap">
                <div class="arrow-prev"><i class="fa-regular fa-arrow-left"></i></div>
                <div class="arrow-next"><i class="fa-regular fa-arrow-right"></i></div>
            </div>
        </div>
    </section>

    <!-- Gallery Section    S T A R T -->
    <div class="gallery-section" style="margin-top: -220px">
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
