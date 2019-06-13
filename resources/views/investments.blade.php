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
                        <h3 class="card-title">Edificios</h3>
                    </div>
                    <!-- /.card-header -->
                    
                    @forelse ( $buildings as $building  )
                    {{-- {{ dump($building) }} --}}
                      <div class="media">
                          <div class="media-body">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-3">
                                      <a href="{{ route('buildings.detail', $building->slug) }}"><img src="https://via.placeholder.com/250x180"></a> 
                                      </div>
                                      <div class="col-md-6">                              
                                          <div class="info-card">
                                            <a href="{{ route('buildings.detail', $building->slug) }}">
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
                                                      <a class="btn-more" href="{{ route('buildings.detail', $building->slug) }}">Ver más</a>            
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
                          
                      @empty
                        <div class="col-12">No existen edificios por el momento </div>
                    @endforelse

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