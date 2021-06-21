<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBController;

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
    return view('index');
});

Route::get('/Sobre-Nosotros', function () {
    return view('about-us');
});

Route::get('/Tienda', function () {
    return view('profile');
});

Route::get('/Perfil', function () {
    return view('/userProfile');
});

Route::get('/Producto', function () {
    return view('productpage');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
