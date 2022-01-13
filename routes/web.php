<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DamageController;
use App\Http\Controllers\GateController;
use App\Http\Controllers\NotesContoller;
use App\Http\Controllers\OnlyOneClientController;
//use App\Http\Controllers\Select2SearchController;
use App\Http\Controllers\PaymentController;
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

//if (!env('ALLOW_REGISTRATION', false)) {
//    Route::any('/register', function() {
//        abort(403);
//    });
//}

Route::any('/forgot-password', function() {
    abort(403);
});

Route::get('/', function () {
    return view('welcome');
});

//auth route for both
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::resource('buildings', BuildingController::class);
    Route::resource('showclients', OnlyOneClientController::class);
    Route::get('/generate-invoice/{order_id}/{month_id}', 'App\Http\Controllers\InvoiceController@invoice');
    Route::get('/save-invoice/{order_id}/{month_id}', 'App\Http\Controllers\InvoiceController@saveInvoice');
    Route::resource('clients', ClientController::class);
    Route::resource('gates', GateController::class);
    Route::resource('damages', DamageController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('notes', NotesContoller::class);
    Route::post('/search', 'App\Http\Controllers\PaymentController@search');
    Route::get('/get-result', 'App\Http\Controllers\AutoCompleteSearchController@getResult')->name('get-result');
    Route::post('/searchClient', 'App\Http\Controllers\AutoCompleteSearchController@searchClient')->name('searchClient');

});

//auth route for user
Route::group(['middleware' => ['auth','role:user']], function() {
//    Route::resource('buildings', BuildingController::class);
//    Route::resource('gates', GateController::class);
//    Route::resource('clients', ClientController::class);
//    Route::resource('damages', DamageController::class);
//    Route::resource('showclients', OnlyOneClientController::class);
//    Route::get('/generate-invoice/{order_id}/{month_id}', 'App\Http\Controllers\InvoiceController@invoice');
//    Route::get('/save-invoice/{order_id}/{month_id}', 'App\Http\Controllers\InvoiceController@saveInvoice');


});
//auth route for admin
Route::group(['middleware' => ['auth','role:admin']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@profile')->name('dashboard.myprofile');
//    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard.index');
//    Route::resource('buildings', BuildingController::class);
//    Route::resource('gates', GateController::class);
//    Route::resource('clients', ClientController::class);
//    Route::resource('damages', DamageController::class);
//    Route::resource('payments', PaymentController::class);
//    Route::resource('notes', NotesContoller::class);
//    Route::resource('showclients', OnlyOneClientController::class);
//    Route::get('/generate-invoice/{order_id}/{month_id}', 'App\Http\Controllers\InvoiceController@invoice');
//    Route::get('/save-invoice/{order_id}/{month_id}', 'App\Http\Controllers\InvoiceController@saveInvoice');
//    Route::get('/delete-invoice', 'App\Http\Controllers\InvoiceController@deleteInvoice');

});


require __DIR__.'/auth.php';
