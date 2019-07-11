<!-- Preloader -->
{{-- <div id="preloader">
    <div class="south-load"></div>
</div> --}}


<div class="col-12 col-md-6 col-xl-4">
    <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
        <!-- Property Thumbnail -->
        <div class="property-thumb">
            <a href="{{ route('buildings.show', $detailView) }}">
              <img src="{{ $src }}" alt=""></a>
        </div>
        <!-- Property Content -->
        <div class="property-content">
            <div class="ribbon ribbon-top-left">
                <span>{{ $status }}</span>
            </div>
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
</div>


