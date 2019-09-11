@extends('layouts.front')

@section('content')

<!-- ##### Front Header Area Start ##### -->
@include('partials.top-menu')


<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>



<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-1.jpg);">
        <div class="hero-slides owl-carousel">
            <div class="single-hero-slide bg-img" style="background-image: url(img/slider-img/slider-1.jpg);">
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


</section>
<!-- ##### Hero Area End ##### -->



<!-- ##### Propiedades en Venta Area Start ##### -->
<section id="projects" class="featured-properties-area">
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="project-title project-title2 section-heading wow fadeInUp">
                    <h2>Proyectos</h2>
                </div>
            </div>
        </div>

        <div class="row">
             <!-- Single Featured Property -->
             @foreach ($items as $item)
                <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="single-featured-property wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <a href="{{ route('developers.show', $item->slug) }}">
                        <div class="property-thumb">
                            <div class="property-info">
                                <h4 class="content content2">Proyecto</h4>
                                <h2 class="title title2">{{ $item->project_name }}</h2>
                                    <h5 class="content txtInfo">+ info</h5>
                                </div>
                                <img src="{{ count($item->images) > 0 ? $item->images->first()->path : '' }}" alt="">
                            </div>
                        </a>
                        <!-- Property Content -->

                    </div>
                </div>

             @endforeach
        </div>
        <div class="row pull-right mr-3 paginadoHome">
            <div class="col-lg-1">{{ $items->fragment('projects')->links() }}</div>
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
                    <p id="constructora" class="txtOtherSection"> <img src="{{ asset('img/core-img/imgDevelopers.jpg') }}" align="left"  alt="Developers"><b >Constructora</b> <br>URBAN DEVELOPERS es una empresa constructora que brinda a sus clientes un sistema integral de soluciones, abarcando todos los servicios necesarios para la materialización, puesta en marcha, desarrollo y mantenimiento de obras. Las prestaciones ofrecidas por la empresa le permiten brindar soluciones constructivas en obras civiles e industriales de infraestructura urbana y regional.
                    </p>

                    <div class="clear"></div>
                    <p class="txtOtherSection">
                        Somos una empresa 20 años de trayectoria, enfocada en la construcción, gerenciamiento y negocios inmobiliarios. Creemos en el trabajo en equipo como herramienta para superar obstáculos y general alianzas positivas. <br>
                        Trabajamos día a día en una gestión integral que cumpla con los plazos pactados, la optimización de costos, la calidad de nuestro producto y, como prioridad, generar la confianza de nuestros clientes. Nuestro trabajo es innovador, moderno, de calidad y enfocado en la excelencia.
                    </p>

                    <p class="txtOtherSection">
                        <img src="{{ asset('img/core-img/imgDevelopers2.jpg') }}" class="imgLarge"  alt="Developers">
                    </p>

                    <p class="txtOtherSection">
                    En URBAN DEVELOPERS  entendemos que “LA OBRA” no es una simple construcción o remodelación, sino que representa sueños, esfuerzos, proyectos y objetivos de nuestros clientes.
                    </p>

                    <p class="txtOtherSection">
                        Tanto la calidad de nuestras obras como los profesionales con los que trabajamos, hacen que nuestra empresa sea líder en el rubro. Lo hacemos con profesionalismo y entrega, atendiendo las necesidades de quienes nos eligen para que sus proyectos y sueños se vean reflejados al final de nuestro trabajo.
                    </p>
                    <p class="txtOtherSection">
                    Convertimos ideas en proyectos con historia.
                    </p>

                </div>

                <div class="col-12 wow fadeInUp titleOhterSection">
                    <h2 id="servicios" class="text-left">Servicios</h2>
                </div>
                <div class="col-12 developers-content">
                    <p class="txtOtherSection">URBAN DEVELOPERS ofrece un completo portfolio con los servicios que el cliente requiere para la construcción de un proyecto concentrando en una sola firma las diferentes fases para su ejecución:
                    </p>

                    <ul class="ulOtherSection">
                        <li>Construcción</li>
                        <li>Dirección de obra.</li>
                        <li>Administración de obra.</li>
                        <li>Gerenciamiento de obra</li>
                        <li>Servicio postventa</li>
                        <li>Comercialización</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 wow fadeInUp titleOhterSection">
                <h2 id="prensa" class="text-center">Prensa</h2>
            </div>
            <div class="col-12 pressSection">
                <ul>
                    <li><a href=""><img src="{{ asset('img/core-img/imgDevelopers-prensa1.jpg') }}" alt="Prensa"></a></li>
                    <li><a href=""><img src="{{ asset('img/core-img/imgDevelopers-prensa2.jpg') }}" alt="Prensa"></a></li>
                    <li><a href=""><img src="{{ asset('img/core-img/imgDevelopers-prensa3.jpg') }}" alt="Prensa"></a></li>
                </ul>
            </div>

            <div class="col-12 wow fadeInUp titleOhterSection">
                <h2 id="contacto" class="text-center">Contacto</h2>
            </div>

            <div class="col-12 pressSection">
                  @include ('forms.contact-form-hd')
            </div>

        </div>
    </div>
</section>


<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection

{{-- @push('scripts')
@endpush --}}
