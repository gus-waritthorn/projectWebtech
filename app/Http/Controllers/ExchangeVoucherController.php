<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExchangeVoucher;
use DB;

class ExchangeVoucherController extends Controller
{
  function update(request $request){
    echo "in php";
    DB::table('users')
          ->where('email', $request->input('myEmail'))
          ->update(array('point' => $request->input('updatePoint')));
    echo "success";
    return view('voucher');
  }
}
