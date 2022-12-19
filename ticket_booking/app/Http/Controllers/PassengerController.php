<?php

namespace App\Http\Controllers;

use App\Models\passangerInfo;
use Illuminate\Http\Request;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class PassengerController extends Controller
{
    public $passengerInfo;
    public function index(){
        return view('frontEnd.home.home');
    }
    public function newInfo(Request $request){
        $this->passengerInfo=new passangerInfo();
        $this->passengerInfo->city_name_1=$request->city_name_1;
        $this->passengerInfo->city_name_2=$request->city_name_2;
        $this->passengerInfo->bus_name=$request->bus_name;
        $this->passengerInfo->counter_number=$request->counter_number;
        $this->passengerInfo->save();
        return back()->with('message','Passenger ticket confirm successfully');
    }
}
