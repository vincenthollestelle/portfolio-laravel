@extends('layout')
@section('content')

@foreach ($articles as $article)
    <div class="box" style="margin-top: 3em;">{{ $article->title }}</div>
    <h1>{{ $article->body }}</h1>
@endforeach

@endsection
