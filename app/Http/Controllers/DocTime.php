<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocTime extends Controller
{
    public function timing()
    {
        return view('available-timings');
    }
}
