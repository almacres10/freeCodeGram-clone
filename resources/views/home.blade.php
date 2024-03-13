@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>

            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
        </div>
    </div>
</div>
@endsection
