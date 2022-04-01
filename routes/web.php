<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\InvoicesDetailsController;
use App\Http\Controllers\InvoicesAttachmentsController;

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

Route::resource('/sections', SectionsController::class);

Route::resource('/products', ProductsController::class);

Route::resource('/invoices', InvoicesController::class);

// For show products in add invoice page

Route::get('/section/{id}', [InvoicesController::class, 'getproducts']);

// For show Invoice Details

Route::get('/InvoicesDetails/{id}', [InvoicesDetailsController::class, 'edit']);

// For view invoice attachments

Route::get('View_file/{invoice_number}/{file_name}', [InvoicesDetailsController::class,'open_file']);

// For download invoice attachments

Route::get('download/{invoice_number}/{file_name}', [InvoicesDetailsController::class, 'download_file']);

// For delete invoice attachments

Route::post('delete_file', [InvoicesDetailsController::class,'destroy'])->name('delete_file');

// For add invoice attachments

Route::resource('/InvoiceAttachments', InvoicesAttachmentsController::class);

// For edit invoice

Route::get('/edit_invoice/{id}', [InvoicesController::class, 'edit']);

Route::get('/{page}', [AdminController::class, 'index']);
