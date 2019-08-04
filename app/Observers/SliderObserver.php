<?php

namespace App\Observers;

use App\Slider;

class SliderObserver
{
    /**
     * Handle the slider "created" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function created(Slider $slider)
    {
        //
    }

    /**
     * Handle the slider "updated" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function updated(Slider $slider)
    {
        //
    }

    /**
     * Handle the slider "deleting" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function deleting(Slider $slider)
    {

        $dir = config('images.slider_path') . $slider->filename;
        if (file_exists($dir)) {
            \Storage::deleteDirectory($dir);
        }
    }

    /**
     * Handle the slider "restored" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function restored(Slider $slider)
    {
        //
    }

    /**
     * Handle the slider "force deleted" event.
     *
     * @param  \App\Slider  $slider
     * @return void
     */
    public function forceDeleted(Slider $slider)
    {
        //
    }
}
