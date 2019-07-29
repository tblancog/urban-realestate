<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use App\Apartment;
use App\BuildingImage;
use App\ApartmentImage;

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
           
      
      // Create new directory
      \Storage::makeDirectory(config('images.properties_upload_path').$property->slug);
      $image_path = config('images.properties_upload_path').$property->slug;

      collect($request->images)->each(function($img, $idx) use ($property, $request, $image_path) {

        // Get extendsion and make filename
        $ext= $img->getClientOriginalExtension();
        $filename = $request->type."_$idx".".".$ext;
        \Image::make($img)
              ->fit(config('images.properties_width'), config('images.properties_height'))
              ->save("$image_path/$filename");

        $img_input = ['filename'=> $filename, 
                      'order'=> $idx,
                    ];
        $property->images()->create($img_input);
      });
    } 
    return response()->json(['msg'=> 'Success'], 201);
  }
  
  public function destroyApartmentImage($id) {
    $img = ApartmentImage::findOrFail($id);
    $result = false;
    if($img) {
      $result = \Storage::delete($img->path) && $img->delete();
    }
    return response()->json(['msg'=> 'Delete', compact('result')], 202);
  }
}
