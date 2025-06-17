@extends('admin.layouts.main')

@section('content')
<!-- Start right Content here -->
<div class="page-content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumb and Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Product Variations</a></li>
                            <li class="breadcrumb-item active">Edit Variation</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Product Variation</h4>
                </div>
            </div>
        </div>

        <!-- Card Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Update Variation</h4>
                        <p class="text-muted mb-4">Modify the variation details below.</p>

                        {{-- Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('productvariation.update', $variation->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <!-- Product -->
                                <div class="col-md-6 mb-3">
                                    <label for="product_id">Product</label>
                                    <select name="product_id" id="product_id" class="form-control" required>
                                        <option value="">Select Product</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" {{ old('product_id', $variation->product_id) == $product->id ? 'selected' : '' }}>
                                                {{ $product->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Color -->
                                <div class="col-md-6 mb-3">
                                    <label for="color">Color</label>
                                    <select name="color" id="color" class="form-control" required>
                                        <option value="">Select Color</option>
                                        @foreach(['Red', 'Blue', 'Green', 'Black', 'White', 'Yellow', 'Pink'] as $color)
                                            <option value="{{ $color }}" {{ old('color', $variation->color) == $color ? 'selected' : '' }}>
                                                {{ $color }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Size -->
                                <div class="col-md-6 mb-3">
                                    <label for="size">Size</label>
                                    <select name="size" id="size" class="form-control" required>
                                        <option value="">Select Size</option>
                                        @foreach(['XS', 'S', 'M', 'L', 'XL', 'XXL'] as $size)
                                            <option value="{{ $size }}" {{ old('size', $variation->size) == $size ? 'selected' : '' }}>
                                                {{ $size }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- SKU -->
                                <div class="col-md-6 mb-3">
                                    <label for="sku">SKU</label>
                                    <input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku', $variation->sku) }}" placeholder="Enter SKU" required>
                                </div>

                                <!-- Additional Price -->
                                <div class="col-md-6 mb-3">
                                    <label for="additional_price">Additional Price</label>
                                    <input type="text" step="0.01" name="additional_price" id="additional_price" class="form-control" value="{{ old('additional_price', $variation->additional_price) }}" placeholder="Enter additional price">
                                </div>
                            </div>

                            <!-- Submit Buttons -->
                            <div class="form-group mb-0 mt-3">
                                <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                    <i class="mdi mdi-content-save"></i> Update Variation
                                </button>
                                <a href="{{ route('productvariation.index') }}" class="btn btn-secondary waves-effect">
                                    Cancel
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div> <!-- page-content-wrapper -->
@endsection
