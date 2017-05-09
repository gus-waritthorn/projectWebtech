<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ExchangeVoucher;
use DB;
use Auth;

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
      $email = Auth::user()->email;
       $vouchers =  DB::table('exchangeVoucher')->where('email', $email)->get();

       return view('my-voucher', [
         'vouchers' => $vouchers
       ]);
   }
}
