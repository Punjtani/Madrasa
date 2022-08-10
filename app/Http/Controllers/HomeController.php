<?php

namespace App\Http\Controllers;

use App\Models\Update;
use App\Models\Carousel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $updates = Update::all();
        $carousel =  Carousel::all();
        return view('main',compact('updates','carousel'));
    }
}
