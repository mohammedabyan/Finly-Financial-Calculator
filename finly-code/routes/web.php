<?php

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
    return view('home');
});

Route::get('/d1', function () {
    return view('d1');
});

Route::get('/d2', function () {
    return view('d2');
});

Route::get('/d3', function () {
    return view('d3');
});

Route::get('/master', function () {
    return view('layouts/master');
});

Route::get('/simpleinput', function () {
    return view('simpleinput');
});

Route::get('/advancedinput', function () {
    return view('advancedinput');
});

Route::get('/planner', function () {
    return view('planner');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/faq', function () {
    return view('faq');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
