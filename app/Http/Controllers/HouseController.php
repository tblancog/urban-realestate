<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use  App\Slider;

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
        return view('houses.index', ['items'=> $items,
                                     'slides'=> $slides
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
}
