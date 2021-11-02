<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DamageController;
use App\Http\Controllers\GateController;
use App\Http\Controllers\OnlyOneClientController;
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
    return view('welcome');
});

//auth route for both
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

//auth route for user
Route::group(['middleware' => ['auth','role:user']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@profile')->name('dashboard.myprofile');
});
//auth route for admin
Route::group(['middleware' => ['auth','role:admin']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DashboardController@profile')->name('dashboard.myprofile');
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard.index');
    Route::resource('buildings', BuildingController::class);
    Route::resource('gates', GateController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('damages', DamageController::class);
    Route::resource('showclients', OnlyOneClientController::class);
    Route::get('/generate-invoice/{order_id}/{month_id}', 'App\Http\Controllers\InvoiceController@invoice');
    Route::get('/save-invoice/{order_id}/{month_id}', 'App\Http\Controllers\InvoiceController@saveInvoice');


});


require __DIR__.'/auth.php';
