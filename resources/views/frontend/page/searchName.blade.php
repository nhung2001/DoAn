@extends('frontend.layout.pages')
@section('title', 'Search Name')
@section('content')
    <div class="special-collection">
        <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
                <div class="head-tabs head-tab1 col-lg-3">
                    <h2>
                        Tìm kiếm
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

                    @foreach ($search_Name as $item)
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
                                            <a href="" class="button">Add to Cart</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end box product -->
                    @endforeach

                    <!-- paging -->
                    <div style="clear: both;"></div>
                    <div style="margin-top: -50px;"
                        class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">
                        <ul class="pagination">
                            <li class="page-item"><span>Trang</span></li>
                            <li class="page-item">{{ $search_Name->links('pagination::bootstrap-4') }}
                            </li>
                        </ul>
                    </div>
                    <!-- end paging -->
                </div>
            </div>
        </div>
    </div>
@endsection
