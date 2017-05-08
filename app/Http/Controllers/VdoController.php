<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vdo;
use DB;

class VdoController extends Controller
{
  function update(request $request){
    DB::table('vdo')
          ->where('no', $request->input('video'))
          ->update(array('path' => $request->input('newvideo')));
    return view('admin', [
                'courses' => $courses
    ]);
  }
}
