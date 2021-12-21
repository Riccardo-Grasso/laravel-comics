@extends('layouts.layout_default')

@section('page-title', 'DC Comics - ' . $comic["title"])

@section('content')
    <div class="container">
        <h1 class="py-5 my-0" style="color: white">
            Dettagli prodotto - {{$comic["title"]}}
        </h1>
    </div>
@endsection