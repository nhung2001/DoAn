@extends('frontend.layout.pages')
@section('title', 'Hash ')

@section('content')
    <div class="content-wrapper" style="height:auto">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">

                        <h2>Đặt hàng thành công.</h2>
                        <h3>Cảm ơn bạn đã đặt hàng trên website của chúng tôi! Nhân viên giao hàng sẽ liên hệ với bạn sớm
                            nhất có
                            thể.</h3>
                        <h4>Danh sách sản phẩm đã đặt</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-cart">
                <thead>
                    <tr>
                        <th scope="col">Ảnh sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá bán</th>
                        <th scope="col">Số lượng</th>
                        {{-- <th scope="col">Giảm giá</th> --}}
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
                            {{-- <td>{{ $item->products->discount }}%</td> --}}
                            <td>{{ number_format(($item->price - ($item->price * $item->discount) / 100) * $item->quantity) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{-- <tr>
                    <th colspan="6">
                        <h5><b>Tổng tiền: {{ $item->orders->total }}₫</b></h5>
                    </th>
                </tr> --}}
            </table>
            <div class="total-cart"><h5><b>Tổng tiền: {{ $order->total }}₫</b></h5>
                {{-- {{ Cart::subtotal(0, ',', ',') }} ₫ <br> --}}
        </div>
    </div>
@endsection
