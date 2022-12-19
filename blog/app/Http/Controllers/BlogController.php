<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blog,$image,$directory,$imgUrl;
    public function index(){
        return view('frontEnd.home.home');
    }
    public function saveBlog(Request $request){
        $this->blog=new Blog();
        $this->blog->blog_title=$request->blog_title;
        $this->blog->author=$request->author;
        $this->blog->category=$request->category;
        $this->blog->description=$request->description;
        $this->blog->image=$this->saveImage($request);
        $this->blog->save();
        return redirect('/all-blogs')->with('message','Blog added successfully');
    }
    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imgName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='frontEndAsset/blog-image/';
        $this->imgUrl=$this->directory.$this->imgName;
        $this->image->move($this->directory,$this->imgName);
        return $this->imgUrl;
    }
    public function allBlogs(){
      return view('frontEnd.all-blog',[
         'blogs'=> Blog::all()
      ]);
    }
    public function deleteBlog(Request $request){
       $this->blog= Blog::find($request->blog_id);
       if($this->blog->image){
           unlink($this->blog->image);
       }
       $this->blog->delete();
       return back()->with('message','Blog deleted successfully');
    }
    public function editBlog($id){
        return view('frontEnd.editBlog',[
            'blog'=>Blog::find($id)
        ]);
    }
    public function updateBlog(Request $request){
        $this->blog=Blog::find($request->id);
        $this->blog->blog_title=$request->blog_title;
        $this->blog->author=$request->author;
        $this->blog->category=$request->category;
        $this->blog->description=$request->description;
        if($request->file('image')){
            if($this->blog->image){
                unlink($this->blog->image);
            }
            $this->blog->image=$this->saveImage($request);
        }
        $this->blog->save();
        return redirect('all-blogs')->with('message','Blog update successfully');
    }
}
