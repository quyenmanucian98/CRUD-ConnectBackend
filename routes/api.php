<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('phones')->group(function () {
    Route::get('/', 'PhoneController@getAll');
    Route::post('/add', 'PhoneController@add');
    Route::get('/{id}', 'PhoneController@findById');
    Route::put('/update/{id}', 'PhoneController@update');
});
