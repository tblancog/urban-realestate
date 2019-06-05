<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
     public function upload(Request $request)
    {
        if (count($request->images)) {
            foreach ($request->images as $image) {

                // get property id and attach to it
                $image->store('images');
            }
        }
        return response()->json([
            "message" => "Done"
        ]);
    }
}
