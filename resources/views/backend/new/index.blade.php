@extends('backend.layout.master')

@section('title')
    <title>List New</title>

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
                        <h1 class="m-0">List New</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('createNew') }}" class="btn btn-success float-left m-2">Add New</a>
                    </div>
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
                        <table class="table table-bordered" >
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Hot</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $new)
                                    <tr>
                                        <th scope="row">{{ $new->id }}</th>
                                        <td><img width="50px" height="150px" src="{{ asset('image/new/'. $new->image) }}"></td>
                                        <td>{{ $new->name }}</td>
                                        <td>{{ $new->description}}</td>
                                        <td>{{ $new->content }}</td>
                                        <td>{{ $new->hot }}</td>
                                        <td>
                                            <a href="{{ route('editNew', [$new->id]) }}" class="btn btn-default">Edit</a>
                                            <form action="{{ route('destroyNew', $new->id) }}" method="post">
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
                    <div class="col-md-12">
                        {{ $news->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
