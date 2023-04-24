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
                        <a href="{{ route('createProduct') }}" class="btn btn-success float-left m-2"
                            style="background-color: #337ab7">Add Product</a>
                    </div>
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissable fade show">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #337ab7; color: #fff; border-color: #1fc4b3">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Author</th>
                                    {{-- <th scope="col">Description</th> --}}
                                    <th scope="col">Category</th>
                                    <th scope="col">Hot</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #fff">
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td><img style="height: 100px; width: 80px;"
                                                src="{{ asset('image/product/' . $product->image) }}"></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->discount }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->author }}</td>
                                        {{-- <td>{{ $product->description }}</td> --}}
                                        <td>{{ $product->sub_categories->name }}</td>
                                        <td>{{ $product->hot }}</td>
                                        <td>
                                            <a href="{{ route('editProduct', [$product->id]) }}"
                                                class="btn d-inline btn-info">Edit</a>
                                            <form class=" d-inline" action="{{ route('destroyProduct', $product->id) }}"
                                                method="post">
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
