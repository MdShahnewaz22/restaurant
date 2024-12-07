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
                            <h1 class="breadcumb-title">Chef</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Chef</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chefe Section    S T A R T -->
    <div class="chefe-section fix section-padding">
        <div class="chefe-wrapper style1">
            <div class="shape1 d-none d-xxl-block"><img class="float-bob-y" src="{{asset('assets/frontend/assets/img/shape/chefeShape1_1.png')}}"
                    alt="shape"></div>
            <div class="shape2 d-none d-xxl-block"><img class="float-bob-x" src="{{asset('assets/frontend/assets/img/shape/chefeShape1_2.png')}}"
                    alt="shape"></div>
            <div class="container">
                <div class="chefe-card-wrap style1">
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
                                    <p>Medical Assistant</p>
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
                <div class="chefe-card-wrap style1">
                    <div class="row">
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb1_4.png')}}" alt="thumb">
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Jenny Wilson</h3>
                                    </a>
                                    <p>Medical Assistant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb1_5.png')}}" alt="thumb">
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Guy Hawkins</h3>
                                    </a>
                                    <p>Chef Assistant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="chefe-card style1 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="chefe-thumb">
                                    <img src="{{asset('assets/frontend/assets/img/chefe/chefeThumb1_6.png')}}" alt="thumb">
                                </div>
                                <div class="icon">
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-light fa-share-nodes"></i></a>
                                    <a class="hovered-icon" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="chefe-content">
                                    <a href="chef-details.html">
                                        <h3>Robert Fox</h3>
                                    </a>
                                    <p>Chef Assistant</p>
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
