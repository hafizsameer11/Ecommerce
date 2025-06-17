@extends('website.layouts.main')


@section('content')
    <!-- End of header area -->

    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>Prodcut Details</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                <li class="active">product-details</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!--single-protfolio-area are start-->
    <div class="single-protfolio-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    @php
                        // Decode additional images
                        $galleryImages = json_decode($product->images, true) ?? [];

                        // Prepend featured image at the beginning
                        if ($product->featured_image) {
                            array_unshift($galleryImages, $product->featured_image);
                        }
                    @endphp

                    <div class="portfolio-thumbnil-area">
                        <div class="product-more-views">
                            <div class="tab_thumbnail" data-tabs="tabs">
                                <div class="thumbnail-carousel">
                                    <ul class="nav">
                                        @foreach ($galleryImages as $index => $img)
                                            <li>
                                                <a class="{{ $index === 0 ? 'active' : '' }} shadow-box"
                                                    href="#view{{ $index + 1 }}" aria-controls="view{{ $index + 1 }}"
                                                    data-bs-toggle="tab">
                                                    <img src="{{ asset('uploads/products/' . $img) }}"
                                                        alt="Thumbnail {{ $index + 1 }}" />
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content active-portfolio-area pos-rltv">
                            <div class="social-tag">
                                <a href="#"><i class="zmdi zmdi-share"></i></a>
                            </div>

                            @foreach ($galleryImages as $index => $img)
                                <div role="tabpanel" class="tab-pane {{ $index === 0 ? 'active' : '' }}"
                                    id="view{{ $index + 1 }}">
                                    <div class="product-img">
                                        <a class="fancybox" data-fancybox-group="group"
                                            href="{{ asset('uploads/products/' . $img) }}">
                                            <img src="{{ asset('uploads/products/' . $img) }}"
                                                style="width: 475px; height: 575px; object-fit: cover;"
                                                alt="Image {{ $index + 1 }}" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="single-product-description">
                        <div class="sp-top-des">
                            <h3>{{ $product->title }} <span>(Brand)</span></h3>
                            <div class="prodcut-ratting-price">
                                <div class="prodcut-ratting">
                                    {!! str_repeat('<a href="#"><i class="fa fa-star"></i></a>', mb_strlen($product->rating)) !!}
                                    {!! str_repeat('<a href="#"><i class="fa fa-star-o"></i></a>', 5 - mb_strlen($product->rating)) !!}

                                </div>
                                <div class="prodcut-price">
                                    <div class="new-price"> {{ $product->discount_price }} </div>
                                    <div class="old-price"> <del>{{ $product->price }}</del> </div>
                                </div>
                            </div>
                        </div>

                        <div class="sp-des">
                            <p>{{ $product->short_description }}</p>
                        </div>
                        <div class="sp-bottom-des">
                            <div class="single-product-option">
                                <div class="sort product-type">
                                    <label>Color: </label>
                                    <select id="input-sort-color">
                                        <option selected disabled>Choose Your Color</option>
                                        @foreach ($variations->pluck('color')->unique() as $color)
                                            @if (!empty($color))
                                                <option value="{{ $color }}">{{ ucfirst($color) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="sort product-type">
                                    <label>Size: </label>
                                    <select id="input-sort-size">
                                        <option selected disabled>Choose Your Size</option>
                                        @foreach ($variations->pluck('size')->unique() as $size)
                                            @if (!empty($size))
                                                <option value="{{ $size }}">{{ strtoupper($size) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="quantity-area">
                                <label>Qty :</label>
                                <div class="cart-quantity">
                                    <form action="#" method="POST" id="myform">
                                        <div class="product-qty">
                                            <div class="cart-quantity">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton">-</div>
                                                    <input type="text" value="02" name="qtybutton"
                                                        class="cart-plus-minus-box">
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="social-icon socile-icon-style-1">
                                <ul>
                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart add-cart-text"
                                            data-placement="left" tabindex="0">Add To Cart<i
                                                class="fa fa-cart-plus"></i></a></li>
                                    <li><a href="#" data-tooltip="Wishlist" class="w-list" tabindex="0"><i
                                                class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" data-tooltip="Compare" class="cpare" tabindex="0"><i
                                                class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" data-tooltip="Quick View" class="q-view" data-bs-toggle="modal"
                                            data-bs-target=".modal" tabindex="0"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--single-protfolio-area are start-->

    <!--descripton-area start -->
    <div class="descripton-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-area tab-cars-style">
                        <div class="title-tab-product-category row">
                            <div class="col-lg-12 text-center">
                                <ul class="nav mb-40 heading-style-2" role="tablist">
                                    <li role="presentation"><a href="#newarrival" aria-controls="newarrival"
                                            role="tab" data-bs-toggle="tab">Description</a></li>
                                    <li role="presentation"><a class="active" href="#bestsellr"
                                            aria-controls="bestsellr" role="tab" data-bs-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer"
                                            role="tab" data-bs-toggle="tab">Tags</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <div class="content-tab-product-category">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fix fade in" id="newarrival">
                                        <div class="review-wraper">
                                            <p>{{ $product->description }}</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fix fade show active" id="bestsellr">
                                        <div class="review-wraper">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>
                                                veniam, quis nostrud exercitation.</p>
                                            <h5>SIZE & FIT</h5>
                                            <ul>
                                                <li>Model wears: Style Photoliya U2980</li>
                                                <li>Model's height: 185”66</li>
                                            </ul>
                                            <h5>ABOUT ME</h5>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of using
                                                Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                                opposed to using 'Content here, content here', making it look like readable
                                                English.It is a long established fact that a reader will be distracted by
                                                the readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using 'Content here, content here', making it look
                                                like readable English</p>
                                            <h5>Overview</h5>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable.There are many
                                                variations of passages of Lorem Ipsum available, but the majority have
                                                suffered alteration in some form.</p>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fix fade in" id="specialoffer">
                                        <ul class="tag-filter">
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Winter</a></li>
                                            <li><a href="#">Street Style</a></li>
                                            <li><a href="#">Style</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">Collection</a></li>
                                            <li><a href="#">Spring 2022</a></li>
                                            <li><a href="#">Street Style</a></li>
                                            <li><a href="#">Style</a></li>
                                            <li><a href="#">Shop</a></li>
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
    <!--descripton-area end-->

    <!--new arrival area start-->
    <div class="new-arrival-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-title heading-style pos-rltv mb-50 text-center">
                        <h5 class="uppercase">Related Product</h5>
                    </div>
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
                                                class="secondary-image"> </a>
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                    data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                        class="fa fa-refresh"></i></a></li>
                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                    data-bs-toggle="modal" data-bs-target=".modal"><i
                                                        class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                    </div>
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
                                                class="secondary-image"> </a>
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                    data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                        class="fa fa-refresh"></i></a></li>
                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                    data-bs-toggle="modal" data-bs-target=".modal"><i
                                                        class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                    </div>
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
                                        <a href="single-product.html"> <img alt=""
                                                src="{{ asset('assets/website/images/product/02.webp') }}"
                                                class="primary-image">
                                            <img alt=""
                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                class="secondary-image"> </a>
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                    data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                        class="fa fa-refresh"></i></a></li>
                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                    data-bs-toggle="modal" data-bs-target=".modal"><i
                                                        class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                    </div>
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
                                        <a href="single-product.html"> <img alt=""
                                                src="{{ asset('assets/website/images/product/01.webp') }}"
                                                class="primary-image">
                                            <img alt=""
                                                src="{{ asset('assets/website/images/product/03.webp') }}"
                                                class="secondary-image"> </a>
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                    data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                        class="fa fa-refresh"></i></a></li>
                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                    data-bs-toggle="modal" data-bs-target=".modal"><i
                                                        class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                    </div>
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
                                                class="secondary-image"> </a>
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                    data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                        class="fa fa-refresh"></i></a></li>
                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                    data-bs-toggle="modal" data-bs-target=".modal"><i
                                                        class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="prodcut-name"> <a href="single-product.html">Quisque fringilla</a>
                                    </div>
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
            </div>
        </div>
    </div>
    <!--new arrival area end-->

    <!-- footer area start-->
@endsection
