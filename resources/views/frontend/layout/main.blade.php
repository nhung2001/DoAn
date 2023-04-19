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
    <title>DKT Store</title>
    <link rel="canonical" href="index.html">
    <link rel="shortcut icon"
        href="{{ asset('frontend/themes/assets/favicon221b.png?1481775169361') }}"
        type="image/x-icon" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
    <link href='{{ asset('/frontend/themes/assets/font-awesome.min221b.css?1481775169361') }}'
        rel='stylesheet' type='text/css' />
    <link href='{{ asset('frontend/themes/assets/bootstrap.min221b.css?1481775169361') }}'
        rel='stylesheet' type='text/css' />
    <link href='{{ asset('frontend/themes/assets/owl.carousel221b.css?1481775169361') }}'
        rel='stylesheet' type='text/css' />
    <link href='{{ asset('frontend/themes/assets/responsive221b.css?1481775169361') }}'
        rel='stylesheet' type='text/css' />
    <link href='{{ asset('frontend/themes/assets/styles.scss221b.css?1481775169361') }}'
        rel='stylesheet' type='text/css' />
    <script src='{{ asset('frontend/themes/assets/jquery.min221b.js?1481775169361') }}'
        type='text/javascript'></script>
    <script src='{{ asset('frontend/themes/assets/bootstrap.min221b.js?1481775169361') }}'
        type='text/javascript'></script>
    <script src='{{ asset('frontend/assets/themes_support/api.jquerya87f.js?4') }}' type='text/javascript'></script>
    <link href='{{ asset('frontend/themes/assets/bw-statistics-style221b.css?1481775169361') }}'
        rel='stylesheet' type='text/css' />
</head>

<body class="index">
    <!-- header -->
    @include('frontend.layout.Header')
    <!-- end header -->
    @yield('content')
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
    <script src='{{ asset('frontend/themes/assets/owl.carousel.min221b.js?1481775169361') }}'
        type='text/javascript'></script>
    <script src='{{ asset('frontend/themes/assets/owl.carousel.min221b.js?1481775169361') }}'
        type='text/javascript'></script>
    <script src='{{ asset('frontend/themes/assets/owl.carousel.min221b.js?1481775169361') }}'
        type='text/javascript'></script>
    <script src='{{ asset('frontend/themes/assets/main221b.js?1481775169361') }}'
        type='text/javascript'></script>
    <script src='{{ asset('frontend/themes/assets/ajax-cart221b.js?1481775169361') }}'
        type='text/javascript'></script>
</body>

</html>
