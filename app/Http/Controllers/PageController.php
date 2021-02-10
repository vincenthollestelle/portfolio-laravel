<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Article;
use App\Models\Grade;

class PageController
{
    public function show($value) {
        if ($value == 'faq') {
            return view('faq', [
                'faqs' => Faq::all()
            ]);
        }
        if ($value == 'articles') {
            return view('article', [
                'articles' => Article::all()
            ]);
        }
        if ($value == 'dashboard') {
            return view('dashboard', [
                'grades' => Grade::all()
            ]);
        }

        return view($value);
    }
}
