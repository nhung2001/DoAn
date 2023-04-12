@extends('backend.layout.master')

@section('title')
    <title>Update User</title>

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
                        <form action="{{ route('updateUser', $user->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Name: </label>
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
                            <div class="form-group">
                                <label for="email">Phone: </label>
                                <input type="text" name="phone" value="{{ $user->phone }}"
                                    class="form-control @error('phone') is-invalid @enderror" id="email">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Address: </label>
                                <input type="text" name="address" value="{{ $user->address }}"
                                    class="form-control @error('address') is-invalid @enderror" id="email">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Role: </label>
                                <select name="role" disabled>
                                    <option value="Admin"{{ $user->role == '1' ? 'selected' : '' }}>Admin</option>
                                    <option value="User"{{ $user->role == '0' ? 'selected' : '' }}>User</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
