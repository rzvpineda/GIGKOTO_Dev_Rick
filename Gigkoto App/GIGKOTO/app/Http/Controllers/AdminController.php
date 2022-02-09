<?php

namespace App\Http\Controllers;
use App\Models\jobposting;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminverication(){
        $contract = jobposting::where('ContractStatus', '=', 'PendingVerification')->get();
        $downpayment = jobposting::where('GTSDownpaymentStatus', '=', 'PendingVerification')->get();
        $balance = jobposting::where('GTSBalanceStatus', '=', 'PendingVerification')->get();
        $gtpayment = jobposting::where('GTSBalanceStatus', '=', 'Verified')->get();
        return view('adminverification',[
            'contract'=>$contract,
            'downpayment'=>$downpayment,
            'balance'=>$balance,
            'gtpayment'=>$gtpayment,
        ]);
    }
}
