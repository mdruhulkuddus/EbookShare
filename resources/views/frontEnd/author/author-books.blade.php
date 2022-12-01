@extends('frontEnd.master')
@section('title')
    authors books
@endsection
@section('content')
    <section class="author-books-header mt-3 p-0-135 ">
            <div class="row px-3 py-3 border bg-light c-mr-0">
                <div class="col-md-2">
                    <img src ="{{asset($authorInfo -> author_image)}}" alt="" class="img-thumbnail img-fluid rounded-circle" style="">
                </div>
                <div class="col-md-10 mt-2">
                    <h4>{{ $authorInfo-> author_name }}</h4>
                    <div class="">
                        <p style=" text-align: justify; padding-right: 50px" class="reviewsUser">{{ $authorInfo -> author_biography }} </p>
                        <button class="btn btn-outline-primary align-items-center" onclick="readMore(this)" class="read-more">Read More</button>
                    </div>
                </div>
            </div>
    </section>
    <section id="team" class="p-0-135 mt-2 author-books section-padding">
            <div class="row c-mr-0  bg-light pt-3">
                <div class="col-12 section-title text-center">
                    <h4>All Books Of This Author</h4>
                </div>
                <hr>
                @foreach($authorBooks as $book)
                    @php
                        $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 4));
                    @endphp
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="author-books-info bg-white">
                        <div class="team_img">
                            <img src="{{ asset($book->book_image) }}" alt="team-image">
                            <ul class="social">
                                <li><a href="{{ route('product-details',['id' => $book->id ]) }}"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="book-here-content">
                            <h3 class="title"><a href="{{ route('product-details',['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>
                            <span class="price"> ৳{{ $book->book_price }} <span> <strike>৳{{ $book->book_price + 10 }}</strike></span></span>
                        </div>
                    </div>
                </div><!--- END COL -->
                @endforeach

            </div>
        <!--- END ROW -->
    </section>
@endsection
