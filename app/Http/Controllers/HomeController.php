<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function web()
    {
        return view('page.web');
    }

    public function landing()
    {
        return view('page.landing');
    }

    public function dropshiping()
    {
        return view('page.dropshiping');
    }

    public function portal()
    {
        return view('page.portal');
    }
}
