<section class="col-lg-6 col-xl-6">
    <div class="box mt-4">
        <a href="{{ route('buildings.show', $building->slug) }}">
            <div class="box-img" style="background-image: url({{ count($building->images) > 0 ? $building->images->first()->path : '' }});">
                <div class="box-info px-2 py-1">
                    <div class="row col-12">
                        <div class="col-6">
                            <div class="status text-uppercase">{{ $building->status }}</div>
                            <div class="title">{{ $building->title }}</div>
                        </div>
                        <div class="col-6">
                            <div class="text-right finance text-uppercase">{{ 'Con financiación'}}</div>
                            <div class="text-right price"> {{ $building->from_price ? 'desde  ' : '' }} USD
                                @convert($building->price) </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>
