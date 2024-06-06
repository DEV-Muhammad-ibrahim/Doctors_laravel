<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocRev extends Controller
{
    public function reviews()
    {
        return view('reviews');
    }
}
