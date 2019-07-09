<!-- Single Featured Property -->
<div class="col-12 col-lg-6 col-md-6 col-xl-6">
    <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
        <!-- Property Thumbnail -->
        <div class="property-thumb">
        <a href="{{ route('buildings.detail', $detailView) }}">
          <img src="{{ $src }}" alt=""> 
        
        </a>


        <div class="property-content">
            <div class="ribbon ribbon-top-left">
                <span>{{ $status }}</span>
            </div>
            
            {{-- <div class="other-top">
                            <p class="top-amb">3 amb.</p>
                            <p class="top-area">150 m<sup>2</sup></p>
                          </div> --}}
            <div class="other-top">
                <p class="top-amb">{{ $amb }}</p>
                <div class="top-area">USD {{ $price }}</div>
            </div>
            <div class="other-bot">
                <p class="bot-status">{{ $title }}</p>
                <p class="bot-address">{{ $address }}</p>
            </div>
        </div>



        </div>
        <!-- Property Content -->

    </div>
</div>
