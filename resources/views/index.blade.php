@extends('layouts.front')

@section('content')
<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<!-- ##### Front Header Area Start ##### -->
@include('partials.front-header')
<!-- ##### Front Header Area End ##### -->


 <!-- ##### Advance Search Area Start ##### -->
@include('components.search-area')
<!-- ##### Advance Search Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
   @include('components.home-slider', ['slides'=> $slides])
</section>
<!-- ##### Hero Area End ##### -->



<!-- ##### Propiedades en Venta Area Start ##### -->
<section id="real-estate_featured" class="featured-properties-area my-10"> 
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-12">
                <div class="project-title section-heading wow my-5 fadeInLeftBig">
                    <h2>Propiedades destacadas</h2>
                </div>
            </div>
        </div>

        <div class="row">
          
          {{-- Building box --}}
          @foreach ($buildings as $building)
            @include('building.box', ['building'=> $building ])
          @endforeach

         </div>

            
    </div>
</section>
<!-- ##### Propiedades en Venta Area End ##### -->

<!-- ##### Otras propiedades Area Start ##### -->
<section id="real-estate" class="featured-properties-area section-padding-0-50">
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-12">
                <div class="section-heading my-5 wow fadeInRightBig">
                    <h2 class="text-uppercase">Propiedades</h2>
                </div>
            </div>
        </div>

        <div class="row">

          {{-- Apartment box --}}
          @foreach ($apartments as $apartment)
            @include('apartment.box', $apartment)
          @endforeach
                   
{{-- 
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







          duped 
          
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
                   'address'=> 'Galvan 3051 – Villa Urquiza'] ) --}}
        
        </div>

        
        </div>
    </div>
    <div class="">
        <div class="row logosUrbanFooter">
            <div class="col-4 colLogos">
                <a href="" target="_blank"><img src="img/core-img/icLogoFooter1.png" alt=""></a>
                <p style="background:#007d3f;">PROPIEDADES</p>
            </div>
            <div class="col-4 colLogos">
                <a href="" target="_blank"><img src="img/core-img/icLogoFooter2.png" alt=""></a>
                <p  style="background:#b62126;">CONSTRUCTORA</p>
            </div>
            <div class="col-4 colLogos">
                <a href="" target="_blank"><img src="img/core-img/icLogoFooter3.png" alt=""></a>
                <p style="background:#006fcb;">ARQUITECTURA</p>
            </div>
        </div>
    </div>
</section>
<!-- ##### Otras propiedades Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('partials.front-footer')

@endsection
    