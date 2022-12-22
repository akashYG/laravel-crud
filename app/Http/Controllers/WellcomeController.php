<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Blog;

class WellcomeController extends Controller
{
    public $message, $blogs, $blog;
    public $courses, $course;

    public function index()
    {
        $this->courses = Course::all();
        return view('home.index',['courses' => $this->courses]);
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('home.detail',['course'=> $this->course]);
    }


//    public function course()
//    {
//        $this->blogs = Blog::getAllBlog();
//        return view('course',['blogs' => $this->blogs]);
//    }


//    public function detail($id)
//    {
//        $this->blog = Blog::getBlogById($id);
//        return view('detail',['newBlog' => $this->blog]);
//    }

}
