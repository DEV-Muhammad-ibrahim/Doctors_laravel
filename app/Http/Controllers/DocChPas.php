<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocChPas extends Controller
{
    public function change_password()
    {
        return view('doctor-change-password');
    }
}
