@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            
        </div>
        <div class="col-9">
            <div><h1>{{ $user->username }}</h1></div>

        </div>
    </div>
</div>
@endsection
