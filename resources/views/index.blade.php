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
   @include('components.home-slider', ['slides'=> $slides])
</section>
<!-- ##### Hero Area End ##### -->



<!-- ##### Propiedades en Venta Area Start ##### -->
<section id="real-estate_featured" class="featured-properties-area section-padding-20-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-title section-heading wow fadeInLeftBig">
                    <h2>Propiedades destacadas</h2>
                </div>
            </div>
        </div>

        <div class="row">

       
        @include('components.static.featured-buildings-box',
                [
                'detailView'=> 'components.static.feature-building-detail_1',
                'src'=> 'images/uploads/building-boxes/box_1.jpeg',
                'status'=> 'EN VENTA',
                'amb'=> '2-3-4 ambientes',
                'price'=> '169.000',
                'title'=> 'Edificio PH UH5',
                'address'=> 'Mariano Acha 3458 – Villa Urquiza - CABA']
        )

        @include('components.static.featured-buildings-box',
                [
                'detailView'=> 'components.static.feature-building-detail_2',
                'src'=> 'images/uploads/building-boxes/box_2.jpg',
                'status'=> 'EN VENTA',
                'amb'=> '2-3 ambientes',
                'price'=> '169.000',
                'title'=> 'Edificio G 3051',
                'address'=> 'Galvan 3051 – Villa Urquiza - CABA']
        )
         </div>

            
    </div>
</section>
<!-- ##### Propiedades en Venta Area End ##### -->

<!-- ##### Otras propiedades Area Start ##### -->
<section id="real-estate" class="featured-properties-area section-padding-0-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading-20 wow fadeIn">
                    <h2>Propiedades</h2>
                </div>
            </div>
        </div>

        <div class="row">

           @include('components.static.other-properties-box',
                  ['src'=> 'images/uploads/apartment-boxes/box_1.JPG',
                   'detailView'=> 'components.static.other-apartment-detail_1',
                   'status'=> 'EN VENTA',
                   'amb'=> '2 amb.',
                   'price'=> '169.000',
                   'title'=> 'UH5 | URQUIZA R',
                   'address'=> 'Capital Federal, Villa Urquiza'] 
                   )

           @include('components.static.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_2.png',
                   'detailView'=> 'components.static.other-apartment-detail_2',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 44.50 m2',
                   'price'=> '111.250',
                   'title'=> 'Monoambiente Modular',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )

           @include('components.static.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_3.png',
                   'detailView'=> 'components.static.other-apartment-detail_3',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 36.90 m2',
                   'price'=> '92.250',
                   'title'=> 'Monoambiente',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )

           @include('components.static.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_4.png',
                   'detailView'=> 'components.static.other-apartment-detail_4',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 66.10 m2',
                   'price'=> '213.080',
                   'title'=> '2 ambientes',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )
        
           @include('components.static.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_5.png',
                   'detailView'=> 'components.static.other-apartment-detail_5',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 76.10 m2',
                   'price'=> '222.860',
                   'title'=> '3 ambientes',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )







{{-- duped --}}
          
           @include('components.static.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_2.png',
                   'detailView'=> 'components.static.other-apartment-detail_2',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 44.50 m2',
                   'price'=> '111.250',
                   'title'=> 'Monoambiente Modular',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )

        

           @include('components.static.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_4.png',
                   'detailView'=> 'components.static.other-apartment-detail_4',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 66.10 m2',
                   'price'=> '213.080',
                   'title'=> '2 ambientes',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )
         @include('components.static.other-properties-box',
                  ['src'=> 'images/uploads/apartment-boxes/box_1.JPG',
                   'detailView'=> 'components.static.other-apartment-detail_1',
                   'status'=> 'EN VENTA',
                   'amb'=> '2 amb.',
                   'price'=> '169.000',
                   'title'=> 'UH5 | URQUIZA R',
                   'address'=> 'Capital Federal, Villa Urquiza'] 
                   )
   @include('components.static.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_3.png',
                   'detailView'=> 'components.static.other-apartment-detail_3',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 36.90 m2',
                   'price'=> '92.250',
                   'title'=> 'Monoambiente',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )
           @include('components.static.other-properties-box', 
                  ['src'=> 'images/uploads/apartment-boxes/box_5.png',
                   'detailView'=> 'components.static.other-apartment-detail_5',
                   'status'=> 'EN VENTA',
                   'amb'=> 'Sup. Total. 76.10 m2',
                   'price'=> '222.860',
                   'title'=> '3 ambientes',
                   'address'=> 'Galvan 3051 – Villa Urquiza'] )
        
        </div>

        
        </div>
    </div>
</section>
<!-- ##### Otras propiedades Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection
