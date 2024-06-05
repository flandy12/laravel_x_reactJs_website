<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia('home');
});

Route::get('/shop', function () {
    return Inertia('shop');
});

Route::get('/about-us', function () {
    return Inertia('about');
});

Route::get('/services', function () {
    return Inertia('services');
});

Route::get('/blog', function () {
    return Inertia('blog');
});

Route::get('/contact', function () {
    return Inertia('contact');
});