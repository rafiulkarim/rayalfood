<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Food Bank - {{ $title }}</title>
    <link rel="icon" type="image/png" href="https://img.icons8.com/bubbles/50/000000/hamburger.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="vendor/fontawesome-5.6.1/css/all.min.css">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="fonts/stroyka/stroyka.css">
    @yield('header_script')
</head>

<body>
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div>
<!-- quickview-modal / end -->
<!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="{{ route('home') }}" class="mobile-links__item-link">Home</a>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Baby Food</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-list.html" class="mobile-links__item-link">Blog List</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post.html" class="mobile-links__item-link">Post Page</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Adult Food</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-list.html" class="mobile-links__item-link">Blog List</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post.html" class="mobile-links__item-link">Post Page</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Aged Food</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-list.html" class="mobile-links__item-link">Blog List</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post.html" class="mobile-links__item-link">Post Page</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a data-collapse-trigger class="mobile-links__item-link">My account</a>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a data-collapse-trigger class="mobile-links__item-link">{{ route('account') }}</a>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a data-collapse-trigger class="mobile-links__item-link">{{ route('account') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- mobilemenu / end -->
<!-- site -->
<div class="site">
    <!-- mobile site__header -->
    <header class="site__header d-lg-none">
        <div class="mobile-header mobile-header--sticky mobile-header--stuck">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button">
                            <svg width="18px" height="14px">
                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                            </svg>
                        </button>

                        <div class="mobile-header__search">
                            <form class="mobile-header__search-form" action="#">
                                <input class="mobile-header__search-input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                <button class="mobile-header__search-button mobile-header__search-button--submit" type="submit">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg>
                                </button>
                                <button class="mobile-header__search-button mobile-header__search-button--close" type="button">
                                    <svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#cross-20"></use>
                                    </svg>
                                </button>
                                <div class="mobile-header__search-body"></div>
                            </form>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-sm-none">
                                <button class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px"><use xlink:href="images/sprite.svg#search-20"></use></svg></span></button>
                            </div>
                            <div class="indicator indicator--mobile d-sm-flex d-none"><a href="wishlist.html" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px"><use xlink:href="images/sprite.svg#heart-20"></use></svg> <span class="indicator__value">0</span></span></a></div>
                            <div class="indicator indicator--mobile"><a href="cart.html" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px"><use xlink:href="images/sprite.svg#cart-20"></use></svg> <span class="indicator__value">3</span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- mobile site__header / end -->
    <!-- desktop site__header -->
    <header class="site__header d-lg-block d-none">
        <div class="site-header">
            <!-- .topbar -->
            <div class="site-header__topbar topbar">
                <div class="topbar__container container">
                    <div class="topbar__row">
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="about-us.html">About Us</a></div>
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="contact-us.html">Contacts</a></div>
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Store Location</a></div>
                        <div class="topbar__item topbar__item--link"><a class="topbar-link" href="track-order.html">Track Order</a></div>
                        <div class="topbar__spring"></div>
                        <div class="topbar__item">
                            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="{{ route('logout') }}">Log out</a></div>
                            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="">{{ Auth::user()->name }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .topbar / end -->
            <div class="site-header__nav-panel">
                <div class="nav-panel">
                    <div class="nav-panel__container container">
                        <div class="nav-panel__row">
                            <div class="nav-panel__logo">
                                <a href="{{ route('home') }}">
                                    <img src="https://img.icons8.com/bubbles/80/000000/hamburger.png"/>
                                </a>
                            </div>
                            <!-- .nav-links -->
                            <div class="nav-panel__nav-links nav-links">
                                <ul class="nav-links__list">
                                    <li class="nav-links__item nav-links__item--with-submenu"><a href="{{ route('home') }}"><span>Home </span></a>
                                    </li>
                                    <li class="nav-links__item nav-links__item--with-submenu"><a href="blog-classic.html"><span>Baby Food <svg class="nav-links__arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg></span></a>
                                        <div class="nav-links__menu">
                                            <!-- .menu -->
                                            <ul class="menu menu--layout--classic">
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="post.html">Post Page</a></li>
                                                <li><a href="post-without-sidebar.html">Post Without Sidebar</a></li>
                                            </ul>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item nav-links__item--with-submenu"><a href="blog-classic.html"><span>Adult Food <svg class="nav-links__arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg></span></a>
                                        <div class="nav-links__menu">
                                            <!-- .menu -->
                                            <ul class="menu menu--layout--classic">
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="post.html">Post Page</a></li>
                                                <li><a href="post-without-sidebar.html">Post Without Sidebar</a></li>
                                            </ul>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item nav-links__item--with-submenu"><a href="blog-classic.html"><span>Aged Food <svg class="nav-links__arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg></span></a>
                                        <div class="nav-links__menu">
                                            <!-- .menu -->
                                            <ul class="menu menu--layout--classic">
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="post.html">Post Page</a></li>
                                                <li><a href="post-without-sidebar.html">Post Without Sidebar</a></li>
                                            </ul>
                                            <!-- .menu / end -->
                                        </div>
                                    </li>
                                    <li class="nav-links__item"><a href="contact-us.html"><span>Contact Us</span></a></li>

                                </ul>
                            </div>
                            <!-- .nav-links / end -->
                            <div class="nav-panel__indicators">
                                <div class="indicator indicator--trigger--click">
                                    <button type="button" class="indicator__button"><span class="indicator__area"><svg class="indicator__icon" width="20px" height="20px"><use xlink:href="images/sprite.svg#search-20"></use></svg> <svg class="indicator__icon indicator__icon--open" width="20px" height="20px"><use xlink:href="images/sprite.svg#cross-20"></use></svg></span></button>
                                    <div class="indicator__dropdown">
                                        <div class="drop-search">
                                            <form action="#" class="drop-search__form">
                                                <input class="drop-search__input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off">
                                                <button class="drop-search__button drop-search__button--submit" type="submit">
                                                    <svg width="20px" height="20px">
                                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="indicator"><a href="wishlist.html" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px"><use xlink:href="images/sprite.svg#heart-20"></use></svg> <span class="indicator__value">0</span></span></a></div>
                                <div class="indicator indicator--trigger--click"><a href="cart.html" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px"><use xlink:href="images/sprite.svg#cart-20"></use></svg> <span class="indicator__value">3</span></span></a>
                                    <div class="indicator__dropdown">
                                        <!-- .dropcart -->
                                        <div class="dropcart">
                                            <div class="dropcart__products-list">
                                                <div class="dropcart__product">
                                                    <div class="dropcart__product-image">
                                                        <a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="dropcart__product-info">
                                                        <div class="dropcart__product-name"><a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a></div>
                                                        <ul class="dropcart__product-options">
                                                            <li>Color: Yellow</li>
                                                            <li>Material: Aluminium</li>
                                                        </ul>
                                                        <div class="dropcart__product-meta"><span class="dropcart__product-quantity">2</span> x <span class="dropcart__product-price">$699.00</span></div>
                                                    </div>
                                                    <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                        <svg width="10px" height="10px">
                                                            <use xlink:href="images/sprite.svg#cross-10"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="dropcart__product">
                                                    <div class="dropcart__product-image">
                                                        <a href="product.html"><img src="images/products/product-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="dropcart__product-info">
                                                        <div class="dropcart__product-name"><a href="product.html">Undefined Tool IRadix DPS3000SY 2700 watts</a></div>
                                                        <div class="dropcart__product-meta"><span class="dropcart__product-quantity">1</span> x <span class="dropcart__product-price">$849.00</span></div>
                                                    </div>
                                                    <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                        <svg width="10px" height="10px">
                                                            <use xlink:href="images/sprite.svg#cross-10"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="dropcart__product">
                                                    <div class="dropcart__product-image">
                                                        <a href="product.html"><img src="images/products/product-5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="dropcart__product-info">
                                                        <div class="dropcart__product-name"><a href="product.html">Brandix Router Power Tool 2017ERXPK</a></div>
                                                        <ul class="dropcart__product-options">
                                                            <li>Color: True Red</li>
                                                        </ul>
                                                        <div class="dropcart__product-meta"><span class="dropcart__product-quantity">3</span> x <span class="dropcart__product-price">$1,210.00</span></div>
                                                    </div>
                                                    <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                        <svg width="10px" height="10px">
                                                            <use xlink:href="images/sprite.svg#cross-10"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="dropcart__totals">
                                                <table>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td>$5,877.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping</th>
                                                        <td>$25.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tax</th>
                                                        <td>$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td>$5,902.00</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="dropcart__buttons"><a class="btn btn-secondary" href="cart.html">View Cart</a> <a class="btn btn-primary" href="checkout.html">Checkout</a></div>
                                        </div>
                                        <!-- .dropcart / end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- desktop site__header / end -->
    <!-- site__body -->
    <div class="site__body">
        <!-- .block-slideshow -->
        <div class="block-slideshow block-slideshow--layout--full block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @yield('slider')
                    </div>
                </div>
            </div>
        </div>
        <!-- .block-slideshow / end -->
        <!-- .block-features -->
        <div class="block block-features block-features--layout--boxed">
            @yield('block_feature')
        </div>
        @yield('content')
    </div>
    <!-- site__body / end -->
    <!-- site__footer -->
    <footer class="site__footer">
        <div class="site-footer">
            <div class="container">
                <div class="site-footer__widgets">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="site-footer__widget footer-contacts">
                                <h5 class="footer-contacts__title">Contact Us</h5>
                                <div class="footer-contacts__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.</div>
                                <ul class="footer-contacts__contacts">
                                    <li><i class="footer-contacts__icon fas fa-globe-americas"></i> 715 Fake Street, New York 10021 USA</li>
                                    <li><i class="footer-contacts__icon far fa-envelope"></i> stroyka@example.com</li>
                                    <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> (800) 060-0730, (800) 060-0730</li>
                                    <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 10:00pm - 7:00pm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">Information</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">About Us</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Delivery Information</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Privacy Policy</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Brands</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Contact Us</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Returns</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <div class="site-footer__widget footer-links">
                                <h5 class="footer-links__title">My Account</h5>
                                <ul class="footer-links__list">
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Store Location</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Order History</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Wish List</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Newsletter</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Specials</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Gift Certificates</a></li>
                                    <li class="footer-links__item"><a href="#" class="footer-links__link">Affiliate</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="site-footer__widget footer-newsletter">
                                <h5 class="footer-newsletter__title">Newsletter</h5>
                                <div class="footer-newsletter__text">Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at lacinia.</div>
                                <form action="#" class="footer-newsletter__form">
                                    <label class="sr-only" for="footer-newsletter-address">Email Address</label>
                                    <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email Address...">
                                    <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button>
                                </form>
                                <div class="footer-newsletter__text footer-newsletter__text--social">Follow us on social networks</div>
                                <ul class="footer-newsletter__social-links">
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--facebook"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--twitter"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--youtube"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--instagram"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li class="footer-newsletter__social-link footer-newsletter__social-link--rss"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fas fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="site-footer__copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                    <div class="site-footer__payments"><img src="images/payments.png" alt=""></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- site__footer / end -->
</div>
<!-- site / end -->

    <!-- js -->
    <script src="vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="js/number.js"></script>
    <script src="js/main.js"></script>
    <script src="vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script src="{{ asset('/js/jquery.validate.js') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
    @yield('footer_script')
</body>

</html>
