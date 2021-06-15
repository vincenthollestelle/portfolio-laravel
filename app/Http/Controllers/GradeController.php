<?php

namespace App\Http\Controllers;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index() {
        $grades = Grade::first()->get();
        return view('grades.index', ['grades' => $grades]);
    }
    public function show(Grade $grade) {
        return view('grades.show', ['grade' => $grade]);
    }
    public function create() {
        return view('grades.create');
    }
    public function store() {
        Grade::create($this->validateArticle());

        return redirect('/grades');
    }
    public function edit(Grade $grade) {
        return view('grades.edit', compact('grade'));
    }
    public function update(Grade $grade) {
        $grade->update($this->validateArticle());

        return redirect('/grades/' . $grade->id);
    }

    public function destroy(Grade $grade) {
        $grade->delete();

        return redirect('/grades/');
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'blok' => 'required|numeric|between:0,4',
            'course_name' => 'required',
            'test_name' => 'required',
            'ec' => 'required',
            'best_grade' => 'required|numeric|between:0,10'
        ]);
    }
}
