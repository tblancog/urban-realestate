<?php

namespace App\Http\Controllers;

use App\Building;
use App\Amenity;
use App\Config;
use Illuminate\Http\Request;
use App\Http\Requests\BuildingRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\BuildingInquiry;


class BuildingController extends Controller
{

  public function index(){

    $buildings = Building::latest()->paginate(5);
    $config = Config::where('module','investments')->get()->pluck('value', 'key');
    return view('index', ['buildings'=> $buildings,
                               'config'=> $config] );
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuildingRequest $request)
    {
        $building = Building::create($request->all());
        $building->amenities()->sync(
          Amenity::whereIn('title', $request->amenities)->get()
        );

        return ['message' => 'Edificio creado', 'id'=> $building->id];
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
      return view('building.show', compact('building'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(BuildingRequest $request, $id)
    {
        $building = Building::findOrFail($id);
        $building->update($request->all());
        return ['message' => 'Edificio actualizado'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Building::findOrFail($id);

        $item->delete();

        return ['message' => 'Building deleted'];
    }
    
    public function mail(Request $request, Building $building) {

        $user = collect($request->except('_token'));
        Mail::to( 'info@urbanrealestate.com.ar', 'Info')
              ->send(new BuildingInquiry($building, $user));

        return back()->with('success', 'Gracias por contactarte con nosotros, respondemos a la brevedad');
    }
}
