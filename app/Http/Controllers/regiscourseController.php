<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisCourse;
use Illuminate\Support\Facades\Auth;
use DB;

class RegisCourseController extends Controller
{
  public function add (Request $request){
    $newRegisCourse = new regiscourse();
       $newRegisCourse -> userid = $request->input('std-email');
       $newRegisCourse -> courseid = $request->input('course');
       $newRegisCourse -> save();
       return view("admin");
   }

   public function course (){
      $coursedetail = array();
      $uid = Auth::user()->id;
      $cids = DB::table('regiscourse')->where('userid', $uid)->select('courseid')->get();
      foreach ($cids as $cid ) {
        $resBody =  DB::table('course')->where('id', $cid->courseid)->get();
        array_push($coursedetail, $resBody);
      }

      // $coursedetail = (object)$coursedetail;
      return view('mycourse', [
          'coursedetail' => $coursedetail
        ]);
    }
}
