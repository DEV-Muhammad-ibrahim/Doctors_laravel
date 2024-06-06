<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordChangeService {
    public function changePassword($user, $oldPassword, $newPassword) {
        if (Hash::check($oldPassword, $user->password)) {
            User::where('id', $user->id)->update(['password' => Hash::make($newPassword)]);
            return true;
        }
        return false;
    }
}



class DocPasCh extends Controller
{
    public function password_change(Request $request) {
        $user = Auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        $oldPassword = $request->input('old_password');
        $newPassword = $request->input('new_password');

        $passwordChangeService = new PasswordChangeService();
        $passwordChanged = $passwordChangeService->changePassword($user, $oldPassword, $newPassword);

        if ($passwordChanged) {
            return redirect()->back()->with('success', 'Password changed successfully.');
        }

        return redirect()->back()->with('error', 'Invalid Password.');
    }
}
