<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AddCourseController extends Controller
{
    private $courses, $course;
    public function index()
    {
        return view('course.index');
    }
    public function store(Request $request)
    {
//        return $request->all();
        Course::newCourse($request);
        return redirect('/add/course')->with('message', 'Product info save successfully');
    }
    public function manage()
    {
       $this->courses =  Course::all();

        return view('course.manage',['courses' => $this->courses]);
    }
    public function edit($id)
    {
        $this->course = Course::find($id);

        return view('course.edit',['course'=> $this->course]);
    }
    public function update(Request $request, $id)
    {
        Course::updateCourse($request, $id);
        return redirect('/add/manage')->with('message','Course info update successfully');

    }
    public function delete($id)
    {
        Course::deleteCourse($id);
        return redirect()->back()->with('message','Course info delete successfully');
    }


}
