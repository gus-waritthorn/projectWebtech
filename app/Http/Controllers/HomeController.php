<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $promos = DB::table('promotion')->select('path')->get();
       $vdolinks = DB::table('vdo')->select('path')->get();

        return view('welcome', [
            'promos' => $promos,
            'vdolinks' => $vdolinks
          ]);
    }
}
