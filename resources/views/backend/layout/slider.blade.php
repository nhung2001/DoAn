<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<aside class="main-sidebar elevation-4" style="background-color: #4b5a64; ">
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="background-color:#367fa9; padding-left: 50px">
        <img src="{{ asset('AdminLTE-3.2.0/dist/img/nshop5.jpg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light" style="color: #fff;"><b>NSHOP</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="color: #fff">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('AdminLTE-3.2.0/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="color: #fff">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false" style="color:#367fa9">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="fa-solid fa-house"></i>
                        <p>
                            Dashboard
                            {{-- <span class="right badge badge-danger"></span> --}}
                        </p>
                    </a>
                </li>
                <li class="nav-item ">

                    <a href="#" class="nav-link active" style="background-color:#367fa9;">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Quản lý danh mục
                            <i class="right fas fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh mục cha</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subcategory') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh mục con</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product') }}" class="nav-link">
                        <i class="fa-solid fa-book-open"></i>
                        <p>
                            Quản lý sản phẩm
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('newAdmin') }}" class="nav-link">
                        <i class="fa-solid fa-newspaper"></i>
                        <p>
                            Quản lý tin tức
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('orderIndex') }}" class="nav-link">
                        <i class="fa-brands fa-jedi-order"></i>
                        <p>
                            Quản lý đơn hàng
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user') }}" class="nav-link">
                        <i class="fa-solid fa-users"></i>
                        <p>
                            Quản lý user
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('mail') }}" class="nav-link">
                        <i class="fa-solid fa-envelope"></i>
                        <p>
                            Gửi mail tới user
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>
                            Đăng xuất
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<style>
    a.nav-link:hover {
        color: #ffc107 !important;
    }

    a.nav-link {
        color: #fff !important;
    }
</style>
