@extends('website.layouts.main')


@section('content')

<!-- End of header area -->

<!--breadcumb area start -->
<div class="breadcumb-area breadcumb-2 overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>Blog Details</h5>
        </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
            <li class="active">Blog</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!--blog main area are start-->
<div class="shop-main-area pt-70 pb-40">
    <div class="container">
        <div class="row">
            <!--shop sidebar start-->
            <div class="col-lg-3 col-md-4 order-lg-1 order-md-1 order-2">
                <div class="shop-sidebar blog-sidebar">
                    <!--single aside start-->
                    <aside class="single-aside search-aside search-box">
                        <form action="#">
                            <div class="input-box">
                                <input class="single-input" placeholder="Search...." type="text">
                                <button class="src-btn sb-2"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </aside>
                    <!--single aside end-->

                    <!--single aside start-->
                    <aside class="single-aside catagories-aside">
                        <div class="heading-title aside-title pos-rltv">
                            <h5 class="uppercase">categories</h5>
                        </div>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                <li class="closed"><a href="#">Men (05)</a>
                                    <ul>
                                        <li><a href="#">T-Shirt</a></li>
                                        <li><a href="#">Shirt</a></li>
                                        <li><a href="#">Pant</a></li>
                                        <li><a href="#">Shoe</a></li>
                                        <li><a href="#">Gifts</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Women (10)</a>
                                    <ul>
                                        <li><a href="#">T-Shirt</a>
                                            <ul>
                                                <li><a href="#">T-Shirt 01</a></li>
                                                <li><a href="#">T-Shirt 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shirt</a>
                                            <ul>
                                                <li><a href="#">Shirt 01</a></li>
                                                <li><a href="#">Shirt 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pant</a>
                                            <ul>
                                                <li><a href="#">Pant 01</a></li>
                                                <li><a href="#">Pant 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shoe</a>
                                            <ul>
                                                <li><a href="#">Shoe 01</a></li>
                                                <li><a href="#">Shoe 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Gifts</a>
                                            <ul>
                                                <li><a href="#">Gift 01</a></li>
                                                <li><a href="#">Gift 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Accessories (07)</a>
                                    <ul>
                                        <li><a href="#">Accessories 01</a></li>
                                        <li><a href="#">Accessories 02</a></li>
                                        <li><a href="#">Accessories 03</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Beauty (06)</a>
                                    <ul>
                                        <li><a href="#">Beauty 01</a></li>
                                        <li><a href="#">Beauty 02</a></li>
                                        <li><a href="#">Beauty 03</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Watch (09)</a>
                                    <ul>
                                        <li><a href="#">Watch 01</a></li>
                                        <li><a href="#">Watch 02</a></li>
                                        <li><a href="#">Watch 03</a></li>
                                    </ul>
                                </li>
                                <li class="closed"><a href="#">Sports</a></li>
                                <li class="closed"><a href="#">Others</a></li>
                            </ul>
                        </div>
                    </aside>
                    <!--single aside end-->

                    <!--single aside start-->
                    <aside class="single-aside tag-aside">
                        <div class="heading-title aside-title pos-rltv">
                            <h5 class="uppercase">Product Tags</h5>
                        </div>
                        <ul class="tag-filter mt-30">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Winter</a></li>
                            <li><a href="#">Street Style</a></li>
                            <li><a href="#">Style</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Collection</a></li>
                            <li><a href="#">Spring 2022</a></li>
                        </ul>
                    </aside>
                    <!--single aside end-->

                    <!--single aside start-->
                    <aside class="single-aside product-aside">
                        <div class="heading-title aside-title pos-rltv">
                            <h5 class="uppercase">Recent Product</h5>
                        </div>
                        <div class="recent-prodcut-wraper total-rectnt-slider">
                            <div class="single-rectnt-slider">
                                <!-- single product start-->
                                <div class="single-product recent-single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt=""
                                                    src="{{ asset('assets/website/images/product/rp01.webp') }}"
                                                    class="primary-image">
                                                <img alt="" src="{{ asset('assets/website/images/product/rp02.webp') }}"
                                                    class="secondary-image"> </a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire
                                                Chair</a> </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                    href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->

                                <!-- single product start-->
                                <div class="single-product recent-single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"><img alt=""
                                                    src="{{ asset('assets/website/images/product/rp03.webp') }}"
                                                    class="primary-image">
                                                <img alt="" src="{{ asset('assets/website/images/product/rp04.webp') }}"
                                                    class="secondary-image"> </a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire
                                                Chair</a> </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                    href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->

                                <!-- single product start-->
                                <div class="single-product recent-single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt=""
                                                    src="{{ asset('assets/website/images/product/rp02.webp') }}"
                                                    class="primary-image">
                                                <img alt="" src="{{ asset('assets/website/images/product/rp03.webp') }}"
                                                    class="secondary-image"> </a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire
                                                Chair</a> </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                    href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->

                                <!-- single product start-->
                                <div class="single-product recent-single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt=""
                                                    src="{{ asset('assets/website/images/product/rp04.webp') }}"
                                                    class="primary-image">
                                                <img alt="" src="{{ asset('assets/website/images/product/rp01.webp') }}"
                                                    class="secondary-image"> </a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire
                                                Chair</a> </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                    href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            <div class="single-rectnt-slider">
                                <!-- single product start-->
                                <div class="single-product recent-single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"><img alt=""
                                                    src="{{ asset('assets/website/images/product/rp01.webp') }}"
                                                    class="primary-image">
                                                <img alt="" src="{{ asset('assets/website/images/product/rp02.webp') }}"
                                                    class="secondary-image"> </a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire
                                                Chair</a> </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                    href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->

                                <!-- single product start-->
                                <div class="single-product recent-single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"><img alt=""
                                                    src="{{ asset('assets/website/images/product/rp03.webp') }}"
                                                    class="primary-image">
                                                <img alt="" src="{{ asset('assets/website/images/product/rp04.webp') }}"
                                                    class="secondary-image"> </a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire
                                                Chair</a> </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                    href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->

                                <!-- single product start-->
                                <div class="single-product recent-single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"><img alt=""
                                                    src="{{ asset('assets/website/images/product/rp02.webp') }}"
                                                    class="primary-image">
                                                <img alt="" src="{{ asset('assets/website/images/product/rp03.webp') }}"
                                                    class="secondary-image"> </a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire
                                                Chair</a> </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                    href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->

                                <!-- single product start-->
                                <div class="single-product recent-single-product">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="single-product.html"> <img alt=""
                                                    src="{{ asset('assets/website/images/product/rp04.webp') }}"
                                                    class="primary-image">
                                                <img alt="" src="{{ asset('assets/website/images/product/rp01.webp') }}"
                                                    class="secondary-image"> </a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">Copenhagen Spitfire
                                                Chair</a> </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-ratting"> <a href="#"><i class="fa fa-star"></i></a> <a
                                                    href="#"><i class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star"></i></a> <a href="#"><i
                                                        class="fa fa-star-o"></i></a> </div>
                                            <div class="prodcut-price">
                                                <div class="new-price"> $220 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                        </div>

                    </aside>
                    <!--single aside end-->

                    <!--single aside start-->
                    <aside class="single-aside add-aside">
                        <a href="single-product.html" <img src="{{ asset('assets/website/images/banner/add.webp') }}"
                            alt=""></a>
                    </aside>
                    <!--single aside end-->
                </div>
            </div>
            <!--shop sidebar end-->

            <!--main-shop-product start-->
            <div class="col-lg-9 col-md-8 order-lg-2 order-md-2 order-1">
                <div class="row">
                    <div class="blog-wraper row">
                        <div class="col-lg-6">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="{{ asset('assets/website/images/blog/01.webp') }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                </li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                </li>
                                                <li class="blog-date"><a href="#"><i
                                                            class="zmdi zmdi-calendar-alt"></i>16 jun 2022</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page
                                                when looking at its layout. The point of using.</p>
                                        </div> <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="{{ asset('assets/website/images/blog/02.webp') }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                </li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                </li>
                                                <li class="blog-date"><a href="#"><i
                                                            class="zmdi zmdi-calendar-alt"></i>16 jun 2022</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using.</p>
                                        </div> <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="{{ asset('assets/website/images/blog/03.webp') }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                </li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                </li>
                                                <li class="blog-date"><a href="#"><i
                                                            class="zmdi zmdi-calendar-alt"></i>16 jun 2022</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page
                                                when looking at its layout. The point of using.</p>
                                        </div> <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="{{ asset('assets/website/images/blog/02.webp') }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                </li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                </li>
                                                <li class="blog-date"><a href="#"><i
                                                            class="zmdi zmdi-calendar-alt"></i>16 jun 2022</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page
                                                when looking at its layout. The point of using.</p>
                                        </div> <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-md-none d-block d-lg-block">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="{{ asset('assets/website/images/blog/01.webp') }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                </li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                </li>
                                                <li class="blog-date"><a href="#"><i
                                                            class="zmdi zmdi-calendar-alt"></i>16 jun 2022</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page
                                                when looking at its layout. The point of using.</p>
                                        </div> <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-md-none d-block d-lg-block">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="{{ asset('assets/website/images/blog/02.webp') }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                </li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                </li>
                                                <li class="blog-date"><a href="#"><i
                                                            class="zmdi zmdi-calendar-alt"></i>16 jun 2022</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page
                                                when looking at its layout. The point of using.</p>
                                        </div> <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-md-none d-block d-lg-block">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="{{ asset('assets/website/images/blog/03.webp') }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                </li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                </li>
                                                <li class="blog-date"><a href="#"><i
                                                            class="zmdi zmdi-calendar-alt"></i>16 jun 2022</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page
                                                when looking at its layout. The point of using.</p>
                                        </div> <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-md-none d-block d-lg-block">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="#"><img src="{{ asset('assets/website/images/blog/01.webp') }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="#">New fashion collection 2022</a></h5>
                                        <div class="like-comments-date">
                                            <ul>
                                                <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>13 Like</a>
                                                </li>
                                                <li><a href="#"><i class="zmdi zmdi-comment-outline"></i>03 Comments</a>
                                                </li>
                                                <li class="blog-date"><a href="#"><i
                                                            class="zmdi zmdi-calendar-alt"></i>16 jun 2022</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-text">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page
                                                when looking at its layout. The point of using.</p>
                                        </div> <a class="read-more montserrat" href="single-blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--main-shop-product start-->
        </div>
    </div>
</div>
<!--blog main area are end-->

<!-- footer area start-->
@endsection