@extends('frontend.layout.pages')
@section('title', 'List Order')

@section('content')
    <div class="content-wrapper" style="height:auto">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">List Orders</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="table-responsive">
            <table class="table table-cart">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tổng tiền</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Xem</th>
                    </tr>
                </thead>
                <tbody style="background-color: #fff">
                    @foreach ($orders as $item)
                        @csrf
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->total }}</td>
                            <td>{{ $item->created_at->format('D d/m/Y') }}</td>

                            @if ($item->status == 0)
                                <td>Đang xử lý</td>
                            @elseif($item->status == 1)
                                <td>Đang giao hàng</td>
                            @else
                                <td>Giao hàng thành công</td>
                            @endif
                            <td> <a href="{{ route('orderDetail', $item->id)}}"class="btn d-inline btn-success">Chi tiết</a></td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            {{ $orders->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div>
    </div>
@endsection
