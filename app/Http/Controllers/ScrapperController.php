<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScrapperController extends Controller
{
    public function index()
    {
        return view('welcome', [] );
    }
}
