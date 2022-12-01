@extends('admin.master')
@section('title')
    Add Author
@endsection
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Author</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Author</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Edit Author Info</h5> <span class="bg-light-success text-capitalize">{{session('message')}}</span>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" action="{{ route('update-author') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Author</label>
                                <input type="text" class="form-control" name="author_name" value="{{ $author -> author_name }}">
                            </div>
                            <div class="col-8">
                                <label class="form-label">Author Image</label>
                                <input class="form-control" type="file" name="author_image">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset($author -> author_image) }}" alt="img" height="70" width="60" class="img-circle">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author Biography</label>
                                <textarea class="form-control" name="author_biography" placeholder="Write Author Bio" rows="4" cols="4" id="editor1">{{ $author -> author_biography }}</textarea>
                            </div>

                            <div class="col-12">
                                <input type="hidden" value="{{ $author->id }}" name="author_id">
                                <button class="btn btn-primary px-4">Update Author Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
@endsection

