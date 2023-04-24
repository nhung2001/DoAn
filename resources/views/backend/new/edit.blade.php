@extends('backend.layout.master')

@section('title')
    <title>Edit News</title>

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
                        <h1 class="m-0">Edit News</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('updateNew', $new->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name: </label>
                                <input disabled type="text" name="name" value="{{ $new->name }}"
                                    class="form-control " id="name">
                            </div>
                            <div class="form-group">
                                <label for="description">Description: </label>
                                <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                                    id="description">{{ $new->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content: </label>
                                <textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror" id="content">{{ $new->content }}</textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="hot">Hot: </label>
                                <select name="hot" class="form-select form-control">
                                    <option value="Có"{{ $new->hot == '1' ? 'selected' : '' }}>Có</option>
                                    <option value="Không"{{ $new->hot == '0' ? 'selected' : '' }}>Không</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image: </label>
                                <input type="file" name="image" value="{{ $new->image }}" class="form-control "
                                    id="image">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <a href="{{ route('newAdmin') }}" class="btn btn-secondary">Hủy</a>
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
