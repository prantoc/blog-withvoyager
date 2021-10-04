<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    // Homepage-area
    public function index()
    {
       
        return view('home');
    }
}
