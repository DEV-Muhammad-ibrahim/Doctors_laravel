<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{




    //  public function register_patient(Request $request){

    //    $request->validate([
    //          'name' => 'required',
    //          'email' => 'required|email|unique:users',
    //          'password' => 'required|min:6'

    //    ]);
    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'role' => 'patient'
    //     ]);
    //     return redirect()->route('index');

    //  }
    //  public function register_doctor(Request $request){

    //     $request->validate([
    //             'name' => 'required',
    //             'email' => 'required|email|unique:users',
    //             'password' => 'required|min:6'

    //     ]);
    //      User::create([
    //           'name' => $request->name,
    //           'email' => $request->email,
    //           'password' => Hash::make($request->password),
    //           'role' => 'doctor'
    //      ]);
    //      return redirect()->route('index');

    //  }



    //   public function login_all (Request $request)
    //   {

    //     $credentials = request()->only('email', 'password');
    //     if (auth()->attempt($credentials)) {
    //         $role = auth()->user()->role;
    //         if ($role == 'doctor') {
    //             return redirect()->route('doctor_dashboard');
    //         } else if ($role == 'patient') {
    //             return redirect()->route('dashboard');
    //         }else if ($role == 'admin') {
    //             return redirect()->route('admin_dashboard');
    //         }
    //     } else {
    //         return redirect()->route('login')->with('error', 'Invalid Credentials');
    //     }
    //   }
    //   public function logout()
    //   {
    //       auth()->logout();
    //       return redirect()->route('index');
    //   }
}
