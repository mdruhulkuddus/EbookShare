@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Categories</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Edit Category</h5>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">

                        <form class="row g-3" action="{{ route('update-category') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
                            </div>
                            <div class="col-9">
                                <label class="form-label">Category Image</label>
                                <input class="form-control" type="file" name="category_image">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($category -> category_image) }}" alt="img" height="70" width="60" class="img-circle">
                            </div>
                            <input type="hidden" name="category_id" value="{{ $category->id }}">
                            <div class="col-12 text-center">
                                <button class="btn btn-primary px-4">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
@endsection
