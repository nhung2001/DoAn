@extends('frontend.layout.pages')
@section('title', 'Category Product')
@section('content')
    <div class="special-collection">
        <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
                <div class="head-tabs head-tab1 col-lg-3">
                    <h2>
                        {{-- {{ $products->$categories->id->name }} --}}
                    </h2>
                </div>
                
                {{-- <div class="col-lg-3 pull-right text-right">
                    <select class="form-control" onchange="location.href = ''+this.value;">
                        <option value="0">Sắp xếp</option>
                        <option selected value="priceAsc">Giá tăng dần</option>
                        <option selected value="priceDesc">Giá giảm dần</option>
                        <option selected value="nameAsc">Sắp xếp A-Z</option>
                        <option selected value="nameDesc">Sắp xếp Z-A</option>
                    </select>
                </div> --}}
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex">
                <div class="clearfix">
                    @if (count($products) > 0)
                        @foreach ($products as $item)
                            <!-- box product -->
                            <div class="col-xs-6 col-md-3 col-sm-6 ">
                                <div class="product-grid" id="product-1168979" style="height: 420px; overflow: hidden;">
                                    <div class="image"> <a href="{{ route('productDetail', ['id' => $item->id]) }}"><img
                                                src="{{ asset('image/product/' . $item->image) }}"
                                                title="{{ $item->name }}" alt="{{ $item->name }}" class="img-responsive"
                                                style="height: 230px; width: 170px;"></a>
                                    </div>
                                    <div class="info">
                                        <h3 class="name"><a
                                                href="{{ route('productDetail', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                        </h3>
                                        <p class="price-box"> <span class="special-price"> <span class="price product-price"
                                                    style="text-decoration:line-through;">
                                                    {{ number_format($item->price) }}</span> ₫ </span>
                                        </p>
                                        <p class="price-box"> <span class="special-price"> <span
                                                    class="price product-price">
                                                    {{ number_format($item->price - ($item->price * $item->discount) / 100) }}
                                                </span>₫
                                            </span>
                                        </p>
                                        <p class="price-box">
                                            <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                            <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                            <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                            <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                            <a href=""><img src="{{ asset('frontend/image/star.jpg') }}"></a>
                                        </p>
                                        <div class="action-btn">
                                            <form>
                                                <a class="d-block" data-id="2479395">
                                                    <i class=" fa fa-heart-o fa-lg" style="margin-right: 8px; "></i>
                                                </a>
                                                <a href="" class="button">Add to Cart</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end box product -->
                        @endforeach
                    @else
                        <div>Danh mục này chưa có sản phẩm!!</div>
                    @endif
                    <!-- paging -->
                </div>
                <!-- end paging -->
            </div>
        </div>
    </div>
    </div>
@endsection
