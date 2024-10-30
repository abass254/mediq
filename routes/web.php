<?php

use Illuminate\Support\Facades\Route;




Route::get('/doc/register', function () {
    return view('doc-reg');
});

// Route::get('/doc/login', function () {
//     return view('doc-login');
// });


Route::get('login', [\App\Http\Controllers\AuthController::class, 'loginPage'])->name('loginPage');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    
    Route::get('/my-profile', [\App\Http\Controllers\DoctorController::class, 'doctorProfile'])->name('doctors-profile');
    
    // Route::middleware(['auth', 'role:doctor,manager,secretary'])->group(function () {
        
    // });

    Route::middleware(['auth', 'role:secretary'])->group(function () {
        Route::get('/register-facility', [\App\Http\Controllers\DoctorController::class, 'registerDoctor'])->name('register-doctor');
        Route::post('/save-facility', [\App\Http\Controllers\DoctorController::class, 'saveFacility'])->name('facility-register');
        Route::get('/facilities', [\App\Http\Controllers\DoctorController::class, 'viewFacilities'])->name('facilities');
    });
});


