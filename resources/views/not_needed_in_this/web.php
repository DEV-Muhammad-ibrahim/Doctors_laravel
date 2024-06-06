<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
    Route::get('/home',function(){
        return redirect()->route('index');
    });
});
Route::get('/', [ViewController::class, 'index'])->name('index');


Route::post('/login', [AuthController::class, 'login_all'])->name('loginAll');
Route::post('/register/Patient', [AuthController::class, 'register_patient'])->name('register_patient');
Route::post('/register/Doctor', [AuthController::class, 'register_doctor'])->name('doctor_register');

Route::group(['middleware' => 'auth'], function () {

    Route::middleware(['role:doctor'])->prefix('doctor')->group(function () {
        // Routes accessible only to users with the 'doctor' role
        Route::get('/dashboard', [DoctorController::class, 'dashboard'])->name('doctor_dashboard');
        Route::get('/appointments', [DoctorController::class, 'appointments'])->name('appointments');
        Route::get('/chat', [DoctorController::class, 'chat'])->name('doctor_chat');
        Route::get('/profile', [DoctorController::class, 'profile'])->name('doctor_profile');
    Route::get('/reviews', [DoctorController::class, 'reviews'])->name('reviews');
    Route::get('/available/timings', [DoctorController::class, 'timing'])->name('available_timings');
    Route::get('/patients', [DoctorController::class, 'patients'])->name('patients');
    Route::get('change-password', [DoctorController::class, 'change_password'])->name('change_password');
    Route::post('change-password', [DoctorController::class, 'password_change'])->name('password_change');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout_doctor');
    Route::post('profile/create',[DoctorController::class,'profile_create'])->name('profile_create_doctor');
    Route::put('/appointments/{id}/update-status', [DoctorController::class,'updateStatus'])->name('appointments.updateStatus');

});

    Route::get('profile/{id}/view',[DoctorController::class,'profile_view'])->name('profile_view');


    Route::get('/profile', [PatientController::class, 'profile'])->name('profile');
Route::middleware(['role:patient'])->prefix('patient')->group(function () {
    // Routes accessible only to users with the 'patient' role

    Route::get('/schedule', [DoctorController::class, 'schedule'])->name('schedule');
    Route::get('/dashboard', [PatientController::class, 'dashboard'])->name('dashboard');
    Route::get('/search', [PatientController::class, 'search'])->name('search');
    Route::post('/search',[PatientController::class,'search_doctor'])->name('search_doctor');
    Route::get('booking/{id}', [PatientController::class, 'booking'])->name('booking');
    Route::post('booking/{id}/appointment', [PatientController::class, 'booking_verify'])->name('booking_appointment');
    Route::get('booking/success', [PatientController::class, 'success'])->name('success');
    Route::get('/chat', [PatientController::class, 'chat'])->name('chat');
    Route::post('/profile', [PatientController::class, 'profile_create'])->name('profile_create');
    Route::get('change-password',[PatientController::class, 'change_password'])->name('change_password_patient');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('add/medical',[PatientController::class,'add_medical'])->name('add_medical');
    Route::post('add/medical',[PatientController::class,'medical_add'])->name('medical_add');
    Route::get('medical/view',[PatientController::class,'medical_view'])->name('medical_view');
    Route::get('detail/view',[PatientController::class,'detail_view'])->name('detail_view');
    });

    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        // Routes accessible only to users with the 'admin' role


    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/doctors',[AdminController::class,'doctors'])->name('doctors');
    Route::get('/patients',[AdminController::class,'patients'])->name('patients');
    Route::get('/appointments',[AdminController::class,'appointments'])->name('appointments');

   });






});
