@php
    use App\Models\Product;
@endphp
@extends('frontEnd.master')
@section('title')
    publisher
@endsection
@section('content')
    <!--*************** Slider ******************-->
    <section class="publisher-banner p-0-135 mt-5">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <img src="{{ asset('frontEndAsset') }}/image/publisher/banner.jpg" style="width: 100%; height: 25vh">
            </div>
        </div>
    </section>

    <!--*************** Slider ******************-->
    <section class="publisher-search p-0-135 ">
        <div class="row c-mr-0">
            <div class="col-md-12">
                <hr>
                <div class="row height-s-box d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="search-pb">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control form-control-sm" placeholder="Search your favourite Publisher">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <!--*************** author bio ******************-->
    <section class="author-bio p-0-135 ">
        <div class="row c-mr-0 bg-light border pb-5">

            <div class="col-md-12 text-center mt-2">
                <div class="section-title">
                    <h3 class="title">Our Publishers</h3>
                </div>
            </div>
            @foreach($publishers as $publisher)
                @php
                    $productCountByPublisher = Product::productCountByPublisher($publisher->id);
                @endphp
            <div class="col-md-3 mt-4 pt-2 mb-3">
                <div class="publishers position-relative d-block text-center">
                    <div class="image position-relative d-block overflow-hidden">
                        @if($publisher->publisher_image)
                        <img src="{{ asset($publisher->publisher_image) }}" class="img-fluid rounded" alt="img">
                        @else
                        <img src="{{ asset('frontEndAsset/image/publisher/pb.jpg') }}" class="img-fluid rounded" alt="img">
                        @endif
                        <div class="overlay rounded bg-dark"></div>
                    </div>
                    <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block shadow-sm">
                        <h4 class="title"><a href="{{ route('publisher-books', ['publisher_id' => $publisher->id]) }}">{{ $publisher->publisher_name }}</a></h4>
                        <small class="text-muted"><i class="fa fa-book-open"></i>&nbsp; {{ $productCountByPublisher }} books</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
