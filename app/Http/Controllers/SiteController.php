<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }
	
	public function contactus()
    {
        return view('site.services');
    }

    public function contactus()
    {
        return view('site.contactus');
    }

    public function site()
    {
        return view('layouts.site');
    }
}
