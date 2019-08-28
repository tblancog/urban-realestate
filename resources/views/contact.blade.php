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

<section class="appraisals-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="appraisals-title">
                <h2>{{ $config['title'] }}</h2>
              </div>
               <div class="appraisals-bottom text-center">
                <p>{!! nl2br( $config['top_text'] ) !!}</p>
              </div>
                @if( $config['form'] === '1' )
                  @include ('partials.contact-form')
                @endif
                <div class="appraisals-bottom text-center">
                   <p>
                       {{ $config['bottom_text'] }}
                   </p>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- ##### Front footer Area Start ##### -->
@include('partials.front-footer')
<!-- ##### Front footer Area End ##### -->
