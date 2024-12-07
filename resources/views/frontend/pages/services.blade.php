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
                                <img src="{{asset('assets/frontend/assets/img/header/05.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/06.jpg" class="offcanvas-image img-popup">
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
                            <h1 class="breadcumb-title">Services</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Servicess</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section   S T A R T -->
    <div class="services-section style1 section-padding fix">
        <div class="services-wrapper style2">
            <div class="container">
                <div class="row gy-5 gx-30">
                    <div class="col-lg-4">
                        <div class="services-card style2">
                            <div class="services-card_icon">
                                <img src="{{asset('assets/frontend/assets/img/icon/servicesIcon1_1.png')}}" alt="icon">
                            </div>
                            <h4 class="services-card_title">
                                <a href="service-details.html">Dining Guides</a>
                            </h4>
                            <p class="services-card_text">Detailed reviews of local eateries, covering various cuisines,
                                price points, and dining experiences.</p>
                            <div class="shape1"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_1.png')}}" alt="shape"></div>
                            <div class="shape2"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_2.png')}}" alt="shape"></div>
                            <div class="shape3"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_3.png')}}" alt="shape"></div>
                            <div class="shape4"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_4.png')}}" alt="shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-card style2">
                            <div class="services-card_icon">
                                <img src="{{asset('assets/frontend/assets/img/icon/servicesIcon1_2.png')}}" alt="icon">
                            </div>
                            <h4 class="services-card_title">
                                <a href="service-details.html">100% Fresh Food</a>
                            </h4>
                            <p class="services-card_text">Detailed reviews of local eateries, covering various cuisines,
                                price points, and dining experiences.</p>
                            <div class="shape1"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_1.png')}}" alt="shape"></div>
                            <div class="shape2"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_2.png')}}" alt="shape"></div>
                            <div class="shape3"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_3.png')}}" alt="shape"></div>
                            <div class="shape4"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_4.png')}}" alt="shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-card style2">
                            <div class="services-card_icon">
                                <img src="{{asset('assets/frontend/assets/img/icon/servicesIcon1_3.png')}}" alt="icon">
                            </div>
                            <h4 class="services-card_title">
                                <a href="service-details.html">Special Offers and Discounts</a>
                            </h4>
                            <p class="services-card_text">Detailed reviews of local eateries, covering various cuisines,
                                price points, and dining experiences.</p>
                            <div class="shape1"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_1.png')}}" alt="shape"></div>
                            <div class="shape2"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_2.png')}}" alt="shape"></div>
                            <div class="shape3"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_3.png')}}" alt="shape"></div>
                            <div class="shape4"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_4.png')}}" alt="shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-card style2">
                            <div class="services-card_icon">
                                <img src="{{asset('assets/frontend/assets/img/icon/servicesIcon1_4.png')}}" alt="icon">
                            </div>
                            <h4 class="services-card_title">
                                <a href="service-details.html">Restaurant Reviews</a>
                            </h4>
                            <p class="services-card_text">Detailed reviews of local eateries, covering various cuisines,
                                price points, and dining experiences.</p>
                            <div class="shape1"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_1.png')}}" alt="shape"></div>
                            <div class="shape2"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_2.png')}}" alt="shape"></div>
                            <div class="shape3"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_3.png')}}" alt="shape"></div>
                            <div class="shape4"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_4.png')}}" alt="shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-card style2">
                            <div class="services-card_icon">
                                <img src="{{asset('assets/frontend/assets/img/icon/servicesIcon1_5.png')}}" alt="icon">
                            </div>
                            <h4 class="services-card_title">
                                <a href="service-details.html">Food Testing Events</a>
                            </h4>
                            <p class="services-card_text">Detailed reviews of local eateries, covering various cuisines,
                                price points, and dining experiences.</p>
                            <div class="shape1"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_1.png')}}" alt="shape"></div>
                            <div class="shape2"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_2.png')}}" alt="shape"></div>
                            <div class="shape3"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_3.png')}}" alt="shape"></div>
                            <div class="shape4"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_4.png')}}" alt="shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-card style2">
                            <div class="services-card_icon">
                                <img src="{{asset('assets/frontend/assets/img/icon/servicesIcon1_6.png')}}" alt="icon">
                            </div>
                            <h4 class="services-card_title">
                                <a href="service-details.html">Online Ordering</a>
                            </h4>
                            <p class="services-card_text">Detailed reviews of local eateries, covering various cuisines,
                                price points, and dining experiences.</p>
                            <div class="shape1"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_1.png')}}" alt="shape"></div>
                            <div class="shape2"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_2.png')}}" alt="shape"></div>
                            <div class="shape3"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_3.png')}}" alt="shape"></div>
                            <div class="shape4"><img src="{{asset('assets/frontend/assets/img/shape/servicesShape1_4.png')}}" alt="shape"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Cta section  S T A R T -->
    <section class="pt-0 cta-section section-padding fix">
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
                                        <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb1_3.jp')}}g" alt="thumb">
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




</body>



@endsection
