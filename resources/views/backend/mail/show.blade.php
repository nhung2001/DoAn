@extends('backend.layout.master')

@section('title')
    <title>Mail Detail</title>

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
                        <h1 class="m-0">Chi Tiết Email</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <b>Ngày gửi:</b> {{ $mail->created_at->format('D d/m/Y') }}
                        </p>
                        <p>
                            <b>Tiêu đề mail:</b> {{ $mail->title }}
                        </p>
                        <p>
                            <b>Nội dung mail:</b>
                        </p>
                        <p style="margin-left: 50px">
                            {!! $mail->content !!}
                        </p>
                        <br>
                        <a href="{{ route('mail') }}" class="btn btn-secondary">Quay lại</a>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
@endsection
