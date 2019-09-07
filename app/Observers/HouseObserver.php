<?php

namespace App\Observers;

use App\House;

class HouseObserver
{
    /**
     * Handle the house "created" event.
     *
     * @param  \App\House  $house
     * @return void
     */
    public function created(House $house)
    {
        //
    }

    /**
     * Handle the house "updated" event.
     *
     * @param  \App\House  $house
     * @return void
     */
    public function updated(House $house)
    {
        //
    }

    /**
     * Handle the house "deleted" event.
     *
     * @param  \App\House  $house
     * @return void
     */
    public function deleted(House $house)
    {
      //
    }

    /**
     * Handle the house "deleting" event.
     *
     * @param  \App\House  $house
     * @return void
     */
    public function deleting(House $house)
    {
      // Check if house has related house models
      if( $house->images()->exists() ){
        $files = $house->images->pluck('path');
        \Storage::delete($files->toArray());
        $house->images()->delete();
      }
    }

    /**
     * Handle the house "restored" event.
     *
     * @param  \App\House  $house
     * @return void
     */
    public function restored(House $house)
    {
        //
    }

    /**
     * Handle the house "force deleted" event.
     *
     * @param  \App\House  $house
     * @return void
     */
    public function forceDeleted(House $house)
    {
        //
    }
}
