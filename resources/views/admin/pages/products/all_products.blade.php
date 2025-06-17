@extends('admin.layouts.main')

@section('content')
<!-- Start right Content here -->
<div class="page-content-wrapper">
    <div class="container-fluid">
        <!-- Page Title & Breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Products</h4>
                </div>
            </div>
        </div>
        <!-- Table Section -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">All Products</h4>
                        <p class="text-muted mb-3">List of all products with category & subcategory</p>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Rating</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $index => $product)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            @if($product->featured_image)
                                            <img src="{{ asset('uploads/products/' . $product->featured_image) }}"
                                                 width="60" alt="Image" class="img-thumbnail">
                                            @else
                                            N/A
                                            @endif
                                        </td>
                                        <td>{{ $product->title ?? 'N/A' }}</td>
                                        <td>{{ $product->price ?? 'N/A' }}</td>
                                        <td>{{ $product->discount_price ?? 'N/A' }}</td>
                                        <td>{{ $product->rating ?? 'N/A' }}</td>
                                        <td>{{ $product->category->name ?? 'N/A' }}</td>
                                        <td>{{ $product->subcategory->name ?? 'N/A' }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                   class="btn btn-sm btn-outline-primary mr-2"
                                                   data-toggle="tooltip" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-sm btn-outline-danger"
                                                            data-toggle="tooltip" title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this?')">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No products found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div> <!-- page-content-wrapper -->
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush
