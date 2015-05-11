@extends('app')

@section('content')
    <h1>Artikelen</h1>

    @foreach($articles as $article)
        <div>
            <h2>
                <a href="{{ action('ArticleController@show', [$article->id]) }}">{{ $article->name }}</a>
            </h2>
            <h4>{{ $article->price }}</h4>
        </div>
    @endforeach
@endsection