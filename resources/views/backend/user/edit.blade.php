@extends('backend.layout.master')

@section('title')
    <title>Update User</title>

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
                    <h1 class="m-0">Sửa User</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('updateUser', $user->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Tên user: </label>
                                <input type="text" name="name" value="{{ $user->name }}"
                                    class="form-control @error('name') is-invalid @enderror" id="email">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email: </label>
                                <input disabled type="email" name="email" value="{{ $user->email }}"
                                    class="form-control" id="email">
                            </div>
                            {{-- <div class="form-group">
                                <label for="email">Mật khẩu: </label>
                                <input disabled type="email" name="password" value="{{ $user->password }}"
                                    class="form-control" id="email">
                            </div> --}}
                            <div class="form-group">
                                <label for="email">Số điện thoại: </label>
                                <input type="text" name="phone" value="{{ $user->phone }}"
                                    class="form-control @error('phone') is-invalid @enderror" id="email">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Địa chỉ: </label>
                                <input type="text" name="address" value="{{ $user->address }}"
                                    class="form-control @error('address') is-invalid @enderror" id="email">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Vai trò: </label>
                                <select name="role" disabled class="form-select form-control">
                                    <option value="Admin"{{ $user->role == '1' ? 'selected' : '' }}>Employee</option>
                                    <option value="User"{{ $user->role == '0' ? 'selected' : '' }}>Customer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <a href="{{ route('user') }}" class="btn btn-secondary">Hủy</a>
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
