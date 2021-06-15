@extends('layout')
@section('content')

    <h2>Update a dashboard row</h2>

    <form method="POST" action="/grades/{{ $grade->id }}">
        @csrf
        @method('PUT')

        <div class="box">
            <label class="label" for="blok">Quartile</label>
            <input class="input" type="text" name="blok" id="blok" value="{{ $grade->blok }}">

            <label class="label" for="course_name">Course</label>
            <input class="input" type="text" name="course_name" id="course_name" value="{{ $grade->course_name }}">

            <label class="label" for="ec">EC</label>
            <input class="input" type="text" name="ec" id="ec" value="{{ $grade->ec }}">

            <label class="label" for="test_name">Exam</label>
            <input class="input" type="text" name="test_name" id="test_name" value="{{ $grade->test_name }}">

            <label class="label" for="best_grade">Grade</label>
            <input class="input" type="text" name="best_grade" id="best_grade" value="{{ $grade->best_grade }}">
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>
        </div>

    </form>

    <form method="POST" action="/grades/{{$grade->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection

