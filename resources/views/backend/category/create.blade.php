@extends('backend.layout.master')

@section('title')
    <title>Add Category</title>

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('storeCategory') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Name: </label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Enter name"
                                    id="email">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
