<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Promotion;
use DB;

class PromotionController extends Controller
{
    function update(request $request){
      if($request->exists('btn-upload')){
          $file = $request->file('promo-path');
          $path = '/img/promo/';
          $filename = $file->getClientOriginalName();
          $file->move(base_path('/public/img/promo/'),$file->getClientOriginalName());

          DB::table('promotion')
                ->where('no', $request->input('promo'))
                ->update(array('path' => $filename));
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
