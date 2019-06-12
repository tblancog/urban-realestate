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
    <!-- <h2>TORRE ACHA</h2>
      <p>Una oportunidad para disfrutar<br/>
         de un efdicio de calidad<br/>
         en una zona estratégica</p> -->
    <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-1.jpg);">
        <div class="hero-slides owl-carousel">
            <!-- Property Title -->
            <!-- <div class="property-title">
                <h2>Torre Acha</h2>
                <h4>Una oportunidad para disfrutar de un edificio de calidad en una zona estratégica</h4>
            </div> -->
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>Torre Acha</h2>
                                <h4>Una oportunidad para disfrutar de un edificio de calidad en una zona estratégica
                                </h4>

                                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">Proyectos inmobiliarios</h2> -->
                                <!-- <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Info</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">La casa de tus sueños</h2> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">Proyectos en marcha</h2> -->
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
                <div class="project-title section-heading wow fadeIn">
                    <h2>Propiedades destacadas</h2>
                </div>
            </div>
        </div>

        <div class="row">
        {{-- Featured --}}
        @forelse ($featured as $f)
            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="{{ route('buildings.detail', $f->id) }}"><img src="img/bg-img/feature{{ $loop->iteration }}.jpg" alt=""></a>
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
                              <p class="top-amb">3 amb.</p>
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
                        <a href="/detail"><img src="img/bg-img/feature{{ $loop->iteration }}.jpg" alt=""></a>
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
