@extends('layouts.layout_default')

@section('page-title', 'DC Comics - Comics')

@section('content')
<div class="container">

    <div class="row row-cols-6">
        @foreach ($lista_comics as $comic)
            <div class="card">
                <img src="{{ $comic["thumb"]}}" class="card-img-top" alt="comic">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic["title"]}}</h5>
                  </div>
            </div>
        @endforeach
    </div>
</div>
@endsection