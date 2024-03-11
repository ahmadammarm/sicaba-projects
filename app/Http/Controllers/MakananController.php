<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function paketmakanan()
    {
        return view('user.paketmakanan');
    }
    public function troli()
    {
        return view('user.troli');
    }
}
