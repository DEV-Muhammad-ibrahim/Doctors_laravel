<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentAdmin extends Controller
{
    public function appointments()
{
    $appointments = Appointment::all();
    return view('admin.appointment',compact('appointments'));
}
}
