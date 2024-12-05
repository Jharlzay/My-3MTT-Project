<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Officer\OfficerController;
use App\Http\Controllers\Vehicle\VehicleController;
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


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function(){
        Route::group(['prefix' => 'officers'], function () {
            Route::controller(OfficerController::class)->group(function () {
                Route::get('', 'index')->name('admin.officers');
                Route::get('add', 'create')->name('admin.officers.create');
                Route::post('store', 'store')->name('admin.officers.store');
            });
        });

        Route::group(['prefix' => 'vehicles'], function () {
            Route::controller(VehicleController::class)->group(function () {
                Route::get('', 'index')->name('admin.vehicles');
                Route::get('add', 'create')->name('admin.vehicles.create');
                Route::post('store', 'store')->name('admin.vehicles.store');
            });
        });

        Route::get('reports', function (){
            return view('admin.reports');
        })->name('admin.reports');
        Route::get('settings', function (){
            return view('admin.settings');
        })->name('admin.settings');
    });

    Route::post('flag', [VehicleController::class, 'flag'])->name('vehicle.flag');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('search-result', [VehicleController::class, 'search'])->name('vehicle.search');

});


