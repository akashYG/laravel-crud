<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable=['name','phone','email','address','image'];

    private static $blog, $image, $imageUrl, $imageName, $extension, $directory, $message;

//    public static function deleteBlog($id)
//    {
//        self::$blog = Teacher::find($id);
//        if (file_exists(self::$blog->image))
//        {
//            unlink(self::$blog->image);
//        }
//        self::$blog->delete();
//    }
//    public static function deleteBlog($id)
//    {
//        self::$blog = Blog::find($id);
//        if (file_exists(self::$blog->image))
//        {
//            unlink(self::$blog->image);
//        }
//        self::$blog->delete();
//    }
}
