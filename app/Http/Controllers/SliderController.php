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
            ['title'=> $req['title'],
            'subtitle'=> $req['subtitle'],
            'section'=> $req['section']
            ]);

          });

        return response()->json(['msg'=> 'OK'], 201);
      }
      return response()->json(['msg'=> 'Bad request'], 400);
    }

    public function upload(Request $request){
        $image = $request->file('attachments');
        $slide = json_decode($request->slide);
        $idx = $request->index;

        $this->validate($request, [
            'attachments.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2000'
        ],
        [ 'attachments.*.required' => 'Please upload an image',
        'attachments.*.mimes' => 'Only jpeg,jpg,png images are allowed',
        'attachments.*.max' => 'Sorry! Maximum allowed size for an image is 2MB' ]
    );

        $ext = $image->getClientOriginalExtension();
        $id = uniqid();
        $filename =  "slide_$id.$ext";
        $image_path = config('images.slider_path');

        \Image::make($image)
            ->fit(config('images.properties_width'), config('images.properties_height'))
            ->save($image_path.$filename);

            $slider = Slider::updateOrCreate(
                        [ 'index'=> $idx,
                          'section'=> $slide->section ],

                        [ 'filename' => $filename,
                          'title' =>  $slide->title,
                          'link' =>  $slide->link,
                          'subtitle' =>  $slide->subtitle,
                          'section'=> $slide->section
                        ]
            );
        return response()->json(['msg' => 'Updated'], 204);
    }

    public function getApiSliders(Request $request){
      $sliders = Slider::where('section', $request->get('section', 'real-estate'))
                                ->orderBy('index')->get();
      return response()->json(compact('sliders'), 200);
    }

    public function deleteSlide($id){
        Slider::find($id)->delete();
        return response()->json(['msg'=> 'Deleted'], 200);
    }

}
