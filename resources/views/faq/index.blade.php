@extends('layout')
@section('content')

<form action="/faq/create">
<button type="submit" class="button is-link">Create a FAQ</button>
</form>

    @foreach ($faqs as $faq)
        <div class="box" style="margin-top: 3em;">
            <a class="link" href="/faq/{{ $faq->id }}">{{ $faq->question }}</a></div>
        <h1>{{ $faq->answer }}</h1>
    @endforeach

@endsection
