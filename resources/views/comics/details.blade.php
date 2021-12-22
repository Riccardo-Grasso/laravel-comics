@extends('layouts.layout_details')

@section('page-title', 'DC Comics - ' . $comic["title"])

@section('content')
    <div class="container bg-white">
        <div class="row py-5">
            <div class="col-8">
                <h1 >{{ $comic["title"]}}</h1>
                <div class="price my-4 bg-success"> U.S. Price {{ $comic["price"]}}</div>
                <p>{{ $comic["description"]}}</p>
            </div>
            <div class="col-4">
                <h6 class="text-center">ADVERTISEMENT</h6>
                <img src="{{asset('img/picture.jpg')}}" alt="poster">
            </div>
        </div>
    </div>
@endsection