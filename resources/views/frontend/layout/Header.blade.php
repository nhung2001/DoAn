<header id="header">
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (02) 8888 2578</span>
                    <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span>
                </div>
                @if (Auth()->user())
                    <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="#">Xin chào
                            {{ auth()->user()->email }}
                        </a>&nbsp; &nbsp;<a href="{{ route('listOrder') }}">Đơn hàng</a>
                        </a>&nbsp; &nbsp;<a href="{{ route('user.logout') }}">Đăng xuất</a>
                        
                    </div>
                    </form>
            </div>
        @else
            <div class="col-xs-12 col-sm-6 col-md-6 customer"> <a href="{{ route('viewLoginUser') }}">Đăng
                    nhập</a>&nbsp;
                &nbsp;<a href="{{ route('viewRegister') }}">Đăng ký</a> </div>
            @endif
        </div>
    </div>
    </div>
    <!-- end top header -->
    <!-- middle header -->
    <div class="mid-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.html">
                        <img src="{{ asset('frontend/image/logoShop.jpg') }}" style="height: 60px;" alt="Nshop"
                            title="Nshop" class="img-responsive"> </a> </div>

                <!--tìm kiếm-->
                <form method="post" action="{{ route('searchName') }}">
                    @csrf
                    <div class="col-xs-12 col-sm-12 col-md-6 header-search">
                        <!--<form method="post" id="frm" action="">-->
                        <div style="margin-top:25px;" id="smart-search">
                            <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." name="keyword"
                                class="input-control">
                            <button style="margin-top:5px;" type="submit"> <i class="fa fa-search"></i> </button>
                        </div>
                        <!--</form>-->
                    </div>
                </form>


                <!--giỏ hàng, yêu thích-->
                <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">

                    <div class="wrapper-mini-cart"><a href="cart"> <span class="icon"><i
                                    class="fa fa-shopping-cart"></i></span>

                            <a href="cart"> <span class="mini-cart-count">
                                    {{ Cart::content()->unique('id')->count() }} </span> sản phẩm <i
                                    class="fa fa-caret-down"></i></a>
                    </div>

                    <div class="wrapper-mini-cart"  style="margin-right: 12px"><a href="cart"> <span class="icon"><i
                                    class="fa fa-heart"></i></span>
                            <a href="cart"> <span class="mini-cart-count">
                                </span> sản phẩm <i class="fa fa-caret-down"></i></a>
                    </div>
                </div>

            </div>
        </div>
        <!-- end middle header -->
        <!-- menu -->
        <div class="bottom-header">
            <div class="container">
                <div class="clearfix">
                    <ul class="main-nav hidden-xs hidden-sm list-unstyled">
                        <li class="active"><a href="{{ route('home_user') }}">Trang chủ</a></li>

                        <li class="has-submenu"> <a href="#"> <span>Sản phẩm</span>
                                <i class="fa fa-caret-down" style="margin-left: 5px;"></i> </a>
                            <ul class="list-unstyled level1">
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ route('productCategory', $category->id) }}">{{ $category->name }}</a>
                                        @foreach ($category->subCategories as $subcategory)
                                    <li style="padding-left:20px;"><a
                                            href="{{ route('productSubCategory', [$subcategory->id]) }}">{{ $subcategory->name }}</a>
                                    </li>
                                @endforeach
                        </li>
                        @endforeach
                    </ul>
                    </li>

                    {{-- <li><a href="{{ route('listOrder') }}">Đơn hàng</a></li> --}}
                    <li><a href="{{ route('new') }}">Tin tức</a></li>
                    <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                    </ul>
                    <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i
                            class="fa fa-bars"></i> </a>
                    <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
                        <li class="active"><a href="{{ route('home_user') }}">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="{{ route('new') }}">Tin tức</a></li>
                        <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end bottom header -->
</header>
