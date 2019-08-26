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


<div class="container-fluid">

<div class="row first-row"> <!-- start row 1 -->

    <div class="col-md-6 col-sm-12 boxDetail">
      <div class="">
        <h2 class="titleDetail">{{ $apartment->title }}</h2>
      </div>
    </div>

    <div class="col-md-6 col-sm-12 boxDetail">
      <div class="" >
        <h2 class="detailStatus left">@status_show($apartment->status)</h2>
        <h2 class="detailPrice right">@if($apartment->from_price)
                        @endif
                        USD <b>@convert($apartment->price)</b></h2>
      </div>
    </div>

  </div> <!-- end row 1 -->



  <div class="row"><!-- start row 2-->

    <div class="col-md-6 col-sm-12 boxDetail" id="slider">

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

    </div><!-- end boxDetail -->


    <div class="col-md-6 col-sm-12" >

          <div class="row"><!-- start row a -->

            <div class="col-md-12 col-sm-12 boxDetail boxAmenitiesDepto">
              <div class="">
                <ul class="amenitieBox list-inline">
                   @foreach ([
                              'superficie' => [
                                  'icon' => '/img/icons/superficie.svg',
                                  'title' => 'superficie',
                                  'value' => $apartment->area. 'm<sup>2</sup>'
                                ],
                                'rooms' => [
                                    'icon' => '/img/icons/cama.svg',
                                    'title' => 'dormitorios',
                                    'value' => $apartment->dormitorios
                                ],
                                'bathrooms' => [
                                    'icon' => '/img/icons/ducha.svg',
                                    'title' => 'baños',
                                    'value' => $apartment->banios
                                ],
                                'cochera' => [
                                    'icon' => '/img/icons/amen_02.png',
                                    'title' => 'cochera',
                                    'value' => 1
                                ],
                                'amenities' => [
                                    'icon' => '/img/icons/pileta.svg',
                                    'title' => 'amenities',
                                    'value' => $apartment->building->amenities->count()
                                ],
                    ] as $overview)
                        <li class="list-inline-item">
                            <img class="amenitieIcon" src="{{ $overview['icon'] }}" alt="{{ $overview['title'] }}">
                            <p class="amenitieText text-uppercase">{{ $overview['title'] }}</p>
                            <p class="amenitieText amenitieValue">{!! $overview['value'] !!}</p>
                        </li>

                  @endforeach
                  {{-- @foreach ($apartment->building->amenities as $amenity)
                    <li class="list-inline-item">
                      <img class="amenitieIcon" src="/img/icons/amenities/{{ $amenity->icon }}" alt="{{ $amenity->title }}">
                      <p class="amenitieText" style="text-transform: capitalize;">{{ $amenity->title }}</p>
                    </li>
                  @endforeach --}}
                </ul>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 boxDetail">
              <div class="">
                <h2 class="detailPrice left"><b>CONTACTO</b></h2>
                <h2 class="detailStatus right">{{ $apartment->contact_phone }}</h2>
              </div>
              <div style="clear:both"aca></div>
              <form class="formDetail formDepto">
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
                    <div class="btn contact-send right">
                        <a href="#">Enviar</a>
                    </div>
                </div>
            </form>
            </div><!-- end boxDetail -->

          </div><!-- end row a-->

      </div>

  </div><!-- end row 2-->

  <div class="row"> <!-- start row 3 -->

    <div class="col-md-6 col-sm-12 boxDetail">
      <div class="">
      <div class="description-top">
            <h3 class="detailTitle2">Descripción</h3>
        </div>
        <div class="description-bot">
            {!! nl2br($apartment->description) !!}
        </div>
      </div>
    </div><!-- end boxDetail -->

    <div class="col-md-6 col-sm-12 boxDetail">

        <div class="description-top">
            <h3 class="detailTitle2 left">Ubicación / Mapa</h3>
            <div class="detailSocialIcons right">
              @include('partials.map-social')
            </div>
        </div>
        <div class="clear"></div>
        <div class="detailMap">
            {!! $apartment->building->url_maps !!}
        </div>
    </div><!-- end boxDetail -->

  </div> <!-- end row 3 -->



  <div class="row"> <!-- start row 4 -->

    <div class="col-md-6 col-sm-12 boxDetail">
              <div class="">
                <h2 class="titleMoreInfo left"><b>Información Básica</b></h2>
              </div>
              <div style="clear:both"></div>
              <ul class="moreInfo">
                <li>Ambientes: <span class="misc-value">{{ $apartment->rooms }}</span></li>
                <li>Dormitorios: <span class="misc-value">{{ $apartment->dormitorios }}</span></li>
                <li>Baños: <span class="misc-value">{{ $apartment->banios }}</span></li>
                <li>Toilettes: <span class="misc-value">{{ $apartment->toilettes }}</span></li>
                <li>Antigüedad: <span class="misc-value">{{ $apartment->antiguedad }}</span></li>
                <li>Expensas: <span class="misc-value">$ @convert($apartment->expensas)</span></li>
                <li>Orientación: <span class="misc-value">{{ $apartment->orientacion }}</span></li>
                <li>Disposición: <span class="misc-value">{{ $apartment->disposicion }}</span></li>
             </ul>
    </div><!-- end boxDetail -->


    <div class="col-md-6 col-sm-12 boxDetail">
              <div class="">
                <h2 class="titleMoreInfo titleMoreInfo1 left"><b>Superficies</b></h2>
              </div>
              <div style="clear:both"></div>
              <ul class="moreInfo moreInfo1">
                <li>Cubierta: <span class="misc-value">{{ $apartment->area }}m<sup>2</sup></span></li>
                <li>Semicubierta: <span class="misc-value">{{ $apartment->area_semicubierta }}m<sup>2</sup></span></li>
                <li>Total Construido: <span class="misc-value">{{ $apartment->area_total_construido }}m<sup>2</sup></span></li>
             </ul>
    </div><!-- end boxDetail -->

  </div> <!-- end row 4 -->


  <div class="row"> <!-- start row 5 -->

    <div class="col-md-6 col-sm-12 boxDetail">
              <div class="">
                <h2 class="titleMoreInfo left"><b>Adicionales</b></h2>
              </div>
              <div style="clear:both"></div>
              <ul class="moreInfo">

                @foreach ( $apartment->features as $feature )
                    @continue($feature->type == 'additional')
                    <li>
                        {{ $feature->title }}
                        {{ !empty($feature->value) ? ': '.$feature->value : '' }}
                    </li>
                @endforeach
             </ul>
    </div><!-- end boxDetail -->


    <div class="col-md-6 col-sm-12 boxDetail">
              <div class="">
                <h2 class="titleMoreInfo left"><b>Ambientes</b></h2>
              </div>
              <div style="clear:both"></div>
              <ul class="moreInfo">
                @foreach ( $apartment->features as $feature )
                    @continue($feature->type == 'rooms')
                    <li>
                        {{ $feature->title }}
                        {{ !empty($feature->value) ? ': '.$feature->value : '' }}
                    </li>
                @endforeach
             </ul>
    </div><!-- end boxDetail -->

  </div> <!-- end row 5 -->





</div> <!-- end container-fluid -->





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
