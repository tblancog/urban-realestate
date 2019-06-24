 <div class="single-hero-slide bg-img">
        <div class="hero-slides owl-carousel">
          @foreach($slides as $slide)
            <div class="single-hero-slide bg-img" 
                style="background-image: url({{ asset('/images/slides/slide_').$slide->index }}.jpeg);">
                <a href="#">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="hero-slides-content">
                                    <h2>{{ $slide->title }} </h2>
                                    <h4>{{ $slide->subtitle }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
          @endforeach
        </div>

        <!-- ##### Advance Search Area Start ##### -->
        <div id="search-area" class="south-search-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="advanced-search-form">
                            <!-- Search Title -->
                            <!-- <div class="search-title">
                            <p>Buscador de propiedades</p>
                        </div> -->
                            <!-- Search Form -->
                            <form action="#" method="post" id="advanceSearch">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" id="operation" placeholder="Comprar">
                                                <option>Venta</option>
                                                <option>Alquiler</option>
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
                                            <input type="input" class="form-control location" name="input"
                                                placeholder="Ingrese Zona, Localidad o Provincia" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-2">
                                        <!-- More Filter -->
                                        <!-- <div class="more-filter">
                                        <a href="#" id="moreFilter">+ Más filtros</a>
                                    </div> -->
                                        <!-- Submit -->
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn south-btn btn-4">Buscar &nbsp;<i
                                                    class="fa fa-lg fa-search"></i></button>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-2">
                                        <div class="form-group mb-0">
                                            <button class="btn south-btn">Consultas &nbsp;<i
                                                    class="fa fa-lg fa-envelope"></i></button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Advance Search Area End ##### -->
    </div>


  