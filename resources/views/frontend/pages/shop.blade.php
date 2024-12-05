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
                                <img src="{{ asset('assets/frontend/assets/img/logo/logo.svg')}}" alt="logo-img">
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
                                <img src="{{ asset('assets/frontend/assets/img/header/01.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/02.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/frontend/assets/img/header/02.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/03.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/frontend/assets/img/header/03.jpg')}}" alt="gallery-img">
                            </a>
                        </div>
                        <div class="offcanvas-gallery-items">
                            <a href="assets/frontend/assets/img/header/04.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/frontend/assets/img/header/04.jpg" alt="gallery-img')}}">
                            </a>
                            <a href="assets/frontend/assets/img/header/05.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/frontend/assets/img/header/05.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/06.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/frontend/assets/img/header/06.jpg" alt="gallery-img')}}">
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
                            <h1 class="breadcumb-title">Shop</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Section S T A R T -->
    <div class="shop-section section-padding fix">
        <div class="shop-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="order-2 col-xl-3 col-lg-4 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Search
                                </h5>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button><i class="fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Search
                                </h5>
                                <ul class="tagcloud">
                                    <li><a href="shop.html">Cheese</a></li>
                                    <li><a href="shop.html">Cocktail</a></li>
                                    <li><a href="shop.html">Drink</a></li>
                                    <li><a href="shop.html">Uncategorized</a></li>
                                    <li><a href="shop.html">Pizza</a></li>
                                    <li><a href="shop.html">Non Veg</a></li>
                                </ul>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Filter By Price
                                </h5>
                                <div class="range__barcustom">
                                    <div class="slider">
                                        <div class="progress" style="left: 15.29%; right: 58.9%;"></div>
                                    </div>
                                    <div class="range-input">
                                        <input type="range" class="range-min" min="0" max="10000" value="2500">
                                        <input type="range" class="range-max" min="100" max="10000" value="7500">
                                    </div>
                                    <div class="range-items">
                                        <div class="price-input">
                                            <div class="gap-1 price-wrapper d-flex align-items-center">
                                                <div class="field">
                                                    <span>Price:</span>
                                                </div>
                                                <div class="field">
                                                    <span>$</span>
                                                    <input type="number" class="input-min" value="100">
                                                </div>
                                                <div class="separators">-</div>
                                                <div class="field">
                                                    <span>$</span>
                                                    <input type="number" class="input-max" value="1000">
                                                </div>
                                                <a href="shop.html" class="mt-2 filter-btn me-3">Filter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <h5 class="widget-title">
                                    Filter By Price
                                </h5>

                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/frontend/assets/img/shop/recentThumb1_1.png')}}" alt="menu-thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="shop.html"> Ruti With Beef Slice </a>
                                        <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star3.svg')}}" alt="icon"></div>
                                        <div class="price">
                                            <div class="regular-price">35$</div>
                                            <div class="offer-price">25$</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/frontend/assets/img/shop/recentThumb1_2.png')}}" alt="menu-thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="shop.html"> Fast Food Combo </a>
                                        <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star3.svg')}}" alt="icon"></div>
                                        <div class="price">
                                            <div class="regular-price">95$</div>
                                            <div class="offer-price">75$</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="assets/frontend/assets/img/shop/recentThumb1_3.png" alt="menu-thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="shop.html"> divicious Salad </a>
                                        <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star3.svg')}}" alt="icon"></div>
                                        <div class="price">
                                            <div class="regular-price">65$</div>
                                            <div class="offer-price">55$</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-box">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/frontend/assets/img/shop/recentThumb1_4.png')}}" alt="menu-thumb">
                                    </div>
                                    <div class="recent-content">
                                        <a href="shop.html"> Chiness Pasta </a>
                                        <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star3.svg')}}" alt="icon"></div>
                                        <div class="price">
                                            <div class="regular-price">45$</div>
                                            <div class="offer-price">35$</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 col-xl-9 col-lg-8 order-md-2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="sort-bar">
                            <div class="row g-sm-0 gy-20 justify-content-between align-items-center">
                                <div class="col-md">
                                    <p class="woocommerce-result-count">Showing 1 - 12 of 30 Results</p>
                                </div>

                                <div class="col-md-auto">
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="single-select" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Default Sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-md-auto">
                                    <ul class="mb-3 nav nav-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-grid-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-grid" type="button" role="tab"
                                                aria-controls="pills-grid" aria-selected="true"><i
                                                    class="fa-solid fa-grid"></i></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-list" type="button" role="tab"
                                                aria-controls="pills-list" aria-selected="false"><i
                                                    class="fa-solid fa-list"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                aria-labelledby="pills-grid-tab" tabindex="0">
                                <div class="dishes-card-wrap style2">
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_1.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_2.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Egg and Cucumber</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$28.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_3.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Fried Rice</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$20.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_4.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Leg Piece</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$58.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dishes-card-wrap style2">
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_1.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_2.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Egg and Cucumber</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$28.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_3.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Fried Rice</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$20.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_4.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Leg Piece</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$58.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dishes-card-wrap style2">
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_4.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_5.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Egg and Cucumber</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$28.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_3.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Fried Rice</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$20.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style2 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_4.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Leg Piece</h3>
                                            </a>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">The registration fee</div>
                                            <h6>$58.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab"
                                tabindex="0">
                                <div class="dishes-card-wrap style3">
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_1.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_2.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Egg and Cucumber</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$28.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_3.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Fried Rice</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$20.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.8s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_4.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Leg Piece</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$58.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                    <div class="dishes-card style4 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="dishes-thumb">
                                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes2_1.png')}}" alt="thumb">
                                            <div class="circle-shape"><img class="cir36"
                                                    src="{{ asset('assets/frontend/assets/img/food-items/circleShape.png')}}" alt="shape"></div>
                                        </div>
                                        <div class="dishes-content">
                                            <a href="shop-details.html">
                                                <h3>Chicken Pizza</h3>
                                            </a>
                                            <div class="icon">
                                                <a href="#"> <i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star2.svg')}}" alt="icon"></div>
                                            <div class="text">Neque porro est qui dolorem ipsum quia quaed inventor
                                                veritatis et
                                                quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus
                                                quis enim
                                                var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                                simply
                                                dummy text of the printing and typesetting industry.When an unknown
                                                printer took
                                                a galley of type</div>
                                            <h6>$24.00</h6>
                                            <a href="shop-details.html" class="theme-btn style6"> Order Now <i
                                                    class="fa-regular fa-basket-shopping"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="text-center page-nav-wrap">
                            <ul>
                                <li><a class="previous" href="{{route('frontend.shop')}}"><i
                              class="fa-sharp fa-light fa-arrow-left-long"></i></a></li>
                                <li><a class="page-numbers" href="{{route('frontend.shop')}}">1</a></li>
                                <li><a class="page-numbers active" href="{{route('frontend.shop')}}">2</a></li>
                                <li><a class="page-numbers" href="{{route('frontend.shop')}}">3</a></li>
                                <li><a class="page-numbers" href="{{route('frontend.shop')}}">...</a></li>
                                <li><a class="next" href="{{route('frontend.shop')}}"><i
                                class="fa-sharp fa-light fa-arrow-right-long"></i></a></li>
                            </ul>
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
            <div class="shape2 d-none d-xxl-block"><img src="{{ asset('assets/frontend/assets/img/shape/footerShape1_2.png')}}" alt="shape"></div>
            <div class="shape3 d-none d-xxl-block"><img src="{{ asset('assets/frontend/assets/img/shape/footerShape1_3.png')}}" alt="shape"></div>
            <div class="shape4 d-none d-xxl-block"><img src="{{ asset('assets/frontend/assets/img/shape/footerShape1_4.png')}}" alt="shape"></div>
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
                                    <img src="{{ asset('assets/frontend/assets/img/logo/logoWhite.svg')}}" alt="logo-img">
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
