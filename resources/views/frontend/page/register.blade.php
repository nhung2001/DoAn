@extends('frontend.layout.main')
@section('content')
    <div class="template-customer container">
        <h1>Đăng ký tài khoản</h1>
        <p> Nếu bạn chưa có tài khoản, hãy đăng ký ngay để mua hàng cùng những ưu đãi từ cửa hàng.</p>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
                <div class="wrapper-form">
                    <form method='post' action="{{ route('register') }}">
                        @csrf
                        <input name="__RequestVerificationToken" type="hidden"
                            value="CfDJ8NCDIeDSHgNIh7wY7X1HBtTBzdju-hUg15GcW6GapXzfmQE3y2P-Pa1gLzKPnkBBOeGOPfIY8YizaUAza1qjuq-S7qBC9cNJ5wBCsY1hvEGhDYHpl9GdoxvRVGcVgf20tVL6_NtcL9vQLmmDhdq91T0" />
                        <p class="title"><span>Đăng ký tài khoản</span></p>
                        <div class="form-group">
                            <label>Họ và tên:<b id="req">*</b></label>
                            <input type="text" name="name" class="input-control @error('name') is-invalid @enderror"
                                placeholder="Enter name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email:<b id="req">*</b></label>
                            <input type="email" name="email" class="input-control @error('email') is-invalid @enderror"
                                placeholder="Enter email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ:<b id="req">*</b></label>
                            <input type="text" name="address" class="input-control @error('address') is-invalid @enderror"
                                placeholder="Enter address">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Điện thoại:<b id="req">*</b></label>
                            <input type="text" name="phone" class="input-control @error('phone') is-invalid @enderror"
                                placeholder="Enter phone">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:<b id="req">*</b></label>
                            <input type="password" name="password"
                                class="input-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Enter password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="button" value="Đăng ký">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrapper-form">
                    <p class="title"><span>Đăng nhập</span></p>
                    <p>Đăng nhập tài khoản nếu bạn đã có tài khoản.
                        Đăng nhập tài khoản để theo dõi đơn đặt hàng và đặt hàng được thuận lợi.</p>
                    <a href="{{ route('viewLoginUser') }}" class="button">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
@endsection
