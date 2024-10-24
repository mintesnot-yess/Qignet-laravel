<?php
use App\Models\Musics;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get("/user", function (Request $request) {
    return $request->user();
})->middleware("guest");

Route::get("/users/{limit}", function ($limit) {
    $users = User::inRandomOrder()->distinct()->take($limit)->get();

    return response()->json($users);
})->middleware("guest");

Route::get("/users-profile/{id}", function ($id) {
    $user = User::find($id);

    return response()->json($user);
})->middleware("guest");

//

//list of user detail and music

//

Route::get("/artist-detail/{id}", function ($id) {
    $user = User::find($id);

    return response()->json([
        "user" => $user,
    ]);
})->middleware("guest");

//
Route::get("/artists-musics/{id}", function ($id) {
    $musics = Musics::where("user_id", $id)->get();

    return response()->json([
        "musics" => $musics,
    ]);
})->middleware("guest");

//

// music list

//

//New music list

//

Route::get("/musics/{limit}", function ($limit) {
    $music = Musics::inRandomOrder()->distinct()->take($limit)->get();

    return response()->json(data: $music);
})->middleware("guest");
//

//New music list

//

Route::get("/new-musics/{limit}", function ($limit) {
    $music = Musics::distinct()->take($limit)->get();

    return response()->json(data: $music);
})->middleware("guest");

//user register
Route::post("/register", function (Request $request) {
    $validatedData = $request->validate([
        "name" => "required|string|max:255",
        "email" => "required|string|email|max:255|unique:users",
        "password" => "required|string|min:8|confirmed",
    ]);

    $user = User::create([
        "name" => $validatedData["name"],
        "email" => $validatedData["email"],
        "password" => Hash::make($validatedData["password"]),
        "active" => 1,
        "profile_image" => "default.jpg",

    ]);

    return response()->json($user, 201);
});

//login user

Route::post("/login", function (Request $request) {
    $validatedData = $request->validate([
        "email" => "required|string|email|max:255",
        "password" => "required|string",
    ]);

    if (Auth::attempt($validatedData)) {
        $user = Auth::user(); // Get the authenticated user
        $token = $user->createToken("authToken")->plainTextToken; // Generate the token

        return response()->json([
            "user" => $user,
            "token" => $token,
        ]);
    }

    return response()->json(["error" => "Invalid credentials"], 401);
});
