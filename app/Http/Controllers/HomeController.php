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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()["Role"] == 1) {
            return view('layouts.personnels.personnelsHome');
        }
       
    if (auth()->user()["Role"] == 2) {
        return view('layouts.eleves.Home');
    }
    
if (auth()->user()["Role"] == 3) {
    return view('layouts.profs.profsHome');
}
}



}
