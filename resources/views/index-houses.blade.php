@extends('layouts.front')

@section('content')

<!-- ##### Front Header Area Start ##### -->
{{-- @include('partials.front-header') --}}
<!-- ##### Front Header Area End ##### -->

<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <div class="head-title">Constructora</div>
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/urban-houses.png" alt=""></a>

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
                    <div class="classynav classynav2">
                        <ul>
                            <li><a href="#proyectos">Proyecto</a></li>
                            <li><a href="#estudio">Estudio</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#prensa">Prensa</a></li>
                            <li><a href="#contacto">Contacto</a></li>
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
    <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-1.jpg);">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/houses/slides/1.jpg);">

            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</section>
<!-- ##### Hero Area End ##### -->



<!-- ##### Propiedades en Venta Area Start ##### -->
<section class="featured-properties-area"> 
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="project-title project-title2 section-heading wow fadeInUp">
                    <h2 id="proyectos">Proyectos</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h4 class="content content2">Torre</h4>
                            <h2 class="title title2">Quesevenda</h2>                            
                            <h5 class="content txtInfo">+ info</h5>
                        </div>
                        <img src="img/developers/1.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>                           
                            <h5 class="content txtInfo">+ info</h5>
                        </div>
                        <img src="img/developers/2.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>
            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>                           
                            <h5 class="content txtInfo">+ info</h5>
                        </div>
                        <img src="img/developers/3.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>                           
                            <h5 class="content txtInfo">+ info</h5>
                        </div>
                        <img src="img/developers/4.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>                           
                            <h5 class="content txtInfo">+ info</h5>
                        </div>
                        <img src="img/developers/5.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>                           
                            <h5 class="content txtInfo">+ info</h5>
                        </div>
                        <img src="img/developers/6.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>


        </div>
    </div>
</section>
<!-- ##### Propiedades en Venta Area End ##### -->



<!-- ##### Developers Section ##### -->
<section class="developers-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                                
                <div class="col-12 secDevelopers">

                    <p class="txtOtherSection"> <img src="img/core-img/imgHouses.jpg" align="left"  alt="Houses"><b id="estudio">Constructora</b> <br>URBAN DEVELOPERS es una empresa constructora que brinda a sus clientes un sistema integral de soluciones, abarcando todos los servicios necesarios para la materialización, puesta en marcha, desarrollo y mantenimiento de obras. Las prestaciones ofrecidas por la empresa le permiten brindar soluciones constructivas en obras civiles e industriales de infraestructura urbana y regional.
                    </p>
                    
                    <div class="clear"></div>   
                    
                    <p class="txtOtherSection">
                        <b >Arquitectura Integral</b>
                    </p> 
                    
                    <p class="txtOtherSection">
                        El concepto de arquitectura integral se funda no solo en la idea de proyecto y dirección de obra, sino que abarca también la definición de perfil del inversor, desde la búsqueda de tierra para el desarrollo de emprendimientos y hasta la comercialización de los mismos. El estudio interviene y planifica todas y cada una de las etapas del desarrollo inmobiliario. Urban Houses forma parte de Urban GROUP, donde también participan Urban Developers, desarrolladora, Damero Obras Constructora y Urban Real Estate que es la comercializadora.  
                    </p>

                    <p class="txtOtherSection">
                        <img src="img/core-img/imgHouses2.jpg" class="imgLarge"  alt="Developers">  
                    </p>

                    <p class="txtOtherSection"> 
                    Desde su constitución el estudio ha encarado la realización tanto de emprendimientos inmobiliarios, como así también de viviendas unifamiliares, arquitectura comercial y hospitalaria, buscando brindar un alto nivel de diseño y gestión con el objetivo de materializar proyectos eficientes tanto para el inversor como para el usuario final. Para ello tiene como objeto primordial un especial tratamiento del espacio arquitectónico, un diseño de vanguardia con una moderna estética, poniendo especial énfasis tanto en los detalles como en la elección de materiales nobles y de primera calidad.
                    </p>
                    
                    <p class="txtOtherSection"> <img class="imgRight" src="img/core-img/imgHouses3.jpg" align="right"  alt="Houses"><b >Socios</b> <br>Se encuentra formado por el Arquitecto Horacio Agustín Fondevila Salcedo, graduado de la UBA en el año 2004; habiendo obtenido los posgrados de “Desarrollo de emprendimientos inmobiliarios” en el año 2006 y de “Project management” en el año 2007, ambos en la UB, y por sus socios, los Arq. Leonardo Adrián Aguilar y S.A.U.  que además de sus tareas en el campo de la construcción y el diseño, realizan tareas de investigación y docencia en la facultad de arquitectura de la UBA.
                    </p>

                </div>
                
                <div class="clear"></div>

                

                <div class="col-12 wow fadeInUp titleOhterSection">
                    <h2 id="servicios" class="text-left">Servicios</h2>
                </div>
                <div class="col-12 developers-content">
                    <p class="txtOtherSection">Urban houses ofrece un completo portfolio con los servicios que el cliente requiere para el desarrollo de un proyecto concentrando en una sola firma las diferentes fases para su ejecución, desde la concepción y/o etapa de diseño hasta  la coordinación y desarrollo del mismo: 
                    </p>

                    <div class="clear"><br></div>

                    <ul class="ulOtherSection ulOtherSection2">
                        <li>Búsqueda y adquisición de tierras</li>
                        <li>Análisis de mercado con factibilidad técnica, económica y financiera</li>
                        <li>Desarrollos de negocios inmobiliarios</li>
                        <li>Estrategias de financiamiento</li>
                        <li>Anteproyecto y Proyecto</li>
                        <li>Documentación</li>
                        <li>Presupuesto de obra</li>
                        <li>Pliegos y contratos de obra</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-12 wow fadeInUp titleOhterSection">
                <h2 class="text-center">Prensa</h2>
            </div>
            <div id="prensa" class="col-12 pressSection">
                <ul>
                    <li><a href=""><img src="img/core-img/imgDevelopers-prensa1.jpg" alt="Prensa"></a></li>
                    <li><a href=""><img src="img/core-img/imgDevelopers-prensa2.jpg" alt="Prensa"></a></li>
                    <li><a href=""><img src="img/core-img/imgDevelopers-prensa3.jpg" alt="Prensa"></a></li>
                </ul>
            </div>
            
            <div class="col-12 wow fadeInUp titleOhterSection">
                <h2 id="contacto" class="text-center">Contacto</h2>
            </div>

            <div class="col-12 pressSection">
                  @include ('partials.contact-form')
            </div>

        </div>
    </div>
</section>


<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection

{{-- @push('scripts')
@endpush --}}