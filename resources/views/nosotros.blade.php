@extends('layouts.front')

@section('content')

@include('partials.front-header')
<div id="preloader">
    <div class="south-load"></div>
</div>

<section class="nosotros-page">
  <div class="HeaderNosotros">
    <img src="img/core-img/imgNosotros.jpg" alt="Nosotros">
  </div>
  <div class="col-12 boxLaEmpresa">
    <h2 class="titNosotros">LA EMPRESA</h2>
    <p class="txtNosotros">Somos una empresa de trayectoria y vanguardia, con mas de 15 años de experiencia en el mercado, con fuerte impronta en negocios y desarrollos inmobiliarios. Llevamos adelante esta actividad con gran dedicación y profesionalismo, guardando los más altos estándares de excelencia, competitividad y ética profesional. Una empresa 100% responsable, con amplia experiencia laboral avocada a sus clientes,Hoy, al igual que en cada momento de nuestra trayectoria nuestros clientes nos eligen una y otra vez por ser sinónimo de profesionalismo, eficiencia y confiabilidad sumándole a ello nuestra actividad como desarrolladores de negocios inmobiliarios, cumpliendo ampliamente las expectativas de nuestros clientes. Nuestro crecimiento es constante, aprovechando lo ultimo en Tecnologia y Comunicación manteniéndonos en el mercado con una visión futura, actual y dinámica.</p>
  </div>
  <div class="col-12 boxLaEmpresaBottom">
      <p class="txtNosotros"> <img src="img/core-img/imgServicios.jpg" align="right"  alt="Nosotros">Brindamos un conjunto de servicios con gran eficiencia acompañando al mercado y a las necesidades de cada cliente. Contamos con un equipo idóneo de profesionales para tasar el valor real de los inmuebles y establecer los criterios adecuados de cotización, respetando el patrimonio del cliente que nos confía su propiedad.
      </p>
     
      <p class="txtNosotros">
      Nos eligen porque ofrecemos gestión general en comercialización y marketing; prensa y publicidad en los medios más prestigiosos ya sea convencionales o actuales; diseño y desarrollo de la cartelería, gráfica y publicidad expandida; análisis, toma de acción y reporte de la gestión de marketing; concreción de metas; transparencia e Interacción permanente con cada cliente.
      </p>
      <p class="txtNosotros">
        <span class="font-bigger">Servicios</span><br>Brindamos un conjunto de servicios con gran eficiencia acompañando al mercado y a las
        necesidades de cada cliente. Contamos con un equipo idóneo de profesionales para tasar el valor real de los inmuebles y establecer los criterios adecuados de cotización, respetando el patrimonio del cliente que nos confía su propiedad.
      </p>

      <p class="txtNosotros"> 
        Nos eligen porque ofrecemos gestión general en comercialización y marketing; prensa y publicidad en los medios más prestigiosos ya sea convencionales o actuales; diseño y desarrollo de la cartelería, gráfica y publicidad expandida; análisis, toma de acción y reporte de la gestión de marketing; concreción de metas; transparencia e Interacción permanente con cada cliente.
      </p>
      <br>

      
      <p class="txtNosotros">
        <span class="font-bigger">Asesoramiento</span><br>  Otorgamos asesoramiento legal, comercial y financiero ya que consideramos de gran importancia brindar lo necesario en materia de soporte jurídico y contable al momento de la compra – venta de una propiedad. Estamos dispuestos a brindarle la mayor cantidad de herramientas, para que pueda tomar las mejores decisiones a la hora de concretar operaciones inmobiliarias.
      </p>

      <br><br>
  </div>
    
</section>

@include('partials.front-footer')

@endsection
