@extends('layouts.front')

@section('content')

<div class="container-fluid contentDetailHd">

    <div class="row first-row"> <!-- start row 1 -->

        <div class="col-md-6 col-sm-12">
            <div id="myCarousel" class="carousel slide">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    @foreach ($project->images as $key => $img )
                    <div class="{{ $key == 0 ? 'active' : '' }} carousel-item" data-slide-number="{{ $key }}">
                        <img src="{{ asset($img->path) }}" class="img-fluid">
                    </div>
                    @endforeach
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- main slider carousel nav controls -->


                <!-- main slider carousel nav controls -->
                <ul class="carousel-indicators list-inline mx-auto py-2 pull-left">
                    @foreach ( $project->images as $key => $img )
                    <li class="list-inline-item active" data-index="{{ $key }}">
                        <a class="carousel-thumbnail {{ $key == 0 ? 'selected' : '' }}" data-slide-to="{{ $key }}"
                            data-target="#myCarousel" onclick="goToSlide({{ $key }})">
                            <img src="{{ asset($img->path) }}" class="img-fluid" style="width: 80px; height: 60px;">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="detailsHD">
                <h6>Obra</h6>
                <h3>{{ $project->project_name }}</h3>
            </div>
            <div class="detailsHD">
                <h6>Superficie</h6>
                <h3>{{ $project->year }}</h3>

            </div>
            <div class="detailsHD">
                <h6>Ubicación</h6>
                <h3>{{ $project->location }}</h3>
            </div>
            <div class="detailsHD">
                <h6>Servicios</h6>
                <h3>{{ $project->services }}</h3>
            </div>
            <div class="detailsHD">
                <h6>Descripción</h6>
                <h3>{!! nl2br($project->description) !!}</h3>

            </div>
        </div>

      </div> <!-- end row 1 -->

</div> <!-- end container-fluid -->

@include('partials.front-footer')

@endsection
