<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use DB;
class CourseController extends Controller
{
    //

    public function create (Request $request){
        if($request->exists('btn-upload')){
          $file = $request->file('course-pic');
          $path = '/img/course/';
          $filename = $file->getClientOriginalName();
          $file->move(base_path('/public/img/course/'),$file->getClientOriginalName());

          DB::table('course')
              ->insert(array('path' => $filename, 'name' => $request->input('course-name'), 'numday' => $request->input('course-date'),'price' => $request->input('course-price'),'level'=>$request->input('course-level')));
      }
      $courses =  DB::table('course')->get();
      return view('admin', [
        'courses' => $courses
      ]);
   }

   public function show($id)
   {
       $course =  DB::table('course')->where('id', $id)->get();

       return view('course', [
         'course' => $course
       ]);
   }

   public function index()
   {
       $courses =  DB::table('course')->get();

       return view('allcourses', [
         'courses' => $courses
       ]);
   }

   public function openCourse()
   {
       $courses =  DB::table('course')->get();

       return view('admin', [
         'courses' => $courses
       ]);
   }

}
