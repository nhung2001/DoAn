@extends('backend.layout.master')

@section('title')
    <title>Add Product</title>

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
                        <h1 class="m-0">Add User</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('storeProduct') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name: </label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Enter name"
                                    id="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Price: </label>
                                <input type="float" name="price"
                                    class="form-control @error('price') is-invalid @enderror" placeholder="Enter price"
                                    id="price">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount: </label>
                                <input type="float" name="discount"
                                    class="form-control @error('discount') is-invalid @enderror"
                                    placeholder="Enter discount" id="discount">
                                @error('discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity: </label>
                                <input type="interger" name="quantity"
                                    class="form-control @error('quantity') is-invalid @enderror"
                                    placeholder="Enter quantity" id="quantity">
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="author">Author: </label>
                                <input type="text" name="author"
                                    class="form-control @error('author') is-invalid @enderror" placeholder="Enter author"
                                    id="author">
                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description: </label>
                                <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Enter description" id="description"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Category: </label>
                                <select name="sub_categories_id" id="sub_categories_id" class="form-select form-control">
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hot">Hot: </label>
                                <select name="hot" id="hot" class="form-select form-control">
                                    <option>Có</option>
                                    <option>Không</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image: </label>
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" id="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Tạo</button>
                                <a href="{{ route('product') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
