@php
    $navbar_links = [
[
        "link" => "CHARACTERS",
        "route_name" => "characters.index"
],
[
        "link" => "COMICS",
        "route_name" => "comics.index"
],
[
        "link" => "MOVIES",
        "route_name" => "movies.index"
],
[
        "link" => "TV",
        "route_name" => "tv.index"
],
[
        "link" => "GAMES",
        "route_name" => "games.index"
],
[
        "link" => "COLLECTIBLES",
        "route_name" => "collectibles.index"
],
[
        "link" => "VIDEOS",
        "route_name" => "videos.index"
],
[
        "link" => "FANS",
        "route_name" => "fans.index"
],
[
        "link" => "NEWS",
        "route_name" => "news.index"
],
[
        "link" => "SHOP",
        "route_name" => "shop.index"
],
    ]
@endphp



<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          @foreach ($navbar_links as $item)
             <li class="nav-item">
               <a class="nav-link" href="{{route($item["route_name"])}}">{{ $item["link"]}}</a>
               </li> 
          @endforeach
      </ul> 
    </div>
  </nav>
</header>