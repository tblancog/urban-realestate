 <div class="single-hero-slide bg-img">
        <div class="hero-slides owl-carousel">
          @foreach($slides as $slide)
            <div class="single-hero-slide bg-img" 
                style="background-image: url({{ asset('/images/slides/').'/'.$slide->filename }});">
                  <a href="{{ $slide->link }}">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center title-box">
                            <div class="col-12">
                                <div class="hero-slides-content">
                                    <h2>{{ $slide->title }}</h2>
                                    {{-- <h4>{{ $slide->subtitle }}</h4> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
          @endforeach
        </div>

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
                                          <option>Venta</option>
                                          <option>Alquiler</option>
                                        </select>
                                      </div>
                                    </div>
                                    {{-- Tipo --}}
                                    <div class="col-md-6 col-lg-2 px-0">
                                        <div class="form-group">
                                            <select name="type" class="form-control" id="type">
                                                <option>Departamento</option>
                                                <option>Casa</option>
                                                <option>Local</option>
                                            </select>
                                        </div>
                                    </div>
                                     {{-- Barrios --}}
                                    <div class="col-md-6 col-lg-4 px-0">
                                        <div class="form-group">
                                          <select name="location" class="form-control" id="location">
                                              <option value="">Ingrese Zona, Localidad o Provincia</option>
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
                                            <a href="{{ route('contact.index') }}" class="btn">
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
    </div>


@push('scripts')
  <script>
      // When the user scrolls the page, execute myFunction 
      window.onscroll = function() {checkScroll()};

      // Get the header
      var header = document.getElementById("search-area");

      // Get the offset position of the navbar
      // var sticky = header.offsetTop;
      var sticky = 624;

      // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
      function checkScroll() {
        if (window.pageYOffset > sticky) {
          header.classList.add("fixed");
        } else {
          header.classList.remove("fixed");
        }
      }
  </script>

@endpush

  