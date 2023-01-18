<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShopController;
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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------------------Shop Routes --------------------------------

Route::get('/boutique', [ShopController::class, 'showShopPage'])->name('shop');


// ------------------------------ About Routes -------------------------------

Route::get('/A-propos', [AboutController::class, 'showAboutPage'])->name('about');

// ------------------------------- Contact routes -----------------------------

Route::get('/Contact', [ContactController::class, 'showContactForm'])->name('contact');
