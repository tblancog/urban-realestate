<?php

namespace App\Http\Controllers\API;

use App\Apartment;
use App\Amenity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApartmentRequest;


class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Apartment::latest()
                ->with('images')
                ->paginate(5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApartmentRequest $request)
    {
      $input = collect($request->input())
                              ->except('buildings', 'amenities', 'building_id');
      
      $building_id = $request->input('building_id')['id'];
      $input->put('building_id', $building_id);

      $apartment = Apartment::create($input->toArray());
      $apartment->amenities()->sync(
        Amenity::whereIn('title', $request->amenities)->get()
      );
      
      return response()->json(['message' => 'Departmento creado', 'id'=> $apartment->id], 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show($building)
    {
        return $building;
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
    public function destroy($building)
    {
        $item = Building::where('slug', $building->slug)->first();

        $item->delete();

        return ['message' => 'Building deleted'];
    }
}
