<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use http\Env\Url;
use Illuminate\Http\Request;
use Session;
class TeacherController extends Controller
{
    public $teacher,$image,$imageName,$directory,$imgUrl;
    public function addTeacher(){
        return view('adminFrontEnd.teacher.add-teacher');
    }
    public function saveTeacher(Request $request){
      $this->teacher=new Teacher();
      $this->teacher->name=$request->name;
      $this->teacher->phone=$request->phone;
      $this->teacher->email=$request->email;
      $this->teacher->password=bcrypt('12345678');
      $this->teacher->address=$request->address;
      $this->teacher->image=$this->saveImage($request);
      $this->teacher->save();
      return back()->with('message','Teacher Added Successfully');
    }
    private function saveImage($request){
      $this->image= $request->file('image');
      $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
      $this->directory='adminFrontEnd/teacher-image/';
      $this->imgUrl=$this->directory.$this->imageName;
      $this->image->move($this->directory,$this->imageName);
      return $this->imgUrl;
    }
    public function manageTeacher(){
        return view('adminFrontEnd.teacher.manage-teacher',[
            'teachers'=>Teacher::all()
        ]);
    }
    public function deleteTeacher(Request $request){
        $this->teacher=Teacher::find($request->teacher_id);
        if($this->teacher->image){
            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return back()->with('message','Successfully Deleted');
    }
    public function editTeacher($id){
        return view('adminFrontEnd.teacher.edit-teacher',[
            'teacher'=>Teacher::find($id)
        ]);
    }
    public function updateTeacherInf(Request $request){
      $this->teacher= Teacher::find($request->teacher_id);

        $this->teacher->name=$request->name;
        $this->teacher->phone=$request->phone;
        $this->teacher->email=$request->email;
        $this->teacher->address=$request->address;
        if($request->file('image')){
            if($this->teacher->image){
                unlink($this->teacher->image);
            }
            $this->teacher->image=$this->saveImage($request);
        }

        $this->teacher->save();
        return redirect('manage-teacher')->with('message','Teacher updated Successfully');
    }
    public function teacherLogin(){
        return view('adminFrontEnd.teacher.teacher-login');
    }
    public function teacherLoginCheck(Request $request){
           $teacherLoginInfo= Teacher::where('email',$request->user_name)
             ->orWhere('phone',$request->user_name)
                ->first();
           if($teacherLoginInfo){
               $expassword=$teacherLoginInfo->password;
               if(password_verify($request->password,$expassword)){
                   Session::put('teacherId',$teacherLoginInfo->id);
                   Session::put('teacherName',$teacherLoginInfo->name);
                   return redirect('/');

               }else{
                   return back()->with('message','use valid password');
               }
           }else {
               return back()->with('message', 'use valid email or phone');
           }
    }
    public function teacherLogout(){
        Session::forget('teacherId');
        Session::forget('teacherName');
        return redirect('/');
    }
    public function teacherProfile(){
        return view('adminFrontEnd.teacher.teacher-profile');
    }
}
