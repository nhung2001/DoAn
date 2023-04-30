@extends('frontend.layout.pages')
@section('title', 'Contact')
@section('content')
    <div class="template-cart">
        <?php
        $content = Cart::content();
        ?>

        <div class="table-responsive">
            <table class="table table-cart">
                <h2>Đặt hàng thành công.</h2>
                <h3>Cảm ơn bạn đã đặt hàng trên website của chúng tôi! Nhân viên giao hàng sẽ liên hệ với bạn sớm nhất có
                    thể.</h3>
                <thead>
                    <tr>
                        <th class="image">Ảnh sản phẩm</th>
                        <th class="name">Tên sản phẩm</th>
                        <th class="price">Giá bán</th>
                        <th class="quantity">Số lượng</th>
                        <th class="price">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <form action="{{ route('update_cart') }}" method="post">
                        @foreach ($content as $item)
                            {{ csrf_field() }}
                            <tr>
                                <td><img src="{{ asset('image/product/' . $item->options->image) }}" class="img-responsive"
                                        style="height: 109px; width: 85px; margin-left: 10px;" /></td>
                                <td><a href="">{{ $item->name }}</a></td>
                                <td> {{ number_format($item->price) }}₫ </td>
                                <td>
                                    <input disabled type="number" id="quantity{{ $item->rowId }}"
                                        name="quantities[{{ $item->rowId }}]" value="{{ $item->qty }}" min="1">
                                </td>
                                <td>
                                    <p><b>{{ number_format(($item->price - ($item->price * $item->discount) / 100) * $item->qty) }}₫</b>
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                    </form> --}}
                </tbody>
                <tfoot>
                    <!-- co the goi h am trong CartModel -->
                    <tr>
                        {{-- <td colspan="6">
                            <a href="{{ route('home_user') }}" class="button pull-right black">Tiếp tục mua hàng</a>
                        </td> --}}
                    </tr>
                </tfoot>
            </table>
        </div>
        {{-- <div class="total-cart"> Tổng tiền thanh toán:
            {{ Cart::subtotal(0, ',', ',') }} ₫ <br>
            <a href="" class="button black">Thanh toán</a>
        </div> --}}
    </div>
@endsection
