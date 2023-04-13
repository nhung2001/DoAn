@extends('backend.layout.master')

@section('title')
    <title>List Sub_Category</title>

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
                        <h1 class="m-0">List Category</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('createSubCategory') }}" class="btn btn-success float-left m-2">Add Sub_Category</a>
                    </div>
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissable fade show">
                                <button class="close" data-dismiss="alert" aria-label="Close">×</button>
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered" >
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->categories_id }}</td>
                                        <td>
                                            <a href="{{ route('editSubCategory', [$category->id]) }}" class="btn btn-default">Edit</a>
                                            <form action="{{ route('destroySubCategory', $category->id) }}" method="post">
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
                        {{ $categories->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
