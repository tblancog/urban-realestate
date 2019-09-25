<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Article::latest()
            ->where('section', request()->get('section'))
            ->with('images')
            ->paginate(12);
        return view('articles.index', ['items'=> $items->appends( ['section'=> request()->get('section')])]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
      return view('articles.show', compact('article'));
    }
}
