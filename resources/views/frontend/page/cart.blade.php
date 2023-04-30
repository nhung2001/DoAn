@extends('frontend.layout.pages')
@section('title', 'Contact')
@section('content')
    <form action="{{ route('order') }}" method="post">
        @csrf
        <div class="template-cart">
            <?php
            $content = Cart::content();
            ?>

            <div class="table-responsive">
                <table class="table table-cart">
                    <thead>
                        <tr>
                            <th class="image">Ảnh sản phẩm</th>
                            <th class="name">Tên sản phẩm</th>
                            <th class="price">Giá bán</th>
                            <th class="quantity">Số lượng</th>
                            <th class="price">Thành tiền</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('updateCart') }}" method="post">
                            @foreach ($content as $item)
                                {{ csrf_field() }}
                                <tr>
                                    <td><img src="{{ asset('image/product/' . $item->options->image) }}"
                                            class="img-responsive" style="height: 109px; width: 85px; margin-left: 10px;" />
                                    </td>
                                    <td><a href="">{{ $item->name }}</a></td>
                                    <td>
                                        {{ number_format($item->price - ($item->price * $item->discount) / 100) }}đ </td>
                                    <td>
                                        {{-- <label for="quantity_{{ $item->rowId }}">Số lượng sản phẩm {{ $item->name }}:</label> --}}
                                        <input type="number" id="quantity_{{ $item->rowId }}"
                                            name="quantities[{{ $item->rowId }}]" value="{{ $item->qty }}"
                                            min="1">
                                    </td>
                                    <td>
                                        <p><b>{{ number_format(($item->price - ($item->price * $item->discount) / 100) * $item->qty) }}₫</b>
                                        </p>
                                    </td>
                                    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                                            href="{{ route('deleteCart', ['rowId' => $item->rowId]) }}"
                                            data-id="2479395"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            @endforeach

                    </tbody>
                    <tfoot>
                        <!-- co the goi h am trong CartModel -->
                        <tr>
                            <td colspan="6"><a href="{{ route('clearCart') }}" class="button pull-left">Xóa toàn bộ</a>
                                <a href="{{ route('home_user') }}" class="button pull-right black">Tiếp tục mua hàng</a>
                                <input type="submit" value="Cập nhật" name="update_qty" class="button pull-right" />
    </form>
    </td>
    </tr>
    </tfoot>

    </table>
    </div>
    <div class="total-cart"> Tổng tiền thanh toán:
        {{ Cart::subtotal(0, ',', ',') }} ₫ <br>
        {{-- <a href=""  class="button black" onclick="return window.confirm('Bạn có muốn thanh toán không?')">Thanh
                toán</a> --}}
        <input type="submit" value="Thanh toán" name="update_qty" class="button pull-right"
            onclick="return window.confirm('Bạn có muốn thanh toán không?')" />
    </div>
    </div>
    </form>
@endsection
