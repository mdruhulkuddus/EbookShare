@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eBookShare</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Add New Product</h5> <span class="bg-light-success text-capitalize">{{session('message')}}</span>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Product title</label>
                                <input type="text" class="form-control" name="book_title" placeholder="Book title" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Author Name</label>
                                <select class="form-select" name="book_author_id">
                                    <option value="">Select Author</option>
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}">{{ $author->author_name }}</option>
                                    @endforeach
                                </select>
                            </div>
{{--                            <div class="col-12 col-md-6">--}}
{{--                                <label class="form-label">Translator</label>--}}
{{--                                <select class="form-select" name="translator">--}}
{{--                                    <option value="">Select Translator</option>--}}
{{--                                    <option value="1">Jeans</option>--}}
{{--                                    <option>T-Shirts</option>--}}
{{--                                    <option>Shoes</option>--}}
{{--                                    <option>Mobiles</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="col-12 col-md-6">
                                <label class="form-label">Category/Subject</label>
                                <select class="form-select" name="book_category_id">
                                    <option value="">Select A Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Publisher</label>
                                <select class="form-select" name="book_publisher_id">
                                    <option value="">Select A Publisher</option>
                                    @foreach($publishers as $publisher)
                                        <option value="{{$publisher->id}}">{{ $publisher->publisher_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Edition</label>
                                <select class="form-select" name="edition">
                                    <option value="">Select Edition</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value=4th"">4th</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Language</label>
                                <select class="form-select" name="language">
                                    <option value="">Select Language</option>
                                    <option value="Bangla">Bangla</option>
                                    <option value="English">English</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Bangla and English">Bangla and English</option>
                                    <option value="Bangla and Arabic">Bangla and Arabic</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="book_price" placeholder="Book Price" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Number Of Page</label>
                                <input type="number" class="form-control" name="pages" placeholder="Number Of Page">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file" name="book_image">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Book Summary or description</label>
                                <textarea class="form-control" name="book_summary" placeholder="Book Summary" rows="4" cols="4" id="editor1"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <select class="multiple-select" name="tag[]" data-placeholder="Choose anything" multiple="multiple">
                                    <option value="Best Seller" >Best Seller</option>
                                    <option value="Popular" >Popular</option>
                                    <option value="Motivational" >Motivational</option>
                                    <option value="New Book" >New Book</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="status" id="flexCheckDefault" checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Publish on website
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary px-4">Submit Book Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
@endsection
