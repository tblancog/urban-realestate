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
                            <h2>Edificio G 3051</h2>
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
                                        <img src="{{ asset('/images/uploads/feature-building-detail_2/detail_1.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="1">
                                        <img src="{{ asset('/images/uploads/feature-building-detail_2/detail_2.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="2">
                                        <img src="{{ asset('/images/uploads/feature-building-detail_2/detail_3.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="3">
                                        <img src="{{ asset('/images/uploads/feature-building-detail_2/detail_4.png') }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="carousel-item" data-slide-number="4">
                                        <img src="{{ asset('/images/uploads/feature-building-detail_2/detail_5.png') }}"
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
                        Galvan 3051 es un edificio de departamentos residenciales aptos profesionales que ofrecen el
                        máximo confort articulando espacios flexibles para vivir, trabajar y estudiar o como proyecto de
                        inversión.
                        El emprendimiento se desarrolla en un terreno de 1815 m2, consta de planta baja libre, siete
                        niveles y un primer retiro con viviendas más otro con espacios comunes y amenities.
                        Al frente se ubican siete unidades de 3 ambientes y una de 2 ambientes en suite con vestidor y
                        toilette de recepción y al contra frente dieciséis unidades monoambientes.
                        En el segundo retiro se proyectan la portería, un sauna con toilette y ducha y una expansión
                        aterrazada con parilla común.
                        En la terraza del último nivel se ubica un solárium y una pequeña piscina con jacuzzi. El
                        espacio de guardacoches destinado en la planta baja tiene una capacidad para 8 vehículos.
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
                                    <div class="row">

                                        <div class="col-2 detail-box">
                                            <img src="/img/icons/amen_03.png" alt="piscina">
                                            <p style="text-transform: capitalize;">piscina</p>
                                        </div>

                                        <div class="col-2 detail-box">
                                            <img src="/img/icons/amen_04.png" alt="piscina">
                                            <p style="text-transform: capitalize;">sauna</p>
                                        </div>

                                        <div class="col-2 detail-box">
                                            <img src="/img/icons/amen_02.png" alt="cochera">
                                            <p style="text-transform: capitalize;">jacuzzi</p>
                                        </div>


                                        <div class="col-2 detail-box">
                                            <img src="/img/icons/amen_05.png" alt="parrilla">
                                            <p style="text-transform: capitalize;">parrilla</p>
                                        </div>

                                        <div class="col-2 detail-box">
                                            <img src="/img/icons/amen_05.png" alt="parrilla">
                                            <p style="text-transform: capitalize;">sum</p>
                                        </div>

                                        <div class="col-2 detail-box">
                                            <img src="/img/icons/amen_05.png" alt="parrilla">
                                            <p style="text-transform: capitalize;">solarium</p>
                                        </div>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.4543443022717!2d-58.48913148477123!3d-34.567368580468965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb6f55c9a4cbb%3A0x910191cd7ab1ace!2sGalv%C3%A1n+3051%2C+C1431FVD+CABA!5e0!3m2!1sen!2sar!4v1561140676743!5m2!1sen!2sar" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
