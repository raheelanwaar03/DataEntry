<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        $users = User::get();
        return view('admin.Dashboard.allUser',compact('users'));
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

}
