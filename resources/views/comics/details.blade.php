@extends('layouts.layout_details')

@section('page-title', 'DC Comics - ' . $comic["title"])

@section('content')
    <div class="comic-container">
        <div class="detail-comic-img-container">
            <div class="container">
            <img class="detail-comic-img" src="{{ $comic["thumb"]}}" alt="comic-image" />
        </div>
        </div>
    </div>

    <div class="container bg-white">
        <div class="row py-5">
            <div class="col-8 pe-5">
                <h1 >{{ $comic["title"]}}</h1>
                <div class="price my-4 bg-success p-2 text-white"> U.S. Price {{ $comic["price"]}}</div>
                <p>{{ $comic["description"]}}</p>
            </div>
            <div class="col-4">
                <h6 class="text-end">ADVERTISEMENT</h6>
                <a href="#">
                    <img class="w-100" src="{{asset('img/picture.jpg')}}" alt="poster">
                </a>
                
            </div>
        </div>
    </div>
    <div class="bg-grey">
        <div class="container py-5">
            <div class="row comic-data-container">
                <div class="col-6 pe-3 authors">
                    <h3>Talent</h3>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>Art By:</h6>
                        </div>
                        <div class="col-8">
                            @foreach ($comic["artists"] as $artist)
                            <a href="#">{{$artist}}</a>,   
                            @endforeach
                            
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>Written By:</h6>
                        </div>
                        <div class="col-8">
                            @foreach ($comic["writers"] as $writer)
                            <a href="#">{{$writer}}</a>,
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-6 ps-3">
                    <h3>Specs</h3>
                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <h6>Series:</h6>
                        </div>
                        <div class="col-8">
                            {{$comic["series"]}}                       
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>U.S. Price:</h6>
                        </div>
                        <div class="col-8">
                            {{$comic["price"]}}                            
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <h6>On Sale Date:</h6>
                        </div>
                        <div class="col-8">
                            {{$comic["sale_date"]}}                          
                        </div>
                        
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection