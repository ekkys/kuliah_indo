<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TesterController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('home')->name('home.')->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('karyawan', [App\Http\Controllers\HomeController::class, 'karyawan'])->name('karyawan');
    Route::get('tutor', [App\Http\Controllers\HomeController::class, 'tutor'])->name('tutor');
    Route::get('siswa', [App\Http\Controllers\HomeController::class, 'siswa'])->name('siswa');
});



Route::resource('/topic', TopicController::class);
Route::resource('/tutor', TutorController::class);
Route::resource('/jabatan', JabatanController::class);
Route::resource('/karyawan', KaryawanController::class);