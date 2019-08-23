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
            <div class="head-title">Constructora</div>
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/urban_developers.png" alt=""></a>

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
                            <li><a href="#">Proyecto</a></li>
                            <li><a href="#">Constructora</a></li>
                            <li><a href="#">Servicios</a></li>
                            <li><a href="#">Contacto</a></li>
                            <!-- <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 1</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 2</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 3</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Headline 4</li>
                                            <li><a href="#">Mega Menu Item 1</a></li>
                                            <li><a href="#">Mega Menu Item 2</a></li>
                                            <li><a href="#">Mega Menu Item 3</a></li>
                                            <li><a href="#">Mega Menu Item 4</a></li>
                                            <li><a href="#">Mega Menu Item 5</a></li>
                                        </ul>
                                    </div>
                                </li> 
                                <li><a href="contact.html">Contact</a></li>
                                -->
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
                <!--<div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2>Torre Acha</h2>
                                <h4>Una oportunidad para disfrutar de un edificio de calidad en una zona estratégica</h4>

                                <!-- <h2 data-animation="fadeInUp" data-delay="100ms">Proyectos inmobiliarios</h2> -->
                <!-- <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Info</a> -->
                <!--</div>
                        </div>
                    </div>
                </div>-->
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

        <!--<div id="search-area" class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
        <!-- <div class="search-title">
                            <p>Buscador de propiedades</p>
                        </div> -->
        <!-- Search Form -->
        <!--<form action="#" method="post" id="advanceSearch">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-2">
                                    <div class="form-group">
                                        <select class="form-control" id="operation" placeholder="Comprar">
                                            <option>Comprar</option>
                                            <option>Vender</option>
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
                                        <input type="input" class="form-control location" name="input" placeholder="Ingrese Zona, Localidad o Provincia"/>
                                    </div> 
                                </div>

                                <div class="col-12 col-lg-2">
                                    <!-- More Filter -->
        <!-- <div class="more-filter">
                                        <a href="#" id="moreFilter">+ Más filtros</a>
                                    </div> -->
        <!-- Submit -->
        <!--<div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn btn-4">Buscar &nbsp;<i class="fa fa-lg fa-search"></i></button>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-2">
                                  <div class="form-group mb-0">
                                         <button class="btn south-btn">Consultas &nbsp;<i class="fa fa-lg fa-envelope"></i></button>
                                    </div>
                                </div>
                                
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
        <!-- ##### Advance Search Area End ##### -->

</section>
<!-- ##### Hero Area End ##### -->



<!-- ##### Propiedades en Venta Area Start ##### -->
<section class="featured-properties-area 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-title project-title2 section-heading wow fadeInUp">
                    <h2>Proyectos</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h4 class="content content2">Torre</h4>
                            <h2 class="title title2">Quesevenda</h2>                            
                            <h5 class="content txtInfo">+ info</h5>
                        </div>
                        <img src="img/bg-img/feature1.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>
                        </div>
                        <img src="img/bg-img/feature2.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>
            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>
                        </div>
                        <img src="img/bg-img/feature3.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>
                        </div>
                        <img src="img/bg-img/feature4.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>
                        </div>
                        <img src="img/bg-img/feature4.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>

            <!-- Single Featured Property -->
            <div class="project-grid col-12 col-md-4 col-xl-4 col-lg-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="property-info">
                            <h2 class="title">Torre Quesevenda</h2>
                            <h4 class="content">by Horace</h4>
                        </div>
                        <img src="img/bg-img/feature4.jpg" alt="">
                    </div>
                    <!-- Property Content -->

                </div>
            </div>


        </div>
    </div>
</section>
<!-- ##### Propiedades en Venta Area End ##### -->

<!-- ##### Developers Section ##### -->
<section class="developers-section section-padding-0-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="developers-title section-heading-20 wow fadeInUp">
                    <h2>Constructora</h2>
                </div>
                <div class="developers-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in facilisis ipsum. Donec accumsan
                        tortor non feugiat rutrum. Aliquam id faucibus nunc. Etiam congue volutpat urna, non dignissim
                        ex faucibus eu. Sed dictum sem at orci viverra volutpat. In non mattis diam. Sed eu libero a est
                        tempus euismod. Sed quis libero posuere, auctor ex non, suscipit arcu. Nunc efficitur ac velit
                        at aliquam. Proin in libero porta, euismod quam vel, rhoncus nisi. Vivamus ac arcu feugiat,
                        sagittis orci eu, pharetra ante. Nulla euismod odio ac dolor bibendum, non consequat magna
                        porta. Duis porttitor varius massa cursus viverra.</p>
                    <h6>Concepto</h6>
                    <p>Sed bibendum eros tincidunt aliquam malesuada. Vivamus tempus tortor non arcu pretium, nec
                        blandit purus condimentum. Duis libero nibh, vulputate id pellentesque vitae, sollicitudin quis
                        ligula. Integer a auctor felis. Duis ultrices interdum suscipit. Donec rutrum enim sit amet
                        congue condimentum. Quisque convallis justo non ultricies posuere. Donec aliquet elementum
                        convallis. In neque dolor, pellentesque ut magna ac, elementum vestibulum libero. Sed turpis
                        eros, dictum id ipsum sed, elementum tincidunt ex. Nam suscipit commodo erat ac semper.</p>
                    <p>Fusce at felis egestas, venenatis magna et, pulvinar nunc. Mauris vel consequat eros. Etiam diam
                        massa, sodales at tortor et, semper imperdiet mauris. Sed sed erat erat. Mauris in dolor
                        rhoncus, pellentesque augue non, rutrum mauris. Curabitur velit nibh, luctus at dolor et,
                        ullamcorper condimentum erat. Nam a leo mauris. Pellentesque sed felis egestas, luctus lectus
                        non, faucibus lorem. Praesent tempor dui ut velit vulputate egestas quis vel odio. Nullam mattis
                        ullamcorper luctus. Etiam euismod rutrum lacus, a mattis est. Aliquam dignissim eleifend
                        imperdiet. Donec condimentum ex ac libero posuere malesuada. In mauris risus, molestie id
                        pretium sed, consequat ac dolor. Curabitur sed felis feugiat, tincidunt purus et, bibendum
                        dolor. Nunc eget consectetur erat, ac porttitor ligula.</p>
                    <h6>Socios</h6>
                    <p>Nullam nec mattis tellus. Phasellus semper luctus nulla nec suscipit. Nullam ut condimentum est.
                        Phasellus faucibus euismod lorem, at eleifend velit elementum eu. Fusce elementum tortor leo,
                        sed luctus lorem accumsan quis. Nunc libero urna, commodo a lectus eu, lacinia venenatis lorem.
                        Nunc et nibh eu dui eleifend finibus. Ut non tortor id orci gravida sollicitudin sagittis et
                        purus. Donec tincidunt, tortor in aliquet porttitor, odio ante ultrices risus, a ullamcorper
                        purus magna in urna. Aliquam efficitur gravida diam, eu imperdiet elit. Sed et eros id ligula
                        mollis consectetur. Phasellus diam felis, tempor in ultricies ut, consectetur ac libero.</p>
                </div>
                <div class="developers-title developers-heading section-padding-20-20 wow fadeInUp">
                    <h2>Servicios</h2>
                </div>
                <div class="developers-content">
                    <p>Donec molestie nec eros nec finibus. Fusce gravida bibendum placerat. Praesent cursus justo sit
                        amet risus volutpat vehicula nec quis magna. Integer blandit quis lacus sed ultricies.
                        Pellentesque sed arcu quis tellus tempor cursus. Praesent a neque eget eros vulputate porta.
                        Nunc vel vehicula sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec
                        rhoncus lacus facilisis tortor commodo sollicitudin. Integer et pretium nisl. Integer commodo
                        tortor dolor, vitae luctus turpis tincidunt non. Pellentesque habitant morbi tristique senectus
                        et netus et malesuada fames ac turpis egestas:</p>
                    <ul>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                        <li>Lorem ipsum dolor sit. </li>
                    </ul>
                </div>
                <div class="developers-title developers-heading section-padding-20-20 wow fadeInUp">
                    <h2>Prensa</h2>
                </div>
            </div>
            <div class="col-12 col-md-6 press-img">
                <div class="property-thumb">
                    <img src="http://lorempixel.com/426/308/city/1/" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 press-img">
                <div class="property-thumb">
                    <img src="http://lorempixel.com/426/308/city/3/" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-developers">
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="#" alt="">
                <p>+5411 4523-4418</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="#" alt="">
                <p>info@urbanhouses.com.ar</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="#" alt="">
                <p>Pacheco 2709 6"B" (C1431FMI) CABA</p>
            </div>
        </div>
    </div>
</section>
@endsection
