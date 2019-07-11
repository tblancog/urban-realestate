<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;


class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::latest()->paginate(5);
        return view('index', compact('apartments'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
      return view('apartment.show', compact('apartment'));
    }
}
