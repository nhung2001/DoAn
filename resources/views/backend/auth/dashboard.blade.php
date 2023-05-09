@extends('backend.layout.master')

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
                        <h1 class="m-0">Dashboard</h1>
                        <p class="mb-mb-0">Your analytics dashboard template.</p>
                        <hr>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-body bg-primary text-white mb-4">
                            <label>Total Orders</label>
                            <h4>{{ $totalOrders }}</h4>
                            <a href="" class="text-white">View Detail</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-body bg-success text-white mb-4">
                            <label>Total Products</label>
                            <h4>{{ $totalProducts }}</h4>
                            <a href="" class="text-white">View Detail</a>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card card-body bg-danger text-white mb-4">
                            <label>Total Users</label>
                            <h4>{{ $totalUsers }}</h4>
                            <a href="" class="text-white">View Detail</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        
                        
                        
                    </div>
                    <div class="col-md-12">
                        {{-- {{ $news->links('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
