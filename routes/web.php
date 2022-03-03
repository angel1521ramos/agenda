<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () { 
        return view('contenido.inicio'); 
    })->name('inicio');
    Route::Resource('doctor', DoctorController::class);
    Route::Resource('cita', CitaController::class);
});

Route::view('/','plantilla.login')->name('login.view')->middleware('guest');//esta ruta abre la vista login

Route::post('login', [LoginController::class, 'login' ] )->name('login.post');
Route::post('logout', [LoginController::class, 'logout' ] )->name('logout.post');
