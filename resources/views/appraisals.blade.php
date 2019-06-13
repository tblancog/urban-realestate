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
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                            <input type="email" class="form-control" id="inputAddress2" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Estoy interesado en contactarlos" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
</section>