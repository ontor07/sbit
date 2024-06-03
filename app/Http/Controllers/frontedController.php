<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
use App\Models\student_admission;
use Brian2694\Toastr\Facades\Toastr;

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
    public function graphic_design()
    {
        return view("fronted.graphic_design");
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
    public function sendMessage(Request $request)
    {
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        );
       
        $insert = message::create($data);
       
        if($insert)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    public function photo_gallery()
    {
        return view("fronted.photo_gallery");
    }
    public function clients()
    {
        return view("fronted.clients");
    }
    public function data_entry()
    {
        return view("fronted.data_entry");
    }
    public function admission()
    {
        return view("fronted.admission");
    }
    public function OurCourse(Request $request)
    {
        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'course'=>$request->course,
            'course_type'=>$request->course_type,
        );
       
        $insert = student_admission::create($data);
       
        if($insert)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
}
