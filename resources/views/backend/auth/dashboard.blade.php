@extends('backend.layout.index')

@section('title')
    <title>Dashboard</title>

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="content-wrapper" style="height:auto">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        {{-- <h1 class="m-0">Dashboard</h1>
                        <p class="mb-mb-0">Your analytics dashboard template.</p> --}}
                        <hr>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-body bg-info text-white mb-4">
                            <label>Tổng đơn hàng</label>
                            <h4>{{ $totalOrders }}</h4>
                            <a href="{{ route ('orderIndex') }}" class="text-white">Xem ngay</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-body bg-success text-white mb-4">
                            <label>Tổng sản phẩm</label>
                            <h4>{{ $totalProducts }}</h4>
                            <a href="{{ route ('product') }}" class="text-white">Xem ngay</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-body bg-secondary text-white mb-4">
                            <label>Tổng người dùng</label>
                            <h4>{{ $totalUsers }}</h4>
                            <a href="{{ route ('user') }}" class="text-white">Xem ngay</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-body bg-danger text-white mb-4">
                            {{-- <label>Doanh thu tháng {{ $currentMonth }}</label> --}}
                            <label>Doanh thu tháng này</label>
                            <h4>{{ $formatRevenue }}</h4>
                            <a href="{{ route ('orderFind') }}" class="text-white">Xem ngay</a>
                        </div>
                    </div>

                    <div class="col-md-12">
                        {{-- {{ $news->links('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Biểu đồ doanh thu theo ngày</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    {{-- <canvas id="curve_chart"></canvas> --}}
                                    <div id="curve_chart" style="width: 1000px; height: 300px"></div>
                                    {{-- @include('revenue-chart') --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
<style>
    .custom-link {
        color: white !important;
    }
    </style>