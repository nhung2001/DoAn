@extends('frontend.layout.pages')
@section('title', 'Contact')
@section('content')

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
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="" method="post">
                        {{-- @foreach ($content as $item)
                            {{ csrf_field() }}
                            <tr>
                                <td><img src="{{ asset('image/product/' . $item->image) }}" class="img-responsive"
                                        style="height: 109px; width: 85px; margin-left: 10px;" />
                                </td>
                                <td><a href="">{{ $item->name }}</a></td>
                                <td>
                                    {{number_format($item->price)}}
                                </td>
                                <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                                        href="" data-id="2479395"><i
                                            class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach --}}

                </tbody>
                <tfoot>
                    <!-- co the goi h am trong CartModel -->
                    <tr>
                        <td colspan="6"><a href="{{ route('clearCart') }}" class="button pull-left"
                                onclick="return window.confirm('Bạn có muốn xóa hết không?')">Xóa toàn bộ</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
            </form>
        </div>
    </div>
@endsection
