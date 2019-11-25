<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MitraController extends Controller
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
        return view('mitra.dashboard');
    }

    public function edit(){
        return view('mitra.edit');
    }

    public function konfirmasi(){
        return view('mitra.konfirmasi');
    }

}
