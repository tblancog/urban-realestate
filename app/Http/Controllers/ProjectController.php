<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Slider;
use App\Article;
use Illuminate\Support\Facades\Mail;
use App\Mail\DevelopersInquiry;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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
        $articles = Article::latest()
            ->where('section', 'houses')
            ->with('images')
            ->take(4)
            ->get();

        return view('developers.index', ['items'=> $items,
                                         'slides'=> $slides,
                                         'articles'=> $articles
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

    public function mail(Request $request) {

        $user = collect($request->except('_token'));
        Mail::to( 'info@urbandevelopers.com.ar', 'Info')
              ->send(new DevelopersInquiry($user));

        return Redirect::to(URL::previous() . "#contacto")
                         ->with('success', 'Gracias por contactarte con nosotros, respondemos a la brevedad')->with('success', 'Gracias por contactarte con nosotros, respondemos a la brevedad');

    }
}
