<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DocProfView extends Controller
{
    public function profile_view($id)
    {

        $doctors = Doctor::where('id',$id)->first();
        return view('doctor-profile' , ['doctors'=>$doctors]);
    }
}
