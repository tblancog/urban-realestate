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
            <div class="head-title">Arquitectura</div>
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo-developers.png" alt=""></a>

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
                            <li><a href="#">Home</a></li>
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

<!-- ##### Content Area Start ##### -->

<section>
    <div class="row details-view">
        <div class="col-md-7">
            <img src="img/bg-img/feature1.jpg" alt="">
        </div>
        <div class="col-md-5">
            <div class="details-info">
                <div class="details-name">
                    <h6>Proyecto</h6>
                    <h3>Torre quesevendarapido</h3>
                </div>
                <div class="details-place">
                    <h6>Ubicación</h6>
                    <h3>Palermo, Argentina</h3>
                </div>
                <div class="details-year">
                    <h6>Año</h6>
                    <h3>2017</h3>
                </div>
                <div class="details-description">
                    <h6>Descripción</h6>
                    <p>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mauris leo. Cras maximus
                        efficitur purus, ac ultrices leo vulputate in. Nam quis ullamcorper enim. Sed feugiat lacus dui,
                        at molestie massa tempor ut. Praesent vehicula nisi ac vestibulum scelerisque. Duis venenatis
                        quam sit amet magna lobortis sollicitudin. Vestibulum molestie mauris at ipsum ultrices, et
                        mattis ante fringilla. Aliquam at suscipit nunc, eu rutrum felis. Morbi accumsan posuere
                        tristique. Donec at nibh ut arcu finibus pretium. Nunc eu est id justo consectetur consectetur
                        suscipit vitae lorem. Vivamus vulputate venenatis ornare.

                        Donec ac efficitur ligula. Aliquam tincidunt a orci a vestibulum. Ut tristique erat nec libero
                        lobortis, varius rhoncus neque pharetra. Praesent convallis, enim tristique tincidunt cursus,
                        justo sem vehicula lacus, ut eleifend nisl dolor in lectus. Maecenas et justo id neque faucibus
                        commodo. Sed odio massa, tincidunt at euismod sit amet, tristique non nisi. Sed risus nibh,
                        laoreet vitae purus id, sollicitudin ornare justo. Sed ornare elementum augue, lacinia varius
                        mauris gravida nec. Nulla egestas sagittis erat. Aliquam quis orci rhoncus, porta urna quis,
                        posuere orci. Integer posuere lorem et augue elementum, vitae varius sapien tristique. Donec
                        viverra rutrum ex sed viverra.

                        Cras eget tincidunt massa.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
