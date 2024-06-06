<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    $meta =  [
        'title' => 'laravel', 
    ];

    return Inertia('home')->withViewData([
        'meta' => $meta
    ]);
});

Route::get('/shop', function () {
    $meta =  [
        'title' => 'shop', 
    ];

    return Inertia('shop')->withViewData([
        'meta' => $meta
    ]);;
});

Route::get('/about-us', function () {
    $meta =  [
        'title' => 'about', 
    ];

    return Inertia('about')->withViewData([
        'meta' => $meta
    ]);
});

Route::get('/services', function () {
    $meta =  [
        'title' => 'services', 
    ];

    return Inertia('services')->withViewData([
        'meta' => $meta
    ]);;
});

Route::get('/blog', function () {
    $meta =  [
        'title' => 'blog', 
    ];

    return Inertia('blog')->withViewData([
        'meta' => $meta
       ]
    );
});

Route::get('/contact', function () {
    $meta =  [
        'title' => 'contact', 
    ];

    return Inertia('contact')->withViewData([
        'meta' => $meta
       ]
    );
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard/home', [DashboardController::class, 'home_index'])->name('tamplate.index');
    Route::get('/dashboard/shop', [DashboardController::class, 'shop_index'])->name('tamplate.shop');
    Route::get('/dashboard/about', [DashboardController::class, 'about_index'])->name('tamplate.about');
    Route::get('/dashboard/services', [DashboardController::class, 'services_index'])->name('tamplate.services');
    Route::get('/dashboard/blog', [DashboardController::class, 'blog_index'])->name('tamplate.blog');
    Route::get('/dashboard/contact', [DashboardController::class, 'contact_index'])->name('tamplate.contact');
});

require __DIR__.'/auth.php';