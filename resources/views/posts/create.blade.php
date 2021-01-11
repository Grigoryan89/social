@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/posts" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">

                    <h1>Add New Post</h1>
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">{{ __('Posts Caption') }}</label>
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                               name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">{{ __('Posts Image') }}</label>
                        <input id="image" type="file" class="form-control-file"
                               name="image" autocomplete="caption" autofocus>

                        @error('image')
                               <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button type="submit" class="btn btn-primary">Add New Post</button>
                    </div>


                </div>
            </div>
        </form>
    </div>
@endsection

