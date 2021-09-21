<?php

use App\Customers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StorageController;
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

//Route Tugas 1
Route::get('list','App\Http\Controllers\RegController@list');


//Route Tugas 2
Route::get('subscribe','App\Http\Controllers\EmailController@show');
Route::get('index','App\Http\Controllers\EmailController@index')->name('index');
Route::get('create','App\Http\Controllers\EmailController@create')->name('create');
Route::post('store','App\Http\Controllers\EmailController@store')->name('store');

//Route Portofolio
Route::get('download_local','App\Http\Controllers\StorageController@download_local');
Route::get('download_public','App\Http\Controllers\StorageController@download_public');




