@extends('backend.layout.master')

@section('title')
    <title>OrderDetails</title>

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="content-wrapper" style="height:auto">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <table style="width: 200%;">
                            <tr>
                                <td>
                                    <h1 class="m-0">Order_Details</h1></td>
                                <td><h5 class="card-header"><a href="{{ route('orderPdf', $orders->id) }}"
                                    class=" btn btn-sm btn-primary shadow-sm float-right"><i
                                        class="fas fa-download fa-sm text-white-50"></i>
                                    Generate PDF</a></td>
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
                        <table class="table table-bordered">
                            <tr>
                                <th scope="col" colspan="2" style="background-color: rgb(167, 207, 240)">Thông tin
                                    khách hàng
                                </th>
                            </tr>
                            <tr>
                                <td>Họ và tên</td>
                                <td>{{ $orders->users->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $orders->users->email }}</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>{{ $orders->users->address }}</td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td>{{ $orders->users->phone }}</td>
                            </tr>
                            <tr>
                                <td>Ngày tạo đơn hàng</td>
                                <td>{{ $orders->created_at->format('D d/m/Y') }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-12">

                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #337ab7; color: #fff; border-color: #1fc4b3">
                                <tr>

                                    <th scope="col">Ảnh sản phẩm</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá bán</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Giảm giá</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #fff">
                                @foreach ($orderDetails as $item)
                                    <tr>
                                        <td><img width="100px" height="100px"
                                                src="{{ asset('image/product/' . $item->products->image) }}"></td>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ number_format($item->price) }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->products->discount }}%</td>
                                        <td>{{ number_format(($item->price - ($item->price * $item->discount) / 100) * $item->quantity) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tr>
                                <th colspan="6">Tổng tiền: {{ $item->orders->total }}₫
                                </th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $orderDetails->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
