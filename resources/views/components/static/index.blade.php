@extends('layouts.front')

@section('content')
<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<!-- ##### Front Header Area Start ##### -->
@include('partials.front-header')
<!-- ##### Front Header Area End ##### -->


<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="single-hero-slide bg-img" style="background-image: url(images/uploads/static/static_1.jpeg);">
        <div class="hero-slides owl-carousel">
            <div class="single-hero-slide bg-img" style="background-image: url(images/uploads/static/static_1.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>EDIFICIO PH UH5</h2>
                                <h4>Una oportunidad para disfrutar de un edificio en una zona estratégica</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(images/uploads/static/static_2.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>EDIFICIO PH UH5</h2>
                                <h4>Moderno y funcional con terraza y parrilla propia. ¡Vení a conocerlo!
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(images/uploads/static/static_3.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>EDIFICIO PH UH5</h2>
                                <h4>Estética y confort en cada detalle. Ameneties para disfrutar en familia y con amigos </h4>
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
<section id="real-estate_featured" class="featured-properties-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-title section-heading my-5 wow fadeInLeftBig">
                    <h2>Propiedades destacadas</h2>
                </div>
            </div>
        </div>

        <div class="row">

       
        @include('components.featured-buildings-box',
                [
                'detailView'=> 'components.feature-building-detail_1',
                'src'=> 'images/uploads/building-boxes/box_1.jpeg',
                'status'=> 'EN VENTA',
                'amb'=> '2-3-4 ambientes',
                'price'=> '169.000',
                'title'=> 'Edificio PH UH5',
                'address'=> 'Mariano Acha 3458 Villa Urquiza - CABA']
        )

        @include('components.featured-buildings-box',
                [
                'detailView'=> 'components.feature-building-detail_2',
                'src'=> 'images/uploads/building-boxes/box_2.jpg',
                'status'=> 'EN VENTA',
                'amb'=> '2-3 ambientes',
                'price'=> '169.000',
                'title'=> 'Edificio G 3051',
                'address'=> 'Galvan 3051 – Villa Urquiza - CABA ']
        )
         </div>

            
    </div>
</section>
<!-- ##### Propiedades en Venta Area End ##### -->

<!-- ##### Otras propiedades Area Start ##### -->
<section class="featured-properties-area section-padding-0-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeIn">
                    <h2>Propiedades</h2>
                </div>
            </div>
        </div>

        <div class="row">

           @include('components.other-properties-box',
                  ['src'=> 'images/uploads/apartment-boxes/box_1.JPG',
                   'detailView'=> 'components.other-apartment-detail_1',
                   'status'=> 'EN VENTA',
                   'amb'=> '2 amb.',
                   'price'=> '169.000',
                   'title'=> 'UH5 | URQUIZA R',
                   'address'=> 'Capital Federal, V. Urquiza | Urquiza R'] 
                   )

           @include('components.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_2.JPG',
                   'detailView'=> 'components.other-apartment-detail_2',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 44.50',
                   'price'=> '111.250',
                   'title'=> 'Monoambiente modular',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )

           @include('components.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_3.JPG',
                   'detailView'=> 'components.other-apartment-detail_3',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 36.90 m2',
                   'price'=> '92.250',
                   'title'=> 'Monoambiente modular',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )

        
        </div>

        
        </div>
    </div>
</section>
<!-- ##### Otras propiedades Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection
