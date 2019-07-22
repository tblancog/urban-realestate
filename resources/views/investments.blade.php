@extends('layouts.front')

{{-- @push('styles')
  
@endpush --}}

@section('content')

<!-- ##### Front Header Area Start ##### -->
@include('partials.front-header')
<!-- ##### Front Header Area End ##### -->

<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<section class="investments-page">
    @forelse ( $buildings as $building )
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('buildings.show', $building->slug) }}">
                    <div class="box-img" src="{{ $building->findOrDefaultImage() }}">
                    </div>
                </a>
            </div>
            <div class="col-md-9">
                <div class="info-card">
                    <a href="{{ route('buildings.show', $building->slug) }}">
                        <h5 class="mt-0"> {{ $building->title }}</h5>
                    </a>
                    <p>{{ $building->address }} | {{ $building->apartments->first()->location }} </p>
                </div>
                <div class="details-card">
                    <p>{{ str_limit($building->description, 200, '...') }}</p>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">No existen edificios por el momento </div>
    @endforelse
</section>

@if( $config['form'] === '1' )
<div class="container mt-5">
    <div class="row">
        <div class="col-6 offset-2">
            @include ('partials.contact-form')
        </div>
    </div>
</div>
@endif
