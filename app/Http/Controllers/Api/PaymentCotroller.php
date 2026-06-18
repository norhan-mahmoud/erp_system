<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Payments\PaymentService;
use Illuminate\Http\Request;

class PaymentCotroller extends Controller
{
    public function __construct(private PaymentService $payment){

    }

    public function pay(string $getway,Request $request){
        $this->payment->pay($getway,$request);
    }
    
    public function calback($request){


    }
}
