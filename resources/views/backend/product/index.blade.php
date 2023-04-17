@extends('backend.layout.master')

@section('title')
    <title>List Product</title>

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="content-wrapper" style="height:auto">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">List Product</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('createProduct') }}" class="btn btn-success float-left m-2">Add Product</a>
                    </div>
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissable fade show">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered" >
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td><img width="50px" height="150px" src="{{ asset('image/product/'. $product->image) }}"></td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->author }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->sub_categories->name }}</td>
                                        <td>
                                            <a href="{{ route('editProduct', [$product->id]) }}" class="btn btn-default">Edit</a>
                                            <form action="{{ route('destroyProduct', $product->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Bạn có chắc chắn xóa không?')">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
