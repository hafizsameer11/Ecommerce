@extends('admin.layouts.main')

@section('content')
<!-- Left Sidebar End -->

<!-- Start right Content here -->
<div class="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active">Add Subcategory</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add New Subcategory</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end page title end breadcrumb -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Subcategory Information</h4>
                        <p class="text-muted mb-4">Fill all information below</p>

                        <form action="{{ route('subcategory.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Name -->
                                    <div class="form-group">
                                        <label for="name" class="form-label">Subcategory Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mdi mdi-tag-text-outline"></i></span>
                                            </div>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Subcategory Name">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <!-- Slug -->
                                    <div class="form-group">
                                        <label for="slug" class="form-label">Slug</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="mdi mdi-link"></i></span>
                                            </div>
                                            <input type="text" name="slug" id="slug" class="form-control" placeholder="your-subcategory-slug">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Category Select -->
                            <div class="form-group">
                                <label for="category_id" class="form-label">Select Category</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="mdi mdi-folder-outline"></i></span>
                                    </div>
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">-- Select a Category --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                        <i class="mdi mdi-content-save"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
</div> <!-- page-content-wrapper -->
@endsection