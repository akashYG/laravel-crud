<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.home');
    }
    public function addTeacher(){
        return view('admin.teacher.add-teacher');
    }
    public function manageTeacher(){
        $teachers=Teacher::all();
        return view('admin.teacher.manage-teacher',compact('teachers'));
    }
}
