<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;
use  App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/salam', function () {
    return "Hai, Saya imelda siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});



Route::get('/admin', [AdminController::class, 'index']);
//Route::get('/pasien/show', [PasienController::class, 'show']);

Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasen.create');
Route::get('/pasien/store', [PasienController::class, 'store'])->name('pasen.store');
Route::get('/pasien/edit', [PasienController::class, 'edit'])->name('pasen.edit');
Route::get('/pasien/destroy', [PasienController::class, 'destroy'])->name('pasen.destroy');
Route::get('/pasien/view', [PasienController::class, 'view'])->name('pasen.view');