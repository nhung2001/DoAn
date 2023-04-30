@extends('frontend.layout.main')
@section('title', 'Login Page')
@section('content')
    <div class="template-customer container">
        <h1>Đăng nhập tài khoản</h1>
        <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
        <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
                <div class="wrapper-form">
                    <form method='post' action="{{ route('loginUser') }}">
                        @csrf
                        <input name="__RequestVerificationToken" type="hidden"
                            value="CfDJ8NCDIeDSHgNIh7wY7X1HBtTC5UoDhnpPY_bZxEAeHg3_XzL3KFfHY1L7RC4b6K5PPzwy7cBnVlo7o43qXnf1fjxMAvl49i2tyH2k-qFbQOFYRs5LeSDFHBI6XXee3ODmKapQeEAQcEVH5_7dlOO309Y" />
                        <p class="title"><span>Đăng nhập tài khoản</span></p>
                        <div class="form-group ">
                            <label>Email:<b id="req">*</b></label>
                            <input type="email" class="input-control @error('email') is-invalid @enderror" name="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:<b id="req">*</b></label>
                            <input type="password" name="password"
                                class="input-control @error('password') is-invalid @enderror" placeholder="Enter password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <input type="submit" class="button" value="Đăng nhập">
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wrapper-form">
                    <p class="title"><span>Tạo tài khoản mới</span></p>
                    <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng và các chương trình giảm giá của chúng
                        tôi.</p>
                    <a href="{{ route('viewRegister') }}" class="button">Đăng ký</a>
                </div>
            </div>
        </div>
    </div>
@endsection
