<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatProfileeView extends Controller
{
    public function patient_profile_view($id)
    {

       $patients = Patient::where('user_id', $id)->first();
        return view('patients-profile',['patient' => $patients]);
    }
}
