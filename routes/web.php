<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'auth'], function () {
    Route::get('admin', function () {
        return view('auth.admin');
    })->name('auth.admin');
    Route::get('officer', function () {
        return view('auth.officer');
    })->name('auth.officer');
});

Route::post('login', [LoginController::class, 'authenticate'])->name('login');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('officers', function (){
        return view('admin.officers');
    })->name('admin.officers');
    Route::get('vehicles', function (){
        return view('admin.vehicles');
    })->name('admin.vehicles');
    Route::get('reports', function (){
        return view('admin.reports');
    })->name('admin.reports');
    Route::get('settings', function (){
        return view('admin.settings');
    })->name('admin.settings');
});

