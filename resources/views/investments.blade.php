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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="appraisals-title text-center">
                    <h2>{{ $config['title'] }}</h2>
                </div>
                <div class="appraisals-bottom text-center">
                    <p class="text-left">{{ $config['top_text'] }}</p>
                </div>

                {{-- Formulario --}}
                @if( $config['form'] === '1' )
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <h3 class="card-title">{{ $config['bottom_text'] }}</h3>
                            </div>
                            <div id="formInvestments" class="col-xs-12 col-lg-9">
                                @include ('partials.contact-form', ['btn_class' => 'pull-right'])
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                @forelse ( $buildings as $building )
                                <div class="media m-2">
                                    <div class="media-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 media-left">
                                                    <a href="{{ route('buildings.show', $building->slug) }}"><img
                                                            class="thumbDetail"
                                                            src="{{ $building->findOrDefaultImage() }}"></a>
                                                </div>
                                                <div class="col-md-6 media-mid">
                                                    <div class="info-card">
                                                        <a href="{{ route('buildings.show', $building->slug) }}">
                                                            <h5 class="mt-0"> {{ $building->title }}</h5>
                                                        </a>
                                                        <p>{{ $building->address }}
                                                        </p>
                                                    </div>
                                                    <div class="details-card">
                                                        <p>{{ str_limit($building->description, 200, '...') }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 media-right">
                                                    <div class="more-box">
                                                        <h5>Edificio</h5>
                                                        <div class="cta-more">
                                                            <a class="btn-more"
                                                                href="{{ route('buildings.show', $building->slug) }}">Ver
                                                                más</a>
                                                        </div>
                                                        <div class="deliver-box">
                                                            <h6>Entrega</h6>
                                                            <h6 class="deliver-date">Noviembre 2021</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @empty
                                <div class="col-12">No existen edificios por el momento </div>
                                @endforelse

                            </div>
                            {{ $buildings->links() }}
                        </div>


                        <div class="appraisals-bottom text-center">
                            <p>
                                {{ $config['bottom_text'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

</section>
{
