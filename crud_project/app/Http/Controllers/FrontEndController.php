<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontEnd.home');
    }
    public function about(){
        return view('frontEnd.about');
    }
    public function course(){
        return  view('frontEnd.course');
    }
    public function blog(){
        return view('frontEnd.blog');
    }
    public function contact(){
        return view('frontEnd.contact');
    }
}
