<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocD extends Controller
{
    public function dashboard()
    {
        $doctors = Doctor::where('user_id', Auth::id())->first();
        $doctor_id = $doctors->id;
        $appointments = Appointment::where('doctor_id', $doctor_id)->get();
        return view('doctor-dashboard',['appointments'=>$appointments]);
    }
}
