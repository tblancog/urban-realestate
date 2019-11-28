<?php

namespace App\Http\Controllers\API;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Article::latest()
            ->with('images')
            ->where('section', request()->get('section'))
            ->paginate(6);
    }

    public function ArticleList()
    {

        return Article::orderBy('title')
            ->get(['id', 'title as label']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $article = Article::create($request->all());
        return ['message' => 'Obra creada', 'id' => $article->id];
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($articleId)
    {
        $article = Article::find($articleId);
        return $article;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        return ['message' => 'Obra actualizada', 'id' => $article->id];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($item)
    {
        // Get model
        $item = Article::where('slug', $item->slug)->firstOrFail();

        // Delete the model
        $itemDeleted = $item->delete();

        return response()->json(
            ['message' => ($itemDeleted ? 'Item deleted' : 'Could not delete item')]
        );
    }

}
