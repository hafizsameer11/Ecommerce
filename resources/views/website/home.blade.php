@extends('website.layouts.main')


@section('content')
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Body main wrapper start -->

    <!-- End of header area -->

    <!--slider area start-->
    <div class="slider-area pos-rltv carosule-pagi cp-line">
        <div class="active-slider">
            <div class="single-slider pos-rltv">
                <div class="slider-img"><img src="{{ asset('assets/website/images/slider/slider01.webp') }}" alt="">
                </div>
                <div class="slider-content pos-abs">
                    <h4>Best Collection</h4>
                    <h1 class="uppercase pos-rltv underline">exclusive Fashion 2022</h1>
                    <a href="#" class="btn-def btn-white">Shop Now</a>
                </div>
            </div>
            <div class="single-slider pos-rltv">
                <div class="slider-img"><img src="{{ asset('assets/website/images/slider/slider02.webp') }}" alt="">
                </div>
                <div class="slider-content pos-abs">
                    <h4>Best Collection</h4>
                    <h1 class="uppercase pos-rltv underline">exclusive Fashion 2022</h1>
                    <a href="#" class="btn-def btn-white">Shop Now</a>
                </div>
            </div>
            <div class="single-slider pos-rltv">
                <div class="slider-img"><img src="{{ asset('assets/website/images/slider/slider01.webp') }}" alt="">
                </div>
                <div class="slider-content pos-abs">
                    <h4>Best Collection</h4>
                    <h1 class="uppercase pos-rltv underline">exclusive Fashion 2022</h1>
                    <a href="#" class="btn-def btn-white">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!--slider area start-->

    <!--delivery service start-->
    <div class="delivery-service-area ptb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service shadow-box text-center">
                        <img src="{{ asset('assets/website/images/icons/garantee.png') }}" alt="">
                        <h5>Money Back Guarantee</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service shadow-box text-center">
                        <img src="{{ asset('assets/website/images/icons/coupon.png') }}" alt="">
                        <h5>Gift Coupon</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service shadow-box text-center">
                        <img src="{{ asset('assets/website/images/icons/delivery.png') }}" alt="">
                        <h5>Free Shipping</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service shadow-box text-center">
                        <img src="{{ asset('assets/website/images/icons/support.png') }}" alt="">
                        <h5>24x7 Support</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--delivery service start-->

    <!--branding-section-area start-->
    <div class="branding-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="active-slider pos-rltv carosule-pagi cp-line pagi-02">
                        <div class="single-slider">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6 col-md-6">
                                    <div class="brand-img text-center">
                                        <img src="{{ asset('assets/website/images/team/branding.webp') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-6">
                                    <div class="brand-content ptb-55">
                                        <div class="brand-text color-lightgrey">
                                            <h6>New Fashion</h6>
                                            <h2 class="uppercase montserrat">Brand Cortta</h2>
                                            <h3 class="montserrat">$200.00</h3>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout.</p>
                                            <div class="social-icon-wraper mt-35">
                                                <div class="social-icon">
                                                    <ul>
                                                        <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        </li>
                                                        {{--
                                                         --}}

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-timer shadow-box-2 mt-50">
                                            <div class="timer-wraper text-center">
                                                <div class="timer">
                                                    <div data-countdown="2023/02/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6 col-md-6">
                                    <div class="brand-img text-center">
                                        <img src="{{ asset('assets/website/images/team/branding.webp') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-6">
                                    <div class="brand-content ptb-55">
                                        <div class="brand-text color-lightgrey">
                                            <h6>New Fashion</h6>
                                            <h2 class="uppercase montserrat">Brand Cortta</h2>
                                            <h3 class="montserrat">$200.00</h3>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout.</p>
                                            <div class="social-icon-wraper mt-35">
                                                <div class="social-icon">
                                                    <ul>
                                                        <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        </li>



                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-timer shadow-box-2 mt-50">
                                            <div class="timer-wraper text-center">
                                                <div class="timer">
                                                    <div data-countdown="2017/02/01"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6 col-md-6">
                                    <div class="brand-img text-center">
                                        <img src="{{ asset('assets/website/images/team/branding.webp') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-6">
                                    <div class="brand-content ptb-55">
                                        <div class="brand-text color-lightgrey">
                                            <h6>New Fashion</h6>
                                            <h2 class="uppercase montserrat">Brand Cortta</h2>
                                            <h3 class="montserrat">$200.00</h3>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout.</p>
                                            <div class="social-icon-wraper mt-35">
                                                <div class="social-icon">
                                                    <ul>
                                                        <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-favorite-outline"></i></a></li>



                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="brand-timer shadow-box-2 mt-50">
                                            <div class="timer-wraper text-center">
                                                <div class="timer">
                                                    <div data-countdown="2023/02/01"></div>
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
        </div>
    </div>
    <!--branding-section-area end-->

    <!--new arrival area start-->
    <div class="new-arrival-area pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h5 class="uppercase">New Arrival</h5>
                </div>
                <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                    <!-- single product start -->
                    @foreach ($products as $product)
                        <div class="product-item">
                            <div class="single-product">
                                <div class="product-img">
                                    <div class="product-label">
                                        <div class="new">New</div>
                                    </div>
                                    <div class="single-prodcut-img product-overlay pos-rltv">
                                        <a href="{{ route('singleproduct', ['id' => $product->id]) }}">
                                            <img alt=""
                                                src="{{ asset('uploads/products/' . $product->featured_image) }}"
                                                style="width: 274px; height: 392px; object-fit: cover;"
                                                class="primary-image">
                                        </a>
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">
                                        <ul>
                                            <li>
                                                <a href="#" class="add-cart" data-id="{{ $product->id }}" data-tooltip="Add To Cart">
                                                    <i class="fa fa-cart-plus"></i>
                                                </a>
                                            </li>

                                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                        class="fa fa-heart-o"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="prodcut-name">
                                        <a href="{{ route('singleproduct', ['id' => $product->id]) }}">
                                            {{ $product->title }}
                                        </a>
                                    </div>
                                    <div class="prodcut-ratting-price">
                                        <div class="prodcut-price">
                                            <div class="new-price">{{ $product->price }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- single product end -->
                </div>
            </div>
        </div>
    </div>
</div>

    <!--new arrival area end-->

    <!--banner area start-->
    <div class="banner-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-banner gray-bg">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sb-img text-center">
                                    <img src="{{ asset('assets/website/images/banner/02.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sb-content mt-60">
                                    <div class="banner-text">
                                        <h5 class="lato">New Arrival</h5>
                                        <h2 class="montserrat">Grag T- Shirt</h2>
                                        <h3 class="montserrat">$99.99</h3>
                                        <div class="banner-list">
                                            <ul>
                                                <li>Best quality</li>
                                                <li>Best quality</li>
                                                <li>Best quality</li>
                                            </ul>
                                        </div>
                                        <div class="social-icon-wraper mt-25">
                                            <div class="social-icon socile-icon-style-1">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                    </li>
                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                            data-bs-toggle="modal" data-bs-target=".modal"
                                                            tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-banner gray-bg">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sb-img text-center">
                                    <img src="{{ asset('assets/website/images/banner/01.webp') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sb-content mt-60">
                                    <div class="banner-text">
                                        <h5 class="lato">New Arrival</h5>
                                        <h2 class="montserrat">Grag T- Shirt</h2>
                                        <h3 class="montserrat">$99.99</h3>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                        <a class="btn-def btn2" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--discunt-featured-onsale-area start -->
    <div class="discunt-featured-onsale-area pt-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-area tab-cars-style">
                        <div class="title-tab-product-category">
                            <div class="col-lg-12 text-center">
                                <ul class="nav mb-40 heading-style-2" role="tablist">
                                    <li role="presentation"><a class="active" href="#newarrival"
                                            aria-controls="newarrival" role="tab" data-bs-toggle="tab">New
                                            Arrival</a>
                                    </li>
                                    <li role="presentation"><a href="#bestsellr" aria-controls="bestsellr"
                                            role="tab" data-bs-toggle="tab">Best Seller</a></li>
                                    <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer"
                                            role="tab" data-bs-toggle="tab">Special Offer</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-tab-product-category">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="newarrival">
                                    <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="product-label">
                                                        <div class="new">New</div>
                                                    </div>
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/01.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/02.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/01.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="product-label">
                                                        <div class="new">Sale</div>
                                                    </div>
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/02.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-ratting">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/01.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"> <img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/01.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-ratting">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                            <div class="old-price"> <del>$250</del> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane  fade in" id="bestsellr">
                                    <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="product-label">
                                                        <div class="new">New</div>
                                                    </div>
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"> <img alt=""
                                                                src="{{ asset('assets/website/images/product/01.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/02.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="product-label">
                                                        <div class="new">Sale</div>
                                                    </div>
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/02.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-ratting">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/04.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/04.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/05.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/06.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-ratting">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                            <div class="old-price"> <del>$250</del> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane  fade in" id="specialoffer">
                                    <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/04.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"> <img alt=""
                                                                src="{{ asset('assets/website/images/product/05.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/06.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-ratting">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                            <div class="old-price"> <del>$250</del> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="product-label">
                                                        <div class="new">New</div>
                                                    </div>
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/01.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/02.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/04.webp') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
                                        </div>
                                        <div class="product-item">
                                            <!-- single product start-->
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="product-label">
                                                        <div class="new">Sale</div>
                                                    </div>
                                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                                        <a href="single-product.html"><img alt=""
                                                                src="{{ asset('assets/website/images/product/02.jpg') }}"
                                                                class="primary-image">
                                                            <img alt=""
                                                                src="{{ asset('assets/website/images/product/03.jpg') }}"
                                                                class="secondary-image">
                                                        </a>
                                                    </div>
                                                    <div class="product-icon socile-icon-tooltip text-center">
                                                        <ul>
                                                            <li><a href="#" data-tooltip="Add To Cart"
                                                                    class="add-cart" data-placement="left"><i
                                                                        class="fa fa-cart-plus"></i></a></li>
                                                            <li><a href="#" data-tooltip="Wishlist"
                                                                    class="w-list"><i class="fa fa-heart-o"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Compare"
                                                                    class="cpare"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-tooltip="Quick View"
                                                                    class="q-view" data-bs-toggle="modal"
                                                                    data-bs-target=".modal"><i class="fa fa-eye"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-text">
                                                    <div class="prodcut-name"> <a href="single-product.html">Quisque
                                                            fringilla</a> </div>
                                                    <div class="prodcut-ratting-price">
                                                        <div class="prodcut-ratting">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                        <div class="prodcut-price">
                                                            <div class="new-price"> $220 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single product end-->
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
    <!--discunt-featured-onsale-area end-->

    <!--testimonial-area-start-->
    <div class="testimonial-area overlay ptb-70 mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-title color-lightgrey mb-40 text-center">
                        <h5 class="uppercase">Testimonial</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="total-testimonial active-slider carosule-pagi pagi-03">
                        <div class="single-testimonial">
                            <div class="testimonial-img">
                                <img src="{{ asset('assets/website/images/team/testi-03.webp') }}" alt="">
                            </div>
                            <div class="testimonial-content color-lightgrey">
                                <div class="name-degi pos-rltv">
                                    <h5>Alexandra</h5>
                                    <p>Developer</p>
                                </div>
                                <div class="testi-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="testimonial-img">
                                <img src="{{ asset('assets/website/images/team/testi-02.webp') }}" alt="">
                            </div>
                            <div class="testimonial-content color-lightgrey">
                                <div class="name-degi pos-rltv">
                                    <h5>Bernadette</h5>
                                    <p>Facebook Liker</p>
                                </div>
                                <div class="testi-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="testimonial-img">
                                <img src="{{ asset('assets/website/images/team/testi-01.webp') }}" alt="">
                            </div>
                            <div class="testimonial-content color-lightgrey">
                                <div class="name-degi pos-rltv">
                                    <h5>Amanda</h5>
                                    <p>Designer</p>
                                </div>
                                <div class="testi-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--testimonial-area-end-->

    <!--new-arrival on-sale Top-ratted area start-->
    <div class="arrival-ratted-sale-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="heading-title heading-style pos-rltv mb-50 text-center">
                        <h5 class="uppercase">New Arrival</h5>
                    </div>
                    <div class="ctg-slider-active">
                        <div class="single-ctg new-arrival-ctg">
                            <div class="single-ctg-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="product-ctg-img pos-rltv product-overlay">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('assets/website/images/product/s01.webp') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="product-ctg-content">
                                            <p>Primo Court Mid Suede</p>
                                            <p class="font-bold">$236.99</p>
                                            <div class="social-icon socile-icon-style-1 mt-15">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                            data-bs-toggle="modal" data-bs-target=".modal"
                                                            tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-ctg-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="product-ctg-img pos-rltv product-overlay">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('assets/website/images/product/s02.webp') }}"
                                                    alt="">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="product-ctg-content">
                                            <p>Primo Court Mid Suede</p>
                                            <p class="font-bold">$236.99</p>
                                            <div class="social-icon socile-icon-style-1 mt-15">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                            data-bs-toggle="modal" data-bs-target=".modal"
                                                            tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-ctg new-arrival-ctg">
                            <div class="single-ctg-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="product-ctg-img pos-rltv product-overlay">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('assets/website/images/product/s01.webp') }}"
                                                    alt="">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="product-ctg-content">
                                            <p>Primo Court Mid Suede</p>
                                            <p class="font-bold">$236.99</p>
                                            <div class="social-icon socile-icon-style-1 mt-15">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                            data-bs-toggle="modal" data-bs-target=".modal"
                                                            tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-ctg-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="product-ctg-img pos-rltv product-overlay">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('assets/website/images/product/s02.webp') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6">
                                        <div class="product-ctg-content">
                                            <p>Primo Court Mid Suede</p>
                                            <p class="font-bold">$236.99</p>
                                            <div class="social-icon socile-icon-style-1 mt-15">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                                    </li>
                                                    <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                            data-bs-toggle="modal" data-bs-target=".modal"
                                                            tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-ctg on-sale-ctg">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">On Sale</h5>
                        </div>
                        <div class="ctg-slider-active">
                            <div class="single-ctg new-arrival-ctg">
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img
                                                        src="{{ asset('assets/website/images/product/s01.webp') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img
                                                        src="{{ asset('assets/website/images/product/s02.webp') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-ctg new-arrival-ctg">
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img
                                                        src="{{ asset('assets/website/images/product/s01.webp') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img
                                                        src="{{ asset('assets/website/images/product/s02.webp') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>

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
                <div class="col-md-4">
                    <div class="single-ctg top-rated-ctg">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Top Rated</h5>
                        </div>
                        <div class="ctg-slider-active">
                            <div class="single-ctg new-arrival-ctg">
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img
                                                        src="{{ asset('assets/website/images/product/s01.webp') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img
                                                        src="{{ asset('assets/website/images/product/s02.webp') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-ctg new-arrival-ctg">
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img
                                                        src="{{ asset('assets/website/images/product/s01.webp') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img
                                                        src="{{ asset('assets/website/images/product/s02.webp') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a href="#"><i
                                                                    class="zmdi zmdi-shopping-cart"></i></a>
                                                        </li>

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
        </div>
    </div>
    <!--new-arrival on-sale Top-ratted area end-->

    <!--brand area are start-->
    <div class="brand-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="total-brand">
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/01.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/02.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/03.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/04.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/05.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/06.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/01.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/02.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/03.png') }}" alt="">
                                </a></div>
                        </div>
                        <div class="brand-item">
                            <div class="single-brand shadow-box"><a href="#"><img
                                        src="{{ asset('assets/website/images/brand/04.png') }}" alt="">
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area are start-->

    <!--blog area are start-->
    {{-- <div class="blog-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h5 class="uppercase">Blog</h5>
                </div>
                <div class="total-blog">
                    <div class="blog-item">
                        <div class="single-blog">
                            <div class="blog-img pos-rltv product-overlay">
                                <a href="#"><img src="{{ asset('assets/website/images/blog/01.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a>
                                    </h5>
                                    <div class="like-comments-date">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13
                                                    Like</a>
                                            </li>
                                            <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03
                                                    Comments</a>
                                            </li>
                                            <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i>16
                                                    jun 2022</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-text">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using.</p>
                                    </div>
                                    <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="single-blog">
                            <div class="blog-img pos-rltv product-overlay">
                                <a href="#"><img src="{{ asset('assets/website/images/blog/02.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a>
                                    </h5>
                                    <div class="like-comments-date">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13
                                                    Like</a>
                                            </li>
                                            <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03
                                                    Comments</a>
                                            </li>
                                            <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i>16
                                                    jun 2022</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-text">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using.</p>
                                    </div>
                                    <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="single-blog">
                            <div class="blog-img pos-rltv product-overlay">
                                <a href="#"><img src="{{ asset('assets/website/images/blog/03.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a>
                                    </h5>
                                    <div class="like-comments-date">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13
                                                    Like</a>
                                            </li>
                                            <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03
                                                    Comments</a>
                                            </li>
                                            <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i>16
                                                    jun 2022</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-text">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using.</p>
                                    </div>
                                    <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="single-blog">
                            <div class="blog-img pos-rltv product-overlay">
                                <a href="#"><img src="{{ asset('assets/website/images/blog/01.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a>
                                    </h5>
                                    <div class="like-comments-date">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13
                                                    Like</a>
                                            </li>
                                            <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03
                                                    Comments</a>
                                            </li>
                                            <li class="blog-date"><a href="#"><i class="zmdi zmdi-calendar-alt"></i>16
                                                    jun 2022</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-text">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of
                                            using.</p>
                                    </div>
                                    <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <!--blog area are end-->

    <!-- footer area start-->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.add-cart').forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();

                    const productId = this.dataset.id;

                    fetch("{{ route('cart.add') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ product_id: productId })
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert(data.message); // You can use toastr or Swal here
                    })
                    .catch(err => console.error('Cart error:', err));
                });
            });
        });
    </script>

@endsection
