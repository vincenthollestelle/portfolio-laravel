@extends('layout')
@section('content')

<form action="/faq">
<button type="submit" class="button is-link">Go back!</button>
</form>

        <div class="box" style="margin-top: 3em;">
            <a class="link" href="/faq/{{ $faq->id }}">{{ $faq->question }}</a></div>
        <h1>{{ $faq->answer }}</h1>

<form action="/faq/{{$faq->id }}/edit">
<button type="submit" class="button is-link">Edit</button>
</form>
@endsection
