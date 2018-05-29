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

use Illuminate\Support\Facades\Input;
use App\User;
use App\programming_language;
use App\language;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/yo','homeController@index');

Route::post('/search','homeController@search');