<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $viewName = 'index';
        $doctors = Doctor::all();
        if (view()->exists($viewName)) {
            return view($viewName, ['doctors' => $doctors]);
        } else {
            return redirect()->route('error-404');
        }
    }
    public function login()
    {
        $viewName = 'login';

        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return redirect()->route('error-404');
        }

    }
    public function register()
    {
        $viewName = 'register';

        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return redirect()->route('error-404');
        }
    }
    public function doctor_register()
    {

        $viewName = 'doctor-register';

        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            return redirect()->route('error-404');
        }

    }
    public function error(){
        return view('admin.error-500');
    }
}
