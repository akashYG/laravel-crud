<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    private static $course, $image, $directory, $imageName, $imageUrl, $extension ;

    public static function getImageUrl($request)
    {
        self::$image            = $request->file('image');
//        self::$imageName      = self::$image->getClientOrginalName();
        self::$extension        = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory        = 'course-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory. self::$imageName;
    }

    public static function newCourse($request)
    {
        self::$course                   = new Course();
        self::$course->name             = $request->name;
        self::$course->description      = $request->description;
        self::$course->fee              = $request->fee;
        self::$course->image            = self::getImageUrl($request);
        self::$course->save();
    }

    public static function updateCourse($request, $id)
    {
        self::$course = Course::find($id);
        if($request->file('image'))
        {
            if (file_exists(self::$course->image))
            {
                unlink(file_exists(self::$course->image));
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$course->image;
        }
        self::$course->name             = $request->name;
        self::$course->description      = $request->description;
        self::$course->fee              = $request->fee;
        self::$course->image            = self::$imageUrl;
        self::$course->save();
    }
    public static function deleteCourse($id)
    {
        self::$course = Course::find($id);
        if (file_exists(self::$course->image))
        {
            unlink(self::$course->image);
        }
        self::$course->delete();

    }

}
