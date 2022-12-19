<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use function League\Flysystem\Local\delete;

class CourseController extends Controller
{
    public $course,$image,$imageName,$directory,$imgUrl,$str;
    public function addCourse(){
        return view('adminFrontEnd.course.add-course');
    }
    public function saveCourse(Request $request){
       $this->course= new Course();
        $this->course->teacher_id=$request->teacher_id;
       $this->course->course_name=$request->course_name;
       $this->course->slug=$this->makeSlug($request);
       $this->course->course_code=$request->course_code;
       $this->course->description=$request->description;
       $this->course->course_fee=$request->course_fee;
       $this->course->image=$this->saveImage($request);
       $this->course->save();
       return back();
    }
    private function makeSlug($request){
        if($request->slug){
            $this->str=$request->slug;
           return preg_replace('/|s+/u','-',trim($this->str));
        }else{
            $this->str=$request->course_name;
           return preg_replace('/|s+/u','-',trim($this->str));
        }



    }
    private function saveImage($request){
       $this->image= $request->file('image');
       $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
       $this->directory='adminAsset/course-imag/';
       $this->imgUrl=$this->directory.$this->imageName;
       $this->image->move($this->directory,$this->imageName);
       return $this->imgUrl;
    }
}
