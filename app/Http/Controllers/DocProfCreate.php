<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileValidator {
    public function validateProfile(array $data) {
        return Validator::make($data, [
            // Validation rules remain the same
        ]);
    }
}

class ProfileCreator {
    public function createProfile(array $data) {
        $user = Auth::user(); // Get the active user
        $data['user_id'] = $user->id;
        Doctor::create($data);
    }
}
class DocProfCreate extends Controller
{
    public function profile_create(Request $request) {
        $profileValidator = new ProfileValidator();
        $validator = $profileValidator->validateProfile($request->all());

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $profileCreator = new ProfileCreator();
        $profileCreator->createProfile($request->all());

        return redirect()->back()->with('success', 'Profile created successfully.');
    }
}
