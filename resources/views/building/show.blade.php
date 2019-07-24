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
                            <h2>{{ $building->title }}</h2>
                        </div>
                    </div>
                    <div class="col-md-6 featured-col">
                        @if($building->is_featured == '1')
                        <div class="featured-box">
                            <span class="featured">Destacado</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-price">
                <h2 class="status">{{ $building->status }}</h2>
                <h2 class="price">
                    @if($building->from_price)
                    <span>Desde </span>
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
                                    <div class="{{ $key == 0 ? 'active' : '' }} carousel-item" data-slide-number="{{ $key }}">
                                        {{-- <img src="{{ asset('/images/uploads/feature-building-detail_1/detail_1.JPG') }}"
                                            class="img-fluid"> --}}
                                    {{-- <img class="property-img" src="{{ is_file($building->getImgPath($img->filename)) ? 
                                        $building->getImgPath($img->filename) : 
                                        Faker\Factory::create()->imageUrl($width = 640, $height = 480) }}" alt=""> --}}
                                    </div>
                                    <img src="{{ '/uploads/properties/'.$building->slug.'/'.$img->filename }}" alt="" class="property-img"/>

                                  @endforeach
                                    
--}}
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

                                <ul class="carousel-indicators list-inline mx-auto py-2">
                                  @foreach ( $building->images as $key => $img  )
                                    <li class="list-inline-item active">
                                        <a id="carousel-selector-{{ $key }}" class="{{ $key == 0 ? 'selected' : '' }}" data-slide-to="{{ $key + 1 }}"
                                            data-target="#myCarousel">
                                            <img src="{{ '/uploads/properties/'.$building->slug.'/'.$img->filename }}" class="img-fluid" style="width: 80px; height: 60px;">
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
                        {{ $building->description }}
                    </p>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="dept-details">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 box-icons">
                                    @foreach ($building->amenities as $amenity)
                                    <div class="col-2 detail-box">
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
                    <div class="dept-contact">
                        <form>
                            <h3 class="contact-title">Comercializa: {{ $building->contact_name }}</h3>
                            <h3 class="contact-title-2">Cel. {{ $building->contact_phone }}</h3>
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

            <div class="col-md-8">

            </div>
        </div>
    </div>
</section>
<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection

{{-- @push('scripts')
@endpush --}}
