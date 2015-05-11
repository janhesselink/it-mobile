@extends('app')

@section('content')
    <h1>{{ $article->name }}</h1>

    <h4>Prijs: €{{ $article->price }}</h4>
    <h4>Merk: {{ $article->brand }}</h4>
    <h4>Model: {{ $article->model }}</h4>

    <h4>Beschrijving:</h4>
    <p class="body">
        {!! $article->details !!}
    </p>
@endsection