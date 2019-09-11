    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <div class="head-title">Propiedades</div>
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ route('home.index') }}"><img src="{{ asset('img/core-img/logo.png') }}" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <img class="link menu" src="{{ asset('img/core-img/icMenu.png') }}" alt="">
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
                            <li class="{{ Request::segment(1)=== 'investments' ? 'active' : '' }}"><a
                                    href="{{ route('investments.index') }}">Inversiones</a></li>
                            <li class="{{ Request::segment(1)=== 'appraisals' ? 'active' : '' }}"><a
                                    href="{{ route('appraisals.index') }}">Tasaciones</a></li>
                            <li class="{{ Request::segment(1)=== 'credits' ? 'active' : '' }}"><a
                                    href="{{ route('credits.index') }}">Crédito</a></li>
                            <li class="{{ Request::segment(1)=== 'credits' ? 'active' : '' }}"><a
                                    href="#">News</a></li>
                            {{-- <li class="{{ Request::segment(1)=== 'credits' ? 'active' : '' }}"><a
                                href="{{ route('credits.index') }}">News</a></li> --}}
                            <li class="{{ Request::segment(1)=== 'contact' ? 'active' : '' }}"><a
                                    href="{{ route('contact.index') }}">
                                    <img class="link" src="{{ asset('img/core-img/icContacto.png') }}" alt="">
                                </a></li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdo wn-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{-- <span><i class="fa fa-bars"></i></span> --}}
                                    <img class="link menu" src="{{ asset('img/core-img/icMenu.png') }}" alt="">
                                    <div class="dropdown-menu py-2" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item my-2 aMenuMobile"
                                            href="{{ route('nosotros.index')  }}">Nosotros</a>
                                        <a class="dropdown-item my-2 aMenuMobile"
                                            href="{{ route('home.index')  }}#real-estate_featured">Propiedades<br>Destacadas</a>
                                        <a class="dropdown-item my-2 aMenuMobile"
                                            href="{{ route('home.index')  }}#real-estate">Propiedades</a>
                                        <a class="dropdown-item my-2 aMenuMobile"
                                            href="{{ route('credits.index') }}">Crédito<br>Hipotecario</a>
                                        <a class="dropdown-item my-2 aMenuMobile"
                                            href="{{ route('credits.index') }}">Financiación</a>
                                        <a class="dropdown-item my-2 aMenuMobile"
                                            href="{{ route('contact.index') }}">Contacto</a>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <ul id="mobile-nav">
                            <li><a href="{{ route('investments.index') }}">Inversiones</a></li>
                            <li><a href="{{ route('appraisals.index') }}">Tasaciones</a></li>
                            <li><a href="{{ route('credits.index') }}">Crédito</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="{{ route('contact.index') }}">Contacto</i></a></li>
                            <li><a href="{{ route('nosotros.index')  }}">Nosotros</a></li>
                            <li><a href="{{ route('home.index')  }}#real-estate">Propiedades</a></li>
                            <li><a href="{{ route('home.index')  }}#real-estate_featured">Destacados</a></li>
                        </ul>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
