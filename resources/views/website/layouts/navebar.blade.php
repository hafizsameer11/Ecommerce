<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper home-one">

        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="login-register-area">
                                <ul>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a> </li>
                                        <li> <a href="#" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                        <li> <a href="#" title="behance"><i class="fa fa-behance"></i></a> </li>
                                        <li> <a href="#" title="rss"><i class="fa fa-rss"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="cart-currency-area login-register-area text-end">
                                <ul>
                                    <li>
                                        <div class="header-currency">
                                            <select>
                                                <option value="1">USD</option>
                                                <option value="2">Pound</option>
                                                <option value="3">Euro</option>
                                                <option value="4">Dinar</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-cart">
                                            <div class="cart-icon">
                                                <a href="{{ route('cart.view') }}">
                                                    Cart <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <span>{{ $cartCount ?? 0 }}</span>
                                            </div>
                                            <div class="cart-content-wraper">
                                                @forelse($cartItems as $id => $item)
                                                    <div class="cart-single-wraper">
                                                        <div class="cart-img">
                                                            <a href="#"><img src="{{ asset('uploads/products/' . $item['image']) }}" alt=""></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <div class="cart-name"><a href="#">{{ $item['name'] }}</a></div>
                                                            <div class="cart-price">${{ number_format($item['price'], 2) }}</div>
                                                            <div class="cart-qty">Qty: <span>{{ $item['quantity'] }}</span></div>
                                                        </div>
                                                        <div class="remove">
                                                            <a href="{{ route('cart.remove', $id) }}"><i class="zmdi zmdi-close"></i></a>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="cart-single-wraper">
                                                        <p class="text-center">Your cart is empty</p>
                                                    </div>
                                                @endforelse

                                                <div class="cart-subtotal">Subtotal: <span>${{ number_format($cartTotal, 2) }}</span></div>
                                                <div class="cart-check-btn">
                                                    <div class="view-cart">
                                                        <a class="btn-def" href="{{ route('cart.view') }}">View Cart</a>
                                                    </div>
                                                    <div class="check-btn">
                                                        <a class="btn-def" href="{{ route('checkout') }}">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="logo ptb-20"><a href="index.html">
                                        <img src="{{ asset('assets/website/images/logo/logo.png') }}"
                                            alt="main logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-10 d-none d-md-block">
                                <nav id="primary-menu">
                                    @inject('categoryModel', 'App\Models\Category')

                                    @php
                                        $categories = $categoryModel->with('subcategories')->get();
                                    @endphp

                                    <ul class="main-menu">
                                        <li class="current"><a class="active" href="{{ route('home') }}">Home</a>
                                        </li>
                                        @foreach ($categories as $category)
                                            <li class="mega-parent pos-rltv">
                                                <a
                                                    href="{{ route('category.products', ['id' => $category->id]) }}">{{ $category->name }}</a>

                                                @if ($category->subcategories->isNotEmpty())
                                                    <div class="mega-menu-area mma-800">
                                                        <ul class="single-mega-item">
                                                            <li class="menu-title uppercase">{{ $category->name }}</li>

                                                            @foreach ($category->subcategories as $sub)
                                                                <li>
                                                                    <a
                                                                        href="{{ route('subcategory.products', ['id' => $sub->id]) }}">
                                                                        {{ $sub->name }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>

                                                        {{-- Optional Banner --}}
                                                        <div class="mega-banner-img">
                                                            <a href="#">
                                                                <img src="{{ asset('images/banner/banner-fashion-02.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </li>
                                        @endforeach



                                        <li><a href="{{ route('about') }}">ABOUT</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="search-box global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <form action="#">
                                                <div class="input-box">
                                                    <input class="single-input" placeholder="Search anything"
                                                        type="text">
                                                    <button class="src-btn"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- mobile-menu-area start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li><a href="index.html">Home</a>
                                                        <ul>
                                                            <li><a class="active" href="index.html">Home One</a></li>
                                                            <li><a href="index-2.html">Home Two</a></li>
                                                            <li><a href="index-boxed-01.html">Home Three (Boxed)</a>
                                                            </li>
                                                            <li><a href="index-boxed-02.html">Home Four (Boxed)</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Man</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.html">Shirt 01</a></li>
                                                            <li><a href="shop.html">Shirt 02</a></li>
                                                            <li><a href="shop.html">Shirt 03</a></li>
                                                            <li><a href="shop.html">Shirt 04</a></li>
                                                            <li><a href="shop.html">Pant 01</a></li>
                                                            <li><a href="shop.html">Pant 02</a></li>
                                                            <li><a href="shop.html">Pant 03</a></li>
                                                            <li><a href="shop.html">Pant 04</a></li>
                                                            <li><a href="shop.html">T-Shirt 01</a></li>
                                                            <li><a href="shop.html">T-Shirt 02</a></li>
                                                            <li><a href="shop.html">T-Shirt 03</a></li>
                                                            <li><a href="shop.html">T-Shirt 04</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Shop</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.html">Sharee 01</a></li>
                                                            <li><a href="shop.html">Sharee 02</a></li>
                                                            <li><a href="shop.html">Sharee 03</a></li>
                                                            <li><a href="shop.html">Sharee 04</a></li>
                                                            <li><a href="shop.html">Sharee 05</a></li>
                                                            <li><a href="shop.html">Lahenga 01</a></li>
                                                            <li><a href="shop.html">Lahenga 02</a></li>
                                                            <li><a href="shop.html">Lahenga 03</a></li>
                                                            <li><a href="shop.html">Lahenga 04</a></li>
                                                            <li><a href="shop.html">Lahenga 05</a></li>
                                                            <li><a href="shop.html">Sandel 01</a></li>
                                                            <li><a href="shop.html">Sandel 02</a></li>
                                                            <li><a href="shop.html">Sandel 03</a></li>
                                                            <li><a href="shop.html">Sandel 04</a></li>
                                                            <li><a href="shop.html">Sandel 05</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shortcode</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shortcode-banner.html">shortcode-banner</a>
                                                            </li>
                                                            <li><a
                                                                    href="shortcode-best-top-on-sale-slider.html">too-on-sale</a>
                                                            </li>
                                                            <li><a href="shortcode-blog-item.html">Short
                                                                    Blog Item</a></li>
                                                            <li><a href="shortcode-brand-prodcut.html">Brand
                                                                    Product</a>
                                                            </li>
                                                            <li><a href="shortcode-brand-slider.html">Brand Slider</a>
                                                            </li>

                                                            <li><a href="shortcode-breadcrumb.html">Breadcrumb</a></li>
                                                            <li><a href="shortcode-related-product.html">Related
                                                                    Product</a></li>
                                                            <li><a href="shortcode-service.html">Service</a></li>
                                                            <li><a href="shortcode-skill.html">Skill</a>
                                                            </li>
                                                            <li><a href="shortcode-slider.html">Slider</a></li>

                                                            <li><a href="shortcode-team.html">Team</a>
                                                            </li>
                                                            <li><a href="shortcode-testimonial.html">Testimonial</a>
                                                            </li>
                                                            <li><a href="shortcode-why-choose-us.html">Why Choose
                                                                    Us</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li> <a href="#">Pages</a>
                                                        <ul class="single-mega-item coloum-4">
                                                            <li><a href="about-us.html">About-us</a>
                                                            </li>
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-right.html">Blog-Right</a>
                                                            </li>
                                                            <li><a href="single-blog.html">Single
                                                                    Blog</a></li>
                                                            <li><a href="single-blog-right.html">Single
                                                                    Blog Right</a></li>
                                                            <li><a href="blog-full.html">Blog-Fullwidth</a></li>
                                                            <li class="menu-title uppercase">pages-02</li>
                                                            <li><a href="blog-full-right.html">Blog Ful
                                                                    Rightl</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a>
                                                            </li>
                                                            <li><a href="compare.html">Compare</a></li>
                                                            <li><a href="complete-order.html">Complete
                                                                    Order</a></li>
                                                            <li><a href="contact-us.html">Contact US</a>
                                                            </li>
                                                            <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="my-account.html">My Account</a>
                                                            </li>
                                                            <li><a href="shop-full-grid.html">Shop Full
                                                                    Grid</a></li>
                                                            <li><a href="shop-full-list.html">Shop Full
                                                                    List</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">Shop List
                                                                    Right</a></li>
                                                            <li><a href="shop-list.html">Shop List</a>
                                                            </li>
                                                            <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="shop-right-sidebar.html">Shop
                                                                    Right</a></li>
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="single-product.html">Single
                                                                    Prodcut</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about-us.html">about</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
