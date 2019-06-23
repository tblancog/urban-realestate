@extends('layouts.front')

{{-- @push('styles')
  
@endpush --}}

@section('content')

<!-- ##### Front Header Area Start ##### -->
@include('partials.front-header')
<!-- ##### Front Header Area End ##### -->

<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<section class="appraisals-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="appraisals-title">
              Directora Comercial: María Ester   Cel. +54 9 11 5329-4260   Mail. info@urbanrealestate.com.ar
               <!--Contamos con propiedades aptas crédito, y podemos acompañarte en el proceso de búsqueda de la mejor opción de crédito.
                No dudes en consultar sin compromiso, te daremos el mejor asesoramiento.-->
              </div>
                @include ('partials.contact-form')
                <!--<div class="appraisals-bottom">
                   Directora Comercial: María Ester   Cel. +54 9 11 5329-4260   Mail. info@urbanrealestate.com.ar
                </div>-->
            </div>
        </div>
    </div>
        
</section>