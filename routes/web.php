<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', LandingController::class);
Route::get('perusahaan', [LandingController::class, 'perusahaan'])->name('landing.perusahaan');
Route::get('cto', [LandingController::class, 'cto'])->name('landing.cto');
Route::get('ceo', [LandingController::class, 'ceo'])->name('landing.ceo');
Route::get('alamat', [LandingController::class, 'alamat'])->name('landing.alamat');
