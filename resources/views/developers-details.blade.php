@extends('layouts.front')

@section('content')

<!-- ##### Front Header Area Start ##### -->
{{-- @include('partials.front-header') --}}

<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<div class="container-fluid contentDetailHd">

    <div class="row first-row"> <!-- start row 1 -->
    
        <div class="col-md-6 col-sm-12">
            <img src="img/bg-img/feature1.jpg" alt="">
        </div>
    
        <div class="col-md-6 col-sm-12">
            <div class="detailsHD">
                <h6>Proyecto</h6>
                <h3>Torre quesevendarapido</h3>
            </div>
            <div class="detailsHD">
                <h6>Año</h6>
                <h3>2017</h3>
            </div>
            <div class="detailsHD">
                <h6>Ubicación</h6>
                <h3>Palermo, Argentina</h3>
            </div>
            <div class="detailsHD">
                <h6>Servicios</h6>
                <h3>Proyecto y Dirección de Obra</h3>
            </div>
            <div class="detailsHD">
                <h6>Descripción</h6>
                <p>La edificación evidenció, claros signos del paso del tiempo y los sistemas constructivos empleados en su construcción la hacían incompatible con los estándares de calidad y confort impuestos por la actual forma de vida. El conjunto arquitectónico presentaba una distribución interior que no respondía a las nuevas necesidades, pues los niveles funcionan como pisos independientes, comunicados por medio de una escalera exterior que dificulta el carácter unitario del residencial. Por otro lado la vivienda presenta patologías derivadas del agua, ocasionadas por el precario sistema de protección del semisótano,
                </p>
            </div>
        </div>
    
      </div> <!-- end row 1 -->

</div> <!-- end container-fluid -->

<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection
