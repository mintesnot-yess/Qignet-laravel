<?php

namespace App\Http\Controllers;

use App\Models\Musics;

class MusicsController extends Controller
{
    public function index()
    {
        Musics::all();

    }
}
