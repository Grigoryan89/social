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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('posts')->group(function (){

    Route::get('/create','PostController@create');
    Route::post('/','PostController@store');
    Route::get('/{post}','PostController@show');

});

Route::prefix('profiles')->group(function () {

    Route::get('/{user}', 'ProfileController@show');
    Route::get('/{user}/edit', 'ProfileController@edit');
    Route::put('/{user}', 'ProfileController@update');
});
