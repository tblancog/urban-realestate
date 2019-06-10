<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Building;
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
        $featured = Building::where('is_featured', true)
                            ->latest()
                            ->take(3)
                            ->get();

        $others = Building::where('is_featured', false)
                            ->latest()
                            ->take(9)
                            ->get();

        return view('index', ['featured'=> $featured, 
                              'others'=> $others, 
        ]);
    }
}
