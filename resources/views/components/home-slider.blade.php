 <div class="single-hero-slide bg-img">
        <div class="hero-slides owl-carousel">
          @foreach($slides as $slide)
            <div class="single-hero-slide bg-img"
                style="background-image: url({{ asset($slide->path) }});">
                  <a href="">
                    <div class="container h-100">
                        <div class="hero-slides-content">
                            <h2>{{ $slide->title }}</h2>
                            <h4>{{ $slide->subtitle }}</h4>
                        </div>
                        <div class="row h-100 align-items-center title-box">
                        </div>
                    </div>
                </a>
            </div>
          @endforeach
        </div>

        {{ $slot }}
    </div>

