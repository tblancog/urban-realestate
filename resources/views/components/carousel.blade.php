@push('styles')
  <style>
    #myCarousel .list-inline {
    white-space:nowrap;
    overflow-x:auto;
}

#myCarousel .carousel-indicators {
    position: static;
    left: initial;
    width: initial;
    margin-left: initial;
    overflow-y: hidden;
    cursor: pointer;
    padding: 0.25em .25em;
}

#myCarousel .carousel-indicators > li {
    width: initial;
    height: initial;
    text-indent: initial;
}

#myCarousel .carousel-indicators > li.active img {
    opacity: 0.7;
}
  </style>
@endpush
<div class="container">
    <div class="row">
      <div class="dept-slider">
        <div class="col-lg-12" id="slider">
            <div id="myCarousel" class="carousel slide">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    {{-- <div class="active carousel-item" data-slide-number="0">
                        <img src="https://picsum.photos/id/1/600/350" class="img-fluid">
                    </div> --}}
                    <div class="active carousel-item" data-slide-number="0">
                        <img src="/images/uploads/building_1.jpg" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="1">
                        <img src="/images/uploads/building_2.jpg" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="2">
                        <img src="/images/uploads/building_3.jpg" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="3">
                        <img src="/images/uploads/building_4.jpg" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="4">
                        <img src="/images/uploads/building_5.jpg" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="5">
                        <img src="/images/uploads/building_6.jpg" class="img-fluid">
                    </div>
                    {{-- <div class="carousel-item" data-slide-number="1">
                        <img src="https://picsum.photos/id/2/600/350" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="2">
                        <img src="https://picsum.photos/id/3/600/350" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="3">
                        <img src="https://picsum.photos/id/4/600/350" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="4">
                        <img src="https://picsum.photos/id/5/600/350" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="5">
                        <img src="https://picsum.photos/id/6/600/350" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="6">
                        <img src="https://picsum.photos/id/7/600/350" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="7">
                        <img src="https://picsum.photos/id/8/600/350" class="img-fluid">
                    </div> --}}

                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                <!-- main slider carousel nav controls -->


                {{-- <ul class="carousel-indicators list-inline mx-auto">
                    <li class="list-inline-item active">
                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=one" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=two" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=three" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=four" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=five" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=six" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=seven" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
                            <img src="http://placehold.it/80x60&amp;text=eight" class="img-fluid">
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
      </div>
    </div>
    <!--/main slider carousel-->
</div>
  
@push('scripts')
  <script>
  
  </script>
@endpush