@extends('layouts.front')

@section('content')
<div class="articles-page">
    <div class="container">
        <h2>{{ $article->title }}</h2>
        <h3>{{ $article->created_at->format('M d, Y') }}</h3>
        <div class="row">
            <div class="col-lg-12">
                <p>{!! nl2br($article->description) !!} </p>
            </div>
        </div>
        <div class="row py-2">
          <div class="col-lg-12 p-2">
          Fuente: <a href="{{ $article->source }}" target="_blank">{{ $article->source }}</a>
          </div>
        </div>
        <div class="row py-2">
            @foreach ($article->images as $image)
            <div class="col-lg-12 p-2">
                <img class="img-fluid" src="{{ asset($image->path) }}" alt="" />
            </div>
            @endforeach
        </div>
        <div class="row my-5">
          <div class="col-lg-12 my-5">
          <a href="{{ route('articles.index', [ 'section'=>request()->input('section')]) }}">Volver</a>
          </div>
        </div>
    </div>
</div>
@include('partials.front-footer')

@endsection
