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
      return view('admin');
   }
}
