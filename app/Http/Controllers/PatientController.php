<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function dashboard()
    {
        $appointments = Appointment::where('patient_id', Auth::id())->get();
        return view('patient-dashboard', compact('appointments'));
    }
    public function search(Request $request)
    {
        // dd($request->all());
        $gender = $request->gender;
        $location = $request->location;
        $speciality = $request->specialization;
        $doctors = Doctor::where('specialization', 'LIKE', '%' . $speciality . '%')->where('state', 'LIKE', '%' . $location . '%')->where('gender', 'LIKE', '%' . $gender . '%')->get();
        // $doctors = Doctor::all();
        return view('search',compact('doctors'));
    }
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
    public function booking_verify(Request $request)
    {
        // dd($request->all());
        // die;
        $validatedData = $request->validate([
            'date' => 'required|date',
            'time' => 'required|string|max:255',
            'purpose' => 'required|string|max:255',
        ]);
        $user_id = $request->user_id;
        $doctor_id = $request->doctor_id;
        $doctor = Doctor::find($doctor_id);
        $doctor_name = $doctor->first_name . ' ' . $doctor->last_name;
        $patient = Patient::where('user_id', $user_id)->first();
        if(!$patient){
            return redirect()->back()->with('error', 'Please create your profile first');
        }
        $patient_id = $user_id;
        $patient_name = $patient->first_name . ' ' . $patient->last_name;
        $date =$validatedData['date'] ;
        $time = $validatedData['time'] ;
        $validatedData['doctor_id'] = $doctor_id;
        $validatedData['doctor_name'] = $doctor_name;
        $validatedData['patient_id'] = $patient_id;
        $validatedData['patient_name'] = $patient_name;
        $appointment = Appointment::create($validatedData);
        if ($appointment) {
            return redirect()->back()->with('success', 'Appoinment booked successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
//     public function booking_verify(Request $request,$id)
// {
//     $validatedData = $request->validate([
//         'date' => 'required|date',
//         'time' => 'required|string|max:255',
//         'purpose' => 'required|string|max:255',
//     ]);

//     $user_id = $request->user_id;
//     $doctor_id = $request->doctor_id;

//     $doctor = Doctor::find($doctor_id);
//     if (!$doctor) {
//         return redirect()->back()->with('error', 'Doctor not found');
//     }
//     $doctor_name = $doctor->first_name . ' ' . $doctor->last_name;

//     $patient = Patient::where('user_id', $user_id)->first();
//     if (!$patient) {
//         return redirect()->back()->with('error', 'Patient not found');
//     }
//     $patient_id = $user_id;
//     $patient_name = $patient->first_name . ' ' . $patient->last_name;

//     $date = $validatedData['date'];
//     $time = $validatedData['time'];

//     $validatedData['doctor_id'] = $doctor_id;
//     $validatedData['doctor_name'] = $doctor_name;
//     $validatedData['patient_id'] = $patient_id;
//     $validatedData['patient_name'] = $patient_name;

//     $appointment = Appointment::create($validatedData);

//     if ($appointment) {
//         return redirect()->back()->with('success', 'Appointment booked successfully');
//     } else {
//         return redirect()->back()->with('error', 'Something went wrong');
//     }
// }

    public function success()
    {
        return view('booking-success');
    }
    public function chat()
    {
        return view('chat');
    }
    public function profile()
    {
        return view('profile-settings');
    }
    public function change_password()
    {
        return view('change-password');
    }
    public function search_doctor(Request $request)
    {

    }
    public function add_medical()
    {
        return view('medical-records');
    }
    public function medical_add(Request $request)
    {

    }
    public function medical_view()
    {
        return view('medical-details');
    }
    public function profile_create(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'blood_group' => ['required', 'string', 'max:255', Rule::in(['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'])],
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'country' => 'required|string|max:255',
        ]);

         $patient_id = Patient::where('user_id', Auth::id())->first();
         if($patient_id){
            return redirect()->back()->with('error', 'Profile already created');
         }
        $validatedData['user_id'] = Auth::id();
        $patient = Patient::create($validatedData);
        if ($patient) {
            return redirect()->back()->with('success', 'Profile Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function patient_profile_view($id)
     {

        $patients = Patient::where('user_id', $id)->first();
         return view('patients-profile',['patient' => $patients]);
     }

}
