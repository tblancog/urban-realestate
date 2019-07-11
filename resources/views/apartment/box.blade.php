<!-- Preloader -->
{{-- <div id="preloader">
    <div class="south-load"></div>
</div> --}}

<div class="col-12 col-md-6 col-xl-4">
    <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
        <!-- Property Thumbnail -->
        <div class="property-thumb">
            <a href="{{ route('apartments.show', $apartment->slug) }}">
              <img src="{{ is_file($apartment->getImgPath($apartment->images[0]->filename)) ? 
                                        $apartment->getImgPath($apartment->images[0]->filename) : 
                                        Faker\Factory::create()->imageUrl($width = 640, $height = 480) }}" alt="">
            </a>
        </div>
        <!-- Property Content -->
        <div class="property-content">
            <div class="ribbon ribbon-top-left">
                <span>{{ $apartment->status }}</span>
            </div>
            <div class="other-top">
                <p class="top-amb">{{ $apartment->rooms }} amb.</p>
                <div class="top-area">
                  @if($apartment->from_price)
                    <span>Desde </span>
                  @endif
                  USD <b>@convert($apartment->price)</b>  
                </div>
            </div>
            <div class="other-bot">
                <p class="bot-status">{{ $apartment->title }}</p>
                <p class="bot-address">{{ $apartment->address }}</p>
            </div>
        </div>
    </div>
</div>


