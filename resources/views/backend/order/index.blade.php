@extends('backend.layout.master')

@section('title')
    <title>List Orders</title>

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
                        <table style="width: 280%;">
                            <tr>
                                <td>
                                    <h1 class="m-0">Danh Sách Đơn Hàng</h1>
                                </td>
                                <td>
                                    <form action="" method="GET" style="margin-top: 20px; ">
                                        <input type="date" name="created_date" placeholder="Created Date">
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

                    @if ($orders->isEmpty())
                        <div class="col-md-12">
                            <br>
                            <ul>
                                <h5>Không tìm thấy đơn hàng vừa nhập. Vui lòng nhập lại!</h5>
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
                                    <th scope="col">Người nhận</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Tổng tiền</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #fff">
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->users->name }}</td>
                                        <td>{{ $item->users->address }}</td>
                                        <td>{{ $item->users->phone }}</td>
                                        <td>{{ $item->total }}</td>
                                        <td>{{ $item->created_at->format('D d/m/Y') }}</td>
                                        @if ($item->status == 0)
                                            <td>Đang xử lý</td>
                                        @elseif($item->status == 1)
                                            <td>Đang giao hàng</td>
                                        @elseif($item->status == 2)
                                            <td>Giao hàng thành công</td>
                                        @else
                                            <td>Đã hủy</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('orderEdit', $item->id) }}"
                                                class="btn d-inline btn-info">Edit</a>
                                            <a href="{{ route('orderShow', $item->id) }}" class="btn d-inline btn-info">Chi
                                                Tiết</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif

                    <div class="col-md-12">
                        {{ $orders->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
