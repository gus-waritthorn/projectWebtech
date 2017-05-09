<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Teacher;
use DB;

class TeacherController extends Controller
{
    function update(request $request){
      if($request->exists('btn-upload')){
          $file = $request->file('teacher-path');
          $path = '/img/teacher/';
          $filename = $file->getClientOriginalName();
          $file->move(base_path('/public/img/teacher/'),$file->getClientOriginalName());

          DB::table('teacher')
              ->where('no', $request->input('teacher'))
              ->update(array('path' => $filename, 'name' => $request->input('teacher-name'), 'description' => $request->input('teacher-profile')));
      }

      $promos = DB::table('promotion')->select('path')->get();
       $users = DB::table('users')->where('role','std')->get();
       $teachers = DB::table('teacher')->get();
       $courses =  DB::table('course')->get();

        return view('admin', [
            'promos' => $promos,
            'users' => $users,
            'teachers' => $teachers,
            'courses' => $courses
          ]);
    }
}
