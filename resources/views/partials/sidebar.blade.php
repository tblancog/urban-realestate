<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('./img/core-img/logo-only.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Backoffice</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="mt-3 d-flex">
                <div class="image">
                    <img src="{{ asset('./img/profile.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#abi" class="d-block">
                        {{Auth::user()->name}}
                        <p>{{ 'usuario' }}</p>
                        {{-- <p>{{Auth::user()->type}}</p> --}}
                    </a>
                </div>
            </div>
            <div >
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <i class="nav-icon fa fa-power-off red"></i>
                            {{ __('Salir') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                @can('isAdmin')
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-cog green"></i>
                        <p>
                            Management
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/users" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Users</p>
                            </router-link>
                        </li>

                    </ul>
                </li>

                @endcan
                <li class="nav-item">
                    <router-link to="/sliderAdmin" class="nav-link">
                        <i class="nav-icon fa fa-images green"></i>
                        <p>
                            Slideshow
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/buildingAdmin" class="nav-link">
                        <i class="nav-icon fa fa-building green"></i>
                        <p>
                            Propiedades
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/apartmentAdmin" class="nav-link">
                        <i class="nav-icon fas fa-home green"></i>
                        <p>
                            Unidades
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/investmentAdmin" class="nav-link">
                        <i class="nav-icon fa fa-dollar-sign green"></i>
                        <p>
                            Inversiones
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/appraisalAdmin" class="nav-link">
                        <i class="nav-icon fa fa-percentage green"></i>
                        <p>
                            Tasaciones
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/creditAdmin" class="nav-link">
                        <i class="nav-icon fa fa-money-check-alt green"></i>
                        <p>
                            Creditos
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/contactAdmin" class="nav-link">
                        <i class="nav-icon fa fa-envelope green"></i>
                        <p>
                            Contacto
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <br>
                    <h3 class="text-uppercase text-center">Developers</h3>
                    <router-link to="/projectsAdmin" class="nav-link">
                        <i class="nav-icon fa fa-home green"></i>
                        <p>
                            Proyectos
                        </p>
                    </router-link>
                </li>

                  <li class="nav-item">
                    <br>
                    <h3 class="text-uppercase text-center">Houses</h3>
                    <router-link to="/housesAdmin" class="nav-link">
                        <i class="nav-icon fa fa-home green"></i>
                        <p>
                            Casas
                        </p>
                    </router-link>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
