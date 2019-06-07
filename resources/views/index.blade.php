@extends('layouts.front')

@section('content')
<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <!-- <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                    <a href="mailto:contact@southtemplate.com">contact@southtemplate.com</a>
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
                    </div>
                </div>
            </div>
        </div> -->

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <div class="head-title">Propiedades</div>
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Inversiones</a></li>
                            <li><a href="#">Tasaciones</a></li>
                            <li><a href="#">Crédito</a></li>
                            <li><a href="#"><i class="fa fa-lg fa-envelope"></i></a></li>
                            <li class="hamb-toggler">
                                <a class="hamburger" href="#">
                                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                                </a>
                                <ul class="list-top">
                                    <li><a href="#">Nosotros</a></li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Search Form -->
                        <div class="south-search-form">
                            <form action="#" method="post">
                                <input type="search" name="search" id="search"
                                    placeholder="Busca por nombre o dirección ...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Search Button -->
                        <!-- <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a> -->
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <!-- <h2>TORRE ACHA</h2>
      <p>Una oportunidad para disfrutar<br/>
         de un efdicio de calidad<br/>
         en una zona estratégica</p> -->
    <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-1.jpg);">
        <div class="hero-slides owl-carousel">
            <!-- Property Title -->
            <!-- <div class="property-title">
                <h2>Torre Acha</h2>
                <h4>Una oportunidad para disfrutar de un edificio de calidad en una zona estratégica</h4>
            </div> -->
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>Torre Acha</h2>
                                <h4>Una oportunidad para disfrutar de un edificio de calidad en una zona estratégica
                                </h4>

                                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">Proyectos inmobiliarios</h2> -->
                                <!-- <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Info</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">La casa de tus sueños</h2> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">Proyectos en marcha</h2> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ##### Advance Search Area Start ##### -->
        <div id="search-area" class="south-search-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="advanced-search-form">
                            <!-- Search Title -->
                            <!-- <div class="search-title">
                            <p>Buscador de propiedades</p>
                        </div> -->
                            <!-- Search Form -->
                            <form action="#" method="post" id="advanceSearch">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="operation" placeholder="Comprar">
                                                <option>Venta</option>
                                                <option>Alquiler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="type">
                                                <option>Departamento</option>
                                                <option>Casa</option>
                                                <option>Local</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 col-lg-4">
                                        <div class="form-group wrapper">
                                            <input type="input" class="form-control location" name="input"
                                                placeholder="Ingrese Zona, Localidad o Provincia" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-2">
                                        <!-- More Filter -->
                                        <!-- <div class="more-filter">
                                        <a href="#" id="moreFilter">+ Más filtros</a>
                                    </div> -->
                                        <!-- Submit -->
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn south-btn btn-4">Buscar &nbsp;<i
                                                    class="fa fa-lg fa-search"></i></button>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-2">
                                        <div class="form-group mb-0">
                                            <button class="btn south-btn">Consultas &nbsp;<i
                                                    class="fa fa-lg fa-envelope"></i></button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Advance Search Area End ##### -->

</section>
<!-- ##### Hero Area End ##### -->



<!-- ##### Propiedades en Venta Area Start ##### -->
<section id="real-estate_featured" class="featured-properties-area section-padding-20-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-title section-heading wow fadeIn">
                    <h2>Propiedades destacadas</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-6 col-lg-6">
                <div class="single-featured-property mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature1.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="top-row">
                            <p class="bot-status">En obra</p>
                            <p class="bot-finance">Con financiación</p>
                        </div>
                        <div class="bot-row">
                            <p class="bot-name">Edificio Galván 3051</p>
                            <p class="bot-price">desde USD 92.250.-</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-6 col-lg-6">
                <div class="single-featured-property mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature2.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="top-row">
                            <p class="bot-status">En obra</p>
                            <p class="bot-finance">Con financiación</p>
                        </div>
                        <div class="bot-row">
                            <p class="bot-name">Edificio Galván 3051</p>
                            <p class="bot-price">desde USD 92.250.-</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-6 col-lg-6">
                <div class="single-featured-property mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature3.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="top-row">
                            <p class="bot-status">En obra</p>
                            <p class="bot-finance">Con financiación</p>
                        </div>
                        <div class="bot-row">
                            <p class="bot-name">Edificio Galván 3051</p>
                            <p class="bot-price">desde USD 92.250.-</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-6 col-lg-6">
                <div class="single-featured-property mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature4.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="top-row">
                            <p class="bot-status">En obra</p>
                            <p class="bot-finance">Con financiación</p>
                        </div>
                        <div class="bot-row">
                            <p class="bot-name">Edificio Galván 3051</p>
                            <p class="bot-price">desde USD 92.250.-</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- ##### Propiedades en Venta Area End ##### -->

<!-- ##### Otras propiedades Area Start ##### -->
<section class="featured-properties-area section-padding-0-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading-20 wow fadeIn">
                    <h2>Propiedades</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature3.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">

                        <div class="ribbon ribbon-top-left">
                            <span>VENTA</span>
                        </div>

                        <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                        </div>
                        <div class="other-bot">
                            <p class="bot-status">Departamento en venta.</p>
                            <p class="bot-address">Mariano Acha 3458.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature3.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="ribbon ribbon-top-left">
                            <span>VENTA</span>
                        </div>
                        <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                        </div>
                        <div class="other-bot">
                            <p class="bot-status">Departamento en venta.</p>
                            <p class="bot-address">Mariano Acha 3458.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature6.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="ribbon ribbon-top-left">
                            <span>VENTA</span>
                        </div>
                        <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                        </div>
                        <div class="other-bot">
                            <p class="bot-status">Departamento en venta.</p>
                            <p class="bot-address">Mariano Acha 3458.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature6.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="ribbon ribbon-top-left">
                            <span>VENTA</span>
                        </div>
                        <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                        </div>
                        <div class="other-bot">
                            <p class="bot-status">Departamento en venta.</p>
                            <p class="bot-address">Mariano Acha 3458.</p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature6.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="ribbon ribbon-top-left">
                            <span>VENTA</span>
                        </div>
                        <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                        </div>
                        <div class="other-bot">
                            <p class="bot-status">Departamento en venta.</p>
                            <p class="bot-address">Mariano Acha 3458.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <a href="/detail"><img src="img/bg-img/feature3.jpg" alt=""></a>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <div class="ribbon ribbon-top-left">
                            <span>VENTA</span>
                        </div>
                        <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                        </div>
                        <div class="other-bot">
                            <p class="bot-status">Departamento en venta.</p>
                            <p class="bot-address">Mariano Acha 3458.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Otras propiedades Area End ##### -->

<!-- ##### Footer Area Start ##### -->

<section>
    <div class="footer">
        <div class="container footer-info">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/core-img/logo.png" alt="">
                </div>
                <div class="col-md-4 footer-ad-telf">
                    <div class="footer-address">
                        <h3>Dirección</h3>
                        <p>Direccion completa</p>
                        <p>Calle y número de la oficina</p>
                    </div>
                    <div class="footer-telf">
                        <h3>Telefonos</h3>
                        <p>Teléfonos de Contacto</p>
                        <p>Fijo + Celular</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-social">
                        <h3>Facebook</h3>
                        <a href="#">facebook/urbanpropiedades/AR</a>
                        <h3>Instagram</h3>
                        <a href="#">instagram/urbanpropiedades/AR</a>
                        <h3>Whatsapp</h3>
                        <a href="#">whatsapp/urbanpropiedades/AR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row footer-pages">
                <div class="col-md-4 page-box">
                    <div class="footer-header-dev">
                        <h4>Arquitectura</h4>
                    </div>
                    <div class="logo-box">
                        <img src="img/core-img/urban_dev_logo_square.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 page-box">
                    <div class="footer-header-houses">
                        <h4>Constructora</h4>
                    </div>
                    <div class="logo-box">
                        <img src="img/core-img/urban_houses_logo_square.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 page-box">
                    <div class="footer-header-real">
                        <h4>Propiedades</h4>
                    </div>
                    <div class="logo-box">
                        <img src="img/core-img/urban_real_logo_square.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
