<?php

namespace App\Http\Controllers;

use App\Models\CurrencyInfo;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public $bdTaka;
    public function index(){
        return view('frontEnd.home.home',[
           'usCurrency'=> CurrencyInfo::all()
        ]);
        return back();
    }
    public function bdCurrency(Request $request){
        $this->bdTaka=new CurrencyInfo();
        $this->bdTaka->bd_taka=$request->bd_taka;
        $this->bdTaka->save();
        return back();
    }
}
