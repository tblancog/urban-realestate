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

<section class="investments-page">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $config['title'] }}</h3>
                        <div class="col-12">
                          {{ $config['subtitle'] }}
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                      <div class="media">
                          <div class="media-body">
                              <div class="container">
                                  <div class="row m-2">
                                      <div class="col-md-3">
                                      <a href="{{ route('buildings.show', 'components.static.feature-building-detail_1') }}"><img src="{{  asset('/images/uploads/building-boxes/box_1.jpeg') }}"></a> 
                                      </div>
                                      <div class="col-md-6">                              
                                          <div class="info-card">
                                            <a href="{{ route('buildings.show', 'components.static.feature-building-detail_1') }}">
                                              <h5 class="mt-0"> Edificio PH UH5 - Mariano Acha 3458 {{-- $building->title --}}</h5>
                                            </a> 
                                          </div>
                                          <div class="details-card">
                                          <p>- PH de categoría con cochera y amenities varios: piscina/ solárium - parrilla - sum –
                                                 terraza – cocheras Los departamentos poseen calefacción por losa radiante regulable en 
                                                 forma independiente; pisos de porcelanato..{{-- $building->description --}}</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="more-box">
                                              <h5>Edificio</h5>
                                              <div class="cta-more">
                                                      <a class="btn-more" href="{{ route('buildings.show', 'components.static.feature-building-detail_1') }}{{-- route('buildings.show', $building->slug) --}}">Ver más</a>            
                                              </div>
                                              {{-- <div class="deliver-box">
                                                  <h6>Entrega</h6>
                                                  <h6 class="deliver-date">Noviembre 2021</h6>
                                              </div> --}}
                                          </div>
                                      </div>
                                  </div>

                                  
                                  <div class="row m-2">
                                      <div class="col-md-3">
                                      <a href="{{ route('buildings.show', 'components.static.feature-building-detail_2') }}"><img src="{{  asset('images/uploads/building-boxes/box_2.jpg') }}"></a> 
                                      </div>
                                      <div class="col-md-6">                              
                                          <div class="info-card">
                                            <a href="{{ route('buildings.show', 'components.static.feature-building-detail_2') }}">
                                              <h5 class="mt-0"> Galvan 3051 – Villa Urquiza - CABA {{-- $building->title --}}</h5>
                                            </a> 
                                          </div>
                                          <div class="details-card">
                                          <p>- Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de inversión...{{-- $building->description --}}</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="more-box">
                                              <h5>Edificio</h5>
                                              <div class="cta-more">
                                                      <a class="btn-more" href="{{ route('buildings.show', 'components.static.feature-building-detail_2') }}{{-- route('buildings.show', $building->slug) --}}">Ver más</a>            
                                              </div>
                                              {{-- <div class="deliver-box">
                                                  <h6>Entrega</h6>
                                                  <h6 class="deliver-date">Noviembre 2021</h6>
                                              </div> --}}
                                          </div>
                                      </div>
                                  </div>
                              </div>             
                          </div>
                      </div>
                    </div>  
                    {{-- @forelse ( $buildings as $building  )
                      <div class="media">
                          <div class="media-body">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-3">
                                      <a href="{{ route('buildings.show', $building->slug) }}"><img src="/images/uploads/building_1.jpg"></a> 
                                      </div>
                                      <div class="col-md-6">                              
                                          <div class="info-card">
                                            <a href="{{ route('buildings.show', $building->slug) }}">
                                              <h5 class="mt-0"> {{ $building->title }}</h5>
                                            </a> 
                                          </div>
                                          <div class="details-card">
                                              <p>{{ $building->description }}</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="more-box">
                                              <h5>Edificio</h5>
                                              <div class="cta-more">
                                                      <a class="btn-more" href="{{ route('buildings.show', $building->slug) }}">Ver más</a>            
                                              </div>
                                              <div class="deliver-box">
                                                  <h6>Entrega</h6>
                                                  <h6 class="deliver-date">Noviembre 2021</h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>             
                          </div>
                      </div>
                          
                      @empty
                        <div class="col-12">No existen edificios por el momento </div>
                    @endforelse --}}

                    <!-- /.card-body -->
                    <div class="card-footer">
                      {{ $buildings->links() }}
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
        
</section>

@if( $config['form'] === '1' )
  <div class="container mt-5">
      <div class="row">
          <div class="col-6 offset-2">
              @include ('partials.contact-form')
          </div>
      </div>
  </div>
@endif