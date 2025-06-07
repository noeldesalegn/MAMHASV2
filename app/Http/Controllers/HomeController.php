<?php

namespace App\Http\Controllers;

use App\Models\appointment_detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = auth()->user();
//        if (Auth::user()->user_account_type == 'patient') {
//            return view()->route('dashboard')->with('error', 'You do not have permission to access this page.');
//        }
        return view('index',['user'=>$user]);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function docSchedule(){
        $physician = Auth::user();
        if (Auth::user()->user_account_type !== 'physician') {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to access this page.');
        }
        $appointments = $physician->appointments()->orderBy('appointment_date')
            ->orderBy('appointment_time')->paginate(5);
        return view('schedule/docSchedule',['appointments'=>$appointments]);
    }
    public function docSchedulefell(){
        $users= User::all();
        return view('schedule/docSchedulefell',['users'=>$users]);
    }
    public function AppointmentCreate(User $patient){
        $physician = auth()->user();
        if ($physician->user_account_type !== 'physician') {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to create appointments.');
        }
        return view('schedule.AppointmentCreate', compact('patient','physician'));
    }
    public function docScheduleFellIn(Request $request)
    {
        $data = $request->validate([
            'patient_id'               => 'required|exists:users,id',
            'physician_id'             => 'required|exists:users,id',
            'Mother_Detail'      => 'nullable|string|max:255',
            'user_account_name'  => 'required|string|max:100',
            'Date'               => 'required|date',
            'Time'               => 'required',
            'status'             => 'required|string|max:50',
        ]);

        appointment_detail::create([
            'patient_id'        => $data['patient_id'],
            'physician_id'      => $data['physician_id'],
            'mother_detail'     => $data['Mother_Detail'],
            'user_account_name' => $data['user_account_name'],
            'appointment_date'  => $data['Date'],
            'appointment_time'  => $data['Time'],
            'set_by'            => auth()->user()->FName . ' ' . auth()->user()->LName,
            'status'            => $data['status'],
        ]);

        return redirect()
            ->route('schedule.docSchedule')
            ->with('success', 'Appointment saved.');
    }

    public function AppointmentEdit(appointment_detail $appointment): View
    {
        Gate::define('update-appointment', function ($user, $appointment) {
            return $user->id === $appointment->physician_id;
        });
        $physician = User::where('id', $appointment->physician_id)->first();
        $patient = User::find($appointment->patient_id); // assuming patient is stored by ID in appointment_detail

        Gate::authorize('update-appointment', $appointment);
        return view('schedule.AppointmentEdit', compact('appointment', 'physician', 'patient'));
    }

    public function AppointmentUpdate(Request $request, appointment_detail $appointment)
    {
        $data = $request->validate([
            'physician_id' => 'required|exists:users,id',
            'Mother_Detail' => 'nullable|string|max:255',
            'user_account_name' => 'required|string|max:100',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'status' => 'required|string|max:50',
        ]);

        $appointment->update([
            'physician_id' => $data['physician_id'],
            'mother_detail' => $data['Mother_Detail'],
            'user_account_name' => $data['user_account_name'],
            'appointment_date' => $data['appointment_date'],
            'appointment_time' => $data['appointment_time'],
            'set_by' => auth()->user()->FName . ' ' . auth()->user()->LName,
            'status' => $data['status'],
        ]);

        return redirect()
            ->route('schedule.docSchedule')
            ->with('success', 'Appointment updated.');
    }
    public function AppointmentDelete(appointment_detail $appointment)
    {
        $appointment->delete();

        return redirect()
            ->route('schedule.docSchedule')
            ->with('success', 'Appointment deleted successfully.');
    }
    public function AppointmentShow(User $patient)
    {
        // Optionally check if the authenticated user matches the requested patient
        if (auth()->user()->id !== $patient->id) {
            abort(403, 'Unauthorized access to this appointment.');
        }

        // Load appointment details (adjust based on your relationship structure)
        $appointments = $patient->appointmentsAsPatient()->latest()->get();

        return view('schedule.show', [
            'patient' => $patient,
            'appointments' => $appointments
        ]);
    }

}
