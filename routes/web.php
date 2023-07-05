<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD

=======
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======

>>>>>>> 13aaf85 (p1)
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aaf85 (p1)
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/',[AdminController::class, 'index'])->name('admin');
Route::get('/admin-table-admin',[AdminController::class, 'indexTable'])->name('tables');
// Route::get('/admin-table-customer',[AdminController::class, 'showCustomer'])->name('tableCustomer');
// Route::get('/admin-tableCustomer',[AdminController::class, 'showCustomer'])->name('tableCustomer');



Route::get('/admin-table/storeAdmin',[AdminController::class, 'halamanStoreAdmin'])->name('store');
Route::post('/admin-table/storeAdmin','App\Http\Controllers\AdminController@storeAdmin');

// Customer
Route::get('/admin-table/customer-table',[CustomerController::class, 'index'])->name('tableCustomer');
Route::get('/admin-table/storeCustomer',[CustomerController::class, 'halamanStoreCustomer'])->name('storeCustomer');
Route::post('/admin-table/storeCustomer','App\Http\Controllers\CustomerController@storeCustomer');
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======

// Route::get('/home', function(){
//     return view('app');
// });
>>>>>>> 13aaf85 (p1)
