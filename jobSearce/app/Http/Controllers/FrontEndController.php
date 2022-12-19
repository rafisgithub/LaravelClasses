<?php

namespace App\Http\Controllers;

use http\Env\Url;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function homeVersionTwo(){
        return view('frontEnd.home.homeVersionTwo');
    }
    public function homeBoxLayout(){
        return view('frontEnd.home.homeBoxLayout');
    }
    public function jobBoard(){
        return view('frontEnd.job.job-board');
    }
    public function singleJobPost(){
        return view('frontEnd.job.singleJobPost');
    }
    public function jobDetail(){
        return view('frontEnd.job.job-detail');
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function candidate(){
        return view('frontEnd.pages.candidate');
    }
    public function resume(){
        return view('frontEnd.pages.resume');
    }
    public function blog(){
        return view('frontEnd.pages.blog');
    }
    public function blogDetails(){
        return view('frontEnd.pages.blog-details');
    }
    public function contact(){
        return view('frontEnd.pages.contact');
    }

}
