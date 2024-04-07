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
    public function web_design()
    {
        return view("fronted.web_design");
    }
    public function web_dev()
    {
        return view("fronted.web_dev");
    }
    public function app_dev()
    {
        return view("fronted.app_dev");
    }
    public function ecommerce()
    {
        return view("fronted.ecommerce");
    }
    public function seo()
    {
        return view("fronted.seo");
    }
    public function team()
    {
        return view("fronted.team");
    }
    public function contact()
    {
        return view("fronted.contact");
    }
    public function photo_gallery()
    {
        return view("fronted.photo_gallery");
    }
}
