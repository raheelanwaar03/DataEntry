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


}
