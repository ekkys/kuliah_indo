<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\TesterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\UploadTestimoniController;
use App\Http\Controllers\UploadSlideBannerController;
use App\Http\Controllers\PenjadwalanController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\XenditController;
// use App\Http\Controllers\OrderMidtransController;
use App\Http\Controllers\AbsensiController;

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


/* Main Web*/
Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/class', [ClassController::class, 'index']);
Route::get('/class/singleClass/{id}', [ClassController::class, 'singleClass']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/home/myprofile', [SiswaController::class, 'myProfile']);
Route::post('/home/myprofile', [SiswaController::class, 'updateProfile']);
Route::get('/home/mycourse', [SiswaController::class, 'myCourse']);
Route::get('/home/payment', [SiswaController::class, 'payment']);
Route::get('/home/payment/{order_id}', [SiswaController::class, 'paymentCourse']);
Route::get('/home/changepassword', [SiswaController::class, 'changePassword']);
Route::post('/home/changepassword', [SiswaController::class, 'storePassword']);
Route::get('/invoice/{id}', [SiswaController::class, 'invoice']);
Route::get('/certificate/{id}', [SiswaController::class, 'certificate']);
Route::get('/view_email' ,[GlobalController::class, 'mail_view']);
Route::get('/test_email' ,[GlobalController::class, 'test_email']);

Route::get('/confirmation/{id}' ,[GlobalController::class, 'confirmation']);
Route::get('/order/invoice', [GlobalController::class, 'getInvoice']);
Route::post('/order_course', [GlobalController::class, 'order_midtrans']);

Route::get('/pay/{user_id}/{course_id}/{course_name}', [XenditController::class, 'create_invoice']);
/* End Main Web */

/* Admin Route */
Auth::routes();
Route::post('/reset-password' ,[GlobalController::class, 'reset_password']);
Route::get('absensi/{id}/edit', [AbsensiController::class, 'detail']);
Route::get('absensi/{user_id}/{course_id}/{status}/{date}/kehadiran', [AbsensiController::class, 'kehadiran']);

Route::prefix('home')->name('home.')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('karyawan', [App\Http\Controllers\HomeController::class, 'index'])->name('karyawan');
    // Route::get('tutor', [App\Http\Controllers\HomeController::class, 'index'])->name('tutor');
    // Route::get('siswa', [App\Http\Controllers\HomeController::class, 'index'])->name('siswa');
});

    Route::get('/getSiswaByCourse/{id}',[ AbsensiController::class, 'getSiswaByCourse']);
    Route::resource('/topic', TopicController::class);
    Route::resource('/tutor', TutorController::class);
    Route::resource('/jabatan', JabatanController::class);
    Route::resource('/karyawan', KaryawanController::class);
    Route::resource('/wilayah', WilayahController::class);
    Route::resource('/slidebanner', UploadSlideBannerController::class);
    Route::resource('/testimoni', UploadTestimoniController::class);
    Route::resource('/setting', SettingController::class);
    Route::resource('/penjadwalan', PenjadwalanController::class);
    // Route::resource('/ordermidtrans', OrderMidtransController::class);
    Route::resource('/absensi', AbsensiController::class);

/* End Admin Route */