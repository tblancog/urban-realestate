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

<section class="detail-page">
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="dept-name">
                            <h2>{{ $apartment->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-price">
                <h2 class="status">{{ $apartment->status }}</h2>
                <h2 class="price">
                    @if($apartment->from_price)
                    <span>Desde </span>
                    @endif
                    USD <b>@convert($apartment->price)</b>

                </h2>
            </div>
        </div>
        <div class="col-md-6">

            <div class="container">
                <div class="row">
                    <div class="dept-slider">
                        <div class="col-lg-12" id="slider">
                            <div id="myCarousel" class="carousel slide">
                                <!-- main slider carousel items -->
                                <div class="carousel-inner">
                                    @foreach ($apartment->images as $key => $img )
                                      <div class="{{ $key == 0 ? 'active' : '' }} carousel-item"
                                          data-slide-number="{{ $key }}">
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

                                </div>
                                <!-- main slider carousel nav controls -->
                                <ul class="carousel-indicators list-inline mx-auto py-2 pull-left">
                                    @foreach ( $apartment->images as $key => $img )
                                    <li class="list-inline-item active" data-index="{{ $key }}">
                                        <a class="carousel-thumbnail {{ $key == 0 ? 'selected' : '' }}"
                                            data-slide-to="{{ $key }}" data-target="#myCarousel"
                                            onclick="goToSlide({{ $key }})">
                                            <img src="{{ asset($img->path) }}"
                                                class="img-fluid" style="width: 80px; height: 60px;">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
                <!--/main slider carousel-->
            </div>

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="dept-details">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 box-icons">
                                    @foreach ($apartment->amenities as $amenity)
                                    <div class="detail-box">
                                        <img src="/img/icons/{{ $amenity->icon }}" alt="{{ $amenity->title }}">
                                        <p style="text-transform: capitalize;">{{ $amenity->title }}</p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="titForm">
                        <h3 class="contact-title left">Contacto<!--{{ $apartment->contact_name }}--></h3>
                        <h3 class="contact-title-2 right">{{ $apartment->contact_phone }}</h3>
                    </div>
                    <div class="clear"></div>
                    <div class="dept-contact">
                        <form>
                            <div class="contact-info">
                                <div class="contact-info-item">
                                    <input type="text" placeholder="Nombre">
                                    <p class="contact-sub-info"></p>
                                </div>
                                <div class="contact-info-item">
                                    <input type="text" placeholder="Teléfono">
                                    <p class="contact-sub-info"></p>
                                </div>
                                <div class="contact-info-item">
                                    <input type="email" placeholder="Email">
                                    <p class="contact-sub-info"></p>
                                </div>
                                <div class="contact-info-item">
                                    <textarea name="Mensaje" id="" cols="30" rows="10"
                                        placeholder="Estoy interesado/a en contactarlos..."></textarea>
                                    <p class="contact-sub-info"></p>
                                </div>
                            </div>
                        </form>
                        <div class="btn contact-send">
                            <a href="#">Enviar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="dept-description mt-4">
                <div class="description-top">
                    <h3 class="desc-title">Descripción</h3>
                </div>
                <div class="description-bot">

                    <p class="description-body">
                        {{ $apartment->description }}
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="dept-map mt-4">
                <div class="map-top">
                    <h3 class="map-title">Ubicación / Mapa</h3>
                    @include('partials.map-social')
                </div>
                <div class="map-bot">
                    <div class="map-responsive">
                        {{!! $apartment->url_maps !!}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row dept-build-misc">
                <div class="col-md-6 misc-box">
                    <div class="misc-info">
                        <h4 class="misc-title">Información Básica</h4>
                        <ul>
                            <li>Ambientes: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                            <li>Dormitorios: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                            <li>Baños: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                            <li>Toilettes: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                            <li>Antigüedad: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                            <li>Expensas: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                            <li>Orientación: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                            <li>Disposición: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 misc-box">
                    <div class="misc-info">
                        <h4 class="misc-title">Superficies</h4>
                        <ul>
                        <li>Cubierta: <span class="misc-value">{{ $apartment->area }}m<sup>2</sup></span></li>
                            <li>Semicubierta: <span class="misc-value">{{ $apartment->area }}m<sup>2</sup></span></li>
                            <li>Total Construido: <span class="misc-value">{{ $apartment->area }}m<sup>2</sup></span></li>
                        </ul>
                    </div>
                </div>
                {{-- Adicionales --}}
                {{-- <div class="col-md-6 misc-box">
                    <div class="misc-info">
                        <h4 class="misc-title">Adicionales</h4>
                        <ul>
                            <li>Aire Acondic. Individual</li>
                            <li>Agua Caliente Individual</li>
                            <li>Calefacción por Aire</li>
                            <li>Luminoso</li>
                            <li>Antigüedad: <span class="misc-value">50</span></li>
                            <li>Expensas: <span class="misc-value">3700</span></li>
                        </ul>
                    </div>
                </div> --}}
                {{-- Ambientes --}}
                {{-- <div class="col-md-6 misc-box">
                    <div class="misc-info">
                        <h4 class="misc-title">Ambientes</h4>
                        <ul>
                            <li>Cocina</li>
                            <li>Living Comedor</li>
                            <li>Hall</li>
                            <li>Escritorio</li>
                            <li>Lavadero</li>
                            <li>Dependencia</li>
                            <li>Entrada Servicio</li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection

@push('scripts')
<script>
    function goToSlide(number) {
        $("#myCarousel").carousel(number);
    }

</script>
@endpush
