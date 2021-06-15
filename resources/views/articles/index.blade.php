@extends('layout')
@section('content')

    @foreach ($articles as $article)
        <div class="box" style="margin-top: 3em;">
            <a class="link" href="/articles/{{ $article->id }}">{{ $article->title }}</a></div>
        <h1>{{ $article->body }}</h1>
    @endforeach

@endsection
