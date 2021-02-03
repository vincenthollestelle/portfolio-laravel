<?php

namespace App\Http\Controllers;

class PageController
{
    public function show($value) {
        return view($value);
    }
}
