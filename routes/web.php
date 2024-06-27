<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\UsersController;
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
})->name('welcome');

Route::controller(GuestController::class)->group(function () {
    Route::get('/guest/index', 'index')->name('guest.index');
    Route::get('/guest/create', 'create')->name('guest.create');
    Route::post('/guest/store', 'store')->name('guest.store');
    Route::get('/guest/show/{id}', 'show')->name('guest.show');
    Route::get('/guest/edit/{id}', 'edit')->name('guest.edit');
    Route::put('/guest/update/{id}', 'update')->name('guest.update');
    Route::delete('/guest/destroy/{id}', 'destroy')->name('guest.destroy');
    Route::get('/guest/pdf/{id}', 'downloadPdf')->name('guest.pdf');
    Route::post('/guest/save-photo', 'savePhoto')->name('guest.savePhoto');
});

Route::controller(UsersController::class)->group(function () {
    Route::get('/users/create', 'create')->name('users.create');
    Route::get('/users/index', 'index')->name('users.index');
    Route::post('/users/store', 'store')->name('users.store');
    Route::get('/users/edit/{user}', 'edit')->name('users.edit'); 
    Route::put('/users/update/{user}', 'update')->name('users.update'); 
    Route::delete('/users/destroy/{user}', 'destroy')->name('users.destroy');
});