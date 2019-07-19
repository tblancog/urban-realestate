 <div class="single-hero-slide bg-img">
        <div class="hero-slides owl-carousel">
          @foreach($slides as $slide)
            <div class="single-hero-slide bg-img" 
                style="background-image: url({{ asset('/images/slides/').'/'.$slide->filename }});">
                  <a href="{{ $slide->link }}">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
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
                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="status" id="status" placeholder="Comprar">
                                                <option>Venta</option>
                                                <option>Alquiler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select name="type" class="form-control" id="type">
                                                <option>Departamento</option>
                                                <option>Casa</option>
                                                <option>Local</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                          <select name="location" class="form-control" id="location">
                                              <option value="">Barrio</option>
                                              <option value="caba">CABA</option>
                                              <option value="provincia">Provincia de Buenos Aires</option>
                                              {{-- @foreach ($locations as $location) --}}
                                                  {{-- <option value="{{ $location->location }}">{{ $location->location }}</option> --}}
                                              {{-- @endforeach --}}
                                          </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-1">
                                        <!-- Submit -->
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn south-btn">
                                              <div class="img-search"></div>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-1">
                                    <a href="{{ route('contact.index') }}" class="btn south-btn btn-4 btn-5 d-none d-sm-block
">
                                          {{-- <i class="fa fa-lg fa-envelope"></i> --}}
                                          <div class="img-contact"></div>
                                        </a>
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

  