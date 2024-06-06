<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Patsu extends Controller
{
    public function success()
    {
        return view('booking-success');
    }
}
