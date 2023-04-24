<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta name="keywords" content="">
    <title>NShop</title>
    {{-- <link rel="canonical" href="index.html"> --}}
    <link rel="shortcut icon" href="{{ asset('frontend/themes/assets/nshop8.jpg') }}" type="image/x-icon" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
    <link href='{{ asset('/frontend/themes/assets/font-awesome.min221b.css?1481775169361') }}' rel='stylesheet'
        type='text/css' />
    <link href='{{ asset('frontend/themes/assets/bootstrap.min221b.css?1481775169361') }}' rel='stylesheet'
        type='text/css' />
    <link href='{{ asset('frontend/themes/assets/owl.carousel221b.css?1481775169361') }}' rel='stylesheet'
        type='text/css' />
    <link href='{{ asset('frontend/themes/assets/responsive221b.css?1481775169361') }}' rel='stylesheet'
        type='text/css' />
    <link href='{{ asset('frontend/themes/assets/styles.scss221b.css?1481775169361') }}' rel='stylesheet'
        type='text/css' />
    <script src='{{ asset('frontend/themes/assets/jquery.min221b.js?1481775169361') }}' type='text/javascript'></script>
    <script src='{{ asset('frontend/themes/assets/bootstrap.min221b.js?1481775169361') }}' type='text/javascript'></script>
    <script src='{{ asset('frontend/assets/themes_support/api.jquerya87f.js?4') }}' type='text/javascript'></script>
    <link href='{{ asset('frontend/themes/assets/bw-statistics-style221b.css?1481775169361') }}' rel='stylesheet'
        type='text/css' />
</head>

<body class="index">
    <!-- header -->
    @include('frontend.layout.Header')
    <!-- end header -->

    {{-- //<div class="content"> --}}
    <div class="content">
        <div class="container">
            <h1 style="display:none;">NShop</h1>

            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <!--support -->
                    <div class="online_support block">
                        <div class="new_title">
                            <h2>Hỗ trợ trực tuyến</h2>
                        </div>
                        <div class="block-content">
                            <div class="sp_1">
                                <p>Tư vấn bán hàng 1</p>
                                <p>Mrs. Linh: (02) 8888 2578</p>
                            </div>
                            <div class="sp_1">
                                <p>Tư vấn bán hàng 2</p>
                                <p>Mr. Anh: (02) 8888 8752</p>
                            </div>
                            <div class="sp_1">
                                <p>Email liên hệ</p>
                                <p>support@mail.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- end support -->
                    <!-- box search -->
                    <div class="panel panel-default" style="margin-top:15px;">
                        <div class="panel-heading"> Tìm theo mức giá </div>
                        <form action="{{ route('searchPrice') }}" method="POST">
                            @csrf
                            <div class="panel-body">
                                <ul class="list-group" style="border:0px;">
                                    <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                                        <input type="number" min="0" value="0" id="min_price"
                                            name="min_price" class="form-control" />
                                    </li>
                                    <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="number" min="0" value="0" id="max_price"
                                            name="max_price" class="form-control" />
                                    </li>
                                    <li class="list-group-item" style="border:0px; text-align:center">
                                        <button style="margin-top:5px;" class="btn btn-warning" type="submit">Tìm kiếm
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <!-- end box search -->

                    <!-- hot news -->
                    <div class="home-blog">
                        <h2 class="title"> <span>Tin tức</span></h2>
                        <div class="row">
                            <div class="owl-home-blog owl-home-blog-sidebar">
                                <!-- list hot news -->
                                @foreach ($hotNew as $item)
                                    <div class="item">
                                        <div class="article">
                                            <a href="" class="image"> <img
                                                    src="{{ asset('image/new/' . $item->image) }}"
                                                    alt="{{ $item->name }}" title="{{ $item->name }}"
                                                    class="img-responsive" style="height: 170px; width: 550px;"></a>
                                            <div class="info">
                                                <h3><a
                                                        href="{{ route('newDetail', ['id' => $item->id]) }}">{{ $item->name }}</a>
                                                </h3>
                                                <p class="desc">
                                                <p>{{ $item->description }}</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- end list hot news -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-9">
                    <!-- main -->
                    @yield('content')
                    <!-- end main -->
                </div>
            </div>
        </div>
    </div>

    <!-- end hot news -->

    <div class="privacy">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="image">
                        <img src="{{ asset('frontend/themes/assets/ico-service-1221b.png?1481775169361') }}"
                            alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive">
                    </div>
                    <div class="info">
                        <h3>Giao hàng miễn phí</h3>
                        <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="image">
                        <img src="{{ asset('frontend/themes/assets/ico-service-2221b.png?1481775169361') }}"
                            class="img-responsive" alt="Khuyến mại" title="Khuyến mại">
                    </div>
                    <div class="info">
                        <h3>Khuyến mại</h3>
                        <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="image">
                        <img src="{{ asset('frontend/themes/assets/ico-service-3221b.png?1481775169361') }}"
                            class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền">
                    </div>
                    <div class="info">
                        <h3>Hoàn trả lại tiền</h3>
                        <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layout.footer');
    <script src='{{ asset('frontend/themes/assets/owl.carousel.min221b.js?1481775169361') }}' type='text/javascript'>
    </script>
    <script src='{{ asset('frontend/themes/assets/owl.carousel.min221b.js?1481775169361') }}' type='text/javascript'>
    </script>
    <script src='{{ asset('frontend/themes/assets/owl.carousel.min221b.js?1481775169361') }}' type='text/javascript'>
    </script>
    <script src='{{ asset('frontend/themes/assets/main221b.js?1481775169361') }}' type='text/javascript'></script>
    <script src='{{ asset('frontend/themes/assets/ajax-cart221b.js?1481775169361') }}' type='text/javascript'></script>
</body>

</html>
