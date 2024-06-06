<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentUpdater {
    public function updateStatus($id, $status) {
        $statusValues = ['Confirmed', 'Canceled','pending'];
        if (in_array($status, $statusValues)) {
            Appointment::where('id', $id)->update(['status' => $status]);
            return true;
        }
        return false;
    }
}
class DocUpdateStatus extends Controller
{
    public function updateStatus(Request $request, $id) {
        $status = $request->status;
        $appointmentUpdater = new AppointmentUpdater();

        if ($appointmentUpdater->updateStatus($id, $status)) {
            return redirect()->back()->with('success', 'Appointment status updated successfully.');
        }

        return redirect()->back()->with('error', 'Invalid status provided.');
    }
}
