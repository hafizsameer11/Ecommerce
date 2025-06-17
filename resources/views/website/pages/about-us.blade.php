@extends('website.layouts.main')


@section('content')
<!-- End of header area -->

<!--breadcumb area start -->
<div class="breadcumb-area breadcumb-3 overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>About Details</h5>
        </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
            <li class="active">About Us</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!-- about-us-area start-->
<div class="about-us-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h5 class="uppercase">About Us</h5>
                </div>
            </div>
            <div class="about-us-wrap row">
                <div class="col-lg-6">
                    <div class="about-img"><img src="{{ asset('assets/website/images/blog/about.webp') }}" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="about-des">
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its layout. The point of using Lorem Ipsum is that
                            it has a more-or-less normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its layout. </p>
                        <a href="#" class="btn-def small" tabindex="0">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-us-area end-->

<!--choose us area start-->
<div class="choose-us-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h5 class="uppercase">Why choose us</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="single-choose text-center">
                    <div class="choose-icon pos-rltv">
                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                    </div>
                    <div class="choose-title">
                        <h5>Best Product</h5>
                    </div>
                    <div class="choose-des">
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a
                            page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="single-choose text-center">
                    <div class="choose-icon pos-rltv">
                        <i class="zmdi zmdi-headset-mic"></i>
                    </div>
                    <div class="choose-title">
                        <h5>24/7 Support</h5>
                    </div>
                    <div class="choose-des">
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a
                            page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="single-choose text-center">
                    <div class="choose-icon pos-rltv">
                        <i class="zmdi zmdi-format-strikethrough-s"></i>
                    </div>
                    <div class="choose-title">
                        <h5>Secure</h5>
                    </div>
                    <div class="choose-des">
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a
                            page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-md-none d-block d-lg-block">
                <div class="single-choose text-center">
                    <div class="choose-icon pos-rltv">
                        <i class="zmdi zmdi-trending-up"></i>
                    </div>
                    <div class="choose-title">
                        <h5>Best Product</h5>
                    </div>
                    <div class="choose-des">
                        <p>It is a long established fact that a reader will be distracted by the readable
                            content of a
                            page when looking at its layout.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--choose us area start-->

<!--better-area start-->
<div class="better-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="skill-content">
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page
                        when looking at its layout. </p>
                    <div class="powerfull-skills">
                        <div class="single-prograss">
                            <div class="progess-heading"> Photoshop <span>(79%)</span> </div>
                            <div class="progress">
                                <div class="progress-bar pr-blue wow fadeInLeft" style="width:79%"
                                    data-wow-duration="2s" data-wow-delay="1s"> </div>
                            </div>
                        </div>
                        <div class="single-prograss">
                            <div class="progess-heading"> Illustrator <span>(96%)</span> </div>
                            <div class="progress">
                                <div class="progress-bar pr-green wow fadeInLeft" style="width:96%"
                                    data-wow-duration="2s" data-wow-delay="1s"> </div>
                            </div>
                        </div>
                        <div class="single-prograss">
                            <div class="progess-heading pr-voilate"> HTML <span>(85%)</span> </div>
                            <div class="progress">
                                <div class="progress-bar pr-violate wow fadeInLeft" style="width:85%"
                                    data-wow-duration="2s" data-wow-delay="1s"> </div>
                            </div>
                        </div>
                        <div class="single-prograss">
                            <div class="progess-heading"> Wordpress <span>(92%)</span> </div>
                            <div class="progress">
                                <div class="progress-bar pr-ornage wow fadeInLeft" style="width:92%"
                                    data-wow-duration="2s" data-wow-delay="1s"> </div>
                            </div>
                        </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page
                        when looking at its layout. will be distracted by the readable content of a page when
                        looking at
                        its layout. </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill-img"><img src="{{ asset('assets/website/images/blog/skill.webp') }}" alt=""></div>
            </div>
        </div>
    </div>
</div>
<!--better-area end-->

<!--out team area start-->
<div class="our-team-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h5 class="uppercase">Our Team</h5>
                </div>
                <div class="total-team team-carasoul">
                    <div class="team-item">
                        <!-- single team start-->
                        <div class="single-product single-member">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="#"> <img alt="" src="{{ asset('assets/website/images/team/01.webp') }}"></a>
                                </div>
                                <div class="product-icon socile-icon-tooltip text-center">
                                    <ul>
                                        <li><a href="#" data-tooltip="Facebook" class="add-cart"
                                                data-placement="left"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Twitter" class="w-list"><i
                                                    class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#" data-tooltip="Pinterest" class="cpare"><i
                                                    class="zmdi zmdi-pinterest"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Vimeo" class="cpare"><i
                                                    class="zmdi zmdi-vimeo"></i></a></li>
                                    </ul>
                                </div>
                                <div class="member-info">
                                    <h5>Momen Rana</h5>
                                    <p>Designer</p>
                                </div>
                            </div>
                        </div>
                        <!-- single team end-->
                    </div>
                    <div class="team-item">
                        <!-- single team start-->
                        <div class="single-product single-member">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="#"><img alt="" src="{{ asset('assets/website/images/team/02.webp') }}"></a>
                                </div>
                                <div class="product-icon socile-icon-tooltip text-center">
                                    <ul>
                                        <li><a href="#" data-tooltip="Facebook" class="add-cart"
                                                data-placement="left"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Twitter" class="w-list"><i
                                                    class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#" data-tooltip="Pinterest" class="cpare"><i
                                                    class="zmdi zmdi-pinterest"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Vimeo" class="cpare"><i
                                                    class="zmdi zmdi-vimeo"></i></a></li>
                                    </ul>
                                </div>
                                <div class="member-info">
                                    <h5>Bernadette</h5>
                                    <p>Facebooker</p>
                                </div>
                            </div>
                        </div>
                        <!-- single team end-->
                    </div>
                    <div class="team-item">
                        <!-- single team start-->
                        <div class="single-product single-member">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="#"> <img alt="" src="{{ asset('assets/website/images/team/03.webp') }}"></a>
                                </div>
                                <div class="product-icon socile-icon-tooltip text-center">
                                    <ul>
                                        <li><a href="#" data-tooltip="Facebook" class="add-cart"
                                                data-placement="left"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Twitter" class="w-list"><i
                                                    class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#" data-tooltip="Pinterest" class="cpare"><i
                                                    class="zmdi zmdi-pinterest"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Vimeo" class="cpare"><i
                                                    class="zmdi zmdi-vimeo"></i></a></li>
                                    </ul>
                                </div>
                                <div class="member-info">
                                    <h5>Nasir Liton</h5>
                                    <p>Class Expert</p>
                                </div>
                            </div>
                        </div>
                        <!-- single team end-->
                    </div>
                    <div class="team-item">
                        <!-- single team start-->
                        <div class="single-product single-member">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="#"> <img alt="" src="{{ asset('assets/website/images/team/04.webp') }}"></a>
                                </div>
                                <div class="product-icon socile-icon-tooltip text-center">
                                    <ul>
                                        <li><a href="#" data-tooltip="Facebook" class="add-cart"
                                                data-placement="left"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Twitter" class="w-list"><i
                                                    class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#" data-tooltip="Pinterest" class="cpare"><i
                                                    class="zmdi zmdi-pinterest"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Vimeo" class="cpare"><i
                                                    class="zmdi zmdi-vimeo"></i></a></li>
                                    </ul>
                                </div>
                                <div class="member-info">
                                    <h5>Ashim Baroi</h5>
                                    <p>Downloder</p>
                                </div>
                            </div>
                        </div>
                        <!-- single team end-->
                    </div>
                    <div class="team-item">
                        <!-- single team start-->
                        <div class="single-product single-member">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="#"><img alt="" src="{{ asset('assets/website/images/team/03.webp') }}"></a>
                                </div>
                                <div class="product-icon socile-icon-tooltip text-center">
                                    <ul>
                                        <li><a href="#" data-tooltip="Facebook" class="add-cart"
                                                data-placement="left"><i class="zmdi zmdi-facebook"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Twitter" class="w-list"><i
                                                    class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="#" data-tooltip="Pinterest" class="cpare"><i
                                                    class="zmdi zmdi-pinterest"></i></a>
                                        </li>
                                        <li><a href="#" data-tooltip="Vimeo" class="cpare"><i
                                                    class="zmdi zmdi-vimeo"></i></a></li>
                                    </ul>
                                </div>
                                <div class="member-info">
                                    <h5>Rafiq Rana</h5>
                                    <p>Fashion Expert</p>
                                </div>
                            </div>
                        </div>
                        <!-- single team end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--out team area end-->

<!-- footer area start-->
@endsection