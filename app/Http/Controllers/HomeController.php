<?php

namespace App\Http\Controllers;

use App\Models\Bussines;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $bussines = Bussines::all();
        return view('layouts.admin.dashboard', compact('bussines'));
    }
}
