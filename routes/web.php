<?php

use App\Http\Controllers\Settings\Profile\InboxController;
use App\Http\Controllers\Settings\Profile\InvoiceController;
use App\Http\Controllers\Settings\Profile\SecurityController;
use App\Http\Controllers\Settings\Profile\SettingsController;
use App\Http\Controllers\Settings\UsersController;
use App\Http\Controllers\Settings\RolesController;
use App\Http\Controllers\Settings\PermissionsController;
use App\Http\Controllers\Settings\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {



    //    Settings -> Users Management

    Route::resource('/users',UsersController::class);
    Route::resource('/roles',RolesController::class);
    Route::resource('/permissions',PermissionsController::class);

    //    Settings -> Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//    Route::resource('/profile',ProfileController::class);
    Route::resource('/profile/settings',SettingsController::class);
    Route::resource('/profile/inbox',InboxController::class);
    Route::resource('/profile/security',SecurityController::class);
    Route::resource('/profile/invoices',InvoiceController::class);


});

require __DIR__.'/auth.php';
