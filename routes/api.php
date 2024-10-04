<?php

use App\Models\Musics;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('guest');

Route::get('/musics', function () {
    $musics = Musics::all();;
    return response()->json($musics);
})->middleware('guest');

Route::get('/users/{limit}', function ($limit) {
    $users = User::inRandomOrder()->distinct()->take($limit)->get();

    return response()->json($users);
})->middleware('guest');



Route::get('/users-profile/{id}', function ($id) {
    $user = User::find($id);

    return response()->json($user);

})->middleware('guest');