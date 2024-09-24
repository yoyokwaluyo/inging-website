<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsArticleController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contactus');
Route::get('/news-and-article', [NewsArticleController::class, 'index'])->name('newsarticle');
Route::get('/news-and-article/{slug}', [NewsArticleController::class, 'detail'])->name('newsarticle.detail');