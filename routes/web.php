<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});
Route::get('/login', function () {
    return 'login page';
});
//login user
Route::post('/login', 'Auth\LoginController@login');
