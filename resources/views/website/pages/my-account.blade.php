
@extends('website.layouts.main')


@section('content')
        <!-- End of header area -->

        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>My Account</h5>
                </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
                    <li class="active">Account</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->

        <!--service idea area are start -->
        <div class="idea-area  ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="idea-tab-menu">
                            <ul class="nav idea-tab" role="tablist">
                                <li role="presentation"><a class="active" href="#creativity" aria-controls="creativity"
                                        role="tab" data-bs-toggle="tab">Personal Info</a></li>
                                <li role="presentation"><a href="#ideas" aria-controls="ideas" role="tab"
                                        data-bs-toggle="tab">Shipping Address</a></li>
                                <li role="presentation"><a href="#design" aria-controls="design" role="tab"
                                        data-bs-toggle="tab">Billing Details</a></li>
                                <li role="presentation"><a href="#devlopment" aria-controls="devlopment" role="tab"
                                        data-bs-toggle="tab">My Order</a></li>
                                <li role="presentation"><a href="#markenting" aria-controls="markenting" role="tab"
                                        data-bs-toggle="tab">Payment Method</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="idea-tab-content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="creativity">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>First Name <em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Last Name<em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Email Address<em>*</em></label>
                                                <input type="email" name="email" class="info" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Phone Number<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Password<em>*</em></label>
                                                <input type="password" name="email" class="info" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Confirm Password<em>*</em></label>
                                                <input type="password" name="phone" class="info" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Country <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Bangladesh">Bangladesh</option>
                                                    <option data-tokens="India">India</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Srilanka">Srilanka</option>
                                                    <option data-tokens="Nepal">Nepal</option>
                                                    <option data-tokens="Butan">Butan</option>
                                                    <option data-tokens="USA">USA</option>
                                                    <option data-tokens="England">England</option>
                                                    <option data-tokens="Brazil">Brazil</option>
                                                    <option data-tokens="Canada">Canada</option>
                                                    <option data-tokens="China">China</option>
                                                    <option data-tokens="Koeria">Koeria</option>
                                                    <option data-tokens="Soudi">Soudi Arabia</option>
                                                    <option data-tokens="Spain">Spain</option>
                                                    <option data-tokens="France">France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Town/City <em>*</em></label>
                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>State/Divison <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Barisal">Barisal</option>
                                                    <option data-tokens="Dhaka">Dhaka</option>
                                                    <option data-tokens="Kulna">Kulna</option>
                                                    <option data-tokens="Rajshahi">Rajshahi</option>
                                                    <option data-tokens="Sylet">Sylet</option>
                                                    <option data-tokens="Chittagong">Chittagong</option>
                                                    <option data-tokens="Rangpur">Rangpur</option>
                                                    <option data-tokens="Maymanshing">Maymanshing</option>
                                                    <option data-tokens="Cox">Cox's Bazar</option>
                                                    <option data-tokens="Saint">Saint Martin</option>
                                                    <option data-tokens="Kuakata">Kuakata</option>
                                                    <option data-tokens="Sajeq">Sajeq</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Post Code/Zip Code<em>*</em></label>
                                                <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Address <em>*</em></label>
                                                <input type="text" name="add1" class="info mb-10"
                                                    placeholder="Street Address">
                                                <input type="text" name="add2" class="info mt10"
                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-8">
                                            <div class="checkbox checkbox-2">
                                                <label> <small>
                                                        <input name="signup" type="checkbox">I wish to subscribe to the The
                                                        clothing newsletter.
                                                    </small> </label>
                                                <br>
                                                <label> <small>
                                                        <input name="signup" type="checkbox">I have read and agree to the <a
                                                            href="#">Privacy Policy</a>
                                                    </small> </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 text-end">
                                            <a class="btn-def btn2" href="#">Save</a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="ideas">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>First Name <em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Last Name<em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Email Address<em>*</em></label>
                                                <input type="email" name="email" class="info" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Phone Number<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Country <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Bangladesh">Bangladesh</option>
                                                    <option data-tokens="India">India</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Srilanka">Srilanka</option>
                                                    <option data-tokens="Nepal">Nepal</option>
                                                    <option data-tokens="Butan">Butan</option>
                                                    <option data-tokens="USA">USA</option>
                                                    <option data-tokens="England">England</option>
                                                    <option data-tokens="Brazil">Brazil</option>
                                                    <option data-tokens="Canada">Canada</option>
                                                    <option data-tokens="China">China</option>
                                                    <option data-tokens="Koeria">Koeria</option>
                                                    <option data-tokens="Soudi">Soudi Arabia</option>
                                                    <option data-tokens="Spain">Spain</option>
                                                    <option data-tokens="France">France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Town/City <em>*</em></label>
                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>State/Divison <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Barisal">Barisal</option>
                                                    <option data-tokens="Dhaka">Dhaka</option>
                                                    <option data-tokens="Kulna">Kulna</option>
                                                    <option data-tokens="Rajshahi">Rajshahi</option>
                                                    <option data-tokens="Sylet">Sylet</option>
                                                    <option data-tokens="Chittagong">Chittagong</option>
                                                    <option data-tokens="Rangpur">Rangpur</option>
                                                    <option data-tokens="Maymanshing">Maymanshing</option>
                                                    <option data-tokens="Cox">Cox's Bazar</option>
                                                    <option data-tokens="Saint">Saint Martin</option>
                                                    <option data-tokens="Kuakata">Kuakata</option>
                                                    <option data-tokens="Sajeq">Sajeq</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Post Code/Zip Code<em>*</em></label>
                                                <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Address <em>*</em></label>
                                                <input type="text" name="add1" class="info mb-10"
                                                    placeholder="Street Address">
                                                <input type="text" name="add2" class="info mt10"
                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-end">
                                            <a class="btn-def btn2" href="#">Save</a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="design">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>First Name <em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Last Name<em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Email Address<em>*</em></label>
                                                <input type="email" name="email" class="info" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Phone Number<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Country <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Bangladesh">Bangladesh</option>
                                                    <option data-tokens="India">India</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Srilanka">Srilanka</option>
                                                    <option data-tokens="Nepal">Nepal</option>
                                                    <option data-tokens="Butan">Butan</option>
                                                    <option data-tokens="USA">USA</option>
                                                    <option data-tokens="England">England</option>
                                                    <option data-tokens="Brazil">Brazil</option>
                                                    <option data-tokens="Canada">Canada</option>
                                                    <option data-tokens="China">China</option>
                                                    <option data-tokens="Koeria">Koeria</option>
                                                    <option data-tokens="Soudi">Soudi Arabia</option>
                                                    <option data-tokens="Spain">Spain</option>
                                                    <option data-tokens="France">France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Town/City <em>*</em></label>
                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>State/Divison <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Barisal">Barisal</option>
                                                    <option data-tokens="Dhaka">Dhaka</option>
                                                    <option data-tokens="Kulna">Kulna</option>
                                                    <option data-tokens="Rajshahi">Rajshahi</option>
                                                    <option data-tokens="Sylet">Sylet</option>
                                                    <option data-tokens="Chittagong">Chittagong</option>
                                                    <option data-tokens="Rangpur">Rangpur</option>
                                                    <option data-tokens="Maymanshing">Maymanshing</option>
                                                    <option data-tokens="Cox">Cox's Bazar</option>
                                                    <option data-tokens="Saint">Saint Martin</option>
                                                    <option data-tokens="Kuakata">Kuakata</option>
                                                    <option data-tokens="Sajeq">Sajeq</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Post Code/Zip Code<em>*</em></label>
                                                <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Address <em>*</em></label>
                                                <input type="text" name="add1" class="info mb-10"
                                                    placeholder="Street Address">
                                                <input type="text" name="add2" class="info mt10"
                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-end">
                                            <a class="btn-def btn2" href="#">Save</a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="devlopment">
                                    <form action="#" method="post">
                                        <div class="table-responsive">
                                            <table class="checkout-area table text-center">
                                                <thead>
                                                    <tr class="cart_item check-heading">
                                                        <td class="ctg-type"> Product</td>
                                                        <td class="cgt-des"> Total</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart_item check-item prd-name">
                                                        <td class="ctg-type"> Aenean sagittis × <span>1</span></td>
                                                        <td class="cgt-des"> $1,026.00</td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="ctg-type"> Subtotal</td>
                                                        <td class="cgt-des">$1,026.00</td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="ctg-type">Shipping</td>
                                                        <td class="cgt-des ship-opt">
                                                            <div class="shipp">
                                                                <input type="radio" id="pay-toggle" name="ship">
                                                                <label for="pay-toggle">Flat Rate:
                                                                    <span>$03</span></label>
                                                            </div>
                                                            <div class="shipp">
                                                                <input type="radio" id="pay-toggle2" name="ship">
                                                                <label for="pay-toggle2">Free Shipping</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="ctg-type crt-total"> Total</td>
                                                        <td class="cgt-des prc-total"> $ 1.029.00 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-end">
                                            <a class="btn-def btn2" href="#">Save</a>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="markenting">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Card Type <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="paypal">Paypal</option>
                                                    <option data-tokens="visa">visa</option>
                                                    <option data-tokens="master-card">master-card</option>
                                                    <option data-tokens="discover">discover</option>
                                                    <option data-tokens="payneor">payneor</option>
                                                    <option data-tokens="skrill">skrill</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Card Number<em>*</em></label>
                                                <input type="text" name="email" class="info" placeholder="Card Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Security Code<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Security Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Month <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Januray">Januray</option>
                                                    <option data-tokens="February">February</option>
                                                    <option data-tokens="March">March</option>
                                                    <option data-tokens="April">April</option>
                                                    <option data-tokens="May">May</option>
                                                    <option data-tokens="June">June</option>
                                                    <option data-tokens="July">July</option>
                                                    <option data-tokens="August">August</option>
                                                    <option data-tokens="September">September</option>
                                                    <option data-tokens="Ocotober">Ocotober</option>
                                                    <option data-tokens="November">November</option>
                                                    <option data-tokens="December">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Year<em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2017">2017</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2020">2020</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2023">2023</option>
                                                    <option data-tokens="2024">2024</option>
                                                    <option data-tokens="2025">2025</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="payment-btn-area mt-20 row">
                                                <div class="col-md-4 text-start">
                                                    <a class="btn-def btn2" href="#">Pay Now</a>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <a class="btn-def btn2" href="#">Cancel Order</a>
                                                </div>
                                                <div class="col-md-4 text-end">
                                                    <a class="btn-def btn2" href="#">Continue</a>
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
        <!--service idea area are end -->

        <!-- footer area start-->
        @endsection