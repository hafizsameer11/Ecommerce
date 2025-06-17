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
                            <li class="breadcrumb-item"><a href="#">Products</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Product</h4>
                </div>
            </div>
        </div>

        <!-- Card Start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Update Product Information</h4>
                        <p class="text-muted mb-4">Fill all product information below</p>

                        {{-- Show Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <!-- Left Column -->
                                <div class="col-md-6">
                                    <!-- Featured Image -->
                                    <div class="form-group">
                                        <label>Featured Image</label><br>
                                        @if($product->featured_image)
                                            <img src="{{ asset('uploads/products/' . $product->featured_image) }}" alt="Current Image" width="120" class="mb-2 rounded">
                                        @else
                                            <p>No image uploaded.</p>
                                        @endif
                                        <input type="file" name="featured_image" class="form-control">
                                    </div>

                                    <!-- Title -->
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ old('title', $product->title) }}">
                                    </div>

                                    <!-- Price -->
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" value="{{ old('price', $product->price) }}">
                                    </div>

                                    <!-- Discount Price -->
                                    <div class="form-group">
                                        <label>Discount Price</label>
                                        <input type="text" name="discount_price" class="form-control" value="{{ old('discount_price', $product->discount_price) }}">
                                    </div>

                                    <!-- Rating -->
                                    <div class="form-group">
                                        <label>Rating</label>
                                        @php
                                            $currentRating = $product->rating ? mb_strlen($product->rating) : null;
                                        @endphp
                                        <select name="rating" class="form-control">
                                            <option value="">Select Rating</option>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <option value="{{ $i }}" {{ old('rating', $currentRating) == $i ? 'selected' : '' }}>
                                                    {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="col-md-6">
                                    <!-- Short Description -->
                                    <div class="form-group">
                                        <label>Short Description</label>
                                        <textarea name="short_description" class="form-control" rows="3">{{ old('short_description', $product->short_description) }}</textarea>
                                    </div>

                                    <!-- Description -->
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" rows="5">{{ old('description', $product->description) }}</textarea>
                                    </div>

                                    <!-- Category -->
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Subcategory -->
                                    <div class="form-group">
                                        <label>Subcategory</label>
                                        <select name="sub_category_id" class="form-control">
                                            <option value="">Select Subcategory</option>
                                            @foreach ($subcategories as $sub)
                                                <option value="{{ $sub->id }}" {{ old('sub_category_id', $product->sub_category_id) == $sub->id ? 'selected' : '' }}>
                                                    {{ $sub->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Buttons -->
                            <div class="form-group mb-0 mt-3">
                                <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                    <i class="mdi mdi-content-save"></i> Update Product
                                </button>
                                <a href="{{ route('products.index') }}" class="btn btn-secondary waves-effect">
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
