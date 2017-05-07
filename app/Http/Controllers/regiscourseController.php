<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\regiscourse;
class regiscourseController extends Controller
{
  public function add (Request $request){
    $newRegisCourse = new regiscourse();
       $newRegisCourse -> userid = $request->input('std-email');
       $newRegisCourse -> courseid = $request->input('course');
       $newRegisCourse -> save();
       return view("admin");
   }
}
