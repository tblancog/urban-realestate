<div class="col-12 col-md-6 col-xl-4">
    <div class="single-featured-property other-properties mb-50 wow fadeIn" data-wow-delay="100ms">
      <!-- Property Thumbnail -->
      <div class="property-thumb">
          <div class="ribbon">
          <span class="@status_class($apartment->status)">@status_show($apartment->status)</span>
          </div>
            <a href="{{ route('apartments.show', $apartment->slug) }}">
              <img src="{{ count($apartment->images) > 0 ? $apartment->images->first()->path : '' }}" alt="">
            </a>
        </div>
        <!-- Property Content -->
        <div class="property-content">

            <div class="other-top">
                <p class="top-amb">{{ $apartment->rooms }} amb.</p>
                <div class="top-area">
                  {{ $apartment->area }}m <sup>2</sup>
                </div>
            </div>
            <div class="other-bot">
                <p class="bot-status">{{ $apartment->title }}</p>
                <p class="bot-address text-capitalize">{{ $apartment->building->address }}, {{ $apartment->building->location }}</p>
            </div>
        </div>
    </div>
</div>
