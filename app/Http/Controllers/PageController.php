<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class PageController
{
    public function show($value) {
        if ($value == "faq") {
            return view('faq', [
                'faqs' => Faq::all()
            ]);
        }
        return view($value);
    }
}
