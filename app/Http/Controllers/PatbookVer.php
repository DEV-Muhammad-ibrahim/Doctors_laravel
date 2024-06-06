<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentCreator {
    public function createAppointment($validatedData, $doctor_id, $user_id) {
        $doctor = Doctor::find($doctor_id);
        $patient = Patient::where('user_id', $user_id)->first();

        if (!$patient) {
            return redirect()->back()->with('error', 'Please create your profile first');
        }

        $appointmentData = [
            'doctor_id' => $doctor_id,
            'doctor_name' => $doctor->first_name . ' ' . $doctor->last_name,
            'patient_id' => $user_id,
            'patient_name' => $patient->first_name . ' ' . $patient->last_name,
            'date' => $validatedData['date'],
            'time' => $validatedData['time'],
            'purpose' => $validatedData['purpose'],
        ];

        $appointment = Appointment::create($appointmentData);

        return $appointment;
    }
}

class PatbookVer extends Controller {
    public function booking_verify(Request $request) {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'time' => 'required|string|max:255',
            'purpose' => 'required|string|max:255',
        ]);

        $user_id = $request->user_id;
        $doctor_id = $request->doctor_id;

        $appointmentCreator = new AppointmentCreator();
        $appointment = $appointmentCreator->createAppointment($validatedData, $doctor_id, $user_id);

        if ($appointment) {
            return redirect()->back()->with('success', 'Appointment booked successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}

