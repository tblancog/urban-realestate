@extends('layouts.front')

@section('content')

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

@include('partials.front-footer')
@endsection
