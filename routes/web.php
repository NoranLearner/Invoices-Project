<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;

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
    return view('auth.login');
});

Auth::routes();

// Auth::routes(['register' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/invoices', [InvoicesController::class, 'index']);

Route::resource('/invoices', InvoicesController::class);

// Route::get('/sections', [SectionsController::class, 'index']);

Route::resource('/sections', SectionsController::class);

Route::resource('/products', ProductsController::class);

Route::get('/{page}', [AdminController::class, 'index']);
