<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExchangeVoucher;
use DB;

class ExchangeVoucherController extends Controller
{
  function update(request $request){
    DB::table('users')
          ->where('email', $request->input('myEmail'))
          ->update(array('point' => $request->input('updatePoint')));
          
    $newRegisCourse = new ExchangeVoucher();
    $newRegisCourse -> email = $request->input('myEmail');
    $newRegisCourse -> voucherCode = $request->input('vCode');
    $newRegisCourse -> percent = $request->input('percent');
    $newRegisCourse -> save();
    return view('voucher');
  }


  public function show()
   {
       $vouchers =  DB::table('exchangeVoucher')->get();

       return view('my-voucher', [
         'vouchers' => $vouchers
       ]);
   }
}
