<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use  App\Slider;
use  App\Article;
use Illuminate\Support\Facades\Mail;
use App\Mail\HousesInquiry;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class HouseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::orderBy('index')->where('section', 'houses')->get();
        $items = House::latest()
            ->with('images')
            ->paginate(6);

        $articles = Article::latest()
            ->where('section', 'houses')
            ->with('images')
            ->take(4)
            ->get();
        return view('houses.index', ['items'=> $items,
                                     'slides'=> $slides,
                                     'articles'=> $articles,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\House  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
      return view('houses.show', compact('house'));
    }

    public function mail(Request $request) {

    $user = collect($request->except('_token'));
    Mail::to( 'info@urbanhouses.com.ar', 'Info')
            ->send(new HousesInquiry($user));

    return Redirect::to(URL::previous() . "#contacto")
                        ->with('success', 'Gracias por contactarte con nosotros, respondemos a la brevedad')->with('success', 'Gracias por contactarte con nosotros, respondemos a la brevedad');

    }
}
