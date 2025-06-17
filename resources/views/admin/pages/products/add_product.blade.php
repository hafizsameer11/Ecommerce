@extends('admin.layouts.main')

@section('content')
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-12"> <!-- This centers and controls width -->
      <div class="card">
        <div class="card-header">
          <h5>Create New Entry</h5>
        </div>
        <div class="card-body col-lg-10">
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <!-- Featured Image -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="featured_image" class="form-label">Featured Image</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-image"></i></span>
                    </div>
                    <input type="file" name="featured_image" id="featured_image" class="form-control">
                </div>
            </div>
        </div>

        {{-- mutliple image --}}
       <div class="col-md-6">
            <div class="form-group">
                <label for="images" class="form-label">Upload Multiple Images</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-image"></i></span>
                    </div>
                    <input type="file" name="images[]" multiple id="images" class="form-control">
                </div>
            </div>
        </div>

        <!-- Title -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-format-title"></i></span>
                    </div>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" placeholder="Product Title">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Price -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-currency-usd"></i></span>
                    </div>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" placeholder="Enter Price">
                </div>
            </div>
        </div>

        <!-- Discount Price -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="discount_price" class="form-label">Discount Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-sale"></i></span>
                    </div>
                    <input type="text" name="discount_price" id="discount_price" class="form-control" value="{{ old('discount_price') }}" placeholder="Enter Discount Price">
                </div>
            </div>
        </div>
    </div>

    <!-- Rating -->
    <div class="form-group">
        <label for="rating" class="form-label">Rating</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="mdi mdi-star"></i></span>
            </div>
            <select name="rating" id="rating" class="form-control">
                <option value="">Select Rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                @endfor
            </select>
        </div>
    </div>

    <!-- Short Description -->
    <div class="form-group">
        <label for="short_description" class="form-label">Short Description</label>
        <textarea name="short_description" id="short_description" class="form-control" rows="3" placeholder="Enter short description">{{ old('short_description') }}</textarea>
    </div>

    <!-- Description -->
    <div class="form-group">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter full description">{{ old('description') }}</textarea>
    </div>

    <div class="row">
        <!-- Category -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="category_id" class="form-label">Category</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-folder-outline"></i></span>
                    </div>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Subcategory -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="sub_category_id" class="form-label">Subcategory</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-folder-multiple-outline"></i></span>
                    </div>
                    <select name="sub_category_id" id="sub_category_id" class="form-control">
                        <option value="">Select Subcategory</option>
                        @foreach ($subcategories as $sub)
                            <option value="{{ $sub->id }}" {{ old('sub_category_id') == $sub->id ? 'selected' : '' }}>{{ $sub->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Submit -->
    <div class="form-group mb-0">
        <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
            <i class="mdi mdi-content-save"></i> Create Product
        </button>
        <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
    </div>
</form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

