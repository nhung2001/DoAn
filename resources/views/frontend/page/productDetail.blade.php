@extends('frontend.layout.pages')
@section('title', 'Product Detail')
@section('content')
    <div class="top">
        <div class="row">
            <div class="col-xs-12 col-md-6 product-image">
                <div class="featured-image" style="padding-top: 20px">
                    <img src="{{ asset('image/product/' . $product_Detail->image) }}" class="img-responsive"
                        style="height: 370px; width: 250px; margin-left: 60px; margin-top: 10px;" />
                </div>
            </div>
            <div class="col-xs-12 col-md-6 info">
                <h1 itemprop="name" style="padding-top: 25px"></h1>
                <p class="vendor" style="font-size: 22px;"> <b>{{ $product_Detail->name }} </b><span>
                </p>
                <p style="font-size: 18px">Tác giả: {{ $product_Detail->author }}</p>
                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span
                            class="price product-price" style="text-decoration:line-through;">
                            {{ number_format($product_Detail->price) }}₫</span></p>
                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span
                            class="price product-price" style="color: red; font-weight: bold;">
                            {{ number_format($product_Detail->price - ($product_Detail->price * $product_Detail->discount) / 100) }}₫
                        </span></p>
                </p>
                <a href="" class="btn btn-primary">Cho vào giỏ hàng</a>
                <!-- rating -->
                {{-- <div style="border:1px solid #dddddd; margin-top: 15px;">
                    <h4 style="padding-left: 10px;">Rating</h4>

                    <br>
                </div> --}}
                <!-- /rating -->
                <div class="middle" style="margin-top:20px; font-size: 16px; text-align: justify;">
                    <!-- chi tiet -->
                    {{ $product_Detail->description }}
                    <!-- chi tiet -->
                </div>
            </div>
        </div>
    </div><br/><br>

    {{-- sản phẩm tương tự --}}

    <div class="special-collection">
        <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
                <div class="head-tabs head-tab1 col-lg-3">
                    <h2>
                       Có Thể Bạn Cũng Thích
                    </h2>
                </div>
                <div class="col-lg-3 pull-right text-right">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex">
                <div class="clearfix">

                    @foreach ($relatedProducts as $item)
                        <!-- box product -->
                        <div class="col-xs-6 col-md-3 col-sm-6 ">
                            <div class="product-grid" id="product-1168979" style="height: 420px; overflow: hidden;">
                                <div class="image"> <a href="{{ route('productDetail', ['id' => $item->id]) }}"><img
                                            src="{{ asset('image/product/' . $item->image) }}" title="{{ $item->name }}"
                                            alt="{{ $item->name }}" class="img-responsive"
                                            style="height: 230px; width: 170px;"></a> </div>
                                <div class="info">
                                    <h3 class="name"><a
                                            href="{{ route('productDetail', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                    </h3>
                                    <p class="price-box"> <span class="special-price"> <span class="price product-price"
                                                style="text-decoration:line-through;"> {{ number_format($item->price )}}</span> ₫ </span>
                                    </p>
                                    <p class="price-box"> <span class="special-price"> <span class="price product-price">
                                                {{ number_format($item->price - ($item->price * $item->discount) / 100 )}} </span>₫ </span>
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
                </div>
            </div>
        </div>
    </div>
@endsection
