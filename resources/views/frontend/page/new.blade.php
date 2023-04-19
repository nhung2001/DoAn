@extends('frontend.layout.pages')
@section('title', 'New Page')
@section('content')
    <h1>Tin tức</h1>
    <div class="wrapper-blog">
        <!-- list news -->
        <div class="row">

            @foreach ($New as $item)
                <div class="col-md-6 article">
                    <a href="" class="image"> <img src="{{ asset('image/new/' . $item->image) }}"
                            alt="{{ $item->name }}" title="{{ $item->name }}" class="img-responsive"
                            style="height: 230px; width: 460px;"></a>
                    <h3><a href="{{ route('newDetail', ['id' => $item->id]) }}" style="font-weight: bold;">{{ $item->name }}</a></h3>
                    <p class="desc">
                    <p>{{ $item->description }}</p>
                    </p>
                </div>
            @endforeach
        </div>
        <!-- end list news -->
    </div>
@endsection
