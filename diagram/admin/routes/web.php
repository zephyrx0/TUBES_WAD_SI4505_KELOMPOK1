<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('index.home');

Route::get('/admin/dashboard', function () {
    // Cek apakah sesi loginadmin telah diatur
    if (session('loginadmin')) {
        return view('admin');
    } else {
        return redirect()->route('loginadmin');
    }
})->name('admin.dashboard');

Route::get('/loginadmin', [AdminLoginController::class, 'showLoginForm'])->name('loginadmin');
Route::post('/loginadmin', [AdminLoginController::class, 'login']);
Route::get('/logoutadmin', [AdminLoginController::class, 'logout'])->name('logoutadmin');

Route::get('adminmenu', [AdminMenuController::class, 'index'])->name('adminmenu');
Route::get('/admin/menu/create', [AdminMenuController::class, 'create'])->name('admin.menu.create');
Route::post('/admin/menu/store', [AdminMenuController::class, 'store'])->name('admin.menu.store');
Route::get('/admin/menu/edit/{id}', [AdminMenuController::class, 'edit'])->name('admin.menu.edit');
Route::put('/admin/menu/update/{id}', [AdminMenuController::class, 'update'])->name('admin.menu.update');
Route::delete('/admin/menu/{id}', [AdminMenuController::class, 'destroy'])->name('admin.menu.destroy');

Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');
