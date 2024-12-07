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
                            <h1 class="breadcumb-title">Blog Standard</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Blog Standard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section    S T A R T -->
    <setion class="news-standard section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-8">
                    <div class="news-standard-wrapper">
                        <div class="news-standard-items wow fadeInUp" data-wow-delay=".2s">
                            <div class="news-thumb">
                                <img src="{{asset('assets/frontend/assets/img/blog/blogThumb2_1.jpg')}}" alt="img">
                                <div class="post-date">
                                    <h3>
                                        27 <br>
                                        <span>Feb</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-light fa-comments"></i>
                                        3 Comments
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">There are many Bad Effect Of junk food Restaurant</a>
                                </h3>
                                <p class="mb-3">
                                    Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci
                                    malesuada the sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum
                                    mauris id nunc molestie tincidunt erat gravida. Nullam dui libero, mollis ac quam
                                    et, venenatis.
                                </p>
                                <a href="blog-details.html" class="mt-1 theme-btn">
                                    Read More
                                    <i class="text-white bg-transparent fa-sharp fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="news-standard-items wow fadeInUp" data-wow-delay=".4s">
                            <div class="news-thumb">
                                <img src="{{asset('assets/frontend/assets/img/blog/blogThumb2_2.jpg')}}" alt="img">
                                <div class="post-date">
                                    <h3>
                                        19 <br>
                                        <span>Feb</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-light fa-comments"></i>
                                        2 Comments
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">There are many variations of Foods are available</a>
                                </h3>
                                <p class="mb-3">
                                    Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci
                                    malesuada the sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum
                                    mauris id nunc molestie tincidunt erat gravida. Nullam dui libero, mollis ac quam
                                    et, venenatis.
                                </p>
                                <a href="blog-details.html" class="theme-btn">
                                    Read More
                                    <i class="text-white bg-transparent fa-sharp fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="news-standard-items wow fadeInUp" data-wow-delay=".6s">
                            <div class="news-thumb">
                                <img src="{{asset('assets/frontend/assets/img/blog/blogThumb2_3.jpg')}}" alt="img">
                                <div class="post-date">
                                    <h3>
                                        28 <br>
                                        <span>Feb</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-user"></i>
                                        By Admin
                                    </li>
                                    <li>
                                        <i class="fa-light fa-comments"></i>
                                        0 Comments
                                    </li>
                                </ul>
                                <h3>
                                    <a href="blog-details.html">Avoid Health Risk Food Endure High Availability</a>
                                </h3>
                                <p class="mb-3">
                                    Pellentesque egestas rutrum nibh facilisis ultrices. Phasellus in magna ut orci
                                    malesuada the sollicitudin. Aenean faucibus scelerisque convallis. Quisque interdum
                                    mauris id nunc molestie tincidunt erat gravida. Nullam dui libero, mollis ac quam
                                    et, venenatis.
                                </p>
                                <a href="blog-details.html" class="mt-1 theme-btn">
                                    Read More
                                    <i class="text-white bg-transparent fa-sharp fa-light fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center page-nav-wrap">
                            <ul>
                                <li><a class="previous" href="blog-standard.html"><i
                                            class="fa-sharp fa-light fa-arrow-left-long"></i></a></li>
                                <li><a class="page-numbers" href="blog-standard.html">1</a></li>
                                <li><a class="page-numbers active" href="blog-standard.html">2</a></li>
                                <li><a class="page-numbers" href="blog-standard.html">3</a></li>
                                <li><a class="page-numbers" href="blog-standard.html">...</a></li>
                                <li><a class="next" href="blog-standard.html"> <i
                                            class="fa-sharp fa-light fa-arrow-right-long"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar2">
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".2s">
                            <div class="wid-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".4s">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href="blog-standard.html">Breakfast <span>(08)</span></a></li>
                                    <li><a href="blog-standard.html">Restaurant <span>(11)</span></a></li>
                                    <li class="active"><a href="blog-standard.html">Dinner <span>(12)</span></a></li>
                                    <li><a href="blog-standard.html">Fast Food <span>(18)</span></a></li>
                                    <li><a href="blog-standard.html">Launch<span>(07)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".6s">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-area">
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{asset('assets/frontend/assets/img/blog/blogRecentThumb3_1.png')}}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <img src="{{asset('assets/frontend/assets/img/icon/calendarIcon.png')}}" alt="icon">
                                                18 Dec, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="blog-details.html">
                                                Avoid Health Risk Food &amp; <br>
                                                Endure High Availability
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{asset('assets/frontend/assets/img/blog/blogRecentThumb3_2.png')}}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <img src="{{asset('assets/frontend/assets/img/icon/calendarIcon.png')}}" alt="icon">
                                                18 Dec, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="blog-details.html">
                                                Tacking the Condition of <br>
                                                Your Fresh Mind
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{asset('assets/frontend/assets/img/blog/blogRecentThumb3_3.png')}}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <img src="{{asset('assets/frontend/assets/img/icon/calendarIcon.png')}}" alt="icon">
                                                18 Dec, 2024
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="blog-details.html">
                                                What’s the Holding Back <br>
                                                the Food Solution
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".9s">
                            <div class="wid-title">
                                <h3>Tags</h3>
                            </div>
                            <div class="news-widget-categories">
                                <div class="tagcloud">
                                    <a href="blog-standard.html">Cheese</a>
                                    <a class="active" href="blog-standard.html">Cocktail</a>
                                    <a href="blog-standard.html">Drink</a>
                                    <a href="blog-standard.html">Uncategorized</a>
                                    <a href="blog-standard.html">Pizza</a>
                                    <a href="blog-standard.html">Non Veg</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </setion>





</body>


 @endsection
