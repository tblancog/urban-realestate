<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Apartment;
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
        $featured = Apartment::where('is_featured', true)
                            ->latest()
                            ->with('images')
                            ->take(3)
                            ->get();

        $others = Apartment::where('is_featured', false)
                            ->latest()
                            ->with('images')
                            ->take(9)
                            ->get();

        return view('index', ['featured'=> $featured, 
                              'others'=> $others, 
        ]);
    }
}
