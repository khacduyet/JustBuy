<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{ asset('') }}" >
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="client/css/main.css" />
    <link rel="shortcut icon" type="client/image/x-icon" href="client/image/logo.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0&appId=124776586268586&autoLogAppEvents=1" nonce="M55EyKjV"></script>
    <div class="site-wrapper" id="top">
        <div class="site-header header-3  d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-8 flex-lg-right">
                        <ul class="header-top-list">
                            <li><a href="#"><i class="icons-left fas fa-random"></i>My Compare</a>
                            </li>
                            <li class="dropdown-trigger language-dropdown"><a href="#"><i
                                        class="icons-left fas fa-heart"></i>
                                    wishlist (0)</a>
                            </li>
                            <li class="dropdown-trigger language-dropdown"><a href="#"><i
                                        class="icons-left fas fa-user"></i>
                                    My Account</a><i class="fas fa-chevron-down dropdown-arrow"></i>
                                <ul class="dropdown-box">
                                    <li> <a href="#">My Account</a></li>
                                    <li> <a href="#">Order History</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icons-left fas fa-phone"></i> Contact</a>
                            </li>
                            <li><a href="#"><i class="icons-left fas fa-share"></i> Checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="index.html" class="site-brand">
                                <img src="client/image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-search-block">
                                <input type="text" placeholder="Search entire store here">
                                <button>Search</button>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                    <div class="login-block">
                                        @if(Auth::guard('customer')->check())
                    <a href="{{route('my-account')}}" class="pr-2  c-fff">
                        <span class="d-inline-block ml-2">{{Auth::guard('customer')->user()->name}}</span>
                    </a>
                    <a href="{{route('logout')}}" class="border-left pl-2 c-fff">
                        <span class="d-inline-block ml-2">????ng xu???t</span>
                    </a>
                @else
                    <a href="{{route('login')}}" class="pr-2  c-fff">
                        <span class="d-inline-block ml-2">????ng nh???p</span>
                    </a>
                    <a href="{{route('register')}}" class="border-left pl-2 c-fff">
                        <span class="d-inline-block ml-2">????ng k??</span>
                    </a>
                @endif
                                    </div>
                                    <div class="cart-block">
                                        <div class="cart-total">
                                            <span class="text-number">
                                                1
                                            </span>
                                            <span class="text-item">
                                                Shopping Cart
                                            </span>
                                            <span class="price">
                                                ??0.00
                                                <i class="fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="cart-dropdown-block">
                                            <div class=" single-cart-block ">
                                                <div class="cart-product">
                                                    <a href="product-details.html" class="image">
                                                        <img src="client/image/products/cart-product-1.jpg" alt="">
                                                    </a>
                                                    <div class="content">
                                                        <h3 class="title"><a href="product-details.html">Kodak PIXPRO
                                                                Astro Zoom AZ421 16 MP</a></h3>
                                                        <p class="price"><span class="qty">1 ??</span> ??87.34</p>
                                                        <button class="cross-btn"><i class="fas fa-times"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" single-cart-block ">
                                                <div class="btn-block">
                                                    <a href="cart.html" class="btn">View Cart <i
                                                            class="fas fa-chevron-right"></i></a>
                                                    <a href="checkout.html" class="btn btn--primary">Check Out <i
                                                            class="fas fa-chevron-right"></i></a>
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
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        @foreach($category as $cat)     
                                        @if($cat -> parent_id == 0)                                   
                                        <li class="cat-item has-children">
                                            <a href="#">{{$cat -> name}}</a>
                                            <ul class="sub-menu">
                                                @foreach($category as $cat1)  
                                                    @if($cat -> id == ($cat1 -> parent_id))
                                                    <li><a href="#">{{$cat1 -> name}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Free Support 24/7</p>
                                    <p class="font-weight-bold number">
                                    @foreach($config as $con)
                                        @if($con->name == 'Phone')
                                        {{$con->content}}
                                        @endif
                                    @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right li-last-0">
                                    <li class="menu-item">
                                        <a href="{{route('home')}}">Home </a>
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item mega-menu">
                                        <a href="{{route('shop')}}">Shop </a>
                                    </li>
                                    <!-- About -->
                                    <li class="menu-item">
                                        <a href="{{route('about')}}">About</a>
                                    </li>
                                    <!-- Blog -->
                                    <li class="menu-item mega-menu">
                                        <a href="{{route('blog')}}">Blog </a>
                                    </li>
                                    <!-- Contact -->
                                    <li class="menu-item">
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a href="index.html" class="site-brand">
                                <img src="client/image/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-5 order-3 order-md-2">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                    @foreach($category as $cat)     
                                        @if($cat -> parent_id == 0)  
                                        <li class="cat-item has-children">
                                            <a href="#">{{$cat -> name}}</a>
                                            <ul class="sub-menu">
                                                @foreach($category as $cat1)  
                                                    @if($cat -> id == ($cat1 -> parent_id))
                                                    <li><a href="#">{{$cat1 -> name}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="cart.html" class="cart-link link-icon"><i class="ion-bag"></i></a>
                                    </li>
                                    <li class="sin-link">
                                        <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                                class="ion-navicon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class="ion-android-close"></i>
                </div>
                <div class="off-canvas-inner">
                    <!-- search box start -->
                    <div class="search-box offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here">
                            <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                    <!-- search box end -->
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                <li class="menu-item-has-children">
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li><a href="{{route('shop')}}">Shop</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <nav class="off-canvas-nav">
                        <ul class="mobile-menu menu-block-2">
                            <li class="menu-item-has-children">
                                <a href="#">My Account <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="off-canvas-bottom">
                        <div class="contact-list mb--10">
                            <a href="#" class="sin-contact">
                                <i class="fas fa-mobile-alt"></i>
                                @foreach($config as $con)
                                    @if($con->name == 'Phone')
                                    {{$con->content}}
                                    @endif
                                @endforeach
                            </a>
                            <a href="#" class="sin-contact">
                                <i class="fas fa-envelope"></i>
                                @foreach($config as $con)
                                    @if($con->name == 'Email')
                                    {{$con->content}}
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        <div class="off-canvas-social">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href="index.html" class="site-brand">
                            <img src="client/image/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                                <li class="menu-item">
                                    <a href="{{route('home')}}"> Home </a>
                                </li>
                                <!-- Shop -->
                                <li class="menu-item">
                                    <a href="{{route('shop')}}">Shop </a>
                                </li>
                                <!-- About -->
                                <li class="menu-item">
                                    <a href="{{route('about')}}">About </a>
                                </li>
                                <!-- Blog -->
                                <li class="menu-item">
                                    <a href="{{route('blog')}}">Blog </a>
                                </li>
                                <!-- Contact -->
                                <li class="menu-item">
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <!--=================================
    Brands Slider
===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">Brand Slider</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <img src="client/image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="client/image/others/brand-2.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="client/image/others/brand-3.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="client/image/others/brand-4.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="client/image/others/brand-5.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="client/image/others/brand-6.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="client/image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="client/image/others/brand-2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Footer Area
===================================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="row justify-content-between  section-padding">
                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-footer pb--40">
                        <div class="brand-footer footer-title">
                            <img src="client/image/logo--footer.png" alt="">
                        </div>
                        <div class="footer-contact">
                            <p>
                            <span class="label">Address:</span>
                                <span class="text">
                                @foreach($config as $con)
                                    @if($con->name == 'Address')
                                    {{$con->content}}
                                    @endif
                                @endforeach
                                </span>
                            </p>
                            <p>
                                <span class="label">Phone:</span>
                                <span class="text">
                                @foreach($config as $con)
                                    @if($con->name == 'Phone')
                                    {{$con->content}}
                                    @endif
                                @endforeach
                                </span>
                            </p>
                            <p>
                                <span class="label">Email:</span>
                                <span class="text">
                                @foreach($config as $con)
                                    @if($con->name == 'Email')
                                    {{$con->content}}
                                    @endif
                                @endforeach
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    <div class="single-footer pb--40">
                        <div class="footer-title">
                            <h3>Information</h3>
                        </div>
                        <ul class="footer-list normal-list">
                            <li><a href="#">Prices drop</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Best sales</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    <div class="single-footer pb--40">
                        <div class="footer-title">
                            <h3>Extras</h3>
                        </div>
                        <ul class="footer-list normal-list">
                            <li><a href="#">Delivery</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Stores</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h3>Newsletter Subscribe</h3>
                    </div>
                    <div class="newsletter-form mb--30">
                        <form action="https://demo.hasthemes.com/pustok-preview/pustok/php/mail.php">
                            <input type="email" class="form-control" placeholder="Enter Your Email Address Here...">
                            <button class="btn btn--primary w-100">Subscribe</button>
                        </form>
                    </div>
                    <div class="social-block">
                        <h3 class="title">STAY CONNECTED</h3>
                        <ul class="social-list list-inline">
                            <li class="single-social facebook"><a href="#"><i class="ion ion-social-facebook"></i></a>
                            </li>
                            <li class="single-social twitter"><a href="#"><i class="ion ion-social-twitter"></i></a></li>
                            <li class="single-social google"><a href="#"><i
                                        class="ion ion-social-googleplus-outline"></i></a></li>
                            <li class="single-social youtube"><a href="#"><i class="ion ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright-heading">Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam
                    vel magna volutpat, posuere eros</p>
                <a href="#" class="payment-block">
                    <img src="client/image/icon/payment.png" alt="">
                </a>
                <p class="copyright-text">Copyright ?? 2021 <a href="#" class="author">JustBuy</a>. All Right Reserved.
                    <br>
                    Design By JustBuy</p>
            </div>
        </div>
    </footer>
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script src="client/js/plugins.js"></script>
    <script src="client/js/ajax-mail.js"></script>
    <script src="client/js/custom.js"></script>
</body>

</html>