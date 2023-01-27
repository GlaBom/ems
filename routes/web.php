<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EvacueeController;
use App\Http\Controllers\BarangayController;
use App\Http\Controllers\CalamityController;
use App\Http\Controllers\DashboardController;
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

Route::controller(evacueeController::class)->group(function () {
    Route::get('/manage/evacuee', 'view')->name('manage.evacuee');
    Route::get('/manage/add_evacuee', 'addEvacuee')->name('add.evacuee');
    Route::post('/manage/save_evacuee', 'saveEvacuee')->name('save.evacuee');
    Route::get('/manage/edit_evacuee/{id}', 'editEvacuee')->name('edit.evacuee');
    Route::post('/manage/update_evacuee', 'updateEvacuee')->name('update.evacuee');
    Route::get('/manage/delete_evacuee/{id}', 'deleteEvacuee')->name('delete.evacuee');
});

Route::controller(barangayController::class)->group(function () {
    Route::get('/barangay/directory', 'view')->name('barangay.directory');
    Route::get('/manage/add_barangay', 'addBarangay')->name('add.barangay');
    Route::post('/manage/save_barangay', 'saveBarangay')->name('save.barangay');
});

Route::controller(calamityController::class)->group(function () {
    Route::get('/manage/calamity', 'viewCalamity')->name('manage.calamity');
    
});

require __DIR__ . '/auth.php';
