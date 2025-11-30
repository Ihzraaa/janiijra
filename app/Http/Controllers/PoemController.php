<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoemController extends Controller
{
    public function index()
    {
        return view('poem.index');
    }
}
