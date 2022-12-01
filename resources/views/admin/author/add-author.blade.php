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
                    <li class="breadcrumb-item active" aria-current="page">Add Author</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Add New Author</h5> <span class="bg-light-success text-capitalize">{{session('message')}}</span>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" action="{{ route('new-author') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Author</label>
                                <input type="text" class="form-control" name="author_name" placeholder="Author Name" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author Image</label>
                                <input class="form-control" type="file" name="author_image">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author Biography</label>
                                <textarea class="form-control" name="author_biography" placeholder="Write Author Bio" rows="4" cols="4" id="editor1" required></textarea>
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
                                <button class="btn btn-primary px-4">Save Author Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
@endsection

