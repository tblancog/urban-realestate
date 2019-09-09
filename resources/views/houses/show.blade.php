@extends('layouts.front')

@section('content')

<!-- ##### Front Header Area Start ##### -->
@include('partials.front-header-houses')

<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<div class="container-fluid contentDetailHd">

    <div class="row first-row"> <!-- start row 1 -->

        {{-- <div class="col-md-6 col-sm-12">
            <img src="img/bg-img/feature1.jpg" alt="">
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="detailsHD">
                <h6>Proyecto</h6>
                <h3>CASA LAGAROMPA</h3>
            </div>
            <div class="detailsHD">
                <h6>Año</h6>
                <h3>2017</h3>
            </div>
            <div class="detailsHD">
                <h6>Ubicación</h6>
                <h3>San Isidro, Buenos AIres, Argentina</h3>
            </div>
            <div class="detailsHD">
                <h6>Servicios</h6>
                <h3>Proyecto y Dirección de Obra</h3>
            </div>
            <div class="detailsHD">
                <h6>Descripción</h6>
                <p>La edificación evidenció, claros signos del paso del tiempo y los sistemas constructivos empleados en su construcción la hacían incompatible con los estándares de calidad y confort impuestos por la actual forma de vida. El conjunto arquitectónico presentaba una distribución interior que no respondía a las nuevas necesidades, pues los niveles funcionan como pisos independientes, comunicados por medio de una escalera exterior que dificulta el carácter unitario del residencial. Por otro lado la vivienda presenta patologías derivadas del agua, ocasionadas por el precario sistema de protección del semisótano. Para subsanar todas las patologías detectadas y responder a las necesidades requeridas por sus usuarios, se realizó un riguroso diagnostico con el objetivo de alcanzar la óptima consolidación de la vivienda.</p>
            </div>
        </div> --}}
         <div class="col-md-6 col-sm-12">
            <div id="myCarousel" class="carousel slide">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    @foreach ($house->images as $key => $img )
                    <div class="{{ $key == 0 ? 'active' : '' }} carousel-item" data-slide-number="{{ $key }}">
                        <img src="{{ asset($img->path) }}" class="img-fluid">
                    </div>
                    @endforeach
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- main slider carousel nav controls -->


                <!-- main slider carousel nav controls -->
                <ul class="carousel-indicators list-inline mx-auto py-2 pull-left">
                    @foreach ( $house->images as $key => $img )
                    <li class="list-inline-item active" data-index="{{ $key }}">
                        <a class="carousel-thumbnail {{ $key == 0 ? 'selected' : '' }}" data-slide-to="{{ $key }}"
                            data-target="#myCarousel" onclick="goToSlide({{ $key }})">
                            <img src="{{ asset($img->path) }}" class="img-fluid" style="width: 80px; height: 60px;">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="detailsHD">
                <h6>Proyecto</h6>
                <h3>{{ $house->house_name }}</h3>
            </div>
            <div class="detailsHD">
                <h6>Año</h6>
                <h3>{{ $house->year }}</h3>

            </div>
            <div class="detailsHD">
                <h6>Ubicación</h6>
                <h3>{{ $house->location }}</h3>
            </div>
            <div class="detailsHD">
                <h6>Servicios</h6>
                <h3>{{ $house->services }}</h3>
            </div>
            <div class="detailsHD">
                <h6>Descripción</h6>
                <h3>{!! nl2br($house->description) !!}</h3>

            </div>
        </div>

      </div> <!-- end row 1 -->

</div> <!-- end container-fluid -->

<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection
