<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageCotroller extends Controller
{
    public function index()
    {
        return view('LandingPage.index');
    }

    public function contactUs()
    {
        return view('LandingPage.contact');
    }

    public function aboutUs()
    {
        return view('LandingPage.about');
    }

}
