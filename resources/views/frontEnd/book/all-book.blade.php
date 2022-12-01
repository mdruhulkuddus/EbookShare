@php
$i = 0;
@endphp
@extends('frontEnd.master')
@section('title')
    all books
@endsection
@section('content')
    <section class="all-category-display p-0-135 mt-5">
        <div class="row c-mr-0">
            <div class="col-md-3">
                <div class="row col-md-12">
                    <label class="form-control category-all-title">Subjects</label>
                    <div class="category-all-check border bg-light" style="">
                        <ul class="list-group" style="">
                            @foreach($categories as $category)
                                <a href="{{ route('features-books',['id' => $category->id, 'feature' => 'category']) }}">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox">
                                        {{ $category->category_name }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row col-md-12 mt-2">
                    <label class="form-control category-all-title">Publishers</label>
                    <div class="category-all-check border" style="">
                        <ul class="list-group" style="">
                            @foreach($publishers as $publisher)
                                <a href="{{ route('features-books',['id' => $publisher->id, 'feature' => 'publisher']) }}">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox">
                                        {{ $publisher->publisher_name }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row col-md-12 mt-2">
                    <label class="form-control category-all-title">Authors</label>
                    <div class="category-all-check border" style="">
                        <ul class="list-group" style="">
                            @foreach($authors as $author)
                                <a href="{{ route('features-books',['id' => $author->id, 'feature' => 'author']) }}">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox">
                                        {{ $author->author_name }}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row c-mr-0  bg-light pt-3">
                    @foreach($products as $book)
                        @php
                            $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 2));
                            $i++;
                        @endphp
{{--                    @if($i%4 == 0)--}}
{{--                            <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--                                <div class="container-md">--}}
{{--                                    <a class="navbar-brand " href="#">Navbar</a>--}}
{{--                                    <a href="" class="btn btn-primary float-end">View all</a>--}}
{{--                                </div>--}}
{{--                            </nav>--}}
{{--                        @endif--}}
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                            <div class="author-books-info bg-white">
                                <div class="team_img">
                                    <img style="height: 200px" src="{{ asset($book->book_image) }}" alt="book-image">
                                    <ul class="social">
                                        <li><a href="{{ route('product-details',['id' => $book->id ]) }}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="book-here-content">
                                    @if($book->book_title != $bookTitle)
                                    <h3 class="title"><a href="{{ route('product-details',['id' => $book->id]) }}">{{ $bookTitle.'...' }}</a></h3>
                                    @else
                                        <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>
                                    @endif
                                    <span class="price"> ৳{{ $book->book_price }} <span> <strike>৳{{ $book->book_price + 10 }}</strike></span></span>
                                </div>
                            </div>
                        </div><!--- END COL -->
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection

