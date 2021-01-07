@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://interactive-examples.mdn.mozilla.net/media/cc0-images/grapefruit-slice-332-332.jpg" class="rounded-circle w-75">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-3"><strong>153</strong>post</div>
                <div class="pr-3"><strong>15k</strong>followers</div>
                <div class="pr-3"><strong>23k</strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="laravel.com">{{ $user->profile->url ?? "N/A" }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fevn2-1.fna.fbcdn.net/v/t51.2885-15/e35/c139.0.550.550a/s480x480/135485859_201650958336080_4564845623124856800_n.jpg?_nc_ht=instagram.fevn2-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=vNeu0eYip5EAX_tlxYD&tp=1&oh=964f4acc012f60b1327cb558f9ac2cd5&oe=60224B33" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fevn2-1.fna.fbcdn.net/v/t51.2885-15/e35/c132.0.564.564a/s240x240/131897168_727687298175032_7267052498875164208_n.jpg?_nc_ht=instagram.fevn2-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=rLL0nHVKiYUAX9Oat0E&tp=1&oh=1920df7b29c7d813fa1a4bf993d65930&oe=601FD2BD" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fevn2-1.fna.fbcdn.net/v/t51.2885-15/e35/c53.0.900.900a/s320x320/134235244_250072063131384_630243361121788782_n.jpg?_nc_ht=instagram.fevn2-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=f3aFI4IxKdsAX-HqPnz&tp=1&oh=729df3726c8f55c6a549f57dcdb6011f&oe=601EC989" class="w-100">
        </div>
    </div>
</div>
@endsection
