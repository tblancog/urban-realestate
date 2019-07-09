@push('styles')
  <style>
    .classynav a:hover,
    .classynav a:focus
    {
      color: #dddddd; 
    }
  </style>
@endpush

<!-- ##### Front Header Area Start ##### -->
<header class="header-area">

    <!-- Front Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <div class="head-title">Propiedades</div>
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="/"><img src="{{ asset('img/core-img/logo.png') }}" alt=""></a>

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
                        <ul id="desktop-nav">
                            <li><a href="{{ route('buildings.list') }}">Inversiones</a></li>
                            <li><a href="{{ route('appraisals.index') }}">Tasaciones</a></li>
                            <li><a href="{{ route('credits.index') }}">Crédito</a></li>
                            <li><a href="{{ route('contact.index') }}"><i class="fa fa-lg fa-envelope"></i></a></li>
                            

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><i class="fa fa-bars"></i></span>
                                </a>
                                <div class="dropdown-menu py-2" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item my-2" href="{{ route('nosotros.index')  }}">Nosotros</a>
                                    <a class="dropdown-item my-2" href="{{ route('home.index')  }}#real-estate">Propiedades</a>
                                    <a class="dropdown-item my-2" href="{{ route('home.index')  }}#real-estate_featured">Destacados</a>
                                </div>
                            </li>




                            <!--
                            <li>
                                <div class="collapsible-menu hamburger">
                                    <input type="checkbox" id="menu">
                                    <label for="menu">Menu <span><i class="fa fa-bars"></i></span></label>
                                    
                                    <div class="menu-content">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Services</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            -->

                            <!-- 
                                <li class="hamb-toggler">
                                    <a class="hamburger" href="#">
                                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                                    </a>
                                    <ul class="list-top">
                                        <li><a href="{{ route('nosotros.index') }}">Nosotros</a></li>
                                        {{-- <li><a href="#">Propiedades destacadas</a></li>
                                        <li><a href="#">Propiedades</a></li>
                                        <li><a href="#">Crédito hipotecario</a></li>
                                        <li><a href="#">Financiación</a></li>
                                        <li><a href="#">Contacto</a></li>
                                        <li><a href="#">Mail</a></li>
                                        <li><a href="#">Celular</a></li> --}}
                                    </ul>
                                </li>
                            -->


                        </ul>

                        <ul id="mobile-nav">
                            <li><a href="{{ route('buildings.list') }}">Inversiones</a></li>
                            <li><a href="{{ route('appraisals.index') }}">Tasaciones</a></li>
                            <li><a href="{{ route('credits.index') }}">Crédito</a></li>
                            <li><a href="{{ route('contact.index') }}">Contácto</i></a></li>
                            <li><a href="{{ route('nosotros.index')  }}">Nosotros</a></li>
                            <li><a href="#real-estate">Propiedades</a></li>
                            <li><a href="#real-estate_featured">Destacados</a></li>
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
<!-- ##### Front Header Area End ##### -->