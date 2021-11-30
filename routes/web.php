<?php

use Illuminate\Routing\RouteGroup;
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
})->name('dashboard');

Route::get('/pages/metode-bagi-dua', function(){
    return view('metodeBagiDua');
})->name('metode-bagi-dua');

Route::get('/pages/metode-regula-falsi', function(){
    return view('metodeRegulaFalsi');
})->name('metode-regula-falsi');

Route::get('/pages/metode-titik-tetap', function(){
    return view('metodeTitikTetap');
})->name('metode-titik-tetap');

Route::get('/pages/metode-newton-raphson', function(){
    return view('metodeNewtonRaphson');
})->name('metode-newton-raphson');

Route::get('/pages/metode-secant', function(){
    return view('metodeSecant');
})->name('metode-secant');
