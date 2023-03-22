<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\auth\UserPayment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function registerationFees()
    {
        return view('auth.payment');
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
        return redirect()->route('Welcome');

    }

    public function verificationPage()
    {
        return view('auth.verification');
    }

}
