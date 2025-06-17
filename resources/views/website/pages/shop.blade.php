@extends('website.layouts.main')


@section('content')
    <!-- End of header area -->

    <!--breadcumb area start -->
    <div class="breadcumb-area breadcumb-2 overlay pos-rltv">
        <div class="bread-main">
            <div class="bred-hading text-center">
                {{-- <h5>/h5> --}}
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{ route('home') }}">Home</a></li>
                <li class="active">Shop</li>
            </ol>
        </div>
    </div>

    <div class="shop-main-area grid-view_area ptb-70">
        <div class="container">
            <div class="row">
                <!--main-shop-product start-->
                <div class="col-lg-12 col-md-8 order-lg-2 order-md-2 order-1">
                    <div class="shop-wraper">
                        <div class="col-lg-12">

                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <div class="shop-total-product-area clearfix mt-35">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="grid">
                                        <div class="total-shop-product-grid row">
                                            @foreach ($products as $product)
                                                <div class="col-lg-3 col-md-6 item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <div class="product-label">
                                                                <div class="new">New</div>
                                                            </div>

                                                            <div class="single-prodcut-img product-overlay pos-rltv">
                                                                <a
                                                                    href="{{ route('singleproduct', ['id' => $product->id]) }}">
                                                                    <img alt=""
                                                                        src="{{ asset('uploads/products/' . $product->featured_image) }}"
                                                                        style="width: 274px; height: 392px; object-fit: cover;"
                                                                        class="primary-image">
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

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-text">
                                                            <div class="prodcut-name">
                                                                <a
                                                                    href="{{ route('singleproduct', ['id' => $product->id]) }}">{{ $product->title }}</a>
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

                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="border: none">
                                        <div class="pagination-btn text-center">
                                            {{ $products->withQueryString()->links('pagination::bootstrap-4') }}
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
@endsection
