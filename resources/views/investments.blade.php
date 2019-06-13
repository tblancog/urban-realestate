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
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edificios</h3>
                        <div class="card-tools">
                            <button class="btn btn-success">Crear Nuevo <i class="fas fa-user-plus fa-fw"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="media">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <!-- <img class="d-block w-100" src="//via.placeholder.com/170x100/0000FF"
                                        alt="First slide"> -->
                                </div>
                                <div class="carousel-item">
                                    <!-- <img class="d-block w-100" src="//via.placeholder.com/170x100/FF00FF"
                                        alt="Second slide"> -->
                                </div>
                                <div class="carousel-item">
                                    <!-- <img class="d-block w-100" src="//via.placeholder.com/170x100/330088"
                                        alt="Third slide"> -->
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                    <a href="https://placeholder.com"><img src="https://via.placeholder.com/250x180"></a> 
                                    </div>
                                    <div class="col-md-6">                              
                                        <div class="info-card">
                                            <h5 class="mt-0">Edificio 5426</h5>
                                            <!--<a href="#">
                                                <i class="fa fa-edit blue"></i>
                                            </a>
                                            
                                            <a href="#">
                                                <i class="fa fa-trash red"></i>
                                            </a>-->
                                        </div>
                                        <div class="details-card">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pulvinar ullamcorper. Sed sed egestas ex. Nulla varius at odio non aliquet. Cras maximus a justo non facilisis.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="more-box">
                                            <h5>Edificio</h5>
                                            <div class="cta-more">
                                                    <a class="btn-more" href="#">Ver más</a>            
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

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <pagination :data="buildings" @pagination-change-page="getResults"></pagination>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
        
</section>