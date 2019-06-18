<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\BuildingImage;

class ImageController extends Controller
{
  public function upload(Request $request)
  {
    if($request->type == 'building'){
      
      $property = Building::find($request->id);
    }else{
      
      $property = Apartment::find($request->id);
    }

    if (count($request->images) > 0) {
            
          $image_path = "public/properties/".$property->slug."/";
          foreach ($request->images as $k => $image) {
            $filename = "property_$k".".".$image->getClientOriginalExtension();
            $image->storeAs($image_path, $filename);

            $img_input = ['filename'=> $filename, 
                          'path'=> $image_path,
                          'order'=> $k,
                        ];
            $property->images()->create($img_input);
          }
          return response(201);
    } 
  }
}
