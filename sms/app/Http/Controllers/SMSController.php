<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function contactUs(){
        return view('frontEnd.contact.contact-us');
    }
}
