@extends('layouts.front')

@section('content')
<!-- Preloader -->

<div id="preloader">
    <div class="south-load"></div>
</div>

@include('partials.front-header')

<section class="container">
  <div class="row">
      <div class="col-12">
          <div class="section-heading wow fadeIn">
              @if($apartments->count())
                <h4 class="my-4">{{ $apartments->count(). " ". Illuminate\Support\Str::plural('Resultado', $apartments->count()) }}
                                  para <span class="font-weight-bold">'@status_show($input->get('status'))'
                                  en <span class="font-weight-bold">'{{ $input->get('location') }}'</span></h4>
              @else
                <h2 class="my-4">{{ $apartments->count() }} Resultados</h2>
                <h3 class="my-4">No se hallaron propiedades</h3>

                      <a href="{{ route('home.index') }}" class="btn south-btn btn-4">Busca de nuevo &nbsp;<i class="fa fa-lg fa-search"></i></a>
              @endif
          </div>
      </div>
  </div>
</section>


{{-- <section id="real-estate" class="featured-properties-area section-padding-0-50">
  <div class="container">
      @forelse ( $apartments as $apartment)
        <div class="row">
          <div class="col-12 col-md-4 col-xl-4">
              <div class="single-featured-property other-properties mb-50 mt-5 wow fadeIn" data-wow-delay="100ms">
                  <!-- Property Thumbnail -->
                  <div class="property-thumb">
                      <a href="{{ route('apartments.show', $apartment->slug) }}">
                          <img src="{{ is_file($apartment->getImgPath($apartment->images[0]->filename)) ?
                                                  $apartment->getImgPath($apartment->images[0]->filename) :
                                                  Faker\Factory::create()->imageUrl($width = 640, $height = 480) }}" alt="">
                      </a>
                  </div>
                  <!-- Property Content -->
                  <div class="property-content">
                      <div class="ribbon ribbon-top-left">
                          <span>{{ $apartment->status }}</span>
                      </div>
                      <div class="other-top">
                          <p class="top-amb">{{ $apartment->rooms }} amb.</p>
                          <div class="top-area">
                              @if($apartment->from_price)
                              <span>Desde </span>
                              @endif
                              USD <b>@convert($apartment->price)</b>
                          </div>
                      </div>
                      <div class="other-bot">
                          <p class="bot-status">{{ $apartment->title }}</p>
                      <p class="bot-address">{{ $apartment->address }}, {{ $apartment->location }}</p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      @empty
      <div class="row">
        <div class="col-12 col-md-6 col-xl-4">
        </div>
      </div>
      @endforelse
  </div>
</section> --}}
@if($apartments)
    <section id="real-estate" class="featured-properties-area section-padding-0-50">
        <div class="container-fluid px-5">
            <div class="row">

                {{-- Apartment box --}}
                @foreach ($apartments as $apartment)
                    @include('apartment.box', $apartment)
                @endforeach
            </div>
        </div>
    </section>
@endif


@include('partials.front-footer')

@endsection
