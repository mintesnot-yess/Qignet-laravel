<?php

use App\Models\Musics;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('guest');

Route::get('/users/{limit}', function ($limit) {
    $users = User::inRandomOrder()->distinct()->take($limit)->get();

    return response()->json($users);
})->middleware('guest');

Route::get('/users-profile/{id}', function ($id) {
    $user = User::find($id);

    return response()->json($user);

})->middleware('guest');

//

//list of user detail and music

//

Route::get('/artist-detail/{id}', function ($id) {
    $user = User::find($id);

    return response()->json([
        'user' => $user,
    ]);
})->middleware('guest');

//
Route::get('/artists-musics/{id}', function ($id) {
    $musics = Musics::where('user_id', $id)->get();

    return response()->json([
        'musics' => $musics,
    ]);
})->middleware('guest');

//

// music list

//

Route::get('/musics/{limit}', function ($limit) {
    $music = Musics::inRandomOrder()->distinct()->take($limit)->get();

    return response()->json(data: $music);
})->middleware('guest');
//

//New music list

//

Route::get('/new-musics/{limit}', function ($limit) {
    $music = Musics::distinct()->take($limit)->get();

    return response()->json(data: $music);
})->middleware('guest');
