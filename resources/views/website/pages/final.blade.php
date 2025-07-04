@extends('website.layouts.main')


@section('content')
    <!-- End of header area -->

    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>Cart Details</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                <li class="active">Cart</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!--cart-checkout-area start -->
    <div class="cart-checkout-area  pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-area">
                        <div class="title-tab-product-category row">


                        </div>
                        <div class="clearfix"></div>
                        <div class="content-tab-product-category pb-70">
                            <!-- Tab panes -->
                            <div class="tab-content">


                                <div role="tabpanel" class="tab-pane  show active" id="complete-order">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="checkout-payment-area">
                                                <div class="checkout-total mt20">
                                                    <h3>Your order</h3>
                                                    <form action="#" method="post">
                                                        <div class="table-responsive">
                                                            <table class="checkout-area table">
                                                                <thead>
                                                                    <tr class="cart_item check-heading">
                                                                        <td class="ctg-type"> Product</td>
                                                                        <td class="cgt-des"> Total</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="cart_item check-item prd-name">
                                                                        <td class="ctg-type"> Aenean sagittis ×
                                                                            <span>1</span>
                                                                        </td>
                                                                        <td class="cgt-des"> $1,026.00</td>
                                                                    </tr>
                                                                    <tr class="cart_item check-item prd-name">
                                                                        <td class="ctg-type"> Aenean sagittis ×
                                                                            <span>1</span>
                                                                        </td>
                                                                        <td class="cgt-des"> $1,026.00</td>
                                                                    </tr>
                                                                    <tr class="cart_item">
                                                                        <td class="ctg-type"> Subtotal</td>
                                                                        <td class="cgt-des">$2,052.00</td>
                                                                    </tr>
                                                                    <tr class="cart_item">
                                                                        <td class="ctg-type">Shipping</td>
                                                                        <td class="cgt-des ship-opt">
                                                                            <div class="shipp">
                                                                                <input type="radio" id="pay-toggle"
                                                                                    name="ship">
                                                                                <label for="pay-toggle">Flat
                                                                                    Rate:
                                                                                    <span>$03</span></label>
                                                                            </div>
                                                                            <div class="shipp">
                                                                                <input type="radio" id="pay-toggle2"
                                                                                    name="ship">
                                                                                <label for="pay-toggle2">Free
                                                                                    Shipping</label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="cart_item">
                                                                        <td class="ctg-type crt-total"> Total
                                                                        </td>
                                                                        <td class="cgt-des prc-total"> $
                                                                            2,055.00
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="payment-section mt-20 clearfix">
                                                    <div class="pay-toggle">
                                                        <form action="#">
                                                            <div class="pay-type-total">
                                                                <div class="pay-type">
                                                                    <input type="radio" id="pay-toggle01" name="pay">
                                                                    <label for="pay-toggle01">Direct Bank
                                                                        Transfer</label>
                                                                </div>
                                                                <div class="pay-type">
                                                                    <input type="radio" id="pay-toggle02" name="pay">
                                                                    <label for="pay-toggle02">Cheque
                                                                        Payment</label>
                                                                </div>
                                                                <div class="pay-type">
                                                                    <input type="radio" id="pay-toggle03" name="pay">
                                                                    <label for="pay-toggle03">Cash on
                                                                        Delivery</label>
                                                                </div>
                                                                <div class="pay-type">
                                                                    <input type="radio" id="pay-toggle04" name="pay">
                                                                    <label for="pay-toggle04">Paypal</label>
                                                                </div>
                                                            </div>
                                                            <div class="input-box mt-20">
                                                                <a class="btn-def btn2" href="#">Place order</a>
                                                            </div>
                                                        </form>
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
    </div>
    <!--cart-checkout-area end-->

    <!-- footer area start-->
@endsection
