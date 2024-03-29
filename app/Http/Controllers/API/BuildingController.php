<?php

namespace App\Http\Controllers\API;

use App\Building;
use App\Amenity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BuildingRequest;


class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Building::latest()
            ->with('images')
            ->with(['amenities' => function ($q) {
                $q->select('amenities.id as id', 'amenities.title');
            }])->paginate(5);
    }

    public function buildingList()
    {

        return Building::orderBy('title')
            ->get(['id', 'title as label']);
    }

    public function buildingAmenities($id)
    {
         return Building::find($id)->amenities;
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
        $building->amenities()->sync($request->amenities);

        return ['message' => 'Edificio creado', 'id' => $building->id];
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show($buildingId)
    {
        $building = Building::with('amenities')->find($buildingId);
        return $building;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(BuildingRequest $request, Building $building)
    {
        $building->update($request->all());
        $building->amenities()->sync($request->amenities);
        return ['message' => 'Edificio actualizado', 'id' => $building->id];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy($item)
    {
        // Get model
        $item = Building::where('slug', $item->slug)->firstOrFail();

        // Delete pictures folder if any
        \Storage::deleteDirectory($item->img_path);

        // Delete the model
        $itemDeleted = $item->delete();

        return response()->json(
            ['message' => ($itemDeleted ? 'Item deleted' : 'Could not delete item')]
        );
    }
}
