@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://interactive-examples.mdn.mozilla.net/media/cc0-images/grapefruit-slice-332-332.jpg" class="rounded-circle w-75">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="/posts/create">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-3"><strong>{{ $user->posts->count() }}</strong>posts</div>
                    <div class="pr-3"><strong>15k</strong>followers</div>
                    <div class="pr-3"><strong>23k</strong>following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? "N/A"}}</div>
                <div>{{ $user->profile->description ?? "N/A"}}</div>
                <div><a href="laravel.com">{{ $user->profile->url ?? "N/A" }}</a></div>
            </div>
        </div>
        <div class="row pt-4">

        @foreach($user->posts as $post)
            <div class="col-4 pb-3 w-25">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
            @endforeach
        </div>
    </div>
@endsection

