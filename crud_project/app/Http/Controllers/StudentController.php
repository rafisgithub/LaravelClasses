<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function League\Flysystem\Local\move;

class StudentController extends Controller
{
    public function index(Request $request){
//        return $request->file('image');
        $student = new Student();
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
        $student->roll=$request->roll;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->image=$this->saveImage($request);
        $student->save();
        return back()->with('message','sucess');

    }

    private function saveImage($request){
        $image=$request->file('image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='adminAsset/student-image/';
        $imgUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }


    public function delete(Request $request){
        $student=Student::find($request->student_id);
        if ($student->image){
            unlink($student->image);
        }
        $student->delete();
        return back()->with('message','Delete');

    }
    public function edit($id){
        return view('edit',[
            'studentData'=>Student::find($id),
            'students' => Student::all()
        ]);
    }
    public function update(Request $request){

        $student=Student::find($request->student_id);
        $student->first_name=$request->first_name;
        $student->last_name=$request->last_name;
        $student->roll=$request->roll;
        $student->email=$request->email;
        $student->phone=$request->phone;

        if ($request->file('image')){
            if ($student->image){
                unlink($student->image);
                $student->image=$this->saveImage($request);
            }else {
                $student->image = $this->saveImage($request);
            }
        }

        $student->save();
        return redirect('home')->with('message','updated');
    }
}
