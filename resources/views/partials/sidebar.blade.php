<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="./img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Backoffice</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#abi" class="d-block">
                    {{Auth::user()->name}}
                    <p>{{ 'usuario' }}</p>
                    {{-- <p>{{Auth::user()->type}}</p> --}}
                </a>
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
                            Sliders
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/buildingAdmin" class="nav-link">
                        <i class="nav-icon fa fa-building green"></i>
                        <p>
                            Edificios
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/apartmentAdmin" class="nav-link">
                        <i class="nav-icon fas fa-home green"></i>
                        <p>
                            Departamentos
                        </p>
                    </router-link>
                </li>
                {{-- <li class="nav-item">
                    <router-link to="#abd" class="nav-link">
                        <i class="nav-icon fa fa-money-check-alt green"></i>
                        <p>
                            Inversiones
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="#abe" class="nav-link">
                        <i class="nav-icon fas fa-percent green"></i>
                        <p>
                            Créditos
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="#abf" class="nav-link">
                        <i class="nav-icon fas fa-calculator green"></i>
                        <p>
                            Tasaciones
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="#abg" class="nav-link">
                        <i class="nav-icon fas fa-rss green"></i>
                        <p>
                            News
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="#abh" class="nav-link">
                        <i class="nav-icon fas fa-envelope green"></i>
                        <p>
                            Contacto
                        </p>
                    </router-link>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-power-off red"></i>
                        <p>
                            {{ __('Salir') }}
                        </p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>