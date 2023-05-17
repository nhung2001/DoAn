@extends('frontend.layout.main')
@section('content')
    <div class="content">
        <div class="container">
            <h1 style="display:none;">NShop</h1>
            <div class="row">
                <!-- banner left -->
                <div class="col-xs-12 col-md-3">
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-12"><img src="{{ asset('frontend/image/img1.jpg') }}"
                                style="height: 170px; width: 280px;" class="img-thumbnail"></div>
                    </div>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-12"><img src="{{ asset('frontend/image/img2.jpg') }}"
                                style="height: 170px; width: 280px;"class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- slide -->
                    <div class="owl-slider">
                        <div class="item">
                            <!-- ============================ -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- image Banner -->
                                <div class="carousel-inner">
                                    <div class="item active"> <img src="{{ asset('frontend/image/banner11.jpg') }}"
                                            style="height: 350px; width: 980px;" alt="banner 1">
                                    </div>
                                    <div class="item"> <img src="{{ asset('frontend/image/banner12.jpg') }}"
                                            style="height: 350px; width: 980px;" alt="banner 2">
                                    </div>
                                    <div class="item"> <img src="{{ asset('frontend/image/banner1.jpg') }}"
                                            style="height: 350px; width: 980px;" alt="banner 3">
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                            </div>
                            <!-- ============================ -->
                        </div>
                    </div>
                    <!-- end slide -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <!-- main -->

                    <!-- hot product -->
                    <div class="special-collection">
                        <div class="tabs-container">
                            <div class="row" style="margin-top:10px;">
                                <div class="head-tabs head-tab1 col-lg-11">
                                    <h2>BÁN CHẠY</h2>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tabs-content row">
                            <div id="content-taba4" class="content-tab content-tab-proindex">
                                <!-- box product -->
                                @foreach ($hotProducts as $item)
                                    <form action="{{ route('addCart') }}" method="post">
                                        @csrf
                                        <div class="col-xs-6 col-md-2 col-sm-6 ">
                                            <div class="product-grid" id="product-1168979"
                                                style="height: 420px; overflow: hidden;">
                                                <div class="image">
                                                    <a href="{{ route('productDetail', ['id' => $item->id]) }}"><img
                                                            src="{{ asset('image/product/' . $item->image) }}"
                                                            title="product ..." alt="$item->image" class="img-responsive"
                                                            style="height: 230px; width: 170px;"></a>
                                                </div>
                                                <div class="info">
                                                    <h3 class="name"><a
                                                            href="{{ route('productDetail', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                                    </h3>
                                                    <p class="price-box"> <span class="special-price"> <span
                                                                class="price product-price"
                                                                style="text-decoration:line-through;">
                                                                {{ number_format($item->price) }}</span> ₫
                                                        </span> </p>
                                                    <p class="price-box"> <span class="special-price"> <span
                                                                class="price product-price">
                                                                {{ number_format($item->price - ($item->price * $item->discount) / 100) }}
                                                            </span>₫
                                                        </span> </p>
                                                    <p class="price-box">
                                                        <a href="#"><img
                                                                src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                        <a href="#"><img
                                                                src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                        <a href="#"><img
                                                                src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                        <a href="#"><img
                                                                src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                        <a href="#"><img
                                                                src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                    </p>
                                                    <input name="qty" type="hidden" min="1" value="1" />
                                                    <input name="productid_hidden" type="hidden"
                                                        value="{{ $item->id }}" />
                                                    <div class="action-btn" >
                                                        <a class="d-block" href="{{ route('addfavorite', $item->id) }}" data-id="2479395">
                                                            <i class=" fa fa-heart-o fa-lg" style="margin-right: 8px; "></i>
                                                        </a>
                                                        <button class="button" type="submit">Add to cart</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach

                                <!-- end box product -->
                            </div>
                        </div>
                    </div>

                    <!-- sales product -->
                    <div class="special-collection">
                        <div class="tabs-container">
                            <div class="row" style="margin-top:10px;">
                                <div class="head-tabs head-tab1 col-lg-11">
                                    <h2>GIẢM GIÁ NHIỀU</h2>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tabs-content row">
                            <div id="content-taba4" class="content-tab content-tab-proindex">
                                <!-- box product -->
                                @foreach ($discounts as $item)
                                <form action="{{ route('addCart') }}" method="post">
                                    @csrf
                                    <div class="col-xs-6 col-md-2 col-sm-6 ">
                                        <div class="product-grid" id="product-1168979"
                                            style="height: 420px; overflow: hidden;">
                                            <div class="image">
                                                <a href="{{ route('productDetail', ['id' => $item->id]) }}"><img
                                                        src="{{ asset('image/product/' . $item->image) }}"
                                                        title="product ..." alt="$item->image" class="img-responsive"
                                                        style="height: 230px; width: 170px;"></a>
                                            </div>
                                            <div class="info">
                                                <h3 class="name"><a
                                                        href="{{ route('productDetail', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                                </h3>
                                                <p class="price-box"> <span class="special-price"> <span
                                                            class="price product-price"
                                                            style="text-decoration:line-through;">
                                                            {{ number_format($item->price) }}</span> ₫
                                                    </span> </p>
                                                <p class="price-box"> <span class="special-price"> <span
                                                            class="price product-price">
                                                            {{ number_format($item->price - ($item->price * $item->discount) / 100) }}
                                                        </span>₫
                                                    </span> </p>
                                                <p class="price-box">
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                    <a href="#"><img
                                                            src="{{ asset('frontend/image/star.jpg') }}"></a>
                                                </p>
                                                <input name="qty" type="hidden" min="1" value="1" />
                                                    <input name="productid_hidden" type="hidden"
                                                        value="{{ $item->id }}" />
                                                <div class="action-btn">
                                                    <form>
                                                        <a class="d-block" href="{{ route('addfavorite', $item->id) }}" data-id="2479395">
                                                            <i class=" fa fa-heart-o fa-lg" style="margin-right: 8px; "></i>
                                                        </a>
                                                        <button class="button" type="submit">Add to cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endforeach

                                <!-- end box product -->
                            </div>
                        </div>
                    </div>

                    <!-- hot news -->
                    <div class="home-blog">
                        <h2 class="title"> <span>Tin tức</span></h2>
                        <div class="row">
                            <div class="owl-home-blog owl-home-blog-bottompage">
                                @foreach ($hotNews as $item)
                                    <!-- new item -->
                                    <div class="item">
                                        <div class="article">
                                            <a href="" class="image"> <img
                                                    src="{{ asset('image/new/' . $item->image) }}"
                                                    alt="{{ $item->name }}" title="{{ $item->name }}"
                                                    class="img-responsive" style="height: 140px; width: 260px;"></a>
                                            <div class="info">
                                                <h3><a class="text3line"
                                                        href="{{ route('newDetail', ['id' => $item->id]) }}"
                                                        style="font-weight: bold;">{{ $item->name }}</a></h3>
                                                <p class="desc"> {{ $item->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /news item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- /hotnews -->
                    <!-- end main -->
                </div>
            </div>
        </div>
    </div>
@endsection