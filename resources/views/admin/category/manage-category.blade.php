@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Categories</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Category</li>
                </ol>
            </nav>
        </div>
    </div>

<!--end breadcrumb-->
<h6 class="mb-0 md-6 text-uppercase">All Subjects </h6><span class="bg-light-success text-capitalize">{{session('message')}}</span>
<hr/>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>SL No.</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                $i = 1;
                @endphp
                @foreach($categories as $category)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $category -> category_name }}</td>
                    <td><img src="{{ asset($category -> category_image) }}" class="rounded-circle" width="44" height="44" alt=""></td>
                    @if($category -> status)
                    <td><span class="badge bg-light-success text-success w-100">Active</span></td>
                    @else
                    <td><span class="badge bg-light-warning text-danger w-100">Inactive</span></td>
                    @endif
                    <td>
                        <div class="actions d-flex">
                            <a href="{{ route('edit-category', ['id' =>  $category -> id ]) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>&nbsp;

                            <form action="{{ route('delete-category') }}" method="post">
                                @csrf
                                <input type="hidden" name="category_id" value="{{$category->id}}">
                                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you Sure to delete this category?')"><i class="bi bi-trash-fill"></i> Delete</button>&nbsp;
                            </form>

                            @if($category -> status)
                            <a href="{{ route('cat-status', ['id' =>  $category -> id ]) }}" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-circle-check"></i> Published</a>
                            @else
                            <a href="{{ route('cat-status', ['id' =>  $category -> id ]) }}" class="btn btn-sm btn-outline-warning"><i class="fa-regular fa-circle-xmark"></i> Publish</a>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>

@endsection
