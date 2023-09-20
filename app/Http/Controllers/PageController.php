<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function privacy()
    {
        return view('privacy');
    }
}
