<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
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



Route::middleware('auth')->group(function () {
    Route::resource('pegawai', PegawaiController::class);
});

Route::get('/', function () {
    return view('admin.pages.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
