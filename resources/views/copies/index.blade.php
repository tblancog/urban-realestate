@extends('layouts.front')

@section('content')
<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<!-- ##### Front Header Area Start ##### -->
@include('partials.front-header')
<!-- ##### Front Header Area End ##### -->


<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="single-hero-slide bg-img" style="background-image: url(images/uploads/static/static_1.jpeg);">
        <div class="hero-slides owl-carousel">
            <div class="single-hero-slide bg-img" style="background-image: url(images/uploads/static/static_1.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>EDIFICIO PH UH5</h2>
                                <h4>Una oportunidad para disfrutar de un edificio en una zona estratégica</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(images/uploads/static/static_2.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>EDIFICIO PH UH5</h2>
                                <h4>Moderno y funcional con terraza y parrilla propia. ¡Vení a conocerlo!
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(images/uploads/static/static_3.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>EDIFICIO PH UH5</h2>
                                <h4>Estética y confort en cada detalle. Ameneties para disfrutar en familia y con amigos </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ##### Advance Search Area Start ##### -->
        <div id="search-area" class="south-search-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="advanced-search-form">
                            <!-- Search Title -->
                            <!-- <div class="search-title">
                            <p>Buscador de propiedades</p>
                        </div> -->
                            <!-- Search Form -->
                            <form action="#" method="post" id="advanceSearch">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="operation" placeholder="Comprar">
                                                <option>Venta</option>
                                                <option>Alquiler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="type">
                                                <option>Departamento</option>
                                                <option>Casa</option>
                                                <option>Local</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-4">
                                        <div class="form-group wrapper">
                                            <input type="input" class="form-control location" name="input"
                                                placeholder="Ingrese Zona, Localidad o Provincia" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-2">
                                        <!-- More Filter -->
                                        <!-- <div class="more-filter">
                                        <a href="#" id="moreFilter">+ Más filtros</a>
                                    </div> -->
                                        <!-- Submit -->
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn south-btn btn-4">Buscar &nbsp;<i
                                                    class="fa fa-lg fa-search"></i></button>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-2">
                                        <div class="form-group mb-0">
                                            <button class="btn south-btn">Consultas &nbsp;<i
                                                    class="fa fa-lg fa-envelope"></i></button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Advance Search Area End ##### -->

</section>
<!-- ##### Hero Area End ##### -->



<!-- ##### Propiedades en Venta Area Start ##### -->
<section id="real-estate_featured" class="featured-properties-area section-padding-20-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-title section-heading wow fadeInLeftBig">
                    <h2>Propiedades destacadas</h2>
                </div>
            </div>
        </div>

        <div class="row">
        {{-- Featured --}}
        @include('featured-buildings')
        @forelse ($featured as $f)
            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        {{-- <a href="{{ route('buildings.show', $f->slug) }}">
                        <img src="img/bg-img/feature{{ $loop->iteration }}.jpg" alt=""> --}}
                        {{-- <img src=" {{asset('storage/placeholder/'.$f->images[0]->filename ) }}"> --}}

                        {{-- @if( $f->images && count($f->images) > 0 )

                          @if($f->images[0]->is_placeholder === '1')
                            <img src=" {{asset('storage/placeholder/'.$f->images[0]->filename ) }}">
                          @else
                            <img src=" {{asset('storage/properties/'.$f->slug.'/'.$f->images[0]->filename ) }}">
                          @endif

                        @endif 
                        </a>--}}
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="ribbon ribbon-top-left">
                            <span>{{ $f->status }}</span>
                        </div>
                        {{-- <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                          </div> --}}
                          <div class="other-top">
                              <p class="top-amb">{{ $f->rooms }}</p>
                          <div class="top-area">USD {{ $f->price }}</div>
                        </div>
                        <div class="other-bot">
                            <p class="bot-status">{{ $f->title }}</p>
                            <p class="bot-address">{{ $f->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
          @empty
            <div class="col-12">No existen destacados por el momento</div>
          @endforelse
        </div>
            
    </div>
</section>
<!-- ##### Propiedades en Venta Area End ##### -->

<!-- ##### Otras propiedades Area Start ##### -->
<section class="featured-properties-area section-padding-0-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading-20 wow fadeIn">
                    <h2>Propiedades</h2>
                </div>
            </div>
        </div>

        <div class="row">

          {{-- Others --}}
        @forelse ($others as $oth)
            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="{{ route('buildings.show', $oth->slug) }}"><img src="img/bg-img/feature{{ $loop->iteration }}.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="ribbon ribbon-top-left">
                            <span>{{ $oth->status }}</span>
                        </div>
                        {{-- <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                          </div> --}}
                          <div class="other-top">
                              <p class="top-amb">3 amb.</p>
                          <div class="top-area">USD {{ $oth->price }}</div>
                        </div>
                        <div class="other-bot">
                            <p class="bot-status">{{ $oth->title }}</p>
                            <p class="bot-address">{{ $oth->address }}</p>
                        </div>
                    </div>
                </div>
            </div>
          @empty
            <div class="col-12">No existen destacados por el momento</div>
          @endforelse
        </div>

        
        </div>
    </div>
</section>
<!-- ##### Otras propiedades Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection
