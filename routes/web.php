<?php

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

Route::get('', function () {
    return view('home');
});

Auth::routes();

Route::resources([
    'vehicle' => App\Http\Controllers\VehicleController::class,
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::get('/service', [App\Http\Controllers\AboutController::class, 'service'])->name('service');
// Route::post("login", [App\Http\Controllers\HomeController::class, 'store']);
// Route::view("home","login");


Route::get('/book_now', [App\Http\Controllers\Parking_detailsController::class, 'book_now'])->name('book_now');
Route::get('/use_now', [App\Http\Controllers\Parking_detailsController::class, 'use_now'])->name('use_now');
Route::get('/reserve_now', [App\Http\Controllers\Parking_detailsController::class, 'reserve_now'])->name('reserve_now');
Route::get('/parking_details', [App\Http\Controllers\Parking_detailsController::class, 'parking_details'])->name('parking_details');
Route::get('/onlinepayment', [App\Http\Controllers\VehicleController::class, 'online_payment'])->name('onlinepayment');


Route::get('/vehicle_details', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicle_details');
Route::post('/vehicle/store', [App\Http\Controllers\VehicleController::class, 'store'])->name('vehicle_store');
// Route::post('/vehicle/delete', [App\Http\Controllers\VehicleController::class, 'destroy'])->middleware(['password.confirm']);
Route::get('/vehicle_details', [App\Http\Controllers\VehicleController::class, 'vehicle_details'])->name('vehicledetails');
    // Route::get('/search', 'VehicleController@search')->name('search');
   
    //user
Route::get('/edituser', [App\Http\Controllers\VehicleController::class, 'edituser'])->name('edituser');

//admin 
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/registeredvehicle', [App\Http\Controllers\AdminController::class, 'registeredvehicle'])->name('registeredvehicle');
Route::get('/parkinglot/{id}/edit', [App\Http\Controllers\AdminController::class, 'parkinglotdetailsedit'])->name('parkinglotdetailsedit');
Route::get('/parkinglotdetails', [App\Http\Controllers\AdminController::class, 'parkinglotdetails'])->name('parkinglotdetails');
Route::post('/parkinglot', [App\Http\Controllers\ParkinglotController::class, 'store'])->name('parking_lot_details');
Route::get('/parkinglot/{id}', [App\Http\Controllers\ParkinglotController::class, 'destroy'])->name('parking_lot_delete');
Route::post('/parkinglot/{id}', [App\Http\Controllers\ParkinglotController::class, 'update'])->name('parking_lot_update');


//search
Route::post('/search', [App\Http\Controllers\AdminController::class, 'search'])->name('search');


//payment
Route::post('/khalti/payment/verify',[App\Http\Controllers\VehicleController::class,'verifyPayment'])->name('khalti.verifyPayment');

Route::post('/khalti/payment/store',[App\Http\Controllers\VehicleController::class,'storePayment'])->name('khalti.storePayment');