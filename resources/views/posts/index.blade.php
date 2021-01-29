@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-8 offset-3">
                    <div>
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </div>
                </div>
                <div class="col-4 ">
                    <div>
                        <div class="d-flex align-content-center">
                            <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-100 rounded-circle" style="max-width: 100px">
                            <a href="/profiles/{{ $post->user->id }}" >Profile Page</a>
                        </div>
                        <a href="">Follow</a>
                        <h3>{{ $post->caption }}</h3>
                        <h3>{{ $post->user->email }}</h3>
                    </div>
                </div>
            </div>

        @endforeach
            <div class="row">
                <div class="col-12">
                    {{ $posts->links() }}
                </div>
            </div>
    </div>
@endsection

