@extends('layout')
@section('content')

    <h2>Create an Article</h2>

    <form method="POST" action="/articles">
        @csrf
        <div class="box" style="width: 40%; padding: 20px;">
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{ old('title') }}">

                @error('title')
                <p class="error">{{ $errors->first('title') }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label class="label" for="body">Body</label>
            <div class="control">
                <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body" >{{ old('body') }}</textarea>

                @error('body')
                    <p class="error">{{ $errors->first('body') }}</p>
                @enderror
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>
        </div>

    </form>
@endsection
