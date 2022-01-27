<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharacterCollection;
use App\Models\Character;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $characters = (Character::with('occupation')->paginate(25));

        return view('index', compact('characters'));
    }
}
