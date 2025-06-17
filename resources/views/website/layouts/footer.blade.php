<div class="footer-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="single-footer contact-us">
                    <div class="footer-title uppercase">
                        <h5>Contact US</h5>
                    </div>
                    <ul>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                            <div class="contact-text">
                                <p>Address: Your address goes here</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                            <div class="contact-text">
                                <p><span><a href="mailto://demo@example.com">demo@example.com</a></span>
                                    <span><a href="mailto://info@example.com">info@example.com</a></span>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                            <div class="contact-text">
                                <p><a href="tel://01234567890">01234567890</a> <a
                                        href="tel://01234567890">01234567890</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4">
                <div class="single-footer informaton-area">
                    <div class="footer-title uppercase">
                        <h5>Information</h5>
                    </div>
                    <div class="informatoin">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Returnes</a></li>
                            <li><a href="#">Private Policy</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-4 offset-xl-1">
                <div class="single-footer newslatter-area">
                    <div class="footer-title uppercase">
                        <h5>Get Newsletters</h5>
                    </div>
                    <div class="newslatter">
                        <form action="#" method="post">
                            <div class="input-box pos-rltv">
                                <input placeholder="Type Your Email hear" type="text">
                                <a href="#">
                                    <i class="zmdi zmdi-arrow-right"></i>
                                </a>
                            </div>
                        </form>
                        <div class="social-icon socile-icon-style-3 mt-40">
                            <div class="footer-title uppercase">
                                <h5>Social Network</h5>
                            </div>
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer area start-->

<!--footer bottom area start-->
<div class="footer-bottom global-table">
    <div class="global-row">
        <div class="global-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyrigth text-center">
                            © 2022 <span class="text-capitalize">clothing</span>. Made
                            with <i style="color: #f53400;" class="fa fa-heart"></i>
                            by
                            <a href="https://themeforest.net/user/codecarnival/portfolio">CodeCarnival</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="payment-support text-end">
                            <li>
                                <a href="#"><img src="images/icons/pay1.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/icons/pay2.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/icons/pay3.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/icons/pay4.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="images/icons/pay5.png" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer bottom area end-->

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->

    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    {{-- <div class="modal-product">

                        @foreach ($products as $product)
                            @php
                                $images = json_decode($product->images, true); // true = associative array
                            @endphp

                            <div class="product-images">
                                <!--modal tab start-->
                                <div class="portfolio-thumbnil-area-2">
                                    <div class="tab-content active-portfolio-area-2">
                                        <div role="tabpanel" class="tab-pane active" id="view1">
                                            <div class="product-img">
                                                <a href="#"><img
                                                        src="{{ asset('uploads/products/' . $product->featured_image) }}"
                                                        alt="Single portfolio" />





                                                </a>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="view2">
                                            <div class="product-img">
                                                <a href="#"> <img
                                                        src="{{ asset('assets/website/images/product/04.jpg') }}"
                                                        alt="" />

                                                </a>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="view3">
                                            <div class="product-img">
                                                <a href="#"><img
                                                        src="{{ asset('assets/website/images/product/03.jpg') }}"
                                                        alt="Single portfolio" />
                                                </a>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="view4">
                                            <div class="product-img">
                                                <a href="#"><img
                                                        src="{{ asset('assets/website/images/product/04.jpg') }}"
                                                        alt="Single portfolio" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-more-views-2">
                                        <ul class="thumbnail-carousel-modal-2 nav" data-tabs="tabs">
                                            @if (!empty($images) && isset($images[0]))
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#">
                                                        <img src="{{ asset('uploads/products/multiple/' . $images[0]) }}"
                                                            alt="Extra Image">
                                                    </a>
                                                </li>
                                            @endif

                                            @if (!empty($images) && isset($images[0]))
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#">
                                                        <img src="{{ asset('uploads/products/multiple/' . $images[0]) }}"
                                                            alt="Extra Image">
                                                    </a>
                                                </li>
                                            @endif


                                            @if (!empty($images) && isset($images[0]))
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#">
                                                        <img src="{{ asset('uploads/products/multiple/' . $images[0]) }}"
                                                            alt="Extra Image">
                                                    </a>
                                                </li>
                                            @endif



                                            @if (!empty($images) && isset($images[0]))
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#">
                                                        <img src="{{ asset('uploads/products/multiple/' . $images[0]) }}"
                                                            alt="Extra Image">
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--modal tab end-->
                        <!-- .product-images -->
                        @foreach ($products as $product)
                            <div class="product-info">
                                <h1>{{ $product->title }}</h1>
                                <div class="price-box-3">
                                    <div class="s-price-box"> <span
                                            class="new-price">{{ $product->discount_price }}</span>
                                        <span class="old-price">{{ $product->price }}</span>
                                    </div>
                                </div> <a href="{{ route('shop') }}" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3" min="1">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">{{ $product->short_description }} </div>
                                <div class="social-sharing-modal">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons-modal">
                                            <li><a title="Facebook" href="#" class="facebook m-single-icon"><i
                                                        class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a title="Twitter" href="#" class="twitter m-single-icon"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a title="Pinterest" href="#"
                                                    class="pinterest m-single-icon"><i
                                                        class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li><a title="Google +" href="#" class="gplus m-single-icon"><i
                                                        class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li><a title="LinkedIn" href="#" class="linkedin m-single-icon"><i
                                                        class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- .product-info -->
                    </div> --}}
                    <!-- .modal-product -->
                </div>
                <!-- .modal-body -->
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>

    <!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->
</div>
<!-- Body main wrapper end -->
