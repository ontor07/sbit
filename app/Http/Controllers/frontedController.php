<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontedController extends Controller
{
    public function index()
    {
        return view("fronted.index");
    }
    public function about()
    {
        return view("fronted.about");
    }
    public function team()
    {
        return view("fronted.team");
    }
    public function contact()
    {
        return view("fronted.contact");
    }
}
