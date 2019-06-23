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
                            <h2>Edificio PH UH5</h2>
                        </div>
                    </div>
                    <div class="col-md-6 featured-col">
                        <div class="featured-box">
                            <span class="featured">Destacado</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-price">
                <h2 class="status">En Venta</h2>
                <h2 class="price">Desde USD <b>169.000</b></h2>
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

                                    <div class="active carousel-item" data-slide-number="0">
                                        <img src="{{ asset('/images/uploads/feature-building-detail_1/detail_1.JPG') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="1">
                                        <img src="{{ asset('/images/uploads/feature-building-detail_1/detail_2.JPG') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="2">
                                        <img src="{{ asset('/images/uploads/feature-building-detail_1/detail_3.JPG') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="3">
                                        <img src="{{ asset('/images/uploads/feature-building-detail_1/detail_4.JPG') }}"
                                            class="img-fluid">
                                    </div>


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
                        - PH de categoría con cochera y amenities varios: piscina/ solárium - parrilla - sum – terraza –
                        cocheras
                        Los departamentos poseen calefacción por losa radiante regulable en forma independiente; pisos
                        de porcelanato; grifería con cierre cerámico hidromet o similar;
                        interiores de placard y mobiliario de cocina con horno y anafe eléctrico; instalación de
                        conductos para split y spar.
                        -Departamentos de 2 y 3 ambientes ubicados en el 1er, 2do y 3er piso.
                        -Departamentos de 2 y 4 ambientes con terraza y parrilla privada ubicados en el 4to piso.
                        - Planta Baja se encuentra el acceso principal - cocheras cubiertas - y en el fondo se localiza
                        la piscina con solarium - quincho con parrilla - sum - expansión de Terraza
                        con deck.
                    </p>
                </div>
            </div>

            {{-- <h3 class="info-title">Unidades</h3>
            <div class="dept-info">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Piso</th>
                            <th scope="col">Sup. Total</th>
                            <th scope="col">Ambientes</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Ver más</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="/img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="dept-details">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 box-icons">

                                    <div class="col-2 detail-box">
                                        <img src="/img/icons/amen_03.png" alt="piscina">
                                        <p style="text-transform: capitalize;">piscina</p>
                                    </div>

                                    <div class="col-2 detail-box">
                                        <img src="/img/icons/amen_07.png" alt="ascensor">
                                        <p style="text-transform: capitalize;">ascensor</p>
                                    </div>


                                    <div class="col-2 detail-box">
                                        <img src="/img/icons/amen_02.png" alt="cochera">
                                        <p style="text-transform: capitalize;">cochera</p>
                                    </div>


                                    <div class="col-2 detail-box">
                                        <img src="/img/icons/amen_05.png" alt="parrilla">
                                        <p style="text-transform: capitalize;">parrilla</p>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="dept-contact">
                        <form>
                            <h3 class="contact-title">Comercializa: María</h3>
                            <h3 class="contact-title-2">Cel. +549 1153294260</h3>
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
                            </div>
                        </form>
                    </div>
                    <div class="btn contact-send">
                        <a href="#">Enviar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="dept-map mt-4">
                    <div class="map-top">
                        <h3 class="map-title">Ubicación / Mapa</h3>
                        <div class="map-socialmedia">
                            <a href="#" target="_blank"><img src="/img/icons/whatsapp.svg" alt="Whatsapp"></a>
                            <a href="#" target="_blank"><img src="/img/icons/facebook.svg" alt="Facebook"></a>
                            <a href="#" target="_blank"><img src="/img/icons/instagram.svg" alt="Instagram"></a>
                        </div>
                    </div>
                    <div class="map-bot">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6959.996374489853!2d-58.405724992216996!3d-34.58694057808897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca83d2aa1521%3A0xc7a941fe0d021ba0!2sAlto+Palermo+Shopping!5e0!3m2!1ses!2sar!4v1557097984857!5m2!1ses!2sar"
                                width="522" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">

        </div>
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
