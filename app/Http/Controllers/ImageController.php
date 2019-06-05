<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;

class ImageController extends Controller
{
     public function upload(Request $request)
    {
        if (count($request->images)) {
          
          // get property id and attach to it
          if($request->type == 'building'){
            $property = Building::find($request->id);
          }

            foreach ($request->images as $image) {
                
                // $property;
                $image->store('images');
            }
        }
        return response()->json([
            "message" => "Done"
        ]);
    }
}
