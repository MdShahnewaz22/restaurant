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
                                <img src="{{ asset('assets/frontend/assets/img/header/04.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/05.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/frontend/assets/img/header/05.jpg')}}" alt="gallery-img">
                            </a>
                            <a href="assets/frontend/assets/img/header/06.jpg" class="offcanvas-image img-popup">
                                <img src="{{ asset('assets/frontend/assets/img/header/06.jpg')}}" alt="gallery-img">
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
                            <h1 class="breadcumb-title">Shop details</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{route('frontend.home')}}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Shop details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Details Section S T A R T -->
    <div class="shop-details-section section-padding fix">
        <div class="shop-details-wrapper style1">
            <div class="container">
                <div class="bg-white shop-details">
                    <div class="container">
                        <div class="row gx-60">
                            <div class="col-lg-6">
                                <div class="product-big-img bg-color2">
                                    <div class="dishes-thumb">
                                        <img src="{{ asset('assets/frontend/assets/img/dishes/dishes3_1.png')}}" alt="thumb">
                                        <div class="circle-shape d-none d-md-block"><img class="cir36"
                                                src="{{ asset('assets/frontend/assets/img/food-items/circleShape2.png')}}" alt="shape"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-about">
                                    <div class="title-wrapper">
                                        <h2 class="product-title">Chicken Pizza</h2>
                                        <div class="price">$69</div>
                                    </div>

                                    <div class="product-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">1</span> customer rating</span></div>
                                        <a href="shop-details.html" class="woocommerce-review-link">(<span
                                                class="count">2</span> customer reviews)</a>
                                    </div>
                                    <p class="text">Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des
                                        mauris commodo venenatis ligula commodo leez sed blandit convallis dignissim
                                        onec vel pellentesque neque.</p>

                                    <div class="actions">
                                        <div class="quantity">
                                            <p>Quantity</p>

                                            <div class="qty-wrapper">
                                                <input type="number" class="qty-input" step="1" min="1" max="100"
                                                    name="quantity" value="1" title="Qty">
                                                <button class="quantity-plus qty-btn"><i
                                                        class="fa-solid fa-plus"></i></button>
                                                <button class="quantity-minus qty-btn"><i
                                                        class="fa-solid fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <a href="cart.html" class="theme-btn">Add to Cart<i
                                                class="text-white bg-transparent fa-regular fa-cart-shopping"></i></a>
                                        <a href="wishlist.html" class="border-0 theme-btn style5">ADD TO wishlist<i
                                                class="fa-sharp fa-solid fa-heart"></i></a>
                                    </div>
                                    <div class="share">
                                        <h6>share with friends</h6>
                                        <ul class="social-media">
                                            <li> <a href="https://www.facebook.com/"> <i
                                                        class="fa-brands fa-facebook-f"></i> </a> </li>
                                            <li> <a href="https://www.youtube.com/"> <i class="fa-brands fa-youtube"></i>
                                                </a> </li>
                                            <li> <a href="https://www.x.com/"> <i class="fa-brands fa-twitter"></i> </a>
                                            </li>
                                            <li> <a href="https://www.instagram.com/"> <i
                                                        class="fa-brands fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product-description">
                                    <h3>product Description</h3>
                                    <div class="desc">
                                        <p>Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi
                                            architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim
                                            var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is
                                            simply dummy text of the printing and typesetting industry.
                                        </p> <br>
                                        <p>When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into electronic typesetting, remaining essentially unchanged. Aelltes port
                                            lacus quis enim var sed efficitur turpis gilla sed sit
                                            amet finibus eros. Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes
                                            port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus
                                            eros. Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.</p>
                                    </div>
                                </div>
                                <div class="product-review">
                                    <h3>02 Reviews</h3>
                                    <ul class="comment-list">
                                        <li class="review comment-item">
                                            <div class="post-comment">
                                                <div class="comment-avater">
                                                    <img src="{{ asset('assets/frontend/assets/img/blog/comment-author1.png')}}" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <h4 class="name">Masirul Islam</h4>
                                                    <div class="commented-on">March 20, 2024 at 2:37 pm </div>
                                                    <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star3.svg')}}" alt="icon">
                                                    </div>
                                                    <p class="text">Neque porro est qui dolorem ipsum quia quaed
                                                        inventor veritatis et quasi architecto beatae vitae dicta sunt
                                                        explicabo. Aelltes port lacus quis enim var sed efficitur turpis
                                                        gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="review comment-item">
                                            <div class="post-comment">
                                                <div class="comment-avater">
                                                    <img src="{{ asset('assets/frontend/assets/img/blog/comment-author2.png')}}" alt="Comment Author">
                                                </div>
                                                <div class="comment-content">
                                                    <h4 class="name">Daniel Adam</h4>
                                                    <div class="commented-on">March 30, 2024 at 2:37 pm </div>
                                                    <div class="star"><img src="{{ asset('assets/frontend/assets/img/icon/star3.svg')}}" alt="icon">
                                                    </div>
                                                    <p class="text">Neque porro est qui dolorem ipsum quia quaed
                                                        inventor veritatis et quasi architecto beatae vitae dicta sunt
                                                        explicabo. Aelltes port lacus quis enim var sed efficitur turpis
                                                        gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-form">
                                    <div class="form-title">
                                        <h3 class="inner-title">Add a Review</h3>
                                        <p>Your email address will not be published. Required fields are marked *</p>
                                        <div class="rating">
                                            <p>Rate this product? *</p>
                                            <ul class="star">
                                                <li><i class="fa-regular fa-star"></i></li>
                                                <li><i class="fa-regular fa-star"></i></li>
                                                <li><i class="fa-regular fa-star"></i></li>
                                                <li><i class="fa-regular fa-star"></i></li>
                                                <li><i class="fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group style-white2">
                                            <input type="text" placeholder="Your Name" class="form-control">
                                            <i class="text-title far fa-user"></i>
                                        </div>
                                        <div class="col-md-6 form-group style-white2">
                                            <input type="text" placeholder="Your Email" class="form-control">
                                            <i class="text-title far fa-envelope"></i>
                                        </div>
                                        <div class="col-12 form-group style-white2">
                                            <textarea placeholder="Write a Message" class="form-control" rows="5"></textarea>
                                            <i class="text-title far fa-pencil-alt"></i>
                                        </div>

                                        <div class="col-12 form-group">
                                            <input id="reviewcheck" name="reviewcheck" type="checkbox">
                                            <label for="reviewcheck">Save my name, email, and website in this browser
                                                for the next time I comment.<span class="checkmark"></span></label>
                                        </div>
                                        <div class="mb-0 col-12 form-group">
                                            <button class="theme-btn">Post A Comment <i
                                                    class="text-white bg-transparent fa-sharp fa-regular fa-arrow-right-long"></i></button>
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

    <!-- Popular Dishes Section   S T A R T -->
    <section class="pt-0 popular-dishes-section fix section-padding">
        <div class="popular-dishes-wrapper style1">
            <div class="container">
                <div class="title-area">
                    <div class="text-center sub-title wow fadeInUp" data-wow-delay="0.5s">
                        <img class="me-1" src="{{ asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">POPULAR DISHES<img class="ms-1"
                            src="{{ asset('assets/frontend/assets/img/icon/titleIcon.svg')}}" alt="icon">
                    </div>
                    <div class="title wow fadeInUp" data-wow-delay="0.7s">
                        Best selling Dishes
                    </div>
                </div>
                <div class="dishes-card-wrap style1">
                    <div class="dishes-card style1 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="social-profile">
                            <span class="plus-btn"> <a href="#"> <i class="fa-regular fa-heart"></i></a></span>
                            <ul>
                                <li><a href="cart.html"><i class="fa-regular fa-basket-shopping-simple"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="dishes-thumb">
                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes1_1.png')}}" alt="thmb">
                        </div>
                        <a href="menu.html">
                            <h3>Chicken Fried Rice</h3>
                        </a>
                        <p>The registration fee</p>
                        <h6>$100.99</h6>
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
                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes1_2.png')}}" alt="thmb">
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
                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes1_3.png')}}" alt="thmb">
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
                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes1_4.png')}}" alt="thmb">
                        </div>
                        <a href="menu.html">
                            <h3>Chicken Noodles</h3>
                        </a>
                        <p>The registration fee</p>
                        <h6>$39.00</h6>
                    </div>
                    <div class="dishes-card style1 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="social-profile">
                            <span class="plus-btn"> <a href="#"> <i class="fa-regular fa-heart"></i></a></span>
                            <ul>
                                <li><a href="cart.html"><i class="fa-regular fa-basket-shopping-simple"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="dishes-thumb">
                            <img src="{{ asset('assets/frontend/assets/img/dishes/dishes1_5.png')}}" alt="thmb">
                        </div>
                        <a href="menu.html">
                            <h3>Grilled Chicken</h3>
                        </a>
                        <p>The registration fee</p>
                        <h6>$20.99</h6>
                    </div>
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
                                                <img class="img-fluid" src="{{ asset('assets/frontend/assets/img/dishes/dishes3_1.png')}}"
                                                    alt="thumb">
                                                <div class="circle-shape"><img class="cir36"
                                                        src="{{ asset('assets/frontend/assets/img/food-items/circleShape2.png')}}" alt="shape"></div>
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

    <!-- Footer Section    S T A R T -->
    {{-- <footer class="footer-section bg-title fix">
        <div class="footer-widgets-wrapper">
            <div class="shape1 float-bob-y d-none d-xxl-block"><img src="{{ asset('assets/frontend/assets/img/shape/footerShape1_1.png')}}"
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
