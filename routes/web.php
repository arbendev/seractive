<?php

use App\Http\Controllers\BlogController;

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

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

// Static Pages
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/industries', [PageController::class, 'industries'])->name('industries');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/resources/{resource}', [PageController::class, 'resourceDetail'])->name('resources.detail');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{service}', [PageController::class, 'serviceDetail'])->name('services.detail');

// Authentication Routes
Auth::routes();

// Dashboard / Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
