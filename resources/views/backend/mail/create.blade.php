@extends('backend.layout.master')

@section('title')
    <title>Add Mail</title>

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
                        <h1 class="m-0">Add Mail</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        {{-- <form action="{{ route('sendMail') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="email_tile">Email tile:</label>
                            <input id="email_content" name="email_title"/><br>
                            <label for="email_content">Email Content:</label>
                            <textarea id="email_content" name="email_content"></textarea>

                            <button type="submit">Send Email</button>
                        </form> --}}
                        <form action="{{ route('sendMail') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email tile: </label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" placeholder="Enter tile">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content"> Email content: </label>
                                <textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror"
                                    placeholder="Enter content" id="content"></textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send Email</button>
                                <a href="{{ route('mail') }}" class="btn btn-secondary">Hủy</a>
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
