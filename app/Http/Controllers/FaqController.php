<?php

namespace App\Http\Controllers;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index() {
        $faqs = Faq::latest()->get();
        return view('faq.index', ['faqs' => $faqs]);
    }
    public function show(Faq $faq) {
        return view('faq.show', ['faq' => $faq]);
    }
    public function create() {
        return view('faq.create');
    }
    public function store() {
        Faq::create($this->validateArticle());

        return redirect('/faq');
    }
    public function edit(Faq $faq) {
        return view('faq.edit', compact('faq'));
    }
    public function update(Faq $faq) {
        $faq->update($this->validateArticle());

        return redirect('/faq/' . $faq->id);
    }

    public function destroy($id) {
        $faq = Faq::find($id);
        $faq->delete();

        return redirect('/faq/');
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
