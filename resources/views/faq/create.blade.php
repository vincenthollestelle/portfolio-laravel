@extends('layout')
@section('content')

    <h2>Create a FAQ</h2>

    <form method="POST" action="/faq">
        @csrf
        <div class="box" style="width: 40%; padding: 20px;">
        <div class="field">
            <label class="label" for="question">Question</label>
            <div class="control">
                <input class="input @error('question') is-danger @enderror" type="text" name="question" id="question" value="{{ old('question') }}">

                @error('question')
                <p class="error">{{ $errors->first('question') }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label class="label" for="answer">Answer</label>
            <div class="control">
                <textarea class="textarea @error('answer') is-danger @enderror" name="answer" id="answer" >{{ old('answer') }}</textarea>

                @error('answer')
                    <p class="error">{{ $errors->first('answer') }}</p>
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
