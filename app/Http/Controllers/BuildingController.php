<?php

namespace App\Http\Controllers;

use App\Building;
use App\Amenity;
use Illuminate\Http\Request;
use App\Http\Requests\BuildingRequest;

class BuildingController extends Controller
{

  public function index(){
    
    $buildings = Building::latest()->paginate(5);
    return view('investments',compact('buildings'));
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
      return view('detail-building', compact('building'));
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
}
