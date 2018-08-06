<?php

use App\Http\Controllers\UserController;

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
    return view('login');
});

Route::resource('game', 'game'); // mengambil resource dari view game.blade.php (param1 = nama route, param2 = view nya)
Route::resource('mitra', 'mitra');

Route::get('/home_user', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');
Route::get('/listGame', 'GameController@index');
Route::get('/listMitra', 'MitraController@index');
Route::post('/photo_profile', 'UserController@ImagePost');
Route::get('/photo_profile', 'UserController@ImageLoad');
Route::get('/detail/{id}', 'PropertyController@getIdMitra'); //get id mitra to view property