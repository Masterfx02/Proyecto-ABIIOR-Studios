<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [AdminController::class, 'home']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/create_room', [AdminController::class, 'create_room']);
Route::post('/add_room', [AdminController::class, 'add_room']);
Route::get('/view_room', [AdminController::class, 'view_room']);
Route::get('/room_delete/{id}', [AdminController::class, 'room_delete']);
Route::get('/room_update/{id}', [AdminController::class, 'room_update']);
Route::post('/edit_room/{id}', [AdminController::class, 'edit_room']);
Route::get('/room_details/{id}', [HomeController::class, 'room_details']);
Route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);
Route::get('/bookings', [AdminController::class, 'bookings']);
Route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking']);
