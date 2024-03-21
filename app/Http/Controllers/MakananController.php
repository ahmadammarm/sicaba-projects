<?php

namespace App\Http\Controllers;


class MakananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function paketmakanan()
    {
        return view('user.paketmakanan');
    }

    public function troli()
    {
        return view('user.troli');
    }
}
