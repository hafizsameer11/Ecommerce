@extends('admin.layouts.main')

@section('content')

<div class="page-content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb and Page Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active">Product Variations</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Product Variations</h4>
                </div>
            </div>
        </div>
        <!-- end breadcrumb -->

        <!-- Table Card -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">All Product Variations</h4>
                        <p class="text-muted mb-3">List of all product variations with their details</p>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>SKU</th>
                                        <th>Additional Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($variations as $variation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $variation->product->name }}</td>
                                        <td>{{ $variation->color ?? '-' }}</td>
                                        <td>{{ $variation->size ?? '-' }}</td>
                                        <td>{{ $variation->sku ?? '-' }}</td>
                                        <td>{{ $variation->additional_price ?? '0' }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('productvariation.edit', $variation->id) }}"
                                                   class="btn btn-sm btn-outline-primary mr-2"
                                                   data-toggle="tooltip" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <form action="{{ route('productvariation.destroy', $variation->id) }}"
                                                      method="POST" onsubmit="return confirm('Are you sure to delete this?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="btn btn-sm btn-outline-danger"
                                                            data-toggle="tooltip" title="Delete">
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No product variations found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $variations->links() }}
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
