<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\admin\PaymentPageText;
use App\Models\auth\UserPayment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function registerationFees()
    {
        $paymentText = PaymentPageText::where('status',1)->get();
        return view('auth.payment',compact('paymentText'));
    }

    public function paymentStore(Request $request)
    {
        $validated = $request->validate([
            'easypaisaName' => 'required',
            'easypaisaNum' => 'required',
            'tid' => 'required',
        ]);

        $userPayment = new UserPayment();
        $userPayment->user_id = auth()->user()->id;
        $userPayment->easypaisaName = $validated['easypaisaName'];
        $userPayment->easypaisaNum = $validated['easypaisaNum'];
        $userPayment->tid = $validated['tid'];
        $userPayment->save();
        return redirect()->route('Verification.Page');

    }

    public function verificationPage()
    {
        return view('auth.verification');
    }

}
