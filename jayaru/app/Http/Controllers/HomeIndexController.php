<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeIndexController extends Controller
{
    public function homeIndex() {
        return view('home');
    }
}
