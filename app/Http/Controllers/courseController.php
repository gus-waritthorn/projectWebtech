<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use DB;

class CourseController extends Controller
{
    //

    public function create (Request $request){
        $newCourse = new course();
        $newCourse -> name = $request->input('course-name');
        $newCourse -> numday = $request->input('course-date');
        $newCourse -> price = $request->input('course-price');
        $newCourse -> level = $request->input('course-level');
        $newCourse -> path = $request->input('course-pic');
        $newCourse -> save();
        return view("admin");
   }

   public function show($id)
   {
       $course =  DB::table('course')->where('id', $id)->get();

       return view('course', [
         'course' => $course
       ]);
   }
}
