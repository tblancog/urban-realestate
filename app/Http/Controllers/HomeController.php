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
        $items = Building::all();
        $items = [];
        return view('index', compact('items'));
    }
}
