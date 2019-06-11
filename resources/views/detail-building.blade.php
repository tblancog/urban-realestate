@extends('layouts.front')

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
            <div class="dept-name">
                <h2>Departamento Maipu 470</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-price">
                <h2 class="status">Venta</h2>
                <h2 class="price">USD <b>280.000</b></h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-slider">
                <img src="img/bg-img/feature1.jpg" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="dept-details">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 box-icons">
                                    <div class="detail-box">
                                        <img src="img/icons/amen_01.png" alt="">
                                        <p>Sum</p>
                                    </div>
                                    <div class="detail-box">
                                        <img src="img/icons/amen_02.png" alt="">
                                        <p>Cochera</p>
                                    </div>
                                    <div class="detail-box">
                                        <img src="img/icons/amen_03.png" alt="">
                                        <p>Pileta</p>
                                    </div>
                                    <div class="detail-box">
                                        <img src="img/icons/amen_04.png" alt="">
                                        <p>Sauna</p>
                                    </div>
                                    <div class="detail-box">
                                        <img src="img/icons/amen_05.png" alt="">
                                        <p>Parrilla</p>
                                    </div>
                                </div>

                                <div class="col-12 box-icons">
                                    <div class="detail-box">
                                        <img src="img/icons/amen_06.png" alt="">
                                        <p>WIFI Gratuito</p>
                                    </div>
                                    <div class="detail-box">
                                        <img src="img/icons/amen_07.png" alt="">
                                        <p>Ascensor</p>
                                    </div>
                                    <div class="detail-box">
                                        <img src="img/icons/amen_08.png" alt="">
                                        <p>Gimnasio</p>
                                    </div>
                                    <div class="detail-box">
                                        <img src="img/icons/amen_09.png" alt="">
                                        <p>Lavadero</p>
                                    </div>
                                    <div class="detail-box">
                                        <img src="img/icons/amen_10.png" alt="">
                                        <p>Conserjeria</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="dept-contact">
                        <form>
                            <h3 class="contact-title">Contacto:</h3>
                            <h3 class="contact-title-2">+549 11 53294260</h3>
                            <div class="contact-info">
                                <div class="contact-info-item">
                                    <input type="text" placeholder="Nombre:">
                                    <p class="contact-sub-info"></p>
                                </div>
                                <div class="contact-info-item">
                                    <input type="text" placeholder="Teléfono:">
                                    <p class="contact-sub-info"></p>
                                </div>
                                <div class="contact-info-item">
                                    <input type="email" placeholder="Email:">
                                    <p class="contact-sub-info"></p>
                                </div>
                                <div class="contact-info-item">
                                    <textarea name="Mensaje" id="" cols="30" rows="10"
                                        placeholder="Mensaje:"></textarea>
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
        </div>
        <div class="col-md-6">
            <div class="dept-description">
                <div class="description-top">
                    <h3 class="desc-title">Descripción</h3>
                </div>
                <div class="description-bot">
                    <h5 class="description-header">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum ex ac neque iaculis.
                    </h5>
                    <p class="description-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mi nulla, egestas id dolor a,
                        tempus malesuada magna. Vestibulum congue rhoncus odio sit amet finibus. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed et sem ut odio
                        placerat feugiat. Quisque interdum nunc sed cursus lobortis. Sed accumsan augue ut pharetra
                        consectetur. Etiam lacinia augue vel purus tristique aliquet. Morbi venenatis magna ac nulla
                        congue ornare. Nunc vel tortor sed tellus cursus luctus. Suspendisse potenti. Cras id venenatis
                        libero.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-map">
                <div class="map-top">
                    <h3 class="map-title">Ubicación / Mapa</h3>
                    <div class="map-socialmedia">
                        <a href="#" target="_blank"><img src="img/icons/whatsapp.svg" alt="Whatsapp"></a>
                        <a href="#" target="_blank"><img src="img/icons/facebook.svg" alt="Facebook"></a>
                        <a href="#" target="_blank"><img src="img/icons/instagram.svg" alt="Instagram"></a>
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
        <div class="col-md-8">
            <h3 class="info-title">Unidades</h3>
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
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>118 m<sup>2</sup></td>
                            <td>3 amb.</td>
                            <td>USD 340.000</td>
                            <td><a href="#"><img src="img/icons/arrow_01.png" alt=""></a></td>
                        </tr>
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
