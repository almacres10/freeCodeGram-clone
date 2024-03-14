<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/p', 'App\Http\Controllers\PostController@create');

Route::get('/profile/{user}', 'App\Http\Controllers\ProfilesController@index')->name('profile.show');