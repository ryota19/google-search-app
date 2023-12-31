<?php

use App\Http\Controllers\GoogleSearchController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/google', [GoogleSearchController::class, 'index']);

Route::get('/google', function () {
    return view('google-search');
});

Route::post('/google/search', [GoogleSearchController::class, 'getResult']);
