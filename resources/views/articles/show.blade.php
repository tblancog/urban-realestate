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
            @foreach ($article->images as $image)
            <div class="col-lg-4 p-2">
                <img class="img-fluid" src="{{ asset($image->path) }}" alt="" />
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('partials.front-footer')

@endsection
