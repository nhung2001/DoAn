@extends('frontend.layout.pages')
@section('title', 'Search Price')
@section('content')
    <div class="special-collection">
        <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
                <div class="head-tabs head-tab1 col-lg-3">
                    <h2>
                        Tìm kiếm
                    </h2>
                </div>
            </div>
            <br>
            <div>
                <h5>Sản phẩm giá từ: {{ number_format($min_price) }} - {{ number_format($max_price) }}</h5>
            </div>

        </div>
        <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex">
                @if (count($search_Price) > 0)
                    <div class="clearfix">

                        @foreach ($search_Price as $item)
                            <!-- box product -->
                            <form action="{{ route('addCart') }}" method="post">
                                @csrf
                                <div class="col-xs-6 col-md-3 col-sm-6 ">
                                    <div class="product-grid" id="product-1168979" style="height: 420px; overflow: hidden;">
                                        <div class="image"> <a
                                                href="{{ route('productDetail', ['id' => $item->id]) }}"><img
                                                    src="{{ asset('image/product/' . $item->image) }}"
                                                    title="{{ $item->name }}" alt="{{ $item->name }}"
                                                    class="img-responsive" style="height: 230px; width: 170px;"></a> </div>
                                        <div class="info">
                                            <h3 class="name"><a
                                                    href="{{ route('productDetail', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                            </h3>
                                            <p class="price-box"> <span class="special-price"> <span
                                                        class="price product-price" style="text-decoration:line-through;">
                                                        {{ number_format($item->price) }}</span> ₫ </span>
                                            </p>
                                            <p class="price-box"> <span class="special-price"> <span
                                                        class="price product-price">
                                                        {{ number_format($item->price - ($item->price * $item->discount) / 100) }}
                                                    </span>₫ </span>
                                            </p>
                                            <p class="price-box">
                                                <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                            </p>
                                            <input name="qty" type="hidden" min="1" value="1" />
                                            <input name="productid_hidden" type="hidden" value="{{ $item->id }}" />
                                            <div class="action-btn">
                                                <form>
                                                    <a class="d-block" href="{{ route('addfavorite', $item->id) }}"
                                                        data-id="2479395">
                                                        <i class=" fa fa-heart-o fa-lg" style="margin-right: 8px; "></i>
                                                    </a>
                                                    <button class="button" type="submit">Add to cart</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- end box product -->
                        @endforeach

                        <!-- paging -->
                        <div style="clear: both;"></div>
                        <div style="margin-top: -50px;"
                            class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                            <ul class="pagination">
                                <li class="page-item"><span>Trang</span></li>
                                {{-- <li class="page-item">{{ $search_Price->links('pagination::bootstrap-4') }} --}}
                                </li>
                            </ul>
                        </div>
                        <!-- end paging -->
                    </div>
                @else
                    <ul>
                        <h5>Không tìm thấy sản phẩm trong mức giá đó. Vui lòng nhập lại!!</h5>
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
