@extends('layout')
@section('content')

    <h2>Study Monitor</h2>

    <table>
        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        @foreach($grades as $grade)
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
        @endforeach
        {{--  <tr>--}}
        {{--    <td rowspan="7">3</td>--}}
        {{--    <td rowspan="2">Framework Project 1</td>--}}
        {{--    <td rowspan="2" style="background-color: rgb(255, 115, 0);">5</td>--}}
        {{--    <td>Portfolio (1)</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>Portfolio (2)</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>Framework Development 1</td>--}}
        {{--    <td style="background-color: rgb(255, 115, 0);">5</td>--}}
        {{--    <td>Case Study</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>Professional Working Environment</td>--}}
        {{--    <td style="background-color: rgb(255, 115, 0);">2,5</td>--}}
        {{--    <td>Assessment</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td rowspan="3">Professional Skills 2</td>--}}
        {{--    <td rowspan="3" style="background-color: rgb(255, 115, 0);">2,5</td>--}}
        {{--    <td>Portfolio</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>Written (1)</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>Written (2)</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td rowspan="5">4</td>--}}
        {{--    <td>Framework Project 2</td>--}}
        {{--    <td style="background-color: rgb(255, 115, 0);">5</td>--}}
        {{--    <td>Portfolio</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>Framework Development 2</td>--}}
        {{--    <td style="background-color: rgb(255, 115, 0);">5</td>--}}
        {{--    <td>Portfolio</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td rowspan="3">Professional Skills 3</td>--}}
        {{--    <td rowspan="3" style="background-color: rgb(255, 115, 0);">2,5</td>--}}
        {{--    <td>Portfolio</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>Written (1)</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>Written (2)</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td rowspan="2">Whenever</td>--}}
        {{--    <td>HZ Personality</td>--}}
        {{--    <td style="background-color: rgb(255, 115, 0);">2,5</td>--}}
        {{--    <td>Portfolio</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
        {{--  <tr>--}}
        {{--    <td>IT Personality</td>--}}
        {{--    <td style="background-color: rgb(255, 115, 0);">2,5</td>--}}
        {{--    <td>Portfolio</td>--}}
        {{--    <td></td>--}}
        {{--  </tr>--}}
    </table>

    <table>
        <tr>.</tr>
        <tr>
            <th rowspan="3" style="text-align: center;">Total EC:</th>
            <th rowspan="3" style="text-align: center;">0</th>
            <th rowspan="3" style="text-align: center;">45 EC needed for year 2</th>
            <th style="text-align:center; background-color: rgb(0, 255, 0);">Gehaald</th>
        </tr>
        <tr>
            <th style="text-align:center; background-color: rgb(255, 115, 0);">Nog te doen</th>
        </tr>
        <tr>
            <th style="text-align:center; background-color: rgb(255, 0, 0);">Niet gehaald</th>
    </table>

    <h2>Study Guide</h2>

    <p><a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">The HZ Course and
            Examination Regulations (CER)</a></p>
    <p>
        <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf">The
            Implementation Regulations (IR) of the HBO-ICT programme</a></p>
    <p><a href="https://learn.hz.nl/my/">This Learn environment</a></p>
    <p><a href="https://teams.microsoft.com/_#/school//?ctx=teamsGrid">The Teams environment of the study programme</a>
    </p>
    <p><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus">The page in MyHZ with your study progress</a>
    </p>
    <p><a href="https://github.com/vincenthollestelle/vincenthollestelle.github.io">The Github enivronment of the study
            programme</a></p>

@endsection

