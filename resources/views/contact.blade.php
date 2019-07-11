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
                <h2>{{ $config['title'] }}</h2>
              <!--Directora Comercial: María Ester   Cel. +54 9 11 5329-4260   Mail. info@urbanrealestate.com.ar
               Contamos con propiedades aptas crédito, y podemos acompañarte en el proceso de búsqueda de la mejor opción de crédito.
                No dudes en consultar sin compromiso, te daremos el mejor asesoramiento.-->
              </div>
                @if( $config['form'] === '1' )
                  @include ('partials.contact-form')
                @endif
                <div class="appraisals-bottom text-center">
                   <p>
                       {{ $config['subtitle'] }}
                   </p>
                </div>
            </div>
        </div>
    </div>
        
</section>