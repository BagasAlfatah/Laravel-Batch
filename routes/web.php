<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;


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

// middleware
Route::middleware(['auth'])->group(function () {

        // CRUD Cast

        // create cast
        // Route untuk menuju ke halaman create
        Route::get('/cast/create',[CastController::class, 'create']);
        // Route untuk menambah data ke database 
        Route::post('/cast', [CastController::class, 'store']);

        // read cast

        // Route halaman cast utama untuk menampilkan data
        Route::get('/cast', [CastController::class, 'index']);
        // Route untuk melihat detail berdasarkan id
        Route::get('/cast/{cast_id}', [CastController::class, 'show']);

        // update cast

        // route untuk update cast dengan id tertentu
        Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
        // route untuk update data ke database
        Route::put('/cast/{cast_id}', [CastController::class, 'update']);

        // delete cast

        // route untuk men delete cast atau data dengan id tertentu
        Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);


        // profile
        Route::resource('profile',controller: ProfileController::class)->only(['index', 'update']);

        
});


Auth::routes();


// route post

Route::resource('post', PostController::class);

// route genre

Route::resource('genre', GenreController::class);


// route film

Route::resource('film',controller: FilmController::class);





