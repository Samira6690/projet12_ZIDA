@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('succes'))
    <div class="alert alert-success">
        {{session()->get('success') }}
    </div>
    @endif
<h1>Mon bon coin</h1>
@foreach ($ads as $ad )
<div class="d-flex justify-content-center">
    <div class="card mb-3" style="width: 50%;">
        <div class="card-body">
            <h5 class="card-title"> {{ $ad->title }}</h5>
            <p class="card-text"> {{ $ad->description }} </p>
            <h6 class="card-subtitle mb-2 text-muted"> {{ $ad->localisation }}</h6>
            <h6 class="card-text">{{ $ad->price }}</h6>
        </div>
    </div>
</div>
@endforeach
</div>
@endsection
