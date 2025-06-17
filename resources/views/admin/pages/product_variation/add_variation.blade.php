@extends('admin.layouts.main')

@section('content')

<div class="page-content-wrapper">
    <div class="container-fluid">
        <!-- Page Title and Breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active">Add Product Variation</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Product Variation</h4>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Product Variation Information</h4>
                        <p class="text-muted mb-4">Fill all information below</p>

                        <form action="{{ route('productvariation.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <!-- Product -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="product_id">Select Product</label>
                                        <select name="product_id" id="product_id" class="form-control" required>
                                            <option value="">-- Select Product --</option>
                                            @foreach($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Color -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <select name="color" id="color" class="form-control" required>
                                            <option value="">Select Color</option>
                                            <option value="Red">Red</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Green">Green</option>
                                            <option value="Black">Black</option>
                                            <option value="White">White</option>
                                            <option value="Yellow">Yellow</option>
                                            <option value="Pink">Pink</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Size -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="size">Size</label>
                                        <select name="size" id="size" class="form-control" required>
                                            <option value="">Select Size</option>
                                            <option value="XS">Extra Small (XS)</option>
                                            <option value="S">Small (S)</option>
                                            <option value="M">Medium (M)</option>
                                            <option value="L">Large (L)</option>
                                            <option value="XL">Extra Large (XL)</option>
                                            <option value="XXL">2X Large (XXL)</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- SKU -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sku">SKU</label>
                                        <input type="text" name="sku" id="sku" class="form-control" placeholder="Enter SKU" required>
                                    </div>
                                </div>

                                <!-- Additional Price -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="additional_price">Additional Price</label>
                                        <input type="text" step="0.01" name="additional_price" id="additional_price" class="form-control" placeholder="Enter additional price">
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                    <i class="mdi mdi-content-save"></i> Save Variation
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- container-fluid -->
</div> <!-- page-content-wrapper -->

@endsection
