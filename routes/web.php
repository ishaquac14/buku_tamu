<?php

use App\Http\Controllers\GuestController;
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

Route::get('/guest/index', [GuestController::class, 'index'])->name('guest.index');
Route::get('/guest/create', [GuestController::class, 'create'])->name('guest.create');
Route::post('/guest/store', [GuestController::class, 'store'])->name('guest.store');
