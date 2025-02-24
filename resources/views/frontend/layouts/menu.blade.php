    <!-- Header Section Start -->
    <header id="header-section"class="header-section">
        <div class="black-bg"></div>
        <div class="red-bg"></div>
        <div class="container-fluid">
            <div class="main-header-wrapper">
                <div class="logo-image">
                    <a href="index.html">
                        <img src="{{ asset('assets/frontend/assets/img/logo/logo.svg')}}" alt="img">
                    </a>
                </div>
                <div class="main-header-items">
                    <div class="header-top-wrapper">
                        <span><i class="fa-regular fa-clock"></i> 09:00 am - 06:00 pm</span>
                        <div class="social-icon d-flex align-items-center">
                            <span>Follow Us:</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                        <div class="mr-50 language-buttons me-2">
                            <a class="btn btn-primary lang-btn"
                                href="{{ route('frontend.languageSet', ['lang' => 'en']) }}">En</a>
                            <a class="btn btn-primary lang-btn"
                                href="{{ route('frontend.languageSet', ['lang' => 'bn']) }}">Bn</a>
                        </div>
                    </div>
                    <div id="header-sticky" class="header-1">
                        <div class="mega-menu-wrapper">
                            <div class="header-main">
                                <div class="logo">
                                    <a href="index.html" class="header-logo">
                                        <img src="{{ asset('assets/frontend/assets/img/logo/logo.svg')}}" alt="logo-img">
                                    </a>
                                </div>
                                <div class="header-left">
                                    <div class="mean__menu-wrapper">
                                        <div class="main-menu">
                                            <nav id="mobile-menu">
                                                <ul>
                                                    <li class="has-dropdown active menu-thumb">
                                                        <a href="{{route('frontend.home')}}">
                                                            {{translate('Home','হোম')}}
                                                            <i class="fa-regular fa-plus"></i>
                                                        </a>
                                                        <ul class="submenu has-homemenu">
                                                            <li>
                                                                <div class="homemenu-items">
                                                                    <div class="homemenu">
                                                                        <div class="homemenu-thumb">
                                                                            <img src="{{ asset('assets/frontend/assets/img/header/home1.jpg')}}"
                                                                                alt="img">
                                                                            <div class="demo-button">
                                                                                <a href="index.html" class="theme-btn">
                                                                                    Multi Page
                                                                                </a>
                                                                                <a href="index-one-page.html"
                                                                                    class="theme-btn">
                                                                                    One Page
                                                                                </a>
                                                                                <a href="index-dark.html"
                                                                                    class="theme-btn">
                                                                                    Dark Page
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center homemenu-content">
                                                                            <h4 class="homemenu-title">
                                                                                Home 01
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="homemenu">
                                                                        <div class="homemenu-thumb mb-15">
                                                                            <img src="{{ asset('assets/frontend/assets/img/header/home2.jpg')}}"
                                                                                alt="img">
                                                                            <div class="demo-button">
                                                                                <a href="index-2.html"
                                                                                    class="theme-btn">
                                                                                    Multi Page
                                                                                </a>
                                                                                <a href="index-two-page.html"
                                                                                    class="theme-btn">
                                                                                    One Page
                                                                                </a>
                                                                                <a href="index-2-dark.html"
                                                                                    class="theme-btn">
                                                                                    Dark Page
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center homemenu-content">
                                                                            <h4 class="homemenu-title">
                                                                                Home 02
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="homemenu">
                                                                        <div class="homemenu-thumb mb-15">
                                                                            <img src="{{ asset('assets/frontend/assets/img/header/home3.jpg')}}"
                                                                                alt="img">
                                                                            <div class="demo-button">
                                                                                <a href="index-3.html"
                                                                                    class="theme-btn">
                                                                                    Multi Page
                                                                                </a>
                                                                                <a href="index-three-page.html"
                                                                                    class="theme-btn">
                                                                                    One Page
                                                                                </a>
                                                                                <a href="index-3-dark.html"
                                                                                    class="theme-btn">
                                                                                    Dark Page
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center homemenu-content">
                                                                            <h4 class="homemenu-title">
                                                                                Home 03
                                                                            </h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown active d-xl-none">
                                                        <a href="index.html" class="border-none">
                                                            Home
                                                            <i class="fa-regular fa-plus"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="index.html">Home 01</a></li>
                                                            <li><a href="index-2.html">Home 02</a></li>
                                                            <li><a href="index-3.html">Home 03</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="about.html">
                                                            {{translate('About Us','আমাদের সম্পর্কে')}}
                                                            <i class="fa-regular fa-plus"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{route('frontend.aboutUs1')}}">{{translate('About Us 01','আমাদের সম্পর্কে ০১')}}</a></li>
                                                            <li><a href="{{route('frontend.aboutUs2')}}">{{translate('About Us 02','আমাদের সম্পর্কে ০২')}}</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('frontend.shop')}}">
                                                            {{translate('Shop','দোকান')}}
                                                            <i class="fa-regular fa-plus"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{route('frontend.shop')}}">{{translate('Shop','দোকান')}}</a></li>
                                                            <li><a href="{{route('frontend.shop_right_sidebar')}}">{{translate('Shop Right Sidebar','ডান সাইডবারে কেনাকাটা করুন')}}</a>
                                                            </li>
                                                            <li><a href="{{route('frontend.shop_list')}}">{{translate('Shop List','দোকানের তালিকা')}}</a></li>
                                                            <li><a href="{{route('frontend.shop_list_right_sidebar')}}">{{translate('Shop List Right Sidebar','দোকানের তালিকার ডান সাইডবার')}}</a></li>
                                                            <li><a href="{{route('frontend.shop_details')}}">{{translate('Shop Details','দোকানের বিবরণ')}}</a></li>
                                                            <li><a href="{{route('frontend.cart')}}">{{translate('Cart List','কার্টের তালিকা')}}</a></li>
                                                            <li><a href="{{route('frontend.checkout')}}">{{translate('Checkout','চেকআউট')}}</a></li>
                                                            <li><a href="{{route('frontend.wishlist')}}">{{translate('Wishlist','ইচ্ছা তালিকা')}}</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="#">
                                                            {{translate('Pages','পাতা')}}
                                                            <i class="fa-regular fa-plus"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li class="has-dropdown">
                                                                <a href="{{route('frontend.chef')}}">
                                                                    Chef
                                                                    <i class="fas fa-angle-down"></i>
                                                                </a>
                                                                <ul class="submenu">
                                                                    <li><a href="{{route('frontend.chef')}}">Chef</a></li>
                                                                    <li><a href="chef-details.html">Chef Details 01</a>
                                                                    </li>
                                                                    <li><a href="chef-details2.html">Chef Details 02</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-dropdown">
                                                                <a href="menu.html">
                                                                    Food Menu
                                                                    <i class="fas fa-angle-down"></i>
                                                                </a>
                                                                <ul class="submenu">
                                                                    <li><a href="menu.html">Food Menu 01</a></li>
                                                                    <li><a href="menu2.html">Food Menu 02</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="{{route('frontend.gallery')}}">Gallery</a></li>
                                                            <li class="has-dropdown">
                                                                <a href="{{route('frontend.services')}}">
                                                                    Services
                                                                    <i class="fas fa-angle-down"></i>
                                                                </a>
                                                                <ul class="submenu">
                                                                    <li><a href="{{route('frontend.services')}}">Services</a> </li>
                                                                    <li><a href="service-details.html">Service
                                                                            Details</a></li>
                                                                </ul>
                                                            </li>

                                                            <li><a href="testimonials.html">Testimonials</a></li>
                                                            <li><a href="reservation.html">Reservation</a></li>
                                                            <li><a href="{{route('frontend.faq')}}">Faq's</a></li>
                                                            <li><a href="account.html">My Account</a></li>
                                                            <li><a href="404.html">404 Page</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('frontend.blog')}}">
                                                            {{translate('Blog','ব্লগ')}}
                                                            <i class="fa-regular fa-plus"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{route('frontend.blog')}}">Blog</a></li>
                                                            <li><a href="{{route('frontend.blog_standard')}}">Blog Standard</a></li>
                                                            <li><a href="{{route('frontend.blog_left_sidebar')}}">Blog Left Sidebar</a>
                                                            </li>
                                                            <li><a href="{{route('frontend.blog_details')}}">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                            {{translate('Contact Us','যোগাযোগ করুন')}}
                                                            <i class="fa-regular fa-plus"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="{{route('frontend.contact')}}">Contact Us 01</a></li>
                                                            <li><a href="{{route('frontend.contact2')}}">Contact Us 02</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-right d-flex justify-content-end align-items-center">
                                    <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                                    <div class="header__cart">
                                        <a href="#"> <i class="fa-sharp fa-regular fa-cart-shopping"></i> </a>
                                        <div class="header__right__dropdown__wrapper">
                                            <div class="header__right__dropdown__inner">
                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="{{ asset('assets/frontend/assets/img/blog/blogRecentThumb3_1.png')}}"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.html">Fried Chicken</a>
                                                        <p>1 x <span class="price">$ 80.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>

                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="{{ asset('assets/frontend/assets/img/blog/blogRecentThumb3_2.png')}}"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.html">Fried Noodles</a>
                                                        <p>1 x <span class="price">$ 60.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>

                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="#">
                                                            <img loading="lazy"
                                                                src="{{ asset('assets/frontend')}}assets/img/blog/blogRecentThumb3_3.png"
                                                                alt="photo">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="shop.html">Special Pasta</a>
                                                        <p>1 x <span class="price">$ 70.00</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="#"><i class="icofont-close-line"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="dropdown__price">Total: <span>$1,100.00</span>
                                            </p>
                                            <div class="header__right__dropdown__button">
                                                <a href="cart.html" class="mb-2 theme-btn">View Cart</a>
                                                <a href="checkout.html" class="theme-btn style3">Checkout</a>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="theme-btn" href="menu.html">{{translate('ORDER NOW','অর্ডার করুন')}} <i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                    <div class="my-auto header__hamburger d-xl-block">
                                        <div class="sidebar__toggle">
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
