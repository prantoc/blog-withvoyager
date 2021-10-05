<?php

namespace App\Http\Controllers;
use App\Models\Homepage;
use App\Models\HomeImg;
use App\Models\Service;

class HomeController extends Controller
{
    // Homepage-area
    public function index()
    {
       $data['home'] = Homepage::first();
       $data['homeimgs'] = HomeImg::whereHomeId(1)->orderBy('id','DESC')->get();
       $data['services'] = Service::orderBy('id','asc')->get();
        return view('home', $data);
    }
}
