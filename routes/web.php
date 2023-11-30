<?php

use App\Http\Controllers\CekOngkirController;
use App\Http\Controllers\MidtransController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('home', [CekOngkirController::class, 'home'])->name('home');
Route::post('cost', [CekOngkirController::class, 'cost'])->name('cost');

Route::get('gopay', [MidtransController::class, 'index'])->name('gopay');
Route::post('proses/gopay', [MidtransController::class, 'store'])->name('proses.gopay');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
