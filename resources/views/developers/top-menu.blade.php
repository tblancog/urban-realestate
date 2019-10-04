    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <div class="head-title">Constructora</div>
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ route('developers.index') }}"><img src="{{ asset('img/core-img/urban_developers.png') }}" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu classy-menu-others">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav classynav2">
                        <ul>
                            <li><a href="{{ route('developers.index') }}#projects">Proyecto</a></li>
                            <li><a href="{{ route('developers.index') }}#constructora">Constructora</a></li>
                            <li><a href="{{ route('developers.index') }}#servicios">Servicios</a></li>
                            <li><a href="{{ route('developers.index') }}#prensa">Prensa</a></li>
                            <li><a href="{{ route('articles.index',['section'=> 'developers']) }}">News</a></li>
                            <li><a href="{{ route('developers.index') }}#contacto">Contacto</a></li>
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
