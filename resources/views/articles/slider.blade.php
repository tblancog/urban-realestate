<div class="container text-center my-3">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">

                @foreach( $articles as $idx => $article)
                @continue( empty($article->images->first()) )

                <div class="carousel-item {{ $idx === 0 ? 'active' : '' }}">
                    <img class="d-block col-4 img-fluid"
                        src="{{ $article->images->first() ? $article->images->first()->path : '' }}"/>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
