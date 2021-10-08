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

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('/travels')->name('travels.')->group(function () {
    Route::get('', 'TravelController@index')->name('index');
    Route::get('/{id}', 'TravelController@show')->name('show');
});
