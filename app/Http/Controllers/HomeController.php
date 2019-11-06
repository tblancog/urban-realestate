<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Apartment;
use App\Building;
use App\Slider;
use App\Config;
use Illuminate\Support\Facades\Mail;
use App\Mail\DefaultInquiry;


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
        $slides = Slider::orderBy('index')->where('section', 'real-estate')->get();

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

        return view('real-estate.index', ['buildings'=> $buildings,
                                        'apartments'=> $apartments,
                                        'slides'=> $slides,
                                        'locations'=> $locations,
        ]);
    }

    public function staticPage(Request $request)
    {

      $page = explode('/', $request->getRequestUri());
      $page = $page[ count($page) - 1 ];
      $config = Config::where('module', $page)
                      ->get()
                      ->pluck('value', 'key');
      if (in_array($page, ['appraisals', 'credits', 'contact']))
      {
        return view('real-estate.contact', compact('config'));
      }
      elseif (in_array($page, ['investments'])) {

        $buildings = Building::where('is_featured', true)
                            ->latest()
                            ->with('images')
                            ->paginate(5);
        return view('real-estate.investments',
                    compact('config'), compact('buildings')
        );
      }
      return view("real-estate.$page");
    }

    public function dashboard(){
      return view('dashboard');
    }

    public function search(Request $request){

      $apartments = Apartment::filterByRequest($request)->paginate(6);
      return view('real-estate.search', [
        'apartments'=> $apartments,
        'input'=> $request
      ]);
    }

    public function mail(Request $request) {

        $user = collect($request->except('_token'));
        Mail::to( 'info@urbanrealestate.com.ar', 'Info')
              ->send(new DefaultInquiry($user));

        return back()->with('success', 'Gracias por contactarte con nosotros, respondemos a la brevedad');
    }
}
