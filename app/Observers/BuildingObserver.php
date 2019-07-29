<?php

namespace App\Observers;

use App\Building;

class BuildingObserver
{
    /**
     * Handle the building "created" event.
     *
     * @param  \App\Building  $building
     * @return void
     */
    public function created(Building $building)
    {
        //
    }

    /**
     * Handle the building "updated" event.
     *
     * @param  \App\Building  $building
     * @return void
     */
    public function updated(Building $building)
    {
        //
    }

    /**
     * Handle the building "deleted" event.
     *
     * @param  \App\Building  $building
     * @return void
     */
    public function deleted(Building $building)
    {
      //
    }
    
    /**
     * Handle the building "deleting" event.
     *
     * @param  \App\Building  $building
     * @return void
     */
    public function deleting(Building $building)
    {
      // Before deleting building make sure it deletes its image folder and building image relations as well
      $dir = config('images.properties_upload_path').$building->slug;
      if(file_exists($dir)){
        \Storage::deleteDirectory($dir);
      }

      // Check if building has related building models
      if( $building->images()->exists() ){
        $building->images()->delete();
      }
    }

    /**
     * Handle the building "restored" event.
     *
     * @param  \App\Apartment  $building
     * @return void
     */
    public function restored(Apartment $building)
    {
        //
    }

    /**
     * Handle the building "force deleted" event.
     *
     * @param  \App\Apartment  $building
     * @return void
     */
    public function forceDeleted(Apartment $building)
    {
        //
    }
}
