<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use  App\Slider;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::orderBy('index')->where('section', 'developers')->get();
        // dd(asset($slides->first()->path));
        $items = Project::latest()
            ->with('images')
            ->paginate(6);
        return view('developers.index', ['items'=> $items,
                                         'slides'=> $slides
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
      return view('developers.show', compact('project'));
    }
}
