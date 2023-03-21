@extends('frontEnd.master')
@section('title')
    Product Details
@endsection
@section('content')
    <section class="product-details-up">
        <div class="row p-0-135 c-mr-0 mt-3">
{{--            box-shadow: 0px 4px 6px -3px #9c9c9c;--}}
            @if(session('message'))
            <div class="alert alert-primary mt-2" role="alert">
                {{session('message')}}
            </div>
            @endif
            <div class="col-md-12 border p-3 bg-white shadow-sm" style="border-radius: 3px;">
                <div class="row m-0">
                    <div class="col-md-4 left-side-product-box pb-3">
                        <img src ="{{asset($productInfo -> book_image)}}" class="border p-3" style="height: 350px">
{{--                         <span class="sub-img">--}}
{{--                            <img src ="{{asset('frontEndAsset')}}/image/ebook1.jpg" class="border p-2">--}}
{{--                            <img src ="{{asset('frontEndAsset')}}/image/ebook1.jpg" class="border p-2">--}}
{{--                        </span> --}}
                    </div>
                    <div class="col-md-8">
                        <div class="right-side-pro-detail border p-3 m-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="m-0 p-0 product-title">{{ $productInfo -> book_title }}</h3>
                                    <span>By</span> <a href="">{{ $productInfo -> author_name }}</a>
                                </div>
                                <div class="col-md-12">
                                    <hr class="opacity-25" >
                                    <div class="rating">
                                        <div class="stars">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <span class="ratings-no">7 ratings / </span>
                                        <span class="review-no">41 reviews</span>
                                        <p class="tag-section"><strong>Category: </strong><a href="">{{ $productInfo -> category_name }}</a></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h3>Price : TK. {{ $productInfo -> book_price }} </h3> <strike>{{ $productInfo -> book_price + 10 }} TK</strike> <span>You Save TK. 4 (3%)</span>
                                    <hr class="opacity-25" >
                                </div>

                                <div class="col-md-12 mt-3">
                                    <div class="row">
                                        @if(Session::get('customerID'))
                                        <div class="col-md-4 pb-2">
                                            <form action="{{ route('add-to-cart') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="userID" value="{{ Session::get('customerID') }}">
                                                <input type="hidden" name="produtID" value="{{ $productInfo -> id }}">
                                                <input type="hidden" name="price" value="{{ $productInfo -> book_price }}">
                                                <button type="submit" class="btn btn-warning w-100">Add To Cart</button>
                                            </form>
                                        </div>
                                        @else
                                            <div class="col-md-4 pb-2">
                                                <a href="{{ route('customer-login') }}" class="btn btn-warning w-100">Add To Cart</a>
                                            </div>
                                        @endif
                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-secondary w-100">Buy Now</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#" class="btn btn-outline-primary w-100">Add To Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 border shadow-sm p-3 bg-white mt-3">
                <div class="row summary-hedding m-0 pt-0 pb-3">
                    <label for="">Book Summary and Specification</label>
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active nav-c" id="nav-summary-tab" data-bs-toggle="tab" data-bs-target="#nav-summary" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Summary</button>
                        <button class="nav-link nav-c" id="nav-specification-tab" data-bs-toggle="tab" data-bs-target="#nav-specification" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Specification</button>
                        <button class="nav-link nav-c" id="nav-author-tab" data-bs-toggle="tab" data-bs-target="#nav-author" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Author</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-summary" role="tabpanel" aria-labelledby="nav-summary-tab">
                        <div class="summary-content mt-3" >
                            <h5>Book- 	&apos;{{ $productInfo -> book_title }}&apos;</h5>
                            @php
                                $ProductDetailsLess = implode(' ', array_slice(explode(' ', $productInfo -> book_summary), 0, 40));
                                $ProductDetailsMore = implode(' ', array_slice(explode(' ', $productInfo -> book_summary), 41));
                                $a = strip_tags($ProductDetailsMore);
                            @endphp
                            <p>
                                {!! $ProductDetailsLess !!}
                                <span id="points">...</span>
                                <!-- Define up in p tag substr(0, 15),
                                 then follow span tag substr(16, strlen(end)),
                                 -->
{{--                                <span id="moreText"> {!! $ProductDetailsMore !!}</span>--}}
                                <span id="moreText"> {!! $a !!}</span>
                            </p>
                            <div class="text-center">
                                <button class="btn btn-outline-primary align-items-center" onclick="toggleText()" id="textButton" >
                                    Show More
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-specification" role="tabpanel" aria-labelledby="nav-specification-tab">
                        <table class="table mt-3 table-bordered">
                            <tr>
                                <td  style="width: 20%; background-color: #F1F2F4;  ">Title</td>
                                <td>{{ $productInfo -> book_title }}</td>
                            </tr>
                            <tr>
                                <td style="background-color: #F1F2F4;  ">Author</td>
                                <td>{{ $productInfo -> author_name }}</td>
                            </tr>
                            <tr>
                                <td style="background-color: #F1F2F4;  ">Translator</td>
                                <td> ... </td>
                            </tr>
                            <tr>
                                <td style="background-color: #F1F2F4;  ">Publisher</td>
                                <td>{{ $productInfo -> publisher_name }}</td>
                            </tr>
                            <tr>
                                <td style="background-color: #F1F2F4;  ">Edition</td>
                                <td>{{ $productInfo -> edition }}</td>
                            </tr>
                            <tr>
                                <td style="background-color: #F1F2F4;  ">Number of Pages</td>
                                <td>{{ $productInfo -> pages }}</td>
                            </tr>
                            <tr>
                                <td style="background-color: #F1F2F4;  ">Language</td>
                                <td>{{ $productInfo -> language }}</td>
                            </tr>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-author" role="tabpanel" aria-labelledby="nav-author-tab">
                        <div class="row px-3 py-3">
                            <div class="col-md-2">
                                <img src ="{{asset($productInfo -> author_image)}}" alt="" class="img-thumbnail img-fluid rounded-circle" style="">
                            </div>
                            <div class="col-md-10 mt-2">
                                <h4>{{ $productInfo-> author_name }}</h4>
                                @php
                                    $authorBiography = implode(' ', array_slice(explode(' ', $productInfo -> author_biography), 0, 20));
                                    $authorBiographyMore = implode(' ', array_slice(explode(' ', $productInfo -> author_biography), 21));
                                    $a = strip_tags($authorBiographyMore);
                                @endphp
                                <div class="">
                                    <p style=" text-align: justify; padding-right: 50px" class="reviewsUser">{{ $productInfo -> author_biography }} </p>
                                    <button class="btn btn-outline-primary align-items-center" onclick="readMore(this)" class="read-more">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="opacity-25">
            </div>

            <div class="col-md-12 border shadow-sm bg-white p-3 mt-3" >
                <div class="row summary-hedding m-0 pl-3 pt-0 pb-3">
                    Reviews and Ratings
                </div>
                <div class="offer-dedicated-body-left">
                    <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                        <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                            <h5 class="mb-0 mb-4">Ratings Overview</h5>
                            <div class="graph-star-rating-header">
                                <p class="text-black mb-4 mt-2">Rated 3.5 out of 5</p>
                            </div>
                            <div class="graph-star-rating-body">
                                <div class="rating-list">
                                    <div class="rating-list-left text-black">
                                        5 Star
                                    </div>
                                    <div class="rating-list-center">
                                        <div class="progress">
                                            <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating-list-right text-black">56%</div>
                                </div>
                                <div class="rating-list">
                                    <div class="rating-list-left text-black">
                                        4 Star
                                    </div>
                                    <div class="rating-list-center">
                                        <div class="progress">
                                            <div style="width: 23%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating-list-right text-black">23%</div>
                                </div>
                                <div class="rating-list">
                                    <div class="rating-list-left text-black">
                                        3 Star
                                    </div>
                                    <div class="rating-list-center">
                                        <div class="progress">
                                            <div style="width: 11%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating-list-right text-black">11%</div>
                                </div>
                                <div class="rating-list">
                                    <div class="rating-list-left text-black">
                                        2 Star
                                    </div>
                                    <div class="rating-list-center">
                                        <div class="progress">
                                            <div style="width: 2%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rating-list-right text-black">02%</div>
                                </div>
                            </div>
                            <div class="graph-star-rating-footer text-center mt-3 mb-3">
                                <button type="button" class="btn btn-outline-primary btn-sm">Rate and Review</button>
                            </div>
                        </div>
                        <hr>
                        <div class="bg-white rounded shadow-sm p-4 mb-4 total-like">
                            <a href="#" class="btn btn-outline-primary btn-sm float-end">Write a Review</a>
                            <h5 class="mb-1">All Ratings and Reviews</h5>
                            <div class="reviews-members pt-4 pb-4">
                                <div class="media">
                                    <a href="#" class="float-start"><img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-pill"></a>
                                    <div class="media-body " style="margin-left: 70px">
                                        <div class="reviews-members-header ">
                                            <h6 class="mb-1"><a class="text-black" href="#">Singh Osahan</a></h6>
                                            <p class="text-gray">Tue, 20 Mar 2020</p>
                                        </div>
                                        <div class="reviews-members-body">
                                            <p class="reviewsUser">Lorem ipsum dolor sit amet.</p>
                                            <button onclick="readMore(this)" class="read-more">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="reviews-members pt-4 pb-4">
                                <div class="media">
                                    <a href="#" class="float-start"><img  alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar4.png" class="mr-3 rounded-pill"></a>
                                    <div class="media-body" style="margin-left: 70px">
                                        <div class="reviews-members-header">
                                            <h6 class="mb-1"><a class="text-black" href="#">Singh Osahan</a></h6>
                                            <p class="text-gray">Tue, 20 Mar 2020</p>
                                        </div>
                                        <div class="reviews-members-body">
                                            <p class="reviewsUser">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto consectetur cupiditate dolore, facere hic ipsam nemo pariatur recusandae rerum. Accusantium aperiam architecto at, eaque, eius facilis iste minus obcaecati officiis quae quas quibusdam quisquam sed soluta tempore tenetur voluptate. Et nulla officiis porro possimus qui ratione repellat vitae voluptatem voluptatum?</p>
                                            <button onclick="readMore(this)" class="read-more">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="reviews-members pt-4 pb-4">
                                <div class="media">
                                    <a href="#" class="float-start"><img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar6.png" class="mr-3 rounded-pill"></a>
                                    <div class="media-body" style="margin-left: 70px">
                                        <div class="reviews-members-header">
                                            <h6 class="mb-1"><a class="text-black" href="#">Gurdeep Singh</a></h6>
                                            <p class="text-gray">Tue, 20 Mar 2020</p>
                                        </div>
                                        <div class="reviews-members-body">
                                            <p class="reviewsUser">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
                                            <button onclick="readMore(this)" class="read-more">Read More</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <a class="text-center w-100 d-block mt-4 font-weight-bold text-decoration-none" href="#">See All Reviews</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--*************** related product  ******************-->
    <section class="product-ebook p-0-135 ">
        <div class="row border c-mr-0 mt-3">
            <div class="col-md-12 m-2">
                <span class="related-pro-heading">Related Product</span> <a href="" class="btn btn-sm btn-outline-primary float-end mx-3">View all</a>
            </div>
            @foreach($thisCategoryBooks as $book)
                @php
                    $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 4));
                @endphp
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="{{ route('product-details', ['id' => $book->id ]) }}" class="image">
                                <img src ="{{asset($book->book_image)}}">
                            </a>
                            <ul class="product-links">
                                <li><a href="{{ route('product-details', ['id' => $book->id ]) }}"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                            <a href="" class="add-to-cart">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="{{ route('product-details', ['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>
                            <div class="price">৳{{ $book -> book_price }} <span>৳{{ $book -> book_price + 10 }}</span></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="product-ebook p-0-135 ">
        <div class="row border c-mr-0 mt-3">
            <div class="col-md-12 m-2">
                <span class="related-pro-heading">This Author's Book</span> <a href="" class="btn btn-sm btn-outline-primary float-end mx-3">View all</a>
            </div>
            @foreach($thisAuthorBooks as $book)
                @php
                    $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 4));
                @endphp
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="{{ route('product-details', ['id' => $book->id ]) }}" class="image">
                                <img src ="{{asset($book->book_image)}}">
                            </a>
                            <ul class="product-links">
                                <li><a href="{{ route('product-details', ['id' => $book->id ]) }}"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                            <a href="" class="add-to-cart">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="{{ route('product-details', ['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>
                            <div class="price">৳{{ $book -> book_price }} <span>৳{{ $book -> book_price + 10 }}</span></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--  publishers books -->
    <section class="product-ebook p-0-135 ">
        <div class="row border c-mr-0 mt-3">
            <div class="col-md-12 m-2">
                <span class="related-pro-heading">This Publisher's Book</span> <a href="" class="btn btn-sm btn-outline-primary float-end mx-3">View all</a>
            </div>
            @foreach($thisPublisherBooks as $book)
                @php
                    $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 4));
                @endphp
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="{{ route('product-details', ['id' => $book->id ]) }}" class="image">
                                <img src ="{{asset($book->book_image)}}">
                            </a>
                            <ul class="product-links">
                                <li><a href="{{ route('product-details', ['id' => $book->id ]) }}"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                            <a href="" class="add-to-cart">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="{{ route('product-details', ['id' => $book->id ]) }}">{{ $bookTitle }}</a></h3>
                            <div class="price">৳{{ $book -> book_price }} <span>৳{{ $book -> book_price + 10 }}</span></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
