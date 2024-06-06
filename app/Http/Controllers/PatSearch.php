<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class PatSearch extends Controller
{
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
}
