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
                        {{-- <h1 class="m-0">Danh Sách Sản Phẩm</h1> --}}
                        <table style="width: 350%;">
                            <tr>
                                <td>
                                    <h1 class="m-0">Danh Sách Sản Phẩm</h1>
                                </td>
                                <td>
                                    <form action="{{ route('product') }}" method="GET" style="margin-top: 20px; ">
                                        <input style="width:450px;  height:30px" type="text" name="keyword"
                                            placeholder="Nhập tên sản phẩm">
                                        <button type="submit">Tìm</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('createProduct') }}" class="btn btn-success float-left m-2"
                            style="background-color: #337ab7">Thêm sản phẩm</a>
                    </div>

                    @if ($products->isEmpty())
                        <div class="col-md-12">
                            <br>
                            <ul>
                                <h5>Không tìm thấy sản phẩm vừa nhập. Vui lòng nhập lại!</h5>
                            </ul>
                        </div>
                    @else
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
                                        <th scope="col">STT</th>
                                        <th scope="col">Ảnh sản phẩm</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá sản phẩm</th>
                                        <th scope="col">Giảm giá</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Tác giả</th>
                                        <th scope="col">Danh mục</th>
                                        <th scope="col">Hot</th>
                                        <th scope="col">Hành động</th>
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
                                            <td>{{ $product->sub_categories->name }}</td>
                                            @if ($product->hot == 1)
                                                <td>Có</td>
                                            @else
                                                <td>không</td>
                                            @endif
                                            <td>
                                                <form class=" d-inline" action="{{ route('editProduct', $product->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-info"
                                                        style="margin-right:5px ">Edit</a>
                                                </form>
                                                <form class=" d-inline"
                                                    action="{{ route('destroyProduct', $product->id) }}" method="post">
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
                        {{-- @endforeach --}}
                    @endif

                </div>
                <div class="col-md-12">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
