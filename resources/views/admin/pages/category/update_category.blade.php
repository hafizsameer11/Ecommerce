<!-- Left Sidebar End -->

<!-- Start right Content here -->

@extends('admin.layouts.main')


@section('content')
<!-- Top Bar End -->

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active">Form Elements</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Elements</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Category</h4>


                        <form action="{{ route('category.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                        value="{{ $category->name }}">
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="form-group mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="your-slug"
                                    value="{{ $category->slug }}">
                            </div>

                            <!-- Image Upload -->
                            <div class="form-group mb-3">
                                <label for="imageUpload">Upload Image</label>
                                <input type="file" class="form-control-file" id="imageUpload" name="image">

                                @if ($category->image)
                                <div class="mt-2">
                                    <img src="{{ asset($category->image) }}" alt="Current Image" width="100">
                                </div>
                                @endif
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>




                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        @endsection