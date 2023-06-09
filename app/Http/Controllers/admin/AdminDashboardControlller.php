<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Limite;
use App\Models\admin\PaymentPageText;
use App\Models\admin\VerificationText;
use App\Models\User;
use Illuminate\Http\Request;


class AdminDashboardControlller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function allUser()
    {
        $users = User::with('trxIds')->get();
        return view('admin.Dashboard.user.allUser',compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status','pending')->with('trxIds')->get();
        return view('admin.Dashboard.user.pending',compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status','rejected')->with('trxIds')->get();
        return view('admin.Dashboard.user.rejected',compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status','approved')->with('trxIds')->get();
        return view('admin.Dashboard.user.approved',compact('users'));
    }

    // User account action

    public function approveUser($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success','User Account approved successfully');
    }

    public function rejectedUser($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success','User Account rejected successfully');
    }

    public function pendingUser($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success','User Account pending successfully');
    }

    // All Settings

    // admin can set referal limite

    public function referalLimite()
    {
        $limite = Limite::where('status',1)->get();
        return view('admin.settings.referalLimite',compact('limite'));
    }

    public function storeLimite(Request $request)
    {
        $validated = $request->validate([
            'min' => 'required',
            'max' => 'required',
            'referal_commission' => 'required',
        ]);

        $limite = new Limite();
        $limite->min = $validated['min'];
        $limite->max = $validated['max'];
        $limite->referal_commission = $validated['referal_commission'];
        $limite->save();
        return redirect()->back()->with('success','Limite applied successfully');
    }

    public function editLimite($id)
    {
        $limite = Limite::find($id);
        return view('admin.settings.editReferal',compact('limite'));
    }

    public function updateLimite(Request $request,$id)
    {
        $limite = Limite::find($id);

        $limite->min = $request->min;
        $limite->max = $request->max;
        $limite->referal_commission = $request->referal_commission;
        $limite->save();
        return redirect()->route('Admin.Set.Limite')->with('success','Limite updated');
    }

    public function paymentText()
    {
        $paymentText = PaymentPageText::where('status',1)->get();
        return view('admin.settings.paymentText',compact('paymentText'));
    }

    public function storePaymentText(Request $request)
    {
        $validated = $request->validate([
            'text' => 'required',
            'holder' => 'required',
            'account_num' => 'required',
        ]);

        $paymentText = new PaymentPageText();
        $paymentText->text = $validated['text'];
        $paymentText->holder = $validated['holder'];
        $paymentText->account_num = $validated['account_num'];
        $paymentText->save();
        return redirect()->back()->with('success','Details Added successfully');
    }

    public function editPaymentText($id)
    {
        $paymentText = PaymentPageText::find($id);
        return view('admin.settings.editText',compact('paymentText'));
    }

    public function updatePaymentText(Request $request,$id)
    {
        $paymentText = PaymentPageText::find($id);

        $paymentText->text = $request->text;
        $paymentText->holder = $request->holder;
        $paymentText->account_num = $request->account_num;
        $paymentText->save();
        return redirect()->route('Admin.Payment.Page.Text')->with('success','Details Updated Successfully');
    }

    public function verificationPage()
    {
        $verificationText = VerificationText::where('status',1)->get();
        return view('admin.settings.verificationText',compact('verificationText'));
    }

    public function storeVerificationPage(Request $request)
    {
        $validated = $request->validate([
            'text' =>'required',
        ]);

        $verificationText = new VerificationText();
        $verificationText->text = $validated['text'];
        $verificationText->save();
        return redirect()->back()->with('success','Verification Text Added Successfully');
    }

    public function editVerificationPage($id)
    {
        $verificationText = VerificationText::find($id);
        return view('admin.settings.editVerification',compact('verificationText'));
    }

    public function updateVerificationPage(Request $request,$id)
    {
        $verificationText = VerificationText::find($id);

        $verificationText->text = $request->text;
        $verificationText->save();
        return redirect()->route('Admin.Verification.Page.Text')->with('success','Text Updated Successfully');
    }

}
