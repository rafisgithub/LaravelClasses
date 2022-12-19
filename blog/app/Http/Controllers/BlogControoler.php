<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Termwind\Html\InheritStyles;
use function MongoDB\BSON\toCanonicalExtendedJSON;

class BlogControoler extends Controller
{
    public $blog,$image,$imageName,$directory,$imgUrl;
    public function index(){
        return view('welcome');
    }
    public function saveBlog(Request $request){
        $this->blog=new Blog();
        $this->blog->blog_title=$request->blog_title;
        $this->blog->author=$request->author;
        $this->blog->category_name=$request->category_name;
        $this->blog->description=$request->description;
        $this->blog->image=$this->saveImage($request);
        $this->blog->save();
        return redirect('/all-blog')->with('message','Success');
    }
    private function saveImage($request){
       $this->image =$request->file('image');
     $this->imageName =rand().'.'. $this->image->getClientOriginalExtension();
     $this->directory='frontEndAsset/blog-image/';
     $this->imgUrl=$this->directory.$this->imageName;
     $this->image->move($this->directory,$this->imageName);
     return $this->imgUrl;
    }
    public function allBlog(){
        return view('all-blog',[
            'blogs'=>Blog::all()
        ]);
    }
    public function deleteBlog(Request $request){
        $this->blog=Blog::find($request->blog_id);
        if($this->blog->image){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return back()->with('message','Deleted');
    }
    public function editBlog($id){
        return view('edit-blog',[
            'blog'=>Blog::find($id)
        ]);

    }
    public function updateBlog(Request $request){
        $this->blog=Blog::find($request->blog_id);

        $this->blog->blog_title=$request->blog_title;
        $this->blog->author=$request->author;
        $this->blog->category_name=$request->category_name;
        $this->blog->description=$request->description;
        if($request->file('image')){
            if($this->blog->image){
                unlink($this->blog->image);
            }
            $this->blog->image=$this->saveImage($request);
        }

        $this->blog->save();
        return redirect('/all-blog')->with('message','Updated');
    }
}
