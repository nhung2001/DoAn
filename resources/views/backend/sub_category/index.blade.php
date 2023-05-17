@extends('backend.layout.master')

@section('title')
    <title>
        List Sub_Category</title>

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
                        <table style="width: 350%;">
                            <td>
                                <h1 class="m-0">Danh Sách Danh Mục</h1>
                            </td>
                            <td>
                                <form action="" method="GET" style="margin-top: 20px; ">
                                    <input style="width:450px;  height:30px" type="text" name="keyword"
                                        placeholder="Nhập tên danh mục">
                                    <button type="submit">Tìm</button>
                                </form>
                            </td>
                        </table>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('createSubCategory') }}" class="btn btn-success float-left m-2"
                            style="background-color: #337ab7">Thêm danh mục</a>
                    </div>

                    @if ($subcategories->isEmpty())
                    <div class="col-md-12">
                        <br>
                        <ul>
                            <h5>Không tìm thấy danh mục vừa nhập. Vui lòng nhập lại!</h5>
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
                        @if (session('error'))
                            <div class="alert alert-success alert-dismissable fade show">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                                {{ session('error') }}
                            </div>
                        @endif
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #337ab7; color: #fff; border-color: #1fc4b3">
                                <tr>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Danh mục cha</th> 
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #fff">
                                @foreach ($subcategories as $subcategory)
                                    <tr>
                                        <td>{{ $subcategory->name }}</td>
                                        <td>{{ $subcategory->categories->name }}</td>

                                        <td>
                                            <form class=" d-inline" action="{{ route('editSubCategory', $subcategory->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-info"
                                                    style="margin-right:5px ">Edit</a>
                                            </form>
                                            <form class=" d-inline"
                                                action="{{ route('destroySubCategory', $subcategory->id) }}" method="post">
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
                    @endif

                    <div class="col-md-12">
                        {{ $subcategories->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
