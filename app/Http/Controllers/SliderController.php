<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;

class SliderController extends Controller
{
    public function save(Request $request){
      
      if( count($request->input()) > 0 ){

        // Delete all first
        Slider::truncate();
        collect($request->input())->each(function($req, $idx){
          Slider::create([
            'index'=> $idx,
            'title'=> $req['title'],
            'subtitle'=> $req['subtitle'],
            ]);
            
          });

        return response()->json('OK', 201);
      }
      return response()->json('Bad request', 400);
    }
      
    public function upload(Request $request){

      $files = $request->file('attachments');
      if(count($files) > 0){
        
          $this->validate($request, [
              'attachments.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2000'
          ],
          [
              'attachments.*.required' => 'Please upload an image',
              'attachments.*.mimes' => 'Only jpeg,jpg,png images are allowed',
              'attachments.*.max' => 'Sorry! Maximum allowed size for an image is 2MB',
          ]
        
        );
          
        
        collect($files)->each(function($img, $idx){
          
            $ext= $img->getClientOriginalExtension();
            $filename = "slide_$idx.$ext";
            $img= Image::make($img);
            $img->fit(1140)
                ->save("images/slides/$filename");
            Slider::where('index', $idx)
                    ->update(['filename'=> $filename]);
          });
        
      }
    }

    public function getApiSliders(){
      // Get base64 
      $sliders = Slider::orderBy('index')->get();

      return response()->json(compact('sliders'), 200);
    }
}
