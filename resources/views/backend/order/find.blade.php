@extends('backend.layout.master')

@section('title')
    <title>Month Orders</title>

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
                        <table style="width: 220%;">
                            <tr>
                                <td>
                                    <h1 class="m-0">Danh Sách Đơn Hàng Thành Công Tháng Này</h1>
                                </td>
                                <td>
                                    <form action="" method="GET" style="margin-top: 20px; ">
                                        <input style="width: 150px; " type="number" id="day" name="day" min="1" max="31" required placeholder="Nhập ngày cần tìm">
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

                    @if ($orderF->isEmpty())
                        <div class="col-md-12">
                            <br>
                            <ul>
                                <h5>Không tìm thấy đơn hàng theo ngày vừa nhập. Vui lòng nhập lại!</h5>
                            </ul>
                        </div>
                    @else
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover">
                                <thead style="background-color: #337ab7; color: #fff; border-color: #1fc4b3">
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Người nhận</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody style="background-color: #fff">
                                    @foreach ($orderF as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->users->name }}</td>
                                            <td>{{ $item->users->address }}</td>
                                            <td>{{ $item->users->phone }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>{{ $item->created_at->format('D d/m/Y') }}</td>
                                            <td>
                                                <a href="{{ route('orderShow', $item->id) }}"
                                                    class="btn d-inline btn-info">Chi
                                                    Tiết</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                    <div class="col-md-12">
                        {{ $orderF->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
