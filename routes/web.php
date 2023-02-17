<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EvacueeController;
use App\Http\Controllers\BarangayController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ECenterController;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

// Login
Route::get('/', function () {
    return view('auth.login');
});

// Dashboard
// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin All Route

Route::controller(userController::class)->prefix('user')->group(function () {
    Route::get('/', 'index')->name('user.index');
    Route::get('/logout', 'destroy')->name('admin.logout');
    Route::get('/profile', 'viewProfile')->name('user.profile');
    Route::get('/edit/profile', 'editProfile')->name('edit.profile');
    Route::post('/store/profile', 'storeProfile')->name('store.profile');

    Route::get('/change/password', 'changePassword')->name('change.password');
    Route::post('/update/password', 'updatePassword')->name('update.password');
});

//Evacuee

Route::controller(evacueeController::class)->prefix('evacuee')->group(function () {
    Route::get('/', 'index')->name('evacuee.index');
    Route::get('/add', 'add')->name('evacuee.add');
    Route::get('/edit/{id}', 'edit')->name('evacuee.edit');
    Route::post('/store', 'store')->name('evacuee.store');
    Route::post('/update', 'update')->name('evacuee.update');
    Route::get('/destroy/{id}', 'destroy')->name('evacuee.destroy');
});

//emergency
Route::controller(EmergencyController::class)->prefix('emergency')->group(function () {
    Route::get('/', 'index')->name('emergency.index');
    Route::get('/add', 'add')->name('emergency.add');
    Route::post('/store', 'store')->name('emergency.store');
    Route::get('/edit/{id}', 'edit')->name('emergency.edit');
    Route::post('/update', 'update')->name('emergency.update');
    Route::get('/delete/{id}', 'delete')->name('emergency.delete');
});

//Barangay

Route::controller(BarangayController::class)->prefix('barangay')->group(function () {
    Route::get('/', 'index')->name('barangay.index');
    Route::get('/add', 'add')->name('barangay.add');
    Route::post('/store', 'store')->name('barangay.store');
    Route::get('/edit/{id}', 'edit')->name('barangay.edit');
    Route::post('/update', 'update')->name('barangay.update');
    Route::get('/delete/{id}', 'delete')->name('barangay.delete');
});

//Evacuation Center
Route::controller(EcenterController::class)->prefix('ecenter')->group(function () {
    Route::get('/', 'index')->name('ecenter.index');
    Route::get('/add', 'add')->name('ecenter.add');
    Route::post('/store', 'store')->name('ecenter.store');
    Route::get('/edit/{id}', 'edit')->name('ecenter.edit');
    Route::post('/update', 'update')->name('ecenter.update');
    Route::get('/delete/{id}', 'delete')->name('ecenter.delete');
});

require __DIR__ . '/auth.php';