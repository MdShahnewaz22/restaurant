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
                            <a href="assets/frontend/assets/frontend/assets/img/header/03.jpg" class="offcanvas-image img-popup">
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
                            <h1 class="breadcumb-title">Faq</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Faq</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Faq Section    S T A R T -->
    <div class="faq-section fix section-padding">
        <div class="container">
            <div class="title-area mb-45">
                <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                    <img class="me-1" src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">Faq<img class="ms-1"
                        src="{{asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                </div>
                <div class="title wow fadeInUp" data-wow-delay="0.7s">
                    frequently ask question
                </div>
            </div>
            <div class="row gx-60">
                <div class="col-xl-5">
                    <div class="faq-thumb w-100 h-100 fix rounded-3">
                        <img class="w-100 h-100 rounded-3" src="{{asset('assets/frontend/assets/img/dishes/burger.png')}}" alt="thumb">
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="mt-5 faq-content style-1">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion">
                                <div class="mb-3 accordion-item wow fadeInUp" data-wow-delay=".3s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true"
                                            aria-controls="faq1">
                                            What types of cuisines do you cover on this blog?
                                        </button>
                                    </h5>
                                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            We explore a wide range of cuisines including, but not limited to,
                                            traditional regional dishes, modern culinary innovations, street food, and
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 accordion-item wow fadeInUp" data-wow-delay=".5s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                            aria-controls="faq2">
                                            How do you choose the restaurants you review?
                                        </button>
                                    </h5>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes,Restaurants that have recently opened often generate buzz, and reviewing
                                            them can provide timely content.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 accordion-item wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            Do you get paid to review restaurants?
                                        </button>
                                    </h5>
                                    <div id="faq3" class="accordion-collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes,Restaurants that have recently opened often generate buzz, and reviewing
                                            them can provide timely content.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 accordion-item wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                            aria-controls="faq4">
                                            How can I find the best restaurants in my area ?
                                        </button>
                                    </h5>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            For press-related inquiries, you typically want to contact the Public
                                            Relations (PR) or Communications department of the organization you're
                                            interested in.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                            aria-controls="faq5">
                                            Can I subscribe to your newsletter?
                                        </button>
                                    </h5>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            Yes, You can Subscribe our newsletter.
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


</body>

@endsection
