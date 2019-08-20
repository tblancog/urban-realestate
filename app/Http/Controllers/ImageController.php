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
    if ($request->images && count($request->images) > 0) {

      // Create new directory
      $image_path = $property->img_path;
      \Storage::makeDirectory($image_path);

      collect($request->images)->each(function($img, $index) use ($property, $request, $image_path, $propertyImg, $foreign) {

        // Get extension and make filename
        $ext= $img->getClientOriginalExtension();
        $id = uniqid();
        $filename = $request->type."_$id.$ext";
        \Image::make($img)
              ->fit(config('images.properties_width'), config('images.properties_height'))
              ->save("$image_path/$filename");

        $obj = $propertyImg->create([ $foreign => $request->id,
                                      'filename'=> $filename,
                                      'order'=> $index ]);

        $property->images()->save($obj);
      });
    }

    // If title has been updated then rename the whole folder
    // if( isset($property->images) && count($property->images) > 0
    //     && ($request->selected_slug !== $property->slug)
    //     && $request->action === 'edit') {
    //   $old = config('images.properties_upload_path').$request->selected_slug;
    //   $new = config('images.properties_upload_path').$property->slug;
    //   \Storage::move( $old, $new );
    // }
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
