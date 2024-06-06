<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class Patbooking extends Controller
{
    public function booking(Request $request, $id)
{
    $doctor = Doctor::where('id', $id)->first();

    if (!$doctor) {
        // Handle the case when no doctor record is found
        return response()->json(['error' => 'Doctor not found'], 404);
    }

    $doctor_name = $doctor->first_name . ' ' . $doctor->last_name;
    $doctor_state = $doctor->state;
    $doctor_id = $doctor->id;

    return view('booking', [
        'doctor_id' => $id,
        'doctor_name' => $doctor_name,
        'doctor_state' => $doctor_state,
        'doctor_id' => $doctor_id
    ]);
}
}
