@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
    <div class="row">
    <div class="col-8 offset-2">

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="caption" 
                       type="text" 
                       class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" 
                       name="caption" 
                       value="{{ old('caption') }}" 
                       autocomplete="caption" autofocus>

                @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">Post Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if ($errors->has('caption'))
                <strong>{{ $errors->first('caption') }}</strong>
            @endif
        </div>

        <div class="row pt-4">
            <button class="btn btn-primary">Add New Post</button>
        </div>

    </form>
    </div>
    </div>


</div>
@endsection