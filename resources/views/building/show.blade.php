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
                        <div class="dept-name text-capitalize">
                            <h2>{{ $building->title }} - {{ $building->location }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-price">
                <h2 class="status">@status_show($building->status)</h2>
                <h2 class="price">
                    @if($building->from_price)
                    @endif
                    USD <b>@convert($building->price)</b>

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
                                    @foreach ($building->images as $key => $img )
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

                                <!-- main slider carousel nav controls -->
                                <ul class="carousel-indicators list-inline mx-auto py-2 pull-left">
                                    @foreach ( $building->images as $key => $img )
                                    <li class="list-inline-item active" data-index="{{ $key }}">
                                        <a class="carousel-thumbnail {{ $key == 0 ? 'selected' : '' }}"
                                            data-slide-to="{{ $key }}" data-target="#myCarousel"
                                            onclick="goToSlide({{ $key }})">
                                            <img src="{{ asset($img->path) }}" class="img-fluid"
                                                style="width: 80px; height: 60px;">
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


            <div class="dept-description mt-4">
                <div class="description-top">
                    <h3 class="desc-title">Descripción</h3>
                </div>
                <div class="description-bot">

                    <p class="description-body">
                        {!! nl2br($building->description) !!}
                    </p>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row ">
                <div class="dept-details">
                    <div class="col-12 box-icons">
                        @foreach ($building->amenities as $amenity)
                        <div class="detail-box">
                            <img src="/img/icons/{{ $amenity->icon }}" alt="{{ $amenity->title }}">
                            <p style="text-transform: capitalize;">{{ $amenity->title }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- Contacto --}}
                <div class="col-12">
                    <div class="clear"></div>
                    <div class="dept-contact">
                        <h3 class="contact-title left">CONTACTO: {{ $building->contact_name }}</h3>
                        <h3 class="contact-title-2 right">{{ $building->contact_phone }}</h3>
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
                                    <textarea name="Mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                    <p class="contact-sub-info"></p>
                                </div>
                                <div class="btn contact-send">
                                    <a href="#">Enviar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Ubicación / Mapa --}}
            <div class="col-md-12">
                <div class="dept-map mt-4">
                    <div class="map-top">
                        <h3 class="map-title">Ubicación / Mapa</h3>
                        @include('partials.map-social')
                    </div>
                    <div class="map-bot">
                        <div class="map-responsive">
                            {{!! $building->url_maps !!}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-map mt-4">
                <div class="map-top">
                    <h3 class="map-title">Unidades</h3>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Piso</th>
                                <th scope="col">Superficie</th>
                                <th scope="col">Ambientes</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Ver más</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($building->apartments as $ap)
                            <tr>
                                <th scope="row">{{ $ap->floor }}</th>
                                <td>{{ $ap->area }} m<sup>2</sup></td>
                                <td>{{ $ap->rooms }} amb.</td>
                                <td>USD @convert($ap->price)</td>
                                <td class="text-center">
                                    <a href="{{ route('apartments.show', $ap->slug) }}"><i class="fa fa-arrow-right"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No existen departamentos asignados todavía</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection
