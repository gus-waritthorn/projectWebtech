<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    //
   public function add (Request $request){
     $newTeacher = new teacher();
        $newTeacher -> path = $request->input('teacher-pic');
        $newTeacher -> name = $request->input('teacher-name');
        $newTeacher -> description = $request->input('teacher-profile');
        $newTeacher -> save();
        return view('admin');
    }
}
