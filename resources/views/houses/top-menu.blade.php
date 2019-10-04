    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <div class="head-title">Arquitectura</div>
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ route('houses.index') }}"><img src="{{ asset('img/core-img/urban-houses.png') }}" alt=""></a>

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
                        <ul>
                            <li><a href="{{ route('houses.index') }}#proyectos">Proyecto</a></li>
                            <li><a href="{{ route('houses.index') }}#estudio">Estudio</a></li>
                            <li><a href="{{ route('houses.index') }}#servicios">Servicios</a></li>
                            <li><a href="{{ route('houses.index') }}#prensa">Prensa</a></li>
                            <li><a href="{{ route('articles.index',['section'=> 'houses']) }}">News</a></li>
                            <li><a href="{{ route('houses.index') }}#contacto">Contacto</a></li>
                        </ul>

                        {{-- <ul id="desktop-nav">
                            <li class="{{ Request::segment(1)=== 'investments' ? 'active' : '' }}"><a
                            href="{{ route('investments.index') }}">Inversiones</a></li>
                        <li class="{{ Request::segment(1)=== 'appraisals' ? 'active' : '' }}"><a
                                href="{{ route('appraisals.index') }}">Tasaciones</a></li>
                        <li class="{{ Request::segment(1)=== 'credits' ? 'active' : '' }}"><a
                                href="{{ route('credits.index') }}">Crédito</a></li>
                        <li class="{{ Request::segment(1)=== 'credits' ? 'active' : '' }}"><a
                                href="{{ route('credits.index') }}">News</a></li>
                        <li class="{{ Request::segment(1)=== 'contact' ? 'active' : '' }}"><a
                                href="{{ route('contact.index') }}">
                                <img class="link" src="{{ asset('img/core-img/icContacto.png') }}" alt="">
                            </a></li>

                        </ul> --}}

                        <ul id="mobile-nav">

                            <li><a href="{{ route('houses.index') }}#proyectos">Proyecto</a></li>
                            <li><a href="{{ route('houses.index') }}#constructora">Estudio</a></li>
                            <li><a href="{{ route('houses.index') }}#servicios">Servicios</a></li>
                            <li><a href="{{ route('houses.index') }}#prensa">Prensa</a></li>
                            {{-- <li><a href="{{ route('articles.index',['section'=> 'houses']) }}">News</a></li> --}}
                            <li><a href="{{ route('houses.index') }}#contacto">Contacto</a></li>

                        </ul>

                        <!-- Search Form -->
                        {{-- <div class="south-search-form">
                            <form action="#" method="post">
                                <input type="search" name="search" id="search"
                                    placeholder="Busca por nombre o dirección ...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div> --}}

                        <!-- Search Button -->
                        <!-- <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a> -->
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
