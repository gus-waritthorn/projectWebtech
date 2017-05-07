<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;

class courseController extends Controller
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
}
