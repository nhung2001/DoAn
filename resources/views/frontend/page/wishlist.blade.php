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
                    <h5> <b><button class="close" data-dismiss="alert" aria-label="Close"
                                style="margin-top: -2.5px">×</button>
                            {{ session('success') }} </h5></b>
                </div>
            @endif
            
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
                        @foreach ($fac as $item)
                            {{ csrf_field() }}
                            <tr>
                                <td><img src="{{ asset('image/product/' . $item->product->image) }}" class="img-responsive"
                                        style="height: 109px; width: 85px; margin-left: 10px;" />
                                </td>
                                <td><a
                                        href="{{ route('productDetail', ['id' => $item->product_id]) }}">{{ $item->product->name }}</a>
                                    <input type="hidden" value="{{ $item->id }}" name="id" />
                                </td>
                                <td>
                                    {{ number_format($item->product->price) }}
                                </td>
                                <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                                        href="{{ route('facDelete', $item->id) }}" data-id="2479395"><i
                                            class="fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach

                </tbody>
                <tfoot>
                    <!-- co the goi h am trong CartModel -->
                    <tr>
                        <td colspan="6"><a href="{{ route('facClear') }}" class="button pull-left"
                                onclick="return window.confirm('Bạn có muốn xóa hết không?')">Xóa toàn bộ</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
            </form>
        </div>
    </div>
@endsection
