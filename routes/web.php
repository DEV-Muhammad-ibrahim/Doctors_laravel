<?php

use Faker\Guesser\Name;
use App\Http\Controllers\DocD;
use App\Http\Controllers\PatCh;
use App\Http\Controllers\Patsu;
use App\Http\Controllers\DocApp;
use App\Http\Controllers\DocPat;
use App\Http\Controllers\DocRev;
use App\Http\Controllers\DocChat;
use App\Http\Controllers\DocProf;
use App\Http\Controllers\DocTime;
use App\Http\Controllers\DocChPas;
use App\Http\Controllers\LoginAll;
use App\Http\Controllers\LoginOut;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PatSearch;
use App\Http\Controllers\Patbooking;
use App\Http\Controllers\PatbookVer;
use App\Http\Controllers\DocProfView;
use App\Http\Controllers\DoctorAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatDashboard;
use App\Http\Controllers\PatientAdmin;
use App\Http\Controllers\DocProfCreate;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorRegister;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocUpdateStatus;
use App\Http\Controllers\PatientRegister;
use App\Http\Controllers\PatProfileeView;
use App\Http\Controllers\AppointmentAdmin;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [ViewController::class, 'login'])->name('login');
    Route::get('/register', [ViewController::class, 'register'])->name('register');
    Route::get('/register/doctor', [ViewController::class, 'doctor_register'])->name('registerDoctor');
    Route::get('/error', [ViewController::class, 'error'])->name('error-404');
    Route::get('/home', function () {
        return redirect()->route('index');
    });
});
Route::get('/', [ViewController::class, 'index'])->name('index');


Route::post('/login', [LoginAll::class, 'login_all'])->name('loginAll');
Route::post('/register/Patient', [PatientRegister::class, 'register_patient'])->name('register_patient');
Route::post('/register/Doctor', [DoctorRegister::class, 'register_doctor'])->name('doctor_register');

Route::group(['middleware' => 'auth'], function () {

    Route::middleware(['role:doctor'])->prefix('doctor')->group(function () {
        // Routes accessible only to users with the 'doctor' role
        Route::get('/dashboard', [DoctorController::class, 'dashboard'])->name('doctor_dashboard');
        Route::get('/appointments', [DocApp::class, 'appointments'])->name('appointments');
        Route::get('/chat', [DocChat::class, 'chat'])->name('doctor_chat');
        Route::get('/profile', [DocProf::class, 'profile'])->name('doctor_profile');
        Route::get('/reviews', [DocRev::class, 'reviews'])->name('reviews');
        Route::get('/available/timings', [DocTime::class, 'timing'])->name('available_timings');
        Route::get('/patients', [DocPat::class, 'patients'])->name('patients');
        Route::get('change-password', [DocChPas::class, 'change_password'])->name('change_password');
        Route::post('change-password', [DoctorController::class, 'password_change'])->name('password_change');
        Route::get('/logout', [LoginOut::class, 'logout'])->name('logout_doctor');
        Route::post('profile/create', [DocProfCreate::class, 'profile_create'])->name('profile_create_doctor');
        Route::put('/appointments/{id}/update-status', [DocUpdateStatus::class, 'updateStatus'])->name('appointments.updateStatus');
    });

    Route::get('profile/{id}/view', [DocProfView::class, 'profile_view'])->name('profile_view');

    Route::get('patient/profile/{id}/view', [PatProfileeView::class, 'patient_profile_view'])->name('patient_profile_view');

    Route::middleware(['role:patient'])->prefix('patient')->group(function () {
        // Routes accessible only to users with the 'patient' role
        Route::get('/profile', [PatientController::class, 'profile'])->name('profile');

        Route::get('/schedule', [DoctorController::class, 'schedule'])->name('schedule');
        Route::get('/dashboard', [PatDashboard::class, 'dashboard'])->name('dashboard');
        Route::get('/search', [PatSearch::class, 'search'])->name('search');
        Route::post('/search', [PatientController::class, 'search_doctor'])->name('search_doctor');
        Route::get('booking/{id}', [Patbooking::class, 'booking'])->name('booking');
        Route::post('booking/{id}/appointment', [PatbookVer::class, 'booking_verify'])->name('booking_appointment');
        Route::get('booking/success', [Patsu::class, 'success'])->name('success');
        Route::get('/chat', [PatCh::class, 'chat'])->name('chat');
        Route::post('/profile', [PatientController::class, 'profile_create'])->name('profile_create');
        Route::get('change-password', [PatientController::class, 'change_password'])->name('change_password_patient');
        Route::get('/logout', [LoginOut::class, 'logout'])->name('logout');
        Route::get('add/medical', [PatientController::class, 'add_medical'])->name('add_medical');
        Route::post('add/medical', [PatientController::class, 'medical_add'])->name('medical_add');
        Route::get('medical/view', [PatientController::class, 'medical_view'])->name('medical_view');
        Route::get('detail/view', [PatientController::class, 'detail_view'])->name('detail_view');
    });

    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        // Routes accessible only to users with the 'admin' role
        Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('admin_dashboard');
        Route::get('/doctors', [DoctorAdmin::class, 'doctors'])->name('admin_doctors');
        Route::get('/patients', [PatientAdmin::class, 'patients'])->name('admin_patients');
        Route::get('/appointments', [AppointmentAdmin::class, 'appointments'])->name('admin_appointments');
        Route::get('/logout', [LoginOut::class, 'logout'])->name('logout_admin');
    });
});
