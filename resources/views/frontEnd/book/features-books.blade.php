@php
    $featuresBook = [];
@endphp
@extends('frontEnd.master')
@section('title')
    all books
@endsection
@section('content')
    <section class="all-category-display p-0-135 mt-5">
        <div class="row c-mr-0">
            <div class="col-md-3">
                <label class="form-control category-all-title">Category</label>
                <div class="category-all-check border" style="">
                    <ul class="list-group" style="">
                        @if($feature == 'category')
                        @foreach($categories as $category)
                            <a href="{{ route('features-books',['id' => $category->id, 'feature' => 'category']) }}">
                                <li class="list-group-item">
                                    @if($checkId ==  $category->id)
                                        <input class="form-check-input me-1" type="checkbox" checked>
                                    @else
                                        <input class="form-check-input me-1" type="checkbox">
                                    @endif
                                    {{ $category->category_name }}
                                </li>
                            </a>
                        @endforeach
                        @elseif($feature == 'author')
                            @foreach($authors as $author)
                                <a href="{{ route('features-books',['id' => $author->id, 'feature' => 'author']) }}">
                                    <li class="list-group-item">
                                        @if($checkId ==  $author->id)
                                            <input class="form-check-input me-1" type="checkbox" checked>
                                        @else
                                            <input class="form-check-input me-1" type="checkbox">
                                        @endif
                                        {{ $author->author_name }}
                                    </li>
                                </a>
                            @endforeach
                        @elseif($feature == 'publisher')
                            @foreach($publishers as $publisher)
                                <a href="{{ route('features-books',['id' => $publisher->id, 'feature' => 'publisher']) }}">
                                    <li class="list-group-item">
                                        @if($checkId ==  $publisher->id)
                                            <input class="form-check-input me-1" type="checkbox" checked>
                                        @else
                                            <input class="form-check-input me-1" type="checkbox">
                                        @endif
                                        {{ $publisher->publisher_name }}
                                    </li>
                                </a>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>


            <div class="col-md-9">
                <div class="row c-mr-0  bg-light pt-3">
                    @php
                    if($feature == 'category')
                        $featuresBook = $categoryBooks;
                    elseif($feature == 'author')
                        $featuresBook = $authorBooks;
                    elseif($feature == 'publisher')
                        $featuresBook = $publisherBooks;
                    @endphp
                    @foreach($featuresBook as $book)
                        @php
                            $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 2));
                        @endphp
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                            <div class="author-books-info bg-white">
                                <div class="team_img">
                                    <img src="{{ asset($book->book_image) }}" alt="book-image">
                                    <ul class="social">
                                        <li><a href="{{ route('product-details',['id' => $book->id ]) }}"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="book-here-content">
                                    @if($book->book_title != $bookTitle)
                                        <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle.'...' }}</a></h3>
                                    @else
                                        <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>
                                    @endif
                                    <span class="price"> ৳{{ $book->book_price }} <span> <strike>৳{{ $book->book_price + 10 }}</strike></span></span>
                                </div>
                            </div>
                        </div><!--- END COL -->
                    @endforeach

{{--                        @if($feature == 'category')--}}
{{--                            @foreach($categoryBooks as $book)--}}
{{--                        @php--}}
{{--                            $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 2));--}}
{{--                        @endphp--}}
{{--                        <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">--}}
{{--                            <div class="author-books-info bg-white">--}}
{{--                                <div class="team_img">--}}
{{--                                    <img src="{{ asset($book->book_image) }}" alt="book-image">--}}
{{--                                    --}}{{--                                    <img src="{{ asset('frontEndAsset/image/ebook5.jpg') }}" alt="team-image">--}}
{{--                                    <ul class="social">--}}
{{--                                        <li><a href="{{ route('product-details',['id' => $book->id ]) }}"><i class="fa fa-eye"></i></a></li>--}}
{{--                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                        <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="book-here-content">--}}
{{--                                    @if($book->book_title != $bookTitle)--}}
{{--                                        <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle.'...' }}</a></h3>--}}
{{--                                    @else--}}
{{--                                        <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>--}}
{{--                                    @endif--}}
{{--                                    <span class="price"> ৳{{ $book->book_price }} <span> <strike>৳{{ $book->book_price + 10 }}</strike></span></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div><!--- END COL -->--}}
{{--                    @endforeach--}}
{{--                        @elseif($feature == 'author')--}}
{{--                            @foreach($authorBooks as $book)--}}
{{--                                @php--}}
{{--                                    $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 2));--}}
{{--                                @endphp--}}
{{--                                <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">--}}
{{--                                    <div class="author-books-info bg-white">--}}
{{--                                        <div class="team_img">--}}
{{--                                            <img src="{{ asset($book->book_image) }}" alt="book-image">--}}
{{--                                            --}}{{--                                    <img src="{{ asset('frontEndAsset/image/ebook5.jpg') }}" alt="team-image">--}}
{{--                                            <ul class="social">--}}
{{--                                                <li><a href="{{ route('product-details',['id' => $book->id ]) }}"><i class="fa fa-eye"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="book-here-content">--}}
{{--                                            @if($book->book_title != $bookTitle)--}}
{{--                                                <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle.'...' }}</a></h3>--}}
{{--                                            @else--}}
{{--                                                <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>--}}
{{--                                            @endif--}}
{{--                                            <span class="price"> ৳{{ $book->book_price }} <span> <strike>৳{{ $book->book_price + 10 }}</strike></span></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!--- END COL -->--}}
{{--                            @endforeach--}}
{{--                        @elseif($feature == 'publisher')--}}
{{--                            @foreach($publisherBooks as $book)--}}
{{--                                @php--}}
{{--                                    $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 2));--}}
{{--                                @endphp--}}
{{--                                <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">--}}
{{--                                    <div class="author-books-info bg-white">--}}
{{--                                        <div class="team_img">--}}
{{--                                            <img src="{{ asset($book->book_image) }}" alt="book-image">--}}
{{--                                            --}}{{--                                    <img src="{{ asset('frontEndAsset/image/ebook5.jpg') }}" alt="team-image">--}}
{{--                                            <ul class="social">--}}
{{--                                                <li><a href="{{ route('product-details',['id' => $book->id ]) }}"><i class="fa fa-eye"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="book-here-content">--}}
{{--                                            @if($book->book_title != $bookTitle)--}}
{{--                                                <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle.'...' }}</a></h3>--}}
{{--                                            @else--}}
{{--                                                <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>--}}
{{--                                            @endif--}}
{{--                                            <span class="price"> ৳{{ $book->book_price }} <span> <strike>৳{{ $book->book_price + 10 }}</strike></span></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div><!--- END COL -->--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
                </div>
            </div>
        </div>
    </section>
@endsection

