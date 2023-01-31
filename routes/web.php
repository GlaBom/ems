<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EvacueeController;
use App\Http\Controllers\BarangayController;
use App\Http\Controllers\CalamityController;
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

Route::controller(adminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

//Evacuee

Route::controller(evacueeController::class)->prefix('evacuee')->group(function () {
    Route::get('/', 'index')->name('evacuee.index');
    Route::get('/add', 'add')->name('evacuee.add');
    Route::get('/edit/{id}', 'edit')->name('evacuee.edit');
    Route::post('/store', 'store')->name('evacuee.store');
    Route::post('/update', 'update')->name('evacuee.update');
    Route::delete('/destroy/{id}', 'destroy')->name('evacuee.destroy');
});

//Calamity
Route::controller(CalamityController::class)->prefix('calamity')->group(function () {
    Route::get('/', 'index')->name('calamity.index');
    Route::get('/add', 'add')->name('calamity.add');
    Route::post('/store', 'store')->name('calamity.store');
    Route::get('/edit/{id}', 'edit')->name('calamity.edit');
    Route::post('/update', 'update')->name('calamity.update');
    Route::get('/delete/{id}', 'delete')->name('calamity.delete');
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