<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocApp extends Controller
{
    public function appointments()
    {
        $doctors = Doctor::where('user_id', Auth::id())->first();
        if(!$doctors)
        {
            return redirect()->back()->with('error', 'No Appoinments Found');
        }
        $doctor_id = $doctors->id;
        $appointments = Appointment::where('doctor_id', $doctor_id)->get();


        return view('appointments',compact('appointments'));
    }
}
