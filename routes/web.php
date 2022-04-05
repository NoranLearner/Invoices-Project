<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\InvoiceArchiveController;
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

// For change payment status

Route::get('/status_show/{id}', [InvoicesController::class, 'show'])-> name('status_show');

// For save payment value in database

Route::post('/status_update/{id}', [InvoicesController::class, 'status_update']) -> name('status_update');

// For show paid invoices

Route::get('invoices_paid', [InvoicesController::class, 'invoice_paid']);

// For show unpaid invoices

Route::get('invoices_unpaid', [InvoicesController::class, 'invoice_unpaid']);

// For show partial paid invoices

Route::get('invoices_partial', [InvoicesController::class, 'invoice_partial']);

// For show archive invoices && restore archived invoice

Route::resource('archive_invoice', InvoiceArchiveController::class);

// For print invoice

Route::get('print_invoice/{id}', [InvoicesController::class, 'print_invoice']);

// For export excel with maatwebsite package

Route::get('export_invoices', [InvoicesController::class, 'export']);

Route::get('/{page}', [AdminController::class, 'index']);
