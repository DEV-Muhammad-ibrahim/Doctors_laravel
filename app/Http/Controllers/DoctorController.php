<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function dashboard()
    {
        $doctors = Doctor::where('user_id', Auth::id())->first();
        $doctor_id = $doctors->id;
        $appointments = Appointment::where('doctor_id', $doctor_id)->get();
        return view('doctor-dashboard',['appointments'=>$appointments]);
    }
    // public function appointments()
    // {
    //     $doctors = Doctor::where('user_id', Auth::id())->first();
    //     if(!$doctors)
    //     {
    //         return redirect()->back()->with('error', 'No Appoinments Found');
    //     }
    //     $doctor_id = $doctors->id;
    //     $appointments = Appointment::where('doctor_id', $doctor_id)->get();


    //     return view('appointments',compact('appointments'));
    // }
    public function schedule()
    {
        return view('schedule-timings');
    }
    // public function chat()
    // {
    //     return view('chat-doctor');
    // }
    // public function profile()
    // {
    //     return view('doctor-profile-settings');
    // }
    // public function reviews()
    // {
    //     return view('reviews');
    // }
    // public function timing()
    // {
    //     return view('available-timings');
    // }
    // public function patients()
    // {
    //     $patients = Patient::where('doctor_id');
    //     return view('my-patients');
    // }
    // public function change_password()
    // {
    //     return view('doctor-change-password');
    // }
    public function logout()
    {
        return redirect()->route('login');
    }
    public function password_change(Request $request)
    {

        // dd($request->all());
        // die;
        $user = Auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);
        $oldPassword = $request->input('old_password');
        $newPassword = $request->input('new_password');

        if (Hash::check($oldPassword, $user->password)) {
            User::where('id', $user->id)->update(['password' => Hash::make($newPassword)]);

            return redirect()->back()->with('success', 'Password changed successfully.');
        }

        return redirect()->back()->with('error', 'Invalid Password.');
    }
    public function profile_create(Request $request)
    {

        // dd($request->all());die;
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'biography' => 'nullable|string',
            'clinic_name' => 'nullable|string|max:255',
            'clinic_address' => 'nullable|string|max:255',
            'address_line_1' => 'nullable|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:255',
            'pricing' => 'nullable|in:free,custom',
            'services' => 'nullable|string',
            'specialization' => 'required|in:urology,neurology,dermatology,dentist,orthopedic,cardiologist,pediatrician,psychiatrist,ophthalmologist,ent specialist,gynecologist,general physician',
            'degree' => 'nullable|string|max:255',
            'college' => 'nullable|string|max:255',
            'year_of_completion' => 'nullable|integer',
            'hospital_name' => 'nullable|string|max:255',
            'from' => 'nullable|date',
            'to' => 'nullable|date',
            'designation' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user(); // Get the active user
        $request->merge(['user_id' => $user->id]);
        Doctor::create($request->all());
        return redirect()->back()->with('success', 'Profile created successfully.');

    }
    // public function profile_view($id)
    // {

    //     $doctors = Doctor::where('id',$id)->first();
    //     return view('doctor-profile' , ['doctors'=>$doctors]);
    // }
    public function updateStatus(Request $request , $id)
{
    $appointment = Appointment::find($id);

    // Check the value of the 'status' input sent from the form
    $status = $request->status;

    // dd($status);
    // die;

    if ($status === 'Confirmed') {
        // Logic for when the 'Accept' button is clicked
        // $appointment->status = 'Confirmed';
        Appointment::where('id', $id)->update(['status' => 'Confirmed']);
        // $appointment->save();
        // Additional logic for accepting the appointment
    } elseif ($status === 'Canceled') {
        // Logic for when the 'Cancel' button is clicked
        Appointment::where('id', $id)->update(['status' => 'Canceled']);
        // Additional logic for canceling the appointment
    }

    // $appointment->save();

    return redirect()->back()->with('success', 'Appointment status updated successfully.');
}
}
