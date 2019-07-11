<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Apartment;
use  App\Building;
use  App\Slider;
use  App\Config;
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
        $slides = Slider::orderBy('index')->get();

        $buildings = Building::where('is_featured', true)
                            ->latest()
                            ->with('images')
                            ->take(2)
                            ->get();

        $apartments = Apartment::latest()
                            ->with('images')
                            ->take(9)
                            ->get();

        return view('index', ['buildings'=> $buildings, 
                              'apartments'=> $apartments, 
                              'slides'=> $slides, 
        ]);
    }

    public function staticPage(Request $request)
    {

      $page = str_replace('/', '', $request->getRequestUri());
      $config = Config::where('module', $page)
                      ->get()
                      ->pluck('value', 'key');
      if (in_array($page, ['investments', 'appraisals', 'credits', 'contact']))
      {
        return view('contact', compact('config'));
      }
      return view($page);
    }

    public function dashboard(){
      return view('dashboard');
    }
}
