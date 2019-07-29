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
      $propertyImg = new BuildingImage();
      $foreign = 'building_id';
    }else{
      $property = Apartment::find($request->id);
      $propertyImg = new ApartmentImage();
      $foreign = 'apartment_id';
    }
    
    if (count($request->images) > 0) {
      
      // Create new directory
      \Storage::makeDirectory(config('images.properties_upload_path').$property->slug);
      $image_path = config('images.properties_upload_path').$property->slug;
      
      collect($request->images)->each(function($img, $idx) use ($property, $request, $image_path, $propertyImg, $foreign) {
        
        // Get extension and make filename
        $ext= $img->getClientOriginalExtension();
        $filename = $request->type."_$idx".".".$ext;
        
        // Check first if image is being used 
        $imgUsed = $propertyImg->where([$foreign => $request->id, 
                                       'filename'=> $filename ])
                              ->select('filename')
                              ->groupBy('filename')
                              ->orderBy('filename', 'desc')
                              ->first();
        // If image already exists then extract image index: building_X.jpg
        if($imgUsed) {
          $idx = explode('_',$imgUsed->filename)[1][0] * 1;
          $idx++;
          $filename = $request->type."_$idx".".".$ext;
        }

        \Image::make($img)
                ->fit(config('images.properties_width'), config('images.properties_height'))
                ->save("$image_path/$filename");


        $obj = $propertyImg->create([ $foreign=> $request->id, 
                                      'filename'=> $filename,
                                      'order'=> $idx]);

        $property->images()->save($obj);
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

  public function destroyBuildingImage($id) {
    $img = BuildingImage::findOrFail($id);
    $result = false;
    if($img) {
      $result = \Storage::delete($img->path) && $img->delete();
    }
    return response()->json(['msg'=> 'Delete', compact('result')], 202);
  }
}
