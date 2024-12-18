<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, "index"] );
Route::get('/register', [AuthController::class, "register"]);
Route::get('/welcome', [AuthController::class, "welcome"]);
Route::get('/table', function() {
    return view('page.table');
});
Route::get('/data-table', function() {
    return view('page.data-table');
});
Route::get('/dashboard', function() {
    return view('page.dashboard');
});
