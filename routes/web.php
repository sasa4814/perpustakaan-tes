<?php

use App\Http\Controllers\BukuController;
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
    return view('home');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/dashboard', function () {
    return view('layout/index');
});

Route::get('buku', function () {
    return view('buku.index');
});

Route::get('/layntar', function () {
    return view('buku.layntar');
});

Route::post('/layntar', [BukuController::class, 'search']);
Route::get('/maps', [BukuController::class, 'maps']);
