@extends('backend.layout.master')

@section('title')
    <title>List User</title>

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
                        <table style="width: 430%;">
                            <td>
                                <h1 class="m-0">Danh Sách User</h1>
                            </td>
                            <td>
                                <form action="" method="GET" style="margin-top: 20px; ">
                                    <input style="width:450px;  height:30px" type="text" name="keyword"
                                        placeholder="Nhập email ">
                                    <button type="submit">Tìm</button>
                                </form>
                            </td>
                        </table>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('createUser') }}" class="btn btn-success float-left m-2"
                            style="background-color: #337ab7">Thêm User</a>
                    </div>

                    @if ($users->isEmpty())
                        <div class="col-md-12">
                            <br>
                            <ul>
                                <h5>Không tìm thấy user vừa nhập. Vui lòng nhập lại!</h5>
                            </ul>
                        </div>
                    @else
                        <div class="col-md-12">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissable fade show">
                                    <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-success alert-dismissable fade show">
                                    <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                                    {{ session('error') }}
                                </div>
                            @endif
                            <table class="table table-bordered table-hover">
                                <thead style="background-color: #337ab7; color: #fff; border-color: #1fc4b3">
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên user</th>
                                        <th scope="col">Email</th>
                                        {{-- <th scope="col">Vai trò</th> --}}
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody style="background-color: #fff">
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            {{-- @if ($user->role == 0)
                                            <td>Customer</td>
                                        @elseif($user->role == 1)
                                            <td>Employee</td>
                                        @else
                                            <td>Admin</td>
                                        @endif --}}
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>
                                                <form class=" d-inline" action="{{ route('editUser', $user->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-info"
                                                        style="margin-right:5px ">Edit</a>
                                                </form>
                                                <form class=" d-inline" action="{{ route('destroyUser', $user->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Bạn có chắc chắn xóa không?')">Delete</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    @endif
                    <div class="col-md-12">
                        {{ $users->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
