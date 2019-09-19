@extends('layouts.front')

@section('content')
<div class="articles-page">
    <div class="container">
        <h1>Noticias</h1>
        @foreach ($items as $item)
            <div class="col-lg-6">
                <h2>{{ $item->title }}</h2>
                <div class="row">
                    <div class="col-lg-6">
                    <a href="{{ route('articles.show', $item->slug) }}"></a>
                        <img src="{{ count($item->images) > 0 ? asset($item->images->first()->url) : '' }}" alt="">
                    </div>
                    <div class="col-lg-6 p-0">
                        <h3>{{ $item->created_at->format('M d, Y') }}</h3>
                        <p class="subset p-0">{{ substr($item->description, 0, 200) }}</p>
                        <div class="row">
                            <a href="{{ route('articles.show', $item->slug) }}">Leer más </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@include('partials.front-footer')

@endsection
