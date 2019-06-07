@extends('layouts.front')

@section('content')
<div id="app">
    <example-component></example-component>
</div>

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
                        <div class="detail-box">
                            <img src="img/icons/superficie.svg" alt="">
                            <p>Superficie</p>
                            <h4>90m<sup>2</sup></h4>
                        </div>
                        <div class="detail-box">
                            <img src="img/icons/cama.svg" alt="">
                            <p>Dormitorios</p>
                            <h4>3</h4>
                        </div>
                        <div class="detail-box">
                            <img src="img/icons/ducha.svg" alt="">
                            <p>Baños</p>
                            <h4>2</h4>
                        </div>
                        <div class="detail-box">
                            <img src="img/icons/auto.svg" alt="">
                            <p>Cochera</p>
                            <h4>1</h4>
                        </div>
                        <div class="detail-box">
                            <img src="img/icons/pileta.svg" alt="">
                            <p>Amenities</p>
                            <h4>Si</h4>
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
        <div class="col-md-6">
            <div class="dept-info">
                <h4 class="dept-title">Información Básica:</h4>
                <ul>
                    <li>
                        <p>Ambientes:</p><span>2</span>
                    </li>
                    <li>
                        <p>Dormitorios:</p><span>1</span>
                    </li>
                    <li>
                        <p>Baños:</p><span>1</span>
                    </li>
                    <li>
                        <p>Toilettes:</p><span>0</span>
                    </li>
                    <li>
                        <p>Antigüedad:</p><span>50</span>
                    </li>
                    <li>
                        <p>Expensas:</p><span>3700</span>
                    </li>
                    <li>
                        <p>Orientación:</p><span>Suroeste</span>
                    </li>
                    <li>
                        <p>Disposición:</p><span>Frente</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-superficies">
                <h4 class="dept-title">Superficies:</h4>
                <ul>
                    <li>
                        <p>Cubierta:</p><span>74.30 m<sup>2</sup></span>
                    </li>
                    <li>
                        <p>Semicubierta:</p><span>3.50 m<sup>2</sup></span>
                    </li>
                    <li>
                        <p>Total Construido:</p><span>77.80 m<sup>2</sup></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-adicionales">
                <h4 class="dept-title">Adicionales:</h4>
                <ul>
                    <li>
                        <p>Aire Aconcicionado:</p><span>Individual</span>
                    </li>
                    <li>
                        <p>Agua Caliente:</p><span>Individual</span>
                    </li>
                    <li>
                        <p>Calefacción:</p><span>Por Aire</span>
                    </li>
                    <li>
                        <p>Luminoso</p>
                    </li>
                    <li>
                        <p>Antigüedad:</p><span>50</span>
                    </li>
                    <li>
                        <p>Expensas:</p><span>3700</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="dept-ambientes">
                <h4 class="dept-title">Ambientes:</h4>
                <ul>
                    <li>
                        <p>Cocina</p>
                    </li>
                    <li>
                        <p>Living Comedor</p>
                    </li>
                    <li>
                        <p>Hall</p>
                    </li>
                    <li>
                        <p>Escritorio</p>
                    </li>
                    <li>
                        <p>Lavadero</p>
                    </li>
                    <li>
                        <p>Dependencia</p>
                    </li>
                    <li>
                        <p>Entrada Servicio</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
