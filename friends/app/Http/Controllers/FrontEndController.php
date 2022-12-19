<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public $friend,$image,$imageName,$directory,$imgUrl;
    public function index(){
        return view('frontEnd.home.home');
    }
    public function registerForm(){
        return view('frontEnd.register.register-form');
    }
    public function saveFriend(Request $request){
       $this->friend= new Friend();
       $this->friend->name=$request->name;
       $this->friend->phone=$request->phone;
       $this->friend->email=$request->email;
       $this->friend->password=$request->password;
       $this->friend->destination=$request->destination;
       $this->friend->image=$this->imageSave($request);
       $this->friend->save();
       return redirect('/')->with('message','Registration successful');
    }
    private function imageSave($request){
       $this->image=$request->file('image');
       $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
       $this->directory='frontEndAsset/friend-image/';
       $this->imgUrl=$this->directory.$this->imageName;
       $this->image->move($this->directory,$this->imageName);
       return $this->imgUrl;
    }
    public function dashboardControl(){
        return view('adminFrontEnd.admin.dashboard-control',[
            'friends'=>Friend::all()
        ]);
    }
    public function checkRegisterList(){
        return view('adminFrontEnd.admin.check-register-list',[
            'friends'=>Friend::all()
        ]);
    }
    public function manageRegisterList(){
        return view('adminFrontEnd.admin.manage-register-list',[
            'friends'=>Friend::all()
            ]);
    }
    public function deleteFriend(Request $request){
       $this->friend= Friend::find($request->friend_id);
       $this->friend->delete();
       return back()->with('message','Deleted successfully');
    }
    public function editFriend($id){
        return view('adminFrontEnd.admin.edit-friend',[
            'friend'=>Friend::find($id)
        ]);
    }
    public function updateFriend(Request $request){
       $this->friend= Friend::find($request->friend_id);
        $this->friend->name=$request->name;
        $this->friend->phone=$request->phone;
        $this->friend->email=$request->email;
        $this->friend->password=$request->password;
        $this->friend->destination=$request->destination;
        $this->friend->image=$this->imageSave($request);
        $this->friend->save();
        return redirect('/manage-register-list')->with('message','update successful');
    }
}
