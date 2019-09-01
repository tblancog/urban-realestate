<?php

namespace App\Http\Controllers\API;

use App\Apartment;
use App\Amenity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApartmentRequest;
use App\ApartmentFeature;
use Faker\Factory;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // The array we're going to return
        $data = [];
        $apartments = Apartment::latest()
                ->with('images')
                ->with('building')
                ->with('features')
                ->paginate(10);
        return $apartments;
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

        $input = collect($request->input());

        $building_id = $request->input('building_id');
        $input->put('building_id', $building_id);

        $apartment = Apartment::create($input->toArray());

        // Bind features
        $additionalFeatures = collect($request->input('additionalFeatures'));
        $roomFeatures = collect($request->input('roomFeatures'));
        $features = $additionalFeatures->merge($roomFeatures);

        // Remove blanks
        $features = array_filter($features->toArray(), function($item) {
            return $item['title'] !== null;
        });
        if( !empty($features) ) {
            $apartment->features()->createMany($features);
        }

      return response()->json(['message' => 'Departmento creado', 'id'=> $apartment->id], 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show($apartment)
    {
        return $apartment;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(ApartmentRequest $request, $apartment)
    {
        $apartment->update($request->all());

        // Bind features
        $additionalFeatures = collect($request->input('additionalFeatures'));
        $roomFeatures = collect($request->input('roomFeatures'));
        $features = $additionalFeatures->merge($roomFeatures);

        // Remove blanks
        $features = array_filter($features->toArray(), function($item) {
            return $item['title'] !== null;
        });
        if( !empty($features) ) {
            $apartment->features()->delete();
            $apartment->features()->createMany($features);
        }

        return response()->json(['message' => 'Departamento actualizado', 'id'=> $apartment->id], 200);

    }

    /**
     * Clone existing resource
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function clone($id)
    {
        $apartment = Apartment::find($id);
        $clone = $apartment->duplicateApartament();
        return $clone;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy($apartment)
    {
        $item = Apartment::where('slug', $apartment->slug)->first();

        $item->delete();
        return ['message' => 'Apartment deleted'];
    }
}
