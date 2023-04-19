@extends('frontend.layout.pages')
@section('title', 'New Detail')
@section('content')
    <div class="middle">
        <!-- chi tiet -->
        <h3>{{ $new_Detail->name }}</h3>
        <p><img src="{{ asset('image/new/' . $new_Detail->image) }}" style="height: 350px; width: 100%;"></p>
        <p>{{ $new_Detail->description }}</p>
        <p>{{ $new_Detail->content }}</p>
        <!-- /chi tiet -->
    </div>
@endsection
