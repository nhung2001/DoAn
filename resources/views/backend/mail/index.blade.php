@extends('backend.layout.master')

@section('title')
    <title>List Mail</title>

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
                        <h1 class="m-0">List Mail</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('mailForm') }}" class="btn btn-success float-left m-2"
                            style="background-color: #337ab7">Add Mail</a>
                    </div>
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissable fade show">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered table-hover">
                            <thead style="background-color: #337ab7; color: #fff; border-color: #1fc4b3">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #fff">
                                @foreach ($mails as $mail)
                                    <tr>
                                        <th scope="row">{{ $mail->id }}</th>
                                        <td>{{ $mail->title }}</td>
                                        <td>{{ $mail->created_at->format('D d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('showMail', [$mail->id]) }}"
                                                class="btn d-inline btn-info">Chi tiết</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $mails->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
