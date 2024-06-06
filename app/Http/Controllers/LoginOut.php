<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginOut extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }
}
