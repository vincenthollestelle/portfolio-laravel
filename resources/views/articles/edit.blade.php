@extends('layout')
@section('content')

    <h2>Update an Article</h2>

    <form method="POST" action="/faq/{{ $article->id }}">
        @csrf
        @method('PUT')

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Body</label>
            <div class="control">
                <textarea class="textarea" name="body" id="body">{{ $article->body }}</textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>

    </form>
@endsection
