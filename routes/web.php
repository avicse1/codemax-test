<?php

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
    return redirect()->route('show_manufacturer');
});

Route::get('add-manufacturer', 'HomeController@show')->name('show_manufacturer');
Route::post('add-manufacturer', 'HomeController@store')->name('store_manufacturer');
Route::get('cars', 'CarController@show')->name('show_cars');
Route::post('cars', 'CarController@store')->name('store_cars');
Route::get('inventory', 'InventoryController@index')->name('inventory');
Route::get('sold/{id}', 'InventoryController@sold')->name('sold');