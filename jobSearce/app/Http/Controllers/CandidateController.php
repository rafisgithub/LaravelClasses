<?php

namespace App\Http\Controllers;

use App\Models\CandidateLoginInfo;
use App\Models\CandidateRegisterInfo;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public $candidateRegisterInfo,$candidateLogInfo;
    public function candidateRegister(){
        return view('frontEnd.home.candidate-register');
    }
    public function saveCandidate(Request $request){
       $this->candidateRegisterInfo=new CandidateRegisterInfo();
       $this->candidateRegisterInfo->first_name=$request->first_name;
       $this->candidateRegisterInfo->last_name=$request->last_name;
       $this->candidateRegisterInfo->email=$request->email;
       $this->candidateRegisterInfo->password=$request->password;
       $this->candidateRegisterInfo->save();
       return back()->with('message','Register successfully done');
    }
    public function candidateLogin(){
        return view('frontEnd.home.candidate-login');
    }
    public function newLogin(Request $request){
       $this->candidateLogInfo= new CandidateLoginInfo();
       $this->candidateLogInfo->username=$request->username;
       $this->candidateLogInfo->pass=$request->pass;
       $this->candidateLogInfo->save();
       return back()->with('message','Login successfully done');
    }
}
