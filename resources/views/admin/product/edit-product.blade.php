@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Edit New Product</h5> <span class="bg-light-success text-capitalize">{{session('message')}}</span>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" action="{{ route('update-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Product title</label>
                                <input type="text" class="form-control" name="book_title" value="{{ $product->book_title }}">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Author Name</label>
                                <select class="form-select" name="book_author_id">
                                    <option value="{{ $product_author->id }}">{{ $product_author->author_name }}</option>
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}">{{ $author->author_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Category/Subject</label>
                                <select class="form-select" name="book_category_id">
                                    <option value="{{ $product_category->id }}">{{ $product_category->category_name }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Publisher</label>
                                <select class="form-select" name="book_publisher_id">
                                    <option value="{{ $product_publisher->id }}">{{ $product_publisher->publisher_name }}</option>
                                @foreach($publishers as $publisher)
                                        <option value="{{$publisher->id}}">{{ $publisher->publisher_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Edition</label>
                                <select class="form-select" name="edition">
                                    <option value="{{ $product->edition }}">{{ $product->edition }}</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Language</label>
                                <select class="form-select" name="language">
                                    <option value="{{ $product->language }}">{{ $product->language }}</option>
                                    <option value="Bangla">Bangla</option>
                                    <option value="English">English</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Bangla and English">Bangla and English</option>
                                    <option value="Bangla and Arabic">Bangla and Arabic</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="book_price" value="{{ $product->book_price }}">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Number Of Page</label>
                                <input type="number" class="form-control" name="pages" value="{{ $product->pages }}">
                            </div>

                            <div class="col-9">
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file" name="book_image">
                            </div>
                            <div class="col-3">
                                <img src="{{ asset($product->book_image) }}" alt="img" height="70" width="60" class="img-circle">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Book Summary or description</label>
                                <textarea class="form-control" name="book_summary" rows="4" cols="4" id="editor1">{{ $product->book_summary }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                @php $tags = "";
                                    if($product->tag)
                                    $tags = explode(',',$product->tag)
                                @endphp

                                <select class="multiple-select" name="tag[]" data-placeholder="Choose anything" multiple="multiple">
                                    @if($tags)
                                    @foreach($tags as $oneTag)
                                        <option value="{{ $oneTag }}" selected>{{ $oneTag }}</option>
                                    @endforeach
                                    @endif
{{--                                    @if($product->tag)--}}
{{--                                    <option value="Best Seller" selected>{{$product->tag}}</option>--}}
{{--                                    @endif--}}
                                    <option value="Best Seller" >Best Seller</option>
                                    <option value="Popular" >Popular</option>
                                    <option value="Motivational" >Motivational</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <input type="hidden" value="{{ $product -> id }}" name="product_id">
                                <button class="btn btn-primary px-4">Update Book Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
@endsection
