@php
    use App\Models\Product;
@endphp
@extends('frontEnd.master')
@section('title')
    author
@endsection
@section('content')
    <!--*************** Slider ******************-->
    <section class="author-banner p-0-135 mt-5">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <img src="{{ asset('frontEndAsset') }}/image/author/author_list.jpg" style="width: 100%; height: 25vh">
            </div>
        </div>
    </section>

    <!--*************** hr line ******************-->
    <div class="hr-line p-0-135">
        <hr class="hr-text" data-content="Popular Authors | See More ">
    </div>
    <!--*************** Writers slider ******************-->
    <section class="writers-slider p-0-135">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <div class="author-logo-slider">
                    @foreach($authors as $author)

                    <div class="item"><a href=""><img src="{{ asset($author->author_image) }}" alt="slideIMG">
                            <h6 class="text-center"><a href="{{ route('author-books',['author_id' => $author->id]) }}">{{ $author->author_name }}</a></h6>
                        </a></div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!--*************** author banner and search ******************-->
    <section class="author-banner p-0-135 ">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <hr>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <form class="card card-sm">
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fa fa-search text-body"></i>
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-sm form-control-borderless" type="search" placeholder="Search your favourite Author">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-md btn-secondary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <!--*************** author list ******************-->
    <section class="author-list p-0-135 ">
        <div class="row c-mr-0 bg-light pt-2">

            <!-- end col -->
            @foreach($authors as $author)
                @php
                    $productCountByAuthor = Product::productCountByAuthor($author->id);
                @endphp
            <div class="col-md-4">
                <div class="card card-author m-b-30">
                    <div class="card-body">
                        <div class="media">
                            <img class="d-flex mr-3 rounded-circle img-thumbnail thumb-lg float-start" src="{{ asset($author->author_image) }}" alt="img" />
                            <div class="media-body float-start mt-3 mx-3">
                                <h6 class="mt-0 font-18 mb-1"><a class="text-decoration-none" href="{{ route('author-books',['author_id' => $author->id]) }}">{{ $author->author_name }}</a></h6>
                                <p class="text-muted font-14"><i class="fa fa-book-open"></i>&nbsp; {{ $productCountByAuthor }} books</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
@endsection
