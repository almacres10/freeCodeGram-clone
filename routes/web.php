<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/p/create', 'App\Http\Controllers\PostController@create');
Route::post('/p', 'App\Http\Controllers\PostController@store');

Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.show');