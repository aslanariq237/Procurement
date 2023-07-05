<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Http\Controllers\CustomerController;
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
>>>>>>> 13aaf85 (p1)

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
<<<<<<< HEAD
<<<<<<< HEAD
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
=======
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
>>>>>>> 13aaf85 (p1)
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD
<<<<<<< HEAD
=======
Route::post('cust',[CustomerController::class, 'storeCustomer']);
>>>>>>> 106f54eec92316c317e3f0b4a7294843f31cf997
=======
>>>>>>> 13aaf85 (p1)
