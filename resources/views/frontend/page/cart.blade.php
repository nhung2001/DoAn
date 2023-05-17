@extends('frontend.layout.pages')
@section('title', 'Contact')
@section('content')

    <div class="template-cart">
        <?php
        $content = Cart::content();
        ?>

        <div class="table-responsive">

            @if (session('error'))
                <div class="alert alert-success">
                    <h5> <b><button class="close" data-dismiss="alert" aria-label="Close" style="margin-top: -2.5px">×</button>
                            {{ session('error') }} </h5></b>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    <h5> <b><button class="close" data-dismiss="alert" aria-label="Close" style="margin-top: -2.5px">×</button>
                        {{ session('success') }} </h5></b>
                </div>
            @endif

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
                                <td><img src="{{ asset('image/product/' . $item->options->image) }}" class="img-responsive"
                                        style="height: 109px; width: 85px; margin-left: 10px;" />
                                </td>
                                <td><a href="{{ route('productDetail', ['id' => $item->id]) }}">{{ $item->name }}</a></td>
                                <td>
                                    {{ number_format($item->price) }}
                                <td>
                                    <input type="number" id="quantity_{{ $item->rowId }}"
                                        name="quantities[{{ $item->rowId }}]" value="{{ $item->qty }}" min="1"
                                        max="{{ $item->sl }}">
                                    <input type="hidden" name="id" value="{{ $item->id }}" />
                                </td>
                                <td>
                                    <p><b>{{ number_format($item->price * $item->qty) }}₫</b>
                                    </p>
                                </td>
                                <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                                        href="{{ route('deleteCart', ['rowId' => $item->rowId]) }}" data-id="2479395"><i
                                            class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach

                </tbody>
                <tfoot>
                    <!-- co the goi h am trong CartModel -->
                    <tr>
                        <td colspan="6"><a href="{{ route('clearCart') }}" class="button pull-left"
                                onclick="return window.confirm('Bạn có muốn xóa hết không?')">Xóa toàn bộ</a>
                            <a href="{{ route('home_user') }}" class="button pull-right black">Tiếp tục mua hàng</a>
                            <input href="{{ route('updateCart') }}" type="submit" value="Cập nhật" name="update_qty"
                                class="button pull-right">
                        </td>
                    </tr>
                </tfoot>
            </table>
            </form>
        </div>
        <div class="total-cart"> Tổng tiền thanh toán:
            {{ Cart::subtotal(0, ',', ',') }} ₫ <br>
            <form id="order-form" action="{{ route('order') }}" method="POST">
                @csrf
                <input type="submit" value="Thanh toán" name="update_qty" class="button pull-right"
                    onclick="return window.confirm('Bạn có muốn thanh toán không?')" />
            </form>
        </div>
    </div>
@endsection
