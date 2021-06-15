@extends('layout')
@section('content')

        <div class="box" style="margin-top: 3em;">
            <a class="link" href="/faq/{{ $faq->id }}">{{ $faq->question }}</a></div>
        <h1>{{ $faq->answer }}</h1>

@endsection
