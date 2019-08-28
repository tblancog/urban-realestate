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
        <h2 class="titleDetail">{{ $building->title }}</h2>
      </div>
    </div>

    <div class="col-md-6 col-sm-12 boxDetail">
      <div class="" >
        <h2 class="detailStatus left">@status_show($building->status)</h2>
        <h2 class="detailPrice right"> @if($building->from_price)
                    @endif
                    USD <b>@convert($building->price)</b></h2>
      </div>
    </div>

  </div> <!-- end row 1 -->


  <div class="row"><!-- start row 2-->

    <div class="col-md-6 col-sm-12 boxDetail">


    <div id="myCarousel" class="carousel slide">
      <!-- main slider carousel items -->
      <div class="carousel-inner">
        @foreach ($building->images as $key => $img )
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
          @foreach ( $building->images as $key => $img )
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

        <div class="col-md-6 col-sm-12"  >

          <div class="row"><!-- start row a -->

            <div class="col-md-12 col-sm-12 boxDetail">
              <div class="">
                <ul class="amenitieBox list-inline">
                  @foreach ($building->amenities as $amenity)
                    <li class="list-inline-item">
                      <img class="amenitieIcon" src="/img/icons/amenities/{{ $amenity->icon }}" alt="{{ $amenity->title }}">
                      <p class="amenitieText text-uppercase">{{ $amenity->title }}</p>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 boxDetail">
              <div class="">
                <h2 class="detailPrice left"><b>CONTACTO</b></h2>
                <h2 class="detailStatus right">{{ $building->contact_phone }}</h2>
              </div>
              <div style="clear:both"aca></div>
              <form class="formDetail formBuilding">
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
                        <textarea  style="white-space: pre-line;" name="Mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
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
            {!! nl2br($building->description) !!}
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
              {!! $building->url_maps !!}
          </div>
      </div><!-- end boxDetail -->

    </div> <!-- end row 3 -->



    <div class="row"> <!-- start row 3 -->

      <div class="col-md-6 col-sm-12 boxDetail">
        <div class="">
        <div class="description-top">
              <h3 class="detailTitle2">Unidades</h3>
          </div>
          <div class="description-bot table-responsive-sm">
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

    </div> <!-- end row 3 -->




  </div> <!-- end container-fluid -->




<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection

{{-- @push('scripts')
@endpush --}}
