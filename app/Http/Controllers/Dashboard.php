<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function dashboard()
    {
        return view('admin.index_admin');
    }
}
