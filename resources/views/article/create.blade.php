@extends('app')

@section('content')
    <h1>Een nieuw artikel</h1>

    {!! Form::open(['url' => 'articles']) !!}
    @include('article.form')
    {!! Form::close() !!}

@endsection