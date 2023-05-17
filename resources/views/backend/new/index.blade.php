@extends('backend.layout.master')

@section('title')
    <title>List New</title>

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
                                <h1 class="m-0">Danh Sách Tin Tức</h1>
                            </td>
                            <td>
                                <form action="" method="GET" style="margin-top: 20px; ">
                                    <input style="width:450px;  height:30px" type="text" name="keyword"
                                        placeholder="Nhập tên tin tức">
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
                        <a href="{{ route('createNew') }}" class="btn btn-success float-left m-2"
                            style="background-color: #337ab7">Thêm tin tức</a>
                    </div>

                    @if ($news->isEmpty())
                        <div class="col-md-12">
                            <br>
                            <ul>
                                <h5>Không tìm thấy tin tức vừa nhập. Vui lòng nhập lại!</h5>
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
                                        <th scope="col">STT</th>
                                        <th scope="col">Ảnh Tin tức</th>
                                        <th scope="col">Tên Tin tức</th>
                                        <th scope="col">Hot</th>
                                        <th scope="col">Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody style="background-color: #fff">
                                    @foreach ($news as $new)
                                        <tr>
                                            <th scope="row">{{ $new->id }}</th>
                                            <td><img style="height: 80px; width: 100px;"
                                                    src="{{ asset('image/new/' . $new->image) }}">
                                            </td>
                                            <td>{{ $new->name }}</td>
                                            @if ($new->hot == 1)
                                                <td>Có</td>
                                            @else
                                                <td>không</td>
                                            @endif
                                            <td>
                                                <form class=" d-inline" action="{{ route('editNew', $new->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-info"
                                                        style="margin-right:5px ">Edit</a>
                                                </form>
                                                <form class=" d-inline" action="{{ route('destroyNew', $new->id) }}"
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
                            {{ $news->links('pagination::bootstrap-4') }}
                        </div>
                    @endif
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
