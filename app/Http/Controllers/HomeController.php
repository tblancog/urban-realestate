<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                            ->take(4)
                            ->get();

        $apartments = Apartment::latest()
                            ->with('images')
                            ->paginate(9);

        // All Locations
        $locations = Building::groupBy('location')
                              ->orderBy('location')
                              ->get(['location']);

        return view('index', ['buildings'=> $buildings,
                              'apartments'=> $apartments,
                              'slides'=> $slides,
                              'locations'=> $locations,
        ]);
    }

    public function staticPage(Request $request)
    {

      $page = str_replace('/', '', $request->getRequestUri());
      $config = Config::where('module', $page)
                      ->get()
                      ->pluck('value', 'key');
      if (in_array($page, ['appraisals', 'credits', 'contact']))
      {
        return view('contact', compact('config'));
      }
      elseif (in_array($page, ['investments'])) {

        $buildings = Building::where('is_featured', true)
                            ->latest()
                            ->with('images')
                            ->paginate(5);
        return view('investments',
                    compact('config'), compact('buildings')
        );
      }
      return view($page);
    }

    public function dashboard(){
      return view('dashboard');
    }

    public function search(Request $request){

      $apartments = Apartment::filterByRequest($request)->paginate();
    //   dd($apartments);
      return view('search', [
        'apartments'=> $apartments,
        'input'=> $request
      ]);
    }
}
