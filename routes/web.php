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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@home');

Route::get('/register', 'AuthController@daftar');

Route::post('/kirim', 'AuthController@kirim');

Route::get('/data-table', function(){
    return view('table.data-table');
});

Route::get('/table', function(){
    return view('table.tables');
});

Route::get('/tampilan', function(){
    return view('tampilan');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/list', function () {
    return view('list');
});
Route::get('/show', 'PetController@index');

Route::get('/casts/create', 'CastController@create');
Route::post('/casts', 'CastController@store');
Route::get('/casts', 'CastController@index');

Route::get('/casts/{casts_id}', 'CastController@show');
Route::get('/casts/{casts_id}/edit', 'CastController@edit');
Route::put('/casts/{casts_id}', 'CastController@update');

Route::delete('/casts/{casts_id}', 'CastController@destroy');







