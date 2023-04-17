@extends('backend.layout.master')

@section('title')
    <title>Edit Product</title>

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('updateProduct', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name: </label>
                                <input type="text" name="name" value="{{ $product->name }}"
                                    class="form-control @error('name') is-invalid @enderror" id="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="price">Price: </label>
                                <input type="float" name="price" value="{{ $product->price }}"
                                    class="form-control @error('price') is-invalid @enderror" id="price">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount: </label>
                                <input type="float" name="discount" value="{{ $product->discount }}"
                                    class="form-control @error('discount') is-invalid @enderror" id="discount">
                                @error('discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity: </label>
                                <input type="interger" name="quantity" value="{{ $product->quantity }}"
                                    class="form-control @error('quantity') is-invalid @enderror" id="quantity">
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="author">Author: </label>
                                <input type="text" name="author" value="{{ $product->author }}"
                                    class="form-control @error('author') is-invalid @enderror" id="author">
                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description: </label>
                                <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                                    id="description">{{ $product->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Category: </label>
                                <select name="sub_categories_id" id="sub_categories_id">
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}"
                                            {{ $subcategory->id == $product->sub_categories_id ? 'selected' : '' }}>
                                            {{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hot">Hot: </label>
                                <select name="hot">
                                    <option value="Có"{{ $product->hot == '1' ? 'selected' : '' }}>Có</option>
                                    <option value="Không"{{ $product->hot == '0' ? 'selected' : '' }}>Không</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image: </label>
                                <input type="file" name="image" value="{{ $product->image }}" class="form-control "
                                    id="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
