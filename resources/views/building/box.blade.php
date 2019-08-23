<section class="col-lg-6 col-xl-6">
    <div class="box mt-4">
        <a href="{{ route('buildings.show', $building->slug) }}">
            <div class="box-img" style="background-image: url({{ count($building->images) > 0 ? $building->images->first()->path : '' }});">
                <div class="box-info px-2 py-1">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="status text-uppercase">@status_show($building->status)</div>
                            <div class="title">{{ $building->title }}</div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="finance text-uppercase">{{ 'Con financiación'}}</div>
                            <div class="price"> {{ $building->from_price ? 'desde  ' : '' }} USD
                                @convert($building->price) </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>
