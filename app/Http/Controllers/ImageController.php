<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApartmentImage;
use App\BuildingImage;
use App\HouseImage;
use App\ProjectImage;
use App\ArticleImage;

class ImageController extends Controller
{
  public function upload(Request $request)
  {
      $property = resolve('App\\'.ucwords($request->type))
                        ::find($request->id);
      $propertyImg =  resolve(get_class($property).'Image');
      $foreign = $request->type.'_id';

    if ($request->images && count($request->images) > 0) {

      // Create new directory
    $image_path = $property->img_path;
    if(!\File::exists($image_path)) {
        // path does not exist
        \Storage::makeDirectory($image_path);
    }

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
      return response()->json(['msg'=> 'Delete', compact('result')], 202);
    }
    return response()->json(['msg'=> 'Delete failed', compact('result')], 500);
  }

  public function destroyHouseImage($id) {
    $img = HouseImage::findOrFail($id);
    $result = false;
    if($img) {
      $result = \Storage::delete($img->path) && $img->delete();
      return response()->json(['msg'=> 'Delete', compact('result')], 202);
    }
    return response()->json(['msg'=> 'Delete failed', compact('result')], 500);
  }

  public function destroyProjectImage($id) {
    $img = ProjectImage::findOrFail($id);
    $result = false;
    if($img) {
      $result = \Storage::delete($img->path) && $img->delete();
      return response()->json(['msg'=> 'Delete', compact('result')], 202);
    }
    return response()->json(['msg'=> 'Delete failed', compact('result')], 500);
  }

  public function destroyArticleImage($id) {
    $img = ArticleImage::findOrFail($id);
    $result = false;
    if($img) {
      $result = \Storage::delete($img->path) && $img->delete();
      return response()->json(['msg'=> 'Delete', compact('result')], 202);
    }
    return response()->json(['msg'=> 'Delete failed', compact('result')], 500);
  }
}
