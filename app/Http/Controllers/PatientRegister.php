<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PatientRegister extends Controller
{
    public function register_patient(Request $request){

        $request->validate([
              'name' => 'required',
              'email' => 'required|email|unique:users',
              'password' => 'required|min:6'

        ]);
         User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password),
             'role' => 'patient'
         ]);
         return redirect()->route('index');

      }
}
