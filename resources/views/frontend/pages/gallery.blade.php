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
                                <img src="{{asset('assets/frontend/')}}assets/img/logo/logo.svg" alt="logo-img">
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
                            <h1 class="breadcumb-title">Gallery</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Gallery Section    S T A R T -->
    <div class="gallery-section section-padding fix">
        <div class="container">
            <div class="mb-4 row gy-4">
                <div class="col-lg-5">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_1.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_2.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_3.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mb-4 row gy-4">
                <div class="col-lg-4">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_4.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_5.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_6.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mb-4 row gy-4">
                <div class="col-lg-4">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_7.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_8.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_9.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_10.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_11.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="gallery-thumb style2">
                        <a href="menu.html">
                            <img src="{{asset('assets/frontend/assets/img/gallery/galleryThumb2_12.jpg')}}" alt="thumb">
                            <div class="icon"><img src="{{asset('assets/frontend/assets/img/icon/arrow_icon.png')}}" alt="icon"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


 @endsection
