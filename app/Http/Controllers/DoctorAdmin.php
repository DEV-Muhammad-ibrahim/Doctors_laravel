<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorAdmin extends Controller
{
    public function doctors()
{
    $doctors = Doctor::all();
    return view('admin.doctors',compact('doctors'));
}
}
