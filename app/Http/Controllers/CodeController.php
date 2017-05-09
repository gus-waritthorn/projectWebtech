<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Redirect;
use App\Code;
use DB;

class CodeController extends Controller
{
  public function add(Request $request){
       $newRegisCourse = new code();
       $newRegisCourse -> code = $request->input('code');
       $newRegisCourse -> idCourse = $request->input('course');
       $newRegisCourse -> save();

       // $courses =  DB::table('course')->get();

       // return view('admin', [
       //   'courses' => $courses
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

   public function check(Request $request){

        $codeCheckin = $request->input('check-in-code');
        $courseidresBody = DB::table('code')->where('code', $codeCheckin)->select('idCourse')->get();

        if (count($courseidresBody) == 0) {
          echo '<script language="javascript">';
          echo 'alert("Code not found.")';
          echo '</script>';
        }
        else {
          $courseidresBody = $courseidresBody[0]->idCourse;
          $uid = Auth::user()->id;
          $cid = DB::table('regiscourse')->where('userid', $uid)->select('courseid')->get();
          $cid = $cid[0]->courseid;

          if($cid != $courseidresBody) {
            echo '<script language="javascript">';
            echo 'alert("Code is not match for your courses.")';
            echo '</script>';
          }
          else {
            $uid = Auth::user()->id;
            $userpoint = DB::table('users')->where('id', $uid)->select('point')->get();
            $userpoint = $userpoint[0]->point;
            $userpoint = ((int)$userpoint) + 100;
            DB::table('users')
                  ->where('id', $uid)
                  ->update(array('point' => $userpoint));

            // $timeout = DB::table('code')->where('code', $codeCheckin)->select('created_at')->get();
            // $timeout = $timeout[0]->created_at;
            // $timeout = ((int)$timeout) ;


          }

        }


        return redirect('/');

    }
}
