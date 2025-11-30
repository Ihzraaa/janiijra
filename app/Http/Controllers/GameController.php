<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('games.index');
    }

    public function puzzle()
    {
        return view('games.puzzle');
    }

    public function tebakKata()
    {
        return view('games.tebakkata');
    }

    public function memoryCard()
    {
        return view('games.memorycard');
    }
}
