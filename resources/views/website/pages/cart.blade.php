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
                            {{-- <div class="col-lg-12 text-center pb-60">
                                <ul class="nav heading-style-3" role="tablist">
                                    <li role="presentation"><a class="active shadow-box" href="#cart" aria-controls="cart"
                                            role="tab" data-bs-toggle="tab"><span>01</span>
                                            Shopping
                                            cart</a></li>
                                    <li role="presentation"><a class="shadow-box" href="#checkout" aria-controls="checkout"
                                            role="tab" data-bs-toggle="tab"><span>02</span>Checkout</a></li>
                                    <li role="presentation"><a class="shadow-box" href="#complete-order"
                                            aria-controls="complete-order" role="tab"
                                            data-bs-toggle="tab"><span>03</span>
                                            complete-order</a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="clearfix"></div>
                        <div class="content-tab-product-category pb-70">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="cart">
                                    <!-- cart are start-->
                                    <div class="cart-page-area">
                                        {{-- <form method="POST" action="{{ route('cart.bulkUpdate') }}"> --}}
                                        {{-- @csrf --}}
                                        <div class="table-responsive mb-20">
                                            <table class="shop_table-2 cart table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail ">Image</th>
                                                        <th class="product-name ">Product Name</th>
                                                        <th class="product-price ">Unit Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal ">Total</th>
                                                        <th class="product-remove">Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($cartItems as $id => $item)
                                                        <tr class="cart_item">
                                                            <td class="item-img">
                                                                <a href="#"><img
                                                                        src="{{ asset('uploads/products/' . $item['image']) }}"
                                                                        alt="" width="80"></a>
                                                            </td>
                                                            <td class="item-title">
                                                                <a href="#">{{ $item['name'] }}</a>
                                                            </td>
                                                            <td class="item-price">
                                                                ${{ number_format($item['price'], 2) }}
                                                            </td>
                                                            <td class="item-qty">
                                                                <div class="cart-quantity">
                                                                    <div class="product-qty">
                                                                        <div class="cart-plus-minus">
                                                                            <div class="dec qtybutton" onclick="decreaseQty('{{ $id }}')">-</div>
                                                                            <input type="text"
                                                                                id="qty_{{ $id }}"
                                                                                value="{{ $item['quantity'] }}"
                                                                                class="cart-plus-minus-box"
                                                                                readonly>
                                                                            <div class="inc qtybutton" onclick="increaseQty('{{ $id }}')">+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="total-price">
                                                                <strong>${{ number_format($item['price'] * $item['quantity'], 2) }}</strong>
                                                            </td>
                                                            <td class="remove-item">
                                                                <form method="POST"
                                                                    action="{{ route('cart.remove', $id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a href="#"
                                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="6">Your cart is empty.</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>

                                            </table>
                                        </div>


                                        <div class="cart-bottom-area">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-7">
                                                    <div class="update-coupne-area">
                                                        <div class="update-continue-btn text-end pb-20">
                                                            <form method="POST" action="{{ route('cart.bulkUpdate') }}">
                                                                @csrf
                                                                {{-- Only include the inputs: no <table> here --}}
                                                                    @foreach ($cartItems as $id => $item)
                                                                    <input type="hidden" name="quantities[{{ $id }}]" id="input_qty_{{ $id }}" value="{{ $item['quantity'] }}">
                                                                @endforeach


                                                                <button type="submit" class="btn btn-dark">Update
                                                                    Cart</button>
                                                            </form>


                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-5">
                                                    <div class="cart-total-area">
                                                        <div class="catagory-title cat-tit-5 mb-20 text-end">
                                                            <h3>Cart Totals</h3>
                                                        </div>
                                                        <div class="sub-shipping">
                                                            <p>Subtotal <span>${{ number_format($totalAmount, 2) }}</span>
                                                            </p>
                                                            <p>Shipping <span>$0.00</span></p> {{-- You can add dynamic shipping logic --}}
                                                        </div>
                                                        <div class="shipping-method text-end">
                                                            <div class="shipp">
                                                                <input type="radio" name="ship" id="pay-toggle1">
                                                                <label for="pay-toggle1">Flat Rate</label>
                                                            </div>
                                                            <div class="shipp">
                                                                <input type="radio" name="ship" id="pay-toggle3">
                                                                <label for="pay-toggle3">Direct Bank
                                                                    Transfer</label>
                                                            </div>
                                                            <p><a href="#">Calculate Shipping</a></p>
                                                        </div>
                                                        <div class="process-cart-total">
                                                            <p>Total <span>$150.00</span></p>
                                                        </div>
                                                        <div class="process-checkout-btn text-end">
                                                            <a class="btn-def btn2" href="{{ route('checkout') }}">Process To
                                                                Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- </form> --}}
                                    </div>
                                    <!-- cart are end-->
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

    <script>
        function increaseQty(id) {
            const visibleInput = document.getElementById('qty_' + id);
            const hiddenInput = document.getElementById('input_qty_' + id);

            let current = parseInt(visibleInput.value);
            console.log("current", current, "id", id, "visibleInput", visibleInput.value, "hiddenInput", hiddenInput.value);
            if (!isNaN(current)) {
                // current += 1;
                visibleInput.value = current;
                hiddenInput.value = current+1;
            }
        }

        function decreaseQty(id) {
            const visibleInput = document.getElementById('qty_' + id);
            const hiddenInput = document.getElementById('input_qty_' + id);

            let current = parseInt(visibleInput.value);
            if (!isNaN(current) && current > 1) {
                // current -= 1;
                visibleInput.value = current;
                hiddenInput.value = current-1;
            }
        }
    </script>


@endsection
