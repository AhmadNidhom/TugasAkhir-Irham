<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewuserController;
use App\Http\Controllers\LapangController;
use App\Http\Controllers\ValidatelapangController;
use App\Http\Controllers\TbhkelompokController;
use App\Http\Controllers\TugasController;
use App\Models\Jurnal;
use App\Models\User;
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
// default after login
Route::get('/', [HomeController::class , 'index']);

// Route::middleware(['auth'])->group(function () {
    
//     Route::get('/lapang/kelompok', function () {
//         $posts = Jurnal::with('user')->get();
//         return view('kelompok', ['posts' => $posts]);
//     })->name('kelompok');

//         Route::get('/jurnal', [JurnalController::class, 'index'])->middleware('verified');
//         Route::post('/insertDataJurnal', [JurnalController::class, 'insertjurnal']);
//         Route::get('/asd/{slug}', [JurnalController::class, 'asd']);
//         Route::get('/submitjurnal', 'JurnalController@index');
// });

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/myreport', [LapangController::class, 'report'])->middleware('verified');
Route::get('/tbhtugas/{tbhtugas}', [LapangController::class, 'tbhtugas'])->middleware('verified');
Route::post('/updatetugas', [LapangController::class, 'updatetugas'])->middleware('verified');
Route::get('/acctugas/{acc}', [LapangController::class, 'acctugas'])->middleware('verified');
Route::get('/lapang', [LapangController::class, 'index'])->name('lapang')->middleware('isAdmin');
Route::get('/lapang/kelompok/{kluniv}', [LapangController::class, 'mskklmpk'])->middleware('verified');
Route::get('/tbhkelompok', [LapangController::class, 'tbhkelompok'])->middleware('verified');
Route::post('/insertkelompok', [LapangController::class, 'tambahkelompok'])->middleware('verified');
Route::get('/jurnal/{idkl}', [LapangController::class, 'tbhjurnal'])->middleware('verified');
Route::post('/insertJurnal', [LapangController::class, 'insertjurnal'])->middleware('verified');
Route::get('/kelompok/tugas/{klmhs}', [LapangController::class, 'tugas'])->middleware('verified');
Route::get('/data-mahasiswa', [NewuserController::class, 'biodata'])->middleware('verified');
Route::get('/validatelapang', [ValidatelapangController::class, 'index'])->middleware('verified');
Route::post('/insertBiodata', [NewuserController::class, 'insertbiodata']);
Route::get('/tugas/nilai/{tgs}', [LapangController::class, 'nilai'])->middleware('verified');
Route::get('/tugas/nilai/{tgs}/{status}', [LapangController::class, 'updatenilai'])->middleware('verified');
Route::get('/datadiri', [NewuserController::class, 'index'])->middleware('verified');