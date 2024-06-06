<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientAdmin extends Controller
{
    public function patients()
{
    $patients = Patient::all();
    return view('admin.patients',compact('patients'));
}
}
