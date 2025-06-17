@extends('website.layouts.main')


@section('content')
<!-- End of header area -->

<!--breadcumb area start -->
<div class="breadcumb-area overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>Shortcode</h5>
        </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
            <li class="active">Testimonial</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!--Total area start-->
<div class="col-lg-12 text-center">
    <div class="heading-title heading-style pos-rltv mtb-50 text-center">
        <h5 class="uppercase">Testimonial</h5>
    </div>
</div>
<div class="clearfix"></div>

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

<!--Total area end-->

<!-- footer area start-->
@endsection