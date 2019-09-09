@extends('layouts.front')

@section('content')
<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<!-- ##### Front Header Area Start ##### -->
@include('partials.top-menu')
<!-- ##### Front Header Area End ##### -->

<!-- ##### Advance Search Area Start ##### -->
@include('components.search-area')
<!-- ##### Advance Search Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    @include('components.home-slider', ['slides'=> $slides])
</section>
<!-- ##### Hero Area End ##### -->



<!-- ##### Propiedades en Venta Area Start ##### -->
<section id="real-estate_featured" class="featured-properties-area my-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="project-title section-heading wow fadeInLeftBig">
                    <h2>Propiedades destacadas</h2>
                </div>
            </div>
        </div>
        <div class="row">

            {{-- Building box --}}
            @foreach ($buildings as $building)
            @include('building.box', ['building'=> $building ])
            @endforeach

        </div>


    </div>
</section>
<div id="apartments"></div>
<!-- ##### Propiedades en Venta Area End ##### -->

<!-- ##### Otras propiedades Area Start ##### -->
<section id="real-estate" class="featured-properties-area section-padding-0-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInRightBig">
                    <h2 class="text-uppercase">Propiedades</h2>
                </div>
            </div>
        </div>

        <div class="row">

            {{-- Apartment box --}}
            @foreach ($apartments as $apartment)
                @include('apartment.box', $apartment)
            @endforeach
        </div>
        <div class="row pull-right mr-3 paginadoHome">
            <div class="col-lg-1">{{ $apartments->fragment('apartments')->links() }}</div>
        </div>
    </div>
    </div>
    <div class="">
        <div class="row logosUrbanFooter">
            <div class="col-4 colLogos">
                <a href="{{ route('home.index') }}" target="_blank"><img src="img/core-img/icLogoFooter1.png" alt=""></a>
                <p style="background:#007d3f;">PROPIEDADES</p>
            </div>
            <div class="col-4 colLogos">
                <a href="{{ route('developers.index') }}" target="_blank"><img src="img/core-img/icLogoFooter2.png" alt=""></a>
                <p style="background:#b62126;">CONSTRUCTORA</p>
            </div>
            <div class="col-4 colLogos">
                <a href="{{ route('houses.index') }}" target="_blank"><img src="img/core-img/icLogoFooter3.png" alt=""></a>
                <p style="background:#006fcb;">ARQUITECTURA</p>
            </div>
        </div>
    </div>
</section>
<!-- ##### Otras propiedades Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection
