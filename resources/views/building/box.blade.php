<section class="col-lg-6 col-xl-6">
  <div class="box">
  <a href="{{ route('buildings.show', $building->slug) }}">
    <div class="box-img" 
         style="background-image: url('{{ $building->getImgPath($building->images[0]->filename) }}');">
         <div class="box-info px-2 py-1">
           <div class="row">
             <div class="col-6">
               <div class="col-12 status text-uppercase">{{ $building->status }}</div>
               <div class="col-12 title">{{ $building->title }}</div>
             </div>
             <div class="col-6">
               <div class="col-12 text-right finance text-uppercase">{{ 'Con financiación'}}</div>
               <div class="col-12 text-right price"> {{ $building->from_price ? 'desde  ' : '' }} USD @convert($building->price) </div>
             </div>
           </div>
         </div>
    </div>
  </a>
</div>
</section>