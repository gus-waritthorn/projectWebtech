<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use DB;

class TeacherController extends Controller
{
    function update(request $request){
      if($request->exists('btn-upload')){
          $file = $request->file('teacher-pic');
          $path = '/img/teacher/';
          $filename = $file->getClientOriginalName();
          $file->move(base_path('/public/img/teacher/'),$file->getClientOriginalName());

          DB::table('teacher')
                ->where('no', $request->input('teacher'))
                ->update(array('path' => $filename, 'name' => input('teacher-name'), 'description' => input('teacher-profile')));

      }
      return view('admin');
    }
}
