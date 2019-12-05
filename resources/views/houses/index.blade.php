@extends('layouts.front')

@section('content')

<section class="hero-area">
    @component('components.home-slider', ['slides'=> $slides,
    'section'=> 'houses' ])
    @endcomponent
</section>

{{-- <section class="hero-area">
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
</section> --}}

<!-- ##### Propiedades en Venta Area Start ##### -->
<section id="proyectos" class="featured-properties-area">
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
                    <a href="{{ route('houses.show', $item->slug) }}">
                        <div class="property-thumb">
                            <div class="property-info">
                                <h4 class="content content2">Proyecto</h4>
                                <h2 class="title title2">{{ $item->project_name }}</h2>
                                <h5 class="content txtInfo">+ info</h5>
                            </div>
                            <img src="{{ count($item->images) > 0 ? asset($item->images->first()->path) : '' }}" alt="">
                        </div>
                    </a>
                    <!-- Property Content -->
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>
<!-- ##### Propiedades en Venta Area End ##### -->



<!-- ##### Developers Section ##### -->
<section class="developers-section">
    <div class="container">
        <div class="">
            <div class="col-12">

                <div class="col-12 secDevelopers">

                    <p class="txtOtherSection"> <img src="{{ asset('img/core-img/imgHouses.jpg') }}" align="left"
                            alt="Houses"><b id="estudio">Estudio</b> <br>Urban houses es un estudio de arquitectura
                        integral orientado a la realización de obras civiles, comerciales e industriales, integrado por
                        los arquitectos Horacio Fondevila, Leonardo Aguilar y asociados. Fundado en el año 2006, por
                        profesionales con experiencia en diversas áreas de la arquitectura y en empresas constructoras
                        de primera línea, con amplia práctica en la construcción, desarrollo y gestión de obras de
                        envergadura.
                    </p>

                    <div class="clear"></div>

                    <p class="txtOtherSection">
                        <b>Arquitectura Integral</b>
                    </p>

                    <p class="txtOtherSection">
                        El concepto de arquitectura integral se funda no solo en la idea de proyecto y dirección de
                        obra, sino que abarca también la definición de perfil del inversor, desde la búsqueda de tierra
                        para el desarrollo de emprendimientos y hasta la comercialización de los mismos. El estudio
                        interviene y planifica todas y cada una de las etapas del desarrollo inmobiliario. Urban Houses
                        forma parte de Urban GROUP, donde también participan Urban Developers, desarrolladora, Damero
                        Obras Constructora y Urban Real Estate que es la comercializadora.
                    </p>

                    <p class="txtOtherSection">
                        <img src="{{ asset('img/core-img/imgHouses2.jpg') }}" class="imgLarge" alt="Developers">
                    </p>

                    <p class="txtOtherSection">
                        Desde su constitución el estudio ha encarado la realización tanto de emprendimientos
                        inmobiliarios, como así también de viviendas unifamiliares, arquitectura comercial y
                        hospitalaria, buscando brindar un alto nivel de diseño y gestión con el objetivo de materializar
                        proyectos eficientes tanto para el inversor como para el usuario final. Para ello tiene como
                        objeto primordial un especial tratamiento del espacio arquitectónico, un diseño de vanguardia
                        con una moderna estética, poniendo especial énfasis tanto en los detalles como en la elección de
                        materiales nobles y de primera calidad.
                    </p>

                    <p class="txtOtherSection"> <img class="imgRight" src="{{ asset('img/core-img/imgHouses3.jpg') }}"
                            align="right" alt="Houses"><b>Socios</b> <br>Se encuentra formado por el Arquitecto Horacio
                        Agustín Fondevila Salcedo, graduado de la UBA en el año 2004; habiendo obtenido los posgrados de
                        “Desarrollo de emprendimientos inmobiliarios” en el año 2006 y de “Project management” en el año
                        2007, ambos en la UB, y por sus socios, los Arq. Leonardo Adrián Aguilar y S.A.U. que además de
                        sus tareas en el campo de la construcción y el diseño, realizan tareas de investigación y
                        docencia en la facultad de arquitectura de la UBA.
                    </p>

                </div>

                <div class="clear"></div>



                <div class="col-12 wow fadeInUp titleOhterSection">
                    <h2 id="servicios" class="text-left">Servicios</h2>
                </div>
                <div class="col-12 developers-content">
                    <p class="txtOtherSection">Urban houses ofrece un completo portfolio con los servicios que el
                        cliente requiere para el desarrollo de un proyecto concentrando en una sola firma las diferentes
                        fases para su ejecución, desde la concepción y/o etapa de diseño hasta la coordinación y
                        desarrollo del mismo:
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

            {{-- <div class="col-12 wow fadeInUp titleOhterSection">
                <h2 class="text-center">Prensa</h2>
            </div>
            @include('articles.slider', $articles) --}}


            <div class="col-12 wow fadeInUp titleOhterSection">
                <h2 id="contacto" class="text-center">Contacto</h2>
            </div>

            <div class="col-12 pressSection">
                @include('forms.contact-form-hd', ['action_route'=>route('mail.houses')])
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .carousel-inner .carousel-item.active,
    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
        display: flex;
    }

    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
        transform: translateX(33%);
    }

    .carousel-inner .carousel-item-left.active,
    .carousel-inner .carousel-item-prev {
        transform: translateX(-33%);
    }

    .carousel-inner .carousel-item-right,
    .carousel-inner .carousel-item-left {
        transform: translateX(0);

    }

</style>
@endpush

@push('scripts')
<script>
    $('#recipeCarousel').carousel({
        interval: 10000
    })

    $('.carousel .carousel-item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < 3; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });

</script>
@endpush
@endsection
