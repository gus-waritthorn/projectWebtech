<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class teacherController extends Controller
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
