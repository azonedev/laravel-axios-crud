<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AxoisController@index');

Route::post('/store','AxoisController@store');
Route::post('/delete','AxoisController@destroy');