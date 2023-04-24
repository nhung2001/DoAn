@extends('frontend.layout.pages')
@section('title', 'Product Detail')
@section('content')
    <div class="top">
        <div class="row">
            <div class="col-xs-12 col-md-6 product-image">
                <div class="featured-image">
                    <img src="{{ asset('image/product/' . $product_Detail->image) }}" class="img-responsive"
                        style="height: 370px; width: 250px; margin-left: 60px; margin-top: 10px;" />
                </div>
            </div>
            <div class="col-xs-12 col-md-6 info">
                <h1 itemprop="name">{{ $product_Detail->name }}</h1>
                <p class="vendor" style="font-size: 18px;"> Category:&nbsp; <span>
                </p>
                <p style="font-size: 20px"><b>{{ $product_Detail->name }}</b></p>
                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span
                            class="price product-price" style="text-decoration:line-through;">
                            {{ $product_Detail->price }}₫</span></p>
                <p itemprop="price" class="price-box product-price-box"> <span class="special-price"> <span
                            class="price product-price" style="color: red; font-weight: bold;">
                            {{ $product_Detail->price - ($product_Detail->price * $product_Detail->discount) / 100 }}₫
                        </span></p>
                </p>
                <a href="" class="btn btn-primary">Cho vào giỏ hàng</a>
                <!-- rating -->
                <div style="border:1px solid #dddddd; margin-top: 15px;">
                    <h4 style="padding-left: 10px;">Rating</h4>

                    <br>
                </div>
                <!-- /rating -->
            </div>
        </div>
    </div>
    <div class="middle" style="margin-top:20px;">
        <!-- chi tiet -->
        {{ $product_Detail->description }}
        <!-- chi tiet -->
    </div>
@endsection
