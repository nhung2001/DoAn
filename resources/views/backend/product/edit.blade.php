@extends('backend.layout.master')

@section('title')
    <title>Edit Product</title>

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
                        <h1 class="m-0">Sửa Sản Phẩm</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('updateProduct', $product->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Tên sản phẩm: </label>
                                <input disabled type="text" name="name" value="{{ $product->name }}"
                                    class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="price">Giá sản phẩm: </label>
                                <input type="float" name="price" value="{{ $product->price }}"
                                    class="form-control @error('price') is-invalid @enderror" id="price">
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="discount">Giảm giá: </label>
                                <input type="float" name="discount" value="{{ $product->discount }}"
                                    class="form-control @error('discount') is-invalid @enderror" id="discount">
                                @error('discount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="quantity">Số lượng: </label>
                                <input type="interger" name="quantity" value="{{ $product->quantity }}"
                                    class="form-control @error('quantity') is-invalid @enderror" id="quantity">
                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="author">Tác giả: </label>
                                <input type="text" name="author" value="{{ $product->author }}"
                                    class="form-control @error('author') is-invalid @enderror" id="author">
                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả: </label>
                                <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                                    id="description">{{ $product->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Danh mục: </label>
                                <select name="sub_categories_id" id="sub_categories_id" class="form-select form-control">
                                    @foreach ($subcategories as $subcategory)
                                        <option value="{{ $subcategory->id }}"
                                            {{ $subcategory->id == $product->sub_categories_id ? 'selected' : '' }}>
                                            {{ $subcategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hot">Hot: </label>
                                <select name="hot" class="form-select form-control">
                                    <option value="Có"{{ $product->hot == '1' ? 'selected' : '' }}>Có</option>
                                    <option value="Không"{{ $product->hot == '0' ? 'selected' : '' }}>Không</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh sản phẩm: </label>
                                <input type="file" name="image" value="{{ $product->image }}" class="form-control @error('image') is-invalid @enderror"
                                    id="image">
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
