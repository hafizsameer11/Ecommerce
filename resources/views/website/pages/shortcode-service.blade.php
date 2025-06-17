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
            <li class="active">Service</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!--delivery service start-->
<div class="col-lg-12 text-center">
    <div class="heading-title heading-style pos-rltv mtb-50 text-center">
        <h5 class="uppercase">Service</h5>
    </div>
</div>
<div class="delivery-service-area pb-30">
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

<!-- footer area start-->
@endsection