<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Vdo;
use DB;

class VdoController extends Controller
{
  function update(request $request){
    DB::table('vdo')
          ->where('no', $request->input('video'))
          ->update(array('path' => $request->input('newvideo')));

    // $courses =  DB::table('course')->get();
    
    // return view('admin', [
    //             'courses' => $courses
    // ]);

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
