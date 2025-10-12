<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppointmentController;
use Illuminate\Http\Request;

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

// Default Laravel welcome page (optional)
Route::get('/', function () {
    return view('welcome');
});

// ✅ Your public website pages (Medicio template)
Route::get('/index', function () {
    return view('users.index');
})->name('index');

Route::get('/about', function () {
    return view('users.about');
})->name('about');

Route::get('/services', function () {
    return view('users.services');
})->name('services');

Route::get('/department', function () {
    return view('users.department');
})->name('department');

Route::get('/doctor', function () {
    return view('users.doctor');
})->name('doctor');

Route::get('/contact', function () {
    return view('users.contact');
})->name('contact');


Route::get('/appointment', function () {
    return view('users.appointment');
})->name('appointment');

Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
// ✅ Dashboard routes (protected by login)

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::id()) {
            if (Auth::user()->user_role == '1') {
                return view('admin.index');
            }
             elseif (Auth::user()->user_role == '2') {
                return view('doctor.index');
            }

             
             else {
                return view('users.index');
            }
        } 
        else {
            return redirect()->back();
        }
    })->name('dashboard');
});


Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // 👇 Redirect to Medicio homepage
    return redirect()->route('index');
})->name('logout');


Route::get('/add doctor', function () {
    return view('admin.insertdoc');
})->name('add doctor');

use App\Http\Controllers\DoctorController;

Route::get('/doctor/add', [doctorController::class, 'create'])->name('doctor.add');
Route::post('/doctor/store', [doctorController::class, 'store'])->name('doctor.store');
