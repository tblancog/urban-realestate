<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;

class SliderController extends Controller
{
  private $path = '';
  public function __construct(){
    $this->path = config('images.slider_path')."/";
  }
    public function save(Request $request){
      
      if( count($request->input()) > 0 ){

        // Delete all first
        collect($request->input())->each(function($req, $idx){
          Slider::updateOrCreate(
            ['index'=> $idx ],
            ['title'=> $req['title'], 'subtitle'=> $req['subtitle'] 
            ]);
            
          });

        return response()->json(['msg'=> 'OK'], 201);
      }
      return response()->json(['msg'=> 'Bad request'], 400);
    }
      
    public function upload(Request $request){

      $files = $request->file('attachments');
      if($files && count($files) > 0){
        
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
            $this->path.="/$filename";
            $img= Image::make($img);
            $img->fit(config('images.slider_width'))
                ->save($this->path);

            // Base64
            $type = pathinfo($this->path, PATHINFO_EXTENSION);
            $data = file_get_contents($this->path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

            Slider::where('index', $idx)
                ->update(['filename'=> $filename, 
                          'base64img'=> $base64 ]);
        });
        
      }
    }

    public function getApiSliders(){
      // Get base64 
      $path = $this->path;
      $sliders = Slider::orderBy('index')
                  ->get()->transform(
                    function($item) use ($path) {
                      
                      $path .= $item->filename;
                      // Base64
                      $type = pathinfo($path, PATHINFO_EXTENSION);
                      $data = file_get_contents($path);
                      $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                      $item->base64img = $base64;
                      return $item;
                    }
                  );
      return response()->json(compact('sliders'), 200);
    }

    public function deleteSlide($idx){

      $slide = Slider::where('index', $idx )
                      ->first();
      $file = $this->path.$slide->filename;
      if(\Storage::exists($file) && $slide){
        \Storage::delete($file);
        $slide->delete();
      }

      return response()->json(['msg'=> 'Deleted'], 200);
          


    }

}
