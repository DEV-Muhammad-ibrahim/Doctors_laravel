<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatDashboard extends Controller
{
    public function dashboard()
    {
        $appointments = Appointment::where('patient_id', Auth::id())->get();
        return view('patient-dashboard', compact('appointments'));
    }
}
