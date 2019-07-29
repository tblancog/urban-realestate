<?php

namespace App\Observers;

use App\Apartment;

class ApartmentObserver
{
    /**
     * Handle the apartment "created" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function created(Apartment $apartment)
    {
        //
    }

    /**
     * Handle the apartment "updated" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function updated(Apartment $apartment)
    {
        //
    }

    /**
     * Handle the apartment "deleted" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function deleted(Apartment $apartment)
    {
      //
    }
    
    /**
     * Handle the apartment "deleting" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function deleting(Apartment $apartment)
    {
      // Before deleting apartment make sure it deletes its image folder and apartment image relations as well
      $dir = config('images.properties_upload_path').$apartment->slug;
      if(file_exists($dir)){
        \Storage::deleteDirectory($dir);
      }

      // Check if apartment has related apartment models
      if( $apartment->images()->exists() ){
        $apartment->images()->delete();
      }
    }

    /**
     * Handle the apartment "restored" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function restored(Apartment $apartment)
    {
        //
    }

    /**
     * Handle the apartment "force deleted" event.
     *
     * @param  \App\Apartment  $apartment
     * @return void
     */
    public function forceDeleted(Apartment $apartment)
    {
        //
    }
}
