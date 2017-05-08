<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

      $courses =  DB::table('course')->get();
      
      return view('admin', [
        'courses' => $courses
      ]);
    }

}
