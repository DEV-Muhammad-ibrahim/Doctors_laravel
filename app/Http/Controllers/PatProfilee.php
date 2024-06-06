<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatProfilee extends Controller
{
    public function profile()
    {
        return view('profile-settings');
    }
}
