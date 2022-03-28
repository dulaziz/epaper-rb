<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class epaperController extends Controller
{
    public function index()
    {
        return view('front/epaper', [
            "title" => "Epaper"
        ]);
    }
}
