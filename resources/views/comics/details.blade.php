@extends('layouts.layout_default')

@section('page-title', 'DC Comics - ' . $comic["title"])

@section('content')
    <div class="container">
        <div class="row" style="color: white">
            <div class="col-8">
                <h1 >{{ $comic["title"]}}</h1>
                <div class="price"> U.S. Price {{ $comic["price"]}}</div>
                <p>{{ $comic["description"]}}</p>
            </div>
            <div class="col-4">
                <h3>ADVERTISEMENT</h3>
                <img src="{{asset('img/picture.jpg')}}" alt="poster">
            </div>
        </div>
    </div>
@endsection