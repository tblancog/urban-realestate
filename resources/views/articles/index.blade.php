@extends('layouts.front')

@section('content')
<div class="articles-page">
    <div class="container">
        <div class="row">
            <h1>Noticias</h1>
        </div>
        <div class="row py-5">
        @foreach ($items as $item)
            <div class="col-lg-6 my-4">
                <a href="{{ route('articles.show',  ['article'=> $item->slug,
                                                      'section'=> $item->section ]) }}">
                    <h2>{{ $item->title }}</h2>
                </a>
                <div class="row">
                    <div class="col-lg-7">
                    <a href="{{ route('articles.show',  ['article'=> $item->slug,
                                                         'section'=> $item->section ]) }}">
                        <img style="height: 300px;" src="{{ count($item->images) > 0 ? $item->images->first()->path : '' }}" alt="">
                    </a>
                    </div>
                    <div class="col-lg-5 p-0">
                        <h3 class="date">{{ $item->created_at->format('M d, Y') }}</h3>
                        <p class="subset p-0">{{ ( strlen($item->description) > 300) ? substr($item->description, 0, 300).'...' : $item->description }}</p>
                        <div class="col-lg-12 p-0">
                            <a class="link" href="{{ route('articles.show', ['article'=> $item->slug,
                                                                             'section'=> $item->section ]) }}">Leer más </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row  pull-right mrb-3 paginadoHome">
            <div class="col-lg-1">{{ $items->links() }}</div>
        </div>

    </div>
</div>
@include('partials.front-footer')

@endsection
