<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use function Illuminate\Session\destroy;

class TeacherController extends Controller
{
//    public $data;
    public function store(Request $request)
    {
        //return $request;
        $data=$request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'image'=>'required',
        ]);
        $data['image']=request('image')->store('uploads','public');
        Teacher::create($data);
        return redirect('manage-teacher');
    }

    public function edit($id){

        return view('admin.teacher.edit',[
            'teacher_edit'=>Teacher::find($id),
            //dd($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'image'=>'',
        ]);
        $teacher_update=Teacher::where('id',$id)->first();
        $teacher_update['name']=$request['name'];
        $teacher_update['phone']=$request['phone'];
        $teacher_update['email']=$request['email'];
        $teacher_update['address']=$request['address'];
        if ($request->hasFile('image'))
        {
            $old_file='storage/'.$teacher_update->image;
            unlink($old_file);
            $teacher_update['image']=request('image')->store('uploads','public');
        }
        $teacher_update->save();
        return redirect('manage-teacher');
    }
    public function delete(Request $request,$id)
    {
        $teacher_delete=Teacher::where('id',$id)->first();
        $old_file='storage/'.$teacher_delete->image;
        unlink($old_file);
        Teacher::destroy($id);
        return redirect('manage-teacher');
    }
//    public function delete($id)
//    {
//        Teacher::deleteBlog($id);
//        return redirect('/manage-blog')->with('message', 'Blog delete successfully');
//    }
}
