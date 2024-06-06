<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocChat extends Controller
{
    public function chat()
    {
        return view('chat-doctor');
    }
}
