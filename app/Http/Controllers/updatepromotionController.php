<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\updatepromotion;

class updatepromotionController extends Controller
{
    function update(request $request){
      DB::table('promotion')
            ->where('id', $request->input('promo'))
            ->update(array('path' => $request->input('promo-path')));
      return view('admin');
    }
}
