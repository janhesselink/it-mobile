@extends('app')

@section('content')
    <h1>{{ $artikel->name }}</h1>

    <h4>€ {{ $artikel->price }}</h4>
    <h4>Merk: {{ $artikel->brand }}</h4>
    <h4>Model: {{ $artikel->model }}</h4>
    </h4>
    <p class="body">
        {!! $artikel->details !!}
    </p>
@endsection