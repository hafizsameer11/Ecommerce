@extends('admin.layouts.main')

@section('content')
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <h5>Update Product</h5>
        </div>
        <div class="card-body col-lg-10">

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

            <!-- Featured Image -->
            <div class="mb-3">
              <label for="featured_image" class="form-label text-white">Featured Image</label><br>

              @if($product->featured_image)
                <img src="{{ asset('uploads/products/' . $product->featured_image) }}" alt="Current Image" width="120" class="mb-2 rounded">
              @else
                <p class="text-white">No image uploaded.</p>
              @endif

              <input type="file" name="featured_image" id="featured_image" class="form-control w-100 mt-2">
            </div>

            {{-- muilti images --}}

            
               {{-- mutliple image --}}
      {{-- Previously Uploaded Multiple Images --}}
            @if($product->images)
              <div class="mb-3">
                <label class="form-label text-black">Previously Uploaded Images</label><br>
                @foreach (json_decode($product->images) as $img)
                  <img src="{{ asset('uploads/products/multiple/' . $img) }}" alt="Product Image" width="100" class="img-thumbnail m-1">
                @endforeach
              </div>
            @endif

            {{-- Upload New Multiple Images --}}
            <div class="mb-3">
              <label for="images" class="form-label text-black">Upload Multiple Images</label>
              <input type="file" name="images[]" multiple id="images" class="form-control">
            </div>

            <!-- Title -->
            <div class="mb-3">
              <label for="title" class="form-label text-black">Title</label>
              <input type="text" name="title" id="title" class="form-control w-100" value="{{ old('title', $product->title) }}">
            </div>

            <!-- Price -->
            <div class="mb-3">
              <label for="price" class="form-label text-black">Price</label>
              <input type="text" name="price" id="price" class="form-control w-100" value="{{ old('price', $product->price) }}">
            </div>

            <!-- Discount Price -->
            <div class="mb-3">
              <label for="discount_price" class="form-label text-black">Discount Price</label>
              <input type="text" name="discount_price" id="discount_price" class="form-control w-100" value="{{ old('discount_price', $product->discount_price) }}">
            </div>

            <!-- Rating -->
            <div class="mb-3">
              <label for="rating" class="form-label text-black">Rating</label>
              @php
                $currentRating = $product->rating ? mb_strlen($product->rating) : null;
              @endphp
              <select name="rating" id="rating" class="form-select w-100">
                <option value="">Select Rating</option>
                @for ($i = 1; $i <= 5; $i++)
                  <option value="{{ $i }}" {{ old('rating', $currentRating) == $i ? 'selected' : '' }}>
                    {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                  </option>
                @endfor
              </select>
            </div>

            <!-- Short Description -->
            <div class="mb-3">
              <label for="short_description" class="form-label text-black">Short Description</label>
              <textarea name="short_description" id="short_description" class="form-control w-100">{{ old('short_description', $product->short_description) }}</textarea>
            </div>

            <!-- Description -->
            <div class="mb-3">
              <label for="description" class="form-label text-black">Description</label>
              <textarea name="description" id="description" class="form-control w-100">{{ old('description', $product->description) }}</textarea>
            </div>

            <!-- Category -->
            <div class="mb-3">
              <label for="category_id" class="form-label text-black">Category</label>
              <select name="category_id" id="category_id" class="form-select w-100" style="background-color: #ffffff; color: #000000;">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                  </option>
                @endforeach
              </select>
            </div>

            <!-- Subcategory -->
            <div class="mb-3">
              <label for="sub_category_id" class="form-label text-black">Subcategory</label>
              <select name="sub_category_id" id="sub_category_id" class="form-select w-100" style="background-color: #ffffff; color: #000000;">
                <option value="">Select Subcategory</option>
                @foreach ($subcategories as $sub)
                  <option value="{{ $sub->id }}" {{ old('sub_category_id', $product->sub_category_id) == $sub->id ? 'selected' : '' }}>
                    {{ $sub->name }}
                  </option>
                @endforeach
              </select>
            </div>

            <!-- Submit Button -->
            <div class="mb-3">
              <button type="submit" class="btn btn-success w-100">Update Product</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
