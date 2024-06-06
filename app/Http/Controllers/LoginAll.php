<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface RedirectInterface
{
    public function redirectToDashboard();
}

class DoctorRedirect implements RedirectInterface
{
    public function redirectToDashboard()
    {
        return redirect()->route('doctor_dashboard');
    }
}

class PatientRedirect implements RedirectInterface
{
    public function redirectToDashboard()
    {
        return redirect()->route('dashboard');
    }
}

class AdminRedirect implements RedirectInterface
{
    public function redirectToDashboard()
    {
        return redirect()->route('admin_dashboard');
    }
}

class DefaultRedirect implements RedirectInterface
{
    public function redirectToDashboard()
    {
        return redirect()->route('default_dashboard');
    }
}
class LoginAll extends Controller
{
    protected $redirectMap = [
        'doctor' => DoctorRedirect::class,
        'patient' => PatientRedirect::class,
        'admin' => AdminRedirect::class,
    ];

    public function login_all(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $role = auth()->user()->role;

            $redirectClass = $this->getRedirectClass($role);
            return app()->make($redirectClass)->redirectToDashboard();
        } else {
            return redirect()->route('login')->with('error', 'Invalid Credentials');
        }
    }

    protected function getRedirectClass($role)
    {
        return $this->redirectMap[$role] ?? DefaultRedirect::class;
    }
}
