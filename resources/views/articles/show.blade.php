@extends('layout')
@section('content')

        <div class="box" style="margin-top: 3em;">
            <a class="link" href="/articles/{{ $article->id }}">{{ $article->title }}</a></div>
        <h1>{{ $article->body }}</h1>
@endsection
