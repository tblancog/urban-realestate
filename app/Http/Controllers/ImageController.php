<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use Image;

class ImageController extends Controller
{
     public function upload(Request $request)
    {
        if (count($request->images) > 0) {
            
          // get property id and attach to it
          if($request->type == 'building'){
            
            $property = Building::find($request->id);

          }else{
            
            // $property = Apartment::find($request->id);
          }

          $image_path = "properties/".$property->slug;
          $image_path_thumbnail = "$image_path/thumbnail_";

          foreach ($request->images as $k => $image) {
            
            $image->storeAs($image_path, "property_$k.".$image->getClientOriginalExtension());
          }
          return response(201);
        
        } 
    }
}
