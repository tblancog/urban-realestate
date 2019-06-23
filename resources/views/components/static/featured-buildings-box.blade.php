<!-- Single Featured Property -->
<div class="col-12 col-lg-6 col-md-6 col-xl-6">
    <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
        <!-- Property Thumbnail -->
        <div class="property-thumb">
        <a href="{{ route('buildings.detail', $detailView) }}">
          <img src="{{ $src }}" alt=""> 
        
        </a>
            {{-- <a href="{{ route('buildings.detail', $f->slug) }}">
            <img src="img/bg-img/feature{{ $loop->iteration }}.jpg" alt=""> --}}
            {{-- <img src=" {{asset('storage/placeholder/'.$f->images[0]->filename ) }}"> --}}

            {{-- @if( $f->images && count($f->images) > 0 )

                          @if($f->images[0]->is_placeholder === '1')
                            <img src=" {{asset('storage/placeholder/'.$f->images[0]->filename ) }}">
            @else
            <img src=" {{asset('storage/properties/'.$f->slug.'/'.$f->images[0]->filename ) }}">
            @endif

            @endif
            </a>--}}
        </div>
        <!-- Property Content -->
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
</div>
