@extends('layout')
@section('content')

    <h2>Add a dashboard row</h2>

    <form method="POST" action="/grades">
        @csrf
        <div class="box" style="width: 40%; padding: 20px;">
            <div class="field">
                <label class="label" for="blok">Quartile</label>
                <input class="input @error('blok') is-danger @enderror" type="text" name="blok" id="blok"
                       value="{{ old('blok') }}">

                @error('blok')
                <p class="error">{{ $errors->first('blok') }}</p>
                @enderror

                <label class="label" for="course_name">Course</label>
                <input class="input @error('course_name') is-danger @enderror" type="text" name="course_name"
                       id="course_name"
                       value="{{ old('course_name') }}">
                @error('course_name')
                <p class="error">{{ $errors->first('course_name') }}</p>
                @enderror

                <label class="label" for="ec">EC</label>
                <input class="input @error('ec') is-danger @enderror" type="text" name="ec" id="ec"
                       value="{{ old('ec') }}">
                @error('ec')
                <p class="error">{{ $errors->first('ec') }}</p>
                @enderror

                <label class="label" for="test_name">Exam</label>
                <input class="input @error('test_name') is-danger @enderror" type="text" name="test_name" id="test_name"
                       value="{{ old('test_name') }}">
                @error('test_name')
                <p class="error">{{ $errors->first('test_name') }}</p>
                @enderror

                <label class="label" for="best_grade">Grade</label>
                <input class="input @error('best_grade') is-danger @enderror" type="text" name="best_grade"
                       id="best_grade"
                       value="{{ old('best_grade') }}">
                @error('best_grade')
                <p class="error">{{ $errors->first('best_grade') }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </div>

    </form>
@endsection
