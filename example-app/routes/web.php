<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/', [ApiController::class, "index"]);

Route::get('/admin', [ApiController::class, "admin"]);

Route::delete('/delete/{id}', [ApiController::class, "dataDelete"]);

Route::put('/edit/{id}', [ApiController::class, "dataUpdate"]);

Route::get('/edit/{id}', [ApiController::class, "edit"]);

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [ApiController::class, "store"]);

Route::get('/profile', function () {
    return view('profile');
});

// Route::get
