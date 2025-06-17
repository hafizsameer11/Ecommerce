@extends('website.layouts.main')

@section('content')
    <!-- Header and breadcrumb area -->
    <div class="breadcumb-area overlay pos-rltv">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h5>Cart Details</h5>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="{{ route('home') }}">Home</a></li>
                <li class="active">Cart</li>
            </ol>
        </div>
    </div>

    <!-- Cart Checkout Area -->
    <div class="cart-checkout-area pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-area">
                        <div class="content-tab-product-category pb-70">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="checkout">
                                    <div class="checkout-area">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Include any messages -->
                                                @if(session('success'))
                                                    <div class="alert alert-success">{{ session('success') }}</div>
                                                @endif
                                                @if(session('error'))
                                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                                @endif

                                                <!-- Billing Form -->
                                                <form action="{{ route('home') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4>Billing Details</h4>
                                                            <div class="input-box mb-3">
                                                                <label>First Name *</label>
                                                                <input type="text" name="first_name" class="form-control" required>
                                                            </div>
                                                            <div class="input-box mb-3">
                                                                <label>Last Name *</label>
                                                                <input type="text" name="last_name" class="form-control" required>
                                                            </div>
                                                            <div class="input-box mb-3">
                                                                <label>Email Address *</label>
                                                                <input type="email" name="email" class="form-control" required>
                                                            </div>
                                                            <div class="input-box mb-3">
                                                                <label>Phone Number *</label>
                                                                <input type="text" name="phone" class="form-control" required>
                                                            </div>
                                                            <div class="input-box mb-3">
                                                                <label>Street Address *</label>
                                                                <input type="text" name="address" class="form-control" required>
                                                            </div>
                                                            <div class="input-box mb-3">
                                                                <label>City *</label>
                                                                <input type="text" name="city" class="form-control" required>
                                                            </div>
                                                            <div class="input-box mb-3">
                                                                <label>Post Code *</label>
                                                                <input type="text" name="zip_code" class="form-control" required>
                                                            </div>
                                                            <div class="input-box mb-3">
                                                                <label>Country</label>
                                                                <input type="text" name="country" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h4>Order Notes</h4>
                                                            <div class="input-box mb-3">
                                                                <label>Notes</label>
                                                                <textarea name="notes" class="form-control" placeholder="Notes about your order."></textarea>
                                                            </div>

                                                            <div class="input-box mt-4">
                                                                <button type="submit" class="btn btn-primary w-100">Place Order</button>
                                                            </div>
                                                        </div>
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
@endsection
