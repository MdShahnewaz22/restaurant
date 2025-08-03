<?php

use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('clear-compiled');
    Artisan::call('optimize:clear');
    Artisan::call('storage:link');
    // Artisan::call('optimize');
    session()->flash('message', 'System Updated Successfully.');
    return redirect()->route('frontend.home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/shop_details', [HomeController::class, 'shop_details'])->name('shop_details');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/shop_list', [HomeController::class, 'shop_list'])->name('shop_list');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contactdata', [HomeController::class, 'contactstore'])->name('contactstore');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog_details', [HomeController::class, 'blog_details'])->name('blog_details');
Route::get('/blog_standard', [HomeController::class, 'blog_standard'])->name('blog_standard');
Route::get('/chef', [HomeController::class, 'chef'])->name('chef');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('lang/{lang}', [HomeController::class, 'languageSet'])->name('languageSet');

