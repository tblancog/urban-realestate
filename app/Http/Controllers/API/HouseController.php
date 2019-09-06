<?php

namespace App\Http\Controllers\API;

use App\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HouseRequest;


class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return House::latest()
            ->with('images')
            ->paginate(5);
    }

    public function HouseList()
    {

        return House::orderBy('title')
            ->get(['id', 'title as label']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HouseRequest $request)
    {
        $house = House::create($request->all());

        return ['message' => 'Casa creada', 'id' => $house->id];
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show($houseId)
    {
        $house = House::find($houseId);
        return $house;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(HouseRequest $request, House $house)
    {
        $house->update($request->all());
        return ['message' => 'Casa actualizada', 'id' => $house->id];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy($item)
    {
        // Get model
        $item = House::where('slug', $item->slug)->firstOrFail();

        // Delete pictures folder if any
        \Storage::deleteDirectory($item->img_path);

        // Delete the model
        $itemDeleted = $item->delete();

        return response()->json(
            ['message' => ($itemDeleted ? 'Item deleted' : 'Could not delete item')]
        );
    }
}
