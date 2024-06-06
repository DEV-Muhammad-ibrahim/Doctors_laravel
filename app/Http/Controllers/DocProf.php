<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocProf extends Controller
{
    public function profile()
    {
        return view('doctor-profile-settings');
    }
}
