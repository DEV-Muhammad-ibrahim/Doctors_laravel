<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class DocPat extends Controller
{
    public function patients()
    {
        $patients = Patient::where('doctor_id');
        return view('my-patients');
    }
}
