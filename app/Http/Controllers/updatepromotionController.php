<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\updatepromotion;
use DB;

class updatepromotionController extends Controller
{
    function update(request $request){
      if($request->exists('btn-upload')){
          $file = $request->file('promo-path');
          $path = '/img/promo';
          $filename = $file->getClientOriginalName();
          $file->move('/img/promo',$file->getClientOriginalName());

          DB::table('promotion')
                ->where('no', $request->input('promo'))
                ->update(array('path' => $filename));

      }


      return view('admin');
    }

}
