@extends('layout')
@section('content')
    <table>
        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>{{$grade->blok}}</td>
            <td>{{$grade->course_name}}</td>
            <td @if ($grade->best_grade >= $grade->lowest_passing_grade)
                style="background-color: rgb(0, 255, 0);"
                @else style="background-color: rgb(255, 0, 0);"
                @endif>{{$grade->ec}}</td>
            <td>{{$grade->test_name}}</td>
            <td>{{$grade->best_grade}}</td>
        </tr>
@endsection
