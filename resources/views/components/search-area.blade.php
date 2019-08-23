 <!-- ##### Advance Search Area Start ##### -->
<div  class="south-search-area">
    <div class="container">
        <div class="row">
            <div id="search-area" class="search-box">
                <div class="advanced-search-form">
                    <!-- Search Title -->
                    <!-- <div class="search-title">
                    <p>Buscador de propiedades</p>
                </div> -->
                    <!-- Search Form -->
              <form action="{{ route('search.index') }}" method="GET" id="advanceSearch">
                        @csrf
                        <div class="row">
                            {{-- Operación --}}
                            <div class="col-md-6 col-lg-2 px-0">
                              <div class="form-group">
                                <select class="form-control" name="status" id="status" placeholder="Comprar">
                                  <option>Operacion</option>
                                  <option value="En_venta">Venta</option>
                                  <option value="En_Alquiler">Alquiler</option>
                                </select>
                              </div>
                            </div>
                            {{-- Tipo --}}
                            <div class="col-md-6 col-lg-2 px-0">
                                <div class="form-group">
                                    <select name="type" class="form-control" id="type">
                                        <option>Tipo</option>
                                        <option>Departamento</option>
                                        {{-- <option>Casa</option>
                                        <option>Local</option> --}}
                                    </select>
                                </div>
                            </div>
                              {{-- Barrios --}}
                            <div class="col-md-6 col-lg-4 px-0">
                                <div class="form-group">
                                  <select name="location" class="form-control" id="location">
                                      <option value="">Zona</option>
                                      @foreach ($locations as $location)
                                          <option value="{{ $location->location }}">{{ $location->location }}</option>
                                      @endforeach
                                  </select>
                                </div>
                            </div>

                            {{-- Submit --}}
                            <div class="px-0">
                              <div class="form-inline form-search">
                                <div class="img-search">
                                  <input type="image" name="submit" src="{{ asset('/img/core-img/icSearch.png') }}" />
                                </div>
                              </div>
                            </div>

                            {{-- Contact --}}
                            <div class="px-0">
                              <div class="form-inline form-contact">
                                  <div class="form-contact">
                                    <a href="mailto:info@urbanrealestate.com.ar" class="btn">
                                      <div class="img-contact">
                                        <img src="{{ asset('/img/core-img/icMailto.png') }}" alt="">
                                      </div>
                                    </a>
                                  </div>
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
