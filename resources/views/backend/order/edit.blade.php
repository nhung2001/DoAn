@extends('backend.layout.master')

@section('title')
    <title>Edit Oders</title>

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="content-wrapper" style="height:auto">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Oders</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('orderUpdate', $status->id) }}" method="post">
                            @csrf
                            
                            <div class="form-group">
                                <label for="hot">Status: </label>
                                <select name="status" class="form-select form-control">
                                    <option value="Đang xử lý"{{ $status->status == '0' ? 'selected' : '' }}>Đang xử lý</option>
                                    <option value="Đang giao hàng"{{ $status->status == '1' ? 'selected' : '' }}>Đang giao hàng</option>
                                    <option value="Đã giao hàng"{{ $status->status == '2' ? 'selected' : '' }}>Đã giao hàng</option>
                                    {{-- <option value="Đã hủy"{{ $status->status == '3' ? 'selected' : '' }}>Đã hủy</option> --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <a href="{{ route('orderIndex') }}" class="btn btn-secondary">Hủy</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
