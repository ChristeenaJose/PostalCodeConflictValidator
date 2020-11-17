<?php

use Illuminate\Support\Facades\Route;
use App\Models\PstCodConfValidator;

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

// Task 1
Route::get('/', function () {
    return view('welcome');
});
Route::get("/Search", "App\Http\Controllers\ValidatorController@index");


// Task 2
Route::get("/task2", "App\Http\Controllers\BusinessController@index");
Route::get("/task2/Msg={Msg}", "App\Http\Controllers\BusinessController@showMessage");

// Creat a new Data
Route::get("/task2/create", "App\Http\Controllers\BusinessController@create");

// Store a new Data
Route::post("/task2", "App\Http\Controllers\BusinessController@store");