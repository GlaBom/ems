<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EvacueeController;
use App\Http\Controllers\BarangayController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ECenterController;
use App\Http\Controllers\ReportsController;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Login
Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(userController::class)->prefix('user')->group(function () {

    Route::get('/', 'index')->name('user.index');
    Route::post('/store', 'store')->name('user.store');

    Route::put('/update/{id}', 'update')->name('user.update');
    Route::delete('/delete/{id}', 'delete')->name('user.delete');

    Route::get('/logout', 'destroy')->name('admin.logout');
    Route::get('/profile', 'viewProfile')->name('user.profile');
    Route::get('/edit/profile', 'editProfile')->name('edit.profile');
    Route::post('/store/profile', 'storeProfile')->name('store.profile');

    Route::get('/change/password', 'changePassword')->name('change.password');
    Route::post('/update/password', 'updatePassword')->name('update.password');
});


//Evacuee
Route::prefix('evacuee')->group(function () {
    Route::resource('evacuee', EvacueeController::class);
});

//Emergency
Route::prefix('emergency')->group(function () {
    Route::resource('emergency', EmergencyController::class);
});

//Barangay
Route::prefix('barangay')->group(function () {
    Route::resource('barangay', BarangayController::class);
});

//Evacuation Center
Route::prefix('ecenter')->group(function () {
    Route::resource('ecenter', EcenterController::class);
});

//Reports and Statistics
Route::controller(ReportsController::class)->prefix('reports')->group(function () {
    Route::get('/barangay', 'barangay');
    Route::get('/gender', 'gender');
});

require __DIR__ . '/auth.php';
