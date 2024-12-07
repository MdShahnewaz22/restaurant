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
                                <img src="{{asset('assets/frontend/assets/img/header/06.jpg" alt="gallery-img')}}">
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
                            <h1 class="breadcumb-title">Blog Details</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Details Section    S T A R T -->
    <div class="blog-details-section section-padding fix">
        <div class="container">
            <div class="blog-details-area">
                <div class="row g-5">
                    <div class="col-12 col-lg-8">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb background-image"
                                    style="background-image: url(assets/frontend/assets/img/blog/blogThumb3_1.jpg);"></div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center wow fadeInUp" data-wow-delay=".2s">
                                        <li>
                                            <i class="fa-light fa-user"></i>
                                            By Admin
                                        </li>
                                        <li>
                                            <i class="fa-light fa-comments"></i>
                                            2 Comments
                                        </li>
                                        <li>
                                            <i class="fa-regular fa-tag"></i>
                                            Fast Food Services
                                        </li>
                                    </ul>
                                    <h3 class="wow fadeInUp" data-wow-delay=".4s">
                                        Tackling the Changes of Food Industry</h3>
                                    <p class="mb-3 wow fadeInUp" data-wow-delay=".6s">
                                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis
                                        aute irure and dolor in reprehenderit.
                                    </p>
                                    <p class="mb-3 wow fadeInUp" data-wow-delay=".8s">
                                        The is ipsum dolor sit amet consectetur adipiscing elit. Fusce eleifend porta
                                        arcu In hac habitasse the is platea augue thelorem turpoi dictumst. In lacus
                                        libero faucibus at malesuada sagittis placerat eros sed istincidunt augue ac
                                        ante rutrum sed the is sodales augue consequat.
                                    </p>
                                    <p class="wow fadeInUp" data-wow-delay="1s">
                                        Nulla facilisi. Vestibulum tristique sem in eros eleifend imperdiet. Donec quis
                                        convallis neque. In id lacus pulvinar lacus, eget vulputate lectus. Ut viverra
                                        bibendum lorem, at tempus nibh mattis in. Sed a massa eget lacus consequat
                                        auctor.
                                    </p>
                                    <div class="mt-4 mb-4 hilight-text wow fadeInUp" data-wow-delay=".8s">
                                        <p>Pellentesque sollicitudin congue dolor non aliquam. Morbi volutpat, nisi vel
                                            ultricies urnacondimentum, sapien neque
                                            lobortis tortor, quis efficitur mi ipsum eu metus. Praesent eleifend orci
                                            sit
                                            amet
                                            est vehicula.
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                            viewBox="0 0 36 36" fill="none">
                                            <path
                                                d="M7.71428 20.0711H0.5V5.64258H14.9286V20.4531L9.97665 30.3568H3.38041L8.16149 20.7947L8.5233 20.0711H7.71428Z"
                                                stroke="#EB0029" />
                                            <path
                                                d="M28.2846 20.0711H21.0703V5.64258H35.4989V20.4531L30.547 30.3568H23.9507L28.7318 20.7947L29.0936 20.0711H28.2846Z"
                                                stroke="#EB0029" />
                                        </svg>
                                    </div>
                                    <p class="mt-4 mb-5 wow fadeInUp" data-wow-delay="1s">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam
                                        in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula
                                        consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis
                                        imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu.
                                        Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet.
                                        Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam
                                        condimentum, vel euismod erat placerat. In iaculis arcu eros.
                                    </p>
                                    <div class="row g-4 wow fadeInUp" data-wow-delay="1s">
                                        <div class="col-lg-6">
                                            <div class="details-image">
                                                <img src="{{asset('assets/frontend/assets/img/blog/blogThumb3_2.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="details-image">
                                                <img src="{{asset('assets/frontend/assets/img/blog/blogThumb3_3.jpg')}}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="pt-5 wow fadeInUp" data-wow-delay="1.2s">
                                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis
                                        aute irure and dolor in reprehenderit.Consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim
                                        veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in
                                        reprehenderit.
                                    </p>
                                </div>
                            </div>
                            <div class="row tag-share-wrap mb-30 wow fadeInUp" data-wow-delay=".8s">
                                <div class="col-lg-8 col-12">
                                    <div class="tagcloud">
                                        <h6 class="d-inline me-2">Tags: </h6>
                                        <a href="blog-details.html">News</a>
                                        <a class="active" href="blog-details.html">business</a>
                                        <a href="blog-details.html">marketing</a>
                                    </div>
                                </div>
                                <div class="mt-3 col-lg-4 col-12 mt-lg-0 text-lg-end wow fadeInUp"
                                    data-wow-delay="1.2s">
                                    <div class="social-share">
                                        <span class="me-3">Share:</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-area wow fadeInUp" data-wow-delay="1.2s">
                                <div class="comments-heading">
                                    <h3>02 Comments</h3>
                                </div>
                                <div class="gap-4 blog-single-comment d-flex pt-30 pb-30">
                                    <div class="image">
                                        <img src="{{asset('assets/frontend/assets/img/blog/comment-author1.png')}}" alt="image">
                                    </div>
                                    <div class="content">
                                        <div
                                            class="flex-wrap gap-2 head d-flex align-items-center justify-content-between">
                                            <div class="con">
                                                <h5><a href="blog-details.html">Albert Flores</a></h5>
                                                <span>March 20, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="btn">
                                                <a href="blog-details.html" class="reply">Reply</a>
                                            </div>
                                        </div>
                                        <p class="mt-10 mb-0">Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed
                                            sit amet finibus eros. Lorem Ipsum is simply dummy
                                        </p>
                                    </div>
                                </div>
                                <div class="gap-4 blog-single-comment d-flex pt-30 pb-30">
                                    <div class="image">
                                        <img src="{{asset('assets/frontend/assets/img/blog/comment-author2.png')}}" alt="image">
                                    </div>
                                    <div class="content">
                                        <div
                                            class="flex-wrap gap-2 head d-flex align-items-center justify-content-between">
                                            <div class="con">
                                                <h5><a href="blog-details.html">Alex Flores</a></h5>
                                                <span>March 20, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="btn">
                                                <a href="blog-details.html" class="reply">Reply</a>
                                            </div>
                                        </div>
                                        <p class="mt-10 mb-0">Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed
                                            sit amet finibus eros. Lorem Ipsum is simply dummy
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-5 comment-form-wrap wow fadeInUp" data-wow-delay="1.2s">
                                <h3>Leave a comments</h3>
                                <form action="#" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email2" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="message" id="message"
                                                    placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn">
                                                Post a Comment
                                                <i
                                                    class="text-white bg-transparent fa-sharp fa-light fa-arrow-right-long ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
                                        <button type="submit"><i
                                                class="fa-sharp fa-light fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget wow fadeInUp" data-wow-delay=".4s">
                                <div class="wid-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        <li><a href="blog-details.html">Breakfast <span>(08)</span></a></li>
                                        <li><a href="blog-details.html">Restaurant <span>(11)</span></a></li>
                                        <li class="active"><a href="blog-details.html">Dinner <span>(12)</span></a></li>
                                        <li><a href="blog-details.html">Fast Food <span>(18)</span></a></li>
                                        <li><a href="blog-details.html">Launch<span>(07)</span></a></li>
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
        </div>
    </div>


</body>

 @endsection
